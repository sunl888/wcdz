<?php
namespace Admin\Controller;
use Think\Controller;

class ClassController extends BaseController{
	/**
	 * 栏目列表
	 */
	public function index(){
		$Class = D("Class","Logic");
		$Model = D("Model");
		$classList = $Class->getAllClass ( 0 );    //获取父级菜单下的所有栏目
		for($i=0;$i<count($classList);$i++){
			//获取栏目模型
			$modelid = $classList[$i]["modelid"];
			$classList[$i]["modelname"] = $Model->where(" modelid = $modelid ")->getField("name");
			//获取栏目前缀
			$deep = $classList [$i] ['deep'];
			$classList [$i] ['prefix'] = str_repeat ( "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp", $deep ) . "|--";
			//获取栏目类型
			switch($classList[$i]['type']){
				case 0 :
					$classList[$i]['typename'] = '频道栏目';
					break;
				case 1:
					$classList[$i]['typename'] = "列表栏目";
					break;
				case 2:
					$classList[$i]['typename'] = "外部链接";
					break;
			}
		}	
		$this->assign("classList",$classList);
		$this->display();
	}
	/**
	 * 栏目排序
	 */
	public function sort(){
		if(IS_POST){
			$Class = D("Class");
			//给栏目排序
			$sort = $_POST["sort"];
			foreach ($sort as $key=>$val){
				$Class->where("id = $key")->setField("sort",$val);
			}
			$this->success("排序成功!",__APP__."/Class/index");
		}
	}
	/**
	 * 栏目添加
	 */
	public function add() {
		$Class = D ("Class","Model");
		$ClassLogic = D ( "Class","Logic");
		if (IS_POST){
			if (!$Class->validate($Class->_validate)->create()){
				$this->error($Class->getError()); 
			} else {
				$parentid = $_POST['parentid'];
				//写入allparentid
				if($parentid == 0){
					$Class->allparentid = $parentid;
				}else{
					$allparentid = $Class->where("id = $parentid")->getField("allparentid");
					$Class->allparentid = $allparentid.','.$parentid;
				}
				//上传图片
				$Upload = new\Libs\Util\Upload();
				if ($_FILES ['image'] ['name'] != "") {
					$fileInfo = $Upload->upload ( 'image', true );
					$Class->image = $fileInfo;
				}
				//写入栏目内容
				$Class->content = html_entity_decode($_POST['content']);
				if ($Class->add()){
					$id = mysql_insert_id ();
					//写入栏目权限
					$Role = D ("Role");
					$roleList = $Role->where("status = 1")->select();
					$post = $_POST;
					for($i=0;$i<count($roleList);$i++){
						$roleid = $roleList[$i]['id'];
						$action = $post[$roleid];
						for($j=0;$j<count($action);$j++){
							$ClassPerm = D ("ClassPerm");
							$ClassPerm->classid = $id;
							$ClassPerm->roleid = $roleid;
							$ClassPerm->action = $action[$j];
							$ClassPerm->add();
						}
					}
					//上级栏目写入child 和 arrchildid
					if($parentid == 0){
						$Class->child = 0;
					}else{
						$arrchildid = $Class->where("id = $parentid")->getField("arrchildid");
						if(empty($arrchildid)){
							$arrchildid = $id;
						}else{
							$arrchildid = $arrchildid.",".$id;
						}
						$Class->where("id = $parentid")->setField("arrchildid",$arrchildid);
						$Class->where("id = $parentid")->setField("child",1);
					}
					$this->success('添加成功!',__APP__.'/Class/index');
				} else {
					$this->error('添加失败!',__APP__.'/Class/index');
				}
			}
		} else {
			//获取栏木树
			$classList = $ClassLogic->getAllClass ( 0 );    //获取父级菜单下的所有栏目
			for($i=0;$i<count($classList);$i++){
				//获取栏目前缀
				$deep = $classList [$i] ['deep'];
				$classList [$i] ['prefix'] = str_repeat ( "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp", $deep ) . "|--";
			}
			$this->assign("classList",$classList);
			// 获取内容模型
			$Model = D ( 'Model' );
			$modelList = $Model->where ( "isopen = 1" )->select ();
			$this->assign ( 'modelList', $modelList );
				
			//获取角色
			$Role = D ("Role");
			$roleList = $Role->where("status = 1")->select();
			$this->assign("roleList",$roleList);
			// 获取栏目模板
			$Template = D ( 'Template' );
			$indexTemplateList = $Template->where ( "type = 0" )->select ();
			$this->assign ( 'indexTemplateList', $indexTemplateList );
			$contentTemplateList = $Template->where ( "type = 1" )->select ();
			$this->assign ( 'contentTemplateList', $contentTemplateList );
				
			$this->display ();
		}
	}
	
