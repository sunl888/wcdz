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

class ClassLogic extends Model{

	//获取所有栏目
	public function getClass($type="array"){
		$classArr = array();
		$where['isshow'] = 1;
		$classArr = $this->where($where)->order('sort asc')->select();
		if(empty($classArr)) return $classArr;
		// 生成不同类型数据
		switch ($type) {
			case 'array':
				$classArr = $this->getArray($classArr);
				break;
			case 'json':
				$classArr = $this->getJSON($classArr);
				break;
		}
		return $classArr;
	}

	//递归获取所有子栏目
	public function getArray($data,$res = array(),$parentid='0'){
		foreach ($data as $k => $v){
	        if($v['parentid']==$parentid){
	            $res[$v['id']]['info'] = $v;
	            $res[$v['id']]['child'] = $this->getArray($data,array(),$v['id']);
		    }
	    }
	    return $res;
	}

	//递归获取栏目生成JSON数组
	public function getJSON($data,$res = array(),$parentid='0'){
		foreach ($data as $k => $v){
	        if($v['parentid'] == $parentid){
	        	$v['child']==1?$url = "javascript:void(0);":$url = __APP__."/Content/index/classid/".$v['id'];
	        	$res[] = array(
	        		"name" => $v['classname'],
	        		"open" => "true",
	        		"url" => $url,
	        		"target" => "coniframe",
	        		"children" => $this->getJSON($data,array(),$v['id'])
	        	);
		    }
	    }
	    return $res;
	}


	/**
	 * 递归获取父级菜单下的所有栏目
	 *
	 * @param number $parentid
	 * @param number $deep
	 * @return void multitype:
	 */
	public function getAllClass($parentid = 0, $deep = 0, $where = '') {
		static $classList = array ();
		$now_where = $where == '' ? "parentid = $parentid" : "parentid = $parentid and " . $where;
		$result = $this->where ( $now_where )->order ( 'sort' )->select ();
		if ($result == false)
			return;
		else {
			for($i = 0; $i < count ( $result ); $i ++) {
				$result [$i] ['deep'] = $deep;
				array_push ( $classList, $result [$i] );
				$this->getAllClass ( $result [$i] ['id'], $deep + 1, $where );
			}
		}
		return $classList;
	}

	//递归删除子栏目
	public function delClass($id,$path){
		$result = $this->where("parentid = $id")->select();
		if ($result == false)
			return;
		else {
			for($i = 0; $i < count ( $result ); $i ++) {
				$class_id = $result [$i] ['id'];
				//删除栏目缩略图
				$image = $result [$i] ['image'];
				if(isset($image))
					unlink($path.$image);
				$this->where(" id = $class_id ")->delete();
				$this->delClass ( $result [$i] ['id'],$path);
			}
		}
	}
	
	//递归删除栏目的文章
	public function delContent($id){
		$Content = D ("Content");
		$contentList = $Content->where("classid = $id")->select();
		for($i=0;$i<count($contentList);$i++){
			$this->delContentdata( $contentList[$i]['id'] );
		}
		$Content->where("classid = $id")->delete();
		$result = $this->where(" parentid = $id ")->select();
		if ($result == false)
			return;
		else {
			for($i = 0; $i < count ( $result ); $i ++) {
				$this->delContent ( $result [$i] ['id']);
			}
		}
	}
	
	//递归删除附加表的文章信息
	public function delContentdata($id){
		$ContentData = D("ContentData");
		$ContentData->where("id = $id")->delete();		
	}
	
	//递归删除栏目权限表
	public function delClassperm($id){
		$ClassPerm = D ("ClassPerm");
		$ClassPerm->where("classid = $id")->delete();
		$result = $this->where(" parentid = $id ")->select();
		if ($result == false)
			return;
		else {
			for($i = 0; $i < count ( $result ); $i ++) {
				$this->delClassperm ( $result [$i] ['id']);
			}
		}
	}
}