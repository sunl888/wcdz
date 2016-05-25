<?php

namespace Admin\Controller;
use Think\Controller;

/**
 * 后台登陆控制器
 *
 * 2014/7/9
 *
 * @author webdd
 */

/**
 * 修改记录
 * Verision: 1.0
 * Time: 2014/7/9
 * Form: Function Name + Editor + Time
 */
class LoginController extends Controller {
	
	/**
	 * 验证码生成函数
	 * 调用ThinkPHP框架，生成验证码
	 *
	 * $config 配置验证码数组
	 */
	public function createVerify() {
		$config = array (
				'fontSize' => 12,
				'length' => 4,
				'imageW' => 80,
				'imageH' => 35,
				'useNoise' => false, // 是否使用噪点
				'useCurve' => false, // 是否使用混淆曲线
				'bg' => array (
						255,
						255,
						255 
				), // 验证码背景色
				'fontttf' => '4.ttf'  // 验证码字体
				);
		ob_end_clean();
		$Verify = new \Think\Verify ( $config );
		$Verify->entry ();
	}
	
	/**
	 * 验证码验证函数 (私有，不可被访问)
	 * 调用ThinkPHP框架进行验证码验证
	 *
	 * @param string $code
	 *        	表单提交的验证字符串
	 * @param string $id
	 *        	验证码id，用于表示生成的多个验证码
	 */
	private function checkVerify($code, $id = '') {
		$verify = new \Think\Verify ();
		return $verify->check ( $code, $id );
	}
	
	/**
	 * index函数，显示登录界面
	 */
	public function index() {
		$this->display ();
	}
	
	/**
	 * 用户登录函数，验证用户是否登录正确
	 *
	 *
	 * @param $_POST['account'] 表单提交用户账户，为账户或者邮箱        	
	 * @param $_POST['password'] 表单提交用户密码        	
	 * @param $_POST['verify'] 表单提交验证码        	
	 */
	public function login() {

		//如果不是post方式提交
		if (!IS_POST){
			$this->display();
			die;
		} 

		$User = D ('User');
		$Role = M ('Role');
		$username = $_POST['username'];
		$password = $_POST['password'];
		$verify = $_POST['verify'];
		$ip = get_client_ip();
		if (!$this->checkVerify($verify)) $this->error("验证码错误!",__APP__.'/Login');
		$user = $User->login($username,$password);
		//p($User->getLastSql());
		if (empty($user)) $this->error("账号密码不正确或者用户不存在!",__APP__.'/Login');
		//判断当前用户是否被禁用
		if ($user['status'] == 0) $this->error("该用户已被禁用,请联系管理员设置!");
		//判断当前用户所属角色状态
		$role = $Role->find($user['role_id']);
		if ($role['status'] == 0) $this->error("该用户所属角色组不可用,请联系管理员设置!");

		//设置用户信息
		$user['last_login_time'] = time();
		$user['last_login_ip'] = $ip;
		//保存用户信息
		if ($User->save($user) === false) $this->error("登录失败!");

		//查询Session表
		$Session = M ('Session');
		$sessRes = $Session->where("ip='$ip'")->find();
		if ($sessRes){
			$sessionName = $sessRes['name'];
		} else {
			$sessionName = md5 ('e8net'.$user['username']);
			//删除该ip关联记录
			$Session->where("ip='$ip'")->select();
			$data['ip'] = $ip;
			$data['name'] = $sessionName;
			if (!$Session->add($data)) $this->error("写入Session数据失败,请联系管理员!");
		}

		$user['mw'] = passport_encrypt($user['id']);
		$user['sessionName'] = $sessionName;
		session ($sessionName,$user);

		//写入日志
		$Log = D ('Log');
		$info = "用户名登陆";
		$Log->write($user['username'],get_client_ip(),1,$info);
		

		// 页面重定向
		$this->redirect ('/Index');
	}
		
}