	/**
	 * 外部链接添加
	 */
	public function addlink(){
		$Class = D ( 'Class',"Logic");
		if (IS_POST){
			$classname = $_POST['classname'];
			$url =  $_POST['url'];
			if (empty($classname)) $this->error("栏目名称不能为空!");
			if (empty($url)){ 
				$this->error("链接地址不能为空!");
			}else{
				if(!preg_match('/http:\/\/[\w.]+[\w\/]*[\w.]*\??[\w=&\+\%]*/is',$url)){
					$this->error("链接地址格式不正确!");
				}
			}
			$Class->type = 2;
			$Class->classname = $classname;
			$Class->parentid = $_POST['parentid'];
			$Class->introduce = $_POST['introduce'];
			$Class->url = $url;
			//上传缩略图
			$Upload = new\Libs\Util\Upload();
			if ($_FILES ['image'] ['name'] != "") {
				$fileInfo = $Upload->upload ( 'image', true );
				$Class->image = $fileInfo;
			}
			if ($Class->add()){
				$this->success('添加成功!',__APP__.'/Class/index');
			} else {
				$this->error('添加失败!',__APP__.'/Class/index');
			}
		} else {
			//获取栏木树
			$classList = $Class->getAllClass ( 0 );    //获取父级菜单下的所有栏目
			for($i=0;$i<count($classList);$i++){
				//获取栏目前缀
				$deep = $classList [$i] ['deep'];
				$classList [$i] ['prefix'] = str_repeat ( "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp", $deep ) . "|--";
			}
			$this->assign("classList",$classList);
			$this->display ();
		}
	}
	
