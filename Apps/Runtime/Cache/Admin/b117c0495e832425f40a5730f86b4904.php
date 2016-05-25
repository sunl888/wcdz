<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
  	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>e8通用后台</title>
    
    <link id="jquiCSS" rel="stylesheet" href="http://ajax.useso.com/ajax/libs/jqueryui/1.8.18/themes/ui-lightness/jquery-ui.css" type="text/css" media="all">
    
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    
	<link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/font-awesome/css/font-awesome.min.css">
    <!-- 颜色选择组件 css -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/Colorpicker/evol.colorpicker.css">
    <!-- 时间选择组件 css -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/Datepicker/css/bootstrap-datetimepicker.min.css">
    
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- e8 style -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/common.css">
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.css">
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/main.css">
    
    <!-- 加载百度编辑器js -->
    <script type="text/javascript" charset="utf-8" src="/dygzz/Public/e8admin/default/lib/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/dygzz/Public/e8admin/default/lib/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/dygzz/Public/e8admin/default/lib/ueditor/lang/zh-cn/zh-cn.js"></script>
  </head>
  
  <body>
   <form action="/dygzz/admin.php/Content/add" method="post" enctype="multipart/form-data">
    <input type="hidden" name="classid" value="" id="input"/>
    <input type="hidden" name="selfid" value="<?php echo ($classid); ?>"/> 
    <div class="container-fluid a-con">
        <div class="col-md-10 c-l">
           <h4>信息发布</h4>
           <table class="table-form">
             <tr>
             	<th width="80">栏目</th>
                <td><?php echo ($classname); ?> <a href="#myModal" data-toggle="modal">[同时发布到其他栏目]</a></td>
             </tr>
             <tr>
             	<th width="80">标题</th>
                <td>
                <input type="text" class="form-control input-sm wid-4 inp-bg-1"  name="title" id="title"/>
                <button type="button" class="btn btn-primary btn-xs" id="testtitle">标题检测</button>
                <div style="display:inline-block;">
                    <span href="#" class="color-picker" id="show">
                        <em class="color-bg" id="color-bg"></em>
                    </span>
                    <input id="color-val" type="hidden" name="titlecolor"/>
                </div>
                </td>
             </tr>
             <tr>
             	<th>关键词</th>
                <td>
                	<input type="text" class="form-control input-sm wid-3"  name="keywords"/>
                	<span>多个关键词用","或空格隔开</span>
                </td>
             </tr>
             <tr>
             	<th>摘要</th>
                <td>
                	<textarea class="form-control input-sm wid-100" rows="2" name="description"></textarea>
                </td>
             </tr>
             <tr>
             	<th>来源</th>
                <td>
                	<input type="text" class="form-control input-sm wid-3" name="source"/>
                </td>
             </tr>
             <tr>
             <th>作者</th>
                    <td>
                      <input type="text" class="form-control input-sm wid-3" name="author"/>
                    </td>
             </tr>
             <tr>
             	<th style="vertical-align:top;">内容</th>
                <td>
                    <div class="wid-100">
                        <script id="editor" type="text/plain" style="width:100%;height:300px;" name="content"></script>
                    </div>
                    <button onclick=" UE.getEditor('editor').setHeight(300)">关闭自动长高</button>
                    <div class="content-attr">
                    	<span>
                        <input type="checkbox"  name="choosedescription" value="on"/>
                        是否截取内容<input class="wid-sm" type="text" value="200" name="length"/>个字符到内容摘要
                        </span>&nbsp;&nbsp;
                        <input type="checkbox" name="choosepic" value="on"/>
                        <span>
                        是否截取内容第<input class="wid-sm" type="text" value="1" name="picnum"/>张图片作为标题图片
                        </span>
                    </div>
                </td>
             </tr>
           </table>
        </div><!-- /.c-l -->
        
        <div class="col-md-2 c-r">
        	<div class="c-r-b">
        		<table class="table-form">
                	<tr>
                    	<td class="font-weight">缩略图</td>
                    </tr>
                    <tr>
                    	<td>
                        <div class="img-upload wid-100">
                        	<p>
                        	<img src="/dygzz/Public/e8admin/default/img/img-72.png" alt="..." class="img-thumbnail"></p>
                            <p style="margin-top: 5px;">
                              <input type="file" name="thumb"/>
                            </p>
                        </div>
                        </td>
                    </tr>
                    <tr>
                    	<td>相关文章</td>
                    </tr>
                    <tr>
                    	<td>
                        	<button class="btn btn-primary btn-xs" type="button">添加相关</button>
                            <button class="btn btn-primary btn-xs" type="button">显示相关</button>
                        </td>
                    </tr>
                    <tr><td>发布时间</td></tr>
                    <tr><td>
                    	<input class="form-control input-sm" id="datetimepicker" type="text" name="addtime" value="<?php echo ($nowtime); ?>"/>
                    </td></tr>
                    <tr>
                    	<td>内容模板</td>
                    </tr>
                    <tr>
                    	<td>
                        	<select class="form-control input-sm wid-2">
                            	<option>默认模板</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                    	<td>转向链接</td>
                    </tr>
                    <tr>
                    	<td>
                        	<input class="form-control input-sm" type="text" name="url"/>
                            <input type="checkbox"  name="islink" value="1"/><span class="checkbox-span color-red">外部链接</span>
                        </td>
                    </tr>
                    <tr><td>文章排序</td></tr>
                    <tr><td>
                    	<input class="form-control input-sm wid-1" type="text"  name="sort" value="0"/>
                    </td></tr>
                </table>
            </div>
        </div><!-- /.c-r -->
        
        <div class="clearB"></div>
    </div>
	
    <div class="content-footer wid-100" style="position:fixed; bottom:0; left:0;">
    	<button class="btn btn-primary btn-sm" type="submit">保存</button>
        <button class="btn btn-default btn-sm" type="button" onclick='javascript:quit();'>放弃</button>
    </div>
    </form>
  	    	 
	<!-- Modal 开始 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">关闭</span></button>
	        <h4 class="modal-title" id="myModalLabel">栏目列表</h4>
	      </div>
	      <div class="modal-body">
	        <?php if(is_array($classList)): foreach($classList as $key=>$class): if($class["state"] == 0): echo ($class["prefix"]); echo ($class["classname"]); ?><br/>
	        	<?php else: ?>
	        		<input type="checkbox" name="classid" value="<?php echo ($class["id"]); ?>" <?php echo ($class["check"]); ?> <?php echo ($class["disabled"]); ?>><?php echo ($class["prefix"]); echo ($class["classname"]); ?><br/><?php endif; endforeach; endif; ?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
	        <button type="button" class="btn btn-primary" onclick='javascript:add()' data-dismiss="modal">添加</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!--  model 结束-->

    <!-- jQuery文件 -->
	<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
    <!-- jQuery-ui 文件 -->
    <script src="http://libs.baidu.com/jqueryui/1.10.2/jquery-ui.min.js "></script>
    <!-- Bootstrap 核心 JavaScript 文件 -->
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script>
		function quit(){
			var flag = confirm("确定放弃编辑吗？");
			if(flag == 1)
				window.close();	
		}
	</script>
    <!-- 颜色选择组件js -->
    <script src="/dygzz/Public/e8admin/default/lib/Colorpicker/evol.colorpicker.js"></script>
    <!-- 时间选择组件js -->
    <script src="/dygzz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.js"></script>
    <script src="/dygzz/Public/e8admin/default/lib/Datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/dygzz/Public/e8admin/default/lib/Datepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
	<script>
		function add(){
			checkBox = document.getElementsByName("classid");
			var item = "";
			for ( var i = 0; i < checkBox.length; i++) {
				if(checkBox.item(i).checked){
					if(!checkBox.item(i).disabled){	
						if (item == "") {
							item = checkBox.item(i).value;
						} else {
							item = item + "," + checkBox.item(i).value;
						}
					}	
				}
			}
			$("#input").val(item);
		}
	</script>
    <!--  -->
    <script>
    var APP = "/dygzz/admin.php";
    
	$(document).ready(function(){
		//标题检测是否重复
        $("#testtitle").click(function(){
        	var title = document.getElementById("title").value;
            $.ajax({
                 //async : true,
                 type: "get", // 当前提交请求的方式为get
                 url: APP + "/Content/test/title/" + title,
                 dataType: "json", // 返回数据格式为json
                 // 请求成功调用方法
                 success:　function(data){
                    if (data.status == 0) {
                        $("#testtitle").html(data.msg);
                    } 
                    if (data.status == 1) {
                        $("#testtitle").html(data.msg);
                    }
                    if (data.status == 2) {
                        $("#testtitle").html(data.msg);
                    }
                  },
                  // 请求失败调用方法
                  error:function(request){
                      alert("标题检测失败,请联系维护人员!");
                  }
            });
        });
		
		
		
    	//实例化编辑器
    	var ue = UE.getEditor('editor');
		
		//颜色选择组件
		$('#color-val').colorpicker({showOn:'focus'});
		$('#show').click(function(evt){
			evt.stopImmediatePropagation();
			$('#color-val').colorpicker("showPalette");
		})
		
		//颜色改变
		$("#color-val").on("change.color", function(event, color){
			//alert(color);
        	$("#color-bg").attr("style", "background:" + color);
    	})
		
		
		$.fn.datetimepicker.dates['zh'] = {
			days: ["星期天", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期天"],
			daysShort: ["日", "一", "二", "三", "四", "五", "六", "日"],
			daysMin: ["日", "一", "二", "三", "四", "五", "六", "日"],
			months: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
			monthsShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
			today: "今天"
		};
		
		
		//时间选择组件
		$('#datetimepicker').datetimepicker({
			format: 'yyyy-mm-dd hh:ii'
		});
		
	})
    </script>
  </body>
</html>