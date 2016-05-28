<?php
namespace Home\Controller;
use Think\Controller;
class ListController extends BaseController {
     /**
      *内容展示
      */

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



    public function article(){
    $Content = D("Content");
    $Class = D("Class","Model");
    $Picture = D("Picture");
    $classid = $_GET['class'];
   
    $classList =$Class ->where("id = $classid")->find();
    $navigation = $Class ->getLeftName($classid);//p($navigation);die;
     $class = $Class ->getClass($classid);//p($class);die;
     $contentList = $Class ->getLeftList($classid);
    //分页
    $where['classid'] = $class;
    $where['status'] = 1;
    $count =$Content ->where($where) ->count();
    $Page = new\Think\Page($count,15);
    $show = $Page ->show();
    $contentPage = $Content->where($where)->limit($Page->firstRow.",".$Page->listRows) ->order("addtime desc")->select();
     //图片列表
    $pictureList = $Picture ->where("termid= 39")->select();
//   p($Page);
    $this->assign("classList",$classList);
    $this->assign("contentList",$contentList);
    $this->assign("navigation",$navigation);
    $this->assign("contentPage",$contentPage);
    $this->assign("pictureList",$pictureList);
    $this->assign("page",$show);
    
    $this->display();
  }


//宿舍列表页面
    public function domitory(){
        $Domitory = D("Domitory");
        $Class = D("Class","Model");
        $Picture = D("Picture");
        $classid = $_GET['class'];
        $pictureList = $Picture ->where("termid = 39")->select();
        $navigation = "公寓风采";
        $count = $Domitory->count();
            $Page =new \Think \Page($count,9);
            $show = $Page ->show();
            $domitoryList = $Domitory->limit($Page ->firstRow . ',' . $Page ->listRows )->select();
       
        $this->assign("navigation",$navigation);
        $this->assign("pictureList",$pictureList);
        $this -> assign("contentList",$contentList);
        $this->assign("domitoryList",$domitoryList);
        $this->assign("page",$show);
        $this->display();
    }
    /**
    *   党员及先进人物列表页
    **/
    public function teacher(){
        $Advance = D("Advance");
        $Student = D('Student');
        $Class = D("Class","Model");
        $Picture = D("Picture");
        $Classname = D('Classname');
        
        $classid = $_GET['class'];
        $pictureList = $Picture ->where("termid = 39")->select();
        $classnameList = $Classname ->select();
        //p($classnameList);
        $navigation = $Class ->getLeftName($classid);
        $class = $Class ->getClass($classid);//p($navigation);die;
        $contentList = $Class ->getLeftList($classid);//p($contentList);die;
        $title = $Class ->where("id = $class")->getField("classname");
       if($classid == 13){//先进人物展示，Advance表
            $type = 2;
            $count =$Advance ->count();
            $Page = new\Think\Page($count,9);
            $show = $Page ->show();
            $studentList = $Advance->limit($Page->firstRow.",".$Page->listRows) ->order("stuid")->select();
            for($j=0;$j<count($studentList);$j++){
                for($i=0;$i<count($classnameList);$i++){
                    if($studentList[$j]['cid'] == $classnameList[$i]['cid']){
                        $studentList[$j]['class'] = $classnameList[$i]['classname'];
                    }
                }
            }
        }else{ //优秀党员展示，student表
            $type = 1;
            $count =$Student ->count();
            $Page = new\Think\Page($count,9);
            $show = $Page ->show();
            $studentList = $Student->limit($Page->firstRow.",".$Page->listRows) ->order('stuid')->select();
            for($j=0;$j<count($studentList);$j++){
                for($i=0;$i<count($classnameList);$i++){
                    if($studentList[$j]['cid'] == $classnameList[$i]['cid']){
                        $studentList[$j]['class'] = $classnameList[$i]['classname'];
                    }
                }
                $person = $studentList[$j]['cid'];
                $studentList[$j]['classname'] = $Classname->where("id = $person")->getField('classname');
            }
        }
        //p($studentList);die;
        $this->assign("studentList",$studentList);
        $this->assign("navigation",$navigation);
        $this->assign("title",$title);
        $this->assign("type",$type);
        $this->assign("page",$show);
        $this -> assign("contentList",$contentList);
        $this->assign("pictureList",$pictureList);
        $this->display();
    }
     
}