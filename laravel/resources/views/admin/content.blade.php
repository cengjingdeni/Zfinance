@section('content')
    <div class="layui-body beg-layout-body">
        <div class="layui-tab layui-tab-brief layout-nav-card" lay-filter="layout-tab" style="border: 0; margin: 0;box-shadow: none; height: 100%;">
            <ul class="layui-tab-title">
                <li class="layui-this">
                    <a href="javascript:;">
                        <i class="fa fa-dashboard" aria-hidden="true"></i>
                        <cite>控制面板</cite>
                    </a>
                </li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    @yield('main')
                </div>
            </div>
        </div>
    </div>
@show