// +----------------------------------------------------------------------
// | E8通用后台 e8.js
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------
// | Author: webdd <web_djx@163.com>
// +----------------------------------------------------------------------


//+-------------------------------
//| JS页面初始化
//+-------------------------------
//| Author： webdd
//+-------------------------------
$(document).ready(function(){

	//禁用浏览器F5刷新功能
	$(document).bind("keydown",function(e){   
        e=window.event||e;
        if(e.keyCode==116){
        e.keyCode = 0;
        return false; //屏蔽F5刷新键   
        }
    });
	
	//初始化页面板块尺寸
	var _width = $(window).width();
	var _height = $(window).height();
	
	//动态改变左侧栏目列表 树形列表 iframe 高度
	$(".left-content").css("min-height", $(window).height() - 42);
	$(".tree-content").css("min-height", $(window).height() - 42);
	$(".right-content").css("height", $(window).height() - 42);

	//设置内容框架页面宽度
	setRCW();
	//非IE浏览器
	if (!$(".tree-content").is(":hidden")){
	  if(!(!!window.ActiveXObject || "ActiveXObject" in window)) {
	    $(".right-content").css("width",$(".right-content").width() + 17);
	  }
	}

	//左侧面板隐藏按钮单击事件
	$("#sidebar-collapse-btn").click(function(){
		if ($(".left-content > ul.nav").is(":hidden")){
			$(".left-content").css("width",192 + "px");
			$(".left-content > ul.nav").show();	
			$(this).removeClass("fa-angle-double-right");
			$(this).addClass("fa-angle-double-left");
			//改变iframe宽度
			setRCW();
			//非IE浏览器
		    if(!(!!window.ActiveXObject || "ActiveXObject" in window)) {
			  $(".right-content").css("width",$(".right-content").width() + 17);
		    }
			
		} else {
			$(".left-content").css("width",55 + "px");
			$(".left-content > ul.nav").hide();	
			$(this).removeClass("fa-angle-double-left");
			$(this).addClass("fa-angle-double-right");
			//改变iframe宽度
			setRCW();
		}
	});
	
	
	//+--------------------------
	//| 监听 tree-content 高度改变
	//+--------------------------
	$(".tree-content").resize(function(){
		$(this).css("height",$(".left-content").height());
	});
	
	//+------------------
	//| 树形列表关闭列表
	//+------------------
	$("#tree-close").click(function(){
	  hideTree();
	});
	
	//+-----------------------------
	//| 动态改变right-content 宽度
	//+-----------------------------
	function setRCW(){
	  //设置内容框架页面宽度
	  //alert($(window).width());
		if ($(".tree-content").is(":hidden")){
	 	  $(".right-content").css("width",$(window).width() - $(".left-content").width() - 1);
		  //非IE浏览器
		  if(!(!!window.ActiveXObject || "ActiveXObject" in window)) {
			  $(".right-content").css("width",$(".right-content").width() + 16);
		  }
		} else {
		  $(".right-content").css("width",$(window).width() - $(".left-content").width() - $(".tree-content").width() - 2);
		  //非IE浏览器
		  if((!!window.ActiveXObject || "ActiveXObject" in window)) {
			$(".right-content").css("width",$(".right-content").width() - 1);
		  }
		}
	}

});



//+--------------------
//| 监听浏览器窗口大小改变
//+--------------------
//| Author： webdd
//+--------------------

$(window).resize(function(){
	
	var _width = $(window).width();
	var _height = $(window).height();
	
	//控制头部宽度,使窗口很小时页面不乱
	var w_navbar = $(".navbar-header").width() + $(".navbar-topmenu").width() + $(".navbar-user").width();
	if (_width < w_navbar) {
		$(".navbar-container").css("width",w_navbar);
	} else {
		$(".navbar-container").css("width",_width);	
	}
	
	//控制ifrmae宽度
	if ($(".tree-content").is(":hidden")){
	  $(".right-content").css("width",$(window).width() - $(".left-content").width() - 1);
	} else {
	  $(".right-content").css("width",$(window).width() - $(".left-content").width() - $(".tree-content").width() - 3);
	}
	
});

//+------------------
//| 显示树形列表
//+------------------
function showTree(){
	//如果栏目列表已显示，返回空
	if (!$(".tree-content").is(":hidden")){return;}
	$.ajax({
		type:"get", // 当前提交请求的方式为get
	    url:APP + "/Index/getclass", 
		dataType: "json", // 返回数据格式为json
		// 请求成功调用方法
		success:　function(data){
			if (data.status == 1) {
				var setting = {};
				$.fn.zTree.init($("#tree"), setting, data.data);
				$(".right-content").css("width",$(".right-content").width() - $(".tree-content").width());
				$(".tree-content").show();
			} else {
				alert("您没有权限进行当前操作!");
			}
		},
		// 请求失败调用方法
		error:function(data){
			alert("请求栏目分类列表失败!");
		}
	});
}

//+------------------
//|  关闭树形列表
//+------------------
function hideTree(){
	if (!$(".tree-content").is(":hidden")){
	  $(".right-content").css("width",$(".right-content").width() + $(".tree-content").width() + 1);
	  $(".tree-content").hide();
	}
}

/**
 * 对话框 URL:点击确认后跳转的地址 message:提示信息
 */
function confirm(URL,message){
   $.confirm({
		'title'		: '警告对话框!',
		'message'	: message,
		'buttons'	: {
			'Yes'	: {
				'class'	: 'blue',
				'action': function(){
					location.href = URL;
				}
			},
			'No'	: {
				'class'	: 'gray',
				'action': function(){return false;}	
			}
		}
	});
}


/**
 * 复选框全选/取消全选函数
 * 
 * @param selectItem
 *            复选框name值
 * @param checked
 *            true为全选，false为取消全选
 */
function selectAll(checkname) {
	var checkBox = document.getElementsByName(checkname);
	if(document.getElementById("checkbox").checked){
   		for ( var i = 0; i < checkBox.length; i++) {
       		checkBox.item(i).checked = true;
       	}		
   	}else{
   		for ( var i = 0; i < checkBox.length; i++) {
       		checkBox.item(i).checked = false;
       	}	
   	}
}


/**
 * 获取所有被选中的复选框的值
 * 
 * @param checkName
 * @returns {String}
 */
function getCheckBoxItem(checkName) {
	var checkBox = document.getElementsByName(checkName);
	var item = "";
	for ( var i = 0; i < checkBox.length; i++) {
		if (checkBox.item(i).checked) {
			if (item == "") {
				item = checkBox.item(i).value;
			} else {
				item = item + "," + checkBox.item(i).value;
			}
		}
	}
	return item;
}

/**
 * 处理文档
 * 
 * @param action
 *            动作
 * @returns {Boolean}
 */
function treatCon(action) {
	var item = getCheckBoxItem('id');
	if (item == "") {
		alert("您未选择信息！");
		return false;
	}
	var url = action + '/id/' + item;
	if (action.lastIndexOf("del") != -1) {
		return confirm(url,"确定永久删除这些信息吗?");
	}
	location.href = url;
}