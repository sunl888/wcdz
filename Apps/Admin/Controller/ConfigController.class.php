<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 站点配置控制器
//+---------------------------------
//| Author: 朱荣繁 <>
//+---------------------------------

namespace Admin\Controller;
use Think\Controller;

class ConfigController extends BaseController{
	
	//权限验证
    public function __construct() {
        parent::__construct ();
        $this->checkPerm();
    }

	public function index() {
		$Config = D('Config');
		if (IS_POST) {
			$Arr = $_POST;
			foreach ($Arr as $k=>$v){
				$cardList = $Config->query("UPDATE __CONFIG__ SET  value='$v' where (varname = '$k' and groupid = 0)");
			}	

			//写入日志
			$Operationlog = D ('Operationlog');
			$info = "提示语：修改站点配置成功! <br />模块：".MODULE_NAME.",控制器：".CONTROLLER_NAME.",方法：".ACTION_NAME." <br />请求方式：POST";
			$get = __SELF__;
			$Operationlog->write($this->user['id'],1,$info,$get,$this->user['last_login_ip']);

			$this->success('修改站点配置成功!',__APP__.'/Config/index');
		}else{
			//查找所有groupid=0;显示varname和value;
			$config = $Config->where(" groupid = 0")->getField('varname,value');
			$this->assign('config',$config);
			$this->display();
		}
			
	}
	
	public function email() {
		$Config = D('Config');
		if (IS_POST) {
			$Arr = $_POST;
			foreach ($Arr as $k=>$v){
				$cardList = $Config->query("UPDATE e8_config SET  value='$v' where (varname = '$k' and groupid = 0)");
			}	

			//写入日志
			$Operationlog = D ('Operationlog');
			$info = "提示语：修改邮箱配置成功! <br />模块：".MODULE_NAME.",控制器：".CONTROLLER_NAME.",方法：".ACTION_NAME." <br />请求方式：POST";
			$get = __SELF__;
			$Operationlog->write($this->user['id'],1,$info,$get,$this->user['last_login_ip']);

			$this->success('修改邮箱配置成功!',__APP__.'/Config/email');
		}else{
			//查找所有groupid=0;显示varname和value;
			$config = $Config->where(" groupid = 0")->getField('varname,value');
			$this->assign('config',$config);
			$this->display();
		}
	}
	
	public function file() {
		$Config = D('Config');
		if (IS_POST) {
			$Arr = $_POST;
			foreach ($Arr as $k=>$v){
				$cardList = $Config->query("UPDATE e8_config SET  value='$v' where (varname = '$k' and groupid = 0)");
			}	

			//写入日志
			$Operationlog = D ('Operationlog');
			$info = "提示语：修改附件配置成功! <br />模块：".MODULE_NAME.",控制器：".CONTROLLER_NAME.",方法：".ACTION_NAME." <br />请求方式：POST";
			$get = __SELF__;
			$Operationlog->write($this->user['id'],1,$info,$get,$this->user['last_login_ip']);

			$this->success('修改附件配置成功!',__APP__.'/Config/file');
		}else{
			//查找所有groupid=0;显示varname和value;
			$config = $Config->where(" groupid = 0")->getField('varname,value');
			$this->assign('config',$config);
			$this->display();
		}
	}
	
	//高级配置
	public function master() {
		$Config = D('Config');
		if (IS_POST) {
			$Arr = $_POST;
			foreach ($Arr as $k=>$v){
				$cardList = $Config->query("UPDATE e8_config SET  value='$v' where (varname = '$k' and groupid = 0)");
			}	

			//写入日志
			$Operationlog = D ('Operationlog');
			$info = "提示语：修改高级配置成功! <br />模块：".MODULE_NAME.",控制器：".CONTROLLER_NAME.",方法：".ACTION_NAME." <br />请求方式：POST";
			$get = __SELF__;
			$Operationlog->write($this->user['id'],1,$info,$get,$this->user['last_login_ip']);

			$this->success('修改高级配置成功!',__APP__.'/Config/master');
		}else{
			//查找所有groupid=0;显示varname和value;
			$config = $Config->where(" groupid = 0")->getField('varname,value');
			$this->assign('config',$config);
			$this->display();
		}
	} 
	
