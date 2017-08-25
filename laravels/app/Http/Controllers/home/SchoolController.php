<?php

namespace App\Http\Controllers\home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Test;
header("Content-type: text/html; charset=utf-8");
class SchoolController extends Controller
{
    //指向资讯概览页面
    public function one()
    {
        //查表 将值赋予人人学院 点赞部分上
        $data = DB::table('pic')->get();
        $da = DB::table('img')->where('u_id', 2)->get();
        $d = DB::table('img')->where('u_id', 1)->get();
        return view('home.school_1', ['data' => $data, 'da' => $da, 'd' => $d]);

    }

    //  咨询概览页面点赞
    public function good()
    {
        $user_id = 1;
        $id = $_GET['id'];
        $arr = array('pic_id' => $id, 'user_id' => $user_id);
        $data = DB::table('pic_ip')->where($arr)->first();
        $data = json_encode($data);
        $data = json_decode($data, true);

        if ($data != $arr) {
            $res = DB::table('pic_ip')->insert($arr);
            $ress = DB::table('pic')->where('id', $id)->increment('love', 1);
            $abb = array
            (
                'success' => 1
            );
            return $abb;
        } else {
            $abb = array(
                'success' => 0
            );
            return $abb;
        }
    }


    //新手百科最新发布
    public function news()
    {
        $model = new Test();
        $res = $model->news();
        $count = count($res);
        $size = 10;
        $len = ceil($count / $size);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = ($page - 1) * $size;
        $info = array_slice($res, $limit, $size);
        $s = 1;
        $shang = $page - 1 < 1 ? 1 : $page - 1;
        $xia = $page + 1 > $len ? $len : $page + 1;
        $ss = $len;
        return view('home.school_2', ['data' => $info, 's' => $s, 'shang' => $shang, 'xia' => $xia, 'ss' => $ss]);
    }

    //新手百科最多阅读
    public function kan()
    {
        $model = new Test();
        $res = $model->kan();
        $count = count($res);
        $size = 10;
        $len = ceil($count / $size);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = ($page - 1) * $size;
        $info = array_slice($res, $limit, $size);
        $s = 1;
        $shang = $page - 1 < 1 ? 1 : $page - 1;
        $xia = $page + 1 > $len ? $len : $page + 1;
        $ss = $len;
        return view('home.school_2', ['data' => $info, 's' => $s, 'shang' => $shang, 'xia' => $xia, 'ss' => $ss]);
    }

    //新手百科最多点赞
    public function zan()
    {
        $model = new Test();
        $res = $model->zan();
        $count = count($res);
        $size = 10;
        $len = ceil($count / $size);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = ($page - 1) * $size;
        $info = array_slice($res, $limit, $size);
        $s = 1;
        $shang = $page - 1 < 1 ? 1 : $page - 1;
        $xia = $page + 1 > $len ? $len : $page + 1;
        $ss = $len;
        return view('home.school_2', ['data' => $info, 's' => $s, 'shang' => $shang, 'xia' => $xia, 'ss' => $ss]);
    }


//新手百科页面搜索
    public function sou()
    {
        $search = $_GET['search'];
        $data = DB::table('people')->where('title', 'like', '%' . $search . '%')->get();
        print_r($data);die;
        $data = json_encode($data);
        $data=json_decode($data);
        return $data;

    }


//新手百科阅量增加
    public function two_read()
    {
        $id = $_GET['id'];
        $sql = DB::table('people')->where(['id' => $id])->increment('num', 1);
        $data = DB::table('people')->where('id', $id)->get();

        echo json_encode($data);
        //         print_r($data);die;
    }


//新手百科分页
    public function two()
    {
        $model = new Test();
        $res = $model->form();
        $count = count($res);
        $size = 10;
        $len = ceil($count / $size);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = ($page - 1) * $size;
        $info = array_slice($res, $limit, $size);
        $s = 1;
        $shang = $page - 1 < 1 ? 1 : $page - 1;
        $xia = $page + 1 > $len ? $len : $page + 1;
        $ss = $len;
        return view('home.school_2', ['data' => $info, 's' => $s, 'shang' => $shang, 'xia' => $xia, 'ss' => $ss]);
    }


//新手百科页面点赞
    public function hand_zan()
    {
        $user_id = 1;
        $id = $_GET['id'];
        $arr = array('people_id' => $id, 'user_id' => $user_id);
        $data = DB::table('pic_ip')->where($arr)->first();
        $data = json_encode($data);
        $data = json_decode($data, true);

        if ($data != $arr) {
            $res = DB::table('pic_ip')->insert($arr);
            $ress = DB::table('people')->where('id', $id)->increment('zan', 1);
            $abb = array
            (
                'success' => 1
            );
            return $abb;
        } else {
            $abb = array
            (
                'success' => 0
            );
            return $abb;
        }
    }


//每日热点普通分页
    public function three()
    {
        $model = new Test();
        $res = $model->three();
        $count = count($res);
        $size = 5;
        $len = ceil($count / $size);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = ($page - 1) * $size;
        $info = array_slice($res, $limit, $size);
        $s = 1;
        $shang = $page - 1 < 1 ? 1 : $page - 1;
        $xia = $page + 1 > $len ? $len : $page + 1;
        $ss = $len;
        return view('home.school_3', ['users' => $info, 's' => $s, 'shang' => $shang, 'xia' => $xia, 'ss' => $ss]);
    }


