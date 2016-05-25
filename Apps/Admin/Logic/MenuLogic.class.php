<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 后台菜单模型 <逻辑层>
//+---------------------------------
//| Author: webdd <2014/8/27>
//+---------------------------------

namespace Admin\Logic;
use Think\Model;

class MenuLogic extends Model {

	//获取后台顶级菜单
	public function getTopMenu(){
		$where['parentid'] = 0;
		$where['app'] = "Admin";
		$where['status'] = 1;
		$where['hidden'] = 0;
		$menuArr = $this->where($where)->order('listorder asc')->select();
		return $menuArr;
	}

	//获取指定顶级栏目下的所有栏目
	public function getChildMenu($menuid) {
		$childMenuArr = array();
		$where['parentid'] = $menuid;
		$where['app'] = "Admin";
		$where['status'] = 1;
		$where['hidden'] = 0;
		$childMenuArr = $this->where($where)->order('listorder asc')->select();
		unset($where);
		if (empty($childMenuArr)) return $childMenuArr; 

		//获取三级栏目
		foreach ($childMenuArr as $key=>$val) {
			$where['parentid'] = $val['id'];
			$where['app'] = "Admin";
			$where['status'] = 1;
			$where['hidden'] = 0;
			$cmenu = $this->where($where)->order('listorder asc')->select();
			empty($cmenu)?$childMenuArr[$key]['cmenu'] = "null" : $childMenuArr[$key]['cmenu'] = $cmenu;
			unset($where);
			unset($cmenu);
		}
		
		return $childMenuArr;
	}


	//获取使用于zTree格式的数组
	public function getMenuForJson($where=""){
		$menuArr = array();
		$where = $where;
		$menuArr = $this->where($where)->order('listorder asc')->select();
		if(empty($menuArr)) return $menuArr;
		return $this->toJsonArr($menuArr);

	}

	//将查询到的数组转换为合适的JSON格式数组
	public function toJsonArr($data,$parentid='0',$deep=0){
		static $newArr = array();
		foreach ($data as $k => $v) {
			if($v['parentid'] == $parentid){
	        	$v['deep'] = $deep;
	        	$array = array();
	        	$array['id'] = $v['id'];
	        	$array['pId'] = $v['parentid'];
	        	$array['name'] = $v['name'];
	        	$array['open'] = "true";
	            $newArr[] = $array;
	            $this->toJsonArr($data,$v['id'],$deep+1);
		    }
		}
		return $newArr;
	}

}