<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"D:\phpStudy\WWW\thinkphp\public/../application/index\view\product\pro_list.html";i:1505206370;s:76:"D:\phpStudy\WWW\thinkphp\public/../application/index\view\common\header.html";i:1504188788;s:74:"D:\phpStudy\WWW\thinkphp\public/../application/index\view\common\menu.html";i:1505100653;s:76:"D:\phpStudy\WWW\thinkphp\public/../application/index\view\common\footer.html";i:1504188778;}*/ ?>
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
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="#">退出</a></li>
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
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 用户管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('Userinfo/userList'); ?>" title="会员列表">用户列表</a></li>
				</ul>
			</dd>
		</dl>
		<!-- <dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="http://h-ui.duoshuo.com/admin/" title="评论列表">评论列表</a></li>
					<li><a href="feedback-list.html" title="意见反馈">意见反馈</a></li>
				</ul>
			</dd>
		</dl> -->
		
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 权限管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="<?php echo url('Jurisdiction/role'); ?>" title="角色管理">角色管理</a></li>
					<li><a href="<?php echo url('Jurisdiction/jsdt'); ?>" title="权限管理">权限管理</a></li>
					<li><a href="<?php echo url('Jurisdiction/amstt'); ?>" title="管理员列表">管理员列表</a></li>
					<li><a href="<?php echo url('Jurisdiction/amstt_role'); ?>">管理员添加角色</a></li>
					<li><a href="<?php echo url('Jurisdiction/role_jsdt'); ?>">角色添加权限</a></li>
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
	<nav class="breadcrumb"><i class="Hui-iconfont"></i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品管理 <a title="刷新" href="javascript:location.replace(location.href);" style="line-height:1.6em;margin-top:3px" class="btn btn-success radius r"><i class="Hui-iconfont"></i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<div class="cl pd-5 bg-1 bk-gray"> <span class="l"> <a class="btn btn-danger radius" onclick="datadel()" href="javascript:;"><i class="Hui-iconfont"></i> 批量删除</a> <a  href="<?php echo url('Product/product_add'); ?>" class="btn btn-primary radius"><i class="Hui-iconfont"></i> 添加产品</a> </span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
			<div class="mt-10">
			<div class="text-c" style="margin-bottom:10px"> 
				<input type="text" class="input-text" style="width:250px" placeholder=" 图片名称" id="" name="">
				<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont"></i> 搜索</button>
			</div>
			<table class="table table-border table-bordered table-bg table-hover table-sort dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
				<thead>
					<tr class="text-c" role="row">
						<th width="40" class="sorting_disabled" rowspan="1" colspan="1" style="width: 40px;" aria-label="">
							<input type="checkbox" value="" name="">
						</th>
						<th width="80" class="sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 40px;" aria-sort="descending" aria-label="ID: 升序排列">ID
						</th>
						<th width="100" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 100px;" aria-label="分类: 升序排列">文章标题</th>
						<th width="100" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 50px;" aria-label="封面: 升序排列">简略标题</th>
						<th width="100" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 100px;" aria-label="封面: 升序排列">图片</th>
						<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 63px;" aria-label="图片名称: 升序排列">分类ID</th>
						<th width="150" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 50px;" aria-label="Tags: 升序排列">排序值</th>
						<th width="150" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 80px;" aria-label="更新时间: 升序排列">是否允许评论</th>
						<th width="60" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 60px;" aria-label="发布状态: 升序排列">产品关键字</th>
						<th width="60" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 160px;" aria-label="发布状态: 升序排列">添加时间</th>
						<th width="60" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 60px;" aria-label="发布状态: 升序排列">审核状态</th>
						<th width="100" class="sorting_disabled" rowspan="1" colspan="1" style="width: 60px;" aria-label="操作">操作
						</th>
					</tr>
				</thead>
					<tbody>
					<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
					<tr class="text-c odd" role="row">
							<td><input type="checkbox" value="" name=""></td>
							<td class="sorting_1"><?php echo $user['id']; ?></td>
							<td><?php echo $user['title']; ?></td>
							<td><?php echo $user['brief_title']; ?></td>
							<td><a onclick="picture_edit('图库编辑','picture-show.html','10001')" href="javascript:;"><img width="100" src="<?php echo $user['image']; ?>" class="picture-thumb"></a></td>
							<td class="text-l"><a onclick="picture_edit('图库编辑','picture-show.html','10001')" href="javascript:;" class="maincolor"><?php echo $user['type_id']; ?></a></td>
							<td class="text-c"><?php echo $user['order_num']; ?></td>
							<td><?php echo $user['comment']; ?></td>
							<td><?php echo $user['article_kwd']; ?></td>
							<td><?php echo $user['add_time']; ?></td>
							<td class="ben td-status" urls="<?php echo $user['id']; ?>"><?php echo $user['status']; ?></td>
							<td class="td-manage">
								<a  title="发布" href="javascript:;" onclick="<?php echo $user['ss']; ?>" style="text-decoration:none" class="asd">
								<i class="btns Hui-iconfont"><?php echo $user['img']; ?></i>
								</a>

								<a title="编辑" href="javascript:;" onclick="picture_edit('图库编辑','picture-add.html','10001')" class="ml-5" style="text-decoration:none">
								<i class="Hui-iconfont"></i>
								</a> 

								<a title="删除" href="javascript:;" onclick="picture_del(this,'10001')" class="ml-5" style="text-decoration:none">
								<i class="Hui-iconfont"></i>
								</a>
								</td>
						</tr>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
				</table>
					<style type="text/css">
					.one ul li{float: left;} 
					</style>
				<div class="one">
				<?php echo $page; ?>
				</div>
			</div>
		</article>
	</div>
</section>
<script type="text/javascript" src="/thinkphp/public/static/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<!-- <script type="text/javascript" src="/thinkphp/public/static/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" src="/thinkphp/public/static/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,8]}// 制定列不参与排序
	]
});
/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-查看*/
function picture_show(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-审核*/
function picture_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过'], 
		shade: false
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}
$('.td-manage').click(function(){
	alert($(this).html());
})
/*图片-下架*/
function picture_stop(obj,id){
	layer.confirm('确认要下架吗？',function(index){
		var id=($(obj).parents("tr").find(".td-status").attr('urls'));
		$.ajax({
		   type: "POST",
		   url: "<?php echo url('Product/picture_stop'); ?>",
		   data: {id:id},
		   success: function(msg){
		     if (msg == 1) {
		     	$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
				$(obj).remove();
				layer.msg('已下架!',{icon: 5,time:1000});
		     } else {
		     	alert('失败');
		     }
		   }
		});
		
		
	});
}

/*图片-发布*/
function picture_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
		var id = ($(obj).parents("tr").find(".td-status").attr('urls'));

		$.ajax({
		   type: "POST",
		   url: "<?php echo url('Product/picture_start'); ?>",
		   data: {id:id},
		   success: function(msg){
		     if (msg == 1) {
		     	$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
				$(obj).remove();
				layer.msg('已发布!',{icon: 6,time:1000});
		     } else {
		     	alert('失败');
		     }
		   }
		});


		
	});
}
/*图片-申请上线*/
function picture_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}
/*图片-编辑*/
function picture_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-删除*/
function picture_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		var id = ($(obj).parents("tr").find(".td-status").attr('urls'));
		$.ajax({
		    type: "POST",
		    url: "<?php echo url('Product/del_article'); ?>",
		    data: {id:id},
		    success: function(msg){
		    	$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
		    }
		});
		
	});
}
</script
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
