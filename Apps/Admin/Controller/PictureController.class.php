<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 图片管理控制器
//+---------------------------------
//| Author: webdd <2014//9/9>
//+---------------------------------

namespace Admin\Controller;
use Think\Controller;

class PictureController extends BaseController {
	//图片管理
	public function index(){
		$Picture = D ('Picture');
		if (IS_POST){
			$key = $_POST['key'];
			$keywords = $_POST['keywords'];
			$pictureList = $Picture->where(" $key Like '%$keywords%' ")->select();
		}else{
			if(isset($_GET['termid'])){
				$termid = $_GET['termid'];
				$pictureList = $Picture->where(" termid = $termid ")->select();
			}else{
				$pictureList = $Picture->select();
			}
		}
		$this->assign("pictureList",$pictureList);
		$this->display();
	}
	
	//添加图片
	public function add(){
		$Picture = D ('Picture','Model');
		if (IS_POST) {
			if (!$Picture->validate ( $Picture->Validate )->create ()) {
				$this->error ( $Picture->getError () );
			} else {
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
					$upload->thumbMaxWidth = '497';
					$upload->thumbMaxHeight = '316';
					$upload->thumbPrefix = 'thumb_';
					$upload->thumbRemoveOrigin = true;
					
					//开始上传
					if($upload->upload()){
						$info = $upload->getUploadFileInfo();
						//大图
						$image = "image/".$date.'/'.'thumb_'.$info[0]['savename'];
						$Picture->img = $image;
					}
				}else{
					$this->error("图片不能为空!");
				}
				//写入栏目内容
				$Picture->content = html_entity_decode($_POST['content']);
				$Picture->addtime = time();
				if ($Picture->add ()) {
					$this->success ( '添加图片成功!', __APP__ . '/Picture/index' );
				} else {
					$this->error ( '添加图片失败!', __APP__ . '/Picture/index' );
				}
			}	   			
		}else{
			$Term = D ('Term');
			$termWhere['module'] = "Picture";
			$termList= $Term->where($termWhere)->select();
			$this->assign ('termList',$termList);
			$this->display();
		}
		
	}
	
	//修改图片
	public function edit(){
		$Picture = D ('Picture','Model');
		if (IS_POST){
			$id = $_POST['id'];
			if (isset($id)){
				if (!$Picture->validate($Class->Validate)->create()){
					$this->error($Picture->getError());
				} else {
					//上传图片
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
						$upload->thumbMaxWidth = '229';
						$upload->thumbMaxHeight = '172';
						$upload->thumbPrefix = 'thumb_';
						$upload->thumbRemoveOrigin = true;
						
						//开始上传
						if($upload->upload()){
							$info = $upload->getUploadFileInfo();
							//大图
							$image = "image/".$date.'/'.'thumb_'.$info[0]['savename'];
							$img = $Picture->where("id = $id")->getfield("img");
							unlink($this->uploadPath.$img);
							$Picture->img = $image;
						}
					}
					//写入栏目内容
					$Picture->content = html_entity_decode($_POST['content']);
					$Picture->addtime = time();
					if ($Picture->save() !== false){
						$this->success('修改成功!',__APP__.'/Picture/index');
					} else {
						$this->error('修改失败!',__APP__.'/Picture/index');
					}
				}
			}
		}else{
			if (isset($_GET['id'])){
				//获取该id的所有值
				$id = $_GET['id'];
				$picture = $Picture->where("id = $id")->find();
				$this->assign('picture',$picture);
				// 获取栏目模板
				$Term = D ( 'Term' );
				$termList = $Term->where ( "module = 'Picture'" )->select ();
				// 判断该栏目的封面模板
				for($i = 0; $i < count ( $termList ); $i ++) {
					if ($termList [$i] ['id'] == $picture ['termid'])
						$termList [$i] ['select'] = 'selected = "selected"';
				}
				$this->assign ( 'termList', $termList );
				$this->display();
			}else{
				$this->error('非法访问!',__APP__.'/Class/index');
			}
		}
	}
	
	//图片删除
	public function del(){
		$Picture = D ('Picture');
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$img = $Picture->where("id = $id")->getField("img");
			unlink($this->uploadPath.$img);
			$Picture->where ("id = $id")->delete();
			$this->success("删除图片成功！",__APP__.'/Picture/index');
		} else {
			$this->error('非法操作!',__APP__.'/Picture/index');
		}
	}
	
	//图片分类管理
	public function term(){
		$Term = D ('Term');
		$where['module'] = "Picture";
		$count = $Term->where($where)->count();
		$Page = new \Think\Page($count , 10);
		$show = $Page->show();
		$termList = $Term->where($where)->limit( $Page->firstRow.','.$Page->listRows )->select();
		for ($i=0;$i<count($termList);$i++) {
			$termList [$i] [mw] = passport_encrypt ($termList [$i] ['id']);
		}
		$this->assign ('page',$show);
		$this->assign ('termList',$termList);
		$this->display();
	}
	
	//图片分类添加
	public function termadd(){
		$Term = M ('Term');
		if (IS_POST) {
			$val = $_POST['termname'];
			if (empty($val)) $this->error("分类名称不能为空!");
			$obj['parentid'] = 0;
			$obj['name'] = $val;
			$obj['module'] = "Picture";
			if ($Term->data($obj)->add()) {
				$this->success("添加图片分类成功",__APP__.'/Picture/term');
			}else{
				$this->error("添加图片分类失败!");
			}
		} else {
			$this->display();
		}
	}
	
	//修改链接分类
	public function termedit() {
		$Term = D ('Term');
		if (IS_POST) {
			$id = $_POST['id'];
			$name = $_POST ['name'];
			if(isset($id)){
				if (empty($name)) $this->error('图片分类不能为空');
					$Term->where( "id = $id " )->setField('name',$name);
					$this->success ( '修改图片分类成功!', __APP__ . '/Picture/term' );
				}	
			}else {
				if(isset($_GET['id'])){
					$id = $_GET['id'];
					$mw = $_GET ['mw'];
					if (empty($id) || empty($mw)) $this->error("缺少必要参数!");
					if (!compare($id,$mw)) $this->error("错误或恶意的操作,您的IP已被记录!");
					if (($term = $Term->find($id)) == null){
						$this->error('该网站设置不存在!');
					}
					$this->assign('term',$term);
					$this->display();
				}else{
					$this->error('非法访问!');
				}
			}
	} 
	
	//图片分类删除
	public function termdel(){
		$Term = D ('Term'); 
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$Term->where ("id = $id")->delete();
			$this->success("删除图片分类成功！",__APP__.'/Picture/term');
		} else {
			$this->error('非法操作!',__APP__.'/Picture/term');
		}
	}
	
	
}