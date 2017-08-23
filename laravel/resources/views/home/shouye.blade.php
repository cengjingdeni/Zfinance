@extends('lay')
@section('content')
<div class="main-content">


    <div class="carousel" >

        <div class="car-center">
            <div class="spot">

                <span class="active"></span>

                <span></span>

                <span></span>

            </div>
            <div class="data-show">


                <p class="desc">人人贷理财平台累计成交额超过</p>

                <div class="money">
                    <div class="money-cen">
                        <div class="money-l">
                            <div class="float">

                                <span>3</span>

                                <span>3</span>

                                <span>4</span>


                            </div>
                        </div>
                        <div class="money-r">亿元</div>
                    </div>
                </div>
                <a class="red" target="_blank" href="/pc/passport/index/register?registerSource=web_top&wpFromPos=topHeader">注册领 480 元红包</a>
                <p class="real-time">( 数据来源人人贷内部统计，实时更新 )</p>

            </div>
        </div>
        <ul>


            <li>
                <a href="https://www.renrendai.com/financeplan/listPlan!detailPlan.action?cmsParam=12" target="_blank"><img src="{{URL::asset('/')}}home/picture/0727yxjxpc2.jpg" alt="优选加息"/></a>
            </li>

            <li>
                <a href="https://www.renrendai.com/pc/uPlan.html" target="_blank"><img src="{{URL::asset('/')}}home/picture/xrkh0710pc.jpg" alt="夏日狂欢"/></a>
            </li>

            <li>
                <a href="https://www.renrendai.com/pc/event/casket/index" target="_blank"><img src="{{URL::asset('/')}}home/picture/pc-banner-719.jpg" alt="闯关夺宝"/></a>
            </li>

        </ul>
    </div>

    <div class="newbee">
        <div class="new-center">
            <ul>
                <li>
                    <a href="/pc/event/increasetrust/increasetrust#ping" target="_blank">
                        <img src="{{URL::asset('/')}}home/picture/newbee_1_c04c041.png"/>
                        <div class="label-box">
                            <em>银行存管</em>
                            <p class="label-desc">交易资金通过民生银行流转</br>避免挪用资金、卷款跑路</p>
                        </div>
                        <i></i>
                    </a>
                </li>
                <li>
                    <a href="/pc/event/increasetrust/increasetrust#blank" target="_blank">
                        <img src="{{URL::asset('/')}}home/picture/newbee_2_cd4f2a7.png"/>
                        <div class="label-box">
                            <em>利益保障</em>
                            <p class="label-desc">借款人资质经三重审核</br>用户利益保障机制，保证金超5.45亿</p>
                        </div>
                        <i></i>
                    </a>
                </li>
                <li>
                    <a href="/pc/home/platform/dataOverview" target="_blank">
                        <img src="{{URL::asset('/')}}home/picture/newbee_3_3d5c57e.png"/>
                        <div class="label-box">
                            <em>数据披露</em>
                            <p class="label-desc">累计投资人总数492,119</br>90天以上累计逾期率仅0.19%
                                <span class="icon-we-tip-info"></span>
                            <span class="tip-box">
                                <span class="triangle"></span>
                                截至统计时点，逾期90天以上（不含90天）的金额逾期率
                            </span>
                            </p>
                        </div>
                    </a>
                </li>
            </ul>

            <p class="header-data-tips">
                数据截止至2017年7月31日，来源于人人贷内部统计；以上信息均为renrendai.com平台信息
            </p>



            <div class="notice" name="">
                <div class="list">
                    <div class="notice-l">
                        <img src="{{URL::asset('/')}}home/picture/horn_e5fead8.png"/>
                        <p>
                            <span>关于交通银行、浦发银行、邮储银行、农业银行、中国银行、工商银行系统升级维护公告</span>
                            <em>2017-07-28</em>
                        </p>
                    </div>
                    <div class="notice-r hover">

                        <a class="tu" href="/pc/about/rrd/list/flag/pa/page/1" target="_blank">
                            <img src="{{URL::asset('/')}}home/picture/more_1_c39c4fa.png"/>
                        </a>
                        <a class="zi"href="/pc/about/rrd/list/flag/pa/page/1" target="_blank">查看更多</a>

                    </div>
                </div>
                <div class="info"></div>
            </div>

        </div>
    </div>

    <div class="novice">
        <div class="novice-top">
            <div class="no-top-l">
                <span>新手专区</span>
                <i></i>
                <em>新手投资 专享通道</em>
            </div>
            <div class="no-top-r hover">

                <a class="tu" href="/pc/newUser.html"><img src="{{URL::asset('/')}}home/picture/more_1_c39c4fa.png"/></a>
                <a class="zi" href="/pc/newUser.html">查看更多</a>

            </div>
        </div>
        <div class="novice-bot">
            <div class="reward">

                <a class="new-bee-img" href="/pc/passport/index/register?Source=web_top"><img src="{{URL::asset('/')}}home/picture/pc_sy_5.01.png"/></a>

            </div>
            <ul>
                <!---->
                <!--<li class="newbee-hover">-->
                <!--<a class="cover" href="https://www.renrendai.com/financeplan/13833" target="_blank">-->
                <!--<p class="time">-->
                <!--<span class="month"><img src="picture/time.png"/><em>1个月</em></span>-->
                <!--<img class="xian" src="picture/xian.png"/>-->
                <!--</p>-->
                <!--<p class="rate">-->
                <!--<span class="num"><i>9.6</i><em>%</em></span>-->
                <!--<span class="nian">预期年化利率</span>-->
                <!--<span class="new">新手专享 限量发布</span>-->

                <!--<span class="highest">最高可投6,000元</span>-->
                <!--</p>-->
                <!--<p class="name">-->
                <!--<span>U计划</span>-->
                <!--<i></i>-->
                <!---->
                <!--<em>立即加入</em>-->
                <!---->
                <!--</p>-->
                <!--</a>-->
                <!--</li>-->
                <!---->

                <li class="newbee-hover newbee-hover-single">
                    <a href="https://www.renrendai.com/pc/uplan/13833.html" target="_blank">
                        <div class="data">
                            <div class="percent">
                                <span class="rate">9.6<i>%</i></span>
                                <div class="text">预期年化利率</div>
                            </div>
                            <div class="limit">
                                <span>1个月</span>
                                <div class="text">投资期限</div>
                            </div>
                            <div class="money">
                                <span>6,000元</span>
                                <div class="text">最高可投</div>
                            </div>
                        </div>
                        <div class="badge">
                            <span class="new">新手专享 限量发布</span>
                        </div>
                        <div class="link">
                            <span>U计划</span>
                            <i></i>

                            <em>立即加入</em>

                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>


    <div class="fund-container premium-container salary">
        <div class="caption clearfix" style="padding-top: 35px;">
            <div class="l-title">
                <div>优选计划</div>
                <img src="{{URL::asset('/')}}home/picture/slice_1694fb4.png" />
                <span>越投越自由</span>
            </div>
        </div>
        <div class="plan clearfix">
            <div class="p-rate">
                <div>8.8<span class="percent">%</span><span class="increase-interest">+0.4%</span></div>
                <div class="b-text">预期年化利率</div>
            </div>
            <div class="p-month">
                <div class="t-text">12个月</div>
                <div class="b-text">期限</div>
            </div>
            <div class="p-title">
                <div class="p-title-text">到期后转入自由期，仍享9.2%</div>
            </div>
            <div class="p-join pt12">

                <a href="https://www.renrendai.com/pc/uplan/14414.html" target="_blank" onclick="return false">立即加入</a>


            </div>
        </div>
    </div>
    <div class="uplan">

        <div class="novice-top">
            <div class="no-top-l">
                <span>U计划</span>
                <i></i>
                <em>定期投资 分散投标</em>
            </div>
            <div class="no-top-r hover">

                <a class="tu" href="/pc/uPlan.html"><img src="{{URL::asset('/')}}home/picture/more_1_c39c4fa.png"/></a>
                <a class="zi" href="/pc/uPlan.html">查看更多</a>

            </div>
        </div>






        <div class="uplan-list-less">
            <ul>

                <li>
                    <a class="cover" href="https://www.renrendai.com/pc/uplan/14443.html" target="_blank">
                        <p class="time">
                            <span class="month"><img src="{{URL::asset('/')}}home/picture/time_53c7a37.png"/><em>1个月</em></span>
                            <img src="{{URL::asset('/')}}home/picture/uplan_xian_f5e9d9a.png" class="xian">
                        </p>
                        <p class="rate mtop">

                            <span class="num"><i class="fu">6.0</i><em>%</em></span>

                            <span class="nian">预期年化利率</span>

                            <span class="highest"></span>
                        </p>
                        <p class="name">


                            <em><i></i>查看详情</em>

                        </p>
                    </a>
                </li>

                <li>
                    <a class="cover" href="https://www.renrendai.com/pc/uplan/14444.html" target="_blank">
                        <p class="time">
                            <span class="month"><img src="{{URL::asset('/')}}home/picture/time_53c7a37.png"/><em>3个月</em></span>
                            <img src="{{URL::asset('/')}}home/picture/uplan_xian_f5e9d9a.png" class="xian">
                        </p>
                        <p class="rate mtop">

                            <span class="num"><i class="fu">6.6</i><em>%</em></span>

                            <span class="nian">预期年化利率</span>

                            <span class="highest"></span>
                        </p>
                        <p class="name">


                            <em><i></i>查看详情</em>

                        </p>
                    </a>
                </li>

                <li>
                    <a class="cover" href="https://www.renrendai.com/pc/uplan/14445.html" target="_blank">
                        <p class="time">
                            <span class="month"><img src="{{URL::asset('/')}}home/picture/time_53c7a37.png"/><em>6个月</em></span>
                            <img src="{{URL::asset('/')}}home/picture/uplan_xian_f5e9d9a.png" class="xian">
                        </p>
                        <p class="rate mtop">

                            <span class="num"><i class="fu">7.2</i><em>%</em></span>

                            <span class="nian">预期年化利率</span>

                            <span class="highest"></span>
                        </p>
                        <p class="name">


                            <em><i></i>查看详情</em>

                        </p>
                    </a>
                </li>

                <li>
                    <a class="cover" href="https://www.renrendai.com/pc/uplan/14446.html" target="_blank">
                        <p class="time">
                            <span class="month"><img src="{{URL::asset('/')}}home/picture/time_53c7a37.png"/><em>12个月</em></span>
                            <img src="{{URL::asset('/')}}home/picture/uplan_xian_f5e9d9a.png" class="xian">
                        </p>
                        <p class="rate mtop">

                            <span class="num"><i class="fu">8.8</i><em>%</em></span>

                            <span class="nian">预期年化利率</span>

                            <span class="highest"></span>
                        </p>
                        <p class="name">


                            <em ><i></i>立即加入</em>

                        </p>
                    </a>
                </li>

                <li>
                    <a class="cover" href="https://www.renrendai.com/pc/uplan/14447.html" target="_blank">
                        <p class="time">
                            <span class="month"><img src="{{URL::asset('/')}}home/picture/time_53c7a37.png"/><em>24个月</em></span>
                            <img src="{{URL::asset('/')}}home/picture/uplan_xian_f5e9d9a.png" class="xian">
                        </p>
                        <p class="rate mtop">

                            <span class="num"><i class="fu">9.8</i><em>%</em><i class="dan">+0.2</i><em>%</em></span>

                            <span class="nian">预期年化利率</span>

                            <span class="highest"></span>
                        </p>
                        <p class="name">


                            <em ><i></i>立即加入</em>

                        </p>
                    </a>
                </li>


            </ul>
        </div>



    </div>
    <div class="home-container">
        <div class="fund-container salary-container salary">
            <div class="caption clearfix">
                <div class="l-title">
                    <div>薪计划</div>
                    <img src="{{URL::asset('/')}}home/picture/slice_1694fb4_1.png" />
                    <span>每月定投 积少成多</span>
                </div>

                <a class="r-more" href="/pc/autoinvest.html">
                    <span class="more-link">查看更多</span>
                    <img class="more-bg" src="{{URL::asset('/')}}home/picture/more_1_c39c4fa.png" />
                </a>

            </div>
            <div class="plan clearfix">
                <div class="p-rate">
                    <div>8<span class="percent">%</span></div>
                    <div class="b-text">预期年化利率</div>
                </div>
                <div class="p-start">
                    <div class="t-text">每月500元</div>
                    <div class="b-text">投资起点</div>
                </div>
                <div class="p-month">
                    <div class="t-text">12个月</div>
                    <div class="b-text">投资期限</div>
                </div>
                <div class="p-day">
                    <div class="t-text">3日</div>
                    <div class="b-text">每月投资日</div>
                </div>
                <div class="p-join">

                    <a href="https://www.renrendai.com/pc/autoinvest/20557.html" target="_blank" onclick="return false">立即加入</a>

                    <div class="b-text">剩余名额:161人</div>
                </div>
            </div>
        </div>

        <a class="invite-friend" href="/pc/event/invitefriends/invitefriends" target="_blank" >
            <img src="{{URL::asset('/')}}home/picture/invite.png" alt="" />
        </a>

        <div class="fund-wrap regular-container debt-container">
            <div class="caption clearfix">
                <div class="l-title">
                    <div>散标/债权</div>
                    <img src="{{URL::asset('/')}}home/picture/slice_1694fb4_2.png" />
                    <span>自主投资 期限灵活</span>
                </div>

                <a class="r-more" href="/pc/loan.html">
                    <span class="more-link">查看更多</span>
                    <img class="more-bg" src="{{URL::asset('/')}}home/picture/more_1_c39c4fa.png" />
                </a>

            </div>
            <div class="table">
                <table class="t-caption">
                    <thead>
                    <tr>
                        <th class="rate regular-rate">年利率</th>
                        <th class="name">借款标题</th>
                        <th class="time">期限</th>
                        <th class="money">金额</th>
                        <th class="progress">募集进度</th>
                        <th class="action">操作</th>
                    </tr>
                    </thead>
                    <tbody class="data-list">

                    <tr class="even">
                        <td class="rate">9.60<span>%</span></td>
                        <td class="name">扩大生产/经营</td>
                        <td class="time">36个月</td>
                        <td class="money"><span>145,500.00</span>元</td>
                        <td class="progress" data-percent="100">
                            <div class="percentage-text">0%</div>
                            <div class="outer"><span class="inner"></span></div>
                        </td>
                        <td class="action">

                            <a class="disabled" href="https://www.renrendai.com/pc/loan/2241209.html" target="_blank" onclick="return false">还款中</a>

                        </td>
                    </tr>

                    <tr >
                        <td class="rate">9.60<span>%</span></td>
                        <td class="name">资金周转</td>
                        <td class="time">36个月</td>
                        <td class="money"><span>60,700.00</span>元</td>
                        <td class="progress" data-percent="100">
                            <div class="percentage-text">0%</div>
                            <div class="outer"><span class="inner"></span></div>
                        </td>
                        <td class="action">

                            <a class="disabled" href="https://www.renrendai.com/pc/loan/2241208.html" target="_blank" onclick="return false">还款中</a>

                        </td>
                    </tr>

                    <tr class="even">
                        <td class="rate">10.20<span>%</span></td>
                        <td class="name">扩大生产/经营</td>
                        <td class="time">36个月</td>
                        <td class="money"><span>147,500.00</span>元</td>
                        <td class="progress" data-percent="100">
                            <div class="percentage-text">0%</div>
                            <div class="outer"><span class="inner"></span></div>
                        </td>
                        <td class="action">

                            <a class="disabled" href="https://www.renrendai.com/pc/loan/2241207.html" target="_blank" onclick="return false">还款中</a>

                        </td>
                    </tr>

                    <tr >
                        <td class="rate">9.60<span>%</span></td>
                        <td class="name">装修</td>
                        <td class="time">36个月</td>
                        <td class="money"><span>145,500.00</span>元</td>
                        <td class="progress" data-percent="100">
                            <div class="percentage-text">0%</div>
                            <div class="outer"><span class="inner"></span></div>
                        </td>
                        <td class="action">

                            <a class="disabled" href="https://www.renrendai.com/pc/loan/2241206.html" target="_blank" onclick="return false">还款中</a>

                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
@stop
