<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
  	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>e8后台管理系统</title>
    
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="/wcdz/Public/e8admin/default/lib/font-awesome/css/font-awesome.min.css">
    
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/lib/zTree/css/zTreeStyle.css">
    
    <!-- e8 style -->
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/css/common.css">
    <link rel="stylesheet" href="/wcdz/Public/e8admin/default/css/e8.css">
    
  </head>
  
  <body>
  	
    <div class="e8-navbar">
    	<div class="navbar-container">
        	<div class="navbar-header pull-left">
                
            	<a href="#" class="navbar-info color-white">
                     
				<i class="icon-logo">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;计算机学院
                </i>
				</a><!-- /.brand -->

            </div><!-- /.header -->
            
            <div class="navbar-topmenu pull-left">
            	<ul class="list-inline topmenu">
            		<?php if(is_array($topMenuArr)): $i = 0; $__LIST__ = $topMenuArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topMenu): $mod = ($i % 2 );++$i; if($topMenu["id"] == $menuid): ?><li class="active"><a class="color-white" href="/wcdz/admin.php/<?php echo ($topMenu["controller"]); ?>/<?php echo ($topMenu["action"]); ?>/<?php echo ($topMenu["parameter"]); ?>"><?php echo ($topMenu["name"]); ?></a></li>
            			<?php else: ?>
            				<li><a class="color-white" href="/wcdz/admin.php/<?php echo ($topMenu["controller"]); ?>/<?php echo ($topMenu["action"]); ?>/<?php echo ($topMenu["parameter"]); ?>"><?php echo ($topMenu["name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            
            <div class="navbar-user pull-right">
            	<ul class="list-inline usermenu">
                    <li class="user-info">
                    	<a data-toggle="dropdown" href="javascript:void(0);" class="dropdown-toggle">
                    	<img class="img-circle" src="<?php echo (C("UPLOAD_PATH")); echo ($user["photo"]); ?>" height="38" width="38" />
                            <span class="color-white">
                                <small>欢迎光临,</small>
                                <?php echo ($user["username"]); ?>
                            </span>
                        
                        <span class="caret color-white"></span>
                        </a>
                        
                        <ul class="pop-usermenu pull-right dropdown-yellow dropdown-menu">
                            <li><a href="/wcdz/admin.php/Person/info" target="coniframe"><i class="fa fa-pencil fa-fw"></i> 修改个人信息</a></li>
                            <li><a href="/wcdz/admin.php/Person/pwd" target="coniframe"><i class="fa fa-pencil fa-fw"></i> 修改密码</a></li>
                            <li class="divider"></li>
                            <li><a href="/wcdz/admin.php/Public/logout"><i class="fa fa-sign-out fa-fw"></i> 退出登录</a></li>
						</ul>
                    </li>
                </ul>
            </div><!-- /.navbar-user -->
        </div><!-- /.navbar-container -->
    </div><!-- /.e8-navbar -->
    
    
    <div class="e8-container">
    	<div class="left-content pull-left">
        	<div class="fast-operation">
                <a href="/wcdz/admin.php/Content/add" target="_blank" title="文章添加">
				<button class="e8-btn btn-success">
					<i class="fa fa-pencil  fa-lg"></i>
				</button></a>

                <a href="javascript:showTree();" title="文章管理" >
				<button class="e8-btn btn-info no-radius">
					<i class="fa fa-file-text-o fa-lg"></i>
				</button></a>

                <a href="<?php echo ($webInfo["siteurl"]); ?>" title="首页" target="_blank">
				<button class="e8-btn btn-warning no-radius">
					<i class="fa fa-home fa-lg"></i>
				</button></a>

                <a href="" title="" target="">
				<button class="e8-btn btn-danger no-radius">
					<i class="fa fa-camera-retro fa-lg"></i>
				</button></a>
            </div>
            
            <ul class="nav nav-list e8-nav list-unstyled pull-left">
            	<?php if(is_array($childMenuArr)): $i = 0; $__LIST__ = $childMenuArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$childMenu): $mod = ($i % 2 );++$i;?><li>
                        <?php if($childMenu["url"] != '#'): ?><a href="/wcdz/admin.php/<?php echo ($childMenu["url"]); ?>" class="solid-line" target="coniframe">
                        <?php else: ?>
                            <a href="javascript:void(0);" class="solid-line"><?php endif; ?>
                                <i class="fa fa-circle-thin"></i>&nbsp;&nbsp;
                                <span class="menu-text"> <?php echo ($childMenu["name"]); ?> </span>
                            </a>
						

						<ul class="submenu list-unstyled">
						<?php if($childMenu["cmenu"] != 'null'): if(is_array($childMenu["cmenu"])): $i = 0; $__LIST__ = $childMenu["cmenu"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="dotted-line">
                                    <?php if($menu["type"] != 2): ?><a href="/wcdz/admin.php/<?php echo ($menu["url"]); ?>" onclick="hideTree();" target="coniframe">
                                        <i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;
                                        <?php echo ($menu["name"]); ?>
                                    </a>
                                    <?php else: ?>
                                    <a href="<?php echo ($menu["url"]); ?>">
                                        <i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;
                                        <?php echo ($menu["name"]); ?>
                                    </a><?php endif; ?>
								</li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
						</ul>
                	</li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul><!-- /.nav -->
            
            <div class="sidebar-collapse solid-line pull-left">
		    	<i class="fa fa-angle-double-left fa-lg color-gray" id="sidebar-collapse-btn"></i>
			</div>
            
        </div><!-- /.left-content -->
     	
        <div class="tree-content pull-left" id="tree-content">
        	<div class="tree-header pull-left">
            	<i class="fa fa-tree color-gray"></i>
                <span class="color-gray">列表视图</span>
                <button class="e8-btn pull-right" id="tree-close">
                	<i class="fa fa-times color-gray"></i>
                </button>
            </div>
            
            <div class="tree-pancel pull-left">
                <div class="">
                    <ul id="tree" class="ztree"></ul>
                </div>
            </div>
        </div>
        
        <iframe class="right-content pull-left" name="coniframe" frameborder="0" scrolling="auto"  src="/wcdz/admin.php/Center/index"></iframe>

        <div style="clear:both;"></div>
    </div><!-- /.container -->
    
    <!-- jQuery文件 -->
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="/wcdz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>
    <!-- 树形列表支持库文件 -->
	<script type="text/javascript" src="/wcdz/Public/e8admin/default/lib/zTree/js/jquery.ztree.core-3.5.js"></script>

    <!--  页面初始化js文件  -->
    <!-- 监听div 大小改变插件 -->
    <script src="/wcdz/Public/e8admin/default/js/resize.js"></script>
    <script src="/wcdz/Public/e8admin/default/js/fun.js"></script>
	<script src="/wcdz/Public/e8admin/default/js/e8.js"></script>
    
    <script type="text/javascript">
        var APP = "/wcdz/admin.php";
        var PUBLIC = "/wcdz/Public";
	</script>
    
  </body>
</html>