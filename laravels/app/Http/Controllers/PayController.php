<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Model\Orders;
use DB;

class PayController extends Controller{
    /**
     * [isUser description]
     * @param  Request $request [description]
     * @return boolean          [description]
     * 验证用户
     */
    public function isUser(Request $request){
        $aa = $request->session()->get('tel');
        $return = "";
        if (empty($aa)) {
            $return = '0';
        }else{
            $return = '1';
        }
        return $return;
    }
    /**
     * [payzfb description]
     * @param  Request $request [description]
     * @return [type]           [description]
     * 调取支付宝接口
     */
    public function payzfb(Request $request){
        // $uid = $this->isUser($request);
        $uid = $request->session()->get('tel') ? $request->session()->get('tel') : "";
        $model = new Orders();
        $data = $model->selLastOrder($uid);
        // print_r($data);
        $url = "http://127.0.0.1/shixun1/zhifubao/alipayapi.php";
        $post_data = array (
            "WIDout_trade_no"  => $data[0]->order_num,        //订单编号
            "WIDsubject"       => $data[0]->goods_name,       //订单名称
            "WIDtotal_fee"     => '0.01',      //付款金额
            "WIDbody"          => '还可以',                  //订单描述
            "WIDshow_url"      => "",                        //商品展示地址
        );
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// post数据
curl_setopt($ch, CURLOPT_POST, 1);
// post的变量
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
curl_close($ch);
//打印获得的数据
print_r($output);
    }
    /**
     * [recharge description]
     * @param  Request $request [description]
     * @return [type]           [description]
     * 用户充值
     */
    public function recharge(Request $request){
        $uid = $this->isUser($request);
        if ($uid=='1') {
           return view('Pay.recharge'); 
        } else {
            // $request->session()->set('tel','18733554692');
            echo "<script>alert('请先登录');location.href='http://www.baidu.com'</script>";
        }    
    }

    public function rechargeadds(Request $request){
        $uidstatus = $this->isUser($request);
        $uid = $request->session()->get('tel') ? $request->session()->get('tel') : "";
        $time = time();
        if ($uidstatus=='1') {
            $money = $_POST['money'] ? $_POST['money'] : "";
            $payType = $_POST['payType'] ? $_POST['payType'] : "";
            $select = DB::select("select * from user_balance where user_id=$uid");
            if (!empty($select)) {
                $user_money = $select[0]->user_money;
                $sun_money = $user_money+$money;
                $update = DB::update("update user_balance set user_money=$sun_money where user_id=$uid");
                $input = DB::insert("insert into user_balance_log values('','$uid','1','用户充值','1','$money','$time')");
                if ($update) {      
                    return "1";
                } else {
                    return "充值失败";
                }
            } else {
                $insert = DB::insert("insert into user_balance values('','$uid','$money')");
                $input = DB::insert("insert into user_balance_log values('','$uid','1','用户充值','1','$money','$time')");
                if ($insert) {      
                    return "1";
                } else {
                    return "充值失败";
                }
            }
        } else {
            echo "<script>alert('请先登录');location.href='http://www.baidu.com'</script>";
        }
        
    }

    /**
     * [returnurl description]
     * @return [type] [description]
     * 
     */
    public function returnurl(Request $request){
        //事务处理  
        DB::beginTransaction();    
            // $time = time();
            // $user_balance = DB::select("select * from user_balance");
            // $money = $user_balance[0]->user_money;
            // $money = $money-$total_fee;
            // $a = DB::update("update user_balance set user_money = $money where user_id='1'");
        $data = $_GET;
        $order_num = $data['out_trade_no'];
        $goods_name = $data['subject'];
        $total_fee = $data['total_fee'];
        $uid = $request->session()->get('tel') ? $request->session()->get('tel') : "";
        $time = time();
        //修改订单状态  变为已支付
        $a = DB::update("update orders set pay_status='1'  where order_num='$order_num' AND goods_name='$goods_name'");
        $b = DB::insert("insert into user_balance_log values('','$uid','2','用户消费','1','$total_fee','$time')");
        $c = DB::update("update orders_log set order_status='2' where order_id='$order_num' AND goods_name='$goods_name'");
        if($a && $b){
            DB::commit();
        }else{
            DB::rollBack();
        }
        return view('Pay.index');
    }
}