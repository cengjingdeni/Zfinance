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
    {{--jquery post 传值--}}
    <meta name="_token" content="{!! csrf_token() !!}"/>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>登录/注册 - 人人贷理财官网</title>



    <link rel="shortcut icon" type="image/x-icon" href="/ps/static/common/static/img/favicon-rrd.ico" />


    <link rel="stylesheet" type="text/css" href="{{URL::asset('/')}}home/css/base_41a7e4e.css">







    <script type="text/javascript">
        (function(){
            var userAgent = navigator.userAgent.toLowerCase();
            if(userAgent.match(/rv:([\d.]+)\) like gecko/) || userAgent.match(/msie ([\d.]+)/) ){
                document.write('<script src="{{URL::asset('/')}}home/js/babel-polyfill.js"><\/script>');
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
                a.src = "https://www.we.com/cms/5864b0d6a24d131067ef7956/js/zhuge.js?v=" + verStr;
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





    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/common_wdg_c1db688.css" /><link rel="stylesheet" href="{{URL::asset('/')}}home/css/common_nm_aa4d4d8.css" /><link rel="stylesheet" href="{{URL::asset('/')}}home/css/passport_wdg_8b183f3.css" /><link rel="stylesheet" href="{{URL::asset('/')}}home/css/index_e7cd5c0.css" /></head>

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



<div class="wdg-second-header-lg">
    <div class="main-section">


        <a href="/?wpFromPos=registerLogo" class="brand-logo mt15 rrd-log-img">
            <img src="{{URL::asset('/')}}home/picture/rrd_logo@2x_deea0ef.png" alt="logo人人贷理财官网" />
        </a>


    </div>
</div>



<div class="main-content">


    <div class="login-index" >

        <div class="car-center">
            <div class="spot">

            </div>
            <div class="data-show ">
                <div class="tab">
                    <span class="login-checked">登录</span>
                    <i></i>
                    <span class="reg-checked">注册</span>
                </div>
                <div id="form-login">
                    <div class="login-form">
                        <form action="{{url('home/checkLogin')}}" method="post" id="loginForm">
                            {!! csrf_field() !!}
                            <ul class="login-ul" >
                                <li>
                                    <input class="ui-input" type="text" placeholder="请输入手机号/邮箱" maxlength="48" onKeyDown="if (this.value.length>=48 ){event.returnValue=false}" name="j_username" id="j_username" data-is="isMobileOrEmail" autocomplete="off" />

                                </li>
                                <li>
                                    <input class="ui-input " id="J_pass_input" placeholder="请输入密码" type="password" name='j_password' data-is="isEmail" />
                                </li>

                                {{--<li class="validate-image input-hide">--}}
                                    {{--<input class="code"  name="j_code" id="randCode" type="text" placeholder="图形验证"/>--}}
                                    {{--<a href="javascript:void(0)" class="rand-code"><img id="randImage" align="absmiddle" src="{{URL::asset('/')}}home/picture/8467692596494626b0be32dffc6b1c24.gif" name="randImage" alt="验证码" /></a>--}}
                                {{--</li>--}}

                            </ul>
                            <span id="loginSpan"></span>
                            <div class="rember">
                                <div class="rember-le">
                <span class="j-checkbox j-checked">
                     <input name="rememberme" id="rememberme" type="checkbox" checked="checked"/>
                </span>
                                    <label for="rememberme"><span class="agree">我已经阅读并同意<a href="/pc/agreement/contract/currency/name/user.we_reg" target="_blank">《we.com平台注册服务协议》</a>和<br/><a href="/pc/agreement/contract/currency/name/user.rrd_reg" target="_blank">《renrendai.com平台注册服务协议》</a></span></label>

                                </div>
                            </div>
                            <input type="hidden" id="targetUrl" name="targetUrl" value="" />
                            <input type="hidden" id="returnUrl" name="returnUrl" value="" />
                            <div class="submit">
                                <input type="submit" class="login-btn" value='立即登录'/>
                                <img src="{{URL::asset('/')}}home/picture/loading_dbf3776.gif"/>
                            </div>
                        </form>
                        <script src="{{URL::asset('/')}}home/js/jquery.min.js"></script>
                        <script type="text/javascript">
                            loginPone = false;
                            loginPass = false;
                            $(function(){
                                //验证手机号格式
                                $("#j_username").blur(function(){
                                    var obj = $(this);
                                    var phone = obj.val();
                                    if(!checkUsername(phone)){
                                        loginPone = false;
                                        obj.next().remove();
                                        obj.after('<span style="color: red;display:inline-block;">电话号码填写有误</span>');
                                    }else{
                                        $.ajax({
                                            type:"post",
                                            url:"checkPhone",
                                            data:{
                                                telephone:phone
                                            },success:function(data){
                                                var da = JSON.parse(data);
                                                if(da.error==0){
                                                    loginPone = false;
                                                    obj.next().remove();
                                                    obj.after('<span style="color: red;">'+da.msg+'</span>');
                                                }else if(da.error==1){
                                                    loginPone = true;
                                                    obj.next().remove();
                                                    obj.after('<span style="color: green">✔</span>');
                                                }else{
                                                    loginPone = false;
                                                    obj.next().remove();
                                                    obj.after('<span style="color: green">未知错误</span>');
                                                }
                                            }
                                        });


                                    }
                                });
                                //验证密码格式
                                $("#J_pass_input").blur(function(){
                                    if(loginPone){
                                        var obj = $(this);
                                        var pwd = obj.val();
                                        var phone = $("#j_username").val();
                                        if(!mima(pwd)){

                                            loginPass = false;
                                            $("#loginSpan").css({'color':'red','display':'block'}).html("密码为8~16位数字、字母或符号组合");
                                        }else{
                                            loginPass = true;
                                        }
                                    }
                                });
                                $("#loginForm").submit(function(){
                                    if(loginPone && loginPass && $("#rememberme").attr("checked")){
                                        return true
                                    }else{
                                        return false;
                                    }
                                });

                            });
                        </script>
                        <div class="login-last">
                            <div class="login-error">
                                请输入正确的手机号
                            </div>
                            <a class="findpsw" href="{{url('home/forgetPwd')}}">忘记密码?</a>
                        </div>

                    </div>



                    <script id="email-suggest-template" type="text/x-handlebars-template">
                        <ul>
                            {{--{{#if remove}}--}}
                            {{--<li>{{inputs}}</li>--}}
                            {{--{{/if}}--}}
                            {{--{{#each lists}}--}}
                            {{--<li>{{email}}</li>--}}
                            {{--{{/each}}--}}
                        </ul>
                    </script>

                </div>
                <div id="form-reg">
                    <div class="reg-form">
                        <ul class="reg-ul">
                            <li>
                                <input class="uiinput" type="text" placeholder="请输入手机号" maxlength="48"   name="username" id="regusername"/>

                            </li>
                            {{--<li class="rand_code_show">--}}
                              {{----}}
                            {{--</li>--}}
                            <li>
                                <input class="code"  autocomplete="off" name="mobileCode" id="regverif" type="text" placeholder="短信验证码"/>
                                <span class="verification" id="verification" onclick="phone()">获取验证码<span id="sp"></span></span>
                                <script src="{{URL::asset('/home/js/jquery.min.js')}}"></script>
                                    <script>
                                         checkPhone = false;
                                         checkRephone = false;
                                         checkCode = 9;
                                         verifCode = false;
                                         checkMima = false;
                                         checkIt = false;
                                         checkPass = false;
//                                         checkRememberme = true;
                                         var setTime;
                                         //验证手机号码是否是手机格式
                                    function checkUsername(phone){
                                          var leg = /^1[34578]\d{9}$/;
                                          if(leg.test(phone)){
                                              checkPhone = true;
                                              return true
                                          }else{
                                              checkPhone = false;
                                              return false;
                                          }
                                    }
                                         //验证密码规则
                                    function mima(mi){
                                        var leg = /\w{8,16}/g;
                                        if(leg.test(mi)){
                                            checkMima = true;
                                            return true;
                                        }else{
                                            checkMima = false;
                                            return false;
                                        }
                                    }
                                    var spTime = 60;
                                    function  settime(obj){
                                        if(spTime == 0){
                                            checkCode = '';
                                            obj.attr('disaled',false);
                                            obj.html("获取验证码");
                                            spTime = 60;
                                            return;
                                        }else{

                                            obj.attr('disabled',true);
                                            obj.html("重新发送（"+spTime+")");
                                            spTime--;
                                        }
                                        setTimeout(function(){
                                           settime(obj)
                                        },1000);
                                    }
//                                    function kong(){
//                                        checkCode = '';
//                                    }
//                                    //判断是否阅读服务协议
//                                    function remember(obj){
//                                        if(obj.attr("checked")){
//                                            checkRememberme = true
//                                        }else{
//                                            checkRememberme = false;
//                                        }
//                                    }
                                         //获取手机验证码
                                         function phone(){

                                             var obj = $("#verification");

                                             if(checkPhone && checkRephone ){

                                                 var phone = $("#regusername").val();
                                                 settime(obj);
//                                                  obj.html("重新发送").append('<span id="sp">(<span id="goTime">60</span>)</span>');
                                                 //验证码60s有效时间倒计时
//                                                  var time=parseInt($("#goTime").text());
//                                                  setTime=setInterval(function(){
//                                                      if(time<=0){
//
//                                                          checkCode = "";
//                                                          clearInterval(setTime);
//                                                          $("#sp").text("");
//                                                          return;
//                                                      }
//
//                                                      time--;
//                                                      $("#goTime").text(time);
//                                                  },1000);

                                                 $.ajax({
                                                     type:'post',
                                                     url:"checkMessage",
                                                     data:{
                                                         phone:phone
                                                     },success:function(data){
//                                                         alert(data);return;
                                                         var da = JSON.parse(data);
                                                         if(da.msg==0){
                                                             checkIt = false;
                                                             $("#verifcode").html('<span style="color: green">获取验证码失败</span>');
                                                         }else{
                                                             checkIt = true;
                                                             checkCode = da.code;
                                                         }
                                                     }
                                                 });
                                             }else{
                                                 checkIt = false;
                                                 return false;
                                             }
                                         };
                                    $(function(){
                                        //验证手机号是否被注册
                                        $("#regusername").blur(function(){
                                            var obj = $(this);
                                            var phone = obj.val();
                                            if(phone==''){
                                                checkRephone = false;
                                                obj.next("#userspan").remove();
                                                obj.after('<span style="color: red" id="userspan">不能为空</span>');
                                                return false;
                                            }
                                            if(checkUsername(phone)){
                                                $.ajax({
                                                    type:"post",
                                                    url:"checkPhone",
                                                    data:{
                                                        "telephone":phone
                                                    },success:function(data){
                                                        var arr = JSON.parse(data);
                                                            if(arr.error==0){
                                                                obj.next("#userspan").remove();
                                                                obj.after('<span style="color: green" id="userspan">✔</span>');
                                                                checkRephone = true;
                                                                return true;
                                                            }else if(arr.error==1){
                                                                obj.next("#userspan").remove();
                                                                obj.after('<span style="color: red" id="userspan">该用户已被注册</span>');
                                                                checkRephone = false;
                                                                return false;
                                                            }else{
                                                                obj.next("#userspan").remove();
                                                                obj.after('<span style="color: red" id="userspan">未知错误！请重新注册</span>');
                                                                checkRephone = false;
                                                            }
                                                    }
                                                });
                                            }else{
                                                obj.next("#userspan").remove();
                                                obj.after('<span style="color:red;" id="userspan" >手机号码填写错误</span>');
                                                checkRephone = false;
                                                return false;
                                            }
                                        });


                                        //60秒后让 checkCode的值为空
//                                        setTimeout(kong,60000);
                                        //验证验证码
                                        $("#regverif").blur(function(){
                                            if(checkIt){
                                                var obj = $(this);
                                                var code = obj.val() ? obj.val():"ti";

                                                if(code == checkCode){
                                                    $("#verifcode").html("✔").css("color","green");
                                                    verifCode = true;
                                                }else if(checkCode==''){
                                                    $("#verifcode").html('验证码已过期').css('color','red');
                                                    verifCode = false;
                                                }else{
                                                    $("#verifcode").html('验证码错误').css('color','red');
                                                    verifCode = false;
                                                }
                                            }

                                        });
                                        //验证密码
                                        $("#regPassword").blur(function(){
                                            if(verifCode){
                                                var obj = $(this);
                                                var pwd = obj.val();
                                                if(mima(pwd)){
                                                    checkPass = true;
                                                    $("#mispan").css({"display":"block","color":"green"}).html("✔");

                                                }else{
                                                    checkPass = false;
                                                    $("#mispan").css({"display":"block","color":"red"}).html("密码为8~16位数字、字母或符号组合");
                                                }
                                            }
                                        });

                                        //提交注册信息
                                        $(".reg-btn").click(function(){

                                            if(checkRephone && checkIt && verifCode && checkPass && $("#rememberme").attr("checked")){
                                                var phone = $("#regusername").val();
                                                var password = $("#regPassword").val();
                                                $.ajax({
                                                    type:"post",
                                                    url:"add",
                                                    data:{
                                                        telephone:phone,
                                                        password:password
                                                    },success:function(data){

                                                        var da = JSON.parse(data);

                                                        if(da.error==0){
                                                            $("#regusername").next("#userspan").remove();
                                                            $("#regusername").after('<span style="color: red" id="userspan">注册失败</span>');
                                                            checkRephone = false;
                                                            return false;
                                                        }else if(da.error==2){
                                                            $("#regusername").next("#userspan").remove();
                                                            $("#regusername").after('<span style="color: red" id="userspan">已被注册</span>');
                                                            checkRephone = false;
                                                            return false;
                                                        }else if(da.error==1){
                                                            window.location.href = "{{url('home/shouye')}}";
                                                        }else{
                                                            $("#regusername").next("#userspan").remove();
                                                            $("#regusername").after('<span style="color: red" id="userspan">未知错误！</span>');
                                                        }
                                                    }
                                                });
                                            }
                                        });
                                    })
                                </script>
                            </li>
                            <span id="verifcode"></span>
                            <li>
                                <input class="ui-input " id="regPassword" autocomplete="off" placeholder="密码为8~16位数字、字母或符号组合" type="password" name='password' />

                            </li>
                            <span id="mispan" style="display: none;"></span>
                        </ul>
                        <div class="reg-agree">
        <span class="j-checkbox j-checked">
             <input name="rememberme" id="rememberme" type="checkbox" checked="checked"/>
        </span>
                            <label for="rememberme"><span class="agree">我已经阅读并同意<a href="/pc/agreement/contract/currency/name/user.we_reg" target="_blank">《we.com平台注册服务协议》</a>和<br/><a href="/pc/agreement/contract/currency/name/user.rrd_reg" target="_blank">《renrendai.com平台注册服务协议》</a></span></label>
                        </div>
                        {{--<input type="hidden" id="regRegisterSource" name="registerSource"  value=""/>--}}
                        {{--<input type="hidden" id="regId" name="id" value=""/>--}}
                        {{--<input type="hidden" id="regPromotion" name="promotion" value=""/>--}}
                        {{--<input type="hidden" id="regInviteCode" name="inviteCode" value=""/>--}}
                        {{--<input type="hidden" id="intention" name="intention" value=""/>--}}

                        <div class="reg-submit">
                            <input type="button" class="reg-btn" id="reg-btn" value='注册领红包'/>
                            <img src="{{URL::asset('/')}}home/picture/loading_dbf3776.gif"/>
                        </div>
                        {{--<div class="reg-error">--}}
                            {{--请输入正确的手机号--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
        <ul class="login-carousel">


            <li>
                <span><img src="{{URL::asset('/')}}home/picture/pc-zc_0630.jpg" alt="登录的轮播图"/></span>
            </li>

        </ul>
    </div>


</div>


<div class="login-footer">
    <ul class="lg-footer-ul">


        <li><span>© 2017 人人贷 All rights reserved</span><i></i></li>
        <li><span>人人贷商务顾问(北京)有限公司</span><i></i></li>


        <li><span>京公网安备11010802021944</span><i></i></li>


        <li><span>京ICP备12025643号-1</span></li>

    </ul>
    <!--<div class="login-company">北京微财科技有限公司</div>-->
</div>







<script>
    /*
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
     */

    //ga统计
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-93150356-1', 'auto');
    ga('send', 'pageview');
</script>




<script type="text/javascript" src="{{URL::asset('/')}}home/js/mod_f76e019.js"></script><script type="text/javascript" src="{{URL::asset('/')}}home/js/common_nm_c1e2e2f.js"></script><script type="text/javascript" src="{{URL::asset('/')}}home/js/common_wdg_aa3b670.js"></script><script type="text/javascript" src="{{URL::asset('/')}}home/js/passport_wdg_85e07c4.js"></script><script type="text/javascript" src="{{URL::asset('/')}}home/js/index_46c4ad9.js"></script><script type="text/javascript" src="{{URL::asset('/')}}home/js/layout_b972aa2.js"></script><script type="text/javascript">!function() {
        require(["common:page/layout.js"] , function(app){

            app.initUtmOperate();
        });
    }();
    !function() {
        var we = '\u0022\u0022';


        we= JSON.parse(we);

        require(["passport:page/index/index.js"] , function(app){
            app.init({
                we:we
            });
        });
    }();
    !function() {


    }();</script>

{{--laravel框架 jquery 'post'传值--}}

<script type="text/javascript">
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
</script>
</body>

</html>
