<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
  	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>e8通用后台</title>
    
     <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.css">

    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- e8 style -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/common.css">
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/main.css">
    
    <!-- 加载百度编辑器js -->
    <script type="text/javascript" charset="utf-8" src="/dygzz/Public/e8admin/default/lib/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/dygzz/Public/e8admin/default/lib/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/dygzz/Public/e8admin/default/lib/ueditor/lang/zh-cn/zh-cn.js"></script>
    
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
        	<h1>漂浮图片管理</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">

				<div class="tab-content">
					
					<div  class="tab-pane in active">
						<ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#base">基本属性</a>
                            </li>
                         </ul>
                      <form action = "/dygzz/admin.php/Flowimg/edit" enctype="multipart/form-data"  method = "post">
                      
                      <div class="tab-content">
                      	<!-- 基本属性开始 -->
                      	 <div id="base" class="tab-pane in active">
						   <p class="title background-blue">基本属性</p>
                        	 <table class="table-form">
                                <tr>
                                    <th class = "table-name" width="150" >图片名称:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="name" value="<?php echo ($flowList["name"]); ?>">
                                    </td>                                
                                </tr>
                                <tr>
                                    <th class = "table-name">图片链接:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="URL" value="<?php echo ($flowList["URL"]); ?>">
                                    </td>                                
                                </tr>
                                 <tr>
                                     <th class = "table-name">图片预览:</th>
                                     <td>
                                     <img class="img-thumbnail" id="photo<?php echo ($flowList["id"]); ?>" src="/dygzz/Public/e8admin/upload/<?php echo ($flowList["img"]); ?>" alt="<?php echo ($flowList["name"]); ?>" width="100px" height="65px" onclick="showphoto('photo<?php echo ($flowList["id"]); ?>');">
                                     </td>
                                 </tr>
                                <tr>
                                    <th>图片上传:</th>
                                    <td><input type="file" name="img" id= "file"/>
                                    </td>                                
                                </tr>
                                <tr>
                                	<th>打开方式</th>
                                    <td>
                                        <select class="form-control input-sm wid-2" name = "open" >

                                            <?php if($flowList["open"] == 1): ?><option value="1" selected>新页面打开</option>
                                                <option value ="0" >本页面打开</option>
                                                <?php else: ?>
                                                <option value="1" >新页面打开</option>
                                                <option value ="0" selected>本页面打开</option><?php endif; ?>

                                            <!--<option value ="2">图片介绍页面</option>-->
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>图片描述:</th>
                                    <td>
                                        <textarea class="form-control input-sm wid-4" rows="3" name="remark"><?php echo ($flowList["remark"]); ?></textarea>
                                    </td>
                                </tr>      
						     </table>
                             <div style="width:100%;height:60px;"></div>
                             <div class="admin-add">
                                <button type="submit" class="btn btn-primary btn-sm">确定操作</button>
                             </div> 
                           </div>  
                           <!-- 基本属性结束 -->
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
    <script>
	$(document).ready(function(){
    	//实例化编辑器
    	var ue = UE.getEditor('editor');
	})
  	</script>
  	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>

  </body>
</html>