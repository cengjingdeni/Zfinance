<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script>
        window._jHeadStart = ( new Date() ).getTime();
        window.tplConf = {
            user : {
                userId : 'null'
            },
            pageKey : '',
            autoPV : true,
            autoIdentify : true,
            we_renrendai_host: 'https://www.renrendai.com',
            _isWeCom: 'false',
            target: '_self',
            isProduction : true,
            pbId : ''
        };
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="renderer" content="webkit">
    <meta name="google-site-verification" content="oQXrGa_mTgxg7joO0himE0QuFeqOVmm-SDC1H2dzT4c">
    <meta name="baidu-site-verification" content="wibJopuIuI" />
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="keywords" content="互联网理财平台,安全理财产品,网上贷款平台,借贷平台,个人投资理财计划">
    <meta name="description" content="人人贷理财为您提供多元化投资理财产品与更优质的综合网上贷款平台服务,将更好满足您个人投资理财计划需求。">
    {{--jquery post 传值--}}
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <title>【人人贷官网】专业值得信赖的网络借贷信息中介平台,互联网百强3A级信用企业</title>


    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('/')}}home/ps/static/common/static/img/favicon-rrd.ico" />


    <link rel="stylesheet" type="text/css" href="{{URL::asset('/home/css/base_41a7e4e_1.css')}}">







    <script type="text/javascript">
        (function(){
            var userAgent = navigator.userAgent.toLowerCase();
            if(userAgent.match(/rv:([\d.]+)\) like gecko/) || userAgent.match(/msie ([\d.]+)/) ){
                document.write('<script src="{{URL::asset('/home/js/babel-polyfill.js')}}"><\/script>');
            }
        })();
    </script>










    <script type="text/javascript">
        window.zhuge = window.zhuge || [];
        window.zhuge.methods = "_init debug identify track trackLink trackForm page".split(" ");
        window.zhuge.factory = function(b) {
            return function() {
                var a = Array.prototype.slice.call(arguments);
                a.unshift(b);
                window.zhuge.push(a);
                return window.zhuge;
            }
        };
        for (var i = 0; i < window.zhuge.methods.length; i++) {
            var key = window.zhuge.methods[i];
            window.zhuge[key] = window.zhuge.factory(key);
        }
        window.zhuge.load = function(b, x) {
            if (!document.getElementById("zhuge-js")) {
                var a = document.createElement("script");
                var verDate = new Date();
                var verStr = verDate.getFullYear().toString()
                        + verDate.getMonth().toString() + verDate.getDate().toString();

                a.type = "text/javascript";
                a.id = "zhuge-js";
                a.async = !0;
                a.src = "{{URL::asset('/')}}home/js/zhuge.js?v=" + verStr;
                a.onerror = function(){
                    window.zhuge.identify = window.zhuge.track = function(ename, props, callback){
                        if(callback && Object.prototype.toString.call(callback) === '[object Function]')callback();
                    };
                };
                var c = document.getElementsByTagName("script")[0];
                c.parentNode.insertBefore(a, c);
                window.zhuge._init(b, x)
            }
        };
        //区分线上线下上报的app key
        var app_key = window.tplConf.isProduction?"ee112f4bcbe648a0a0958ff03af06b2a":"2da9e18043f74bceb761b72ca6f3ae78";
        window.zhuge.load(app_key);
    </script>





    <link rel="stylesheet" href="{{URL::asset('/home/css/common_wdg_c1db688_1.css')}}" /><link rel="stylesheet" href="{{URL::asset('/home/css/common_nm_aa4d4d8_1.css')}}" /><link rel="stylesheet" href="{{URL::asset('/')}}home/css/home_wdg_2c34d21.css" /><link rel="stylesheet" href="{{URL::asset('/')}}home/css/index_05f62f1.css" /></head>

<body >

<!--[if lt IE 9]>
<div style='border: 4px solid #FFF500; background: #FDFDC8; text-align: center; clear: both; height: 75px; position: fixed; z-index:999999999; right: 2px; bottom: 2px; left: 2px; padding:0 8px;'>
    <div style='position: absolute; right: 3px; top: 3px; font-weight: bold;z-index:999999999'><a href='#' onclick='javascript:this.parentNode.parentNode.style.display="none"; return false;'>关闭</a></div>
    <div style='width: 740px; margin: 0 auto; text-align: left; padding: 0; overflow: hidden; color: black;'>
        <div style='width: 675px; float: left;'>
            <div style='font-size: 16px; font-weight: bold; margin-top: 12px;'>您使用的是已经过时的IE浏览器</div>
            <div style='font-size: 13px; margin-top: 6px; line-height: 16px;'>为了让您在人人贷有最佳的使用体验，请升级到 <a href="http://windows.microsoft.com/en-US/internet-explorer/download-ie">最新版本IE浏览器</a>, 或者使用其他高级浏览器如 <a href="https://www.google.com/intl/en/chrome/browser/">Chrome(谷歌浏览器)</a> 或 <a href="http://www.mozilla.org/en-US/firefox/new">Firefox(火狐浏览器)</a></div>
        </div>
    </div>
