<?php
namespace Admin\Controller;
use Think\Controller;

class ContentController extends BaseController {
	/**
	 * 文章列表显示
	 */
	public function index(){
		$classid = $_GET['classid'];
		$Content = D ("Content");
		//判断权限
		$ContentLogic = D("Content","Logic");
		$User = D ("User");
		$userid = $this->user['id'];
		$act = $ContentLogic->checkClassperm($classid,$userid);
		if ($act !== '0'){
			$action = ACTION_NAME;
			if(!in_array($action,$act)){
				$this->error("您没有权限操作当前模块");
			}
		}
		if (IS_POST) {
			$formtime = strtotime($_POST['formtime']);
			$totime = strtotime($_POST['totime']);
			$keywords = $_POST['keywords'];
			$key = $_POST['key'];
			if($formtime and $totime){
				$where = "status = 1 and uptime >= $formtime and uptime <= $totime ";
				if($keywords){
					if($key == 'id'){
						$where = "status = 1 and uptime >= $formtime and uptime <= $totime and $key = $keywords ";
					}else{
						$where = "status = 1 and uptime >= $formtime and uptime <= $totime and $key Like '%$keywords%' ";
					}
				}	
			}else{
				if($keywords){
					if($key == 'id'){
						$where = "status = 1 and $key = $keywords";
					}else{
						$where = "status = 1 and $key Like '%$keywords%' ";
					}
				}else{
					$where = "status = 1";
				}
			}
		}else{
			$where = "status = 1";
		}
		$count = $Content->where($where." and classid = $classid ")->count();
		$Page = new \Think\Page($count , 10);
		$show = $Page->show();
		$contentList = $Content->where($where." and classid = $classid ")->limit( $Page->firstRow.','.$Page->listRows )->order("sort,addtime desc")->select(); 
		for($i=0;$i<count($contentList);$i++){
			 $id = $contentList[$i]['id'];
			 $contentList[$i]['url'] = $Content->getUrl($id);
			 $sort = $contentList[$i]['sort'];
			 if(isset($contentList[$i]['relateid'])){
			 	$relateid = $contentList[$i]['relateid'];
			 	$contentList[$i] = $Content->find($relateid);
			 	$contentList[$i]['id'] = $id;
			 	$contentList[$i]['sort'] = $sort;
			 }
			 $userid = $contentList[$i]['userid'];
			 $contentList[$i]['username'] = $User->where("id = $userid")->getField("username");
			 $contentList[$i]['addtime'] = date("Y-m-d h:i:s",$contentList[$i]['addtime']);
		}
		$this->assign ('page',$show);
		$this->assign("contentList",$contentList);
		$this->assign("classid",$classid);
		$this->display();
	}
	/**
	 * 待审核显示列表
	 */
	public function check(){
		$Content = D ("Content");
		$classid = $_GET['classid'];
		//判断权限
		$ContentLogic = D("Content","Logic");
		$User = D ("User");
		$userid = $this->user['id'];
		$act = $ContentLogic->checkClassperm($classid,$userid);
		if ($act !== '0'){
			$action = ACTION_NAME;
			if(!in_array($action,$act)){
				$this->error("您没有权限操作当前模块");
			}
		}
		if (IS_POST) {
			$formtime = strtotime($_POST['formtime']);
			$totime = strtotime($_POST['totime']);
			$keywords = $_POST['keywords'];
			$key = $_POST['key'];
			if($formtime and $totime){
				$where = "status = 0 and uptime >= $formtime and uptime <= $totime ";
				if($keywords){
					if($key == 'id'){
						$where = "status = 0 and uptime >= $formtime and uptime <= $totime and $key = $keywords ";
					}else{
						$where = "status = 0 and uptime >= $formtime and uptime <= $totime and $key Like '%$keywords%' ";
					}
				}
			}else{
				if($keywords){
					if($key == 'id'){
						$where = "status = 0 and $key = $keywords";
					}else{
						$where = "status = 0 and $key Like '%$keywords%' ";
					}
				}else{
					$where = "status = 0";
				}
			}
		}else{
			$where = "status = 0";
		}
		$count = $Content->where($where." and classid = $classid ")->count();
		$Page = new \Think\Page($count , 10);
		$show = $Page->show();
		$contentList = $Content->where($where." and classid = $classid ")->limit( $Page->firstRow.','.$Page->listRows )->order("sort,addtime desc")->select();
		for($i = 0;$i<count($contentList);$i++){
			$id = $contentList[$i]['id'];
			$sort = $contentList[$i]['sort'];
			if(isset($contentList[$i]['relateid'])){
				$relateid = $contentList[$i]['relateid'];
				$contentList[$i] = $Content->find($relateid);
				$contentList[$i]['id'] = $id;
				$contentList[$i]['sort'] = $sort;
			}
			$userid = $contentList[$i]['userid'];
			$contentList[$i]['username'] = $User->where("id = $userid")->getField("username");
			$contentList[$i]['addtime'] = date("Y-m-d h:i:s",$contentList[$i]['addtime']);
		}
		$this->assign("contentList",$contentList);
		$this->assign ('page',$show);
		$this->assign("classid",$classid);
		$this->display();
	}
	/**
	 * 回收站文章列表
	 */
	public function restore(){
		$classid = $_GET['classid'];
		$Content = D("Content");
		//判断权限
		$ContentLogic = D("Content","Logic");
		$User = D ("User");
		$userid = $this->user['id'];
		$act = $ContentLogic->checkClassperm($classid,$userid);
		if ($act !== '0'){
			$action = ACTION_NAME;
			if(!in_array($action,$act)){
				$this->error("您没有权限操作当前模块");
			}
		}
		if (IS_POST) {
			$formtime = strtotime($_POST['formtime']);
			$totime = strtotime($_POST['totime']);
			$keywords = $_POST['keywords'];
			$key = $_POST['key'];
			if($formtime and $totime){
				$where = "status = 2 and uptime >= $formtime and uptime <= $totime ";
				if($keywords){
					if($key == 'id'){
						$where = "status = 2 and uptime >= $formtime and uptime <= $totime and $key = $keywords ";
					}else{
						$where = "status = 2 and uptime >= $formtime and uptime <= $totime and $key Like '%$keywords%' ";
					}
				}
			}else{
				if($keywords){
					if($key == 'id'){
						$where = "status = 2 and $key = $keywords";
					}else{
						$where = "status = 2 and $key Like '%$keywords%' ";
					}
				}else{
					$where = "status = 2";
				}
			}
		}else{
			$where = "status = 2";
		}
		$count = $Content->where($where." and classid = $classid ")->count();
		$Page = new \Think\Page($count , 10);
		$show = $Page->show();
		$contentList = $Content->where($where." and classid = $classid ")->limit( $Page->firstRow.','.$Page->listRows )->order("sort,addtime desc")->select();
		for($i = 0;$i<count($contentList);$i++){
			$id = $contentList[$i]['id'];
			$sort = $contentList[$i]['sort'];
			if(isset($contentList[$i]['relateid'])){
				$relateid = $contentList[$i]['relateid'];
				$contentList[$i] = $Content->find($relateid);
				$contentList[$i]['id'] = $id;
				$contentList[$i]['sort'] = $sort;
			}
			$userid = $contentList[$i]['userid'];
			$contentList[$i]['username'] = $User->where("id = $userid")->getField("username");
			$contentList[$i]['addtime'] = date("Y-m-d h:i:s",$contentList[$i]['addtime']);
		}
		$this->assign("contentList",$contentList);
		$this->assign ('page',$show);
		$this->assign("classid",$classid);
		$this->display();
	}

