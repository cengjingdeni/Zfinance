@extends('lay')
@section('content')
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/common_wdg_c1db688_2.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/common_nm_aa4d4d8_2.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/p2p_wdg_a6d1551.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/index_184b71b.css" />

    <div class="main-content">



        <div id="uplanIndex">
            <div class="wdg-index-banner">
                <div class="banner-box react-slick" id="banner-box">
                </div>
                <div class="uc-amount-box">
                    <p class="uc-amount">
                        10.0
                    </p>
                </div>
            </div>
            <div class="mt10 container_12_1080">
                <div class="uplan">



                    <div class="uplan-list-less">
                        <ul>
                            @foreach($data as $item=>$v)
                                <li>
                                    <a class="cover" href="{{url('uplan/detail')}}?productId={{$v->id}}" target="_blank">
                                        <p class="time">
                                            <span class="month"><img src="{{URL::asset('/')}}home/picture/time_53c7a37_1.png"/><em>{{$v->deadline}}个月</em></span>
                                            <img src="{{URL::asset('/')}}home/picture/uplan_xian_f5e9d9a_1.png" class="xian">
                                        </p>
                                        <p class="rate mtop">

                                            <span class="num"><i class="fu">{{sprintf("%.1f",($v->rate))}}</i><em>%</em></span>

                                            <span class="nian">预期年化利率</span>

                                            <span class="highest"></span>
                                        </p>
                                        <p class="name">


                                            <em><i></i>查看详情</em>

                                        </p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>



                </div>
                <div class="container_12_1080" id="uplan-index-cal">
                    <div class="ui-title fn-clear">
                        <div class="fn-left">投资计算器</div>
                        <div class="fn-right"></div>
                    </div>
                    <div class="color-white-bg ui-cal fn-clear">
                        <div class="fn-left cal-left">
                            <div class="u-input-group">
                                <input type="text" maxlength="8"   name="uplanAmount" id="uplanAmount" class="ui-input success-input" value="10000">
                                <p class="unit">元</p>
                                <label   class="ui-term-error error" id="uplanAmount-error-label" style="visibility: hidden;" for="uplanAmount">投资金额须为1000的整数倍且不能为空</label>

                            </div>
                            <div class="button-wrapper">
                                <input type="button" value="开始计算" class="ui-button-cal" id="calcbt">
                            </div>
                        </div>

                        <div class="fn-left cal-right fn-clear">
                            <ul class="fn-left cal-items border-left border-right">


                                <li class="item">
                                    <ul class="cal-result">
                                        <li class="title">1个月</li>
                                        <li class="result fn-clear">
                                            <div class="result-graph fn-left"><span class="cal-income" id="income1"></span></div>
                                            <div class="result-num fn-left" id="incomeV1"></div>
                                        </li>
                                    </ul>
                                </li>



                                <li class="item">
                                    <ul class="cal-result">
                                        <li class="title">3个月</li>
                                        <li class="result fn-clear">
                                            <div class="result-graph fn-left"><span class="cal-income" id="income3"></span></div>
                                            <div class="result-num fn-left" id="incomeV3"></div>
                                        </li>
                                    </ul>
                                </li>



                                <li class="item">
                                    <ul class="cal-result">
                                        <li class="title">6个月</li>
                                        <li class="result fn-clear">
                                            <div class="result-graph fn-left"><span class="cal-income" id="income6"></span></div>
                                            <div class="result-num fn-left" id="incomeV6"></div>
                                        </li>
                                    </ul>
                                </li>






                            </ul>

                            <ul class="fn-left cal-items">








                                <li class="item">
                                    <ul class="cal-result">
                                        <li class="title">12个月</li>
                                        <li class="result fn-clear">
                                            <div class="result-graph fn-left"><span class="cal-income" id="income12"></span></div>
                                            <div class="result-num fn-left" id="incomeV12"></div>
                                        </li>
                                    </ul>
                                </li>



                                <li class="item">
                                    <ul class="cal-result">
                                        <li class="title">24个月</li>
                                        <li class="result fn-clear">
                                            <div class="result-graph fn-left"><span class="cal-income" id="income24"></span></div>
                                            <div class="result-num fn-left" id="incomeV24"></div>
                                        </li>
                                    </ul>
                                </li>


                            </ul>

                        </div>

                    </div>

                </div>

                <div class="container_12_1080   " id="uplanIndexData">
                    <!--UA,UB,UC U计划投资数据-->
                    <div class="ui-title fn-clear">
                        <div class="fn-left ">U计划投资数据</div>
                        <div class="fn-right">数据来源人人贷内部统计,实时更新</div>
                    </div>
                    <div class="fn-clear ui-invest-dl-info color-white-bg">
                        <dl class="fn-left   text-center   border-right-gray">
                            <dd ><em class="number">316.6</em><em class="unit">亿元</em></dd>
                            <dt class="text">加入U计划</dt>

                        </dl>
                        <dl class="fn-left  text-center   border-right-gray">
                            <dd ><em class="number">19.6</em><em class="unit">亿元</em></dd>
                            <dt class="text">为用户赚取</dt>

                        </dl>
                        <dl class="fn-left text-center ">
                            <dd ><em class="number">171.4</em><em class="unit">万次</em></dd>
                            <dt class="text">加入总人次</dt>

                        </dl>
                    </div>
                </div>
                <div class="container_12_1080" id="uplanIndexList">
                </div>
            </div>
        </div>



    </div>
@stop
