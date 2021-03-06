<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"D:\gg\thinkphp\public/../application/index\view\Jurisdiction\amstt_update.html";i:1505467470;s:66:"D:\gg\thinkphp\public/../application/index\view\common\header.html";i:1505467470;s:64:"D:\gg\thinkphp\public/../application/index\view\common\menu.html";i:1505467470;s:66:"D:\gg\thinkphp\public/../application/index\view\common\footer.html";i:1505467470;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="favicon.ico" >
<link rel="Shortcut Icon" href="favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/thinkphp/public/static/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/thinkphp/public/static/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/thinkphp/public/static/lib/Hui-iconfont/1.0.8/iconfont.css" />

<link rel="stylesheet" type="text/css" href="/thinkphp/public/static/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/thinkphp/public/static/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script><![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>H-ui.admin 3.0</title>
<meta name="keywords" content="H-ui.admin 3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin 3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>

<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">3.0</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover">
						<a class="dropDown_A"><?= \think\Session::get('name')?><i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="<?php echo url('Login/login_out'); ?>">退出</a></li>
						</ul>
					</li>
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<!--/_header 作为公共模版分离出去-->

<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">
	
	<div class="menu_dropdown bk_2">
		<!-- <dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 资讯管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="article-list.html" title="资讯管理">资讯管理</a></li>
				</ul>
			</dd>
		</dl> -->
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 轮播图管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('Photo/show'); ?>" title="图片管理">图片管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('Product/pro_list'); ?>" title="商品管理">产品管理</a></li>
					<li><a href="<?php echo url('Product/type_list'); ?>" title="分类管理">分类管理</a></li>
					<!-- <li><a href="product-list.html" title="产品管理">产品管理</a></li> -->
				</ul>
			</dd>
		</dl>
		<!-- <dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 用户管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('Userinfo/userList'); ?>" title="会员列表">用户列表</a></li>
				</ul>
			</dd>
		</dl> -->
		
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i>RBAC管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<?php
					$userId = \think\Session::get('userId');
					$da = exends($userId);
					foreach ($da as $key => $val): ?>
						<li>
							<a href="/thinkphp/public/index.php/index/<?php echo $val['noteRoad']?>" title="<?= $val['noteName']?>"><?= $val['noteName']?></a>
						</li>
					<?php endforeach ?>
					<!-- <li><a href="<?php echo url('Jurisdiction/role'); ?>" title="角色管理">角色管理</a></li>
					<li><a href="<?php echo url('Jurisdiction/jsdt'); ?>" title="权限管理">权限管理</a></li>
					<li><a href="<?php echo url('Jurisdiction/amstt'); ?>" title="用户列表">用户列表</a></li>
					<li><a href="<?php echo url('Jurisdiction/feedback'); ?>" title="意见反馈">意见反馈</a></li> -->
				</ul>
			</dd>
		</dl>
		<!-- <dl id="menu-tongji">
			<dt><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="charts-1.html" title="折线图">折线图</a></li>
					<li><a href="charts-2.html" title="时间轴折线图">时间轴折线图</a></li>
					<li><a href="charts-3.html" title="区域图">区域图</a></li>
					<li><a href="charts-4.html" title="柱状图">柱状图</a></li>
					<li><a href="charts-5.html" title="饼状图">饼状图</a></li>
					<li><a href="charts-6.html" title="3D柱状图">3D柱状图</a></li>
					<li><a href="charts-7.html" title="3D饼状图">3D饼状图</a></li>
				</ul>
			</dd>
		</dl> -->
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 采集管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('Collection/show'); ?>" title="系统日志">采集列表</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->
<style>
    *{
        margin:0;
        padding:0;
    }
    i{
        font-style: normal;
    }
    a{
        text-decoration: none;
    }
    input{
        outline: none;
        border:none;
    }
    /*设定html和body的宽度为100%*/
    html,body{
        width:100%; 
        font: 14px/150% tahoma,arial,Microsoft YaHei,Hiragino Sans GB,"\u5b8b\u4f53",sans-serif;
        -webkit-font-smoothing: antialiased;
        color: #666;
    }
    .desc{
      font-size: 18px;
        line-height: 34px;
        border-left: 1px solid #ccc;
        position: absolute;
        left: 200px;
        top:28px;
        padding-left: 20px;
        font-weight:bold;
    }
    header{
      width:100%;
        height: 110px;
        box-shadow: 10px 10px 10px rgba(111,111,111,.5);
        position: relative;
    }
    /*注册信息*/
    /*总体布局*/
    form{
      width: 400px;
      margin: auto;
      margin-top: 100px;
    }
    .register-box{
      border: 1px solid #ddd;
        margin-bottom: 32px;
    }
    .register-box label{
      height: 52px;
        line-height: 52px;
        padding-left: 20px;
        display: inline-block;
    }
    .register-box input{
      width: 190px;
        height: 19px;
        padding-bottom: 11px;
        padding-left: 20px;
        padding-top: 16px;
        font-size: 14px;
        color: #666;
        font-family: "Microsoft YaHei","Hiragino Sans GB";
    }
    .register-box .tips{
      position: absolute;
        margin-top: 5px;
        font-size: 14px;
        color: #ccc;
    }
    /*用户名*/
    .register-box .username_label{
      word-spacing: 10px;
    }
    /*密码，确认密码，*/
    .register-box .other_label{
      word-spacing: 2px;
    }
    /*提交按钮*/
    .submit_btn button{
      width: 100%;
        height: 54px;
        color: #fff;
        background: #e22;
        border: 0;
        font-size: 16px;
        font-family: "Microsoft YaHei","Hiragino Sans GB";
    }
