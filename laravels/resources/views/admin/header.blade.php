@section('header')
    <div class="layui-layout layui-layout-admin beg-layout-container">
        <div class="layui-header beg-layout-header">
            <div class="beg-layout-main beg-layout-logo">
                <a href="http://beginner.zhengjinfan.cn/demo/beginner_admin/" target="_blank">LOGO</a>
            </div>
            <div class="beg-layout-main beg-layout-side-toggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <!--一级菜单-->
            <div class="beg-layout-main beg-layout-menu" id="menu">
                <ul class="layui-nav beg-layout-nav" lay-filter="">
                    <li class="layui-nav-item layui-this">
                        <a href="javascript:;" data-module-id="1">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <cite>内容管理</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            <cite>商品管理</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="{{url('admin/aaa')}}" data-module-id="3">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <cite>会员管理</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;">
                            <i class="fa fa-tv" aria-hidden="true"></i>
                            <cite>订单管理</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;">
                            <i class="fa fa-gears" aria-hidden="true"></i>
                            <cite>设置</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;">
                            <i class="fa fa-plug" aria-hidden="true"></i>
                            <cite>扩展</cite>
                        </a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            <cite>社区</cite>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="beg-layout-main beg-layout-panel">
                <ul class="layui-nav beg-layout-nav" lay-filter="user">
                    <li class="layui-nav-item">
                        <a href="javascript:;" class="beg-layou-head">
                            <img src="{{URL::asset('/')}}admin/images/0.jpg" />
                            <span>beginner</span>
                        </a>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" data-tab="true" data-url='user.html'>
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                    <cite>个人信息</cite>
                                </a>
                            </dd>
                            <dd>
                                <a href="javascript:;" data-tab="true" data-url="setting.html">
                                    <i class="fa fa-gear" aria-hidden="true"></i>
                                    <cite>设置</cite>
                                </a>
                            </dd>
                            <dd>
                                <a href="login.html">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    <cite>注销</cite>
                                </a>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>
@show