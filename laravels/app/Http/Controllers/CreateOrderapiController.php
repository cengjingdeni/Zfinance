<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

/*
*生成订单接口
*接口负责人-王勃深,QQ-1595068971,电话18733554692
*/
class CreateorderapiController extends Controller
{
    /**
     * 接收post传过来的商品信息
     *
     * @$uid int 用户ID
	 * @$goods_name varchar 商品名称
	 * @$goods_price int 商品价格
	 * @$goods_type int 商品类型
	 * @$goods_time char 订单生成时间
     * @return data
     */
    public function accepts()
    {
		$uid = '1';
		$goods_name    = input::get('goods_name')  ? input::get('goods_name')  : "";
		$goods_price   = input::get('goods_price') ? input::get('goods_price') : "";
		$goods_type    = input::get('goods_type')  ? input::get('goods_type')  : "";
		$place_time    = input::get('place_time')  ? input::get('place_time')  : time();
		$order_num = $this->orderNum($goods_type);
			return '123';
		//如果商品一样
		
		//订单是否已存在
		//如果存在判断时间
		//待支付超过五个  不允许下单
		//商品是否存在
		//分类是否存在
		
		//登陆是否过期
		
	 	//返回订单数据（订单号，名称，分类，价格，用户，时间）：
		
    }
	
	/**
    * [orderNum description]
    * @return $order_num
    * 生成订单编号  
	* @$t_id 商品分类ID
	* @remarks 唯一性-不可推测性-效率性
	* @rule 英文字母，年月日，时间戳，微秒数，随机数。
    */
	public function orderNum($t_id=""){
		$yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
		date_default_timezone_set('UTC');
		$orderSn = $yCode[intval(date('Y')) - 2011] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
		
		if ($t_id=='1') {
			$order_num = 'A'.$orderSn;
		}elseif ($t_id=='2') {
			$order_num = 'B'.$orderSn;
		}else {
			$order_num = 'C'.$orderSn;
		}
		
		return $order_num;
	}
}