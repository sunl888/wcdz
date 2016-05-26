<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E8CMS管理系统</title>
<link type="text/css" href="/wcdz/Public/e8admin/default/css/login.css" rel="stylesheet" />
<link type="text/css" href="/wcdz/Public/e8admin/default/css/login-com.css" rel="stylesheet" />
</head>

<body>

	<div class="login">
    	<div class="l-info">
        	<img src="/wcdz/Public/e8admin/default/img/login-sign.png" />
            <p>
            	欢迎使用E8网络后台管理系统！本系统由<a href="<?php echo ($syscon['E8_WEB_URL']); ?>"> E8网络工作室 </a>研发，E8工作室专注于网站建设、移动平台应用开发、企业级桌面系统开发等！
            </p>
        </div>
        
        <form action="/wcdz/admin.php/Login/login" method="post">
        <div class="l-form">
        	<p>
            	<label>账&emsp;号：</label>
                <input type="text" name="username" />
            </p>
            <p>
            	<label for="password">密&emsp;码：</label>
                <input type="password" name="password" />
            </p>
            <p>
            	<label>验证码：</label>
                <input id="yzm" maxlength="4" name="verify" type="text" />
                <img id="verifyCode" src="/wcdz/admin.php/Login/createVerify" onclick="this.src='/wcdz/admin.php/Login/createVerify?time=<?php echo time();?>'" />
            </p>
            <p>
            	<input type="submit" value="提交" />
                <a href="/wcdz/admin.php/Findpassword/index" class="a-1">忘记密码</a>
            </p>
        </div>
        </form>
        <div class="clearL h1"></div>
    </div>
    
    <div class="footer">
    	<p>E8网络，爱梦想，爱超越！</p>
        <p>QQ：1685474174&emsp;E-mail: 1685474174@qq.com</p>
        <p>地址：淮南师范学院(泉山校区)逸夫图书馆六楼</p>
    </div>

</body>
</html>