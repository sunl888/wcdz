<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 首页漂浮图片控制器
//+---------------------------------
//| Author: webdd <2016//5/18>
//+---------------------------------
namespace Admin\Controller;
use Think\Controller;
//var_dump(asdf);die();
class FlowimgController extends BaseController{
    public function index(){
        $flowimg = D ('flowimg');
        $flowList = $flowimg->find(1);
        //p( $flowList);
        $this->assign ('flowList',$flowList);
        $this->display();
    }
    public function edit(){
        $flowimg = D ('flowimg');
        if (IS_POST) {
            if (!$flowimg->validate ( $flowimg->Validate )->create ()) {
                $this->error ( $flowimg->getError () );
            } else {
                $data['name'] = $_POST['name'];
                $data['URL'] = $_POST['URL'];
                $data['remark'] = $_POST['remark'];
                $data['open'] = $_POST['open'];
                // 上传图片
                if ($_FILES ['img'] ['name'] != "") {
                    $date = date('Y-m-d');
                    $upload = new \Think\UploadFile();// 实例化上传类
                    $upload->maxSize = 3000000 ;// 设置附件上传大小
                    $upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                    $upload->allowTypes = array('image/jpg','image/jpeg','image/pjpeg','image/png','image/gif');
                    $upload->savePath = './Public/e8admin/upload/image/'.$date.'/';// 设置附件上传目录
                    $upload->saveRule = 'uniqid';

                    //缩略图配置
                    $upload->thumb = true;
                    $upload->thumbMaxWidth = '450';
                    $upload->thumbMaxHeight = '200';
                    $upload->thumbPrefix = 'thumb_';
                    $upload->thumbRemoveOrigin = true;

                    //开始上传
                    if($upload->upload()){
                        $info = $upload->getUploadFileInfo();
                        //大图
                        $image = "image/".$date.'/'.'thumb_'.$info[0]['savename'];
                        $flowimg->img = $image;
                        $data['img'] = $image;
                    }
                }
               //写入栏目内容
                //echo $flowimg->getlastsql($flowimg ->data($data)->add());p();
                if ($flowimg ->where(id == 1)->save($data)) {
                    $this->success ( '修改图片成功!', __APP__ . '/Flowimg/index' );
                } else {
                    $this->error ( '修改图片失败!', __APP__ . '/Flowimg/index' );
                }
            }

        }
    }
}