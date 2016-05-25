<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($title); ?>--<?php echo ($webInfo["sitename"]); ?></title>
<link href="/dygzz/Public/e8home/default/style/common.css" rel="stylesheet" type="text/css"/>
<link href="/dygzz/Public/e8home/default/style/party_details.css" rel="stylesheet" type="text/css" />
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
              <?php if(is_array($contentList)): foreach($contentList as $key=>$content): ?><li><a href="/dygzz/index.php/List/teacher/class/<?php echo ($content["id"]); ?>"><span><?php echo ($content["classname"]); ?></span></a></li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="lxyz"><a href="/dygzz/index.php/Show/leave_word"><img src="/dygzz/Public/e8home/default/images/comment.png" alt="" width="200px" height="70px"></a></div>
        <?php if(is_array($pictureList)): foreach($pictureList as $key=>$picture): ?><div class="xjp" width="177px" height="60px"><a href=""><img src="<?php echo (C("UPLOAD_PATH")); echo ($picture["img"]); ?>" alt="" width="200px" height="70px"></a></div><?php endforeach; endif; ?>
        <div class="lefbottom">
            
        </div>  
    </div>
    <div class="partydetails_right">
    	<h2><span>当前位置：<a href="#">首页>></a> <a href="/dygzz/index.php/List/teacher/class/11">示范园地>></a><?php echo ($title); ?></span></h2>
        <!--党员介绍内容开始-->
       <div class="information">
           <div class="inform_lef">
               <div class="nav_intro">基本信息</div>
               <img src="<?php echo (C("UPLOAD_PATH")); echo ($studentList["photo"]); ?>" alt="" width="150" height="115">
           </div>
           <div class="inform_right">
               <ul>
                   <li class="dyname"><?php echo ($studentList["name"]); ?></li>
                   <li>学号：<?php echo ($studentList["stuid"]); ?></li>
                   <li>班级：<?php echo ($studentList["class"]); ?></li>
                   <li>宿舍号：<?php echo ($studentList["domitory"]); ?></li>
                   <li>联系方式：<?php echo ($studentList["telephone"]); ?></li>
                   <li>政治面貌：<?php echo ($studentList["state"]); ?></li>
               </ul>
           </div>
       </div>
        <div class="clearfix"></div>
       <div class="citation">
           <div class="citation_left">
               <div class="citation_intro">获奖情况</div>
           </div>
           <div class="citation_right">
               <span><?php echo ($studentList["prize"]); ?></span>
           </div>
       </div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
       <div class="self_introduce">
           <div class="self_introduce_left">
               <div class="self_introduce_intro">个人简介</div>
           </div>
           <div class="self_introduce_right">
               <span><?php echo ($studentList["introduction"]); ?></span>
           </div>
       </div>
        <!--党员介绍内容结束-->
    </div>
    <div class="clearfix"></div>
</div>         
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!--footer-->
<div class="footer">
            <p>地址：学生公寓9单元a栋102室</p>
            <p>技术支持：淮南师范学院E8网络工作室</p>
            <p>主办：淮南师范学院计算机学院党员工作站</p>
 </div>	



</div>
</body>
</html>