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
        	<h1>添加图片</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li><a href="/dygzz/admin.php/Picture/index">图片管理</a></li>
                    <li><a href="/dygzz/admin.php/Picture/add">添加图片</a></li>
                    <li><a href="/dygzz/admin.php/Picture/term">分类管理</a></li>
					<li><a href="/dygzz/admin.php/Picture/termadd">添加分类</a></li>
				</ul>

				<div class="tab-content">
					
					<div  class="tab-pane in active">
						<ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#base">基本属性</a>
                            </li>
        
                            <li>
                                <a data-toggle="tab" href="#content">图片内容</a>
                            </li>
                        </ul>
                       <form action = "/dygzz/admin.php/Picture/edit" enctype="multipart/form-data"  method = "post">
                       
                        <div class="tab-content">
                      	<!-- 基本属性开始 -->
                      	<div id="base" class="tab-pane in active">
						<p class="title background-blue">添加图片</p>
                        <input type="hidden" value="<?php echo ($picture["id"]); ?>" name="id"/>
                        	 <table class="table-form">
                                <tr>
                                    <th class = "table-name" width="150" >图片名称:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="name" value="<?php echo ($picture["name"]); ?>">
                                    </td>                                
                                </tr>
                                <tr>
                                    <th class = "table-name">作者:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" placeholder="" name="author">
                                    </td>                                
                                </tr>
                                 <tr>
                                    <th>所属分类:</th>
                                    <td>
                                        <select class="form-control input-sm wid-2" name ="termid" > 
                                            <option value="">==分类选择==</option>                                            	
                                            <?php if(is_array($termList)): foreach($termList as $key=>$term): ?><option value ="<?php echo ($term["id"]); ?>" <?php echo ($term["select"]); ?>><?php echo ($term["name"]); ?></option><?php endforeach; endif; ?>  
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>图片:</th>
                                    <td>
                                    	<img id="photo" src="<?php echo (C("UPLOAD_PATH")); echo ($picture["img"]); ?>" class="img-rounded" width="60" height="60">
                                    </td>                                
                                </tr>
                                <tr>
                                    <th>上传图片:</th>
                                    <td><input type="file" name="img" id= "file"/>
                                    </td>                                
                                </tr>
                                <tr>
                                	<th>点击打开方式</th>
                                    <td>
                                        <select class="form-control input-sm wid-2" name = "open">
                                        	<?php if($picture["open"] == 1): ?><option value="1" selected>外部链接</option>
                                            	<option value ="0">点击显示大图</option>
                                            	<option value ="2">图片介绍页面</option>
                                            <?php elseif($picture["open"] == 0): ?>
                                            	<option value="1">外部链接</option>
                                            	<option value ="0"  selected>点击显示大图</option>
                                            	<option value ="2">图片介绍页面</option>
                                            <?php else: ?>
                                            	<option value="1">外部链接</option>
                                            	<option value ="0">点击显示大图</option>
                                            	<option value ="2"  selected>图片介绍页面</option><?php endif; ?>
                                            	
                                            	
                                        </select>
                                    </td>
                                </tr>   
                                <tr>
                                	<th>图片是否可见</th>
                                    <td>
                                        <select class="form-control input-sm wid-2" name ="hidden"> 
                                        	<?php if($picture["hidden"] == 0): ?><option value = "0" selected>可见</option>
	                                            <option value = "1">不可见</option>
                                        	<?php else: ?>
                                        		<option value = "0">可见</option>
	                                            <option value = "1" selected>不可见</option><?php endif; ?>
                                        </select>
                                    </td>
                                 </tr>     
                                <tr>
                                    <th>图片描述:</th>
                                    <td>
                                        <textarea class="form-control input-sm wid-4" rows="3" name="remark"></textarea>
                                    </td>                                
                                </tr>      
						     </table>
                             <div style="width:100%;height:60px;"></div>
                             <div class="admin-add">
                                <button type="submit" class="btn btn-primary btn-sm">添加</button>
                             </div> 
                           </div>  
                          <!-- 基本属性结束 -->
                          
                          <!-- 图片内容开始-->
                          <div id="content" class="tab-pane">
                             <p class="title background-blue">图片内容</p>
				                   <div class="wid-100">
				                        <script id="editor" type="text/plain" style="width:100%;height:300px;" name="content"><?php echo ($picture["content"]); ?></script>
				                   </div>
				            <div style="width:100%;height:60px;"></div>
                            <div class="admin-add">
                            	<button class="btn btn-primary" type="submit">提交</button>
                            </div>
                         </div>
                         <!-- 图片内容结束-->
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
	<script src="/dygzz/Public/e8admin/default/js/fun.js"></script>
    <script>
    $(document).ready(function() { 
        $("#photo").click(function(){
            var _this = $(this);//将当前的元素作为_this传入函数
            imgShow("#outerdiv", "#innerdiv", "#bigimg", _this);
        });
    });
    </script>

  </body>
</html>