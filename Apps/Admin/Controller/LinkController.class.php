<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 友情链接控制器
//+---------------------------------
//| Author: 朱荣繁 <>
//+---------------------------------

namespace Admin\Controller;
use Think\Controller;

class Linkcontroller extends BaseController {
	
	//权限验证
    public function __construct() {
        parent::__construct ();
        $this->checkPerm();
    }

	public function index() {
		$Link = D ('Link');
		$Term = D ('Term');

		$termid = $_GET['id'];
		$where = "";
		$cancel = 0; //返回变量
		if (!empty($termid)) {
			$where['termsid'] = $termid;
			$cancel = 1;
		}

		if (IS_POST){
			if ($_POST['term'] != "null")
				$where['termsid'] = $_POST['term'];
			$where['name'] = array('like',"%".$_POST['keywords']."%");
		}

		$count = $Link->where($where)->count();
		$Page = new \Think\Page($count , 10);
		$show = $Page->show();
		$linkList = $Link->where($where)->limit ( $Page ->firstRow . ',' . $Page ->listRows )->order('id ')->select();
		for ($i=0;$i<count($linkList);$i++) {					
			$linkList [$i] ['mw'] =  passport_encrypt ($linkList [$i] ['id']);
			$where =  $linkList [$i] ['termsid'];
			$linkList [$i] ['termname'] = $Term ->where (" id = $where ")->getField('name');
		}

		//获取所有超级链接分组
		$termWhere['module'] = "Link";
		$termArr = $Term->where($termWhere)->select();

		//dump($linkList);die;
		$this->assign ('linkList',$linkList);
		$this->assign ('termArr',$termArr);
		$this->assign ('cancel',$cancel);
		$this->assign ('page',$show);
		$this->display();
	}
	
	/**
	 * 添加友情链接或者友情链接分组
	 */
	public function add(){
		$Link = D ('Link','Model');
		$time = time();
		if (IS_POST) {
			if (!$Link->validate ( $Link->linkValidate )->create ()) {
				$this->error ( $Link->getError () );
			} else {
				$name = $_POST ['termname'];

				// 上传图片
				$Upload = new \Libs\Util\Upload ();
				if ($_FILES ['photo'] ['name'] != "") {
					$fileInfo = $Upload->upload ( 'image', true );
					$Link->image = $fileInfo;
				}
				$Link->updated = $time;
				if ($Link->add ()) {
					
					// 写入日志
					$Operationlog = D ( 'Operationlog' );
					$info = "提示语：添加链接成功! <br />模块：" . MODULE_NAME . ",控制器：" . CONTROLLER_NAME . ",方法：" . ACTION_NAME . " <br />请求方式：POST";
					$get = __SELF__;
					$Operationlog->write ( $this->user ['id'], 1, $info, $get, $this->user ['last_login_ip'] );

					$this->success ( '添加链接成功!', __APP__ . '/Link/index' );
				} else {
					$this->error ( '添加链接失败!', __APP__ . '/Link/index' );
				}
			}	   			
		}else{
			$Term = D ('Term');
			$termWhere['module'] = "Link";
			$termList= $Term->where($termWhere)->select();
			$this->assign ('termList',$termList);
			$this->display();
		}
		
	}

	//添加友情链接分类
	public function termadd(){
		$Term = M ('Term');
		if (IS_POST) {
			$val = $_POST['termname'];
			if (empty($val)) $this->error("分类名称不能为空!");
			$obj['parentid'] = 0;
			$obj['name'] = $val;
			$obj['module'] = "Link";
			if ($Term->data($obj)->add()) {
				//写入日志
				$Operationlog = D ('Operationlog');
				$info = "提示语：添加链接分类成功! <br />模块：".MODULE_NAME.",控制器：".CONTROLLER_NAME.",方法：".ACTION_NAME." <br />请求方式：POST";
				$get = __SELF__;
				$Operationlog->write($this->user['id'],1,$info,$get,$this->user['last_login_ip']);

				$this->success("添加链接分类成功",__APP__.'/Link/term');
			}else{
				$this->error("添加链接分类失败!");
			}
		} else {
			$this->display();
		}
	}


