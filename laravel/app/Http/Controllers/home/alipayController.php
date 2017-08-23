<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/8
 * Time: 20:19
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Input;
class alipayController extends Controller{

// 发起支付请求
    public function Alipay(){
        $get = Input::get();

        $data = json_decode(base64_decode($get['orderData']),true);

        $alipay = app('alipay.web');
        $alipay->setOutTradeNo($data['order_sn']);
        $alipay->setTotalFee('0.01');
        $alipay->setSubject($data['productName']);
        $alipay->setBody('商品：支付宝支付测试');

        $alipay->setQrPayMode('5'); //该设置为可选1-5，添加该参数设置，支持二维码支付。

        // 跳转到支付页面。
        return redirect()->to($alipay->getPayLink());
    }

// 异步通知支付结果
    public function AliPayNotify(Request $request){
// 验证请求。
        if (!app('alipay.web')->verify()) {
            Log::notice('Alipay notify post data verification fail.', [
                'data' => $request->instance()->getContent()
            ]);
            return 'fail';
        }
// 判断通知类型。
        switch ($request ->input('trade_status','')) {
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
                // TODO: 支付成功，取得订单号进行其它相关操作。
                Log::debug('Alipay notify post data verification success.', [
                    'out_trade_no' => $request -> input('out_trade_no',''),
                    'trade_no' => $request -> input('trade_no','')
                ]);
                break;
        }
        return 'success';
    }

// 同步通知支付结果
    public function AliPayReturn(Request $request){
// 验证请求。
        if (!app('alipay.web')->verify()) {
            Log::notice('支付宝返回查询数据验证失败。', [
                'data' => $request->getQueryString()
            ]);
            return view('alipayfail');
        }
// 判断通知类型。
        switch ($request ->input('trade_status','')) {
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
                // TODO: 支付成功，取得订单号进行其它相关操作。
                Log::debug('支付宝通知获得数据验证成功。', [
                    'out_trade_no' => $request ->input('out_trade_no',''),
                    'trade_no' => $request -> input('trade_no','')
                ]);
                break;
        }
        return redirect()->action('home\personCenterController@show');
    }
}