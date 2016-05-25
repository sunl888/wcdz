<?php
//+---------------------------------
//| E8网络工作室 http:www.e8net.cn
//+---------------------------------
//| 栏目数据层 <数据层>
//+---------------------------------
//| Author: webdd <2014/9/6>
//+---------------------------------

namespace Admin\Model;
use Think\Model;

class ClassModel extends Model {
	
	protected  $_validate = array (
			array (
					'modelid',
					'require',
					'模型不能为空！',
					1
			),
			array (
					'parentid',
					'require',
					'上级栏目不能为空！',
					1
			),
			array (
					'classname',
					'require',
					'栏目名称不能为空！',
					1
			),
			array (
					'sort',
					'number',
					'排序值必须为数字！',
					1
			),
			array (
					'type',
					'require',
					'栏目类型不能为空！',
					1
			),
			array (
					'index_template',
					'require',
					'栏目封面模板不能为空！',
					1
			),
			array (
					'content_template',
					'require',
					'栏目内容模板不能为空！',
					1
			)
	);
}
?>