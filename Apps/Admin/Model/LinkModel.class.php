<?php
namespace Admin\Model;
use Think\Model;

/**
 * 
 * @author Administrator
 *
 */
class LinkModel extends Model {
	/**
	 *添加友情链接 
	 */
	public  $linkValidate = array(
		array(
			'name',
			'require',
			'连接名称不能为空!',
			1
		),
		array(
			'url',
			'require',
			'链接地址不能为空!',
			1
		),
		array(
			'termsid',
			'require',
			'所属分类不能为空!',
			1
		),
			

	);  
}