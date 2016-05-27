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
                                $data['phone'] = $_POST['phone'];
				$data['comment'] = $_POST['comment'];
				$data['ip'] = get_client_ip();
				$data['stutime'] = time();
				$addResult = $Comment ->add($data); 
				if($addResult){
					$this->success("添加留言成功！！！",U('Show/details'));
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
		$Content = D("Content");
		$ContentData = D("Content_data");
		$Picture =D('Picture');
		$classid = $_GET['class'];//p($classid);die;
		$classList = $Class->where("id = $classid")->find();
		$pictureList = $Picture ->where("termid= 39")->select();

		$class = $Class ->getClass($classid);
		$navigation = $Class ->getLeftName($classid);
		$contentList = $Class ->getLeftList($classid);
		$classname = $Class ->where("id = $class") ->getField("classname");
		$texttitle = $Content ->where("classid = $class and status=1")->find();
		$cid = $texttitle['id'];
		$textcontent = $ContentData ->where("id = $cid")->find();
//        p($texttitle);
		//浏览量加1
		$views = $texttitle['views'];
		$Content -> where("classid = $class") -> setField('views',$views+1);
		//echo $Content->getlastsql();die;
		$this->assign("classname",$classname);
		$this->assign("texttitle",$texttitle);
		$this->assign("textcontent",$textcontent);
		$this->assign("navigation",$navigation);
		$this->assign("contentList",$contentList);
		$this->assign("classList",$classList);
		$this->assign("pictureList",$pictureList);
		$this->display();
	}

	/*
	**留言详情页
	*/
	public function details(){
		$Comment = M('Comment');
		$Picture = M('Picture');
		$pictureList = $Picture ->where("termid = 39")->select();
		//分页
		$count = $Comment ->count();
		$Page = new\Think\Page($count,4);
		$show = $Page ->show();
		$commentList = $Comment->order("stutime desc") ->limit($Page->firstRow.','.$Page->listRows)->select();
		//p($commentList);
		$this->assign("page",$show);
                //p($show);
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