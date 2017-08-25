@extends('lay')
@section('content')

    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/common_wdg_c1db688.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/common_nm_aa4d4d8.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/open_bd305c6.css" />
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





            <div id="cmbc-open">
                <div class="content">
                    <div class="setting-section-title">开通民生存管</div>
                    <div class="cmbc-tips">
                        <img src="/ps/static/user/page/setting/cmbc/open/assets/cmbc-tips_11cd734.png" alt="温馨提示">温馨提示：个人账户升级为民生存管账户，请开通存管账户以便于您能正常理财</div>
                    <div class="cmbc-open-logo">
                        <img src="/ps/static/user/page/setting/cmbc/open/assets/rrd-ms_3c10499.png" alt="人人贷联手中国民生银行"/>
                    </div>
                    <form class="inputs" method="post" action="/pc/user/setting/doCreateAccountByCust" id="setIdForm">
                        <div class="ui-form-item-setting">
                            <label class="ui-label-setting">姓名</label>
                            <input type="text" id="realName" name="realName" class="ui-input-setting" placeholder="请输入姓名" autocomplete="off" />
                            <label for="realName" class="error"></label>
                        </div>
                        <div class="ui-form-item-setting">
                            <label class="ui-label-setting">身份证号</label>
                            <input type="text" id="idNo" name="idNo" class="ui-input-setting" placeholder="请输入身份证号" autocomplete="off"  />
                            <label for="idNo" class="error"></label>
                        </div>
                        <div class="ui-form-item-setting btn-wrap">
                            <span id="subCmbcBt" class="j-setting-btn j-btn">开通民生银行存管账户</span>
                        </div>
                        <div class="catch-error"></div>
                    </form>
                </div>
            </div>


        </div>


    </div>

@stop