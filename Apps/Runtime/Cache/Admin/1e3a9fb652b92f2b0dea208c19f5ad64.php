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
            		<input type="email" class="form-control input-sm" id="exampleInputEmail2" placeholder="Enter email">
                    
                    <i class="fa fa-search color-gray"></i>
          		</div>
            </form>
        </div>
    </div><!-- /.topbar -->
    
    <div class="page-content">
    
        <div class="page-header col-sm-12">
        	<h1>栏目管理</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="/dygzz/admin.php/Class/index">栏目管理</a>
					</li>

					<li>
						<a href="/dygzz/admin.php/Class/add">添加栏目</a>
					</li>
                    
                    <li>
						<a href="/dygzz/admin.php/Class/addlink">添加外部链接栏目</a>
					</li>
				</ul>
				
				<div class="tab-content">
					<div  class="tab-pane in active">
                    
                    <p class="title background-blue">栏目列表</p>
                      <form action="/dygzz/admin.php/Class/sort" method="post">
						<table class="table table-hover">
                        	<thead>
                            	<tr>
                                    <th>序号</th>
                                    <th>栏目ID</th>
                                    <th width="40%">栏目名称</th>
                                    <th>栏目类型</th>
                                    <th>所属模型</th>
                                    <th>管理操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($classList)): foreach($classList as $key=>$class): ?><tr>
                                	<td>
                                    	<input type="text" style="width:50px;" value="<?php echo ($class["sort"]); ?>" name="sort[<?php echo ($class["id"]); ?>]"/>
                                    </td>
                                    <td><?php echo ($class["id"]); ?></td>
                                    <td><?php echo ($class["prefix"]); echo ($class["classname"]); ?></td>
                                    <td><?php echo ($class["typename"]); ?></td>
                                    <td><?php echo ($class["modelname"]); ?></td>
                                    <td>
                                    	<a href="#">访问</a>  |
                                    	<?php if($class["type"] == 2): ?><a href="/dygzz/admin.php/Class/editlink/id/<?php echo ($class["id"]); ?>">修改</a>  |
                                    	<?php else: ?>
                                    		<a href="/dygzz/admin.php/Class/edit/id/<?php echo ($class["id"]); ?>">修改</a>  |<?php endif; ?>
                                        <a href="javascript:void(0);" onclick="return confirm('/dygzz/admin.php/Class/del/id/<?php echo ($class["id"]); ?>','确认删除?');">删除</a>
                                    </td>
                                </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>
                        <div style="width:100%;height:60px;"></div>
                            <div class="admin-add">
                            	<button class="btn btn-primary btn-sm" type="submit">排序</button>
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
	<script src="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>
	<script src="/dygzz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.js"></script>
    <!--  -->
	<script src="/dygzz/Public/e8admin/default/js/e8.js"></script>
    
  </body>
</html>