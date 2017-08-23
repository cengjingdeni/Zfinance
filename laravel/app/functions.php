<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/8
 * Time: 19:44
 */

function curl($url, $params = false, $ispost = 0, $https = 0)
{
    $httpInfo = array();
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    if ($https) {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // 对认证证书来源的检查
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); // 从证书中检查SSL加密算法是否存在
    }
    if ($ispost) {
        $postfields = '';
        foreach ($params as $key => $value){
            $postfields .= urlencode($key) . '=' . urlencode($value) . '&';
        }
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($ch, CURLOPT_URL, $url);
    } else {
        if ($params) {
            if (is_array($params)) {
                $params = http_build_query($params);
            }
            curl_setopt($ch, CURLOPT_URL, $url . '?' . $params);
        } else {
            curl_setopt($ch, CURLOPT_URL, $url);
        }
    }

    $response = curl_exec($ch);

    if ($response === FALSE) {
            //echo "cURL Error: " . curl_error($ch);
            return false;
        }

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $httpInfo = array_merge($httpInfo, curl_getinfo($ch));
    curl_close($ch);
    return $response;
}

//把对象变成数组
function objectToArray($object) {
    //先编码成json字符串，再解码成数组
    return json_decode(json_encode($object), true);
}

//大数字从个位起 每三位用“,”隔开
function num_format($num){
    if(!is_numeric($num)){
        return false;
    }
    $num = explode('.',$num);//把整数和小数分开

    $rl = isset($num[1]) ? $num[1] : "";   //小数部分的值



    $j = strlen($num[0]) % 3;//整数有多少位

    $sl = substr($num[0], 0, $j);//前面不满三位的数取出来

    $sr = substr($num[0], $j);//后面的满三位的数取出来

    $i = 0;
    $rvalue = "";
    while($i <= strlen($sr)){
        $rvalue = $rvalue.','.substr($sr, $i, 3);//三位三位取出再合并，按逗号隔开
        $i = $i + 3;
    }

    $rvalue = $sl.$rvalue;

    $rvalue = substr($rvalue,0,strlen($rvalue)-1);//去掉最后一个逗号
    $rvalue = explode(',',$rvalue);//分解成数组

    if($rvalue[0]==0){
        array_shift($rvalue);//如果第一个元素为0，删除第一个元素
    }

//    print_r($rvalue);die;
    $rv = $rvalue[0];//前面不满三位的数

    for($i = 1; $i < count($rvalue); $i++){
        $rv = $rv.','.$rvalue[$i];
    }
    if(!empty($rl)){
        $rvalue = $rv.'.'.$rl;//小数不为空，整数和小数合并
    }else{
        $rvalue = $rv;//小数为空，只有整数
    }
    return $rvalue;
}


//生成随机数
function getARandLetter($number = 1) {
    if ($number == 0)
        return FALSE; //去除0
    $number = $number < 0 ? - $number : $number; //如果小于零取正值
//    $letterArr = array ('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z' );
    $letterArr = array('1','2','3','4','5','6','7','8','9','0');
    $returnStr ='';
    for($i= 0; $i < $number; $i ++) {
        $returnStr .= $letterArr [rand ( 0, 9)];
    }
    return $returnStr;
}


//生成订单号
function  order_sn(){
    $yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
    date_default_timezone_set('UTC');
    return $orderSn = $yCode[intval(date('Y')) - 2011] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
}



