<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {

    public function index(){
        $Student = D('Student');
        $Class = D('Class');
        $Content = D('Content');
        $Domitory = D('Domitory');
        $Picture = D('Picture');
        $Link = D('Link');
        $config = D('Config');
        $flowimg = D("flowimg");

        //漂浮广告
        $flowList = $flowimg ->find();
        //首页视频
        $configList = $config -> where("varname = 'sitevideo'") -> find();
        //p($configList);
        //最新公告
        $noticeList = $Content -> where("classid = 26 and status = 1") -> order("addtime desc") -> select();
        //dump($Content->getLastsql());
        //通知
        $tzList = $Content -> where("classid = 27 and status = 1") -> order("addtime desc") -> limit(12) -> select();
        //新闻
        $newList = $Content -> where("classid = 28 and status = 1") -> order("addtime desc") -> limit(12) -> select();
        //最新内容
        $contentList = $Content -> where("status = 1") -> order("addtime desc")->limit(12) -> select();
        //主题实践
        $actionList = $Content->where("(classid = 7 and status = 1) or (classid = 8 and status = 1) or (classid = 9 and status = 1)")->order("addtime desc")->select();
        //理论导航
        $theoryList = $Content->where("classid = 5 and status = 1")->order("addtime desc")->select();
        //手拉手心连心
        $heartList = $Content->where("classid = 21 and status = 1")->order("addtime desc")->select();
        //公寓风采
        $domitoryList = $Domitory -> limit(6) -> select();
        //友情链接
        $linkDepartment = $Link ->where("termsid =31 and visible= 1")->select();
        $linkStudy = $Link ->where("termsid =33 and visible= 1")->select();
        $linkCompitition = $Link ->where("termsid =37 and visible= 1")->select();
        //图片轮播
        $pictureList = $Picture -> where ("termid = 40 and hidden= 1") -> order( "addtime desc") -> select();
        //表中轮播图片的数量
        $imgCount = $Picture -> where("termid = 40 and hidden= 1")->count();
        //p($pictureList);die;
        $this ->assign("imgCount",$imgCount);
        $this ->assign("pictureList",$pictureList);
        $this ->assign("linkCompitition",$linkCompitition);
        $this ->assign("linkDepartment",$linkDepartment);
        $this ->assign("linkStudy",$linkStudy);
        $this ->assign("domitoryList",$domitoryList);
        $this ->assign("heartList",$heartList);
        $this ->assign("theoryList",$theoryList);
        $this ->assign("actionList",$actionList);
        $this ->assign("noticeList",$noticeList);
        $this ->assign("tzList",$tzList);
        $this ->assign("newList",$newList);
        $this ->assign("contentList",$contentList);
        $this ->assign("configList",$configList);
        $this ->assign("flowList",$flowList);

        $this -> display();
    }
}