<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言列表--<?php echo ($webInfo["sitename"]); ?></title>
<link href="/dygzz/Public/e8home/default/style/common.css" rel="stylesheet" type="text/css"/>
<link href="/dygzz/Public/e8home/default/style/message_details.css" rel="stylesheet" type="text/css" />
<link href="/dygzz/Public/e8home/default/style/left_common.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="body">
		<meta charset="UTF-8">
<div class="header">
  <div class="banner">
    <!--flash开始-->
                  <embed src="/dygzz/Public/e8home/default/swf/flash.swf" height="100%" width="100%"></embed>
                  
                <!--flash结束-->
  </div>
  <div id="nav">
            <ul >
                <li><a href="/dygzz/index.php/Index/index">首页</a></li>
                <?php if(is_array($navList)): foreach($navList as $key=>$nav): ?><li><a href="<?php echo ($nav["url"]); ?>"><?php echo ($nav["nav_name"]); ?></a>
                      <ul>
                        <?php if(is_array($nav['sub_nav'])): foreach($nav['sub_nav'] as $key=>$sub): ?><li><a href="<?php echo ($sub["url"]); ?>"><?php echo ($sub["nav_name"]); ?></a></li><?php endforeach; endif; ?>
                      </ul>
                  </li><?php endforeach; endif; ?>
             </ul>
        </div>
</div>
<!--details-->
<div class="body_com ">
	<link href="/dygzz/Public/e8home/default/style/common.css" rel="stylesheet" type="text/css"/>
<link href="/dygzz/Public/e8home/default/style/list.css" rel="stylesheet" type="text/css" />
<div class="listleft">
      <div class="lefttop">
          <h2><?php echo ($navigation); ?></h2>
            <ul>
              <?php if(is_array($contentList)): foreach($contentList as $key=>$content): ?><li><a href="/dygzz/index.php/List/article/class/<?php echo ($content["id"]); ?>"><span><?php echo ($content["classname"]); ?></span></a></li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="lxyz"><a href="/dygzz/index.php/Show/leave_word"><img src="/dygzz/Public/e8home/default/images/comment.png" alt="" width="200px" height="70px"></a></div>
        <?php if(is_array($pictureList)): foreach($pictureList as $key=>$picture): ?><div class="xjp" width="177px" height="60px"><a href="/dygzz/index.php/Show/picture/id/<?php echo ($picture["id"]); ?>"><img src="<?php echo (C("UPLOAD_PATH")); echo ($picture["img"]); ?>" alt="" width="200px" height="70px"></a></div><?php endforeach; endif; ?>
        <div class="lefbottom">
            
        </div>  
    </div>
    <div class="messagedetails_right">
    	<h2><span>当前位置：<a href="/dygzz/index.php/Index/index">首页>></a> 留言列表</span></h2>
        <!--留言内容开始-->
        <?php if(is_array($commentList)): foreach($commentList as $key=>$comment): ?><div class="discuss_list">                    	
               <div class="discuss_list_left"><a href="#"><img style=" width:60px; height:60px;  border-radius:50%; overflow:hidden;" src="/dygzz/Public/e8home/default/images/data_1.png"/></a></div>
               <div class="discuss_list_right">
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div style="font-size:14px; color:#999; margin-top:-10px; margin-bottom:10px;"><?php echo ($comment["name"]); ?>发表时间：<?php echo (date("Y-m-d",$comment["stutime"])); ?> </div><div style="color:#444; padding-right:22px"><?php echo ($comment["comment"]); ?></div></div><br>
               <div class="discuss_list_left"><img style=" width:60px; height:60px;  border-radius:50%; overflow:hidden;" src="/dygzz/Public/e8home/default/images/data_2.jpg"/></div>
               <div class="return">
                     <span class="ret">回复:&nbsp;&nbsp;&nbsp;&nbsp;</span><?php echo ($comment["answer"]); ?>
                </div>
              </div>
         </div><?php endforeach; endif; ?>
         <!--留言内容结束-->  
          <div class="tcdPageCode"><?php echo ($page); ?></div>                
    </div>
    <div class="clearfix"></div>
</div>         
  ﻿<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!--footer-->
<div class="footer">
            <p>地址：学生公寓9单元A栋102室</p>
            <p>技术支持：淮南师范学院E8网络工作室</p>
            <p>主办：淮南师范学院计算机学院党员工作站</p>
 </div>	



</div>
</body>
</html>