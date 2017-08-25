<?php
namespace App\Http\Controllers;

use App\Http\Controllers\ErrorsController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Model\Orders;
use App\Model\Productc;
use App\Model\User_balance;
use App\Http\Requests;
use Cache;
use DB;
class OrderController extends Controller
{	
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
	 * [submitOrder description]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 * 第一步 确认订单页面
	 */
	public function submitOrder(Request $request){
		// $aa = $request->session()->set('tel','18733554692');
		$uid = $request->session()->get('tel') ? $request->session()->get('tel') : "";
		$uname = $request->session()->get('tel');
		$goodsPrice   = input::get('goods_price') ? input::get('goods_price') : "10000";
		$goodsType    = input::get('goods_type')  ? input::get('goods_type')  : "薪计划";
		$placeTime    = input::get('place_time')  ? input::get('place_time')  : date("Y-m-d H:i:s");
		$interestTime = date("Y-m-d",strtotime("+2 day"));
		$interestRate = input::get('interest_rate')? input::get('interest_rate'): "8%";
		$type_id = input::get('type_id') ? input::get('type_id') : "3";
		// $uid='1';
		$t_id="";
		if ($type_id == '1') {
			$t_id='1';
		} elseif ($type_id == '2') {
			$t_id='2';
		} elseif ($type_id == '3') {
			$t_id='3';
		} else {
			$t_id='0';
		}

		$getGoodsType = new productc();
		$goodsTypeId = $getGoodsType->getGoodsType($t_id);

		foreach($goodsTypeId as $k=>$v){
			$v->startTime = date("Y-m-d",$v->startTime);
			$v->endTime = date("Y-m-d",$v->endTime);
		}

		$data = array(
			'uname'        => $uname,     							//用户名
			'uid'          => '1',									//用户ID
			'goodsName'    => $goodsTypeId[0]->goodsName,			//商品名称
			'deadline'     => $goodsTypeId[0]->deadine,			//产品期限
			'goodsPrice'   => $goodsPrice,							//商品价格
			'goodsType'    => $goodsType,							//商品分类
			'placeTime'    => $placeTime,							//下单时间
			'interestTime' => $interestTime,    					//计息开始时间
			'interestRate' => $goodsTypeId[0]->rate,				//利率 8%
			'startTime'    => $goodsTypeId[0]->startTime,  		//开始时间
			'endTime'      => $goodsTypeId[0]->endTime,  		//结束时间
			'goodsId'      => $goodsTypeId[0]->id,
			);
		
		return view('Order.index',['data'=>$data]);
	}

	/**
	 * [paymentMethod description]
	 * @return [type] [description]
	 * 把订单数据放到缓存中
	 */
	public function getCache(){
		$data = input::get();
		$uid = $data['uid'];
		Cache::put('$uid',$data,30);
		if (Cache::get('$uid')) {
			return '1';
		} else {
			return '0';
		}
	}

	/**
	 * [paymentMethod description]
	 * @return [type] [description]
	 * 选择支付方式
	 */
	public function paymentMethod(){
		// $user_balance = DB::select("select * from user_balance");
		// print_r($user_balance);
		return view('Order.paymentMethod');
	}

	public function weChat(){
		return view('Order.weChat');
	}

	public function alipay(){
		return view('Order.alipay');
	}

	public function bankCard(){
		return view('Order.bankCard');
	}
	/**
	 * [getParameter description]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 * 生成订单
	 */
	public function getParameter(Request $request){
		//报错信息
		$error = new ErrorsController();
		$error = $error->errorCode();
		//先判断登录
		$userLog = $this->isUser($request);
		// return $goodsPrice;
		if ($userLog=='0') {
//			 $aa = $request->session()->set('tel','18733554692');
			return $error['authority']['210'];    //用户未登录
		}


		$uid = $request->session()->get('tel') ? $request->session()->get('tel') : "";
		$goodsTypeId = input::get('goodsTypeId') ? input::get('goodsTypeId') : "";
		$gwmly = input::get('gwmly') ? input::get('gwmly') : "";
		$message = input::get('gwmly') ? input::get('gwmly') : "";
		//根据商品ID查询到商品
		$getGoodsType = new Productc();
		$typeId = $getGoodsType->getType($goodsTypeId);
		// print_r($typeId);die;
		$goodsName = $typeId[0]->goodsName ? $typeId[0]->goodsName : "";
		$goodsType = $typeId[0]->productTypeId ? $typeId[0]->productTypeId : "";

		$goodsPrice   = input::get('goodsPrice') ? input::get('goodsPrice') : "";
		$placeTime    = input::get('placeTime')  ? input::get('placeTime')  : time();

		$orderNum = new CreateorderapiController();
		$orderNum = $orderNum->orderNum($goodsType);
		
		$model = new Orders();
        $data = $model->orderRepeat($orderNum);
        //余额是否充足
        $user_balance = new User_balance();
        $selMoney = $user_balance->selMoney($goodsPrice);
        //未支付订单
        $userList = $model->orderOverrun($uid);
        $userOrderTwo = $model->orderIdentical($uid,$goodsName);
		//是否登录
		
		//是否支付
		$isPay = $model->isPay($uid);
		

		if ($selMoney == '0') {
			return "金额不足";
			//echo "<script>alert('金额不足，去充值');location.href='http://www.interface.com/public/recharge'</script>";				  //没钱了
		} 
		elseif ($data == '1') {
			$this->getParameter($request);
		} elseif ($userList == '1') {
			return $error['order']['60002'];    //未支付订单超过五个
		} 
		elseif ($isPay == '1') {
			return "订单已支付过";
		} 
		elseif ($userOrderTwo['success'] == '1') {
			$userOrderTwoPrice = $userOrderTwo['userOrderTwo_price'];
			$totalPrice = $userOrderTwoPrice + $goodsPrice;
			$updateOrder = DB::update("update orders set order_price=$totalPrice  where $uid=user_id AND '$goodsName'=goods_name");
			// $insertOrder = DB::insert("insert into orders values('','$orderNum','$uid','$goodsTypeId','$goodsName','$goodsPrice','','0','','$placeTime','0','1','','','','')");
				return '1';
				// return $totalPrice;
			// return $error['order']['60001'];    //订单重复
		} else {
			$insertOrder = DB::insert("insert into orders values('','$orderNum','$uid','$goodsTypeId','1','$goodsName','$goodsPrice','','0','','$placeTime','0','1','','','','','$message')");
			$selLastId = DB::select("select order_id from orders ORDER BY order_id desc limit 1");
			DB::insert("insert into orders_log values('','$uid','$orderNum','$goodsName','$goodsPrice','placeTime','12','1')");
			if ($insertOrder) {
				return '1';
			}
		}
	}
	public function selLastOrder(){

	}
}
?>