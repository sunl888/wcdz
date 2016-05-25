<?php

namespace Admin\Controller;
use Think\Controller;


class PartymemberController extends BaseController{
	public function index(){
		$Student = D('Student');
		$Classname = D('Classname'); 
		$classnameList = $Classname ->select();
		//搜索框
		$where="";
		if(IS_POST){
			if(($_POST['keywords']) !="点击输入姓名"){
				$where['name']=array('like',"%".$_POST['keywords']."%");
			}
		}
		 
		//分页

		$count = $Student -> where($where) ->count();
		$Page = new\Think\Page($count,10);
		$show = $Page->show();
		$studentList = $Student ->where($where)->limit($Page->firstRow.','.$Page->listRows)->order('status')->order('stuid')->select();
		for($i=0;$i<count($studentList);$i++){
			if($studentList[$i]['status'] == 0){
				$studentList[$i]['state'] = "正式党员";
			}else{
				$studentList[$i]['state'] = "预备党员";
			}
			if($studentList[$i]['isextro'] == 1){
				$studentList[$i]['ext'] = "是";
			}else{
				$studentList[$i]['ext'] = "不是";
			}
			//班级
			for($j=0;$j<count($classnameList);$j++){
				if($classnameList[$j]['id'] == $studentList[$i]['cid']){
					$studentList[$i]['class'] = $classnameList[$j]['classname'];
				}
			}
			$studentList[$i]['mw']=md5($studentList[$i]['id']);
		}
		//p($page);die;
		$this->assign("page",$show);
		$this->assign("studentList",$studentList);
		$this->display();
	}



	/*
	**	添加党员信息
	*/
	public function add(){
		$Student = D('Student');
		$Classname = D('Classname');
		$classnameList = $Classname ->select();
		//p($_POST);die;
		if(IS_POST){
			if(empty($_POST['name'])){
				$this ->error("姓名不能为空");
			}
			//上传图片
			$Upload = new\Libs\Util\Upload();
			if($_FILES['photo']['name'] != ""){
				$fileInfo = $Upload->Upload('image',true);
				$data['photo']=$fileInfo;
			}
			$data['name']=$_POST['name'];
			$data['cid']=$_POST['cid'];
			$data['status']=$_POST['status'];
			$data['stuid']=$_POST['stuid'];
			$data['isextro']=$_POST['isextro'];
			$data['place']=$_POST['place'];
			$data['domitory']=$_POST['domitory'];
			$data['telephone']=$_POST['telephone'];
			$data['introduction']=$_POST['introduction'];
			$data['prize']=$_POST['prize'];
			//p($data);die;
			$addResult = $Student->add($data);
			if($addResult){
				$this->success("添加党员成功！！！",__APP__.'/Partymember/index');
			}else{
				$this->error("添加党员失败！！！");
			}
		}else{
			$this->assign("classnameList",$classnameList);
			$this->display();
		}
	}

	/*
	**查看党员信息
	*/
	public function view(){
		$Student =D('Student');
		$Classname = D('Classname');
		$id = $_GET['id'];
		$studentList = $Student ->find($id);
		$classnameList = $Classname ->select();
		for($i=0;$i<count($classnameList);$i++){
			if($classnameList[$i]['id'] == $studentList['cid']){
				$studentList['classname'] = $classnameList[$i]['classname'];
			}
		}
		//判断政治面貌
			if($studentList['status'] == 0){
				$studentList['zchecked'] = "checked";
			}else{
				$studentList['ychecked'] = "checked";
			}
		if($studentList['isextro'] == 1){
				$studentList['sele'] = "selected";
			}else{
				$studentList['nsele'] = "selected";
			}

		$this ->assign("studentList",$studentList);
		$this ->display();
	}

