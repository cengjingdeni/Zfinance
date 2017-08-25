@extends('lay')
@section('content')


    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/common_wdg_c1db688.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/common_nm_aa4d4d8.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/user_wdg_29c87c3.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/autoinvest_wdg_ce2a92c.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/uplan_wdg_a3071e5.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/cropper.min_2456d7c.css" />
    <link rel="stylesheet" href="{{URL::asset('/')}}home/css/accountInfo_313d54a.css" />
    <div id="pg-account-security" class="main-section j-card">






        <div id="setting-nav">
            <ul class="fn-clear">
                <li class= 'active' >
                    <a href="/pc/user/setting/accountInfo"><span>账户信息</span></a>
                </li>
                <li class= ' ' >

                    <a href="/pc/user/bank/werrdMyBank"><span>我的银行卡</span></a>

                </li>
            </ul>
        </div>


        <div id="wdg-account-info-con">

            <div id="avatar-con" class="fn-clear">

                <img class="user-avatar" title="点击修改头像" src="{{URL::asset('/')}}home/images/default-avatar_978c860.png" />

                <img  class="upload-icon" src="{{URL::asset('/')}}home/images/upload_7a5edb3.png" alt="点击修改头像">
                <div class="">
                    <div class="user-name">

                        WE66011368

                    </div>
                    <div class="security-level-con">安全等级:


                        <span class="security-level security-middle">中</span>

                    </div>
                </div>
            </div>

            <div class="detail-info-con">
                <ul class="info-list fn-clear">

                    <li class="info-item">
                        <span class="col-1">存管账户<br/><em>人人贷与民生银行合作资金存管</em></span>
                <span class="col-2">

                    <span class="not-set-status">未开通</span>

                </span>
                <span class="col-3">

                    <a target="_blank" href="https://www.renrendai.com/pc/user/setting/toCreateAccountByCust">立即开通</a>

                </span>
                    </li>

                    <li class="info-item">
                        <span class="col-1">实名认证<br/><em>账户更安全投资更放心</em></span>
                <span class="col-2">
                    @if($user->authstatus==0)
                        <span class="not-set-status">未认证</span>
                    @else
                        <span class="not-set-status">{{$user->idcard}}</span>
                    @endif
                </span>
                <span class="col-3">

                    <a target="_blank" href="{{url('personCenter/renZheng')}}">立即认证</a>

                </span>
                    </li>
                    <li class="info-item">
                        <span class="col-1">绑定手机<br/><em>账户更安全投资更放心</em></span>
                <span class="col-2">

                      176****4468

                </span>
                <span class="col-3">




                        <a id="modify-mobile-link" target="_blank" class="modify-link" href="/pc/user/setting/toModifyMobileByUnOpen">修改</a>



                </span>
                    </li>
                    <li class="info-item">
                <span class="col-1">绑定邮箱<br/><em>及时获取账户资金变动通知和投资讯息</em>
                </span>
                <span class="col-2">

                      14****@qq.com

                </span>
                <span class="col-3">


                      <a target="_blank" class="modify-link" href="/pc/user/setting/toModifyEmailByOld">修改</a>

                </span>
                    </li>
                    <li class="info-item">
                <span class="col-1">登录密码<br/><em>登录账户时需要填写密码</em>
                </span>
                <span class="col-2">

                      上次登录时间2017-08-18 14:37:11

                </span>
                <span class="col-3">

                      <a target="_blank" class="modify-link" href="/pc/user/setting/toResetPassword">修改</a>

                </span>
                    </li>


                    <li class="info-item risk-level-item">
                        <span class="col-1">风险评测<br/><em>了解风险承受能力，减少投资损失</em></span>
                <span class="col-2" id="user-risk-level">

                      <span  class="not-set-status">您为保守型投资者</span>

                </span>
                <span class="col-3">

                        <a target="_blank" href="/pc/user/risk/riskPc">立即评测</a>

                </span>
                    </li>




                </ul>
            </div>


            <div id="setting-cmbc-tips">
                <div class="cmbc-dialog-top">
                    <div class="mbc-dialog-logo"> </div>
                    <div class="mbc-dialog-text">








                        <p class="mbc-dialog-title">个人账户升级为民生存管账户</p>
                        <p class="mbc-dialog-subtitle">请开通存管账户以便于您能正常理财</p>

                    </div>
                </div>
                <div class="cmbc-dialog-bottom">








                    <a href="/pc/user/setting/toCreateAccountByCust">开通民生银行存管账户</a>

                </div>
            </div>


            <div id="setting-user-withdrawal">
                <p>请先绑定银行卡</p>
                <a href="javascript:" id="sure-withdrawal">确定</a>
            </div>
        </div>



        <div class="upload-img-modal" id="uploadImgModal">
            <div class="modal-bg"></div>
            <div class="modal-content">
                <div class="upload-box">
                    <div class="title-box">
                        <span class="icon-we-close close-btn" id="closeBtn"></span>
                        <h2>上传图片</h2>
                    </div>
                    <div class="upload-body">
                        <div class="avatar-upload">
                            <label for="uploadImg">用户头像上传</label>
                            <input class="avatar-input" type="file" id="uploadImg" accept="image/*" value="请选择图片"/>
                            <button class="btn avatar-choose-btn" type="button" onclick="$('input[id=uploadImg]').click();">请选择图片</button>
                            <span class="img-name" id="avatarName">您可以上传jpg、png或gif文件，上传图片最大1M</span>
                        </div>
                        <div class="img-show-box clearfix">
                            <div class="avatar-wrapper">
                                <img class="img-show" id="checkedImg"/>
                            </div>

                            <div class="avatar-preview" id="preview"></div>
                        </div>

                        <div class="operate-box">
                            <button class="btn btn-submit" id="avatarSubmit">保存修改</button>

                            <div class="btn-box">
                                <button class="btn btn-avator-operate" data-method="rotate" data-option="-90"><span class="icon-we-left-rotation"></span>向左旋转</button>
                                <button class="btn btn-avator-operate" data-method="rotate" data-option="90"><span class="icon-we-right-rotation"></span>向右旋转</button>

                                <div class="icon-btn-box">
                                    <button class="btn icon-we-enlarge btn-avator-operate" data-method="zoom" data-option="0.1"></button>
                                    <button class="btn icon-we-narrow btn-avator-operate" data-method="zoom" data-option="-0.1"></button>
                                    <button class="btn icon-we-icon-refresh btn-avator-operate"  data-method="reset"></button>
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