<?php
namespace Admin\Model;
use Think\Model;

/**
 * 
 * @author Administrator
 *
 */
class ConfigModel extends Model {
	
	public $ExtendValidate = array (
			array(
					'varname',
					'require',
					'设置项不能为空!',
					1
			),
			array(
					'value',
					'require',
					'设置值不能为空!',
					1
			),
			array(
					'info',
					'require',
					'描述不能为空!',
					1
			),
	);		

}