	/**
	 * 添加文章
	 */
	public function add() {
		$Content = D ('Content',"Model");
		if (IS_POST){
			if (!$Content->validate($Content->_validate)->create()){
				$this->error($Content->getError());
			} else {
				//写入栏目id
				$classid = $_POST['classid'];
				$selfid = $_POST['selfid'];
				if(empty($selfid)) $this->error("栏目未选择！");
				$Content->classid = $selfid;
				//写入islink
				$islink = $_POST['islink'];
				if($islink == 1){
					$Content->islink = 1;
				}
				//写入userid
				$Content->userid = $this->user['id'];
				//如果没有摘要，获取表单框中的指定字符个数的摘要
				if($_POST['choosedescription'] == "on"){
					$length = $_POST['length'];
					$content = $_POST["content"];
					$desc = substr($content,0,$length);
					$Content->description = $desc;
				}else{
					$Content->description = $_POST['description'];
				}
				//添加发布时间
				$addtime = strtotime($_POST['addtime']);
				$Content->addtime = $addtime;
				//如果有多张图片，获取表单框中的指定数字的图片
				if($_POST['choosepic'] == 'on'){
					$num = $_POST['picnum'];
					$content = $_POST['content'];
					preg_match_all('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i',$content,$matches);
					$num = $num - 1;
					$Content->thumb = $matches[2][$num];
				}else{
					//添加缩略图
					$Upload = new\Libs\Util\Upload();
					if($_FILES['thumb']['name'] != ""){
						$fileinfo = $Upload->upload("image",true);
						$Content->thumb = __ROOT__ ."/Public/e8admin/upload/".$fileinfo;
					}
				}				
				//写入更新时间
				$Content->uptime = time();
				if ($Content->add()){
					//获取新插入文章id
					$id = mysql_insert_id();
					//写入附加表信息
					//
					$ContentData = D ("ContentData");
					$ContentData->content = $_POST['content'];
					$ContentData->id = $id;
					$ContentData->add();
					//写入关联文章
					if($classid != ''){
						$classsidarr = explode(",",$classid);
						for($i=0;$i<count($classsidarr);$i++){
							$Content->classid = $classsidarr[$i];
							$Content->relateid = $id;
							$Content->add();
						}
						for($i=0;$i<count($classsidarr);$i++){
							$ContentData->relateid = $id;
							$ContentData->add();
						}
					}
					echo "<script>alert('添加成功！');window.close();window.onfocus=function(){alert('test');};</script>";
				} else {
					$this->error('添加失败!',__APP__.'/Index/index/menu/3');
				}
			}
		} else {
			//获取当前时间
			$nowtime = date("Y-m-d h:i:s",time());
			$this->assign("nowtime",$nowtime);
			$Class = D("Class","Logic");
			//获取栏目名称
			$classid = $_GET['classid'];
			$ContentLogic = D("Content","Logic");
			//判断权限
			$userid = $this->user['id'];
			$act = $ContentLogic->checkClassperm($classid,$userid);
			if ($act !== '0'){
				$action = ACTION_NAME;
				if(!in_array($action,$act)){
					$this->error("您没有权限操作当前模块");
				}
			}
			$classname = $Class->where("id = $classid")->getField("classname");
			$this->assign("classname",$classname);
			$this->assign("classid",$classid);
			//获取栏木树
			$classList = $Class->getAllClass ( 0 );
			for($i=0;$i<count($classList);$i++){
				if ($classList [$i] ['id'] == $classid){
					$classList [$i] ['check'] = 'checked = "checked"';
					$classList [$i] ['disabled'] =  "disabled";
				}
				//获取栏目前缀
				$deep = $classList [$i] ['deep'];
				$classList [$i] ['prefix'] = str_repeat ( "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp", $deep ) . "";
				$id = $classList[$i]['id'];
				if($Class->where("parentid = $id")->find()){
					$classList [$i] ['state'] = 0;
				}else{
					$classList [$i] ['state'] = 1;
				}
			}
			$this->assign("classList",$classList);
			$this->display ();
		}
	}
	
