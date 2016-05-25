<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Home\Controller;
use \Think\Controller;
/**
 * Description of AboutController
 *
 * @author 孙龙
 */
class ContentController extends Controller {
    //
    public function index(){
        $Content = D('Content','Model');
        $conID = $_GET['id'];//获取内容id
        $classid = $_GET['classid'];//获取classID 通过查表显示在面包屑导航栏上
        $con = $Content->getContentByID($conID);
        
        $this->assign("con",$con);
        //var_dump($con);die;
        $this->display();
    }
}
