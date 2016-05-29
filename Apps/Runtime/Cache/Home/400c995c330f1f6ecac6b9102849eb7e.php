<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/wcdz/Public/e8home/default/style/common.css" rel="stylesheet" type="text/css" />
<link href="/wcdz/Public/e8home/default/style/index.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/wcdz/Public/e8home/default/js/jquery.js"></script>
    <script type="text/javascript" src="/wcdz/Public/e8home/default/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/wcdz/Public/e8home/default/js/index.js"></script>
    <script type="text/javascript" src="/wcdz/Public/e8home/default/js/textScroll.js"></script>
    <script type="text/javascript" src="/wcdz/Public/e8home/default/js/js.js"></script>
<title><?php echo ($webInfo["sitename"]); ?></title>
<style type="text/css">
.floatingAd .ad{z-index:100;background:none;position:absolute;display:none;}
.floatingAd a{color:#000000; display:inline-block;text-decoration:none;}
.floatingAd a img{border:0;}
.floatingAd .close{display:none;}
.floatingAd .opacity{position:absolute; top:0; width:100%; height:25px; background-color:#000000; opacity:0.20; filter:alpha(opacity = 20);}
.opacity1{opacity:0.90; filter:alpha(opacity = 90);}
.floatingAd .text{position:absolute; top:0; width:100%; height:25px; color:#000000; line-height:25px; }
.floatingAd .text .button{position:relative;float:right;top:5px;right:5px;width:16px;height:16px;background:url("http://211.70.176.138/jyxxw/templets/xqimg/img/close.png") no-repeat;cursor:pointer;}
.floatingAd .text .title{position:relative;float:left;font-size:12px;margin-left:5px;}
</style>

<script type="text/javascript" src="/wcdz/Public/e8home/default/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/wcdz/Public/e8home/default/js/floatingAd.js"></script>
<script type="text/javascript">
$(function(){

	$.floatingAd({
		//频率
		delay: 30,
		//超链接后是否关闭漂浮
		isLinkClosed: true,
		//漂浮内容
		ad:[{
			//关闭区域背景透明度(0.1-1)
			headFilter: 0.3,
			//图片
			'img': '<?php echo (C("UPLOAD_PATH")); echo ($flowList["img"]); ?>',
			//图片高度
			'imgHeight': 200,
			//图片宽度
			'imgWidth': 450,
			//图片链接
			'linkUrl': '<?php echo ($flowList["URL"]); ?>',
			//浮动层级别
			'z-index': 1000,
			//标题
			'title': '<?php echo ($flowList["name"]); ?>',
                        //关闭按键图片
            'closed-icon':'http://211.70.176.138/jyxxw/templets/xqimg/img/close.png'
		}]
		
	});
	
	$("#aa").floatingAd({
		onClose:function(elem){}
	});
	
});
</script>
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
<!--content_left-->

        <div class="content_left">
          <div class="content_leftTop">
            <p class="newspic">
                   <img class="logo_1" src="/wcdz/Public/e8home/default/images/logo_1_03.gif" width="24" height="20" />&nbsp;&nbsp;新闻图片
            </p>
<!--图片新闻开始--> 

        <div id="shutter" class="shutter">
            <div class="slider">
                <ul class="slider-main">

                    <?php if(is_array($pictureList)): foreach($pictureList as $key=>$picture): ?><li class="slider-panel">
                        <a href="/wcdz/index.php/Show/picture/id/<?php echo ($picture["id"]); ?>"><img src="<?php echo (C("UPLOAD_PATH")); echo ($picture["img"]); ?>"></a>
                    </li><?php endforeach; endif; ?>

                </ul>
                <div class="slider-extra">
                    <ul class="slider-nav">
                        <!--轮播图的个数-->
                        <?php $__FOR_START_29510__=1;$__FOR_END_29510__=$imgCount+1;for($i=$__FOR_START_29510__;$i < $__FOR_END_29510__;$i+=1){ ?><li class="slider-item"><?php echo ($i); ?></li><?php } ?>
                    </ul>

                    <div class="slider-page">
                        <a class="slider-pre"><</a>
                        <a class="slider-next">></a>
                    </div>
                </div>
            </div>
        </div>
		<script type="text/javascript">
        //水平百叶窗图片切换
        var shutterH = new Hongru.shutter.init('shutterH',{
            id:'shutter'
        });
        </script> 
        </div>
         <div class="content_leftBottom">
            <p class="newspic">
                   <img class="logo_1" src="/wcdz/Public/e8home/default/images/logo_1_03.gif" width="24" height="20" />&nbsp;&nbsp;交流园地

            </p>
                <p class="works"><a href="/wcdz/index.php/List/content/class/15"><img class="works" src="/wcdz/Public/e8home/default/images/work_01.jpg" height="80px" width="100%"></a></p>
                <p class="contact"><a href="/wcdz/index.php/List/content/class/24"><img class="contact" src="/wcdz/Public/e8home/default/images/contact_01.jpg" height="80px" width="100%"></a></p>
                <p class="message"><a href="<?php echo U('Show/leave_word');?>"><img class="message" src="/wcdz/Public/e8home/default/images/message_01.jpg" height="80px" width="100%"></a></p>
         </div>
      </div>
        
        
<!--content_center-->
<div class="content_center">
   <div class="newAnnoncontent">

   <div class="content_centerTop">
               <span class="newspic">
                   <img class="logo_1" src="/wcdz/Public/e8home/default/images/logo_1_03.gif" width="24" height="20" />&nbsp;&nbsp;公告栏
                   <span class="more"><a href="/wcdz/index.php/List/Gonggao">more>></a></span>
               </span>
    <div id="breakNews">
    <ul id="breakNewsList" class="list6">
        <!--首页公告-->

        <?php if(is_array($noticeList)): foreach($noticeList as $key=>$notice): ?><li><a href="/wcdz/index.php/Show/content/id/<?php echo ($notice["id"]); ?>"><?php echo ($notice["title"]); ?><span class="date"><?php echo (date("Y/m/d",$notice["addtime"])); ?></span></a></li><?php endforeach; endif; ?>

    </ul>
    </div>
</div>

<script language="javascript" type="text/javascript">
var scroll2 = new ScrollText("breakNewsList","pre2","next2",true,70,true);
scroll2.LineHeight = 24;
</script>

            <div class="content_centerBottom">
               <span class="newspic">
                   <img class="logo_1" src="/wcdz/Public/e8home/default/images/logo_1_03.gif" width="24" height="20" />&nbsp;&nbsp;公寓风采
                    <span class="more"><a href="/wcdz/index.php/List/domitory/class/10">more>></a></span>
               </span>
               <ul>
                   <?php if(is_array($domitoryList)): foreach($domitoryList as $key=>$domitory): ?><li><a href="/wcdz/index.php/Show/domitory/id/<?php echo ($domitory["id"]); ?>"><img src=<?php echo (C("UPLOAD_PATH")); echo ($domitory["image"]); ?> width="100%" height="90" /></a></li><?php endforeach; endif; ?>
               </ul>
            </div>
        </div>
        </div>
        <!--content_right-->
        <div class="content_right">

            <div class="content_rightTop">
                <video width="100%" height="100%" controls="controls" style="text-align:center">
                <source src="<?php echo ($configList["value"]); ?>" type="video/mp4" />
                您的浏览器版本过低暂不支持播放视频
                </video>
            </div>

            <div id="tab">

                <h3 class="up" id="two1" onmouseover="setContentTab('two',1,4)"><a  class="title_01" href="/wcdz/index.php/List/Zuixin">最新</a></h3>

                <div class="block" id="con_two_1">
                    <ul>
                        <?php if(is_array($contentList)): foreach($contentList as $key=>$content): ?><li><a class="tab_menu" href="/wcdz/index.php/List/article/class/<?php echo ($content["classid"]); ?>">[<?php echo ($content["cname"]); ?>]</a><a class="tab_title" href="/wcdz/index.php/Show/content/id/<?php echo ($content["id"]); ?>"><?php echo ($content["title"]); ?></a><span><?php echo (date( "Y-m-d",$content["addtime"])); ?></span></li><?php endforeach; endif; ?>
                    </ul>
                </div>

                <h3 id="two2" onmouseover="setContentTab('two',2,4)"><a class="title_01" href="/wcdz/index.php/List/article/class/27">通知</a></h3>
                <div  id="con_two_2">
                    <ul>
                        <?php if(is_array($tzList)): foreach($tzList as $key=>$tz): ?><li><a class="tab_menu" href="/wcdz/index.php/List/article/class/27">[通知]</a><a class="tab_title" href="/wcdz/index.php/Show/content/id/<?php echo ($tz["id"]); ?>"><?php echo ($tz["title"]); ?></a><span><?php echo (date( "Y-m-d",$tz["addtime"])); ?></span></li><?php endforeach; endif; ?>
                    </ul>
                </div>

                <h3 id="two3" onmouseover="setContentTab('two',3,4)"><a class="title_01" href="/wcdz/index.php/List/article/class/28">新闻</a></h3>
                <div id="con_two_3">
                    <ul>
                        <?php if(is_array($newList)): foreach($newList as $key=>$new): ?><li><a class="tab_menu" href="/wcdz/index.php/List/article/class/28">[新闻]</a><a class="tab_title" href="/wcdz/index.php/Show/content/id/<?php echo ($new["id"]); ?>"><?php echo ($new["title"]); ?></a><span><?php echo (date( "Y-m-d",$new["addtime"])); ?></span></li><?php endforeach; endif; ?>
                    </ul>
                </div>

            </div>

            <script type="text/javascript">
                function setContentTab(name, curr, n) {
                    for (i = 1; i <= n; i++) {
                        var menu = document.getElementById(name + i);
                        var cont = document.getElementById("con_" + name + "_" + i);
                        menu.className = i == curr ? "up" : "";
                        if (i == curr) {
                            cont.style.display = "block";
                        } else {
                            cont.style.display = "none";
                        }
                    }
                }
            </script>

</div>
</div>
<!--footer-->
<!--<div class="footer">
    <p>主办：淮南师范文化创意与传播学院党员工作站</p>
    <p>技术支持：<a href="http://www.e8net.cn" target="_blank">淮南师范学院E8网络工作室</a></p>
</div>-->
<div class="footer">
    <p>主办：淮南师范文化创意与传播学院党员工作站</p>
    <p>技术支持：<a href="http://www.e8net.cn" target="_blank">淮南师范学院E8网络工作室</a></p>
    <p></p>
</div>
<!--footer 结束-->
</body>
</html>