<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
  	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>e8通用后台</title>
    
   
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.css">

    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- e8 style -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/common.css">
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/main.css">
    
  </head>
  
  <body>
  
  	<div class="topbar">
    	
        <!-- 面包屑 -->
        <div class="topbar-mbx">
	<ul class="list-inline">
		<li>
			<a class="color-gray" href="/dygzz/admin.php/Center/index">
			<i class="fa fa-home fa-lg"></i>
			控制中心
			</a>
		</li>
	</ul> 
</div><!-- /.mbx -->
        
        <div class="topbar-search">
        	<form class="form-inline" role="form">
            	<div class="form-group">
            		<label class="sr-only" for="exampleInputEmail2">Email address</label>
            		<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                    
                    <i class="fa fa-search color-gray"></i>
          		</div>
            </form>
        </div>
    </div><!-- /.topbar -->
    
    <div class="page-content">
    
        <div class="page-header col-sm-12">
        	<h1>图片分类管理</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li><a href="/dygzz/admin.php/Picture/index">图片管理</a></li>
                    <li><a href="/dygzz/admin.php/Picture/add">添加图片</a></li>
                    <li class="active"><a href="/dygzz/admin.php/Picture/term">分类管理</a></li>
					<li><a href="/dygzz/admin.php/Picture/termadd">添加分类</a></li>
				</ul>

				<div class="tab-content">

                    <div id="classify" class="tab-pane in active">						
                        	<table class="table table-hover">
                            	<tr class="title background-blue">
                                	<th width="10%">ID</th>
                                    <th width="70%">分类名称</th>
	                            	<th width="20%" class="operate align-center">操作</th>                            	
                            	</tr>
                            	<?php if(is_array($termList)): foreach($termList as $key=>$term): ?><tr>
	                                	<td><?php echo ($term["id"]); ?></td>
	                                    <td><?php echo ($term["name"]); ?></td>
	                                	<td class="align-center"><a href="/dygzz/admin.php/Picture/termedit/id/<?php echo ($term["id"]); ?>/mw/<?php echo ($term["mw"]); ?>">修改</a> |&nbsp;
	                                	<a href="/dygzz/admin.php/Picture/index/termid/<?php echo ($term["id"]); ?>" >查看图片</a>
                                         |&nbsp;
                                        <a href="javascript:void(0);" onclick="return confirm('/dygzz/admin.php/Picture/termdel/id/<?php echo ($term["id"]); ?>','确定删除?');">删除</a>
	                            	</tr><?php endforeach; endif; ?>	
                            </table>
					</div>
   	                <div class="pageBar"><?php echo ($page); ?></div>
				</div>
			</div>
		</div><!-- /span -->
        
    </div><!-- /.page-content -->
    
  	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script> 
    <script src="/dygzz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.js"></script>
    <!--  -->
	<script src="/dygzz/Public/e8admin/default/js/e8.js"></script>
    
  </body>
</html>