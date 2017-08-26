@extends('lay')
@section('content')
    <div class="main-content">
        <div id="uplan-product-detail" class="mt20">
            <div data-reactid=".0">
                <div id="wdg-detail-uplan-product" class="container_12_1080 color-white-bg" data-reactid=".0.0">
                    <ul class="ui-title fn-clear" data-reactid=".0.0.0">
                        <li class="fn-left" data-reactid=".0.0.0.0">
                        <span data-reactid=".0.0.0.0.0">优选计划20170803-1期</span></li>
                        <li class="fn-right" data-reactid=".0.0.0.1">
                            <span class='fu' data-reactid=".0.0.0.1.0.0"></span>//
                            <span class="wei" data-reactid=".0.0.0.1.0.1"></span>
                        </li>
                    </ul>
                    <div class="ui-product-info fn-clear" data-reactid=".0.0.1">
                        <div class="product-info-main  fn-left" data-reactid=".0.0.1.0">
                            <div data-reactid=".0.0.1.0.0">
                                <div class="product-info-invest fn-clear" data-reactid=".0.0.1.0.0.0">
                                    <ul class="invest-rate fn-left" data-reactid=".0.0.1.0.0.0.0">
                                        <li class="value" data-reactid=".0.0.1.0.0.0.0.0">
                                            <span data-reactid=".0.0.1.0.0.0.0.0.0">8.8</span>
                                            <i data-reactid=".0.0.1.0.0.0.0.0.1">%</i>
                                            <i class="extra-rate-plus" data-reactid=".0.0.1.0.0.0.0.0.2">+</i>
                                            <em class="extra-rate" data-reactid=".0.0.1.0.0.0.0.0.3">0.4</em>
                                            <i data-reactid=".0.0.1.0.0.0.0.0.4">%</i>
                                        </li>
                                        <li class="name" data-reactid=".0.0.1.0.0.0.0.1">
                                        <span data-reactid=".0.0.1.0.0.0.0.1.0">预期年化利率</span>
                                            <div class="we-tooltip" data-reactid=".0.0.1.0.0.0.0.1.1">
                                            <span data-reactid=".0.0.1.0.0.0.0.1.1.0">
                                            <span data-for="product-uplan-tooltip-01" data-place="right" data-tip="预期年化利率不代表实际利息收益" class="icon-we-tips" data-reactid=".0.0.1.0.0.0.0.1.1.0.0" currentitem="false"></span>
                                            <div class="__react_component_tooltip place-top type-dark " data-id="tooltip" data-reactid=".0.0.1.0.0.0.0.1.1.0.1"></div></span></div>
                                        </li>
                                    </ul>
                                    <ul class="invest-period fn-left" data-reactid=".0.0.1.0.0.0.1">
                                        <li class="value" data-reactid=".0.0.1.0.0.0.1.0">
                                            <span data-reactid=".0.0.1.0.0.0.1.0.0">12</span>
                                            <i data-reactid=".0.0.1.0.0.0.1.0.1">个月</i>
                                        </li>
                                        <li class="name" data-reactid=".0.0.1.0.0.0.1.1">投资期限</li>
                                    </ul>
                                    <ul class="invest-money fn-left" data-reactid=".0.0.1.0.0.0.2">
                                        <li class="preminum-head-tag" data-reactid=".0.0.1.0.0.0.2.0">到期后转入自由期，仍享9.2%</li>
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
                                                <span data-reactid=".0.0.1.0.0.1.0.1.1.0">10,000,000</span>
                                                <span data-reactid=".0.0.1.0.0.1.0.1.1.1">元</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uplan-product-info-status fn-left" data-reactid=".0.0.1.1">
                            <div class="uplan-product-info-status fn-left" data-reactid=".0.0.1.1.0">
                                <div class="uplan-product-info-status-form" data-reactid=".0.0.1.1.0.0">
                                    <div class="able-money" data-reactid=".0.0.1.1.0.0.0">
                                    <span data-reactid=".0.0.1.1.0.0.0.0">账户余额</span>
                                                 @if(Session::get('tel')!="")
                                                    <input type="hidden" class="tellone" value="{{Session::get('tel')}}">
                                                    <span class="xiguan" style="color:red"></span>
                                                    <span data-reactid=".0.0.1.1.0.0.2.1.1.1">元</span></span>
                                                @else
                                                    <a target="_self" href="{{url('home/home')}}">登录</a>
                                                    <span data-reactid=".0.0.1.1.0.0.0.2">后可见</span>
                                                @endif
                                                </div>
                                    <div class="uplan-input-group" data-reactid=".0.0.1.1.0.0.1">
                                        <div class="uplan-input-inner" data-reactid=".0.0.1.1.0.0.1.0"><input
                                                    type="text"
                                                    name="uplanJoin"
                                                    class="uplan-input mount"
                                                    placeholder="输入加入金额，为1,000元的整数倍"
                                                    value=""
                                                    maxlength="9"
                                                    data-reactid=".0.0.1.1.0.0.1.0.0"><span
                                                    class="unit" data-reactid=".0.0.1.1.0.0.1.0.1">元</span></div>
                                                    <span style="color:red"><strong class="money"></strong></span>
                                    </div>
                                    <ul class="fn-clear prop-box" data-reactid=".0.0.1.1.0.0.2">
                                        <li class="fn-left" data-reactid=".0.0.1.1.0.0.2.0"><span
                                                    data-reactid=".0.0.1.1.0.0.2.0.0">剩余金额</span>
                                                    <span class="pl5" data-reactid=".0.0.1.1.0.0.2.0.1">
                                                    <span data-reactid=".0.0.1.1.0.0.2.0.1.0">37,146,000</span>
                                                    <span data-reactid=".0.0.1.1.0.0.2.0.1.1">元</span></span>
                                        </li>
                                        <li class="fn-right prop-box-top-limit" data-reactid=".0.0.1.1.0.0.2.1">
                                            <span data-reactid=".0.0.1.1.0.0.2.1.0">加入上限</span>
                                            <span class="pl5" data-reactid=".0.0.1.1.0.0.2.1.1">
                                                <span data-reactid=".0.0.1.1.0.0.2.1.1.0">10,000,000</span>
                                                <span data-reactid=".0.0.1.1.0.0.2.1.1.1">元</span>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="uplan-btn j-btn-orange add" data-reactid=".0.0.1.1.0.0.3">加入</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<script>