	/**
	 * 栏目修改
	 */
	public function edit(){
		$Class = D ("Class","Model");
		$ClassLogic = D ( 'Class',"Logic");
		if (IS_POST){
			$id = $_POST['id'];
			if (isset($id)){
				if (!$Class->validate($Class->_validate)->create()){
					$this->error($Class->getError());
				} else {
					 //修改栏目权限
					$Role = D ("Role");
					$roleList = $Role->where("status = 1")->select();
					$post = $_POST;
					$ClassPerm = D ("ClassPerm");
					$ClassPerm->where(" classid = $id ")->delete();
					for($i=0;$i<count($roleList);$i++){
						$roleid = $roleList[$i]['id'];
						$action = $post[$roleid];
						for($j=0;$j<count($action);$j++){
							$ClassPerm->classid = $id;
							$ClassPerm->roleid = $roleid;
							$ClassPerm->action = $action[$j];
							$ClassPerm->add();
						}
					} 
					//上传图片
					$Upload = new\Libs\Util\Upload();
					if ($_FILES ['image'] ['name'] != "") {
						$fileInfo = $Upload->upload ( 'image', true );
						//删除图片
						$image = $Class->where("id = $id")->getField("image");
						unlink($this->uploadPath.$image);
						$Class->image = $fileInfo;
					}
					//写入栏目内容
					$Class->content = html_entity_decode($_POST['content']);
				//	p($_POST['content']);
					if ($Class->save() !== false){
						$this->success('修改成功!',__APP__.'/Class/index');
					} else {
						$this->error('修改失败!',__APP__.'/Class/index');
					}
				}
			}
		}else{
			if (isset($_GET['id'])){
				//获取该id的所有值
				$id = $_GET['id'];
				$class = $Class->where("id = $id")->find();
				$this->assign('class',$class);
				//获取栏木树
				$classarr = $ClassLogic->getAllClass ( 0 );    //获取父级菜单下的所有栏目
				for($i=0;$i<count($classarr);$i++){
					//获取栏目前缀
					$deep = $classarr [$i] ['deep'];
					if ($classarr [$i] ['id'] == $class ['parentid'])
						$classarr [$i] ['select'] = 'selected = "selected"';
					$classarr [$i] ['prefix'] = str_repeat ( "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp", $deep ) . "|--";
				}
				$this->assign("classarr",$classarr);
				// 获取内容模型
				$Model = D ('Model');
				$modelList = $Model->where ( "isopen = 1" )->select ();
				// 判断该栏目的内容模型
				for($i = 0; $i < count ( $modelList ); $i ++) {
					if ($modelList [$i] ['modelid'] == $class ['modelid'])
						$modelList [$i] ['select'] = 'selected = "selected"';
				}
				$this->assign("modelList",$modelList);
				
				//获取角色
				$Role = D ("Role");
				$roleList = $Role->where("status = 1")->select();
				$this->assign("roleList",$roleList);
				
				
				//获取栏目权限
				$ClassPerm = D ("ClassPerm");
				for($i=0;$i<count($roleList);$i++){
					$roleid = $roleList[$i]['id'];
					$classpermList[$i] = $ClassPerm->where("classid = $id and roleid = $roleid")->select();
					for($j=0;$j<count($classpermList[$i]);$j++){
						$classpermList[$i][$j]['check'] = 'checked = "checked"';
						if($classpermList[$i][$j]['action'] == "index"){
							$classpermList[$i][$j]['name'] = '查看已审核文章';
						}
						if($classpermList[$i][$j]['action'] == "check"){
							$classpermList[$i][$j]['name'] = '查看未审核文章 ';
						}
						if($classpermList[$i][$j]['action'] == "restore"){
							$classpermList[$i][$j]['name'] = '查看回收站文章';
						}
						if($classpermList[$i][$j]['action'] == "add"){
							$classpermList[$i][$j]['name'] = '添加';
						}
						if($classpermList[$i][$j]['action'] == "edit"){
							$classpermList[$i][$j]['name'] = '修改';
						}
						if($classpermList[$i][$j]['action'] == "remove"){
							$classpermList[$i][$j]['name'] = '删除';
						}
						if($classpermList[$i][$j]['action'] == "renew"){
							$classpermList[$i][$j]['name'] = '还原';
						}
						if($classpermList[$i][$j]['action'] == "del"){
							$classpermList[$i][$j]['name'] = '永久删除';
						}
						if($classpermList[$i][$j]['action'] == "checkout"){
							$classpermList[$i][$j]['name'] = '审核';
						}
						if($classpermList[$i][$j]['action'] == "cancelcheck"){
							$classpermList[$i][$j]['name'] = '取消审核';
						}
						if($classpermList[$i][$j]['action'] == "sort"){
							$classpermList[$i][$j]['name'] = '排序';
						}
					}
					$count = count($classpermList[$i]);
					$arr = array(
						"0"=>array("0" => "index", "1" => "check", "2" => "restore","3" => "add","4" => "edit","5" => "edit","6" => "remove","7" =>"renew","8"=>"del","9"=>"checkout","10"=>"cancelcheck","11"=>"sort"),
						"1"=>array("0" => "查看已审核文章", "1" => "查看未审核文章 ", "2" => "查看回收站文章","3" => "添加","4" => "修改","5" => "修改","6" => "删除","7"=>"还原","8"=>"永久删除","9"=>"checkout","10"=>"取消审核","11"=>"排序"),
					);
					$num = count($arr[0]);
					for($j=0;$j<count($classpermList[$i]);$j++){
						$action = $classpermList[$i][$j]['action'];
						for($k = 0 ;$k < $num; $k++){
							if($action == $arr[0][$k]){
								unset($arr[0][$k]);
							}
						}
					}
					$n = $count;
					foreach ($arr[0] as $key=>$val){
						$classpermList[$i][$n]['action'] = $val;
						$classpermList[$i][$n]['check'] = '';
						$classpermList[$i][$n]['name'] = $arr[1][$key];
						$n++;
					}
					
				}
				//p($classpermList);
				$this->assign("classpermList",$classpermList);
				// 获取栏目模板
				$templateModel = D ( 'template' );
				$indexTemplateList = $templateModel->where ( "type = 0" )->select ();
				// 判断该栏目的封面模板
				for($i = 0; $i < count ( $indexTemplateList ); $i ++) {
					if ($indexTemplateList [$i] ['id'] == $class ['index_template'])
						$indexTemplateList [$i] ['select'] = 'selected = "selected"';
				}
				$this->assign ( 'indexTemplateList', $indexTemplateList );
				
				// 判断该栏目的内容模板
				$contentTemplateList = $templateModel->where ( "type = 1" )->select ();
				for($i = 0; $i < count ( $contentTemplateList ); $i ++) {
					if ($contentTemplateList [$i] ['id'] == $class ['content_template'])
						$contentTemplateList [$i] ['select'] = 'selected = "selected"';
				}
				$this->assign ( 'contentTemplateList', $contentTemplateList );
				$this->display();
			}else{
				$this->error('非法访问!',__APP__.'/Class/index');
			}
		}
	}
	
