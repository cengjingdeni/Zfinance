<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

/*
*���ɶ����ӿ�
*�ӿڸ�����-������,QQ-1595068971,�绰18733554692
*/
class CreateorderapiController extends Controller
{
    /**
     * ����post����������Ʒ��Ϣ
     *
     * @$uid int �û�ID
	 * @$goods_name varchar ��Ʒ����
	 * @$goods_price int ��Ʒ�۸�
	 * @$goods_type int ��Ʒ����
	 * @$goods_time char ��������ʱ��
     * @return data
     */
    public function accepts()
    {
		$uid = '1';
		$goods_name    = input::get('goods_name')  ? input::get('goods_name')  : "";
		$goods_price   = input::get('goods_price') ? input::get('goods_price') : "";
		$goods_type    = input::get('goods_type')  ? input::get('goods_type')  : "";
		$place_time    = input::get('place_time')  ? input::get('place_time')  : time();
		$order_num = $this->orderNum($goods_type);
			return '123';
		//�����Ʒһ��
		
		//�����Ƿ��Ѵ���
		//��������ж�ʱ��
		//��֧���������  �������µ�
		//��Ʒ�Ƿ����
		//�����Ƿ����
		
		//��½�Ƿ����
		
	 	//���ض������ݣ������ţ����ƣ����࣬�۸��û���ʱ�䣩��
		
    }
	
	/**
    * [orderNum description]
    * @return $order_num
    * ���ɶ������  
	* @$t_id ��Ʒ����ID
	* @remarks Ψһ��-�����Ʋ���-Ч����
	* @rule Ӣ����ĸ�������գ�ʱ�����΢�������������
    */
	public function orderNum($t_id=""){
		$yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
		date_default_timezone_set('UTC');
		$orderSn = $yCode[intval(date('Y')) - 2011] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
		
		if ($t_id=='1') {
			$order_num = 'A'.$orderSn;
		}elseif ($t_id=='2') {
			$order_num = 'B'.$orderSn;
		}else {
			$order_num = 'C'.$orderSn;
		}
		
		return $order_num;
	}
}