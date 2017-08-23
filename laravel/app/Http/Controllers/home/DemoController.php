<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Goods;
class DemoController extends Controller
{
    //
    public function show(){
        $goods = new Goods();
        //当前页
        $page = input::get('page') ? input::get('page'):"1";
        echo $page;die;
        //记录数
        $numTotal = Goods::count();
        //每页显示三条数据
        $pageNum = 3;
        //总页数
        $pageTotal = ceil($numTotal/$pageNum);
        //当前页小于1 则为1
        $page = $page<1?1:$page;
        //当前页大于总页数 则为总页数
        $page = $page > $pageTotal ? $pageTotal: $page;
        //计算开始页
        $start = $page - floor(5/2);
        //计算结束页
        $end = $page + floor(5/2);
        //偏移量
        $limit = ($page-1)*$pageNum;
        $data = DB::select("select * from goods limit $limit,$pageNum");

        return view('demo.show',['data'=>$data,'pageTotle'=>$pageTotal,'page'=>$page]);
    }
}