</div>
<![endif]-->


<img style="display: none;" src="{{URL::asset('/')}}home/picture/bcc9ac4218c84bf6bfa50f36e674e77e.gif" />

<div class="wdg-werenrendai-top-header">
    <div class="main-section">
        <span class="tel-phone"><i class="icon-phone"></i>客服电话: 400-090-6600</span>
        <ul class="site-nav">
            <li class="nav-item padding-item"><a target="_blank" href="https://www.we.com" style="color: #ff711c">返回WE理财首页</a></li>
            @if(Session::get('username')!="")
            <li class="nav-item padding-item"><a target="_self" href="{{url('home/delSession')}}">{{Session::get('username')}}</a></li>
            <li class="nav-item">&nbsp;&nbsp;[<a target="_self" href="{{url('home/delSession')}}">退出</a>]</li>
            @endif
            <li class="nav-item padding-item"><a target="_blank" href="/pc/about/rrd">关于我们</a></li>

            <li class="nav-item padding-item"><a target="_blank" href="/pc/about/rrdHelp/help">帮助中心</a></li>

            <li class="nav-item padding-item"><a target="_blank" href="http://bbs.we.com/">用户论坛</a></li>

            <li class="nav-item padding-item"><i class="icon-mobile3"></i><a target="_blank" href="/pc/app-download.html">移动客户端</a></li>
        </ul>
    </div>
</div>
@section('header')
<div class="wdg-werenrendai-second-header">
    <div class="main-section current-channel-index">
        <a href="/" class="brand-logo mt15">

            <!--首页对logo添加h1标签-->
            <h1 class="rrd-logo">人人贷</h1>

        </a>

        <ul class="site-nav">
            <li class="channel-item active-channel"><a href="/">首页</a></li>
            <li class="channel-item ">
                <a href="{{url('uplan/show')}}?classId=1">U计划</a>
            </li>
            <li class="channel-item "><a href="{{url('uplan/uXuan')}}?classId=2">优选计划</a></li>
            <li class="channel-item "><a href="{{url('uplan/xin')}}?classId=2">薪计划</a></li>
            <li class="channel-item "><a href="/pc/loan.html">债权</a></li>
            <li class="channel-item ">
                <a href="{{url('home/one')}}" target="_blank">人人学院</a>
            </li>

            <li class="channel-item" style="width: 144px;"><a href="/credit" target="_blank">我要借款/还款</a></li>
            <li class="user-item fn-clear" num="">

                <div class="denglu">
                    @if(Session::get('tel')!="")
                        <a href="{{url('personCenter/show')}}">我的账户</a>
                    @else
                        <a target="_self" href="{{url('home/home')}}">注册</a> / <a target="_self" href="{{url('home/home')}}">登录</a>

                    @endif
                </div>

            </li>
        </ul>
    </div>
</div>
<div id="header-helper" style="display: none;">
    <span id="header-helper-authenticated">
         false
    </span>
</div>
@show
@yield('content')


