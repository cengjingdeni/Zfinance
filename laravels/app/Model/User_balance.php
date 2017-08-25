<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\support\facades\route;

class User_balance extends Model
{
	protected $table = 'user_balance';
    protected $guarded = ['id'];
    public $timestamps =false;
    public function selMoney($order_money){
    	$data = DB::select("select * from user_balance where user_money>'$order_money'");
    	if (empty($data)) {
    		return "0";
    	} else {
    		return "8";
    	}
    }
}