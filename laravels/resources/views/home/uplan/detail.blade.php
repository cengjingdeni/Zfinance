@extends('lay')
@section('content')
<div class="main-content">


    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/uplan_wdg_a3071e5.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/detail_2861f98.css" />
    <style>
        /* 遮罩层 */
        #masks{
            position: absolute;             /*绝对定位*/
            background-color: #000;
            opacity: 0.20;                  /*透明度*/
            width: 2000px;
            height: 3000px;
            -moz-opacity:0.5;
            filter: alpha(opacity=20);      /*IE兼容性*/
            left: 0;
            top: 0;
            z-index: 6000;                /* 遮罩层（此值必须是最大的） */
        }
        /*  验证认证信息外部盒子 */
        #checks{
            position: fixed;            /*相对目前屏幕定位 -- 静止定位*/
            left: 20%;
            top: 20%;
            z-index: 6001;               /*效果为弹框在遮罩层之上（此值必须比遮罩层大）*/
            background-color: #fff;
            width: 750px;
            height: 270px;
        }

        #maskes{
            position: absolute;             /*绝对定位*/
            background-color: #000;
            opacity: 0.20;                  /*透明度*/
            width: 4000px;
            height: 3000px;
            -moz-opacity:0.5;
            filter: alpha(opacity=20);      /*IE兼容性*/
            left: 0;
            top: 0;
            z-index: 4000;                /* 遮罩层（此值必须是最大的） */
        }
        #checkes{
            position: fixed;            /*相对目前屏幕定位 -- 静止定位*/
            left: 20%;
            top: 20%;
            z-index: 4001;               /*效果为弹框在遮罩层之上（此值必须比遮罩层大）*/
            background-color: #fff;
            width: 750px;
            height: 270px;
        }


    </style>
    <div id="uplan-product-detail" class="mt20">
        <div data-reactid=".0">
            <div id="wdg-detail-uplan-product" class="container_12_1080 color-white-bg" data-reactid=".0.0">
                <ul class="ui-title fn-clear" data-reactid=".0.0.0">
                    <li class="fn-left" data-reactid=".0.0.0.0">
                        <span data-reactid=".0.0.0.0.0" title="{{$data->id}}" id="productId">{{$data->productName}}</span>
                        <span class="tag" data-reactid=".0.0.0.0.1"></span>
                    </li>
                    <li class="fn-right" data-reactid=".0.0.0.1">
                        <a href="/financeplan/getDemoFinancePlanContract.action?financePlanId=14727" target="_blank" data-reactid=".0.0.0.1.0">
                            <span data-reactid=".0.0.0.1.0.0">{{$data->productName}}</span>
                            <span data-reactid=".0.0.0.1.0.1">协议范本</span>
                        </a>
                    </li>
                </ul>
                <div class="ui-product-info fn-clear" data-reactid=".0.0.1">
                    <div class="product-info-main  fn-left" data-reactid=".0.0.1.0">
                        <div data-reactid=".0.0.1.0.0"><div class="product-info-invest fn-clear" data-reactid=".0.0.1.0.0.0">
                                <ul class="invest-rate fn-left" data-reactid=".0.0.1.0.0.0.0">
                                    <li class="value" data-reactid=".0.0.1.0.0.0.0.0">
                                        <span data-reactid=".0.0.1.0.0.0.0.0.0">{{sprintf('%.2f',$data->rate)}}</span>
                                        <i data-reactid=".0.0.1.0.0.0.0.0.1">%</i>
                                    </li>
                                    <li class="name" data-reactid=".0.0.1.0.0.0.0.1">
                                        <span data-reactid=".0.0.1.0.0.0.0.1.0">预期年化利率</span>
                                        <div class="we-tooltip" data-reactid=".0.0.1.0.0.0.0.1.1">
                                            <span data-reactid=".0.0.1.0.0.0.0.1.1.0">
                                                <span data-for="product-uplan-tooltip-01" data-place="right" data-tip="预期年化利率不代表实际利息收益" class="icon-we-tips" data-reactid=".0.0.1.0.0.0.0.1.1.0.0" currentitem="false"></span>
                                                <div class="__react_component_tooltip place-top type-dark " data-id="tooltip" data-reactid=".0.0.1.0.0.0.0.1.1.0.1"></div>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="invest-period fn-left" data-reactid=".0.0.1.0.0.0.1">
                                    <li class="value" data-reactid=".0.0.1.0.0.0.1.0">
                                        <span data-reactid=".0.0.1.0.0.0.1.0.0">{{$data->deadline}}</span>
                                        <i data-reactid=".0.0.1.0.0.0.1.0.1">个月</i>
                                    </li>
                                    <li class="name" data-reactid=".0.0.1.0.0.0.1.1">投资期限</li>
                                </ul>
                                <ul class="invest-money fn-left" data-reactid=".0.0.1.0.0.0.2">
                                    <li class="value" data-reactid=".0.0.1.0.0.0.2.0">
                                        <span data-reactid=".0.0.1.0.0.0.2.0.0">{{$data->productAmount}}</span>
                                        <i data-reactid=".0.0.1.0.0.0.2.0.1">元</i>
                                    </li>
                                    <li class="name" data-reactid=".0.0.1.0.0.0.2.1">计划金额</li>
                                </ul>
                            </div>
                            <div class="product-info-extra" data-reactid=".0.0.1.0.0.1">
                                <ul class="fn-clear" data-reactid=".0.0.1.0.0.1.0">
                                    <li class="fn-left" data-reactid=".0.0.1.0.0.1.0.0">
                                        <span data-reactid=".0.0.1.0.0.1.0.0.0">保障方式</span>
                                        <span class="extra-value" data-reactid=".0.0.1.0.0.1.0.0.1">
                                            <span data-reactid=".0.0.1.0.0.1.0.0.1.0">100%适用</span>
                                            <a target="_blank" href="https://www.renrendai.com/pc/about/rrdHelp/protection/cmsId/58eee27251c5a309752c2dea" data-reactid=".0.0.1.0.0.1.0.0.1.1">用户利益保障机制</a>
                                        </span>
                                    </li>
                                    <li class="fn-left" data-reactid=".0.0.1.0.0.1.0.1">
                                        <span data-reactid=".0.0.1.0.0.1.0.1.0">加入上限</span>
                                        <span class="extra-value" data-reactid=".0.0.1.0.0.1.0.1.1">
                                            <span data-reactid=".0.0.1.0.0.1.0.1.1.0">{{$data->investLimit}}</span>
                                            <span data-reactid=".0.0.1.0.0.1.0.1.1.1">元</span>
                                        </span>
                                    </li>
                                </ul>
                                <ul class="fn-clear" data-reactid=".0.0.1.0.0.1.1">
                                    <li class="fn-left" data-reactid=".0.0.1.0.0.1.1.0">
                                        <span data-reactid=".0.0.1.0.0.1.1.0.0">近七天加入</span>
                                        <span class="extra-value" data-reactid=".0.0.1.0.0.1.1.0.1">
                                            <span data-reactid=".0.0.1.0.0.1.1.0.1.0">24,504</span>
                                            <span data-reactid=".0.0.1.0.0.1.1.0.1.1">人</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="uplan-product-info-status fn-left" data-reactid=".0.0.1.1">
                        <div class="uplan-product-info-status fn-left" data-reactid=".0.0.1.1.0">
                            <div class="uplan-product-info-status-form" data-reactid=".0.0.1.1.0.0">
                                @if(Session::get('tel')!="")
                                <div class="able-money fn-clear"  data-reactid=".0.0.1.1.0.0.0">
                                    <span class="fn-left" data-reactid=".0.0.1.1.0.0.0.0">
                                        <span data-reactid=".0.0.1.1.0.0.0.0.0">账户余额</span>
                                        <em data-reactid=".0.0.1.1.0.0.0.0.1">@if(isset($user)){{sprintf("%.2f",$user->money)}}@endif</em>
                                        <span data-reactid=".0.0.1.1.0.0.0.0.2">元</span>
                                    </span>
                                    <a class="fn-right" target="_blank" href="/pc/user/trade/recharge" data-reactid=".0.0.1.1.0.0.0.1">充值</a>
                                </div>
                                @else

                                <div class="able-money" title="0" data-reactid=".0.0.1.1.0.0.0">
                                    <span data-reactid=".0.0.1.1.0.0.0.0">账户余额</span>
                                    <a href="{{url('home/home')}}" class="login-a" data-reactid=".0.0.1.1.0.0.0.1">登录</a>
                                    <span data-reactid=".0.0.1.1.0.0.0.2">后可见</span>
                                </div>
                                @endif



                                    {{--<div class="uplan-input-group error" data-reactid=".0.0.1.1.0.0.1">--}}
                                        {{--<div class="uplan-input-inner" data-reactid=".0.0.1.1.0.0.1.0">--}}
                                            {{--<input type="text" name="uplanJoin" class="uplan-input" placeholder="输入加入金额，为1,000元的整数倍" value="" maxlength="9" data-reactid=".0.0.1.1.0.0.1.0.0">--}}
                                            {{--<span class="unit" data-reactid=".0.0.1.1.0.0.1.0.1">元</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="error-message" data-reactid=".0.0.1.1.0.0.1.1">输入金额需为1,000元的整数倍</div>--}}
                                    {{--</div>--}}



                                <div class="uplan-input-group" data-reactid=".0.0.1.1.0.0.1">
                                    <div class="uplan-input-inner" data-reactid=".0.0.1.1.0.0.1.0">
                                        {{--onkeyup="value=value.replace(/\D/g,'')"--}}
                                        <input type="text"  name="uplanJoin" onkeyup="this.value=this.value.replace(/\D/g,'')" id="uplan-input" class="uplan-input" placeholder="输入加入金额，为1,000元的整数倍" value="" maxlength="9" data-reactid=".0.0.1.1.0.0.1.0.0">
                                        <span class="unit" data-reactid=".0.0.1.1.0.0.1.0.1">元</span>
                                    </div>

                                </div>
                                    <span id="sp"></span>
                                <ul class="fn-clear prop-box" data-reactid=".0.0.1.1.0.0.2">
                                    <li class="fn-left" data-reactid=".0.0.1.1.0.0.2.0">
                                        <span data-reactid=".0.0.1.1.0.0.2.0.0">剩余金额</span>
                                        <span class="pl5" data-reactid=".0.0.1.1.0.0.2.0.1">
                                            <span data-reactid=".0.0.1.1.0.0.2.0.1.0">{{$data->investSurplus}}</span>
                                            <span data-reactid=".0.0.1.1.0.0.2.0.1.1">元</span>
                                        </span></li><li class="fn-right prop-box-top-limit" data-reactid=".0.0.1.1.0.0.2.1">
                                        <span data-reactid=".0.0.1.1.0.0.2.1.0">加入上限</span>
                                        <span class="pl5" data-reactid=".0.0.1.1.0.0.2.1.1">
                                            <span data-reactid=".0.0.1.1.0.0.2.1.1.0">{{$data->investLimit}}</span>
                                            <span data-reactid=".0.0.1.1.0.0.2.1.1.1">元</span>
                                        </span>
                                    </li>
                                </ul>
                                <div class="uplan-btn j-btn-orange" id="uplan-btn" data-reactid=".0.0.1.1.0.0.3">加入</div>
                            </div>
                        </div>
                        {{--<script src="{{URL::asset('/')}}home/js/jquery.min.js"></script>--}}



                        {{--<div class="uplan-product-info-status" data-reactid=".0.0.1.1.0">--}}
                            {{--<div class="prop-small-box" data-reactid=".0.0.1.1.0.0"></div>--}}
                            {{--<div data-reactid=".0.0.1.1.0.1">--}}
                                {{--<ul class="prop-big-box-count-down" data-reactid=".0.0.1.1.0.1.0">--}}
                                    {{--<li class="prop-value" data-reactid=".0.0.1.1.0.1.0.0">17分26秒</li>--}}
                                    {{--<li class="prop-name" data-reactid=".0.0.1.1.0.1.0.1">开始加入</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="stamp-new" data-reactid=".0.0.1.1.0.2">--}}
                                {{--<img src="https://www.we.com/cms/5864b0d6a24d131067ef7956/uplan/stamp/WAIT.png" data-reactid=".0.0.1.1.0.2.0">--}}
                            {{--</div>--}}
                        {{--</div>--}}


                    </div>

                    <script src="{{URL::asset('/')}}home/js/jquery.min.js"></script>
                    <script type="text/javascript">
                        $(function(){
                            $('#uplan-input').bind('input propertychange', function(){
                                var obj = $(this);
                                var money = obj.val();
                                if(isNaN(money)==false && parseInt(money)%1000!=0){
                                    obj.parent().next().remove();
                                    obj.parent().parent().addClass("error");
                                    obj.parent().after('<div class="error-message" data-reactid=".0.0.1.1.0.0.1.1">输入金额需为1,000元的整数倍</div>');
                                    $("#uplan-btn").addClass("disable");
                                }else{
                                    obj.parent().next().remove();
                                    obj.parent().parent().removeClass("error");
                                    $("#uplan-btn").removeClass("disable");
                                }
                                if(money==""){
                                    obj.parent().next().remove();
                                    obj.parent().parent().addClass("error");
                                    $("#uplan-btn").removeClass("disable");
                                }

                            });

                            $("#uplan-btn").click(function(){
                                var id = $("#productId").attr("title");
                                var money = $("#uplan-input").val();
                                var mon = money.substr(0,1);
                                if(money==""){
                                    $("#uplan-input").parent().next().remove();
                                    $("#uplan-input").parent().after('<div class="error-message" data-reactid=".0.0.1.1.0.0.1.1">输入金额需为1,000元的整数倍</div>');
                                    $("#uplan-input").parent().parent().addClass("error");
                                    $(this).addClass("disable");
                                }

                                if(mon==0){
                                    $("#uplan-input").parent().next().remove();
                                    $("#uplan-input").parent().parent().addClass("error");
                                    $("#uplan-input").parent().after('<div class="error-message" data-reactid=".0.0.1.1.0.0.1.1">输入金额需为1,000元的整数倍</div>');
                                    $("#uplan-btn").addClass("disable");return
                                }
                                $.ajax({
                                    type:"post",
                                    url:"checkuser",
                                    data:{
                                        id:id,
                                        money:money
                                    },success:function(data){

                                        var da = JSON.parse(data);

                                        if(da.error==2){
                                            $("#uplan-input").parent().next().remove();
                                            $("#uplan-input").parent().after('<div class="error-message" data-reactid=".0.0.1.1.0.0.1.1">输入金额需为1,000元的整数倍</div>');
                                            $("#uplan-input").parent().parent().addClass("error");
                                        }else if(da.error==3){
                                             window.location.href="http://www.finance.com/home/home";
                                        }else if(da.error==4){
                                             $("#bigBox").show();
                                        }else if(da.error==6){
                                            $("#uplan-input").parent().next().remove();
                                            $("#uplan-input").parent().after('<div class="error-message" data-reactid=".0.0.1.1.0.0.1.1">超出投资上限 或 库存不足</div>');
                                            $("#uplan-input").parent().parent().addClass("error");
                                        }else if(da.error==5){
                                             var data = da.data;
                                             $(".r-dialog-container").show();
                                             var str ="";
                                            str+='<div class="r-dialog-portal">'+
                                                '<div class=" r-dialog-mask  r-dialog-mask  r-dialog-mask " id="" style="z-index:1000; position: absolute; left: 0; right: 0;"></div>'+
                                                '<div class="r-we-dialog product-uplan-dialog product-uplan-join-dialog r-dialog-wrap " style="width: 700px; z-index: 1001; left: 301.5px; top: 100.5px;">'+
                                                    '<span class="j-dialog-close-btn" id="j_dialogs">×</span>'+
                                                    '<header class="j-dialog-title-con">'+
                                                        '<h1 class="j-dialog-title">确认加入</h1>'+
                                                    '</header>'+
                                                    '<div class="j-dialog-content">'+
                                                        '<div class="product-uplan-body join-preminum-body">'+
                                                            '<form action="{{url('uplan/buy')}}" method="POST" class=" rui-form" id="product-uplan-join-form">'+
                                                            '<input type="hidden" name="_token" value="{{csrf_token()}}"/>'+
                                                                '<input type="hidden" name="productId" value="'+data.id+'" readonly="">'+
                                                                '<input type="hidden" name="rate" value="'+data.rate+'" readonly="">'+
                                                                '<input type="hidden" name="productName" value="'+data.productName+'" readonly="">'+
//                                                                '<input type="hidden" name="outtime" value="'+data.outtime+'" readonly="">'+
//                                                                    '<input type="hidden" name="productTypeId" value="'+data.productTypeId+'" readonly="">'+
                                                                        '<input type="hidden" name="orderAmount" value="'+data.addmoney+'" readonly="">'+
                                                                            '<input type="hidden" name="couponId" value="62759439" readonly="">'+
                                                                                '<input type="hidden" name="preminum" value="preminum" readonly="">'+
                                                                                    '<div class="info-item fn-clear">'+
                                                                                        '<span class="label">计划名称</span>'+
                                                                                        '<span class="value orange-highlight">'+data.productName+'</span>'+
                                                                                    '</div>'+
                                                                                        '<div class="info-item fn-clear">'+
                                                                                        '<span class="label">预期年化利率</span>'+
                                                                                        '<span class="value orange-highlight">'+data.rate+'%</span>'+
                                                                                    '</div>'+
                                                                                    '<div class="info-item fn-clear">'+
                                                                                        '<span class="label">加入金额</span>'+
                                                                                        '<span class="value orange-highlight">'+
                                                                                            '<span id="joinAmount">'+data.addmoney+'</span><span>元</span>'+
                                                                                        '</span>'+
                                                                                    '</div>'+
//                                                                                    '<div class="info-item fn-clear">'+
//                                                                                        '<span class="label">处理方式</span>'+
//                                                                                        '<span class="value orange-highlight">' +
//                                                                                            '<input name="ideal" type="radio"/>收益再投资' +
//                                                                                            '<input name="ideal" type="radio"/>到期提现' +
//                                                                                        '</span>'+
//                                                                                    '</div>'+
                                                                                    '<div class="info-item fn-clear">'+
                                                                                        '<span class="label">我的特权</span>'+
                                                                                        '<div class="value-width-3">'+
                                                                                            '<div class="Select rrd-we-select product-uplan-coupon-select has-value">'+
                                                                                                '<input type="hidden" value="62759439">'+
                                                                                                    '<div class="Select-control">'+
                                                                                                        '<div class="Select-placeholder">300.00元现金券/失效日期2017-11-09</div><div class="Select-input " tabindex="0">&nbsp;</div>'+
                                                                                                        '<span class="Select-arrow-zone">'+
                                                                                                            '<span class="Select-arrow"></span>'+
                                                                                                        '</span>'+
                                                                                                    '</div>'+
                                                                                            '</div>'+
                                                                                        '</div>'+
                                                                                    '</div>'+
                                                                                    '<div class="info-item fn-clear">'+
                                                                                        '<span class="label">应付金额</span>'+
                                                                                        '<span class="value w110">'+
                                                                                            '<em class="orange" id="oranges"><span>'+data.huibao+'</span><span>元</span></em>'+
                                                                                        '</span>'+

                                                                                    '</div>'+
                                                                                    '<div class="info-item fn-clear">'+
                                                                                        '<div class="uplan-agreement">'+
                                                                                            '<div>'+
                                                                                                '<span class="agreement-check-img icon-we-gouxuanicon"></span>'+
                                                                                                '<span class="agreement-desc">'+
                                                                                                '<input type="checkbox" id="du"/>'+
                                                                                                    '<span>我已阅读并同意签署</span>'+
                                                                                                    '<a href="https://www.renrendai.com/financeplan/getDemoFinancePlanContract.action?financePlanId=14788" target="_blank">'+
                                                                                                        '<span>《</span><span></span><span>协议》</span>'+
                                                                                                    '</a>'+
                                                                                                    '<input type="hidden" value="" id="hid">'+
                                                                                                        '<span>及</span>'+
                                                                                                        '<a href="https://www.renrendai.com/pc/agreement/contract/currency/cmsId/58ec7c0d090cc9096532d0ca" target="_blank">《风险提示》</a>'+
                                                                                                '</span>'+
                                                                                            '</div>'+
                                                                                        '</div>'+
                                                                                    '</div>'+
                                                                                    '<div class="error-msg"></div>'+
                                                                                    '<div class="ui-confirm-submit-box  mt10 text-center">'+
                                                                                    '<input class="j-btn  j-btn-super-big  uplan-btn j-btn-orange" value="加入" type="submit"/>'+
                                                                                    '</div>'+
                                                                                    '<div class="notice-con">'+
                                                                                        '<div class="notice-title">温馨提示</div>'+
                                                                                        '<ul class="notice-desc ">'+
                                                                                            '<li>'+
                                                                                                '<span>1.兑换优惠券，可点击以下链接</span>'+
                                                                                                '<a href="https://www.renrendai.com/pc/user/privilege#privilege-my-coupon">兑换优惠券</a>'+
                                                                                                '<span data-reactid=".1.1.2.0.0.e.1.0.2">。</span>'+
                                                                                            '</li>'+
                                                                                            '<li>2.预期年化利率不代表实际收益，投资需谨慎。</li>'+
                                                                                        '</ul>'+
                                                                                    '</div>'+
                                                            '</form>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>';
                                            $(".r-dialog-container").html(str);
                                        }else{
                                            $("#uplan-input").parent().next().remove();
                                            $("#uplan-input").parent().after('<div class="error-message" data-reactid=".0.0.1.1.0.0.1.1">未知错误110!</div>');
                                            $("#uplan-input").parent().parent().addClass("error");
                                        }
                                    }

                                });
                            });

                            //将遮罩层“X”掉  j-dialog-close-btn
                            $(document).on('click','.j-dialog-close-btn',function(){
                                $("#bigBox").hide();
                            });
                            //将遮罩层“关闭”
                            $(document).on('click','.we-status-common-button',function(){
                                $("#bigBox").hide();
                            });

                            $(document).on('click','#j_dialogs',function(){
                                $(".r-dialog-container").hide();
                            });

                        });

                    </script>


                </div>
            </div>



            {{--实名认证遮罩层--}}
            <div id="bigBox" style="display: none;">
                <!--  遮罩层  -->
                <div id="masks" class="masks">
                </div>
                <!--  遮罩层内认证数据 开始   -->
                <div class="r-we-dialog r-we-status-dialog r-dialog-wrap" id="checks">
                    <div id="z-content">
                        <span class="j-dialog-close-btn">×</span>
                        <div class="j-dialog-content">
                            <div class="we-status-body">
                                <div class="we-status-content">
                                    <div class="status-icon ">
                                        <div class="icon-we-failed"></div>
                                    </div>
                                    <div class="status-info">
                                        <span> </span>
                    <span>
                        <span>尚未完成实名认证、交易密码设置，请前往</span>
                        <a href="{{url('personCenter/realName')}}" target="_blank" >安全信息</a>
                        <span>进行认证。</span>
                    </span>
                                    </div>
                                </div>
                                <div class="we-status-common-button-box">
                                    <div class="we-status-common-button">关闭</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!--  订单遮罩层 start  -->
            <div class="r-dialog-container" style="display:none;">

            </div>
            <!--  订单遮罩层 start  -->



            <div id="wdg-detail-uplan-product-process" class="container_12_1080 color-white-bg mt20" data-reactid=".0.1">
                <ul class="ui-title fn-clear" data-reactid=".0.1.0">
                    <li class="fn-left" data-reactid=".0.1.0.0">计划进度</li>
                    <a class="fn-right" href="https://www.renrendai.com/pc/about/rrdHelp/topic/p/investment/fn/58732de5b436c50e334983c1" target="_blank" data-reactid=".0.1.0.1">如何加入U计划</a>
                </ul>
                <div class="ui-detail-product-process" data-reactid=".0.1.2">
                    <div class="ui-detail-product-process-info fn-clear" data-reactid=".0.1.2.0">
                        <ul class="fn-left process-info-box-01" data-reactid=".0.1.2.0.0">
                            <li class="ui-detail-product-process-info-desc" data-reactid=".0.1.2.0.0.0">开始加入</li>
                            <li class="ui-detail-product-process-info-time" data-reactid=".0.1.2.0.0.1">{{date("m",$data->investTime)}}月{{date("d",$data->investTime)}}日&nbsp;&nbsp;{{date("H:i",$data->investTime)}}</li>
                            <li class="ui-detail-product-process-info-rect rect-left-gray" data-reactid=".0.1.2.0.0.2"></li>
                        </ul>
                        <ul class="fn-left  process-info-box-02" data-reactid=".0.1.2.0.1">
                            <li class="ui-detail-product-process-info-desc" data-reactid=".0.1.2.0.1.0">进入锁定期</li>
                            <li class="ui-detail-product-process-info-time" data-reactid=".0.1.2.0.1.1">{{date("m",($data->investTime+2*24*3600))}}月{{date("d",($data->investTime+2*24*3600))}}日&nbsp;&nbsp;{{date("H:i",($data->investTime+2*24*3600))}}</li>
                            <li class="ui-detail-product-process-info-rect rect-left-gray" data-reactid=".0.1.2.0.1.2"></li>
                        </ul>
                        <ul class="fn-right  process-info-box-03" data-reactid=".0.1.2.0.2">
                            <li class="ui-detail-product-process-info-desc" data-reactid=".0.1.2.0.2.0">到期退出</li>
                            <li class="ui-detail-product-process-info-time" data-reactid=".0.1.2.0.2.1">{{date("Y",$data->outtime)}}年{{date("m",$data->outtime)}}月{{date("d",$data->outtime)}}日 {{date("H:i",($data->outtime+3600*10))}}</li>
                            <li class="ui-detail-product-process-info-rect rect-right-gray" data-reactid=".0.1.2.0.2.2"></li>
                        </ul>
                    </div>
                    <div class="ui-detail-product-process-date fn-clear" data-reactid=".0.1.2.1">
                        <div class="fn-left process-date-box-01 bg-gray" data-reactid=".0.1.2.1.0">
                            <span data-reactid=".0.1.2.1.0.0">1</span>
                            <span data-reactid=".0.1.2.1.0.1">~</span><span data-reactid=".0.1.2.1.0.2">2</span>
                            <span data-reactid=".0.1.2.1.0.3">天起息</span>
                        </div>
                        <div class="fn-right process-date-box-02 bg-gray" data-reactid=".0.1.2.1.1">
                            <span data-reactid=".0.1.2.1.1.0">1</span><span data-reactid=".0.1.2.1.1.1">个月持续计息</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container_12_1080 color-white-bg mt20" id="uplan-product-tab" data-reactid=".0.2">
                <div id="" class="rui-tab " data-reactid=".0.2.0"><ul class="tab-nav fn-clear " data-reactid=".0.2.0.$/=10">
                        <li class="tab-nav-item detail-tab-nav-item detail-tab-nav-item-4 tab-nav-item-selected" data-reactid=".0.2.0.$/=10.$nav-item-0/=10">
                            <div class="tab-title" data-reactid=".0.2.0.$/=10.$nav-item-0/=10.0">计划介绍</div>
                        </li>
                        <li class="tab-nav-item detail-tab-nav-item detail-tab-nav-item-4" data-reactid=".0.2.0.$/=10.$nav-item-1/=11">
                            <div class="tab-title" data-reactid=".0.2.0.$/=10.$nav-item-1/=11.0">加入记录</div>
                        </li>
                        <li class="tab-nav-item detail-tab-nav-item detail-tab-nav-item-4" data-reactid=".0.2.0.$/=10.$nav-item-2/=12">
                            <div class="tab-title" data-reactid=".0.2.0.$/=10.$nav-item-2/=12.0">计划表现</div>
                        </li>
                        <li class="tab-nav-item detail-tab-nav-item detail-tab-nav-item-4" data-reactid=".0.2.0.$/=10.$nav-item-3/=13">
                            <div class="tab-title" data-reactid=".0.2.0.$/=10.$nav-item-3/=13.0">常见问题</div>
                        </li>
                    </ul>
                    <div class="tab-panel " data-reactid=".0.2.0.$/=11">
                        <div class="tab-panel-item uplan-detail-panel-item tab-panel-item-selected" data-reactid=".0.2.0.$/=11.$panel-item-0/=10">
                            <div id="uplan-product-tab-intro" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0">
                                <div class="ui-uplan-intro pd20" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0">
                                    <ul class="ui-uplan-intro-item fn-clear" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.0">
                                        <li class=" item-name fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.0.0">名称</li>
                                        <li class="item-value fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.0.1">{{$data->productName}}</li>
                                    </ul>
                                    <ul class="ui-uplan-intro-item fn-clear bg-gray" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.1">
                                        <li class=" item-name fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.1.0">计划介绍</li>
                                        <li class="item-value fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.1.1">{{$data->content}}</li>
                                    </ul>
                                    <ul class="ui-uplan-intro-item fn-clear" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.2">
                                        <li class=" item-name fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.2.0">投标范围</li>
                                        <li class="item-value fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.2.1">{{$data->tender}}</li>
                                    </ul>
                                    <ul class="ui-uplan-intro-item fn-clear bg-gray" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3">
                                        <li class=" item-name fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.0">
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.0.0">利息收益处理方式</span>
                                            <br data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.0.1">
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.0.2">及预期年化利率</span>
                                        </li>
                                        <li class="item-value fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1">
                                            <dl data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.0">
                                                <dd data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.0.0">
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.0.0.0">1.收益再投资 </span>
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.0.0.1">6.00</span>
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.0.0.2">%</span>
                                                </dd>
                                                <dd data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.0.1">
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.0.1.0">2.提取至账户 </span>
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.0.1.1">6.00</span>
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.0.1.2">%</span>
                                                </dd>
                                                <dd data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.0.2">
                                                    <span class="em-red" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.0.2.0">*</span>
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.0.2.1">一经选择，无法修改。</span>
                                                </dd>
                                            </dl>
                                        </li>
                                    </ul>
                                    <ul class="ui-uplan-intro-item fn-clear" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4">
                                        <li class=" item-name fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.0">锁定期</li>
                                        <li class="item-value fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.1">
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.1.0">{{$data->deadline}}</span>
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.1.1">个月</span>
                                        </li>
                                    </ul>
                                    <ul class="ui-uplan-intro-item fn-clear bg-gray" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.5">
                                        <li class=" item-name fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.5.0">退出日期</li>
                                        <li class="item-value fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.5.1">{{date("Y",$data->outtime)}}年{{date("m",$data->outtime)}}月{{date("d",$data->outtime)}}日</li>
                                    </ul>
                                    <ul class="ui-uplan-intro-item fn-clear" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6">
                                        <li class=" item-name fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.0">加入条件</li>
                                        <li class="item-value fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1">
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0">加入金额</span>
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.1">{{$data->littleMoney}}</span>
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.2">元起，且为</span>
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.3">{{$data->littleMoney}}</span>
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.4">元的整数倍递增。</span>
                                        </li>
                                    </ul>
                                    <ul class="ui-uplan-intro-item fn-clear bg-gray" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.7">
                                        <li class=" item-name fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.7.0">加入上限</li>
                                        <li class="item-value fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.7.1">
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.7.1.0">{{$data->investLimit}}</span>
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.7.1.1">元</span>
                                        </li>
                                    </ul>
                                    <ul class="ui-uplan-intro-item fn-clear" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.8">
                                        <li class=" item-name fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.8.0">开始加入时间</li>
                                        <li class="item-value fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.8.1">{{date("Y",$data->investTime)}}年{{date("m",$data->investTime)}}月{{date("d",$data->investTime)}}日 {{date("H:i")}}</li>
                                    </ul>
                                    <ul class="ui-uplan-intro-item fn-clear bg-gray" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.9">
                                        <li class=" item-name fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.9.0">到期退出方式</li>
                                        <li class="item-value fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.9.1">{{$data->outTypeTime}}</li>
                                    </ul>
                                    <ul class="ui-uplan-intro-item fn-clear" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.a">
                                        <li class=" item-name fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.a.0">提前退出方式</li>
                                        <li class="item-value fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.a.1">
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.a.1.0">
                                                <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.a.1.0.0">锁定期内支持提前退出，详情参见</span>
                                                <a href="/financeplan/getDemoFinancePlanContract.action?financePlanId=14727" target="_blank" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.a.1.0.1">《U计划服务协议》</a>
                                                <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.a.1.0.2"> </span>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="ui-uplan-intro-item fn-clear bg-gray" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b">
                                        <li class=" item-name fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.0">费用</li>
                                        <li class="item-value fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1">
                                            <dl data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0">
                                                <dd data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.0">
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.0.0">加入费用：</span>
                                                    <span class="em-orange" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.0.1">0.0%</span>
                                                </dd>
                                                <dd data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.1">
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.1.0">管理费用：参见</span>
                                                    <a href="/financeplan/getDemoFinancePlanContract.action?financePlanId=14727" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.1.1">《U计划服务协议》</a>
                                                </dd>
                                                <dd data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.2">
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.2.0">退出费用：</span>
                                                    <span class="em-orange" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.2.1">0.0%</span>
                                                </dd>
                                                <dd data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.3">
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.3.0">提前退出费用：加入金额 x </span>
                                                    <span class="em-orange" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.3.1">
                                                        <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.3.1.0">2.0</span>
                                                        <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.3.1.1">%</span>
                                                    </span>
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.3.2">，详情参见</span>
                                                    <a href="/financeplan/getDemoFinancePlanContract.action?financePlanId=14727" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.b.1.0.3.3">《U计划服务协议》</a>
                                                </dd>
                                            </dl>
                                        </li>
                                    </ul>
                                    <ul class="ui-uplan-intro-item fn-clear" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.c">
                                        <li class=" item-name fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.c.0">保障方式</li>
                                        <li class="item-value fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.c.1">{{$data->guarantee}}</li>
                                    </ul>
                                    <ul class="ui-uplan-intro-item fn-clear bg-gray" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.d">
                                        <li class=" item-name fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.d.0">服务协议</li>
                                        <li class="item-value fn-left" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.d.1">
                                            <a href="/financeplan/getDemoFinancePlanContract.action?financePlanId=14727" target="_blank" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.d.1.0">【点击查看】</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-panel-item uplan-detail-panel-item" data-reactid=".0.2.0.$/=11.$panel-item-1/=11">
                            <div id="uplan-product-tab-join" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0">
                                <div class="list-info" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.0">
                                    <span data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.0.0">加入总人次</span>
                                    <i data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.0.1">0</i>
                                    <span data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.0.2">人，加入总金额</span>
                                    <i data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.0.3">0</i>
                                    <span data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.0.4">元</span>
                                </div>
                                <div id="uplan-product-tab-join-list" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1">
                                    <div class="ui-list" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0">
                                        <div class="ui-list-group" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0">
                                            <div class="ui-list-head" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.0">
                                                <ul class=" fn-clear" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.0.0">
                                                    <li class="order-li fn-left" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.0.0.0">
                                                        <span class="order-span" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.0.0.0.0">序号</span>
                                                    </li>
                                                    <li class="invester-li fn-left" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.0.0.1">
                                                        <span class="invester-span" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.0.0.1.0">投资人</span>
                                                    </li>
                                                    <li class="amount-li fn-left" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.0.0.2">
                                                        <span class="amount-span" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.0.0.2.0">加入金额</span>
                                                    </li>
                                                    <li class="source-li fn-left" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.0.0.3">
                                                        <span class="source-span" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.0.0.3.0">来源</span>
                                                    </li>
                                                    <li class="join-time-li fn-left" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.0.0.4">
                                                        <span class="join-time-span" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.0.0.4.0">加入时间</span>
                                                    </li>
                                                </ul>
                                            </div>
                                                <div class="ui-list-row" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1">
                                                    <ul class="ui-list-row fn-clear" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1.0">
                                                        <li class="order-li fn-left" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1.0.0">
                                                            <span class="order-span" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1.0.0.0">2</span>
                                                        </li>
                                                        <li class="invester-li fn-left" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1.0.1">
                                                            <span class="invester-span" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1.0.1.0">x***n</span>
                                                        </li>
                                                        <li class="amount-li fn-left" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1.0.2">
                                                            <span class="amount-span" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1.0.2.0">
                                                                <span data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1.0.2.0.0">5,000</span>
                                                                <span data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1.0.2.0.1">元</span>
                                                            </span>
                                                        </li>
                                                        <li class="source-li fn-left" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1.0.3">
                                                            <span class="source-span" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1.0.3.0">
                                                                <i class="icon-we-shoujiicon" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1.0.3.0.0"></i>
                                                            </span>
                                                        </li>
                                                        <li class="join-time-li fn-left" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1.0.4">
                                                            <span class="join-time-span" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1:$1.0.4.0">2017年08月15日 10:18</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            <div class="list-no-data-text" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.0.1">暂无加入记录</div>
                                        </div>
                                        <div class="list-loading hide" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.1.0.3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-panel-item uplan-detail-panel-item" data-reactid=".0.2.0.$/=11.$panel-item-2/=12">
                            <div id="ui-product-detail-tab-performance" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0">
                                <div data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0">
                                    <div class="performance-publish-time" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.0">
                                        <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.0.0">发布时间：</span>
                                        <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.0.1">2017年08月15日</span>
                                    </div>
                                    <div class="performance-data-result" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1">
                                        <div class="ui-performance-data-items fn-clear" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0">
                                            <ul class="ui-performance-data-item w230 fn-left" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.0">
                                                <li class="item-name" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.0.0">加入人数</li>
                                                <li class="item-value " data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.0.1">
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.0.1.0">0</span>
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.0.1.1">位</span>
                                                </li>
                                            </ul>
                                            <ul class="ui-performance-data-item w260 fn-left" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.1">
                                                <li class="item-name text-center" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.1.0">自动投标</li>
                                                <li class="item-value text-center" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.1.1">
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.1.1.0">0</span>
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.1.1.1">次</span>
                                                </li>
                                            </ul>
                                            <ul class="ui-performance-data-item w260 fn-left" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.2">
                                                <li class="item-name text-center" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.2.0">帮助借款用户</li>
                                                <li class="item-value text-center" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.2.1">
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.2.1.0">0</span>
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.2.1.1">位</span>
                                                </li>
                                            </ul>
                                            <ul class="ui-performance-data-item w230 fn-left" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.3">
                                                <li class="item-name pl70" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.3.0">为用户赚取</li>
                                                <li class="item-value pl70" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.3.1">
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.3.1.0">0.00</span>
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0.3.1.1">元</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ui-performance-data-items fn-clear borderTop" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.1">
                                            <ul class="ui-performance-data-item w230 fn-left" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.1.0">
                                                <li class="item-name " data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.1.0.0">计划金额</li>
                                                <li class="item-value " data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.1.0.1">
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.1.0.1.0">1,000,000</span>
                                                    <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.1.0.1.1">元</span>
                                                </li>
                                            </ul>
                                            <ul class="ui-performance-data-item w260 fn-left" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.1.1">
                                                <li class="item-name text-center" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.1.1.0">满额用时</li>
                                                <li class="item-value text-center" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.1.1.1">--</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="loan-area" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-panel-item uplan-detail-panel-item" data-reactid=".0.2.0.$/=11.$panel-item-3/=13">
                            <div id="uplan-product-tab-question" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0">
                                <div data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0">
                                    <ul class="ui-question-item" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.0">
                                        <li class="question" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.0.0">Q1：U计划安全吗？</li>
                                        <li class="question-answer" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.0.1">人人贷以严谨负责的态度对每笔借款进行严格筛选。同时，U计划所对应借款100%适用用户利益保障机制。</li>
                                    </ul>
                                    <ul class="ui-question-item" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.1">
                                        <li class="question" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.1.0">Q2：U计划发布时间？</li>
                                        <li class="question-answer" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.1.1"> 自2016年11月25日起，工作日、周末、节假日U计划系列发布时间统一为每日上午10:00，其他时间会根据用户投资情况随机发布U计划，请随时关注官网及APP灵活安排您的投资时间。</li>
                                    </ul>
                                    <ul class="ui-question-item" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.2">
                                        <li class="question" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.2.0">Q3：U计划预期利率有多少？</li>
                                        <li class="question-answer" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.2.1">U计划主要有5种， U计划A锁定期3个月，U计划B锁定期6个月，U计划C类别有3种不同长度锁定期，不同锁定期长度的U计划预期年化利率不同，具体以当期U计划公布的预期年化利率为准。</li>
                                    </ul>
                                    <ul class="ui-question-item" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.3">
                                        <li class="question" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.3.0">Q4：U计划收益处理方式是什么？</li>
                                        <li class="question-answer" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.3.1">
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.3.1.0"> U计划提供以下两种出借所获利息收益处理方式：再出借，或由用户自行支配。用户在加入U计划时可进行选择，暂不支持中途修改。</span>
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.3.1.2"> </span>
                                            <br data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.3.1.3">
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.3.1.4">另外，在U计划退出后，债权转让所得资金及借款回款本息将返回至用户的民生银行存管账户，供用户自行支配。</span>
                                        </li>
                                    </ul>
                                    <ul class="ui-question-item" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.4">
                                        <li class="question" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.4.0">Q5：锁定期是什么？</li>
                                        <li class="question-answer" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.4.1">U计划有锁定期限制，锁定期内，您可操作提前退出，但会产生相应费用，提前退出费用=加入计划金额*2.0%。锁定期满后自动退出U计划，系统通过转让届时U计划所投债权标的实现您投资资金的回收。</li>
                                    </ul>
                                    <ul class="ui-question-item" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.5">
                                        <li class="question" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.5.0">Q6：U计划到期后，我如何退出并实现收益？</li>
                                        <li class="question-answer" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.5.1">
                                            <span data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.5.1.0">U计划到期当日，系统将自动通过债权转让为您收回出借本金，转让完成时间一般为1~3个工作日。</span>
                                        </li>
                                    </ul>
                                    <div class="prompt-info" data-reactid=".0.2.0.$/=11.$panel-item-3/=13.0.0.6">renrendai.com平台仅为信息发布平台，未以任何明示或暗示的方式对出借人提供担保或承诺保本保息，出借人应根据自身的投资偏好和风险承受能力进行独立判断和作出决策，并自行承担资金出借的风险与责任。市场有风险，投资需谨慎。</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@stop