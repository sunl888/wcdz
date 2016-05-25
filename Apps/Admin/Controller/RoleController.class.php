<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 后台角色控制器
//+---------------------------------
//| Author: webdd <2014//8/27>
//+---------------------------------

namespace Admin\Controller;
use Think\Controller;

class RoleController extends BaseController {

	//权限验证
    public function __construct() {
        parent::__construct ();
        $this->checkPerm();
    }

	public function index(){

		$Role = D ('Role');
		$roleArr = $Role->getRole();
		//生成前缀
		$roleArr = $Role->getPrefix($roleArr);
		//生成密文
		foreach ($roleArr as $k=>$v) {
			$roleArr[$k]['mw'] = passport_encrypt($v['id']);
		}
		$this->assign('roleArr',$roleArr);
		$this->display();
	}

	//角色添加
	public function add(){
		if (IS_POST){
			$RoleEvent = A('Role','Event');
			$RoleEvent->addEvent($this->user['id']);
		} else {
			$Role = D ('Role');
			$roleArr = $Role->getRole();
			//生成前缀
			$roleArr = $Role->getPrefix($roleArr);
			$this->assign('roleArr',$roleArr);
			$this->display();
		}
	}

	//角色编辑
	public function edit(){
		if (IS_POST){
			$RoleEvent = A ('Role','Event');
			$RoleEvent->editEvent($this->user['id']);
		} else {
			$id = $_GET['id'];
			$mw = $_GET['mw'];
			if (empty($id) || empty($mw)) $this->error("缺少必要参数!");
			if (!compare($id,$mw)) $this->error("错误或恶意的操作,您的IP已被记录!");
			$Role = D ('Role');
			$roleObj = $Role->find($id);
			if (empty($roleObj)) $this->error("用户不存在!");

			$roleArr = $Role->getRole();
			//生成前缀
			$roleArr = $Role->getPrefix($roleArr);
			$this->assign('roleArr',$roleArr);
			$this->assign('roleObj',$roleObj);
			$this->assign('mw',$mw);
			$this->display();
		}
	}


	public function del(){
		$RoleEvent = A ('Role','Event');
		$RoleEvent->delEvent($this->user['id']);
	}

	public function access(){
		$id = $_GET['id'];
		$mw = $_GET['mw'];
		if (empty($id) || empty($mw)) $this->error("缺少必要参数!");
		if (!compare($id,$mw)) $this->error("错误或恶意的操作,您的IP已被记录!");

		$Menu = D ('Menu');
		$menuArr = $Menu->getMenuForJson();
		$Access = M ('Access');
		$where['role_id'] = $id;
		$where['status'] = 1;
		$have = $Access->where($where)->select();
		//提取id合成一维数组
		$ids = array();
		foreach ($have as $v) {
			$ids[] = $v['menu_id'];
		}
		//处理权限数组选中状态
		foreach ($menuArr as $k=>$v) {
			if (in_array($v['id'],$ids)) {
				$menuArr[$k]['checked'] = "true";
			}
		}
		//p($menuArr);
		//p(json_encode($menuArr));
		$menuJson = json_encode($menuArr);
		$this->assign('menuJson',$menuJson);
		$this->assign('id',$id);
		$this->assign('mw',$mw);
		$this->display();
	}

	//授权操作
	public function accredit(){
		$RoleEvent = A ('Role','Event');
		$RoleEvent->accreditEvent($this->user['id']);
	}

}