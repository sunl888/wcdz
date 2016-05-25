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
          <h1>扩展配置</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li >
						<a href="/dygzz/admin.php/Config/index">站点配置</a>
					</li>

					<li>
						<a  href="/dygzz/admin.php/Config/email">邮箱配置</a>
					</li>

					<li>
						<a  href="/dygzz/admin.php/Config/file">附件配置</a>
					</li>
                    <li>
						<a href="/dygzz/admin.php/Config/master">高级配置</a>
					</li>
                    <li class="active">
						<a  href="#">扩展配置</a>
					</li>
				</ul>

				<div class="tab-content">

                      <!-- 添加扩展配置 -->
                       <div class="tab-pane  in active">
                        <p class="title background-blue">添加扩展配置</p>
                        	<form action="/dygzz/admin.php/Config/extend" method="post">
                        	 <table class="table-form" >
                            	<tr>
                                	<th class = "table-hover" width="150" >设置项:</th>
                                  <td>
                                    <input class="form-control input-sm wid-2" type="text" name="varname" placeholder=""/>
                                	</td>
                        		</tr>
                                <tr>
                                	<th>设置值:</th>
                                    <td>
                                      <input class="form-control input-sm wid-2" type="text" name="value" placeholder=""/>
               						          </td>
                        		</tr>
                        		<tr>
                                	<th>设置项描述:</th>
                                    <td>
                                      <input class="form-control input-sm wid-2" type="text" name="info" placeholder=""/>
               						          </td>
                        		</tr>
                                <tr>
                                    <th>类型:</th>
                                    <td>
                                        <select class="form-control input-sm wid-1" name="type"> 
                                          <option>string</option>
                      										<option>number</option>
                      										<option>bool</option>
                                        </select>
                                    </td>
                                </tr>
                             </table>
                          <div class="btn-add" style="padding:10px 0; padding-left:5px;">
                          	<button type="submit" class="btn btn-sm btn-primary">添加</button>
                          </div>
                      </form>
                      <p class="title background-blue">扩展配置</p>
                     <!-- 判断是否为显示列表 -->
                     <?php if($condition != 1): ?><form action="/dygzz/admin.php/Config/extend" method="post">
	                      <table class="table table-hover">
	                      		<tr class="title">
	                      			<th>序号</th>
            									<th>设置项</th>
            									<th>设置值</th>
            									<th>设置项描述</th>
            									<th>类型</th>
            									<th class="align-center">操作</th>
	                      		</tr>
	                      		<?php if(is_array($configList)): foreach($configList as $key=>$config): ?><tr>
		                      			<td><?php echo ($config["id"]); ?></td>
		                      			<td><?php echo ($config["varname"]); ?></td>
		                      			<td><?php echo ($config["value"]); ?></td>
		                      			<td><?php echo ($config["info"]); ?></td>
		                      			<td><?php echo ($config["type"]); ?></td>
		                      			<td class="align-center">
		                                	<a href="/dygzz/admin.php/Config/extend_edit/id/<?php echo ($config["id"]); ?>/mw/<?php echo ($config["mw"]); ?>">修改</a> |&nbsp;
											 <a href="javascript:void(0);" onclick="return confirm('/dygzz/admin.php/Config/extend_del/id/<?php echo ($config["id"]); ?>','确定删除?');">删除</a>
		                                    
		                                </td>
		                      		</tr><?php endforeach; endif; ?>
	                      </table>
                      	</form><?php endif; ?>
                  </div>
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