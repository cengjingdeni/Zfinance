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
Route::any('return','home\alipayController@AliPayReturn');  //页面跳转同步通知页面路径


Route::get('demo/show',['uses'=>'home\DemoController@show']);
/*
 *优选计划
 */
Route::get('kimen/kimen','home\KimenController@kimen');
Route::get('kimen/mount','home\KimenController@mount');
Route::get('kimen/dingdan','home\KimenController@dingdan');
Route::get('kimen/coupon','home\KimenController@coupon');
Route::get('kimen/teemo','home\KimenController@teemo');
Route::get('kimen/order','home\KimenController@order');
Route::get('kimen/norder','home\KimenController@norder');
Route::get('kimen/listing','home\KimenController@listing');
Route::get('kimen/nlisting','home\KimenController@nlisting');