@section('footer')
    <div class="werenrendai-footer">
        <div class="footer-center">
            <div class="friend-link">
                <div class="f-l-l">友情链接</div>
                <div class="f-l-r">
                    <ul>
                        <li class="fn-left">
                            <a class="gray" target="_blank" href="/pc/college.html">人人学院</a>
                        </li>
                        <li class="fn-left">
                            <a class="gray" target="_blank" href="https://www.we.com">WE理财</a>
                        </li>
                        <li class="fn-left">
                            <a class="gray" target="_blank" href="/pc/uPlan.html">U计划</a>
                        </li>
                        <li class="fn-left">
                            <a class="gray" target="_blank" href="http://www.ucredit.com">人人友信</a>
                        </li>
                        <li class="fn-left">
                            <a class="gray" target="_blank" href="http://bbs.we.com">用户论坛</a>
                        </li>
                        <li class="fn-left">
                            <a class="gray" target="_blank" href="/pc/autoinvest.html">薪计划</a>
                        </li>
                        <li class="fn-left">
                            <a class="gray" target="_blank" href="/pc/loan.html">债权</a>
                        </li>
                    </ul>
                    <!--<span class="sanjiao icon-show"><i></i></span>-->
                </div>
            </div>
            <div class="introduce" style="display: none;">
                <ul class="fn-clear">
                    <li class="fn-left">
                        <a class="gray" target="_blank" href="/about/about.action?flag=contact">联系我们</a>
                    </li>
                </ul>
            </div>
            <div class="introduce">
                <ul class="fn-clear icons">
                    <li class="fn-left">
                        客户服务
                    </li>
                    <li class="fn-left"><a id="wexinBtn" class="gray" href="javascript:;" tabindex="-1">
                            微信</a></li>
                    <li class="fn-left"><a class="gray" target="_blank" rel="external nofollow" href="http://e.weibo.com/renrendai?ref=http%3A%2F%2Fwww.renrendai.com%2F">新浪微博</a></li>
                    <li class="fn-left"><a class="gray cursor-pointer" rel="external nofollow" target="_blank" onclick="online_service();">在线客服</a></li>
                </ul>
            </div>
            <div class="desc">
                <span class="up-line"></span>
                <span class="down-line"></span>
                <div class="d-l">
                    <p class="first">© <span class="year">2017</span> 人人贷商务顾问(北京)有限公司 All rights reserved </p>
                    <p class="gray"><span>京ICP证 100953号</span> <span style="display:inline-block;text-decoration:none;height:20px;line-height:20px;">京公网安备 11010802021944</span> 京ICP备12025643号-1</p>
                    <p>人人贷商务顾问(北京)有限公司: 市场有风险  投资需谨慎  座机号码 010-53232880</p>
                </div>
                <div class="d-c">
                    <div class="d-c-wx"><img src="{{URL::asset('/')}}home/picture/we-weixing_10afe11.png" alt="人人贷微信公众号"/></div>
                    <div class="d-c-app"><img src="{{URL::asset('/')}}home/picture/app-weixin_e175ae1.png" alt="人人贷app下载"/></div>
                </div>
                <div class="d-r">
                    <div class="phone">400-090-6600</div>
                    <div class="time">服务时间: 9:00-21:00</div>
                </div>
            </div>
            <div class="img-show">
                <a rel="external nofollow" class="ui-footer-verification-item fn-left trust" id="kx_verify" href="https://ss.knet.cn/verifyseal.dll?sn=e13042311010040288j4wq000000&ct=df&a=1&pa=931969"title="人人贷已通过中网权威数据库对比，获得“可信网站”身份验证，您可放心使用。"  target="_blank">
                </a>
                <a rel="external nofollow" class="ui-footer-verification-item fn-left internet" href="http://si.trustutn.org/info?sn=881141203000033878231" title="人人贷已通过认证联盟权威数据库对比，获得“互联网金融行业认证”，您可放心使用。" target="_blank"></a>
                <a rel="external nofollow" class="ui-footer-verification-item fn-left itrust" title="人人贷已经成为中国互联网信用评价中心网络诚信联盟成员，并且完成企业信用评级 " href="http://www.itrust.org.cn/home/index/itrust_certifi/wm/2554879344" target="_blank"></a>
                <a rel="external nofollow" class="ui-footer-verification-item fn-left customer" title="人人贷获评12315.com客户满意度测评中心最高等级满意度" href="http://www.itrust.org.cn/home/index/satification_certificate/wm/MY2017061202" target="_blank"></a>
                <a rel="external nofollow" class="ui-footer-verification-item fn-left copper" title="人人贷已经完成在公安机关的信息备案，您可了解网站相关备案信息。" href="http://gawa.bjchy.gov.cn/websearch/" target="_blank" ></a>
                <!--<a class="ui-footer-verification-item fn-left certificate" title="人人贷已经完成在北京市工商局网站备案，您可了解网站相关备案信息。" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202013052900002" target="_blank" ></a>-->
                <a rel="external nofollow" class="ui-footer-verification-item fn-left hundred" title="人人贷为AAA级信用企业的互联网百强企业证书。" href="http://www.we.com/cms/5788c3322fc6cb3b46b9e7e2/common/footer/2016%E5%B9%B4%E4%BA%92%E8%81%94%E7%BD%91%E7%99%BE%E5%BC%BA%E4%BC%81%E4%B8%9A-%E8%AF%81%E4%B9%A6.pdf" target="_blank" ></a>
                <a rel="external nofollow" class="ui-footer-verification-item fn-left norton" title="人人贷已引入VeriSign SSL加密技术，您的隐私及个人资料安全已受最高级别的保护。" href="https://trustsealinfo.websecurity.norton.com/splash?form_file=fdf/splash.fdf&dn=renrendai.com&lang=zh_cn" target="_blank" ></a>

            </div>
        </div>
    </div>


    <div class="fixed-download-link">
        <div class="download-link-wrap">
            <a class="calc" href="/pc/calculator/prodType/Loanplan" target="_blank">
                <img src="{{URL::asset('/')}}home/picture/calc_7165130.png" />
                <div class="hover">收益计算</div>
            </a>
            <a class="help" onclick="online_service();" href="javascript:;">
                <img src="{{URL::asset('/')}}home/picture/help_9d76e33.png" />
                <div class="hover">在线客服</div>
            </a>
            <a class="download">
                <img src="{{URL::asset('/')}}home/picture/download_c30dbfb.png" />
                <div class="hover">下载APP</div>
            </a>
            <a class="top">
                <img src="{{URL::asset('/')}}home/picture/arrow_fbf4659.png" alt="" />
            </a>
        </div>
        <div class="app-link-wrap">
            <img class="qrcode" src="{{URL::asset('/')}}home/picture/qrcode_c0a844e.png" alt="" />
            <div class="link">
                <div class="text">人人贷理财APP下载</div>
                <a rel="external nofollow" href="https://itunes.apple.com/us/app/id883561142?mt=8" target="_blank" class="ios">iOS版</a>
                <a href="/event/download.action?type=apk" target="_blank" class="android">Android版</a>
            </div>
        </div>
    </div>

    <div class="fn-hide">
        <div id="weixin-content" class="p20 text-center">
            <img src="{{URL::asset('/')}}home/picture/weixin_rrd_5b83f9c.jpg" style="width:250px" />
            <p>微信扫一扫，人人贷理财里动态全知道！</p>

        </div>
    </div>
