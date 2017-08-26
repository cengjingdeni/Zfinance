<?php

namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Userinfo;
header("Access-Control-Allow-Origin:*");
//*表示所有的域都可以接受
header("Access-Control-Allow-Methods:GET,POST");
class KimenController extends Controller
{
    public function kimen(){
        return view('kimen.kimen');
    }
    public function mount(Request $request){
    	$telephone 	= $request->input('telephone');
    	$model 	   	= new userinfo();
    	$data		= $model->userinfo($telephone);
    	$date		= json_encode($data);
    	$res 		= json_decode($date,true);
    	$tel 		= $res[0]['money'];
    	return $tel;
        // return view('kimen.mount');
    }
    public function dingdan(){
        return view('kimen.dingdan');
    }
    public function coupon(Request $request){
    	$telephone 	= $request->input('telephone');
    	$coupon 	= $request->input('coupon');
    	$model 	   	= new userinfo();
    	$data		= $model->coupon($telephone,$coupon);
    	$date		= json_encode($data);
    	$data 		= json_decode($date,true);
    	return $data;
    }
    public function teemo(Request $request){
    	$telephone 	 	= $request->input('telephone');	//	用户信息
    	$money 	 	= $request->input('money');	//	用户信息
    	$zong 	 	= $request->input('zong');		//	订单有效金额
    	$shi 	 	= $request->input('shi');		//	订单支付金额
    	$tu 	 	= $request->input('tu');		//	优惠途径    0:没有优惠   1：红包优惠  2：优惠劵优惠
    	$hui 	 	= $request->input('hui');		//	优惠金额    当没有优惠是优惠金额为0
    	$model 	   	= new userinfo();				//	实例化model
    	$data		= $model->teemo($zong,$shi,$tu,$hui,$telephone,$money);
    	return $data;
    }
    public function order(Request $request){
        return view('kimen.order');
    }
    public function norder(Request $request){
        return view('kimen.norder');
    }
    public function listing(Request $request){
        $telephone      = $request->input('telephone'); //  用户信息
        $model      = new userinfo();               //  实例化model
        $data       = $model->listing($telephone);
        $date       = json_encode($data);
        $data       = json_decode($date,true);
        return $data;
    }
    public function nlisting(Request $request){
        $telephone  = $request->input('telephone'); //  用户信息
        $model      = new userinfo();               //  实例化model
        $data       = $model->nlisting($telephone);
        $date       = json_encode($data);
        $data       = json_decode($date,true);
        return $data;
    }
}
