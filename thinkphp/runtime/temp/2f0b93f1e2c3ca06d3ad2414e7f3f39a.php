<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"D:\gg\thinkphp\public/../application/index\view\jurisdiction\role.html";i:1505467470;s:66:"D:\gg\thinkphp\public/../application/index\view\common\header.html";i:1505467470;s:64:"D:\gg\thinkphp\public/../application/index\view\common\menu.html";i:1505467470;s:66:"D:\gg\thinkphp\public/../application/index\view\common\footer.html";i:1505467470;}*/ ?>
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
<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont"></i> 首页 <span class="c-gray en">&gt;</span> RBAC管理 <span class="c-gray en">&gt;</span> 角色管理 <a title="刷新" href="javascript:location.replace(location.href);" style="line-height:1.6em;margin-top:3px" class="btn btn-success radius r"><i class="Hui-iconfont"></i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="cl pd-5 bg-1 bk-gray"> <span class="l"><a  href="<?php echo url('Jurisdiction/role_add'); ?>" class="btn btn-primary radius"><i class="Hui-iconfont"></i> 添加角色</a> </span> </div>
			<div class="mt-10">
			<table class="table table-border table-bordered table-hover table-bg">
				<thead>
					<tr>
						<th colspan="6" scope="col">角色管理</th>
					</tr>
					<tr class="text-c">
						<th width="25"><input type="checkbox" name="" value=""></th>
						<th width="40">ID</th>
						<th width="200">角色名称</th>
						<th width="200">角色添加权限</th>
						<th>添加时间</th>
						<th width="70">操作</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($data as $key=>$val):?>
						<tr class="text-c">
							<td><input type="checkbox" name="" value="2"></td>
							<td><?= $val['roleId']?></td>
							<td><?= $val['role']?></td>
							<td>
								<?php if(\think\Session::get('name')=='KevinJia'){?>
									<a href="<?php echo url('Jurisdiction/role_jsdt'); ?>?roleId=<?= $val['roleId']?>">给角色添加权限</a>
								<?php }else{?>
									不可操作
								<?php }?>
							</td>
							<!-- <td>date("Y-m-d H:i",$unixtime)</td> -->
							<td><?= date("Y-m-d H:i:s",$val['add_time'])?></td>
							<td class="td-manage">
							<?php if(\think\Session::get('name')=='KevinJia'){?>
										<a style="text-decoration:none" class="ml-5" href="<?php echo url('Jurisdiction/role_update'); ?>?roleId=<?= $val['roleId']?>" title="编辑">
											<i class="Hui-iconfont"></i>
										</a> 
										<a style="text-decoration:none" href="<?php echo url('Jurisdiction/role_del'); ?>?roleId=<?= $val['roleId']?>" title="删除">
											<i class="Hui-iconfont"></i>
										</a>
									<?php }else{?>
									不可操作
								<?php }?>
							</td>
						</tr>
					<?php endforeach;?>
				</tbody>
			</table>
			<center><?php echo $data->render(); ?></center>	
			</div>
		</article>
	</div>
</section>
<script type="text/javascript" src="/thinkphp/public/static/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<!-- <script type="text/javascript" src="/thinkphp/public/static/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" src="/thinkphp/public/static/lib/laypage/1.2/laypage.js"></script>
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
