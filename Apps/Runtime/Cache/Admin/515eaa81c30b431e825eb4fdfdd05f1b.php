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
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.css">
    
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
        	<h1>角色管理</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#">角色管理</a>
					</li>

					<li>
						<a href="/wcdz/admin.php/Role/add">添加角色</a>
					</li>
                  
                    
				</ul>
				
				<div class="tab-content">
                	
                	<!-- 角色管理开始-->
					<div class="tab-pane in active">
                    <p class="title background-blue">角色信息</p>
						<table class="table table-hover">
                        	<thead>
                            	<tr>
                                    <th width="10%">ID</th>
                                    <th width="40%">分组名称</th>
                                    <th width="20%">分组描述</th>
                                    <th width="10%">状态</th>
                                    <th width="20%" class="align-center">管理操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($roleArr)): $i = 0; $__LIST__ = array_slice($roleArr,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$role): $mod = ($i % 2 );++$i;?><tr>
                                        <td>#<?php echo ($key); ?></td>
                                        <td><?php echo ($role["prefix"]); echo ($role["name"]); ?></td>
                                        <td><?php echo ($role["remark"]); ?></td>
                                        <td>
                                            <?php if($role["status"] == 1): ?>√
                                            <?php else: ?>
                                            ×<?php endif; ?>
                                        </td>
                                        <td class="align-center">| <a href="/wcdz/admin.php/User/index/role_id/<?php echo ($role["id"]); ?>">成员管理</a> | &nbsp;&nbsp;
                                        </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                <?php if(is_array($roleArr)): $i = 0; $__LIST__ = array_slice($roleArr,1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$role): $mod = ($i % 2 );++$i;?><tr>
                                        <td>#<?php echo ($key); ?></td>
                                        <td><?php echo ($role["prefix"]); echo ($role["name"]); ?></td>
                                        <td><?php echo ($role["remark"]); ?></td>
                                        <td>
                                            <?php if($role["status"] == 1): ?>√
                                            <?php else: ?>
                                            ×<?php endif; ?>
                                        </td>
                                        <td class="align-center">
                                            <a href="/wcdz/admin.php/Role/access/id/<?php echo ($role["id"]); ?>/mw/<?php echo ($role["mw"]); ?>">权限设置 </a>  |
                                            <a href="/wcdz/admin.php/User/index/role_id/<?php echo ($role["id"]); ?>">成员管理 </a> |
                                            <a href="/wcdz/admin.php/Role/edit/id/<?php echo ($role["id"]); ?>/mw/<?php echo ($role["mw"]); ?>"> 修改 </a> |
                                            <a href="javascript:void(0);" onclick="return confirm('/wcdz/admin.php/Role/del/id/<?php echo ($role["id"]); ?>/mw/<?php echo ($role["mw"]); ?>','确定要删除吗?如果该角色下有子角色或者该角色下有用户则不可以被删除!');"> 删除 </a>
                                        </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
					</div>
					<!-- 角色管理结束-->
                    
				</div>
                	
			</div>
		</div><!-- /span -->
        
    </div><!-- /.page-content -->
    
  
    <!-- jQuery文件 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="/wcdz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/wcdz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.js"></script>
    <!--  -->
    <script src="/wcdz/Public/e8admin/default/js/e8.js"></script>
    
  </body>
</html>