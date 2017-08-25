<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\support\facades\route;

class Productc extends Model
{
	protected $table = 'productc';
    protected $guarded = ['id'];
    public $timestamps =false;

    public function getGoodsType($type_id){
    	$data = DB::select("select * from productc where productTypeId = '$type_id'");
    	if (!empty($data)) {
    		return $data;
    	} else {
    		return "oooooo";
    	}
    }

    public function getType($type_id){
        $data = DB::select("select * from productc where id = '$type_id'");
        if (!empty($data)) {
            return $data;
        } else {
            return "oooooo";
        }
    }
}