<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
class Userinfo extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $table='userinfo';
    public $timestamps=false;
    public function userinfo($telephone){
        /*$data = DB::table('users')->join('kinds',function($join){$join->on('users.c_id','=','kinds.c_id');//关联id})->get();return $data;*/
        $data = DB::select("select money from userinfo where telephone='$telephone'");
        return $data;
    }
    public function coupon($telephone,$coupon){
        if($coupon==1){
            $data = DB::select("select mount from red_package where user='$telephone' and status='0'");
            return $data;
        }else{
            $data = DB::select("select quota from coupon where user='$telephone' and status='0'");
            return $data;
        }
    }
    public function teemo($zong,$shi,$tu,$hui,$telephone,$money){
        $time       =   time();
          if($tu=="0"){
            $code   =   "无优惠";
          }else if($tu=="1"){
            $code   =   "红包优惠";
          }else{
            $code   =   "优惠劵优惠";
          }
        $add_time     =   date("Y-m-d H:i:s");   //订单生成时间
        $j_time     =   date("Y-m-d H:i:s",strtotime("+2 day"));   //开始计息时间
        $z_time     =   date("Y-m-d H:i:s",strtotime("+1 year"));   //转入自由期时间
        $t_time     =   date("Y-m-d H:i:s",strtotime("+2 year"));   //退出时间
        $nu_sn      =   "sn_".$time;    //订单编号
        $new_money  =   $money-$zong;
        $data = array(
                    'nu_sn'=>$nu_sn,
                    'telephone'=>$telephone,
                    'status'=>'1',
                    'price'=>$zong,
                    'code'=>$code,
                    'add_time'=>$add_time,
                    'j_time'=>$j_time,
                    'z_time'=>$z_time,
                    't_time'=>$t_time,
                    'money'=>'',
                );
        if($tu=="0") {
            $re     = DB::table('user_code')->insert($data);
            if($re){
                DB::beginTransaction();
                try{
                    $result1 = DB::table('userinfo')->where(array('telephone'=>$telephone))->lockforupdate()->update(['money'=>$new_money]);
                    if (!$result1) {
                        /**
                         * Exception类接收的参数
                         * $message = "", $code = 0, Exception $previous = null
                         */
                        throw new \Exception("支付失败");
                    }
                    DB::commit();
                }catch (\Exception $e){
                    DB::rollback();//事务回滚
                    echo $e->getMessage();
                }
            }
        }else if($tu=="1"){
            // $res=DB::table('red_package')->where(array('user'=>$telephone,'mount'=>$hui))->update(['status' => 1]);
            $re     = DB::table('user_code')->insert($data);
            if($re){
                DB::beginTransaction();
                    try{
                        $result1 = DB::table('userinfo')->where(array('telephone'=>$telephone))->lockforupdate()->update(['money'=>$new_money]);
                        if (!$result1) {
                            /**
                             * Exception类接收的参数
                             * $message = "", $code = 0, Exception $previous = null
                             */
                            throw new \Exception("支付失败");
                        }
                        DB::commit();
                    }catch (\Exception $e){
                        DB::rollback();//事务回滚
                        echo $e->getMessage();
                    }
            }
        }else{
            // $res=DB::table('coupon')->where(array('user'=>$telephone,'quota'=>$hui))->update(['status' => 1]);
            $re     = DB::table('user_code')->insert($data);
            if($re){
                DB::beginTransaction();
                    try{
                        $result1 = DB::table('userinfo')->where(array('telephone'=>$telephone))->lockforupdate()->update(['money'=>$new_money]);
                        if (!$result1) {
                            /**
                             * Exception类接收的参数
                             * $message = "", $code = 0, Exception $previous = null
                             */
                            throw new \Exception("支付失败");
                        }
                        DB::commit();
                    }catch (\Exception $e){
                        DB::rollback();//事务回滚
                        echo $e->getMessage();
                    }
            }
        }
    }
    public function listing($telephone){
        $data = DB::select("select * from user_code where telephone='$telephone' and status='1'");
        return $data;
    }
    public function nlisting($telephone){
        $data = DB::select("select * from user_code where telephone='$telephone' and status='2'");
        return $data;
    }
}