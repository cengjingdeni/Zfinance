<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Test extends Model
{
    public function form()
    {
        $res=DB::table('people')->get();
        return $res;
    }
    public function three()
    {
        $res=DB::table('img')->get();
        return $res;
    }

    public function read()
    {
        $res=DB::table('img')->orderby('read','desc')->get();
        return $res;
    }

    //新手百科最新发布 最多点赞 最多阅读
    public function news()
    {
        $res=DB::table('people')->orderby('sj','desc')->get();
        return $res;
    }

    public function zan()
    {
        $res=DB::table('people')->orderby('zan','desc')->get();
        return $res;
    }

    public function kan()
    {
        $res=DB::table('people')->orderby('num','desc')->get();
        return $res;
    }

    //每日热点最新发布 最多点赞 最多阅读
    public function three_news()
    {
        $res=DB::table('img')->orderby('sj','desc')->get();
        return $res;
    }

    public function three_zan()
    {
        $res=DB::table('img')->orderby('zan','desc')->get();
        return $res;
    }

    public function three_kan()
    {
        $res=DB::table('img')->orderby('read','desc')->get();
        return $res;
    }

}

?>