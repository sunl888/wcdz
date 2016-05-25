<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>e8通用后台</title>

<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.css">

<!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- e8 style -->
<link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/common.css">
<link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/main.css">

</head>

<body>

    <div class="topbar">

        <!-- 面包屑 -->
        <div class="topbar-mbx">
	<ul class="list-inline">
		<li>
			<a class="color-gray" href="/dygzz/admin.php/Center/index">
			<i class="fa fa-home fa-lg"></i>
			控制中心
			</a>
		</li>
	</ul> 
</div><!-- /.mbx -->

        <div class="topbar-search">
            <form class="form-inline" role="form">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                    <input type="email" class="form-control  input-sm"
                        id="exampleInputEmail2" placeholder="Enter email"> <i
                        class="fa fa-search color-gray"></i>
                </div>
            </form>
        </div>
    </div>
    <!-- /.topbar -->

    <div class="page-content">

        <div class="page-header col-sm-12">
            <h1>党员信息管理</h1>
        </div>

        <div class="col-sm-12">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">党员信息管理</a></li>
                    <li><a href="/dygzz/admin.php/Partymember/add">添加党员信息 </a></li>
                    <li><a href="/dygzz/admin.php/Partymember/term">班级管理</a></li>

                </ul>

                <div class="tab-content">
                    <div class="tab-pane in active">
                        <p class="title background-blue">搜索</p>
                        <form action="/dygzz/admin.php/Partymember/index" method="post">
                            <div style="padding: 5px 0;">    
                                <span>关键字：</span><input type="text" name="keywords" class="form-control input-sm wid-2" value="点击输入姓名"onfocus="if (value =='点击输入姓名'){value =''}"onblur="if (value ==''){value='点击输入姓名'}"/>
                                <button type="submit" class="btn btn-default btn-sm" >搜索</button>
                            </div>
                        </form>

                        <form action="" method="post">
                            <table class="table table-hover">
                                <tr>
                                    <th width="20">
                                       <input type="checkbox" id="checkbox" onclick='javascript:selectAll("id")'/>
                                    </th>  
                                    <th>ID</th>
                                    <th>姓名</th>
                                    <th>班级</th>
                                    <th>政治面貌</th>
                                    <th>优秀党员</th>
                                    <th>个人简介</th>
                                    <th>图片</th>
                                    <th class="align-center">操作</th>
                                </tr>
                                <?php if(is_array($studentList)): foreach($studentList as $key=>$student): ?><tr>
                                        <td><input type="checkbox" name="id" value="<?php echo ($student["id"]); ?>"/></td>
                                        <td>#<?php echo ($key+1); ?></td>
                                        <td><?php echo ($student["name"]); ?></td>
                                        <td><?php echo ($student["class"]); ?></td>
                                        <td><?php echo ($student["state"]); ?></td>
                                        <td><?php echo ($student["ext"]); ?></td>
                                        <td title="">
                                            <?php echo (subtitle($student["introduction"],10,0)); ?>
                                        </td>
                                        <td>
                                            <img class="img-thumbnail" id="photo<?php echo ($student["id"]); ?>" src="<?php echo (C("UPLOAD_PATH")); echo ($student["photo"]); ?>" alt="<?php echo ($student["name"]); ?>" style="width:30px; height:30px;"onclick="showphoto('photo<?php echo ($student["id"]); ?>');">
                                        </td>
                                        <td class="align-center">
                                             <a href="/dygzz/admin.php/Partymember/view/id/<?php echo ($student["id"]); ?>">查看</a>|&nbsp;
                                            <a href="/dygzz/admin.php/Partymember/edit/id/<?php echo ($student["id"]); ?>/mw/<?php echo ($student["mw"]); ?>">修改</a>|&nbsp; 
                                            <a href="javascript:void(0);" onclick="return confirm('/dygzz/admin.php/Partymember/del/id/<?php echo ($student["id"]); ?>','确定删除?');">删除</a>
                                        </td>
                                    </tr><?php endforeach; endif; ?>
                            </table>
                        </form>
                    </div>
                    <div class="pageBar"><?php echo ($page); ?></div>
                    <div style="width:100%;height:60px;"></div>
                    <div class="admin-add">
                        <button class="btn btn-primary btn-sm" type="button" onclick="javascript:treatCon('/dygzz/admin.php/Partymember/dels')">删除</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /span -->

    </div>
    <!-- /.page-content -->

    <!-- 图片弹出层 -->
    <div id="outerdiv"
        style="position: fixed; top: 0; left: 0; background: rgba(0, 0, 0, 0.7); z-index: 10000; width: 100%; height: 100%; display: none;">
        <div id="innerdiv" style="position: absolute;">
            <img id="bigimg" style="border: 5px solid #fff;" src="" />
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form  action = "/dygzz/admin.php/Partymember/import" enctype="multipart/form-data"  method = "post">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
              
                <input type="file" name="import">
                
               
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="submit" class="btn btn-primary btn-sm">确定</button>
          </div>
          </form> 
        </div>
      </div>
    </div>

    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/dygzz/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.js"></script>
    <!--  -->
    <script src="/dygzz/Public/e8admin/default/js/fun.js"></script>
    <script src="/dygzz/Public/e8admin/default/js/e8.js"></script>

    <script>
    function showphoto(obj){
        var _obj = obj;
        var _this = $("#"+_obj);
        imgShow("#outerdiv", "#innerdiv", "#bigimg", _this);
    }
    </script>

</body>
</html>