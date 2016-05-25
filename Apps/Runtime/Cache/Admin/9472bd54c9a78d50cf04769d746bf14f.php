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
						<a href="/dygzz/admin.php/Class/index">栏目管理</a>
					</li>

					<li  class="active">
						<a href="/dygzz/admin.php/Class/add">添加栏目</a>
					</li>
                    
                    <li>
						<a href="/dygzz/admin.php/Class/addlink">添加外部链接栏目</a>
					</li>
				</ul>
				
				<div class="tab-content">
					
					<div class="tab-pane in active">
						<ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#base">基本属性</a>
                            </li>
        
                            <li>
                                <a data-toggle="tab" href="#option">选项设置</a>
                            </li>
                            
                            <li>
                                <a data-toggle="tab" href="#model">模板设置</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#content">栏目内容</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#perm">权限设置</a>
                            </li>
                        </ul>
                     <form action="/dygzz/admin.php/Class/add" method="post" enctype="multipart/form-data">
                        <div class="tab-content">
                        
                        
                        <!-- 基本属性开始-->
                         <div id="base" class="tab-pane in active">
                             <p class="title background-blue">基本属性</p>
                            <table width="100%" class="table-form">
                                <tbody>
                                	<tr>
                                        <th width="120">请选择模型</th>
                                        <td>
                                           	 <span class="col-sm-4">
                                                <select class="form-control input-sm" name="modelid">
                                                	<?php if(is_array($modelList)): foreach($modelList as $key=>$model): ?><option value="<?php echo ($model["modelid"]); ?>"><?php echo ($model["name"]); ?></option><?php endforeach; endif; ?>
                                                </select>
                                             </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="120">上级栏目</th>
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
                                        <th width="180">类型</th>
                                        <td>
                                         <span class="col-sm-4">
                                           <input type="radio" value="1" name="type" checked="checked"/>列表栏目（多篇文档的列表栏目）<br/>
                                           <input type="radio" value="0" name="type"/>频道封面（栏目本身不允许发布文档，可充当"简介"等栏目）
                                           
                                         </span>
                                        </td>
                                    </tr>
                                     <tr>
                                        <th>栏目名称</th>
                                        <td>
                                           <span class="col-sm-4"><input type="text" name="classname" class="form-control input-sm" placeholder="请输入栏目名称"/></span>
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
                                            <span class="col-sm-4"><textarea  class="form-control" style="height:90px;" name="introduce"></textarea></span>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <div style="width:100%;height:60px;"></div>
                            <div class="admin-add">
                            	<button class="btn btn-primary btn-sm" type="submit">提交</button>
                            </div>
                         </div>
                         <!-- 基本属性结束-->
                                    
                        <!-- 选项设置开始-->
                         <div id="option" class="tab-pane">
                             <p class="title background-blue">选项设置</p>
                            <table width="100%" class="table-form">
                                <tbody>
                                	<tr>
                                        <th width="180">是否在导航显示</th>
                                        <td>
                                         <span class="col-sm-4">
                                           <input type="radio" value="1" name="isnav"  checked="checked"/>在导航显示
                                           <input type="radio" value="0" name="isnav"/>不在导航显示
                                         </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>显示排序</th>
                                        <td>
                                           	  <span class="col-sm-1"><input type="text" class="form-control input-sm" value="0" name="sort"/></span>
                                        </td>
                                    </tr>
                                     <tr>
                                        <th>SEO标题</th>
                                        <td>
                                           <span class="col-sm-4"><input type="text" name="seo_title" class="form-control input-sm" placeholder="请输入SEO标题"/></span>
                                        </td>
                                    </tr>
                                     <tr>
                                        <th>SEO关键（关键字中间用半角逗号隔开）字</th>
                                        <td>
                                             <span class="col-sm-4"><textarea  class="form-control" style="height:60px;" name="keywords"></textarea></span>
                                        </td>
                                    </tr>
                                   <tr>
                                        <th>SEO描述</th>
                                        <td>
                                              <span class="col-sm-4"><textarea class="form-control" style="height:60px;" name="description"></textarea></span>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <div style="width:100%;height:60px;"></div>
                            <div class="admin-add">
                            	<button class="btn btn-primary btn-sm" type="submit">提交</button>
                            </div>
                         </div>
                       <!-- 选项设置结束-->
                       
                         <!-- 模板设置开始-->
                         <div id="model" class="tab-pane">
                             <p class="title background-blue">模板设置</p>
                                <table width="100%" class="table-form">
                                    <tbody>
                                        <tr>
                                            <th width="160">栏目首页模板</th>
                                            <td>
                                                 <span class="col-sm-4">
                                                    <select class="form-control input-sm" name="index_template">
                                                    	<?php if(is_array($indexTemplateList)): foreach($indexTemplateList as $key=>$indexTemplate): ?><option value="<?php echo ($indexTemplate["id"]); ?>" ><?php echo ($indexTemplate["name"]); ?></option><?php endforeach; endif; ?>
                                                    </select>
                                                 </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="120">栏目内容模板</th>
                                            <td>
                                                 <span class="col-sm-4">
                                                    <select class="form-control input-sm" name="content_template">
                                                   		<?php if(is_array($contentTemplateList)): foreach($contentTemplateList as $key=>$contentTemplate): ?><option value="<?php echo ($contentTemplate["id"]); ?>"><?php echo ($contentTemplate["name"]); ?></option><?php endforeach; endif; ?>                                             
                                                    </select>
                                                 </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            <div style="width:100%;height:60px;"></div>
                            <div class="admin-add">
                            	<button class="btn btn-primary btn-sm" type="submit">提交</button>
                            </div>
                         </div>
                       <!-- 模板设置结束-->
                       
                       <!-- 内容设置开始-->
                         <div id="content" class="tab-pane">
                             <p class="title background-blue">栏目内容</p>
				                   <div class="wid-100">
				                        <script id="editor" type="text/plain" style="width:100%;height:300px;" name="content"></script>
				                   </div>
				            <div style="width:100%;height:60px;"></div>
                            <div class="admin-add">
                            	<button class="btn btn-primary" type="submit">提交</button>
                            </div>
                         </div>
                       <!-- 内容设置结束-->
                       
                       
                         <!-- 权限设置开始-->
                         <div id="perm" class="tab-pane">
                            <p class="title background-blue">权限设置</p>
                                <table width="100%" class="table-form">
                                    <tbody>
                                    	 <tr>
                                            <th width="200">角色权限</th>
                                            <td>
                                                 <span class="col-sm-4">
                                                    <div class="perm">
                                                    	<dl id ="dl">
                                                    	<?php if(is_array($roleList)): foreach($roleList as $key=>$role): ?><dt>
                                                               <?php echo ($role["name"]); ?>
                                                            	</dt>
                                                            <?php if($role["parentid"] == 0): ?><dd>
	                                                                <input  type="checkbox" value="index" name="<?php echo ($role["id"]); ?>[]" checked="checked" disabled="disabled">查看已审核文章
	                                                                <input  type="checkbox" value="check" name="<?php echo ($role["id"]); ?>[]" checked="checked" disabled="disabled">查看未审核文章 
	                                                                <input  type="checkbox" value="restore" name="<?php echo ($role["id"]); ?>[]" checked="checked" disabled="disabled">查看回收站文章
	                                                                <input  type="checkbox" value="add" name="<?php echo ($role["id"]); ?>[]" checked="checked" disabled="disabled">添加
	                                                                <input  type="checkbox" value="edit" name="<?php echo ($role["id"]); ?>[]" checked="checked" disabled="disabled">修改  
	                                                                <input  type="checkbox" value="remove" name="<?php echo ($role["id"]); ?>[]" checked="checked" disabled="disabled">删除
	                                                                <input  type="checkbox" value="renew" name="<?php echo ($role["id"]); ?>[]" checked="checked" disabled="disabled">还原
	                                                                <input  type="checkbox" value="del" name="<?php echo ($role["id"]); ?>[]" checked="checked" disabled="disabled">永久删除
	                                                                <input  type="checkbox" value="checkout" name="<?php echo ($role["id"]); ?>[]" checked="checked" disabled="disabled">审核  
	                                                                <input  type="checkbox" value="cancelcheck" name="<?php echo ($role["id"]); ?>[]" checked="checked" disabled="disabled">取消审核  
	                                                                <input  type="checkbox" value="sort" name="<?php echo ($role["id"]); ?>[]" checked="checked" disabled="disabled">排序								                       			                                          		                         										
	                                                            </dd>
	                                                    	<?php else: ?>
	                                                    		<dd>
	                                                                <input  type="checkbox" value="index" name="<?php echo ($role["id"]); ?>[]">查看已审核文章
	                                                                <input  type="checkbox" value="check" name="<?php echo ($role["id"]); ?>[]">查看未审核文章 
	                                                                <input  type="checkbox" value="restore" name="<?php echo ($role["id"]); ?>[]">查看回收站文章
	                                                                <input  type="checkbox" value="add" name="<?php echo ($role["id"]); ?>[]">添加
	                                                                <input  type="checkbox" value="edit" name="<?php echo ($role["id"]); ?>[]">修改  
	                                                                <input  type="checkbox" value="remove" name="<?php echo ($role["id"]); ?>[]">删除
	                                                                <input  type="checkbox" value="renew" name="<?php echo ($role["id"]); ?>[]">还原
	                                                                <input  type="checkbox" value="del" name="<?php echo ($role["id"]); ?>[]">永久删除
	                                                                <input  type="checkbox" value="checkout" name="<?php echo ($role["id"]); ?>[]">审核  
	                                                                <input  type="checkbox" value="cancelcheck" name="<?php echo ($role["id"]); ?>[]">取消审核  
	                                                                <input  type="checkbox" value="sort" name="<?php echo ($role["id"]); ?>[]">排序								                       			                                          		                         										
	                                                            </dd><?php endif; endforeach; endif; ?>
                                                        </dl>
                                                    </div>
                                                 </span>
                                            </td>
                                       </tr>
                                    </tbody>
                                </table>
                                 <div style="width:100%;height:60px;"></div>
                                 <div class="admin-add">
                                    <button class="btn btn-primary btn-sm" type="submit">提交</button>
                                 </div>
                         </div>
                       <!-- 权限设置结束-->
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
    <!-- jQuery文件 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>
    <!--  -->
	<script src="/dygzz/Public/e8admin/default/js/e8.js"></script>
    
  </body>
</html>