</style>
<section>
  <form action="<?php echo url('Jurisdiction/update_amstt'); ?>" method="post">
    <div class="register-box">
          <label for="username" class="username_label">用 户 名 称
      <input maxlength="20" name="nickname" type="text" placeholder="<?= $data['nickname']?>">
          </label>
      <div class="tips">
            
          </div>
    </div>
    <input name="__RequestVerificationToken" type="hidden" value="fkfh8D89BFqTdrE2iiSdG_L781RSRtdWOH411poVUWhxzA5MzI8es07g6KPYQh9Log-xf84pIR2RIAEkOokZL3Ee3UKmX0Jc8bW8jOdhqo81" />
    <input name="userId" type="hidden" value="<?= $data['userId']?>" />
    <div class="register-box">
      <label for="username" class="other_label">设  置  密  码
      <input maxlength="20" type="password" name="password" placeholder="<?= $data['password']?>">
      </label>
      <div class="tips">
        
      </div>
    </div>
    </div>
    <div class="submit_btn">
          <button type="submit" id="submit_btn">立 即 修 改</button>
        </div>
  </form>
</section>
<!--_footer 作为公共模版分离出去--> 
<script type="text/javascript" src="/thinkphp/public/static/lib/jquery/1.9.1/jquery.min.js"></script> 
<!-- <script type="text/javascript" src="/thinkphp/public/static/lib/layer/2.4/layer.js"></script> -->
<!-- <script type="text/javascript" src="/thinkphp/public/static/static/h-ui/js/H-ui.js"></script>  -->
<!-- <script type="text/javascript" src="/thinkphp/public/static/static/h-ui.admin/js/H-ui.admin.page.js"></script>  -->
<!--/_footer /作为公共模版分离出去--> 

<!--请在下方写此页面业务相关的脚本--> 
<script type="text/javascript" src="/thinkphp/public/static/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/thinkphp/public/static/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/thinkphp/public/static/lib/jquery.validation/1.14.0/messages_zh.js"></script> 

</body>
</html>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/thinkphp/public/static/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/thinkphp/public/static/lib/layer/2.4/layer.js"></script> 
 
<script type="text/javascript" src="/thinkphp/public/static/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/thinkphp/public/static/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/thinkphp/public/static/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript" src="/thinkphp/public/static/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/thinkphp/public/static/static/h-ui.admin/js/H-ui.admin.page.js"></script> 

<!--/_footer /作为公共模版分离出去-->

</body>
</html>