<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 栏目数据层 <数据层>
//+---------------------------------
//| Author: webbc <2014/9/6>
//+---------------------------------

namespace Admin\Model;
use Think\Model;

class JysModel extends Model {
	
	protected  $_validate = array (
			array (
					'name',
					'require',
					'教研室名称不能为空！',
					1
			),
			array (
					'master',
					'require',
					'管理者不能为空！',
					1
			),
	);
}
?>