	/*
	**修改党员信息
	*/
	public function edit(){
		$Student = D('Student');
		$Classname = D('Classname');
		$classnameList =$Classname ->select();
		$id = $_GET['id'];
		$mw = $_GET['mw'];
		if(IS_POST){
			$studentList = $Student->find($id);
			//修改图片
			$Upload = new\Libs\Util\Upload();
			if($_FILES['photo']['name'] != ""){
				$fileInfo = $Upload->Upload("image",true);
				$thumb = $Student ->where("id = $id")->getField("photo");
				unlink($_SERVER['DOCUMENT_ROOT'].$thumb);
				$data['photo']=$fileInfo;
			}

			$data['name']=$_POST['name'];
			$data['cid']=$_POST['cid'];
			$data['status']=$_POST['status'];
			$data['isextro']=$_POST['isextro'];
			$data['stuid']=$_POST['stuid'];
			$data['place']=$_POST['place'];
			$data['domitory']=$_POST['domitory'];
			$data['telephone']=$_POST['telephone'];
			$data['applytime']=strtotime($_POST['applytime']);
			$data['formaltime']=strtotime($_POST['formaltime']);
			$data['introduction']=$_POST['introduction'];
			$data['prize']=$_POST['prize'];
			$editResult = $Student ->where("id = $id") ->save($data);
			if($editResult !==false){
				$this ->success("修改党员信息成功！！！",__APP__.'/Partymember/index');
			}else{
				$this ->error("修改党员信息失败！！！");
			}
		}else{
			if(empty($id) || empty($mw)){
				$this ->error("缺少必要参数！！！");
			}
			if(($Student ->find($id)) == null){
				$this ->error("该名党员不存在！！！");
			}
			$studentList = $Student ->find($id);
			//判断政治面貌
			if($studentList['status'] == 0){
				$studentList['zchecked'] = "checked";
			}else{
				$studentList['ychecked'] = "checked";
			}
			if($studentList['isextro'] == 1){
				$studentList['sele'] = "selected";
			}else{
				$studentList['nsele'] = "selected";
			}
			//判断所属班级
			for($i=0;$i<count($classnameList);$i++){
				if($classnameList[$i]['id'] == $studentList['cid']){
					$classnameList[$i] ['select'] = "selected";
				}
			}
			//p($studentList);die;
			$this->assign("classnameList",$classnameList);
			$this->assign("studentList",$studentList);
			$this->display();
		}
	}
	/*
	**删除党员信息
	*/
	public function del(){
		$Student = D('Student');
		$id=$_GET['id'];
		$delResult = $Student ->where("id =$id")->delete();
		if($delResult){
			$this->success("删除党员成功！！！",__APP__.'/Partymember/index');
		}else{
			$this->error("删除党员失败！！！");
		}
	}

	/*
	**批量删除党员信息
	*/
	public function dels(){
		$Student = D('Student');
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$arr = explode(",",$id);
		for($i=0;$i<count($arr);$i++){
			$delResult = $Student ->where("id = $arr[$i]")->delete();
			//echo $Student ->getLastsql();die;
		}
		//写入日志
			$Operationlog = D ('Operationlog');
			$info = "提示语：删除教师成功! <br />模块：".MODULE_NAME.",控制器：".CONTROLLER_NAME.",方法：".ACTION_NAME." <br />请求方式：GET";
			$get = __SELF__;
			$Operationlog->write($this->user['id'],1,$info,$get,$this->user['last_login_ip']);
			
			$this->success("删除教师成功！",__APP__.'/Partymember/index');
		} else {
			$this->error('非法操作!',__APP__.'/Partymember/index');
		}
	}

	/**
	*	班级管理
	**/
	public function term(){
		$Classname = D('Classname');
		//分页
		$count = $Classname ->count();
		$Page= new\Think\Page($count,10);
		$show = $Page ->show();
		$classnameList = $Classname ->limit($Page->firstRow.",".$Page->listRows)->select();
		for($i=0;$i<count($classnameList);$i++){
			$classnameList[$i]['mw'] = md5($classnameList[$i]['id']);
		}
		$this->assign("page",$show);
		$this->assign("classnameList",$classnameList);
		$this->display();
	}
	
	/**
	*	添加班级
	**/
	public function termadd(){
		$Classname = D('Classname');
		
		if(IS_POST){
				if(!empty($_POST['classname'])){
					$data['classname']= $_POST['classname'];
					$addResult = $Classname ->add($data);
					$this->success("班级信息添加成功！！！",__APP__.'/Partymember/term');
			}else{
				$this ->error("班级名称不能为空！！！");
			}
		}else{
			$this->display();
		}	
	}

	/**
	*	修改班级
	**/
	public function termedit(){
		$Classname = D('Classname');
		$id = $_GET['id'];//p($id);die;
		$mw = $_GET['mw'];
		if(IS_POST){
			$id = $_POST['id'];
			$data['classname'] = $_POST['classname'];
			$editResult = $Classname ->where("id = $id ")->save($data);
			
			if($editResult !==false){
				$this->success("修改信息成功！！！",__APP__.'/Partymember/term');
			}else{
				$this->error("修改信息失败！！！");
			}

		}else{
			if(empty($id) || empty($mw)){
				$this ->error("缺少必要参数！！！");
			}
			if (($Classname->find($id)) == "null") {
				$this ->error("此班级不存在！！！！！！");
			}
			$classname = $Classname ->find($id);
			$this->assign("classname",$classname);
			$this->display();
		}	
	}


	public function termdel(){
		$Classname = D('Classname');
		$id=$_GET['id'];
		$delResult = $Classname ->where("id =$id")->delete();
		if($delResult){
			$this->success("删除班级成功！！！",__APP__.'/Partymember/term');
		}else{
			$this->error("删除班级失败！！！");
		}
	}
}