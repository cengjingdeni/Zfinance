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
//        print_r($data);die
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


    //删除session数据 退出登录
    public function delSession(Request $request){

        $request->session()->flush();

        return redirect("home/shouye");


    }


}
