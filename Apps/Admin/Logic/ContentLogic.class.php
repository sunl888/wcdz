<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 新闻栏目模型 <逻辑层>
//+---------------------------------
//| Author: webdd <2014/8/28>
//+---------------------------------

namespace Admin\Logic;
use Think\Model;

class ContentLogic extends Model{
	//栏目权限验证
	public function checkClassperm($classid,$userid){
		$User = D ("User");
		$ClassPerm = D ("ClassPerm");
		$Role = D ("Role");
		$roleid = $User->where(" id = $userid ")->getField("role_id");
		$parentid = $Role->where("id = $roleid")->getField('parentid');
		if($parentid == 0){
			return $parentid;
		}else{
			$classpermList = $ClassPerm->where("roleid = $roleid and classid = $classid")->select();
			for($i=0;$i<count($classpermList);$i++){
				$act[$i] = $classpermList[$i]['action'];
			}
			return $act;
		}
	}


	public function getUrl($content_id) {
		$Class = D ("Class");
		$class_id = $this->where("id = $content_id")->getField("classid");
		$class = $Class->find ( $class_id );
		$template_id = $class ['content_template'];
		$Template = D ("Template");
		$template = $Template->where ( "id = $template_id" )->find ();
		$url = __ROOT__ . "/" . $template ['url'] . "/" . $content_id;
		$url = str_replace ( "//", "/", $url );
		return $url;
	}
}