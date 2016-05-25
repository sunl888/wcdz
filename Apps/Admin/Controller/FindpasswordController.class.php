<?php
namespace Admin\Controller;
use Think\Controller;

class FindpasswordController extends Controller{
	/**
	 * 忘记密码
	 */
	public function index(){
		$User = D ("User");
		$Config = D ("Config");
		$Send = D ("Send");
		$website = $Config->where(" varname =  'siteurl' ")->getField("value");
		if(IS_POST){
			if(empty($_POST['username']) or empty($_POST['email'])){
				$this->error("账号和邮箱不能为空",__APP__."/Findpassword/index");
			}else{
				$username = $_POST['username'];
				$mw = passport_encrypt($username);
				$email = $_POST['email'];
				$result = $User->where("username = "."'". $username. "' and email = " ."'". $email. "'")->find();
				//如果找到，就发送邮件
				if($result){
					$sendtime = time();
					 if ($Send->create()){
							$Send->username = $username;
							$Send->sendtime = $sendtime;
							$Send->add();
							$id = mysql_insert_id();
							$mw_id = passport_encrypt(strval($id));
							//发送邮件
							think_send_mail($email,$username,"E8后台管理员找回密码",
							"链接地址:     "."http://{$website}".__APP__."/Findpassword/find/username/{$mw}/email_id/{$mw_id}".'<br/>'.'请于10分钟之内进行找回密码操作','');
							$this->success("邮件发送成功,请查收！");
					 } 
				}else{
					$this->error("账号或邮箱不正确",__APP__."/Findpassword/index");
				}
			}
		}else{
			$this->display();
		}
	}
	
	/**
	 * 找回密码
	 */
	public function find(){
		$User = D ("User");
		$Send = D ("Send");
		if(IS_POST){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$rpassword = $_POST['rpassword'];
			if($password !== $rpassword){
				$this->error("两次密码输入不正确！");
			}else{
				$User->where(" username = "."'" . $username . "'")->setField("password", md5($password));
				$this->success("密码修改成功,请重新登陆",__APP__."/Login/index");
			}
		}else{
			if(isset($_GET['username']) and isset($_GET['email_id'])){
				$username = passport_decrypt($_GET['username']);
				$email_id = passport_decrypt($_GET['email_id']);
				$result1 = $User->where( "username = "."'". $username. "'" )->find();
				$result2 = $Send->where( " id = $email_id ")->find();
				$sendtime = $Send->where(" id = $email_id ")->getField("sendtime");
				$now = time();
				if( $now-$sendtime > 600 ){
					$this->error("找回密码超时,请重新操作",__APP__."/Findpassword/index");
				}else{
					if($result1 == null){
						$this->error("账号不存在！");
					}
					if($result2 == null ){
						$this->error("邮箱不存在！");
					}
					$this->assign("username",$username);
					$this->display();
				}		
			}else{
				$this->error(" 非法操作！");
			}
		}
	}
}
