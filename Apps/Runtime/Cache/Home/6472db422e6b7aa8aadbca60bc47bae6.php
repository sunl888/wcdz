<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style/common.css" rel="stylesheet" type="text/css" />
<link href="style/members.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/time.js"></script>
<title>党员信息</title>
</head>
    <script>
        $(document).ready(function () {
            $('div.box').hover(function(){
                $(this).find('div.animated').stop(true).animate({top:'0px'});
            },function(){
                $(this).find('div.animated').stop(true).animate({top:'-150px'});
            })
        })
    </script>
<body>
<div class="body_bg"><img src="images/bg.jpg" /></div>
<!--header-->
<div class="header">
     <img class="dzlogo" src="images/dzlogo.png" />
     <span><img  class="title" src="images/title.png" /></span>
</div>
<!--content-->
<div class="content">
        <!--nav-->
        <div class="nav">
                <ul class="nav_ul">
                    <li><a href="#">首页</a></li>
                    <li><a href="#">党站简介</a>
                      <ul class="inside_nav">
                        <li><p><a href="#">工作站简介</a></p></li>
                        <li><p><a href="#">现任站委会</a></p></li>
                        <li><p><a href="#">历届站委会</a></p></li>
                      </ul>
                    </li>  
                    <li><a href="#">理论导航</a>
                      <ul class="inside_nav">
                        <li><p><a href="#">aa</a></p></li>
                        <li><p><a href="#">aa</a></p></li>
                        <li><p><a href="#">aa</a></p></li>
                      </ul>
                    </li>  
                    <li><a href="#">主题实践</a>
                      <ul class="inside_nav">
                        <li><p><a href="#">两学一做</a></p></li>
                        <li><p><a href="#">三严三实</a></p></li>
                        <li><p><a href="#">党课培训</a></p></li>
                      </ul>
                    </li>  
                    <li><a href="#">党员信息</a>
                      <ul class="inside_nav">
                        <li><p><a href="#">基层组织信息</a></p></li>
                        <li><p><a href="#">党员基本信息</a></p></li>
                        <li><p><a href="#">党员联系同学</a></p></li>
                      </ul>
                    </li>
                    <li><a href="#">示范园地</a>
                      <ul class="inside_nav">
                        <li><p><a href="#">优秀党员</a></p></li>
                        <li><p><a href="#">先进人物</a></p></li>
                        <li><p><a href="#">aa</a></p></li>
                      </ul>
                    </li>  
                    <li><a href="#">服务交流</a>
                      <ul class="inside_nav">
                        <li><p><a href="#">值班安排</a></p></li>
                        <li><p><a href="#">联系我们</a></p></li>
                        <li><p><a href="#">aa</a></p></li>
                      </ul>
                    </li>
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
                   <img class="logo_1" src="images/logo_1_03.gif" width="24" height="20" />&nbsp;&nbsp;流动党员之家
               </span>
                <p class="ctac"><a href="">党员简介</a></p>
                <p><a href="">党员风采</a></p>
                <p><a href="">服务交流</a></p>
           </div>
           <div class="contentleftBottom">
            <p class="newspic">
                   <img class="logo_1" src="images/logo_1_03.gif" width="24" height="20" />&nbsp;&nbsp;交流园地
            </p>
                <p class="works"><a href=""><img class="works" src="images/work_01.jpg" height="80px" width="100%"></a></p>
                <p class="contact"><a href=""><img class="contact" src="images/contact_01.jpg" height="80px" width="100%"></a></p>
                <p class="message"><a href=""><img class="message" src="images/message_01.jpg" height="80px" width="100%"></a></p>
           </div>
       </div>
       <!--content_right-->
       <div class="content_right">
        <div class="top">
            <img src="images/posi_bg.gif">
            <p>当前位置：党员信息>>正文<a href="#">首页</a></p>
        </div>
        <div class="dataImg">
            <div class="Row_first">
                <div class="box">
                    <img src="images/people.jpg">
                    <a href="#">
                        <div class="animated">
                            <p class="college">某学院</p>
                            <p class="profession">某专业</p>
                            <p class="name">某某</p>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <img src="images/people.jpg">
                    <a href="#">
                        <div class="animated">
                            <p class="college">某学院</p>
                            <p class="profession">某专业</p>
                            <p class="name">某某</p>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <img src="images/people.jpg">
                    <a href="#">
                        <div class="animated">
                            <p class="college">某学院</p>
                            <p class="profession">某专业</p>
                            <p class="name">某某</p>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <img src="images/people.jpg">
                    <a href="#">
                        <div class="animated">
                            <p class="college">某学院</p>
                            <p class="profession">某专业</p>
                            <p class="name">某某</p>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <img src="images/people.jpg">
                    <a href="#">
                        <div class="animated">
                            <p class="college">某学院</p>
                            <p class="profession">某专业</p>
                            <p class="name">某某</p>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <img src="images/people.jpg">
                    <a href="#">
                        <div class="animated">
                            <p class="college">某学院</p>
                            <p class="profession">某专业</p>
                            <p class="name">某某</p>
                        </div>
                    </a>
                </div>

                <div class="box">
                    <img src="images/people.jpg">
                    <a href="#">
                        <div class="animated">
                            <p class="college">某学院</p>
                            <p class="profession">某专业</p>
                            <p class="name">某某</p>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <img src="images/people.jpg">
                    <a href="#">
                        <div class="animated">
                            <p class="college">某学院</p>
                            <p class="profession">某专业</p>
                            <p class="name">某某</p>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <img src="images/people.jpg">
                    <a href="#">
                        <div class="animated">
                            <p class="college">某学院</p>
                            <p class="profession">某专业</p>
                            <p class="name">某某</p>
                        </div>
                    </a>
                </div>
            </div>


        </div>
        
           <div class="tab_list">
               <ul class="tab">
                   <li><a href="#">&lt;</a></li>
                   <li><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li><a href="#">...</a></li>
                   <li><a href="#">9</a></li>
                   <li><a href="#">&gt;</a></li>
               </ul>

           </div>

     </div>
  </div>
<div class="footer">
   <p>主办：淮南师范文化创意与传播学院党员工作站</p>
   <p>技术支持：淮南师范学院E8网络工作室</p>
</div>
<script type="text/javascript">
    window.tick();
</script>
</body>
</html>