    //每日热点最多阅读、
    public function three_kan()
    {
        $model = new Test();
        $res = $model->three_kan();
        $count = count($res);
        $size = 10;
        $len = ceil($count / $size);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = ($page - 1) * $size;
        $info = array_slice($res, $limit, $size);
        $s = 1;
        $shang = $page - 1 < 1 ? 1 : $page - 1;
        $xia = $page + 1 > $len ? $len : $page + 1;
        $ss = $len;
        return view('home.school_3', ['users' => $info, 's' => $s, 'shang' => $shang, 'xia' => $xia, 'ss' => $ss]);
    }

    //每日热店最新发布
    public function three_news()
    {
        $model = new Test();
        $res = $model->three_news();
        $count = count($res);
        $size = 10;
        $len = ceil($count / $size);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = ($page - 1) * $size;
        $info = array_slice($res, $limit, $size);
        $s = 1;
        $shang = $page - 1 < 1 ? 1 : $page - 1;
        $xia = $page + 1 > $len ? $len : $page + 1;
        $ss = $len;
        return view('home.school_3', ['users' => $info, 's' => $s, 'shang' => $shang, 'xia' => $xia, 'ss' => $ss]);
    }


    //每日热店最多点赞
    public function three_zan()
    {
        $model = new Test();
        $res = $model->three_zan();
        $count = count($res);
        $size = 10;
        $len = ceil($count / $size);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = ($page - 1) * $size;
        $info = array_slice($res, $limit, $size);
        $s = 1;
        $shang = $page - 1 < 1 ? 1 : $page - 1;
        $xia = $page + 1 > $len ? $len : $page + 1;
        $ss = $len;
        return view('home.school_3', ['users' => $info, 's' => $s, 'shang' => $shang, 'xia' => $xia, 'ss' => $ss]);
    }

    //每日悦读页面点赞
    public function host_zan()
    {


        $user_id = 1;
        $id = $_GET['id'];
        $arr = array('img_zan' => $id, 'user_id' => $user_id);
        $data = DB::table('pic_ip')->where($arr)->first();
        $data = json_encode($data);
        $data = json_decode($data, true);

        if ($data != $arr) {
            $res = DB::table('pic_ip')->insert($arr);
            $ress = DB::table('img')->where('id', $id)->increment('zan', 1);
            $abb = array
            (
                'success' => 1
            );
            return $abb;
        } else {
            $abb = array
            (
                'success' => 0
            );
            return $abb;
        }
    }


//深度阅读普通分页
    public function four()
    {
        $model = new Test();
        $res = $model->three();
        $count = count($res);
        $size = 5;
        $len = ceil($count / $size);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = ($page - 1) * $size;
        $info = array_slice($res, $limit, $size);
        $s = 1;
        $shang = $page - 1 < 1 ? 1 : $page - 1;
        $xia = $page + 1 > $len ? $len : $page + 1;
        $ss = $len;
        return view('home.school_4', ['data' => $info, 's' => $s, 'shang' => $shang, 'xia' => $xia, 'ss' => $ss]);
    }

    //每日热点阅读量增加
    public function three_read()
    {
        $id = $_GET['id'];
        $sql = DB::table('img')->where(['id' => $id])->increment('read', 1);
        $data = DB::table('img')->where('id', $id)->get();
//         print_r($data);die;
        echo json_encode($data);
    }


}
