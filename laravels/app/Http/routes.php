<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home.shouye');
});

Route::get('admin/show','admin\AdminController@show');
Route::get('admin/aaa','admin\AdminController@aaa');
Route::get('admin/demo','admin\AdminController@demo');
Route::get('admin/table','admin\AdminController@table');
Route::get('admin/form','admin\AdminController@form');
Route::get('admin/nav','admin\AdminController@nav');
Route::get('admin/auxiliar','admin\AdminController@auxiliar');

Route::get('img/captcha/{tmp}','home\ImgController@captcha');
//Route::get('img/code','home\ImgController@code');

Route::get('home/home','home\HomeController@home');
Route::post('home/checkPhone','home\HomeController@checkPhone');
Route::get('home/test','home\HomeController@test');
Route::post('home/checkMessage','home\HomeController@checkMessage');
Route::post('home/add','home\HomeController@add');
Route::get('home/shouye','home\HomeController@shouye');
Route::get('home/shouYeSession','home\HomeController@shouYeSession');
Route::post('home/checkLogin','home\HomeController@checkLogin');
Route::get('home/delSession','home\HomeController@delSession');
Route::get('home/person','home\HomeController@person');
Route::get('home/forgetPwd',['uses'=>'home\HomeController@forgetPwd']);
Route::post('home/checkCode',['uses'=>'home\HomeController@checkCode']);
Route::post('home/checkM',['uses'=>'home\HomeController@checkM']);
Route::post('home/reWriter',['uses'=>'home\HomeController@reWriter']);


Route::get('uplan/show',['uses'=>'home\UplanController@show']);
Route::get('uplan/uXuan',['uses'=>'home\UplanController@uXuan']);
Route::get('uplan/xin',['uses'=>'home\UplanController@xin']);
Route::get('uplan/detail',['uses'=>'home\UplanController@detail']);
Route::post('uplan/checkuser',['uses'=>'home\UplanController@checkuser']);
Route::post('uplan/buy',['uses'=>'home\UplanController@buy']);

Route::get('personCenter/realName',['uses'=>'home\personCenterController@realName']);
Route::get('personCenter/renZheng',['uses'=>'home\personCenterController@renZheng']);
Route::get('personCenter/show',['uses'=>'home\personCenterController@show']);

//支付宝支付处理路由
Route::get('alipay','home\alipayController@Alipay');  // 发起支付请求
Route::any('notify','home\alipayController@AliPayNotify'); //服务器异步通知页面路径
Route::any('    ','home\alipayController@AliPayReturn');  //页面跳转同步通知页面路径


Route::get('demo/show',['uses'=>'home\DemoController@show']);




//////////////////////////////////////////////////////////Wang Boshen
//提交订单
Route::any('submitOrder','OrderController@submitOrder');
//生成订单
Route::any('order','OrderController@getParameter');
//判断用户是否登陆
Route::any('isuser','UserLogController@__construct');
//数据存进缓存
Route::any('getCache','OrderController@getCache');
//选择支付方式
Route::any('paymentMethod','OrderController@paymentMethod');
//微信支付
Route::any('weChat','OrderController@weChat');
//支付宝支付
Route::any('alipay','OrderController@alipay');
//银行卡支付
Route::any('bankCard ','OrderController@bankCard');
//请求支付宝支付
Route::any('payzfb','PayController@payzfb');
//同步回调页面
Route::any('returnurl','PayController@returnurl');
//用户充值
Route::any('recharge','PayController@recharge');
//充值入库
Route::any('rechargeadds','PayController@rechargeadds');

Route::get('pay','PayController@index@index');  // 发起支付请求
Route::any('webnotify','PayController@index@webnotify'); //服务器异步通知页面路径
Route::any('webreturn','PayController@index@webreturn');  //页面跳转同步通知页面路径



//报错信息类
Route::any('errors','ErrorsController@errorCode');
//生成订单接口
Route::any('createorder','CreateOrderapiController@accepts');
//生成订单编号
Route::any('orderNum','CreateorderController@orderNum');


////////////////////////////////////////////////////Wang Ke
//人人学院后台模板(咨询概要)
Route::get('admin/people','admin\AdminController@people');
//人人学院后台模板咨询概要添加入库
Route::any('admin/add','admin\AdminController@add');


//人人学院前台四个模板
Route::any('home/one','home\SchoolController@one');
Route::any('home/two','home\SchoolController@two');
Route::any('home/three','home\SchoolController@three');
Route::any('home/four','home\SchoolController@four');


//咨询概览点赞
Route::any('home/good','home\SchoolController@good');
//新手百科页面点赞
Route::any('home/hand_zan','home\SchoolController@hand_zan');


//忘了 这个路由
Route::any('home/read','home\SchoolController@read');
//新手百科搜索路由
Route::any('home/sou','home\SchoolController@sou');
//新手百科阅读量路由
Route::any('home/two_read','home\SchoolController@two_read');

//新手百科最新发布员最多点赞最多阅读
Route::any('home/news','home\SchoolController@news');
Route::any('home/zan','home\SchoolController@zan');
Route::any('home/kan','home\SchoolController@kan');


//每日热点最新发布员最多点赞最多阅读
Route::any('home/three_news','home\SchoolController@three_news');
Route::any('home/three_zan','home\SchoolController@three_zan');
Route::any('home/three_kan','home\SchoolController@three_kan');
//每日热点点赞
Route::any('home/day_zan','home\SchoolController@day_kan');


//深度解读最多阅读
Route::any('home/look','home\SchoolController@look');
//每日热点点赞
Route::any('home/host_zan','home\SchoolController@host_zan');
//m每日热点阅读量增加
Route::any('home/three_read','home\SchoolController@three_read');
