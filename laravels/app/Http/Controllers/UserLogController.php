<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserLogController extends Controller
{
	public function __construct(Request $request){
		$aa = $request->session()->get('tel');
		$return = "";
		if (empty($aa)) {
			$return = "0";
		}else{
			$return = "1";
		}
		return $return;
	}
}