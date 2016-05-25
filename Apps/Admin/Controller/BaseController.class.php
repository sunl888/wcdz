<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 基控制器
//+---------------------------------
//| Author: webdd <2014/8/27>
//+---------------------------------

namespace Admin\Controller;
use Think\Controller;


/**
 * 基类
 * 用于初始化程序
 */

class BaseController extends Controller {

	protected $user;
	protected $uploadPath;
	protected $perm;

	//构造函数
	public function __construct(){
		parent::__construct();
		//上传文件目录
		$this->uploadPath = $_SERVER['DOCUMENT_ROOT'] . C('UPLOAD_PATH');
		$this->initialize();
		$this->getWebInfo();
	}
		
		// 页面初始化函数
	public function initialize() {
		$this->checkLogin ();
		$this->getTopMenu ();
		$this->getPerm ();
	}


	//获取后台页面顶级菜单
	public function getTopMenu() {
		$Menu = D ("Menu");
		$topMenuArr = $Menu->getTopMenu();
		$this->assign('topMenuArr',$topMenuArr);
	}

	//验证用户是否登录
	public function checkLogin(){
		$Session = M ('Session');
		$ip = get_client_ip();
		$sessRes = $Session->where("ip='$ip'")->find();
		if (empty($sessRes)) $this->redirect('/Login');
		$sessionName = $sessRes['name'];
		if (is_null(session($sessionName))) $this->redirect('/Login');
		$this->user = session($sessionName);
		return true;
	}

	//获取当前用户所有权限
	public function getPerm(){

		$permSessionName = C('PERM_SESSION_NAME');
		$sessionPerm = session ($permSessionName);

		if (empty($sessionPerm)) {
			$roleid = $this->user['role_id'];
			$Role = M ('Role');
			$role = $Role->find($roleid);
			if (empty($role)) $this->error('系统错误',__APP__.'/Login');
			if ($role['parentid'] == 0) {
				$this->perm = 'Administrator';
				session($permSessionName,$this->perm);
				return;
			}
			//获取功能权限列表
			$Access = M ('Access');
			$accessArr = $Access->where('role_id='.$roleid)->select();
			if (empty($accessArr)) return;
			//处理权限数组,生成一维数组
			$newArr = array();
			foreach ($accessArr as $k=>$v) {
				$newArr[] = $v['controller'] . '/' . $v['action'] ;
			}
			$this->perm = $newArr;
			session($permSessionName,$this->perm);
		} else {
			$this->perm = session($permSessionName);
		}
	}
		
		// 权限验证
	public function checkPerm() {
		if ($this->perm === "Administrator")
			return;
		if (empty ( $this->perm ))
			$this->error ( "您没有权限操作当前模块" );
		$action = CONTROLLER_NAME . '/' . ACTION_NAME;
		// 验证权限
		if (! in_array ( $action, $this->perm )) {
			$this->error ( "您没有权限操作当前模块" );
		}
	}

	/**
	 * 获取网站信息
	 */
	public function getWebInfo() {
		$Config = M ('Config');
		$webInfoArr = $Config->select();
		$webInfo = array();
		//处理网站信息数组
		foreach ($webInfoArr as $key=>$val) {
			$webInfo[$val['varname']] = $val['value'];
		}
		$this->assign('webInfo',$webInfo);
	}

}