	/*
	 * 扩展配置
	 */
	public function extend() {
		$Config = D('Config','Model');
		if(IS_POST){
			if (!$Config->validate($Config->ExtendValidate)->create()){
				$this->error($Config->getError());
			} else {
				$groupid = 1;
				$Config->groupid=$groupid;
				if ($Config->add()){
					//写入日志
					$Operationlog = D ('Operationlog');
					$info = "提示语：添加扩展配置成功! <br />模块：".MODULE_NAME.",控制器：".CONTROLLER_NAME.",方法：".ACTION_NAME." <br />请求方式：POST";
					$get = __SELF__;
					$Operationlog->write($this->user['id'],1,$info,$get,$this->user['last_login_ip']);

					$this->success('添加扩展配置成功!',__APP__.'/Config/extend');
				} else {
					$this->error('添加扩展配置失败!',__APP__.'/Config/extend');
				}
			}				
		}else{
			$count = $Config->where("groupid = 1")->count();
			//判断是否存在groupid为1的记录。
			if ($count ==0){
				$condition = 1;
			}
			$count = $Config->where("groupid = 1")->count();
			$Page = new\Think\Page($count,10);
			$show = $Page->show();
			$configList = $Config->where("groupid = 1")->limit($Page->firstRow.','.$Page->listRows)->select();	
			for ($i=0;$i<count($configList);$i++) {
				$configList [$i] ['mw'] = passport_encrypt($configList [$i] ['id']);
			}
			$this->assign('configList',$configList);
			$this->assign('condition',$condition);
			$this->assign('page',$show);
			$this->display();
		}
	}
	
	//修改网站扩展配置
	public function extend_edit(){
		$Config = D('Config','Model');
		if (IS_POST){
			$id = $_POST['id'];
			if(isset($id)){
				if (!$Config->validate($Config->ExtendValidate)->create()){
					$this->error($Config->getError());
				} else {
					if ($Config->save()){
						//写入日志
						$Operationlog = D ('Operationlog');
						$info = "提示语：修改扩展配置成功! <br />模块：".MODULE_NAME.",控制器：".CONTROLLER_NAME.",方法：".ACTION_NAME." <br />请求方式：POST";
						$get = __SELF__;
						$Operationlog->write($this->user['id'],1,$info,$get,$this->user['last_login_ip']);

						$this->success('修改扩展配置成功!',__APP__.'/Config/extend');
					} else {
						$this->error('修改失败!',__APP__.'/Config/extend');
					}
				}
			}	
		}else{
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$mw = $_GET ['mw'];
				if (empty($id) || empty($mw)) $this->error("缺少必要参数!");
				if (!compare($id,$mw)) $this->error("错误或恶意的操作,您的IP已被记录!");
				
				if (($config = $Config->find($id)) == null){
					$this->error('该网站设置不存在!');
				}
				$config = $Config->where( "id = $id ")->find();
				$this->assign('config',$config);
				$this->display();
			}else{
				$this->error('非法访问!');
			}
		}
		
	}
	/*
	 * 删除
	 */
	public function extend_del(){
		$Config = D('Config');
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			if ($Config->find($id)){
				$id = $Config->where("id = $id")->getField('id');
				if ($Config->delete()){

					//写入日志
					$Operationlog = D ('Operationlog');
					$info = "提示语：删除扩展配置成功! <br />模块：".MODULE_NAME.",控制器：".CONTROLLER_NAME.",方法：".ACTION_NAME." <br />请求方式：GET";
					$get = __SELF__;
					$Operationlog->write($this->user['id'],1,$info,$get,$this->user['last_login_ip']);

					$this->success("删除扩展配置成功！",__APP__.'/Config/extend');
				}	
			} else {
					$this->error('该网站设置不存在!',__APP__.'/Config/extend');
				}
		} else {
			$this->error('非法操作!',__APP__.'/Config/extend');
		}
		
	}
	
}