	public function del(){
		$Link = D ('Link');
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$arr = explode(",",$id);
			for($i=0;$i<count($arr);$i++){
				$Link->where ("id = $arr[$i]")->delete();
			}

			//写入日志
			$Operationlog = D ('Operationlog');
			$info = "提示语：删除链接成功! <br />模块：".MODULE_NAME.",控制器：".CONTROLLER_NAME.",方法：".ACTION_NAME." <br />请求方式：GET";
			$get = __SELF__;
			$Operationlog->write($this->user['id'],1,$info,$get,$this->user['last_login_ip']);
			
			$this->success("删除链接成功！",__APP__.'/Link/index');
		} else {
			$this->error('非法操作!',__APP__.'/Link/index');
		}
	
	}
	
	/**
	 * 友情链接修改功能
	 */
	
	public function edit() {
		$Link = D ('Link','Model');
		$Term = D ('Term');
		$time = time();
		if (IS_POST) {
			// dump($_POST);die;
			$id = $_POST ['id'];
			$link = $Link->find ( $id );
			if (empty ( $link ))
				$this->error ( "指定友情链接不存在!" );
			if (! $Link->validate ( $Link->linkValidate )->create ()) {
				$this->error ( $Link->getError () );
			} else {
				// 上传缩略图
				$Upload = new \Libs\Util\Upload ();
				if ($_FILES ['photo'] ['name'] != "") {
					unlink ( $this->uploadPath . $link ['image'] );
					$fileInfo = $Upload->upload ( 'image', true );
					$Link->image = $fileInfo;
				}
				$Link->updated = $time;
				// dump($_POST);die;
				if ($Link->save ()) {
					// 写入日志
					$Operationlog = D ( 'Operationlog' );
					$info = "提示语：修改链接成功! <br />模块：" . MODULE_NAME . ",控制器：" . CONTROLLER_NAME . ",方法：" . ACTION_NAME . " <br />请求方式：POST";
					$get = __SELF__;
					$Operationlog->write ( $this->user ['id'], 1, $info, $get, $this->user ['last_login_ip'] );
					
					$this->success ( '修改链接成功!', __APP__ . '/Link/index' );
				} else {
					$this->error ( '修改失败!', __APP__ . '/Link/index' );
				}
			}
		} else {
			if (isset ( $_GET ['id'] )) {
				$id = $_GET ['id'];
				$mw = $_GET ['mw'];
				if (empty ( $id ) || empty ( $mw ))
					$this->error ( "缺少必要参数!" );
				if (! compare ( $id, $mw ))
					$this->error ( "错误或恶意的操作,您的IP已被记录!" );
				if (($link = $Link->find ( $id )) == null) {
					$this->error ( '该网站设置不存在!' );
				}
				// 返回id对应的记录
				$link = $Link->where ( " id = $id " )->find ();
				// dump($link);
				$termWhere['module'] = "Link";
				$termList = $Term->where($termWhere)->select ();
				for($i = 0; $i < count ( $termList ); $i ++) {
					// 判断属于那个分类
					if ($termList [$i] ['id'] == $link ['termsid']) {
						$termList [$i] ['select'] = 'selected="selected"';
					}
				}
				$this->assign ( 'link', $link );
				$this->assign ( 'termList', $termList );
				$this->display ();
			} else {
				$this->error ( '非法访问!' );
			}
		}
	}
	
	
	//友情链接组显示列表页
 	public function term(){
 		$Term = D ('Term');
 		$where['module'] = "Link";
 		$count = $Term->where($where)->count();
		$Page = new \Think\Page($count , 10);
		$show = $Page->show();
		$termList = $Term->where($where)->limit( $Page->firstRow.','.$Page->listRows )->select();
		for ($i=0;$i<count($termList);$i++) {
			$termList [$i] [mw] = passport_encrypt ($termList [$i] ['id']);
		}
		$this->assign ('page',$Page);
		$this->assign ('termList',$termList);
 		$this->display();
	} 
	
	//修改链接分类
	public function termedit() {
		$Term = D ('Term');
		if (IS_POST) {
			$id = $_POST['id'];
			$name = $_POST ['name'];
			if(isset($id)){
				if (empty($name)) $this->error('链接分类不能为空');
					$Term->where( "id = $id " )->setField('name',$name);
					// 上传
					// 写入日志
					$Operationlog = D ( 'Operationlog' );
					$info = "提示语：修改链接分类成功! <br />模块：" . MODULE_NAME . ",控制器：" . CONTROLLER_NAME . ",方法：" . ACTION_NAME . " <br />请求方式：POST";
					$get = __SELF__;
					$Operationlog->write ( $this->user ['id'], 1, $info, $get, $this->user ['last_login_ip'] );
					$this->success ( '修改链接分类成功!', __APP__ . '/Link/term' );
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
					$Term = $Term->where( "id = $id ")->find();
					$this->assign('term',$term);
					$this->display();
				}else{
					$this->error('非法访问!');
				}
			}
	} 
	
	
	/**
	 * 友情链接分类列表页删除
	 */
	public function termdel(){
		$Term = D ('Term'); 
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$Term->where ("id = $id")->delete();

			//写入日志
			$Operationlog = D ('Operationlog');
			$info = "提示语：删除链接分类成功! <br />模块：".MODULE_NAME.",控制器：".CONTROLLER_NAME.",方法：".ACTION_NAME." <br />请求方式：GET";
			$get = __SELF__;
			$Operationlog->write($this->user['id'],1,$info,$get,$this->user['last_login_ip']);
			$this->success("删除链接分类成功！",__APP__.'/Link/term');
		
		} else {
			$this->error('非法操作!',__APP__.'/Link/term');
		}
	}
	
}