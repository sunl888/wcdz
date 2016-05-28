<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/wcdz/Public/e8home/default/style/common.css" rel="stylesheet" type="text/css" />
<link href="/wcdz/Public/e8home/default/style/list.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/wcdz/Public/e8home/default/js/time.js"></script>
<title><?php echo ($classList["classname"]); ?>--<?php echo ($webInfo["sitename"]); ?></title>
</head>

<body>

<!--header-->
﻿ <div class="header">
     <img class="dzlogo" src="/wcdz/Public/e8home/default/images/dzlogo.png" />
     <span><img  class="title" src="/wcdz/Public/e8home/default/images/title.png" /></span>
</div>
<!--content-->
<div class="content">
        <!--nav-->
        <div class="nav">
                <ul class="nav_ul">
                    <li><a href="/wcdz/index.php/Index/index">首页</a></li>

                    <?php if(is_array($navList)): foreach($navList as $key=>$nav): ?><li><a href="<?php echo ($nav["url"]); ?>"><?php echo ($nav["nav_name"]); ?></a>
                            <ul class="inside_nav">
                                <?php if(is_array($nav['sub_nav'])): foreach($nav['sub_nav'] as $key=>$sub): ?><li><p><a href="<?php echo ($sub["url"]); ?>"><?php echo ($sub["nav_name"]); ?></a></p></li><?php endforeach; endif; ?>
                            </ul>
                        </li><?php endforeach; endif; ?>
                 </ul>
        </div>
        <!--time-->
        <div class="time">
            <span id="localtime"></span>
        </div>
       <!--content_left-->

<div class="contentleft">
    <div class="contentleftTop">
               <span class="newspic">
                   <img class="logo_1" src="/wcdz/Public/e8home/default/images/logo_1_03.gif" width="24" height="20" />&nbsp;&nbsp;流动党员之家
               </span>
        <!--左边导航-->
        <?php if(is_array($contentList)): foreach($contentList as $key=>$content): ?><p class="ctac"><a href="/wcdz/index.php/List/article/class/<?php echo ($content["id"]); ?>"><?php echo ($content["classname"]); ?></a></p><?php endforeach; endif; ?>
    </div>
    <div class="contentleftBottom">
        <p class="newspic">
            <img class="logo_1" src="/wcdz/Public/e8home/default/images/logo_1_03.gif" width="24" height="20" />&nbsp;&nbsp;交流园地
        </p>
        <p class="works"><a href=""><img class="works" src="/wcdz/Public/e8home/default/images/work_01.jpg" height="80px" width="100%"></a></p>
        <p class="contact"><a href="/wcdz/index.php/List/content/class/24"><img class="contact" src="/wcdz/Public/e8home/default/images/contact_01.jpg" height="80px" width="100%"></a></p>
        <p class="message"><a href="<?php echo U('Show/leave_word');?>"><img class="message" src="/wcdz/Public/e8home/default/images/message_01.jpg" height="80px" width="100%"></a></p>
    </div>
</div>

       <!--content_right-->
           <div class="content_right">
               <div class="top">
                   <img src="/wcdz/Public/e8home/default/images/posi_bg.gif">
                   <p>当前位置：<?php echo ($classList["classname"]); ?>>>正文<a href="<?php echo U('Index/index');?>">首页</a></p>
               </div>
               <div class="artical">
                   <?php if(is_array($contentPage)): foreach($contentPage as $key=>$content): ?><p><span><img src="/wcdz/Public/e8home/default/images/span.png"></span><a href="/wcdz/index.php/Show/content/id/<?php echo ($content["id"]); ?>"><?php echo ($content["title"]); ?></a><span class="date"><?php echo (date("Y-m-d",$content["addtime"])); ?></span></p><?php endforeach; endif; ?>
               </div>
               <div class="tab_list">
                   <?php echo ($page); ?>
               </div>
           </div>
       </div>
<div class="footer">
    <p>主办：淮南师范文化创意与传播学院党员工作站</p>
    <p>技术支持：<a href="http://www.e8net.cn" target="_blank">淮南师范学院E8网络工作室</a></p>
</div>
<script type="text/javascript">
    window.tick();
</script>
</body>
</html>