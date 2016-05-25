<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 后台首页控制器
//+---------------------------------
//| Author: webdd <2014//8/27>
//+---------------------------------

namespace Admin\Controller;
use Think\Controller;

class IndexController extends BaseController {

    //权限验证
    public function __construct() {
        parent::__construct ();
        $this->checkPerm();
    }

    public function index(){
        
    	$Menu = D ('Menu');
    	isset($_GET['menu'])?$menuid = $_GET['menu']:$menuid = 1;    
        $childMenuArr = $Menu->getChildMenu($menuid);
        if ($menuid == 1) {
            $AdminMenu = M ('AdminMenu');
            $where['uid'] = $this->user['id'];
            $childMenuArr[0]['cmenu'] = $AdminMenu->where($where)->select();
        }
        
        $this->assign('user',$this->user);
    	$this->assign("childMenuArr",$childMenuArr);
    	$this->assign("menuid",$menuid);
    	$this->display();
    }


    //获取新闻栏目列表 <通过Ajax方式>
    public function getclass(){
    	$Class = D ('Class');
    	$classStr = $Class->getClass('json');

    	empty($classStr)?$data ['status'] = 0:$data ['status'] = 1;
    	$data['data'] = $classStr;
    	$this->ajaxReturn ( $data, 'JSON' );
    }


    public function test(){
        $this->success("xxx操作成功");
    }


}