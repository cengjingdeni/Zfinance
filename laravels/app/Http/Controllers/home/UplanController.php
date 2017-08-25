<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Productinfo;
use App\Models\Userinfo;
use App\Models\Order;

class uPlanController extends Controller
{
    //U计划模块
    public function show(Request $request){
        $classId = $request->input('classId');
        $data = DB::table("productclass")
            ->where('productclass.id',$classId)
            ->join('productinfo','productinfo.productTypeId','=','productclass.id')
            ->get();

        return view('home.uplan.show',['data'=>$data]);
    }
    //产品详情页
    public function detail(Request $request){
        //Uplan中的产品id
        $id = $request->input('productId');
        //根据id查询产品的信息
        $data = DB::table('productinfo')
            ->where('id',$id)
            ->first();

        $da = objectToArray($data);
        $da['productAmount'] = num_format($da['productAmount']);
        $da['littleMoney']   =  num_format($da['littleMoney']);
        $data->littleMoney = $da['littleMoney'];
        $data->productAmount = $da['productAmount'];
        $data->investLimit = num_format($da['investLimit']);
        $data->investSurplus = num_format($da['investSurplus']);
            //根据 Session 查询用户是否登录
        $session = Session::get('tel');

        $tel = isset($session) ? $session:"";
        $user = "";
        //根据telephone获取用户的余额
        if($tel!=""){
            $fields = ['money'];
            $user = Userinfo::select($fields)->where('telephone',$tel)->first();
        }

        return view('home.uplan.detail',['data'=>$data,'user'=>$user]);
    }


    public function checkuser(Request $request){
        $id = $request->input('id');

        $productinfo = Productinfo::where('id',$id)->first();
        $productinfo->rate = sprintf('%.2f',$productinfo->rate);
        $realRate = sprintf('%.2f',$productinfo->rate/$productinfo->deadline);
        $money = $request->input('money');
        $arr = array();
        //判断输入的数据是否为数字
        if($money=="" || !is_numeric($money)){
            $arr = array('error'=>2,'msg'=>"填入内容不为数字");
        }else{
            $tel = Session::get('tel') ? Session::get('tel'):"";
            //是否是登陆状态
            if($tel==""){
                $arr = array('error'=>3,'msg'=>"未登录");
            }else{
                $fields = ['authstatus'];
                $data = Userinfo::select($fields)->where('telephone',$tel)->first();

                $authstatus = $data->authstatus;
                //是否实名
                if($authstatus==0){
                    $arr = array('error'=>4,'msg'=>"未实名注册");
                }else{
                    if($money > $productinfo->investLimit || $money > $productinfo->investSurplus){
                        $arr = array('error'=>6,'msg'=>'超出上限金额 或者 库存资金不足');
                    }else{
                        $productinfo->addmoney = $money;
                        $productinfo->huibao = $money + $money*$realRate*0.01;
                        $arr = array('error'=>5,'msg'=>"产生订单",'data'=>$productinfo);
                    }
                }
            }
        }
        echo json_encode($arr);
    }
    //产生订单
    public function buy(Request $request){
        $data = $request->input();
        //产品名称
        $productName = $data['productName'];
        //投资金额
        $money = $data['orderAmount'];

        $product = Productinfo::where('id',$data['productId'])->first();
        //生成订单号
        $order_sn = order_sn();
        //根据Session取出对应用户的id
        $tel = Session::get('tel');
        $fields = ['id'];
        $getId = Userinfo::select($fields)->where('telephone',$tel)->first();
        $id = $getId->id;
        //该产品的实际利率
        $realRate = sprintf('%.2f',$product->rate/$product->deadline);

        $arr = array(
            'order_sn'          =>    $order_sn,
            'productId'         =>    $data['productId'],
            'userid'            =>     $id,
            'orderAmount'      =>     $data['orderAmount'],
            'addtime'           =>     time(),
            'regular'           =>     $product->deadline,
            'interestTime'    =>      ($product->investTime)+24*2*3600,
            'rate'               =>     $product->rate,
            'huibao'            =>     $data['orderAmount'] + ($data['orderAmount']) * $realRate * 0.01
        );
        //开启事务
        DB::beginTransaction();

        try{
            //添加订单
            $add = DB::table("order")->insert($arr);

            if(!$add){

                throw new \Exception('订单生成失败');
            }
            //订单生成后，减产品库存金额（锁表）
            $pinfo = Productinfo::where('id',$data['productId'])->lockforUpdate()->first();

            $shengXia = ($pinfo->investSurplus - $money);

            $pinfo->investSurplus = $shengXia;

            $callPinfo = $pinfo->update();

            if(!$callPinfo){
                throw new \Exception('库存金额减少失败');
            }
            //生成订单日志
            $log = DB::table('userorderlog')->insert($arr);

            if(!$log){
                throw new \Exception('订单日志错误');
            }
            DB::commit();//提交事务
        }catch(\Exception $e){
            DB::rollback();//事务回滚;
            echo $e->getMessage();
            echo $e->getCode();
        }
        $new_id = Order::where('userid',$id)->max('id');
        $order = Order::where(['userid'=>$id,'id'=>$new_id])->first();

        $alipayArr = array(
            'order_sn'=>$order['order_sn'],
            'orderAmount'=>$order['orderAmount'],
            'productName'=>$productName
        );
        $alipay = base64_encode(json_encode($alipayArr));

        return redirect()->action('home\alipayController@Alipay',['orderData'=>$alipay] );


    }

}
