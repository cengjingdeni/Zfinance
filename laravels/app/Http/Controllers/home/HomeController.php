<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Models\Userinfo;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    public $Mcode = "";
    //登录页面
    public function home(){
        return view('home.show');
    }
    //ajax验证手机号
    public function checkPhone(Request $request){

        $phone = $request->input('telephone');

        $data = Userinfo::where('telephone','=',$phone)->first();
        //转化成数组
        $da = objectToArray($data);
//        print_r($da);die;
        if(empty($da)){

            $arr = array(
                'error'=> 0,
                'msg'  =>"该用户不存在"
            );
        }else{

            $arr = array(
                'error'=>1
            );
        }
        echo json_encode($arr);
    }
    //短信验证码
    public function checkMessage(Request $request){
        $phone = $request->input('phone');

        $code = rand(1000,9999);
        Session::flash('code',$code);
        $url = 'http://api.k780.com/?app=sms.send&tempid=51015&param=usernm%3Dadmin%26code%3D'.$code.'&phone='.$phone.'&appkey=23760&sign=e9d71c5357903f13aa5c68ddcf799cab&format=json';
        $data = curl($url,false,0,0);
        $da = json_decode($data,true);
        if($da['success']==1 && $da['result']['phone']==$phone){

            $arr = array('code'=>$code, 'msg' =>1);
        }else{
            $arr = array('msg'=>0);
        }
        echo json_encode($arr);

    }

    //添加用户
    public function add(Request $request){

        $data = $request->input();
        $telephone = Userinfo::where('telephone',$data['telephone'])->first();
        $val = objectToArray($telephone);

        if(count($val)!=0){
            echo json_encode(array('error'=>2));die;
        }
        $userInfo = new Userinfo();

        $userInfo->username = 'DY'.getARandLetter(8);
        $userInfo->telephone  =    $data['telephone'];
        $userInfo->password   =    md5($data['password']);
        $value = $userInfo->save();
        if($value){

              $calldata = Userinfo::where('telephone',$data['telephone'])->first();
              $username = $calldata->username;
              $request->session()->set('tel',$data['telephone']);
              $request->session()->set('username',$username);
              $arr = array('error'=>1);

        }else{
              $arr = array('error'=>0);
        }
        echo json_encode($arr);
    }
    //网站首页
    public function shouye(Request $request){
        if(!empty($_GET) && !empty($_GET['subject'])){
            DB::beginTransaction();
            $data = $_GET ? $_GET : "";
            $order_num = $data['out_trade_no'] ? $data['out_trade_no']: "" ;
            $goods_name = $data['subject'] ? $data['subject'] : "";
            $total_fee = $data['total_fee'] ? $data['total_fee'] : "" ;
            $uid = $request->session()->get('tel') ? $request->session()->get('tel') : "";
            $time = time();
            //修改订单状态  变为已支付
            $a = DB::update("update orders set pay_status='1'  where order_num='$order_num' AND goods_name='$goods_name'");
            $b = DB::insert("insert into user_balance_log values('','$uid','2','用户消费','1','$total_fee','$time')");
            $c = DB::update("update orders_log set order_status='2' where order_id='$order_num' AND goods_name='$goods_name'");
            if($a && $b &&$c){
                DB::commit();
                $username = $request->session()->get('username');
                $uname = isset($username) ? $username : "";
                return redirect('home/shouye');
            }else{
                DB::rollBack();
                $username = $request->session()->get('username');
                $uname = isset($username) ? $username : "";
                return redirect('home/shouye');
            }
        }

        $username = $request->session()->get('username');
        $uname = isset($username) ? $username : "";
//        $te = $request->input('tel');
//
//        $tel = isset($te) ? $te:"";
        return view('home.shouye',['username'=>$username]);
    }
    //登录
    public function checkLogin(Request $request){

        $tel = $request->input('j_username');
        $pwd = md5($request->input('j_password'));
        $data = Userinfo::where(['telephone'=>$tel,'password'=>$pwd])->first();
//        print_r($data);die;
        if($data){
            $username = $request->session()->set("username",$data->username);
            $request->session()->set('tel',$tel);
            return redirect()->action('home\HomeController@shouye');
        }else{

            return redirect('home/home');
        }

    }


    public function person(){
        return view('home.person');
    }

    //忘记密码
    public function forgetPwd(){
        return view('home.forgetPwd');
    }


    //删除session数据 退出登录
    public function delSession(Request $request){

        $request->session()->flush();

        return redirect("home/shouye");


    }

    //验证图形验证码
    public function checkCode(Request $request){
        $code = $request->input("code");

        $captcha = Session::get('milkcaptcha');
        if($code == $captcha){
            $arr = array('error'=>0,'msg'=>'该手机号有效');
        }else{
            $arr = array('error'=>1,'msg'=>'改手机号不存在');
        }
        echo json_encode($arr);
    }
    //验证短信验证码
    public function checkM(Request $request){
        $code = $request->input("code");

        $captcha = Session::get("code");
       if($code == $captcha){
            $arr = array('error'=>0,'msg'=>'输入验证码正确');
        }else{
            $arr = array('error'=>1,'msg'=>'输入验证码错误');
        }
        echo json_encode($arr);
    }

    //密码验证  修改密码
    public function reWriter(Request $request){
        $np = $request->input('np');
        $rnp = $request->input('rnp');
        $tel = $request->input('tel');
        if(preg_match(" /^[\w]{8,16}$/",$np)){

            if($np != $rnp){
               $arr = array('error'=>3,"msg"=>"两次密码输入不一致");
            }else{
                $toNp = md5($np);
                $userinfo = Userinfo::where('telephone',$tel)->first();
                $userinfo->password = $toNp;
                $success = $userinfo->save();
                if($success){
                    $arr = array("error"=>2,'msg'=>"密码修改成功");
                }else{
                    $arr = array("error"=>4,'msg'=>"密码修改失败");
                }
            }

        }else{
            $arr = array("error"=>1,'msg'=>"8~16位数字、字母或符号组合");

        }
        echo json_encode($arr);

    }
}
