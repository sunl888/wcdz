<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
  	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>e8通用后台</title>
    
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.css">
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
            		<label class="sr-only" for="exampleInputEmail2">搜索内容</label>
            		<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                    
                    <i class="fa fa-search color-gray"></i>
          		</div>
            </form>
        </div>
    </div><!-- /.topbar -->
    
    <div class="page-content">
    
        <div class="page-header col-sm-12">
        	<h1>图片管理</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li class="active"><a href="/dygzz/admin.php/Picture/index">图片管理</a></li>
					<li><a href="/dygzz/admin.php/Picture/add">添加图片</a></li>
					<li><a href="/dygzz/admin.php/Picture/term">分类管理</a></li>
					<li><a href="/dygzz/admin.php/Picture/termadd">添加分类</a></li>
				</ul>

				<div class="tab-content">
					<div  class="tab-pane in active">
                        <p class="title background-blue">搜索</p>

                        <form action="/dygzz/admin.php/Picture/index" method="post">
                            <div style="padding:5px 0;">    
                                <select name="key" class="form-control input-sm wid-2">
                                    <option value="name">名称</option>
                                    <option value="hidden">是否可见</option>
                                </select>
                                <span>关键字：</span><input type="text" name="keywords" class="form-control input-sm wid-2"/>
                                <button type="submit" class="btn btn-default btn-sm" >搜索</button>
                            </div>
                        </form>

                        <form action="/dygzz/admin.php/Link/linkEdit" method="post">
                        	<?php if(is_array($pictureList)): foreach($pictureList as $key=>$picture): ?><div class="e8-pic">
	                                <img id="photo<?php echo ($picture["id"]); ?>" src="<?php echo (C("UPLOAD_PATH")); echo ($picture["img"]); ?>" class="img-rounded" width="123" height="110">
	                                <span class="e8-pic-btn">
	                                    <button type="button" class="btn btn-success btn-xs"  onclick="showphoto('photo<?php echo ($picture["id"]); ?>');">查看</button>
	                                    <a href="/dygzz/admin.php/Picture/edit/id/<?php echo ($picture["id"]); ?>" class=""><button type="button" class="btn btn-success btn-xs">修改</button></a>
	                                    <a href="javascript:void(0);" onclick="return confirm('/dygzz/admin.php/Picture/del/id/<?php echo ($picture["id"]); ?>','确定删除?');" class=""><button type="button" class="btn btn-success btn-xs">删除</button></a>
	                                </span>
                           		</div><?php endforeach; endif; ?>
                        </form>                      
					</div>
				 <div class="pageBar"><?php echo ($page); ?></div>
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
	<script src="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/dygzz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.js"></script>
    <!--  -->
	<script src="/dygzz/Public/e8admin/default/js/e8.js"></script>
    <script src="/dygzz/Public/e8admin/default/js/fun.js"></script>
    <script>
    $(document).ready(function(){
        
        $("div[class='e8-pic']").hover(function(){
            $(this).find("span").show();
        }, function(){
            $(this).find("span").hide();
        })
       
    });
        
    function showphoto(obj){
        var _obj = obj;
        var _this = $("#"+_obj);
        imgShow("#outerdiv", "#innerdiv", "#bigimg", _this);
    }
    </script>
    
  </body>
</html>