/**
 * 更改计划介绍数据 
 */
    $(document).on("click",'.tab-nav li',function () {
        var _index = $(this).index();
        var _ul = $(".tab-nav");
        var _detail = $(".tab-panel");
        // 更改样式
        $(this).addClass('tab-nav-item-selected');
        $(this).siblings().removeClass('tab-nav-item-selected');
        // 更改显示数据
        _detail.children().eq(_index).show();
        _detail.children().eq(_index).siblings().hide();
    });
    var tellone = $(".tellone").val();
    $(".fu").html('<a href="http://www.finance.com/kimen/order">已支付订单</a>');
    $(".wei").html('<a href="http://www.finance.com/kimen/norder">未支付订单</a>');
    $.ajax({
        type: "GET",
        url: "http://www.finance.com/kimen/mount",
        data: {telephone:tellone},
        success: function(msg){
            localStorage.setItem("money",msg); //存储用户登录名称
            $(".xiguan").text(msg)
        }
    });
    $(document).on("click",'.add',function () {
        var mount=$(".mount").val();
        var xiguan=$(".xiguan").text();
            if(isNaN(mount)){
                var money = "输入的不是数字";
                $(".money").text(money);
                return false;
            }else if(mount==""){
                var money = "输入的值不能为空";
                $(".money").text(money);
                return false;
            }else{
                if(mount*1 % 1000===0){
                    if(mount<=xiguan){
                        var tellone = $(".tellone").val();
                        var money = "√";
                        $(".money").text(money);
                        localStorage.setItem("telephone",tellone); //存储用户登录名称
                        localStorage.setItem("mount",mount);    //存储当前用户投资金额
                        localStorage.setItem("you","优选计划")    //存储当前用户投资金额
                        window.location.href="/kimen/dingdan";   
                    }else{
                        var money = "投资金额不能大于您当前的余额";
                        $(".money").text(money);
                        return false;
                    }                                 
                }else{
                    var money = "输入的值不为1000的整数倍,请重新输入";
                    $(".money").text(money);
                    return false;
                }
            }
        
    });
