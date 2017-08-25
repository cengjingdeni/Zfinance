<html><head>
		<meta charset="utf-8">
		<title>后台管理模板 - @yield('title')</title>
		<meta content="webkit" name="renderer">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<meta content="black" name="apple-mobile-web-app-status-bar-style">
		<meta content="yes" name="apple-mobile-web-app-capable">
		<meta content="telephone=no" name="format-detection">

			<link media="all" href="plugins/layui/css/layui.css" rel="stylesheet">
			<link media="all" href="css/global.css" rel="stylesheet">
			<link href="http://www.jq22.com/jquery/font-awesome.4.6.0.css" type="text/css" rel="stylesheet">

	<link id="layuicss-skinlayercss" rel="stylesheet" href="file:///C:/Users/dell/AppData/Local/Temp/HZ$D.632.3103/HZ$D.632.3104/BeginnerAdmin/plugins/layui/css/modules/layer/default/layer.css?v=3.0.2302" media="all">
	@section('style')
	@show
	</head>

	<body>
		<div style="border-bottom: solid 5px #1aa094;" class="layui-layout layui-layout-admin">
			@section('header')
				<div class="layui-header header header-demo">
				<div class="layui-main">
					<div class="admin-login-box">
						<a href="http://beginner.zhengjinfan.cn/demo/beginner_admin/" style="left: 0;" class="logo">
							<span style="font-size: 22px;">BeginnerAdmin</span>
						</a>
						<div class="admin-side-toggle">
							<i aria-hidden="true" class="fa fa-bars"></i>
						</div>
						<div class="admin-side-full">
							<i aria-hidden="true" class="fa fa-life-bouy"></i>
						</div>
					</div>
					<ul class="layui-nav admin-header-item">
						<li class="layui-nav-item">
							<a href="javascript:;">清除缓存</a>
						</li>
						<li class="layui-nav-item">
							<a href="javascript:;">浏览网站</a>
						</li>
						<li id="video1" class="layui-nav-item">
							<a href="javascript:;">视频</a>
						</li>
						<li class="layui-nav-item">
							<a class="admin-header-user" href="javascript:;">
								<img src="images/0.jpg">
								<span>beginner</span>
							<span class="layui-nav-more"></span></a>
							<dl class="layui-nav-child">
								<dd>
									<a href="javascript:;"><i aria-hidden="true" class="fa fa-user-circle"></i> 个人信息</a>
								</dd>
								<dd>
									<a href="javascript:;"><i aria-hidden="true" class="fa fa-gear"></i> 设置</a>
								</dd>
								<dd id="lock">
									<a href="javascript:;">
										<i style="padding-right: 3px;padding-left: 1px;" aria-hidden="true" class="fa fa-lock"></i> 锁屏 (Alt+L)
									</a>
								</dd>
								<dd>
									<a href="login.html"><i aria-hidden="true" class="fa fa-sign-out"></i> 注销</a>
								</dd>
							</dl>
						</li>
					<span class="layui-nav-bar" style="left: 128px; top: 60px; width: 0px; opacity: 0;"></span></ul>
					<ul class="layui-nav admin-header-item-mobile">
						<li class="layui-nav-item">
							<a href="login.html"><i aria-hidden="true" class="fa fa-sign-out"></i> 注销</a>
						</li>
					<span class="layui-nav-bar"></span></ul>
				</div>
				</div>
			@show
			@section('left')
			<div id="admin-side" class="layui-side layui-bg-black">
				<div lay-filter="side" id="admin-navbar-side" class="layui-side-scroll"><ul class="layui-nav layui-nav-tree beg-navbar"><li class="layui-nav-item layui-nav-itemed" style=""><a href="javascript:;"><i data-icon="fa-cubes" aria-hidden="true" class="fa fa-cubes"></i><cite>基本元素</cite><span class="layui-nav-more"></span></a><dl class="layui-nav-child"><dd title="按钮"><a data-url="button.html" href="javascript:;"><i data-icon="" class="layui-icon"></i><cite>按钮</cite></a></dd><dd title="表单"><a data-url="form.html" href="javascript:;"><i data-icon="" class="layui-icon"></i><cite>表单</cite></a></dd><dd title="表格"><a data-url="table.html" href="javascript:;"><i data-icon="" class="layui-icon"></i><cite>表格</cite></a></dd><dd title="导航"><a data-url="nav.html" href="javascript:;"><i data-icon="" class="layui-icon"></i><cite>导航</cite></a></dd><dd title="辅助性元素"><a data-url="auxiliar.html" href="javascript:;"><i data-icon="" class="layui-icon"></i><cite>辅助性元素</cite></a></dd></dl></li><li class="layui-nav-item" style=""><a href="javascript:;"><i data-icon="fa-cogs" aria-hidden="true" class="fa fa-cogs"></i><cite>组件</cite><span class="layui-nav-more"></span></a><dl class="layui-nav-child"><dd title="BTable"><a data-url="btable.html" href="javascript:;"><i aria-hidden="true" data-icon="fa-table" class="fa fa-table"></i><cite>BTable</cite></a></dd><dd title="Navbar组件"><a data-url="navbar.html" href="javascript:;"><i aria-hidden="true" data-icon="fa-navicon" class="fa fa-navicon"></i><cite>Navbar组件</cite></a></dd><dd title="Tab组件"><a data-url="tab.html" href="javascript:;"><i data-icon="" class="layui-icon"></i><cite>Tab组件</cite></a></dd><dd title="Laytpl+Laypage"><a data-url="paging.html" href="javascript:;"><i data-icon="" class="layui-icon"></i><cite>Laytpl+Laypage</cite></a></dd></dl></li><li class="layui-nav-item" style=""><a href="javascript:;"><i data-icon="ဂ" class="layui-icon">ဂ</i><cite>第三方组件</cite><span class="layui-nav-more"></span></a><dl class="layui-nav-child"><dd title="iCheck组件"><a data-url="icheck.html" href="javascript:;"><i aria-hidden="true" data-icon="fa-check-square-o" class="fa fa-check-square-o"></i><cite>iCheck组件</cite></a></dd></dl></li><li class="layui-nav-item" style=""><a href="javascript:;"><i data-icon="fa-address-book" aria-hidden="true" class="fa fa-address-book"></i><cite>地址本</cite><span class="layui-nav-more"></span></a><dl class="layui-nav-child"><dd title="Github"><a data-url="https://www.github.com/" href="javascript:;"><i aria-hidden="true" data-icon="fa-github" class="fa fa-github"></i><cite>Github</cite></a></dd><dd title="QQ"><a data-url="http://www.qq.com/" href="javascript:;"><i aria-hidden="true" data-icon="fa-qq" class="fa fa-qq"></i><cite>QQ</cite></a></dd><dd title="Fly社区"><a data-url="http://fly.layui.com/" href="javascript:;"><i data-icon="" class="layui-icon"></i><cite>Fly社区</cite></a></dd><dd title="新浪微博"><a data-url="http://weibo.com/" href="javascript:;"><i aria-hidden="true" data-icon="fa-weibo" class="fa fa-weibo"></i><cite>新浪微博</cite></a></dd></dl></li><li class="layui-nav-item" style=""><a data-url="https://www.baidu.com" href="javascript:;"><i data-icon="fa-stop-circle" aria-hidden="true" class="fa fa-stop-circle"></i><cite>这是一级导航</cite></a></li><li class="layui-nav-item" style=""><a href="javascript:;"><i data-icon="fa-stop-circle" aria-hidden="true" class="fa fa-stop-circle"></i><cite>其他</cite><span class="layui-nav-more"></span></a><dl class="layui-nav-child"><dd title="子窗体中打开选项卡"><a data-url="cop.html" href="javascript:;"><i aria-hidden="true" data-icon="fa-github" class="fa fa-github"></i><cite>子窗体中打开选项卡</cite></a></dd></dl></li><span class="layui-nav-bar" style="top: 245px; height: 45px; opacity: 1;"></span></ul></div>
			</div>
			@show
			@section('body')
			<div id="admin-body" style="bottom: 0;border-left: solid 2px #1AA094;" class="layui-body">
				<div lay-filter="admin-tab" class="layui-tab admin-nav-card layui-tab-brief">
					<ul class="layui-tab-title">
						<li class="layui-this">
							<i aria-hidden="true" class="fa fa-dashboard"></i>
							<cite>控制面板</cite>
						</li>
					</ul>
					<div style="min-height: 150px; padding: 5px 0px 0px; height: 341px;" class="layui-tab-content">
						<div class="layui-tab-item layui-show" >
							@yield('content')
							<!-- <iframe src="main.html" style="height: 341px;"></iframe> -->
						</div>
					</div>
				</div>
			</div>
			@show
			@section('footer')
			<div id="admin-footer" class="layui-footer footer footer-demo">
				<div class="layui-main">
					<p>2016 &copy;
						<a href="http://m.zhengjinfan.cn/">m.zhengjinfan.cn/</a> LGPL license
					</p>
				</div>
			</div>
			@show
			<div class="site-tree-mobile layui-hide">
				<i class="layui-icon"></i>
			</div>
			<div class="site-mobile-shade"></div>
			
			<!--锁屏模板 start-->
			<script id="lock-temp" type="text/template">
				&lt;div class="admin-header-lock" id="lock-box"&gt;
					&lt;div class="admin-header-lock-img"&gt;
						&lt;img src="images/0.jpg"/&gt;
					&lt;/div&gt;
					&lt;div class="admin-header-lock-name" id="lockUserName"&gt;beginner&lt;/div&gt;
					&lt;input type="text" class="admin-header-lock-input" value="输入密码解锁.." name="lockPwd" id="lockPwd" /&gt;
					&lt;button class="layui-btn layui-btn-small" id="unlock"&gt;解锁&lt;/button&gt;
				&lt;/div&gt;
			</script>
			<!--锁屏模板 end -->
			
			<script src="plugins/layui/layui.js" type="text/javascript"></script>
			<script src="datas/nav.js" type="text/javascript"></script>
			<script src="js/index.js"></script>
			<script>
				layui.use('layer', function() {
					var $ = layui.jquery,
						layer = layui.layer;

					$('#video1').on('click', function() {
						layer.open({
							title: 'YouTube',
							maxmin: true,
							type: 2,
							content: 'video.html',
							area: ['800px', '500px']
						});
					});

				});
			</script>
		</div>
	

</body></html>