	/**
	 * 外部链接修改
	 */
	public function editlink(){
			$Class = D ( 'Class',"Logic");
			if (IS_POST){
				$id = $_POST['id'];
				$classname = $_POST['classname'];
				$url =  $_POST['url'];
				if (empty($classname)) $this->error("栏目名称不能为空!");
				if (empty($url)){
					$this->error("链接地址不能为空!");
				}else{
					if(!preg_match('/http:\/\/[\w.]+[\w\/]*[\w.]*\??[\w=&\+\%]*/is',$url)){
						$this->error("链接地址格式不正确!");
					}
				}
				$Class->where( "id = $id " )->setField('classname',$classname);
				$Class->where( "id = $id " )->setField('url',$url);
				$Class->where( "id = $id " )->setField('parentid',$_POST['parentid']);
				$Class->where( "id = $id " )->setField('introduce',$_POST['introduce']);
				//上传缩略图
				$Upload = new\Libs\Util\Upload();
				if ($_FILES ['image'] ['name'] != "") {
					$fileInfo = $Upload->upload ( 'image', true );
					$image = $Class->where("id = $id")->getField("image");
					unlink($this->uploadPath.$image);
					$Class->where( "id = $id " )->setField('image',$fileInfo);
				}
				$this->success ( '修改成功!', __APP__ . '/Class/index' );
			}else{
				if (isset($_GET['id'])){
					//获取该id的所有值
					$id = $_GET['id'];
					$class = $Class->where("id = $id")->find();
					$this->assign('class',$class);
					//获取栏木树
					$classarr = $Class->getAllClass ( 0 );    //获取父级菜单下的所有栏目
					for($i=0;$i<count($classarr);$i++){
						//获取栏目前缀
						$deep = $classarr [$i] ['deep'];
						if ($classarr [$i] ['id'] == $class ['parentid'])
							$classarr [$i] ['select'] = 'selected = "selected"';
						$classarr [$i] ['prefix'] = str_repeat ( "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp", $deep ) . "|--";
					}
					$this->assign("classarr",$classarr);
					
					$this->display();
				}else{
					$this->error('非法访问!',__APP__.'/Class/index');
				}
			}
	}
	/**
	 * 栏目删除
	 */
	public function del(){
		$Class = D ('Class');
		$path = $this->uploadPath;
		if (isset($_GET['id'])){
			$id = $_GET['id'];
			if ($class = $Class->find($id)){
				if ($result = $Class->delete()){
					//删除自身栏目的缩略图
					$image = $class ['image'];
					if(isset($image))
						unlink($path.$image);
					$ClassLogic = D ('Class',"Logic");
					//删除栏目权限
					$result2 = $ClassLogic->delClassperm($id);
					//删除包含de文章
					$result3 = $ClassLogic->delContent($id);
					//删除子栏目
					$result4 = $ClassLogic->delClass($id,$path);
					//在模型里启用
					$Class->startTrans();
					if($result && $result2 && $result3 && $result4){
						$Class->commit();//成功则提交
					}else{
						$Class->rollback();//不成功，则回滚
					}
					$this->success('删除成功!',__APP__."/Class/index");
				}
			} else {
				$this->error('指定栏目不存在!');
			}
		}else{
			$this->error('非法操作!');
		}
	}
}