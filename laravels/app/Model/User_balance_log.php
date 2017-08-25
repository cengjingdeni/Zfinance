<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\support\facades\route;

class User_balance_log extends Model
{
	protected $table = 'user_balance_log';
    protected $guarded = ['id'];
    public $timestamps =false;
    public function index(){
    	
    }
}