</script>
<div id="wdg-detail-uplan-product-process" class="container_12_1080 color-white-bg mt20" data-reactid=".0.1">
    <ul class="ui-title fn-clear" data-reactid=".0.1.0">
        <li class="fn-left" data-reactid=".0.1.0.0">计划进度</li>
    </ul>
    <div class="premium-second-title" data-reactid=".0.1.1"><span
                data-reactid=".0.1.1.0">计划周期，</span><span
                data-reactid=".0.1.1.1">1</span><span data-reactid=".0.1.1.2">~</span><span
                data-reactid=".0.1.1.3">2</span><span data-reactid=".0.1.1.4">天起息</span></div>
    <div class="ui-detail-product-process" data-reactid=".0.1.2">
        <div class="ui-detail-product-process-info fn-clear" data-reactid=".0.1.2.0">
            <ul class="fn-left process-info-box-01" data-reactid=".0.1.2.0.0">
                <li class="ui-detail-product-process-info-desc" data-reactid=".0.1.2.0.0.0">开始加入</li>
                <li class="ui-detail-product-process-info-time" data-reactid=".0.1.2.0.0.1">08月03日
                    10:00
                </li>
                <li class="ui-detail-product-process-info-rect rect-left-blue"
                    data-reactid=".0.1.2.0.0.2"></li>
            </ul>
            <ul class="fn-left  process-info-box-02" data-reactid=".0.1.2.0.1">
                <li class="ui-detail-product-process-info-desc" data-reactid=".0.1.2.0.1.0">开始计息</li>
                <li class="ui-detail-product-process-info-time" data-reactid=".0.1.2.0.1.1">08月05日
                    10:00
                </li>
                <li class="ui-detail-product-process-info-rect rect-left-gray"
                    data-reactid=".0.1.2.0.1.2"></li>
            </ul>
            <ul class="fn-right  process-info-box-03" data-reactid=".0.1.2.0.2">
                <li class="ui-detail-product-process-info-desc" data-reactid=".0.1.2.0.2.0">转入自由期，随时可退
                </li>
                <li class="ui-detail-product-process-info-time" data-reactid=".0.1.2.0.2.1">
                    2018年08月05日
                </li>
                <li class="ui-detail-product-process-info-rect rect-right-gray"
                    data-reactid=".0.1.2.0.2.2"></li>
            </ul>
        </div>
        <div class="ui-detail-product-process-date fn-clear" data-reactid=".0.1.2.1">
            <div class="fn-left process-date-box-01 bg-blue" data-reactid=".0.1.2.1.0"><span
                        data-reactid=".0.1.2.1.0.0">1</span><span
                        data-reactid=".0.1.2.1.0.1">~</span><span
                        data-reactid=".0.1.2.1.0.2">2</span><span data-reactid=".0.1.2.1.0.3">天起息</span>
            </div>
            <div class="fn-right process-date-box-02 bg-gray" data-reactid=".0.1.2.1.1"><span
                        data-reactid=".0.1.2.1.1.0">12</span><span
                        data-reactid=".0.1.2.1.1.1">个月持续计息</span>
            </div>
        </div>
    </div>
    <div class="ui-premium-box" data-reactid=".0.1.3">
        <div class="ui-premium-box-item" data-reactid=".0.1.3.0">
            <div class="second-title pb20" data-reactid=".0.1.3.0.0"><span
                        data-reactid=".0.1.3.0.0.0">退出机制灵活，设</span><span
                        data-reactid=".0.1.3.0.0.1">2年</span><span
                        data-reactid=".0.1.3.0.0.2">自由期</span></div>
            <ul class="ul-plan-introduce" data-reactid=".0.1.3.0.1">
                <li class="bg-gray" data-reactid=".0.1.3.0.1.0"><span
                            data-reactid=".0.1.3.0.1.0.0">1、</span><span data-reactid=".0.1.3.0.1.0.1">12</span><span
                            data-reactid=".0.1.3.0.1.0.2">个月到期后，计划转入自由期。</span></li>
                <li data-reactid=".0.1.3.0.1.1">2、自由期内，可随时申请免费退出。</li>
                <li class="bg-gray" data-reactid=".0.1.3.0.1.2"><span data-reactid=".0.1.3.0.1.2.0">3、自由期内，预期年化利率</span><span
                            data-reactid=".0.1.3.0.1.2.1">9.2</span><span data-reactid=".0.1.3.0.1.2.2">%，按日计算收益。</span>
                </li>
                <li data-reactid=".0.1.3.0.1.3">4、自由期内，退出计划时可灵活选择退出金额。</li>
                <li class="bg-gray" data-reactid=".0.1.3.0.1.4"><span
                            data-reactid=".0.1.3.0.1.4.0">5、</span><span data-reactid=".0.1.3.0.1.4.1">2年</span><span
                            data-reactid=".0.1.3.0.1.4.2">自由期届满后，将自动退出计划。</span></li>
            </ul>
        </div>
        <div class="ui-premium-box-item pb30" data-reactid=".0.1.3.1">
            <div class="second-title pb10 pt30" data-reactid=".0.1.3.1.0">按日计算收益，预期收益逐年递增</div>
            <div class="third-title" data-reactid=".0.1.3.1.1">
                优选计划按日计算收益，每年滚动投资，预期收益逐年递增，以加入10,000元为例，预期收益如下：
            </div>
            <table class="income-table" data-reactid=".0.1.3.1.2">
                <tbody data-reactid=".0.1.3.1.2.0">
                <tr data-reactid=".0.1.3.1.2.0.0">
                    <th class="t-title" data-reactid=".0.1.3.1.2.0.0.0"><span
                                data-reactid=".0.1.3.1.2.0.0.0.0">期限</span>
                    </th>
                    <th class="t-title" data-reactid=".0.1.3.1.2.0.0.1"><span
                                data-reactid=".0.1.3.1.2.0.0.1.0">年预期收益</span>
                    </th>
                    <th class="t-title" data-reactid=".0.1.3.1.2.0.0.2"><span
                                data-reactid=".0.1.3.1.2.0.0.2.0">日预期收益</span>
                    </th>
                </tr>
                <tr data-reactid=".0.1.3.1.2.0.1">
                    <td class="t-desc" data-reactid=".0.1.3.1.2.0.1.0"><span
                                data-reactid=".0.1.3.1.2.0.1.0.0">12个月内</span>
                    </td>
                    <td class="color-orange-text" data-reactid=".0.1.3.1.2.0.1.1"><span
                                data-reactid=".0.1.3.1.2.0.1.1.0"><span
                                    data-reactid=".0.1.3.1.2.0.1.1.0.0">920</span><span
                                    data-reactid=".0.1.3.1.2.0.1.1.0.1">元</span></span></td>
                    <td class="color-orange-text" data-reactid=".0.1.3.1.2.0.1.2"><span
                                data-reactid=".0.1.3.1.2.0.1.2.0"><span
                                    data-reactid=".0.1.3.1.2.0.1.2.0.0"> </span><span
                                    data-reactid=".0.1.3.1.2.0.1.2.0.1">2.52</span><span
                                    data-reactid=".0.1.3.1.2.0.1.2.0.2">元</span></span></td>
                </tr>
                <tr data-reactid=".0.1.3.1.2.0.2">
                    <td class="t-desc" data-reactid=".0.1.3.1.2.0.2.0"><span
                                data-reactid=".0.1.3.1.2.0.2.0.0">自由期第1年</span>
                    </td>
                    <td class="color-orange-text" data-reactid=".0.1.3.1.2.0.2.1"><span
                                data-reactid=".0.1.3.1.2.0.2.1.0"><span
                                    data-reactid=".0.1.3.1.2.0.2.1.0.0">1004</span><span
                                    data-reactid=".0.1.3.1.2.0.2.1.0.1">元</span></span></td>
                    <td class="color-orange-text" data-reactid=".0.1.3.1.2.0.2.2"><span
                                data-reactid=".0.1.3.1.2.0.2.2.0"><span
                                    data-reactid=".0.1.3.1.2.0.2.2.0.0">2.75</span><span
                                    data-reactid=".0.1.3.1.2.0.2.2.0.1">元</span></span></td>
                </tr>
                <tr data-reactid=".0.1.3.1.2.0.3">
                    <td class="t-desc" data-reactid=".0.1.3.1.2.0.3.0"><span
                                data-reactid=".0.1.3.1.2.0.3.0.0">自由期第2年</span>
                    </td>
                    <td class="color-orange-text" data-reactid=".0.1.3.1.2.0.3.1"><span
                                data-reactid=".0.1.3.1.2.0.3.1.0"><span
                                    data-reactid=".0.1.3.1.2.0.3.1.0.0">1097</span><span
                                    data-reactid=".0.1.3.1.2.0.3.1.0.1">元</span></span></td>
                    <td class="color-orange-text" data-reactid=".0.1.3.1.2.0.3.2"><span
                                data-reactid=".0.1.3.1.2.0.3.2.0"><span
                                    data-reactid=".0.1.3.1.2.0.3.2.0.0">3.00</span><span
                                    data-reactid=".0.1.3.1.2.0.3.2.0.1">元</span></span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container_12_1080 color-white-bg mt20" id="uplan-product-tab" data-reactid=".0.2">
    <div id="" class="rui-tab " data-reactid=".0.2.0">
        <ul class="tab-nav fn-clear " data-reactid=".0.2.0.$/=10">
            <li class="tab-nav-item detail-tab-nav-item detail-tab-nav-item-3 tab-nav-item-selected" data-reactid=".0.2.0.$/=10.$nav-item-0/=10">
                <div class="tab-title" data-reactid=".0.2.0.$/=10.$nav-item-0/=10.0">计划介绍</div>
            </li>
            <li class="tab-nav-item detail-tab-nav-item detail-tab-nav-item-3" data-reactid=".0.2.0.$/=10.$nav-item-1/=11">
                <div class="tab-title" data-reactid=".0.2.0.$/=10.$nav-item-1/=11.0">加入记录</div>
            </li>
            <li class="tab-nav-item detail-tab-nav-item detail-tab-nav-item-3" data-reactid=".0.2.0.$/=10.$nav-item-2/=12">
                <div class="tab-title" data-reactid=".0.2.0.$/=10.$nav-item-2/=12.0">常见问题</div>
            </li>
        </ul>
        <div class="tab-panel " data-reactid=".0.2.0.$/=11">
            <div class="tab-panel-item uplan-detail-panel-item tab-panel-item-selected" data-reactid=".0.2.0.$/=11.$panel-item-0/=10">
                <div id="uplan-product-tab-intro" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0">
                    <div class="ui-uplan-intro" data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0">
                        <ul class="ui-uplan-intro-item fn-clear"
                            data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.0">
                            <li class=" item-name fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.0.0">名称
                            </li>
                            <li class="item-value fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.0.1">优选计划20170803-1期
                            </li>
                        </ul>
                        <ul class="ui-uplan-intro-item fn-clear  bg-gray"
                            data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.1">
                            <li class=" item-name fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.1.0">计划介绍
                            </li>
                            <li class="item-value fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.1.1">
                                优选计划是人人贷为您提供的本息自动循环出借，且一年锁定期到期后可享受两年自由期的投标工具，并由系统为您实现分散投标，更好的满足您风险分散的投资需求。该计划所对应的借款均100%适用于人人贷用户利益保障机制。自由期内，用户可随时免费申请退出，退出金额灵活可选，平台将在退出申请后第7日受理；锁定期内，用户可申请提前一次性退出，但平台将收取本金的2%作为提前退出费用。平台受理用户退出申请后，将通过债权转让的形式帮助用户实现资金退出，但平台不保证退出时效。预期收益不等于实际收益，出借人需自行承担资金出借的风险与责任；市场有风险，投资需谨慎。
                            </li>
                        </ul>
                        <ul class="ui-uplan-intro-item fn-clear"
                            data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.2">
                            <li class=" item-name fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.2.0">投资期限
                            </li>
                            <li class="item-value fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.2.1"><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.2.1.0">优选计划目前加入后</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.2.1.1">12</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.2.1.2">个月转入自由期，最长可持有</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.2.1.3">36</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.2.1.4">个月，自由期届满后自动退出。</span>
                            </li>
                        </ul>
                        <ul class="ui-uplan-intro-item fn-clear  bg-gray"
                            data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3">
                            <li class=" item-name fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.0">收益说明
                            </li>
                            <li class="item-value fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1"><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.0">预期年化利率</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.1">8.8+0.4%</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.2">，投资产生收益将计入下一年度收益计算基数，预期收益金额逐年递增。</span><br
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.3"><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.3.1.4">优选计划按日计算收益，申请退出资金中本金部分，收益将计算至实际退出日。未申请退出的资金将继续投资计息。</span>
                            </li>
                        </ul>
                        <ul class="ui-uplan-intro-item fn-clear"
                            data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4">
                            <li class=" item-name fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.0">退出方式
                            </li>
                            <li class="item-value fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.1"><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.1.0">1、</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.1.1">12</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.1.2">个月内，可操作提前退出，提前退出费用为加入本金的</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.1.3">2.0</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.1.4">%。</span><br
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.1.5"><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.1.6">2、转入自由期后，可随时申请退出，不收取退出费用。平台将在申请后第</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.1.7">7</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.4.1.8">日受理。 并通过债权转让自动完成退出，您所持债权转让完成的具体时间，视债权转让市场交易情况而定。</span>
                            </li>
                        </ul>
                        <ul class="ui-uplan-intro-item fn-clear  bg-gray"
                            data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.5">
                            <li class=" item-name fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.5.0">投资金额
                            </li>
                            <li class="item-value fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.5.1"><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.5.1.0">加入金额</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.5.1.1">1,000</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.5.1.2">元起，并以</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.5.1.3">1,000</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.5.1.4">元整数倍递增。每期优选计划个人加入上限为</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.5.1.5">10,000,000</span><span
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.5.1.6">元。</span>
                            </li>
                        </ul>
                        <ul class="ui-uplan-intro-item fn-clear"
                            data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6">
                            <li class=" item-name fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.0">费用说明
                            </li>
                            <li class="item-value fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1">
                                <dl data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0">
                                    <dd data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.0"><span
                                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.0.0">加入费用：</span><span
                                                class="em-orange"
                                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.0.1">0.0%</span>
                                    </dd>
                                    <dd data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.1"><span
                                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.1.0">管理费用：参见</span><a
                                                href="/financeplan/getDemoFinancePlanContract.action?financePlanId=14414"
                                                target="_blank"
                                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.1.1">《优选计划服务协议》</a>
                                    </dd>
                                    <dd data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.2"><span
                                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.2.0">自由期内退出费用：</span><span
                                                class="em-orange"
                                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.2.1">0.0%</span>
                                    </dd>
                                    <dd data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.3"><span
                                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.3.0">提前退出费用：加入金额 x </span><span
                                                class="em-orange"
                                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.3.1"><span
                                                    data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.3.1.0">2.0</span><span
                                                    data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.3.1.1">%</span></span><span
                                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.3.2">，详情参见</span><a
                                                href="/financeplan/getDemoFinancePlanContract.action?financePlanId=14414"
                                                target="_blank"
                                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.6.1.0.3.3">《优选计划服务协议》</a>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                        <ul class="ui-uplan-intro-item fn-clear  bg-gray"
                            data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.7">
                            <li class=" item-name fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.7.0">保障方式
                            </li>
                            <li class="item-value fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.7.1">100%用户利益保障机制
                            </li>
                        </ul>
                        <ul class="ui-uplan-intro-item fn-clear"
                            data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.8">
                            <li class=" item-name fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.8.0">服务协议
                            </li>
                            <li class="item-value fn-left"
                                data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.8.1"><a
                                        href="/financeplan/getDemoFinancePlanContract.action?financePlanId=14414"
                                        target="_blank"
                                        data-reactid=".0.2.0.$/=11.$panel-item-0/=10.0.0.8.1.0">【点击查看】</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                            <div class="tab-panel-item uplan-detail-panel-item"
                                 data-reactid=".0.2.0.$/=11.$panel-item-1/=11">
                                <div id="uplan-product-tab-join" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0">
                                    <div class="list-info" data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.0"><span
                                                data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.0.0">加入总人次</span><i
                                                data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.0.1">0</i><span
                                                data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.0.2">人，加入总金额</span><i
                                                data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.0.3">0</i><span
                                                data-reactid=".0.2.0.$/=11.$panel-item-1/=11.0.0.4">元</span></div>
                                </div>
                            </div>
                            <div class="tab-panel-item uplan-detail-panel-item"
                                 data-reactid=".0.2.0.$/=11.$panel-item-2/=12">
                                <div id="uplan-product-tab-question" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0">
                                    <div data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0">
                                        <ul class="ui-question-item"
                                            data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.0">
                                            <li class="question" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.0.0">
                                                Q1：优选计划的期限有多久？
                                            </li>
                                            <li class="question-answer"
                                                data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.0.1">
                                                <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.0.1.0">优选计划目前锁定期为</span><span
                                                        data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.0.1.1">12</span><span
                                                        data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.0.1.2">个月，锁定期后转入自由期，自由期长度</span><span
                                                        data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.0.1.3">2年</span><span
                                                        data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.0.1.4">，到期后自动退出。</span>
                                            </li>
                                        </ul>
                                        <ul class="ui-question-item"
                                            data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1">
                                            <li class="question" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.0">
                                                Q2：优选计划如何退出？
                                            </li>
                                            <li class="question-answer"
                                                data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.1">
                                                <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.1.0">12</span><span
                                                        data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.1.1.1">个月锁定期内，可在renrendai.com操作提前退出，提前退出费用=加入计划金额*2.0%； 转入自由期后可在renrendai.com和app端随时申请退出，退出免退出费用，退出金额可灵活选择。</span>
                                            </li>
                                        </ul>
                                        <ul class="ui-question-item"
                                            data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.2">
                                            <li class="question" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.2.0">
                                                Q3：申请退出后多久可完成退出？
                                            </li>
                                            <li class="question-answer"
                                                data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.2.1">
                                                <span data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.2.1.0">12</span><span
                                                        data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.2.1.1">个月锁定期内提前退出，平台将在申请当日进行债权转让处理；转入自由期后申请退出，平台将在申请后第</span><span
                                                        data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.2.1.2">7</span><span
                                                        data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.2.1.3">日进行债权转让处理。债权转让处理时间一般为1-3个工作日，成功退出后资金退回到个人账户余额。</span>
                                            </li>
                                        </ul>
                                        <ul class="ui-question-item"
                                            data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.3">
                                            <li class="question" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.3.0">
                                                Q4：优选计划的利息收益处理方式？
                                            </li>
                                            <li class="question-answer"
                                                data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.3.1">
                                                优选计划提供的投资所获利息收益的处理方式为收益再投资（即每笔借款利息自动再投资）。
                                            </li>
                                        </ul>
                                        <ul class="ui-question-item"
                                            data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.4">
                                            <li class="question" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.4.0">
                                                Q5：优选计划可以使用优惠券吗？
                                            </li>
                                            <li class="question-answer"
                                                data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.4.1">
                                                加入优选计划时，仅可使用现金券、抵扣券。当现金券、抵扣券券面注明支持优选计划投资时，此次投资可以使用该券。
                                            </li>
                                        </ul>
                                        <ul class="ui-question-item"
                                            data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.5">
                                            <li class="question" data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.5.0">
                                                Q6：优选计划可以续期吗？
                                            </li>
                                            <li class="question-answer"
                                                data-reactid=".0.2.0.$/=11.$panel-item-2/=12.0.0.5.1">
                                                目前优选计划暂不支持续期功能。
                                            </li>
                                        </ul>
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