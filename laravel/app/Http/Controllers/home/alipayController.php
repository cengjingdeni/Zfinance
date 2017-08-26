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
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use DB;
class alipayController extends Controller
{

// 发起支付请求
    public function Alipay(Request $request)
    {   
        $nu_sn= $request->input('nu_sn');
            if(!empty($nu_sn)){
                $alipay = app('alipay.web');
                $alipay->setOutTradeNo($nu_sn);
                $alipay->setTotalFee('0.01');
                $alipay->setSubject('优选计划');
                $alipay->setBody('欢迎投资');
                $alipay->setQrPayMode('5'); //该设置为可选1-5，添加该参数设置，支持二维码支付。
                // 跳转到支付页面。
                return redirect()->to($alipay->getPayLink());
            }else{
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
    }

    // 异步通知支付结果
    public function AliPayNotify(Request $request)
    {
        // 验证请求。
        if (!app('alipay.web')->verify()) {
            Log::notice('Alipay notify post data verification fail.', [
                'data' => $request->instance()->getContent()
            ]);
            return 'fail';
        }
        // 判断通知类型。
        switch ($request->input('trade_status', '')) {
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
                // TODO: 支付成功，取得订单号进行其它相关操作。
                Log::debug('Alipay notify post data verification success.', [
                    'out_trade_no' => $request->input('out_trade_no', ''),
                    'trade_no' => $request->input('trade_no', '')
                ]);
                break;
        }
        return 'success';
    }

    // 同步通知支付结果
    public function AliPayReturn(Request $request)
    {
        $new_nu_sn= $request->input('out_trade_no');
        $nu_sn=substr($new_nu_sn, 0, 2);
        // 验证请求。
        // if (!app('alipay.web')->verify()) {
        //     Log::notice('支付宝返回查询数据验证失败。', [
        //         'data' => $request->getQueryString()
        //     ]);
        //     return view('alipayfail');
        // }
        // 判断通知类型。
        switch ($request->input('trade_status', '')) {
            case 'TRADE_SUCCESS':
            case 'TRADE_FINISHED':
                // TODO: 支付成功，取得订单号进行其它相关操作。
                Log::debug('支付宝通知获得数据验证成功。', [
                    'out_trade_no' => $request->input('out_trade_no', ''),
                    'trade_no' => $request->input('trade_no', '')
                ]);
                break;
        }
        if($nu_sn=="sn"){
            $result = DB::table('user_code')->where('nu_sn',$new_nu_sn)->update(['status'=>'1']);
            // print_r($result);die;
            if($result){
                return redirect()->action('home\KimenController@order');
            }
        }else{
           return redirect()->action('home\personCenterController@show');
        }
    }
}
/*http://www.finance.com/return?
body=%E6%AC%A2%E8%BF%8E%E6%8A%95%E8%B5%84
&buyer_email=15128026391
&buyer_id=2088422325664240
&exterface=create_direct_pay_by_user
&is_success=T
&notify_id=RqPnCoPT3K9%252Fvwbh3Ih20emUUcfPAIH5SMn7gK9ZXuugjCLPw%252B1PDL6Bum4cd4Xvk637
&notify_time=2017-08-25+21%3A04%3A29
&notify_type=trade_status_sync
&out_trade_no=sn_1502163900
&payment_type=1
&seller_email=itbing%40sina.cn
&seller_id=2088121321528708
&subject=%E4%BC%98%E9%80%89%E8%AE%A1%E5%88%92
&total_fee=0.01
&trade_no=2017082521001004240200133915
&trade_status=TRADE_SUCCESS
&sign=44bed086605d1ff788e9d09d2ed3e56d
&sign_type=MD5*/
