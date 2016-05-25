<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>e8通用后台</title>
    
    <link id="jquiCSS" rel="stylesheet" href="http://ajax.useso.com/ajax/libs/jqueryui/1.8.18/themes/ui-lightness/jquery-ui.css" type="text/css" media="all">
    
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    
     <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/font-awesome/css/font-awesome.min.css">
    <!-- 颜色选择组件 css -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/Colorpicker/evol.colorpicker.css">
    <!-- 时间选择组件 css -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/Datepicker/css/bootstrap-datetimepicker.min.css">
    
   <!-- 加载百度编辑器js -->
    <script type="text/javascript" charset="utf-8" src="/dygzz/Public/e8admin/default/lib/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/dygzz/Public/e8admin/default/lib/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/dygzz/Public/e8admin/default/lib/ueditor/lang/zh-cn/zh-cn.js"></script>
    <!-- e8 style -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/common.css">
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.css">
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
            		<input type="email" class="form-control  input-sm" id="exampleInputEmail2" placeholder="Enter email">
                    
                    <i class="fa fa-search color-gray"></i>
          		</div>
            </form>
        </div>
    </div><!-- /.topbar -->
    
    <div class="page-content">
    
        <div class="page-header col-sm-12">
        	<h1>添加寝室</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li><a href="/dygzz/admin.php/Domitory">寝室管理</a></li>
                    <li  class="active"><a href="#">添加寝室</a></li>
                </ul>
				</ul>

				<div class="tab-content">
				
					<div  class="tab-pane in active">
						<p class="title background-blue">添加寝室</p>
                        <form action = "/dygzz/admin.php/Domitory/add" enctype="multipart/form-data"  method = "post">
                        	 <table class="table-form" >
                                <tr>
                                    <th class = "table-name" width="150" >寝室号:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="did">
                                    </td>                                
                                </tr>
                                
                                <tr>
                                    <th>寝室长:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="leader">
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>图片:</th>
                                    <td><input type="file" name="img" />
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>个人简介:</th>
                                    <td>
                                        <!--<textarea class="form-control input-sm wid-4" rows="4" name="introduction"></textarea>-->
                                        <div class="wid-100">
                                            <script id="editor" type="text/plain" style="width:100%;height:300px;" name="introduction"></script>
                                        </div>   
                                    </td> 
                                                                
                                </tr>                                
						     </table>

                          <div style="width:100%;height:60px;"></div>
                          <div class="admin-add">
                            <button type="submit" class="btn btn-primary btn-sm">添加</button>
                          </div>  
                        </form>
					</div>
                   
				</div>
			</div>
		</div><!-- /span -->
        
    </div><!-- /.page-content -->
      <!-- jQuery文件 -->
    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
    <!-- jQuery-ui 文件 -->
    <script src="http://libs.baidu.com/jqueryui/1.10.2/jquery-ui.min.js "></script>
    <!-- Bootstrap 核心 JavaScript 文件 -->
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
   
    <!-- 时间选择组件js -->
    <script src="/dygzz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.js"></script>
    <script src="/dygzz/Public/e8admin/default/lib/Datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/dygzz/Public/e8admin/default/lib/Datepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
   
    <script>
    //实例化编辑器
    var ue = UE.getEditor('editor');

    $(document).ready(function(){
        //时间选择组件
        $('#datepicker').datepicker({
            inline: true
        });
        
    })
    </script>
  </body>
</html>