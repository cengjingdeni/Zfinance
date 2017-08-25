<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Userinfo;
use Illuminate\Support\Facades\Session;

class personCenterController extends Controller
{
    //用户中心
    public function show(){
        return view('home.personCenter.show');
    }
    //用户信息
    public function realName(){
        $tel = Session::get('tel');
        $user = Userinfo::where('telephone',$tel)->first();
        $idcard = $user->incard;

        $user->idcard = substr_replace($user->idcard, '****', 3, 11);
        $user->telephone = substr_replace($user->telephone,'****',3,4);
        return view('home.personCenter.center',['user'=>$user]);
    }
    //实名认证
    public function renZheng(){
        return view('home.personCenter.renzheng');
    }
}