@show


<script type='text/javascript'>
    function online_service() {

        window.open('http://chat.looyuoms.com/chat/chat/p.do?c=20000293&f=10042100&g=10048378&site=5372&r=%23params%3A姓名%2C游客', '_blank', 'height=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');

    }

</script>














<script>

     var _hmt = _hmt || [];
     (function() {
     var hm = document.createElement("script");
     //we，rerendai使用不同的百度统计代码
     if(window.tplConf._isWeCom == 'true'){
     hm.src = "//hm.baidu.com/hm.js?16f9bb97b83369e62ee1386631124bb1";
     }else{
     hm.src = "https://hm.baidu.com/hm.js?a00f46563afb7c779eef47b5de48fcde";
     }
     var s = document.getElementsByTagName("script")[0];
     s.parentNode.insertBefore(hm, s);
     })();


    //ga统计
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-93150356-1', 'auto');
    ga('send', 'pageview');
</script>




<script type="text/javascript" src="{{URL::asset('/')}}home/js/mod_f76e019.js"></script><script type="text/javascript" src="{{URL::asset('/')}}home/js/common_nm_c1e2e2f.js"></script><script type="text/javascript" src="{{URL::asset('/')}}home/js/common_wdg_aa3b670.js"></script><script type="text/javascript" src="{{URL::asset('/')}}home/js/home_wdg_c85ad5b.js"></script><script type="text/javascript" src="{{URL::asset('/')}}home/js/index_3b158a0.js"></script><script type="text/javascript" src="{{URL::asset('/')}}home/js/layout_b972aa2.js"></script><script type="text/javascript">!function() {
        require(["common:page/layout.js"] , function(app){

            app.initUtmOperate();
        });
    }();
    !function() {
        require(["common:widget/werenrendai-home/second-header/second-header"], function(header){
            header.init();
        });
    }();
    !function() {
        require(["common:widget/werenrendai-home/footer/footer"], function(){});
    }();
    !function() {
        var trade = '{\u0022tradeTimes\u0022:\u00224,525\u0022,\u0022earnedAmount\u0022:\u002233\u0022,\u0022tradeAmount\u0022:[\u00223\u0022,\u00223\u0022,\u00224\u0022],\u0022userTotalCount\u0022:4480945}';
        var article = '{\u0022body\u0022:\u0022\u003Cp style\u003D\u005C\u0022line\u002Dheight: 32px\u003Bvertical\u002Dalign: baseline\u003Bbackground: white\u005C\u0022\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E尊敬的人人贷理财用户：\u003C/span\u003E\u003C/p\u003E\u003Cp style\u003D\u005C\u0022line\u002Dheight: 32px\u003Bvertical\u002Dalign: baseline\u003Bbackground: white\u005C\u0022\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E\u0026nbsp\u003B\u003C/span\u003E\u003C/p\u003E\u003Cp style\u003D\u005C\u0022line\u002Dheight: 32px\u003Bvertical\u002Dalign: baseline\u003Bbackground: white\u005C\u0022\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E您好！由于银行进行系统升级维护，在此期间您将无法使用以下银行卡进行充值：\u003C/span\u003E\u003C/p\u003E\u003Cp style\u003D\u005C\u0022text\u002Dindent: 28px\u003Bline\u002Dheight: 32px\u003Bvertical\u002Dalign: baseline\u003Bbackground: white\u005C\u0022\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E\u0026nbsp\u003B\u003C/span\u003E\u003C/p\u003E\u003Cp style\u003D\u005C\u0022text\u002Dindent: 28px\u003Bline\u002Dheight: 32px\u003Bvertical\u002Dalign: baseline\u003Bbackground: white\u005C\u0022\u003E\u003Cstrong\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E交通银行：\u003C/span\u003E\u003C/strong\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E2017\u003C/span\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E年7月29日21:00至23:00\u003C/span\u003E\u003C/p\u003E\u003Cp style\u003D\u005C\u0022text\u002Dindent: 28px\u003Bline\u002Dheight: 32px\u003Bvertical\u002Dalign: baseline\u003Bbackground: white\u005C\u0022\u003E\u003Cstrong\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E浦发银行：\u003C/span\u003E\u003C/strong\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E2\u003C/span\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E017\u003C/span\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E年7月30日3:00至4:00\u003C/span\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E\u0026nbsp\u003B\u003B 2\u003C/span\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E017\u003C/span\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E年8月1日17:30至17:35\u003C/span\u003E\u003C/p\u003E\u003Cp style\u003D\u005C\u0022text\u002Dindent: 28px\u003Bline\u002Dheight: 32px\u003Bvertical\u002Dalign: baseline\u003Bbackground: white\u005C\u0022\u003E\u003Cstrong\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E邮储银行：\u003C/span\u003E\u003C/strong\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E2\u003C/span\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E017\u003C/span\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E年7月31日18:00至21:00\u003C/span\u003E\u003C/p\u003E\u003Cp style\u003D\u005C\u0022text\u002Dindent: 28px\u003Bline\u002Dheight: 32px\u003Bvertical\u002Dalign: baseline\u003Bbackground: white\u005C\u0022\u003E\u003Cstrong\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E农业银行：\u003C/span\u003E\u003C/strong\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E2017\u003C/span\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E年7月30日0:00至6:00\u003C/span\u003E\u003C/p\u003E\u003Cp style\u003D\u005C\u0022text\u002Dindent: 28px\u003Bline\u002Dheight: 32px\u003Bvertical\u002Dalign: baseline\u003Bbackground: white\u005C\u0022\u003E\u003Cstrong\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E中国银行：\u003C/span\u003E\u003C/strong\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E2017\u003C/span\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E年7月30日1:00至3:55\u003C/span\u003E\u003C/p\u003E\u003Cp style\u003D\u005C\u0022text\u002Dindent: 28px\u003Bline\u002Dheight: 32px\u003Bvertical\u002Dalign: baseline\u003Bbackground: white\u005C\u0022\u003E\u003Cstrong\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E工商银行：\u003C/span\u003E\u003C/strong\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E2017\u003C/span\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E年7月30日0:15至0:17、2:20至2:22\u003C/span\u003E\u003C/p\u003E\u003Cp style\u003D\u005C\u0022margin\u002Dtop:5px\u003Bmargin\u002Dright:0\u003Bmargin\u002Dbottom:5px\u003Bmargin\u002Dleft: 0\u003Bline\u002Dheight:32px\u003Bbackground:white\u003Bvertical\u002Dalign:baseline\u005C\u0022\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dsize: 14px\u003Bfont\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E\u0026nbsp\u003B\u003C/span\u003E\u003C/p\u003E\u003Cp style\u003D\u005C\u0022margin\u002Dtop:5px\u003Bmargin\u002Dright:0\u003Bmargin\u002Dbottom:5px\u003Bmargin\u002Dleft: 0\u003Bline\u002Dheight:32px\u003Bbackground:white\u003Bvertical\u002Dalign:baseline\u005C\u0022\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dsize:14px\u003Bfont\u002Dfamily:\u0026#39\u003B微软雅黑\u0026#39\u003B,\u0026#39\u003Bsans\u002Dserif\u0026#39\u003B\u003Bborder:none windowtext 1px\u003Bpadding:0\u005C\u0022\u003E请您合理安排交易时间，由此给您带来的不便，敬请谅解！如您有任何疑问请联系在线客服或拨打客服热线：400\u002D090\u002D6600。\u003C/span\u003E\u003C/p\u003E\u003Cp style\u003D\u005C\u0022line\u002Dheight: 32px\u003Bvertical\u002Dalign: baseline\u003Bbackground: white\u005C\u0022\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B \u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B\u0026nbsp\u003B \u0026nbsp\u003B\u003C/span\u003E\u003C/p\u003E\u003Cp style\u003D\u005C\u0022text\u002Dalign:right\u003Bline\u002Dheight:32px\u003Bbackground:white\u003Bvertical\u002Dalign:baseline\u005C\u0022\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dfamily: 微软雅黑, sans\u002Dserif\u005C\u0022\u003E人人贷商务顾问（北京）有限公司\u003C/span\u003E\u003C/p\u003E\u003Cp style\u003D\u005C\u0022text\u002Dalign: right\u003B\u005C\u0022\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dsize: 14px\u003Bfont\u002Dfamily: 微软雅黑, sans\u002Dserif\u003Bbackground: white\u005C\u0022\u003E2017\u003C/span\u003E\u003Cspan style\u003D\u005C\u0022font\u002Dsize: 14px\u003Bfont\u002Dfamily: 微软雅黑, sans\u002Dserif\u003Bbackground: white\u005C\u0022\u003E年07月28日\u003C/span\u003E\u003C/p\u003E\u0022,\u0022expireTime\u0022:\u0022\u0022,\u0022noticeTime\u0022:\u00222017\u002D07\u002D28\u0022,\u0022title\u0022:\u0022关于交通银行、浦发银行、邮储银行、农业银行、中国银行、工商银行系统升级维护公告\u0022}';
        var exchange = '[{\u0022actualAmount\u0022:\u0022200000.00\u0022,\u0022annualRate\u0022:\u00224.00\u0022,\u0022appendAmount\u0022:\u00221000.00\u0022,\u0022contractId\u0022:\u0022nanjing20160629\u0022,\u0022endInterestDate\u0022:\u002220160804\u0022,\u0022incomeType\u0022:\u0022非保本预期\u0022,\u0022nowTime\u0022:\u00221501767752487\u0022,\u0022originIssuer\u0022:\u0022南京金融资产交易中心\u0022,\u0022productDesc\u0022:\u0022本产品所募集资金投资于国内知名的大型金融机构所发行的金融产品\u0022,\u0022productName\u0022:\u0022安盈计划\u002D30天\u002DNJ160630\u002D01\u0022,\u0022productNo\u0022:\u0022EX20160629214635001001\u0022,\u0022productPeriod\u0022:\u002230\u0022,\u0022profitDesc\u0022:\u0022本产品约定年化收益率为4%，实际收益率以产品到期结算收益为准。本产品自发行日(2016年7月5日)起计息，根据投资人持有产品的实际天数计算收益，产品到期日不计息。本产品认购期间内(2016年6月30日\u002D2016年7月4日)认购资金不计息。\u0022,\u0022projectSource\u0022:\u0022南京金融资产交易中心\u0022,\u0022repayText\u0022:\u0022到期一次性回收本金及收益\u0022,\u0022startAmount\u0022:\u00221,000.00\u0022,\u0022startSellingTime\u0022:\u00221467252000000\u0022,\u0022status\u0022:\u00226\u0022,\u0022tag\u0022:\u0022\u0022,\u0022totalAmount\u0022:\u0022200000.00\u0022},{\u0022actualAmount\u0022:\u0022200000.00\u0022,\u0022annualRate\u0022:\u00224.00\u0022,\u0022appendAmount\u0022:\u00221000.00\u0022,\u0022contractId\u0022:\u0022nanjing20160629\u0022,\u0022endInterestDate\u0022:\u002220160804\u0022,\u0022incomeType\u0022:\u0022非保本预期\u0022,\u0022nowTime\u0022:\u00221501767752487\u0022,\u0022originIssuer\u0022:\u0022南京金融资产交易中心\u0022,\u0022productDesc\u0022:\u0022本产品所募集资金投资于国内知名的大型金融机构所发行的金融产品\u0022,\u0022productName\u0022:\u0022安盈计划\u002D30天\u002DNJ160630\u002D02\u0022,\u0022productNo\u0022:\u0022EX20160629214635001002\u0022,\u0022productPeriod\u0022:\u002230\u0022,\u0022profitDesc\u0022:\u0022本产品约定年化收益率为4%，实际收益率以产品到期结算收益为准。本产品自发行日(2016年7月5日)起计息，根据投资人持有产品的实际天数计算收益，产品到期日不计息。本产品认购期间内(2016年6月30日\u002D2016年7月4日)认购资金不计息。\u0022,\u0022projectSource\u0022:\u0022南京金融资产交易中心\u0022,\u0022repayText\u0022:\u0022到期一次性回收本金及收益\u0022,\u0022startAmount\u0022:\u00221,000.00\u0022,\u0022startSellingTime\u0022:\u00221467252000000\u0022,\u0022status\u0022:\u00226\u0022,\u0022tag\u0022:\u0022\u0022,\u0022totalAmount\u0022:\u0022200000.00\u0022},{\u0022actualAmount\u0022:\u0022200000.00\u0022,\u0022annualRate\u0022:\u00224.00\u0022,\u0022appendAmount\u0022:\u00221000.00\u0022,\u0022contractId\u0022:\u0022nanjing20160629\u0022,\u0022endInterestDate\u0022:\u002220160804\u0022,\u0022incomeType\u0022:\u0022非保本预期\u0022,\u0022nowTime\u0022:\u00221501767752487\u0022,\u0022originIssuer\u0022:\u0022南京金融资产交易中心\u0022,\u0022productDesc\u0022:\u0022本产品所募集资金投资于国内知名的大型金融机构所发行的金融产品\u0022,\u0022productName\u0022:\u0022安盈计划\u002D30天\u002DNJ160630\u002D03\u0022,\u0022productNo\u0022:\u0022EX20160629214635001003\u0022,\u0022productPeriod\u0022:\u002230\u0022,\u0022profitDesc\u0022:\u0022本产品约定年化收益率为4%，实际收益率以产品到期结算收益为准。本产品自发行日(2016年7月5日)起计息，根据投资人持有产品的实际天数计算收益，产品到期日不计息。本产品认购期间内(2016年6月30日\u002D2016年7月4日)认购资金不计息。\u0022,\u0022projectSource\u0022:\u0022南京金融资产交易中心\u0022,\u0022repayText\u0022:\u0022到期一次性回收本金及收益\u0022,\u0022startAmount\u0022:\u00221,000.00\u0022,\u0022startSellingTime\u0022:\u00221467252000000\u0022,\u0022status\u0022:\u00226\u0022,\u0022tag\u0022:\u0022\u0022,\u0022totalAmount\u0022:\u0022200000.00\u0022}]';
        var salary = '{\u0022id\u0022:20557,\u0022name\u0022:\u0022薪计划170803期\u0022,\u0022subpointCountPlan\u0022:200,\u0022subpointCountActual\u0022:39,\u0022status\u0022:\u00221\u0022,\u0022lockPeriod\u0022:12,\u0022minRechargeAmount\u0022:500,\u0022maxRechargeAmount\u0022:20000,\u0022beginSellingTime\u0022:1501727400000,\u0022introduce\u0022:\u0022薪计划是人人贷针对工薪族投资需求量身打造的高效自动投标工具。用户可在每月固定日期支付固定金额的出借资金（每月加入金额由初次加入时确定，后续月份不支持修改），系统对用户支付的月出借资金在用户认可的标的范围内，对符合要求的标的进行自动出借，回款本息在相应期限内再进行自动出借，锁定期限结束后通过平台债权转让系统进行转让退出。薪计划所对应的标的均100%适用于人人贷用户利益保障机制并由系统实现标的分散出借。预期收益不等于实际收益，出借人需自行承担资金出借的风险与责任；市场有风险，投资需谨慎。\u0022,\u0022waitTime\u0022:null,\u0022processRatio\u0022:19,\u0022amount\u0022:0,\u0022earnInterest\u0022:0,\u0022expectedRate\u0022:\u00228\u0022,\u0022joined\u0022:false,\u0022subPointId\u0022:null,\u0022lastCacheTime\u0022:null,\u0022reserveDate\u0022:null,\u0022useTime\u0022:null,\u0022averageBidInterest\u0022:0,\u0022fundsUseRate\u0022:0,\u0022averageBidCount\u0022:0,\u0022bidCount\u0022:0,\u0022avalibleAmount\u0022:0,\u0022provinceDist\u0022:null,\u0022provinces\u0022:0,\u0022borrowCount\u0022:0,\u0022endDate\u0022:null,\u0022description\u0022:null,\u0022restPlace\u0022:null,\u0022lastInvestDay\u0022:null,\u0022dayOfMonth\u0022:3}';
        var fund = '[{\u0022rateYear\u0022:\u0022\u002D5.67\u0022,\u0022rateHalfYear\u0022:\u00222.64\u0022,\u0022riskLevel\u0022:\u0022高\u0022,\u0022minSubscript\u0022:\u00221.00\u0022,\u0022fundCode\u0022:\u0022000217\u0022,\u0022nav\u0022:\u00221.0153\u0022,\u0022fundType\u0022:\u0022指数\u0022,\u0022abbrev\u0022:\u0022华安易富黄金ETF联接C\u0022,\u0022rate7day\u0022:null,\u0022profit10k\u0022:null},{\u0022rateYear\u0022:\u00223.72\u0022,\u0022rateHalfYear\u0022:\u00221.98\u0022,\u0022riskLevel\u0022:\u0022中\u0022,\u0022minSubscript\u0022:\u0022100.00\u0022,\u0022fundCode\u0022:\u0022519153\u0022,\u0022nav\u0022:\u00221.3370\u0022,\u0022fundType\u0022:\u0022债权\u0022,\u0022abbrev\u0022:\u0022新华纯债添利C\u0022,\u0022rate7day\u0022:null,\u0022profit10k\u0022:null},{\u0022rateYear\u0022:\u002230.77\u0022,\u0022rateHalfYear\u0022:\u002215.95\u0022,\u0022riskLevel\u0022:\u0022高\u0022,\u0022minSubscript\u0022:\u002210.00\u0022,\u0022fundCode\u0022:\u0022001626\u0022,\u0022nav\u0022:\u00221.2070\u0022,\u0022fundType\u0022:\u0022股票\u0022,\u0022abbrev\u0022:\u0022国泰央企改革\u0022,\u0022rate7day\u0022:null,\u0022profit10k\u0022:null},{\u0022rateYear\u0022:\u002228.12\u0022,\u0022rateHalfYear\u0022:\u002217.61\u0022,\u0022riskLevel\u0022:\u0022高\u0022,\u0022minSubscript\u0022:\u002210.00\u0022,\u0022fundCode\u0022:\u0022001074\u0022,\u0022nav\u0022:\u00221.0934\u0022,\u0022fundType\u0022:\u0022混合\u0022,\u0022abbrev\u0022:\u0022华泰柏瑞量化驱动\u0022,\u0022rate7day\u0022:null,\u0022profit10k\u0022:null}]';
        var debt = '[{\u0022id\u0022:2241209,\u0022title\u0022:\u0022扩大生产/经营\u0022,\u0022displayLoanType\u0022:\u0022SDRZ\u0022,\u0022interest\u0022:\u00229.60\u0022,\u0022amount\u0022:\u0022145,500.00\u0022,\u0022months\u0022:36,\u0022finishedRatio\u0022:100,\u0022status\u0022:\u0022IN_PROGRESS\u0022},{\u0022id\u0022:2241208,\u0022title\u0022:\u0022资金周转\u0022,\u0022displayLoanType\u0022:\u0022SDRZ\u0022,\u0022interest\u0022:\u00229.60\u0022,\u0022amount\u0022:\u002260,700.00\u0022,\u0022months\u0022:36,\u0022finishedRatio\u0022:100,\u0022status\u0022:\u0022IN_PROGRESS\u0022},{\u0022id\u0022:2241207,\u0022title\u0022:\u0022扩大生产/经营\u0022,\u0022displayLoanType\u0022:\u0022SDRZ\u0022,\u0022interest\u0022:\u002210.20\u0022,\u0022amount\u0022:\u0022147,500.00\u0022,\u0022months\u0022:36,\u0022finishedRatio\u0022:100,\u0022status\u0022:\u0022IN_PROGRESS\u0022},{\u0022id\u0022:2241206,\u0022title\u0022:\u0022装修\u0022,\u0022displayLoanType\u0022:\u0022SDRZ\u0022,\u0022interest\u0022:\u00229.60\u0022,\u0022amount\u0022:\u0022145,500.00\u0022,\u0022months\u0022:36,\u0022finishedRatio\u0022:100,\u0022status\u0022:\u0022IN_PROGRESS\u0022}]';
        var financeList = '\u0022\u0022';

        trade = JSON.parse(trade);
        article = JSON.parse(article);
        exchange = JSON.parse(exchange);
        salary = JSON.parse(salary);
        fund = JSON.parse(fund);
        debt = JSON.parse(debt);
        financeList = JSON.parse(financeList);

        require(["home:page/index-werenrendai/index.js"], function(home){
            home.init({
                trade : trade,
                article : article,
                exchange: exchange,
                salary: salary,
                fund: fund,
                debt: debt,
                financeList : financeList,
            });
        });
    }();
    !function() {


    }();</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
</script>
</body>

</html>
