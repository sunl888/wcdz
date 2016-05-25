<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 日志管理控制器
//+---------------------------------
//| Author: 朱荣繁 <>
//+---------------------------------

namespace Admin\Controller;
use Think\Controller;

class LogController extends BaseController{

	//权限验证
    public function __construct() {
        parent::__construct ();
        $this->checkPerm();
    }

	public function index() {
		$Log = D ('Log');
		$keyword = "";
		$condition = "";
		
		if (IS_POST){
			if (!empty($_POST["status"])) $condition['status'] = $_POST['status'];
			if (!empty($_POST["username"])) $condition['username'] = array('like','%'.$_POST['username'].'%');
			if (!empty($_POST["loginip"])) $condition['loginip'] = array('like','%'.$_POST['loginip'].'%');
		}

		// 分页
		$count = $Log->where ( $condition )->count ();
		$Page = new \Think\Page ( $count, 10);
		$show = $Page->show ();
		$logList = $Log->where($condition)->limit ( $Page->firstRow . ',' . $Page->listRows )->order('logintime desc')->select();
		$this->assign ('page',$show);
		$this->assign('logList',$logList);
		$this->display();
	}

	//删除前一个月记录
	public function del(){
		$Log = D ('Log');
		$time = time();
		//删除一个月前的所有日记
		$Log->where("$time -logintime >2592000")->delete();
		$this->success("删除成功！",__APP__.'/Log/index');
	}
}
