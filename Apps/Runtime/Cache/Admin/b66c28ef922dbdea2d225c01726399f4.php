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
        	<h1>站点配置</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#">站点配置</a>
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
                    <li>
						<a href="/dygzz/admin.php/Config/extend">扩展配置</a>
					</li>
				</ul>

				<div class="tab-content">
					<div  class="tab-pane in active"><a href="/dygzz/Public/e8admin/default/js"></a>
						<p class="title background-blue">站点配置</p>
                        <form action="/dygzz/admin.php/Config/index" method="post">
                        <table class="table-form" >
                            <tr>
                                <th class = "table-name" width="150" >站点名称:</th>
                                <td>
                                	<input class="form-control input-sm wid-3" type="text" value="<?php echo ($config["sitename"]); ?>" name="sitename">
								</td>                                
                            </tr>
                            <tr>
                                <th>网站访问地址:</th>
                                <td>
                                    <input class="form-control input-sm wid-3" type="text" name="siteurl" value="<?php echo ($config["siteurl"]); ?>"  placeholder=""/>
                                    <span >请以“/”结尾</span>   
								</td>                                
                            </tr>
                            <tr>
                                <th >附件访问地址:</th>
                                <td>
                                    <input class="form-control input-sm wid-3" type="text" name="sitefileurl" value="<?php echo ($config["sitefileurl"]); ?>"  placeholder=""/>
                                    <span >非上传目录设置</span>
								</td>                                
                            </tr>
                             <tr>
                                <th >联系邮箱:</th>
                                <td>
                                    <input class="form-control input-sm wid-3" type="text" name="siteemail" value="<?php echo ($config["siteemail"]); ?>"  placeholder=""/>
								</td>                                
                            </tr>
                            <tr>
                                <th>网站关键字:</th>
                                <td>
                                    <input class="form-control input-sm wid-3" type="text" name="sitekeywords" value="<?php echo ($config["sitekeywords"]); ?>"  placeholder=""/>
                                    <input type="hidden" value="7" name="id" />
								</td>                                
                            </tr>
                            <tr>
                                <th >网站简介:</th>
                                <td>
                                    <textarea class="form-control input-sm wid-4" name="siteinfo" rows="5" ><?php echo ($config["siteinfo"]); ?></textarea>
                                </td>                                
                            </tr>
                            <tr>
                                <th>后台指定域名访问:</th>
                                <td>
                                <select class="form-control input-sm wid-2" name="domainaccess"> 
	                                <!-- 1为开启，0为关闭 -->
	                                <?php if($config ['domainaccess'] ==1): ?><option value="1">开启指定域名访问</option>
		                                <option value="0">关闭指定域名访问</option>
		                            <?php else: ?>  
	                                    <option value="0">关闭指定域名访问</option>	
	                                    <option value="1">开启指定域名访问</option><?php endif; ?>
                                </select>
                                <span>(功能需要配合“域名绑定”模块使用，需要在域名绑定模块中添加域名!)</span>
                            </tr>
                            <tr>
                                <th >是否生成首页:</th>
                                <td>
                                    <select class="form-control input-sm wid-2" name="generate">
                                    	 <?php if($config ['generate'] ==1): ?><option value="1">生成静态</option>
	                                      	<option value="0">不生成静态</option>
	                                     <?php else: ?> 	
	                                     	<option value="0">不生成静态</option>
	                                     	<option value="1">生成静态</option><?php endif; ?>	
                                    </select>
                            </tr>
                            <tr>
                                <th>首页URL规则:</th>
                                <td>
                                    <select class="form-control input-sm wid-2" name="index_urlruleid"> 
                                      <option>静态1:index_2.html</option>
                                    </select>
								<span>注意：该URL规则只有当首页模板中标签有开启分页才会生效。</span>			
                            </tr>
                            <tr>
                                <th >首页模板:</th>
                                <td>
                                    <select class="form-control input-sm wid-2" name="indextp" > 
                                        <option>index.php</option>
                                    </select>
                                	<span>新增模板以index_x.php形式</span>
                                </td>    
                            </tr>
                            <tr>
                                <th>首页视频:</th>
                                    <td>
                                        <input class="form-control input-sm wid-3" type="text" name="sitevideo" value="<?php echo ($config["sitevideo"]); ?>"  placeholder=""/>
                                        <span>请插入视频URL（例如：http://lxqncdn.miaopai.com/stream/SqKF1HStii3Mj8XLlfRKgA__.mp4）</span>
                                    </td>

                            </tr>
                        </table>
                        <div style="width:100%;height:60px;"></div>
                        <div class="admin-add">
                            <button type="submit" class="btn btn-primary btn-sm">提交</button>
                        </div>
                        </form>
					</div>
                </div>
            </div>
        </div><!-- /.col-sm-12 -->
    </div><!-- /span -->
    
</div><!-- /.page-content -->


<!-- jQuery文件 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>
<!--  -->
<script src="/dygzz/Public/e8admin/default/js/e8.js"></script>

</body>
</html>