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
            		<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                    
                    <i class="fa fa-search color-gray"></i>
          		</div>
            </form>
        </div>
    </div><!-- /.topbar -->
    
    <div class="page-content">
    
        <div class="page-header col-sm-12">
        	<h1>链接管理</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
                    <?php if($cancel != 0): ?><li><span><a href="/wcdz/admin.php/Link/term" class="e8-prompt" style="font-size:12px;">&lt;返回角色管理</a></span>&nbsp;&nbsp;&nbsp;</li><?php endif; ?>
					<li class="active"><a href="#">友情链接</a></li>
					<li><a href="/wcdz/admin.php/Link/add">添加友情链接</a></li>
                    <li><a href="/wcdz/admin.php/Link/term">分类管理</a></li>
                    <li><a href="/wcdz/admin.php/Link/termadd">添加分类</a></li>
				</ul>

				<div class="tab-content">
					<div  class="tab-pane in active">
                        <p class="title background-blue">搜索</p>
							
                        <form action="/wcdz/admin.php/Link/index" method="post">
                            <div style="padding:5px 0;">    
                                <select name="term" class="form-control input-sm wid-2">
                                    <option value="null">请选择链接分组</option>
                                    <?php if(is_array($termArr)): $i = 0; $__LIST__ = $termArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$term): $mod = ($i % 2 );++$i;?><option value="<?php echo ($term["id"]); ?>"><?php echo ($term["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                <span>关键字：</span><input type="text" name="keywords" class="form-control input-sm wid-2" value="点击添入标题"onfocus="if (value =='点击添入标题'){value =''}"onblur="if (value ==''){value='点击添入标题'}"/>
                                <button type="submit" class="btn btn-default btn-sm" >搜索</button>
                            </div>
                        </form>

                        <form action="/wcdz/admin.php/Link/linkEdit" method="post" >
                            <table class="table table-hover">
                            	<tr>
                                	<th width="20">
                                       <input type="checkbox" id="checkbox" onclick='javascript:selectAll("id")'/>
                                    </th>   
                                	<th>ID</th>    	
                                	<th>名称</th>
                                    <th>链接地址</th>
                                    <th>简介</th>
                                    <th>分类</th>
	                            	<th class="align-center">操作</th>                            	
                            	</tr>
                            	<?php if(is_array($linkList)): foreach($linkList as $key=>$link): ?><tr>
	                                	<td><input type="checkbox" name="id" value="<?php echo ($link["id"]); ?>"/></td>
	                                	<td><?php echo ($link["id"]); ?></td>
	                                    <td><a href="#"><?php echo ($link["name"]); ?></a></td>
                                        <td><a href="<?php echo ($link["url"]); ?>" target="_blank"><?php echo ($link["url"]); ?></a></td>
	                                    <td><?php echo ($link["description"]); ?></td>
	                                    <td><?php echo ($link["termname"]); ?></td>                                                                	
	                                	<td class="align-center">
	                                		<a href="/wcdz/admin.php/Link/edit/id/<?php echo ($link["id"]); ?>/mw/<?php echo ($link["mw"]); ?>">修改</a>|&nbsp;
											<a href="javascript:void(0);" onclick="return confirm('/wcdz/admin.php/Link/del/id/<?php echo ($link["id"]); ?>','确定删除?');">删除</a>
	                                	</td>
	                            	</tr><?php endforeach; endif; ?>
							</table>
                            <div class="pageBar"><?php echo ($page); ?></div>
                            <div style="width:100%;height:60px;"></div>
                            <div class="admin-add">
                            	<button class="btn btn-primary btn-sm" type="button" onclick="javascript:treatCon('/wcdz/admin.php/Link/Del')">删除</button>
                            </div>
                        </form>                      
					</div>
				</div>
			</div>
		</div><!-- /span -->
        
    </div><!-- /.page-content -->
    
    <!-- 图片弹出层 -->
    <div id="outerdiv"
        style="position: fixed; top: 0; left: 0; background: rgba(0, 0, 0, 0.7); z-index: 10000; width: 100%; height: 100%; display: none;">
        <div id="innerdiv" style="position: absolute;">
          <img id="bigimg" style="border: 5px solid #fff;" src="" />
        </div>
    </div>

	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="/wcdz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/wcdz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.js"></script>
    <!--  -->
    <script src="/wcdz/Public/e8admin/default/js/fun.js"></script>
	<script src="/wcdz/Public/e8admin/default/js/e8.js"></script>
    
    <script>
    function showphoto(obj){
        var _obj = obj;
        var _this = $("#"+_obj);
        imgShow("#outerdiv", "#innerdiv", "#bigimg", _this);
    }
    </script>
    
  </body>
</html>