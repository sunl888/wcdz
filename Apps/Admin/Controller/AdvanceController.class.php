<?php

namespace Admin\Controller;
use Think\Controller;


class AdvanceController extends BaseController{
	public function index(){
		$Advance = D('Advance');
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

		$count = $Advance -> where($where) ->count();
		$Page = new\Think\Page($count,10);
		$show = $Page->show();
		$studentList = $Advance ->where($where)->limit($Page->firstRow.','.$Page->listRows)->order('status')->select();
		for($i=0;$i<count($studentList);$i++){
			if($studentList[$i]['status'] == 0){
				$studentList[$i]['state'] = "正式党员";
			}else if($studentList[$i]['status'] == 1){
				$studentList[$i]['state'] = "预备党员";
			}else{
				$studentList[$i]['state'] = "共青团员";
			}
			//班级
			for($j=0;$j<count($classnameList);$j++){
				if($studentList[$i]['cid'] == $classnameList[$j]['id']){
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
		$Advance = D('Advance');
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
			$data['place']=$_POST['place'];
			$data['domitory']=$_POST['domitory'];
			$data['telephone']=$_POST['telephone'];
			$data['prize']=$_POST['prize'];
			$data['introduction']=$_POST['introduction'];
			//p($data);die;
			$addResult = $Advance->add($data);
			if($addResult){
				$this->success("添加成功！！！",__APP__.'/Advance/index');
			}else{
				$this->error("添加失败！！！");
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
		$Advance =D('Advance');
		$Classname = D('Classname');
		$id = $_GET['id'];
		$studentList = $Advance ->find($id);
		$classnameList = $Classname ->select();
		for($i=0;$i<count($classnameList);$i++){
			if($classnameList[$i]['id'] == $studentList['cid']){
				$studentList['classname'] = $classnameList[$i]['classname'];
			}
		}
		//判断政治面貌
			if($studentList['status'] == 0){
				$studentList['zsele'] = "selected";
			}else if($studentList['status'] == 1){
				$studentList['ysele'] = "selected";
			}else{
				$studentList['gsele'] = "selected";
			}
		$this ->assign("studentList",$studentList);
		$this ->display();
	}

	/*
	**修改党员信息
	*/
	public function edit(){
		$Advance = D('Advance');
		$Classname = D('Classname');
		$classnameList =$Classname ->select();
		$id = $_GET['id'];
		$mw = $_GET['mw'];
		if(IS_POST){
			$studentList = $Advance->find($id);
			//修改图片
			$Upload = new\Libs\Util\Upload();
			if($_FILES['photo']['name'] != ""){
				$fileInfo = $Upload->Upload("image",true);
				$thumb = $Advance ->where("id = $id")->getField("photo");
				unlink($_SERVER['DOCUMENT_ROOT'].$thumb);
				$data['photo']=$fileInfo;
			}

			$data['name']=$_POST['name'];
			$data['cid']=$_POST['cid'];
			$data['status']=$_POST['status'];
			$data['stuid']=$_POST['stuid'];
			$data['place']=$_POST['place'];
			$data['domitory']=$_POST['domitory'];
			$data['telephone']=$_POST['telephone'];
			$data['prize']=$_POST['prize'];
			$data['introduction']=$_POST['introduction'];
			$editResult = $Advance ->where("id = $id") ->save($data);
			if($editResult !==false){
				$this ->success("修改成功！！！",__APP__.'/Advance/index');
			}else{
				$this ->error("修改失败！！！");
			}
		}else{
			if(empty($id) || empty($mw)){
				$this ->error("缺少必要参数！！！");
			}
			if(($Advance ->find($id)) == null){
				$this ->error("该人不存在！！！");
			}
			$studentList = $Advance ->find($id);
			//判断政治面貌
			if($studentList['status'] == 0){
				$studentList['zsele'] = "selected";
			}else if($studentList['status'] == 1){
				$studentList['ysele'] = "selected";
			}else{
				$studentList['gsele'] = "selected";
			}
			//判断所属班级
			for($i=0;$i<count($classnameList);$i++){
				if($classnameList[$i]['id'] == $studentList['cid']){
					$classnameList[$i]['selected'] = "selected";
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
		$Advance = D('Advance');
		$id=$_GET['id'];
		$delResult = $Advance ->where("id =$id")->delete();
		if($delResult){
			$this->success("删除成功！！！",__APP__.'/Advance/index');
		}else{
			$this->error("删除失败！！！");
		}
	}

	/*
	**批量删除党员信息
	*/
	public function dels(){
		$Advance = D('Advance');
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$arr = explode(",",$id);
		for($i=0;$i<count($arr);$i++){
			$delResult = $Advance ->where("id = $arr[$i]")->delete();
			//echo $Student ->getLastsql();die;
		}
		//写入日志
			$Operationlog = D ('Operationlog');
			$info = "提示语：删除教师成功! <br />模块：".MODULE_NAME.",控制器：".CONTROLLER_NAME.",方法：".ACTION_NAME." <br />请求方式：GET";
			$get = __SELF__;
			$Operationlog->write($this->user['id'],1,$info,$get,$this->user['last_login_ip']);
			
			$this->success("删除教师成功！",__APP__.'/Advance/index');
		} else {
			$this->error('非法操作!',__APP__.'/Advance/index');
		}
	}


	/**
	*导入
	**/
	public function import(){
		$Student = D("Student");
		$Classname = D('Classname');
		$studentList = $Student->select();
		$classnameList = $Classname ->select();
		ini_set(”memory_limit”, ”128M”);
		if(isset($_FILES["import"]) && ($_FILES["import"]["error"] == 0)){
			$result = importExecl($_FILES["import"]["tmp_name"]);p($result["message"]);die;
			if($result["error"] == 1){p("slglhy");die;
				$excel_data = $result["data"][0]["Content"];
				$count = 0;//未成功数
				p("slglhy");die;
				foreach($excel_data as $k=>$v){

					if($k != 1){

						$m = 0;//表示文件中是否存在 1已存在 0未存在
						
						$data['stuid'] = $v[3];
						if(($data['stuid']) != null){
								for($j=0;$j<count($studentList);$j++){
									if( strcmp($studentList[$j][stuid],$data['stuid'])== 0){
										$m=1;
									}
								}
								//判断班级
								$classname = $v[1];//p($classname);
								for($i=0;$i<count($classnameList);$i++){
									if(strcmp($classnameList[$i][name],$classname)== 0){
										$data[cid] = $classnameList[$i][cid];
									}
								}
								if($m==0){
									$data['name'] = $v[2];
									$data['telephone'] = $v[5];
									$data['status'] = $v[4];
									$data['applytime'] = strtotime($v[6]);
									$data['introduction'] = $v[8];
									$data['place'] = $v[9];
									$data['action'] = $v[10];
									$data['formaltime'] = strtotime($v[7]);
									$data['domitory'] = $v[11];
									$result = $Student -> add($data);
									$count++;
								}
						
						}
						
					}
				}
				p("kjf");

				$this -> success("共有".$count."条记录 导入成功!",__APP__.'/Partymember/index');

			}
		}
	}

	/**
	*	先进人物管理
	**/
	public function mode(){
		$Advance = D('Advance');
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

		$count = $Advance -> where($where) ->count();
		$Page = new\Think\Page($count,10);
		$show = $Page->show();
		$studentList = $Advance ->where($where)->limit($Page->firstRow.','.$Page->listRows)->order('status')->select();
		for($i=0;$i<count($studentList);$i++){
			if($studentList[$i]['status'] == 0){
				$studentList[$i]['state'] = "正式党员";
			}else if($studentList[$i]['status'] == 1){
				$studentList[$i]['state'] = "预备党员";
			}else{
				$studentList[$i]['state'] = "共青团员";
			}

			
			//班级
			for($j=0;$j<count($classnameList);$j++){
				if($studentList[$i]['cid'] == $classnameList[$j]['cid']){
					$studentList[$i]['class'] = $classnameList[$j]['classname'];
				}
			}
			$studentList[$i]['mw']=md5($studentList[$i]['id']);
		}
		//p($page);die;
		$this->assign("page",$show);
		$this->assign("studentList",$studentList);
		$this->display();
		$this->display();
	}
}