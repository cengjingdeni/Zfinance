<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\support\facades\route;

class Orders extends Model{

	protected $table = 'orders';
    protected $guarded = ['order_id'];
    public $timestamps =false;

    /**
     * [orderRepeat description]
     * @param  [type] $orderNum [description]
     * @return [type]            [description]
     * 订单号重复
     */
    public function orderRepeat($orderNum){
    	$data = DB::select("select * from orders where order_id = '$orderNum'");
    	if (!empty($data) && is_array($data)) {
    		return '1';
    	} else {
    		return '0';
    	}
    }

    /**
     * [orderOverrun description]
     * @return [type] [description]
     * 订单超限
     */
    public function orderOverrun($uid){
    	$userList = DB::select("select * from orders where '$uid'=user_id LIMIT 5");
    	if (!empty($userList) && count($userList) >= '5') {
    		return '1';
    	} else {
    		return '0';
    	}
    }

    /**
     * [orderIdentical description]
     * @param  [type] $uid        [description]
     * @param  [type] $goods_name [description]
     * @return [type]             [description]
     * 相同订单
     */
    public function orderIdentical($uid, $goodsName){
    	$userOrderTwo = DB::select("select * from orders where '$uid'=user_id AND '$goodsName'=goods_name");
    	if (!empty($userOrderTwo) && is_array($userOrderTwo)) {
			$userOrderTwo_price = $userOrderTwo[0]->order_price;
    		return array('success'=>'1','userOrderTwo_price'=>$userOrderTwo_price);
    	} else {
    		return array('success'=>'0');
    	}
    }
    public function isPay($uid){
        $data = DB::select("select * from orders where user_id = '$uid' AND pay_status");
        if ($data) {
            return "1";
        }else {
            return "0";
        }
    }

    public function selLastOrder($uid){
        $selLast = DB::select("select * from orders where user_id=$uid ORDER BY order_id desc LIMIT 1 ");
        return $selLast;
    }

}