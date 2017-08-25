@extends('lay')
@section('content')

    {{--<link rel="stylesheet" href="{{URL::asset('/')}}home/css/base_b9880cb.css" />--}}
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/common_wdg_c1db688.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/common_nm_aa4d4d8.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/user_wdg_29c87c3.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/stepone_4419eb5.css" />
    {{--<script type="text/javascript" src="{{URL::asset('/')}}home/js/stepone_63b7a07.js"></script>--}}
    <div class="main-content">





        <div class="wdg-account-header-widget">
            <div class="main-section">
                <ul class="account-menu fn-clear">
                    <!--网站拆分，werenrendai.com和we.com展示不同的header-->

                    <li class= ' ' ><a href="https://www.renrendai.com/pc/user/account/p2p/index">P2P资产</a></li>
                    <li class= ' ' ><a href="https://www.renrendai.com/pc/user/privilege">我的特权</a></li>
                    <li class= ' ' ><a href="/pc/user/message/list">消息中心</a> <span class="org fn-hide">(0)</span></li>
                    <li class= 'active' ><a href="/pc/user/setting/accountInfo">账户设置</a></li>
                    <li class="last"><a href="https://www.we.com/pc/user/account/home/myAccount">返回we理财账户</a></li>


                </ul>
            </div>
        </div>


        <div id="pg-account-security" class="main-section j-card">





            <div id="pg-findPsw">
                <div class="content">

                    <div id="findpwd-step-nav">
                        <div class="setting-section-title title-no-border">找回密码</div>
                        <div class="step-list-con">
                            <ul class="step-list fn-clear current-step1">
                                <li class="step-item item-step1">
                                    <span class="step-index num-family" style="color: #0b73ec;">1</span>
                                    填写账户名
                                </li>
                                <li class="step-item item-step2">
                                    <span class="step-index num-family">2</span>
                                    验证身份
                                </li>
                                <li class="step-item item-step3">
                                    <span class="step-index num-family">3</span>
                                    设置新密码
                                </li>
                                <li class="step-item item-step4">
                                    <span class="step-index num-family">4</span>
                                    完成
                                </li>
                            </ul>
                        </div>
                    </div>

                    <form class="inputs" method="post" action="" id="notLoginFindPswForm">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="ui-form-item-setting">
                            <label class="ui-label-setting">手机号/邮箱</label>
                            <input type="text" id="mobileOrEmail" name="mobileOrEmail" class="ui-input-setting" placeholder="请输入手机号或邮箱" autocomplete="off" />
                            <label for="mobileOrEmail" class="error" id="telError"></label>
                        </div>
                        <div class="ui-form-item-setting">
                            <label class="ui-label-setting">验证码</label>
                            <input type="text" name="code" id="code"  class="ui-input-setting randcode" placeholder="请输入验证码" autocomplete="off" />
                            <a onclick="javascript:re_captcha();" >
                                <img src="{{url('img/captcha/1')}}" style="border-radius: 4px;" alt="titi" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="0">
                            </a>
                            <label for="code" class="error" id="codeError"></label>
                        </div>
                        <div class="ui-form-item-setting btn-wrap">
                            <span id="subNotLoginFindPswBt" class="j-setting-btn j-btn">提交</span>
                        </div>
                    </form>
                    <script src="{{URL::asset('/')}}home/js/jquery.min.js"></script>
                    <script>
                        cTel = false;
                        cCode = false;
                        function re_captcha() {
                            url = "{{url('img/captcha')}}";
                            url = url + "/" + Math.random();
                            document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=url;
                        }
                        //验证手机号
                        function check_tel(tel){
                            var leg = /^1[34578]\d{9}$/;
                            if(leg.test(tel)){
                                return true
                            }else{
                                return false;
                            }
                        }
                        $(function(){

                            $('#mobileOrEmail').bind('input propertychange', function(){
                                var obj = $(this);
                                var tel = obj.val();

                                if(tel==''){
                                    $('#telError').text('手机号不能为空');
                                    obj.css('border-color','red');
                                    return false;
                                }else{
                                    if(check_tel(tel)==false){
                                        $("#telError").text('请输入正确的手机号');
                                        obj.css('border-color','red');
                                        return false;
                                    }else{
                                        $.ajax({
                                            type:"post",
                                            url:"{{url('home/checkPhone')}}",
                                            data:{
                                                "telephone":tel
                                            },success:function(data){
                                                var da = JSON.parse(data);
                                                if(da.error==0){
                                                    $("#telError").text('请输入正确的手机号');
                                                    obj.css('border-color','red');
                                                    return false;
                                                }else if(da.error==1){
                                                    $("#telError").text('');
                                                    obj.css('border-color','green');
                                                    cTel = true;
                                                }
                                            }
                                        });

                                    }
                                }
                            });

                            $('#code').blur(function(){
                                var obj = $(this);
                                var code = obj.val();

                                if(code==''){

                                    $("#codeError").text('验证码不能为空');
                                    obj.css('border-color','red');
                                    return false;
                                }else{
                                    $("#codeError").text('');
                                    $.ajax({
                                        type:"post",
                                        url:"{{url('home/checkCode')}}",
                                        data:{
                                            "code":code
                                        },success:function(data){
                                            var da = JSON.parse(data);
                                            if(da.error==1){

                                                $("#codeError").text('验证码输入错误');
                                                obj.css('border-color','red');
                                                return false;
                                            }else{
                                                $("#codeError").text('');
                                                obj.css('border-color','green');
                                                cCode = true;
                                            }
                                        }
                                    });
                                }
                            });
                            //手机号验证和验证码验证都通过时
                            $("#subNotLoginFindPswBt").click(function(){
                                if(cTel && cCode){
                                    var tel = $("#mobileOrEmail").val();
                                    $(".item-step2").css('color','#0b73ec');
                                    $("#notLoginFindPswForm").css('display','none');
                                    $("#notLoginFindPswByMobileCodeForm").css('display','block');
                                    $(".dialog-value").text(tel);
                                }else{
                                    return false;
                                }
                            });



                        });
                    </script>

                    <form style="display: none;" class="inputs" method="post" action="" id="notLoginFindPswByMobileCodeForm">
                        <input type="hidden" name="mobile" value="17600084468" id="mobileOrEmail"/>
                        <div class="ui-form-item-setting">
                            <label class="ui-label-setting">手机号</label>
                            <span class="dialog-value"></span>
                        </div>
                        <div class="ui-form-item-setting">
                            <label class="ui-label-setting">验证码</label>
                            <input type="text" name="validCode" style="width: 300px;" id="validCode"  class="ui-input-setting randcode Mcode" placeholder="请输入验证码" autocomplete="off" />
                            <label for="validCode" class="error" id="vCode"></label>
                        </div>
                        <div class="ui-form-item-setting btn-wrap">
                            <span id="subNotLoginFindPswByMobileCodeBt" class="j-setting-btn j-btn">验证</span>
                        </div>
                        <div class="find-by-mobile">
                            　　　　　　　　　　如果您在30秒内没有收到验证码，请<span class="getMobileCode"  id="getMobileCode" style="color: #00a91c;cursor:pointer">获取验证码</span>
                        </div>
                        <span style="display: none" id="time"></span>
                        {{--<span class="getMobileCode ui-button-disabled gray" id="getMobileCode" disabled="disabled">26秒重新获取</span>--}}
                    </form>

                    <script>
                        var action = true;
                        var countdown=60;
                        var session = false;
