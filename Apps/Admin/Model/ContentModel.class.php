<?php
namespace Admin\Model;
use Think\Model;

class ContentModel extends Model {
	
	protected $_validate = array (
			array (
					'title',
					'require',
					'标题不能为空！',
					1 
			),
			array (
					'addtime',
					'require',
					'发布时间不能为空！',
					1 
			),
			array (
					'sort',
					'number',
					'排序值必须为数字！',
					1
			),
	);
}

?>