<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 后台操作记录管理控制器
//+---------------------------------
//| Author: 朱荣繁 <>
//+---------------------------------

namespace Admin\Controller;
use Think\Controller;

class OperationlogController extends  BaseController{
	
	//权限验证
    public function __construct() {
        parent::__construct ();
        $this->checkPerm();
    }

	public function index() {
		$Operationlog = D ('Operationlog');
		$condition = "";
		
		if (IS_POST){
			if (!empty($_POST["status"])) $condition['status'] = $_POST['status'];
			if (!empty($_POST["uid"])) $condition['uid'] = array('like','%'.$_POST['uid'].'%');
			if (!empty($_POST["ip"])) $condition['ip'] = array('like','%'.$_POST['ip'].'%');
		}

		//分页
	    $count = $Operationlog->where($condition)->count();
	    $Page = new\Think\Page($count,10);
	    $show = $Page->show();
		$operationlogList = $Operationlog ->where($condition)->limit($Page->firstRow.','.$Page->listRows)->order('time desc')->select();
		for ($i=0;$i<count($operationlogList);$i++) {
			if ($operationlogList [$i] ['status'] == 1){
				$operationlogList [$i] ['status'] = "success";
			}else{
				$operationlogList [$i] ['status'] = "error";
			}
		}
		$this->assign ('page',$show);
		$this->assign('operationlogList',$operationlogList);
		$this->display();
	}
	
	//删除前一个月记录
	public function del(){
		$Operationlog = D ('Operationlog');
		$time = time();
		$Operationlog->where("$time -time >2592000")->delete();
		$this->success("删除成功！",__APP__.'/Operationlog/index');
	}
}