	/**
	 * 文章修改
	 */
	public function edit(){
		$Content = D ('Content',"Model");
		if (IS_POST){
			$id = $_POST['id'];
			if (isset($id)){ 
				if (!$Content->validate($Content->_validate)->create()){
					$this->error($Content->getError());
				} else {
					$classid = $Content->where("id = $id")->getField("classid");
					$relateid = $Content->where("id = $id")->getField("relateid");
					if(isset($relateid)){
						$where =  "id = $relateid";						
					}else{
						$where = "id = $id";
					}
					//修改附加表信息
					$ContentData = D ("ContentData");
					//写入userid
					$Content->where($where)->setField("userid",$this->user['id']);
					$ContentData->where($where)->setField("content",$_POST['content']);
					$Content->where($where)->setField("title",$_POST['title']);
					$Content->where($where)->setField("description",$_POST['description']);
					$Content->where($where)->setField("keywords",$_POST['keywords']);
					$Content->where($where)->setField("url",$_POST['url']);	
					$Content->where($where)->setField("uptime",time());
					$Content->where($where)->setField("source",$_POST['source']);
					$Content->where($where)->setField("author",$_POST['author']);
					$Content->where($where)->setField("sort",$_POST['sort']);
					$Content->where($where)->setField("addtime",strtotime($_POST['addtime']));
					if($_POST['islink'] == 1){
						$Content->where($where)->setField("islink",1);
					}else{
						$Content->where($where)->setField("islink",0);
					}
					//获取表单框中的指定字符个数的摘要
					if($_POST['choosedescription'] == "on"){
						$length = $_POST['length'];
						$content = $_POST["content"];
						$desc = substr($content,0,$length);
						$Content->where($where)->setField("description",$desc);
					}
					//如果有多张图片，获取表单框中的指定数字的图片
					if($_POST['choosepic'] == 'on'){
						$num = $_POST['picnum'];
						$content = $_POST['content'];
						preg_match_all('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i',$content,$matches);
						//p($matches);
						$num = $num - 1;
						$Content->where($where)->setField("thumb",$matches[2][$num]);
					}else{
						//修改缩略图
						$Upload = new\Libs\Util\Upload();
						if($_FILES['thumb']['name'] != ""){
							$fileinfo = $Upload->upload("image",true);
							$fileinfo = __ROOT__."/Public/e8admin/upload/".$fileinfo;
							//删除图片
							$thumb = $Content->where($where)->getField("thumb");
							unlink($_SERVER['DOCUMENT_ROOT'].$thumb);
							$Content->where($where)->setField("thumb",$fileinfo);
						}
					}
					echo "<script>alert('修改成功！');window.close();</script>";
				}
			}
		}else{
			if (isset($_GET['id'])){
				$id = $_GET['id'];	
				$content = $Content->where("id = $id")->find();
				if(isset($content['relateid'])){
					$relateid = $content['relateid'];
					$content = $Content->where(" id = $relateid ")->find();
				}
				$this->assign("id",$id);
				//获取栏木树
				$Class = D("Class");
				$classid = $content['classid'];
				//判断权限
				$ContentLogic = D("Content","Logic");
				$userid = $this->user['id'];
				$act = $ContentLogic->checkClassperm($classid,$userid);
				if ($act !== '0'){
					$action = ACTION_NAME;
					if(!in_array($action,$act)){
						$this->error("您没有权限操作当前模块");
					}
				}
				$classname = $Class->where("id = $classid")->getField("classname");
				$this->assign('classname',$classname);
				//获取发布时间
				$content['addtime'] = date("Y-m-d h:i:s",$content['addtime']);
				$this->assign('content',$content);
				//获取附加表的内容
				$ContentData = D ("ContentData");
				$contentdata = $ContentData->find($id);
				if(isset($contentdata['relateid'])){
					$relateid2 = $contentdata['relateid'];
					$contentdata = $ContentData->where(" id = $relateid2 ")->find();
				}
				$this->assign("contentdata",$contentdata);
				$this->display();
			}else{
				$this->error('非法访问!',__APP__.'/Class/index');
			}
		}
	}
	
	
	/**
	 * 文章排序
	 */
	public function sort(){
		$Content = D ("Content");
		if(IS_POST){
			//给文章排序
			$sort = $_POST["sort"];
			foreach ($sort as $key=>$val){
				$classid = $Content->where("id = $key")->getField("classid");
				$Content->where("id = $key")->setField("sort",$val);
			}
			//判断权限
			if(isset($classid)){
				$userid = $this->user['id'];
				$ContentLogic = D ("Content","Logic");
				$act = $ContentLogic->checkClassperm($classid,$userid);
				if ($act !== '0'){
					$action = ACTION_NAME;
					if(!in_array($action,$act)){
						$this->error("您没有权限操作当前模块");
					}
				}
			}else{
				$this->error("当前没有内容");
			}
			
			$this->success("排序成功!",__APP__."/Content/index/classid/".$classid);
		}
	}
	
	
	/**
	 * 审核文章
	 */
	public function checkout() {
		$id = $_GET ['id'];
		$idarr = explode(",",$id);
		$Content = D ("Content"); 
		$classid = $Content->where("id = $idarr[0]")->getField("classid");
		//判断权限
		$ContentLogic = D ("Content","Logic");
		$userid = $this->user['id'];
		$act = $ContentLogic->checkClassperm($classid,$userid);
		if ($act !== '0'){
			$action = ACTION_NAME;
			if(!in_array($action,$act)){
				$this->error("您没有权限操作当前模块");
			}
		}
		$where = "id in ($id)";
		$Content->where ( $where )->setField ( 'status',1);
		$this->success ( '文档审核成功！' );	
	}
	
	
	/**
	 * 取消审核文章
	 */
	public function cancelcheck() {
		$id = $_GET ['id'];
		$idarr = explode(",",$id);
		$Content = D ( 'Content' );
		$classid = $Content->where("id = $idarr[0]")->getField("classid");
		//判断权限
		$ContentLogic = D ("Content","Logic");
		$userid = $this->user['id'];
		$act = $ContentLogic->checkClassperm($classid,$userid);
		if ($act !== '0'){
			$action = ACTION_NAME;
			if(!in_array($action,$act)){
				$this->error("您没有权限操作当前模块");
			}
		}
		$where = "id in ($id)";
		$Content->where ( $where )->setField ( 'status',0);
		$this->success ( '取消审核成功！' );
	}
	
	
	/**
	 * 将文章移至回收站
	 */
	public function remove(){
		$id = $_GET ['id'];
		$idarr = explode(",",$id);
		$Content = D ( 'Content' );
		$userid = $this->user['id'];
		$classid = $Content->where("id = $idarr[0]")->getField("classid");
		//判断权限
		$ContentLogic = D ("Content","Logic");
		$act = $ContentLogic->checkClassperm($classid,$userid);
		if ($act !== '0'){
			$action = ACTION_NAME;
			if(!in_array($action,$act)){
				$this->error("您没有权限操作当前模块");
			}
		}
		$where = "id in ($id)";
		$Content->where ( $where )->setField ( 'status',2);
		$this->success ( '移至回收站成功！' );
	}
	
	
	/**
	 * 还原文章
	 */
	public function renew(){
		$id = $_GET ['id'];
		$idarr = explode(",",$id);
		$Content = D ( 'Content' );
		$classid = $Content->where("id = $idarr[0]")->getField("classid");
		//判断权限
		$ContentLogic = D ("Content","Logic");
		$userid = $this->user['id'];
		$act = $ContentLogic->checkClassperm($classid,$userid);
		if ($act !== '0'){
			$action = ACTION_NAME;
			if(!in_array($action,$act)){
				$this->error("您没有权限操作当前模块");
			}
		}
		$where = "id in ($id)";
		$Content->where ( $where )->setField ( 'status',0);
		$this->success ( '文档还原成功！' );
	}
	
	
	/**
	 * 永久删除文章
	 */
	public function del(){
		$id = $_GET ['id'];
		$idarr = explode(",",$id);
		$Content = D ("Content"); 
		$classid = $Content->where("id = $idarr[0]")->getField("classid");
		//判断权限
		$ContentLogic = D ("Content","Logic");
		$userid = $this->user['id'];
		$act = $ContentLogic->checkClassperm($classid,$userid);
		if ($act !== '0'){
			$action = ACTION_NAME;
			if(!in_array($action,$act)){
				$this->error("您没有权限操作当前模块");
			}
		}
		$ContentData = D ("ContentData");
		$idarr = explode(",",$id);
		for($i=0;$i<count($idarr);$i++){
			$Content->where ("relateid = $idarr[$i]")->delete();
			$ContentData->where ( "relateid = $idarr[$i]")->delete();
		}
		$where = "id in ($id)";
		$Content->where ( $where )->delete();
		$ContentData->where ( $where )->delete();
		$this->success ( '文档删除成功！' );
	}
	
	
	/**
	 * 标题检测
	 */
	public function test(){
		$title = $_GET['title'];
		if (empty($title)) {
			$data['status'] = 0;
			$data['msg'] = "标题为空";
		} else {
			$Content = D ("Content");
			$result = $Content->where("title = '$title'")->find();
			if (!empty($result)) {
					$data['status'] = 1;
					$data['']['msg'] = "标题重复";
				} else {
					$data['status'] = 2;
					$data['msg'] = "标题不重复";
			}
		}
		$this->ajaxReturn($data,'JSON');
	}
	
}