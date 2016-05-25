<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 老成员控制器
//+---------------------------------
//| Author: 朱荣繁 <>
//+---------------------------------

namespace Admin\Controller;
use Think\Controller;

class DomitoryController extends BaseController{
	/**
	*查看寝室信息
	**/
	public function index(){
		$Domitory = D("domitory");
		$where = "";
		//搜索功能
		if(IS_POST){
			if(($_POST['keywords']) !="点击输入宿舍号"){
				$where['did']=array('like',"%".$_POST['keywords']."%");
			}
		}
		//分页
		
		$count = $Domitory->where($where)->count();
		$Page = new \Think\Page($count , 10);
		$show = $Page->show();
		$domitoryList = $Domitory->where($where)->limit ( $Page ->firstRow.','.$Page ->listRows )->order("id")->select();

		for ($i=0;$i<count($domitoryList);$i++) {	
			$domitoryList[$i]['mw'] = md5($domitoryList[$i]['id']);
		}
		//p($domitoryList);
		$this -> assign("domitoryList",$domitoryList);
		$this->assign ('page',$show);
		$this -> display();
	}

	/**
	*添加寝室信息
	**/
	public function add(){
		$Domitory = D("domitory");
		if(IS_POST){
			//上传图片
			//上传用户头像
	
            $Upload = new \Libs\Util\Upload();
           
            //判断上传文件是否被调用
            if($_FILES['img']['name'] != ""){
                $fileInfo = $Upload -> Upload('image',true);   
                $data['image'] = $fileInfo;//将文件路径赋值到数据库字段
            }

			$data['did'] = $_POST['did'];
			$data['leader'] = $_POST['leader'];
			$data['introduction'] = $_POST['introduction'];
			if($data['did'] == ""){
				$this -> error("寝室号不能为空!");
			}
			if($data['leader'] == ""){
				$this -> error("寝室长不能为空!");
			}
			if($Domitory -> add($data)){
				$this -> success("添加寝室信息成功!",__APP__.'/Domitory/index');
			}else{
				$this -> error("添加寝室信息失败!");
			}
		}else{
			$this -> display();
		}
	}

	/**
	*修改寝室信息
	**/
	public function edit(){
		$Domitory = D("domitory");
		$id = $_GET['id'];
		if(IS_POST){
			$rs = $Domitory->find($id);
			if(empty($rs)){
				$this->error("非法操作");
			}

			if (empty($_POST['did'])) {
				$data['msg'] = "寝室号不能为空";
				$this->error($data['msg'],'');
			}

			if (empty($_POST['leader'])) {
				$data['msg'] = "寝室长不能为空";
				$this->error($data['msg'],'');
			}
            
            $Upload = new \Libs\Util\Upload();
			//判断图片不能为空
			if ($_FILES['image']['name'] != "") {
				$fileInfo = $Upload->upload ( 'image', true );
				//删除旧头像
				unlink($this->uploadPath . $rs['image']);
				//dump($fileInfo);die;
				$u['image'] = $fileInfo;
			}

			if (empty($_POST['introduction'])) {
				$data['msg'] = "寝室介绍不能为空";
				$this->error($data['msg'],'');
			}

			$u['did'] = $_POST['did'];
			$u['leader'] = $_POST['leader'];
			$u['introduction'] = $_POST['introduction'];

			$flag = $Domitory->where('id='.$id)->save($u);

			if ( $flag !== false ) {
				$data['status'] = 1;
				$data['msg'] = "修改用户成功!";
				$this->success($data['msg'],__APP__."/Domitory");
			} else {
				$data['status'] = 0;
				$data['msg'] = "修改用户失败!";
				$this->error($data['msg'],'');
			}
		}else{
			if (empty($id)) $this->error("缺少必要参数!");
			$DomitoryList = $Domitory->find($id);
			if (empty($DomitoryList)) $this->error("该用户不存在!");
			//dump($DomitoryList);die;
			$this->assign('DomitoryList',$DomitoryList);
			$this->display();
		}
	
	}

	/**
	*删除寝室信息
	**/
	public function del1(){
		$Domitory = D("Domitory");
		$id = $_GET['id'];
		$delResult = $Domitory -> where("id = $id") -> delete();
		if($delResult){
			$this -> success("成功删除寝室信息!",__APP__.'/Domitory/index');
		}else{
			$this -> error("删除寝室信息失败!");
		}
	}
	public function del(){
		$Domitory = D ('Domitory');
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$arr = explode(",",$id);
			for($i=0;$i<count($arr);$i++){
				$Domitory->where ("id = $arr[$i]")->delete();
			}

			//写入日志
			$Operationlog = D ('Operationlog');
			$info = "提示语：删除寝室成功! <br />模块：".MODULE_NAME.",控制器：".CONTROLLER_NAME.",方法：".ACTION_NAME." <br />请求方式：GET";
			$get = __SELF__;
			$Operationlog->write($this->user['id'],1,$info,$get,$this->user['last_login_ip']);
			
			$this->success("删除寝室成功！",__APP__.'/Domitory/index');
		} else {
			$this->error('非法操作!',__APP__.'/Domitory/index');
		}
	}
	/**
	*查看寝室信息
	**/
	public function view(){
		$Domitory = D("Domitory");
		$id = $_GET['id'];
		$DomitoryList = $Domitory -> where("id = $id") -> find();
		$this -> assign("DomitoryList",$DomitoryList);
		$this -> display();
	}
}