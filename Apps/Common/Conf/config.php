<?php
return array(
	//'配置项'=>'配置值'

	// 设置禁止访问的模块列表
	'MODULE_DENY_LIST'      =>  array('Common','Runtime','Api'),

	//定义扩展类库命名空间
	'AUTOLOAD_NAMESPACE' => array(    'Libs' => APP_PATH.'Libs' ),

	// 数据库相关配置
	'DB_CHARSET' => 'utf8', // 数据库字符编码
	'DB_TYPE' => 'mysql', // 数据库类型
	//'DB_HOST' => '114.215.143.144', // 主机名称
	'DB_HOST' => 'localhost', // 主机名称
	'DB_NAME' => 'dygzz', // 数据库名称
	'DB_USER' => 'root', // 数据库管理员用户名
	//'DB_PWD' => 'e8mysql2015', // 数据库管理员密码
	'DB_PWD' => '', // 数据库管理员密码
	'DB_PREFIX' => 'dygzz_', // 数据库前缀

		
	'TOKEN_ON' => False, // 是否开启令牌验证 默认关闭
	'TOKEN_NAME' => '__hash__', // 令牌验证的表单隐藏字段名称，默认为__hash__
	'TOKEN_TYPE' => 'md5', // 令牌哈希验证规则 默认为MD5
	'URL_HTML_SUFFIX' => 'htm|html|shtml|xml'  // 配置网站伪静态后缀 为空支持所有后缀
	
);

/*
	'DB_CHARSET' => 'utf8', // 数据库字符编码
	'DB_TYPE' => 'mysql', // 数据库类型
	'DB_HOST' => '114.215.143.144', // 主机名称
	'DB_NAME' => 'mkszyllx', // 数据库名称
	'DB_USER' => 'root', // 数据库管理员用户名
	'DB_PWD' => 'e8network321', // 数据库管理员密码
	'DB_PREFIX' => 'mks_', // 数据库前缀
	

	// 数据库相关配置
	'DB_CHARSET' => 'utf8', // 数据库字符编码
	'DB_TYPE' => 'mysql', // 数据库类型
	'DB_HOST' => 'localhost', // 主机名称
	'DB_NAME' => 'mks', // 数据库名称
	'DB_USER' => 'root', // 数据库管理员用户名
	'DB_PWD' => '123', // 数据库管理员密码
	'DB_PREFIX' => 'mks_', // 数据库前缀
	*/