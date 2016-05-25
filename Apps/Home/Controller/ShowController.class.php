<?php
namespace Home\Controller;
use Think\Controller;

class ShowController extends BaseController{

	//留言详情页
	public function leave_word(){
		$Comment = D('Comment');
		$Picture = D("Picture");
		if(IS_POST){
			if(empty($_POST['name']) || empty($_POST['comment'])){
				$this->error("姓名和留言内容不能为空！！！");
			}else{
				$data['name'] = $_POST['name'];
				$data['email'] = $_POST['email'];
				$data['comment'] = $_POST['comment'];
				$data['ip'] = get_client_ip();
				$data['stutime'] = time();

				$addResult = $Comment ->add($data); 
				if($addResult){
					$this->success("添加留言成功！！！",__APP__."/Show/details/id/3");
				}else{
					$this->success("添加留言失败！！！");
				}
			}
		}else{
			$pictureList = $Picture ->where("termid = 39")->select();
			$this->assign("pictureList",$pictureList);
			$this->display();
		}
	}

	

	/**
	*	图片新闻详细页
	**/
	public function picture(){
		$Picture = D("Picture");
		$id = $_GET['id'];
		$pictureList = $Picture ->where("termid = 39")->select();
		$contentList = $Picture ->where("id = $id")->find();

		
		$this -> assign("pictureList",$pictureList);
        $this -> assign("contentList",$contentList);
        $this -> assign("classList",$classList);
		$this -> display();
	}




	

	public function content(){
		$Class = D('Class');
		$Content = D('Content');
		$Picture = D('Picture');
		$ContentData = D('Content_data');
		$pictureList = $Picture ->where("termid = 39")->select();
		$id = $_GET['id'];
		$textcontent = $ContentData ->where("id = $id")->getField('content');
		$classList = $Content ->where("id = $id")->find();
		$cid = $classList['classid'];
		$pid = $Class ->where("id = $cid")->getField('parentid');
		//访问量+1
		$views = $classList['views'];
		$Content ->where("id = $id")->setField("views",$views+1);

		if($pid !=0){
			$navigation = $Class ->where("id = $pid")->getField('classname');
			$contentList = $Class ->where("parentid = $pid")->select();//p();die;
		}else{
			$navigation = $Class ->where("id = $cid")->getField('classname');
		}
		

		$this->assign("navigation",$navigation);
		$this->assign("classList",$classList);
		$this->assign("contentList",$contentList);
		$this->assign("textcontent",$textcontent);
		$this->assign("pictureList",$pictureList);
		$this->display();
	}

	/*
	**留言详情页
	*/
	public function details(){
		$Comment = D('Comment');
		$Picture = D('Picture');
		$pictureList = $Picture ->where("termid = 39")->select();
		//分页
		$count = $Comment ->count();
		$Page = new\Think\Page($count,3);
		$show = $Page ->show();
		$commentList = $Comment->order("stutime desc") ->limit($Page->firstRow.','.$Page->listRows)->select();
		//p($commentList);die;
		$this->assign("page",$show);
		$this->assign("commentList",$commentList);
		$this->assign("pictureList",$pictureList);
		$this->display();
	}

	public function domitory(){
		$Domitory = D('Domitory');
		$Picture = D('Picture');
		$pictureList = $Picture ->where("termid = 39")->select();
		$navigation = "公寓风采";
		$id = $_GET['id'];
		$domitoryList = $Domitory ->find($id);
		//访问量+1
		$views = $domitoryList['views'];
		$Domitory ->where("id = $id")->setField("views",$views+1);

		$this->assign("navigation",$navigation);
		$this->assign("pictureList",$pictureList);
		$this->assign("domitoryList",$domitoryList);
		$this->display();
	}


    /**
    *   党员及先进人物详情页
    **/
    public function viewteacher(){
    	$Picture = D('Picture');
    	$Class = D("Class","Model");
    	$Classname = D('Classname');
    	$Advance = D('Advance');
    	$Student = D('Student');
		$pictureList = $Picture ->where("termid = 39")->select();
        $contentList = $Class ->getLeftList('13');//p($contentList);die;
        $classnameList = $Classname ->select();
        $type = $_GET['type'];
        $id = $_GET['id'];
        $navigation ="示范园地";
        if($type == 2){//先进人物详情页
        	$title = "先进人物";
        	$studentList = $Advance ->find($id);
        
        }else{
        	$title = "优秀党员";
        	$studentList = $Student ->find($id);
        }
       // p($studentList);die;
        if($studentList['status'] ==0){
        	$studentList['state'] ="正式党员";
        }else if($studentList['status'] ==1){
        	$studentList['state'] ="预备党员";
        }else{
        	$studentList['state'] ="共青团员";
        }
        //判断班级
        for($i=0;$i<count($classnameList);$i++){
        	if($classnameList[$i]['id'] == $studentList['cid']){
        		$studentList['class']= $classnameList[$i]['classname'];
        	}
        }
        
        $this->assign("navigation",$navigation);
        $this->assign("title",$title);
        $this->assign("pictureList",$pictureList);
        $this -> assign("contentList",$contentList);
        $this -> assign("studentList",$studentList);
        $this->display();
    }
}