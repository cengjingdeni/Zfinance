<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Layout</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="{{URL::asset('/')}}admin/plugins/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="{{URL::asset('/')}}admin/plugins/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}admin/css/layout.css" media="all" />
</head>

<body>

    @extends('admin/footer')

    @extends('admin/content')

    @extends('admin/left')

    @extends('admin/header')
    <!--侧边导航栏-->

    <!--内容区域-->

    <!--页脚-->

<script src="{{URL::asset('/')}}admin/plugins/layui/layui.js "></script>
<script src="{{URL::asset('/')}}admin/js/layout.js "></script>


</body>

</html>