//                        function sendemail(){
//                            var obj = $("#btn");
//                            settime(obj);
//
//                        }
                        function settime(obj) { //发送验证码倒计时

                            if (countdown == 0) {

                                obj.attr('disabled',false);
                                //obj.removeattr("disabled");
                                obj.html("获取验证码");
                                countdown = 60;
                                action = false;
                                return;
                            } else {
                                action = true;
                                obj.attr('disabled',true);
                                obj.addClass("ui-button-disabled").css('color','').html(countdown+'秒重新获取');
                                obj.parent().attr('disabled',true);
                                countdown--;
                            }
                            setTimeout(function() {
                                        settime(obj) }
                                    ,1000)
                        }

                        $(function(){
                            //获取验证码
                            $("#getMobileCode").click(function(){

                                settime($(this));
                                var tel = $(".dialog-value").text();

                                $.ajax({
                                    type:"post",
                                    url:"{{url('home/checkMessage')}}",
                                    data:{
                                        phone:tel
                                    },success:function(data){
                                        var da = JSON.parse(data);
                                        if(da.msg==1){
                                            session = true;
                                        }else{
                                            session = false;
                                        }
                                    }
                                });
                            });
                            //
                            $("#subNotLoginFindPswByMobileCodeBt").click(function(){

                                if(action == false){
                                    $('#vCode').text('').show();
                                    $('#vCode').text('验证码失效，请重新获取').css('color','red').hide(3000);return
                                }
                                var tel = $(".dialog-value").text();
                                var code = $(".Mcode").val();
                                if(code==""){
                                    $('#vCode').text('').show();
                                    $('#vCode').text('验证码不能为空').css('color','red').hide(3000);return
                                }
                                if(action && session){
                                    $.ajax({
                                        type:"post",
                                        url:"{{url('home/checkM')}}",
                                        data:{
                                            "code":code
                                        },success:function(data){
                                            var da = JSON.parse(data);

                                            if(da.error==0){
                                                $("#mobile").val(tel);
                                                $(".item-step3").css('color','#0b73ec');
                                                $("#notLoginFindPswByMobileCodeForm").css("display",'none');
                                                $("#notLoginFindPswResetPswForm").css('display','block');

                                            }
                                        }
                                    });
                                }
                            });

                        });
                    </script>

                    <div class="inputs" id="notLoginFindPswResetPswForm" style="display: none;">
                        <input type="hidden" name="email" value="" id="email">
                        <input type="hidden" name="mobile" value="" id="mobile">
                        <input type="hidden" name="validCode" value="" id="validCode">
                        <input type="hidden" name="type" value="FIND_PWD_MOBILE" id="fromType">
                        <div class="ui-form-item-setting">
                            <label class="ui-label-setting">新密码</label>
                            <input type="password" id="newpwd" name="password" class="ui-input-setting" placeholder="8~16位数字、字母或符号组合" autocomplete="off">
                            <label for="newpwd" class="error" id="pError"></label>
                        </div>
                        <div class="ui-form-item-setting">
                            <label class="ui-label-setting">确认新密码</label>
                            <input type="password" id="confirmpwd" name="confirmPassword" class="ui-input-setting" placeholder="8~16位数字、字母或符号组合" autocomplete="off">
                            <label for="confirmpwd" class="error" id="rpError"></label>
                        </div>
                        <div class="ui-form-item-setting btn-wrap">
                            <span id="subNotLoginFindPswResetPswBt" class="j-setting-btn j-btn">确定</span>
                        </div>
                        <div class="catch-error"></div>
                    </div>
                    <script>
                        checkMima = true;
                        npError = true;
                        rpError = true;
                        //验证密码规则
                        function mima(mi){
                            var leg =  /^[\w]{8,16}$/;
                            if(leg.test(mi)){
                                checkMima = true;
                                return true;
                            }else{
                                checkMima = false;
                                return false;
                            }
                        }
                        $(function(){

                            $("#newpwd").bind("input propertychange",function(){
                                var np = $("#newpwd").val();
                                mima(np);
                                var obj = $(this);
                                if(!checkMima){
                                    npError = false;
                                    obj.css('border-color','red');
                                }else{
                                    npError = true;
                                    obj.css('border-color','green');
                                }
                            });

                            $("#confirmpwd").bind("input propertychange",function(){
                                if(!npError){
                                    return false;
                                }
                                var obj = $(this);
                                var rnp = obj.val();
                                var np = $("#newpwd").val();
                                if(rnp != np){
                                    obj.css("border-color",'red');
                                    $("#rpError").text("密码不一致").css('color','red');
                                    rpError = false;
                                    return false;
                                }
                                if(rnp == np){
                                    obj.css('border-color','green');
                                    $("#rpError").text('');
                                    rpError = true;
                                }
                            });


                            //提交用户信息  修改密码
                            $("#subNotLoginFindPswResetPswBt").click(function(){
                                var tel = $("#mobile").val();
                                var np = $("#newpwd").val();
                                var rnp = $("#confirmpwd").val()
                                if(!rpError){
                                    return false;
                                }
                                $.ajax({
                                    type:"post",
                                    url:"{{url('home/reWriter')}}",
                                    data:{
                                        np:np,
                                        rnp:rnp,
                                        tel:tel
                                    },success:function(data){
                                        var da = JSON.parse(data);
                                        if(da.error==2){
                                            $(".item-step4").css('color','#0b73ec');
                                            $("#notLoginFindPswResetPswForm").css('display','none');
                                            $("#successDiv").css('display','block');
                                        }
                                    }
                                });

                            });

                        });
                    </script>



                    <div style="display: none;margin-left: 500px;" class="inputs ui-form-item-setting" id="successDiv">
                        <div style="width: 80px;height: 80px;border-radius: 50%;background-color:aquamarine;display: inline-block;">
                            <div style="width: 70px;height: 70px;border-radius: 50%;background-color:white;text-align: center;line-height:40px;">
                                <span style="color: green;font-size: 35px;text-align: center;line-height:35px;display: inline-block">✔</span>
                            </div>
                        </div>

                    </div>
                    <div class="inputs message-operation ui-form-item-setting btn-wrap" data-reactid=".0.0.2">
                        <a href="{{url('home/home')}}" class="j-btn result-btn j-btn-orange j-setting-btn " data-reactid=".0.0.2.$0">返回</a>
                    </div>

                </div>
            </div>


        </div>

    </div>
    <div class="j-dialog" style="display: none; width: 350px; z-index: 9999;">
        <header class="j-dialog-title-con" style="height: 0px;"><h1 class="j-dialog-title">

            </h1><span class="j-dialog-close-btn">×</span>
        </header>
        <div class="j-dialog-header" style="display: none;"></div>
        <div class="j-dialog-content">
            <div id="weixin-content" class="p20 text-center">
                <img src="/ps/static/common/static/img/weixin_rrd_5b83f9c.jpg" style="width:250px">
                <p>微信扫一扫，人人贷理财里动态全知道！</p>
            </div>
        </div>
        <div class="j-dialog-btn-con" style="display: none;">

        </div><div class="j-dialog-footer" style="display: none;"></div></div>
@stop