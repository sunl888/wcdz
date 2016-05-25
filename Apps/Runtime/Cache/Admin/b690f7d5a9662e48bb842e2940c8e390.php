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
        	<h1>后台登录日志管理</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li class="active">
						<a data-toggle="tab" href="/dygzz/admin.php/Log/index">后台登录日志</a>
					</li>

					<li>
					<a data-toggle="tab" href="javascript:void(0);" onclick="return confirm('/dygzz/admin.php/Log/del','确定删除?');">删除一个月前的登录日志</a>
					</li>
				</ul>

				<div class="tab-content">
					<div id="log" class="tab-pane in active">
						<p class="title background-blue">搜索</p>
                        <form action = "/dygzz/admin.php/Log/index" method="post">
                            <div class="search search-bar">
                                <div class="mb">
	                                 <span>搜索类型:</span>
	                                    <select class="form-control input-sm wid-1" name = "status">
	                                    	<option value="0">不限</option>
	                                        <option value ="1" >success</option>
	                                        <option value = "2" >error</option>
	                                    </select>
	                                 <span>用户名:</span>
	                                    <input class="form-control input-sm wid-2" type="text" name ="username" />
	                                 <span>IP:</span>
	                                    <input class="form-control input-sm wid-2" type="text" name ="loginip">                                    
	                            	<button class="btn btn-default btn-sm" type="submit" >搜索</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-hover">
                            <tr>
                                <th>序号</th>
                                <th>用户名</th>
                                <th>状态</th>
                                <th>其他说明</th>
                                <th>时间</th>
                                <th>IP</th>
                                <th>登录地区</th>
                            </tr>
                            <?php if(is_array($logList)): foreach($logList as $key=>$log): ?><tr>
	                                <td>#<?php echo ($key); ?></td>
	                                <td><?php echo ($log["username"]); ?></td>
	                                <td><?php echo ($log["status"]); ?></td>
	                                <td><?php echo ($log["info"]); ?></td>
	                                <td><?php echo (date( "Y/m/d h:i:s",$log["logintime"])); ?></td>
	                                <td><?php echo ($log["loginip"]); ?></td>
	                                <td><?php echo ($log["area"]); ?></td>
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