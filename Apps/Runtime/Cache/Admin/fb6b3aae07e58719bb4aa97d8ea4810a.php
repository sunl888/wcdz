<?php if (!defined('THINK_PATH')) exit(); if(C('LAYOUT_ON')) { echo ''; } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<style type="text/css">
*{ padding: 0; margin: 0; }
body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }

.message {width:400px; min-height: 100px; margin:0 auto; margin-top: 5px; background: #fff; border: 2px solid #ccc;}
.message-head { width: 100%; height: 30px; line-height: 30px;background: #f2f2f2;}
.message-head h4 {padding-left: 5px;}
.message-content { padding:5px;}

.message-url { width:100%; text-align: center;}

.face {
	font-size:28px;
}
</style>
</head>
<body>
<div>

</div>

<div class="message">
	<div class="message-head">
		<h4>提示信息!</h4>
	</div>

	<div class="message-content">
		<?php if(isset($message)) {?>
		<p class="face">:)</a></p>
		<p class="success"><?php echo($message); ?></p>
		<?php }else{?>
		<p class="face">:(</p>
		<p class="error"><?php echo($error); ?></p>
		<?php }?>
	</div>

	<div class="message-url">
		页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
	</div>
</div>

<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>

<!--
	
<div class="system-message">
<?php if(isset($message)) {?>
<h1>:)</h1>
<p class="success"><?php echo($message); ?></p>
<?php }else{?>
<h1>:(</h1>
<p class="error"><?php echo($error); ?></p>
<?php }?>
<p class="detail"></p>
<p class="jump">
页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
</p>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
-->

</body>
</html>