<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
  	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>e8通用后台</title>
    
    <!-- 新 Bootstrap 核心 CSS 文件 -->
     <link rel="stylesheet" href="/wcdz/Public/e8admin/default/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="/wcdz/Public/e8admin/default/lib/font-awesome/css/font-awesome.min.css">
    
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- e8 style -->
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/css/common.css">
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/css/main.css">
    
  </head>
  
  <body>
  
  	<div class="topbar">
    	 <!-- 面包屑 -->
        <div class="topbar-mbx">
	<ul class="list-inline">
		<li>
			<a class="color-gray" href="/wcdz/admin.php/Center/index">
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
            		<input type="email" class="form-control input-sm" id="exampleInputEmail2" placeholder="Enter email">
                    
                    <i class="fa fa-search color-gray"></i>
          		</div>
            </form>
        </div>
    </div><!-- /.topbar -->
    
    <div class="page-content">
    
         <div class="page-header col-sm-12">
        	<h1>栏目添加</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li>
						<a href="/wcdz/admin.php/Class/index">栏目管理</a>
					</li>

					<li>
						<a href="/wcdz/admin.php/Class/add">添加栏目</a>
					</li>
                    
                    <li  class="active">
						<a href="/wcdz/admin.php/Class/addlink">添加外部链接栏目</a>
					</li>
				</ul>
				
				<div class="tab-content">
                    <div class="tab-pane in active">
                    	 <p class="title background-blue">基本属性</p>
                         <form action="/wcdz/admin.php/Class/addlink" method="post" enctype="multipart/form-data">
                            <table width="100%" class="table-form">
                                <tbody>
                                     <tr>
                                            <th width="160">上级栏目</th>
                                            <td>
                                                 <span class="col-sm-4">
                                                    <select class="form-control input-sm" name="parentid">
                                                 		<option value="0">==作为一级菜单==</option>
	                                                 	<?php if(is_array($classList)): foreach($classList as $key=>$class): ?><option value="<?php echo ($class["id"]); ?>"><?php echo ($class["prefix"]); echo ($class["classname"]); ?></option><?php endforeach; endif; ?>
                                                </select>
                                                 </span>
                                            </td>
                                       </tr>
                                       <tr>
                                            <th width="160">栏目名称</th>
                                            <td>
                                                  <span class="col-sm-4"><input type="text" class="form-control input-sm" placeholder="请输入栏目名称" name="classname"/></span>
                                            </td>
                                       </tr>
                                       <tr>
                                            <th>栏目缩略图</th>
                                            <td>
                                                 <span class="col-sm-4"><input type="file" name="image"/></span>
                                            </td>
                                       </tr>
                                       <tr>
                                            <th>栏目简介</th>
                                            <td>
                                                <span class="col-sm-4"><textarea class="form-control" style="height:90px;" name="introduce"></textarea></span>
                                            </td>
                                    	</tr>
                                         <tr>
                                            <th>链接地址</th>
                                            <td>
                                                 <span class="col-sm-4"><input type="text" name="url" class="form-control input-sm" placeholder="请输入链接地址"/></span>
                                            </td>
                                       </tr>
                                </tbody>
                            </table>
                             <div style="width:100%;height:60px;"></div>
                             <div class="admin-add">
                            	<button class="btn btn-primary btn-sm" type="submit">提交</button>
                             </div>
                         </form>
                    </div>
                    
				</div>
			</div>
		</div><!-- /span -->
        
    </div><!-- /.page-content -->
    
  
    <!-- jQuery文件 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="/wcdz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>
    <!--  -->
	<script src="e8admin/default/js/e8.js"></script>
    
  </body>
</html>