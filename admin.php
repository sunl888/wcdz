<?php

	header( 'Content-Type:text/html; charset=utf-8' ); //页面编码
	define( 'THINK_PATH','./ThinkPHP/' ); //定义ThinkPHP框架文件路径
	define( 'APP_DEBUG',true ); //是否开启调试
	define('BIND_MODULE', 'Admin'); // 绑定Admin模块到当前入口文件
	define( 'APP_PATH','./Apps/' ); //项目路径
	
	//加载框架入口文件
	require ( THINK_PATH . 'ThinkPHP.php');
	
?> 