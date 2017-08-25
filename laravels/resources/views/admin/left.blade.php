@section('left')
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: -5px;">
        <legend>垂直导航菜单</legend>
    </fieldset>
    <ul class="layui-nav layui-nav-tree">
        <li class="layui-nav-item layui-nav-itemed">
            <a href="javascript:;">默认展开</a>
            <dl class="layui-nav-child">
                <dd>
                    <a href="">选项1</a>
                </dd>
                <dd>
                    <a href="">选项2</a>
                </dd>
            </dl>
        </li>
        <li class="layui-nav-item">
            <a href="">产品</a>
        </li>
        <li class="layui-nav-item">
            <a href="javascript:;">解决方案</a>
            <dl class="layui-nav-child">
                <dd>
                    <a href="">移动模块</a>
                </dd>
                <dd>
                    <a href="">后台模版</a>
                </dd>
                <dd>
                    <a href="">电商平台</a>
                </dd>
            </dl>
        </li>
        <li class="layui-nav-item">
            <a href="">大数据</a>
        </li>
        <li class="layui-nav-item">
            <a href="">社区</a>
        </li>
    </ul>
@show