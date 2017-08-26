@extends('lay')
@section('content')
<br>
    <script type="text/javascript" src="{{URL::asset('/')}}home/js/style-table.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="{{URL::asset('/')}}home/css/css-table.css" />

<center>
    <table id="travel">
        <thead>    
            <tr>
                <th scope="col" rowspan="2">订单编号</th>
                <th scope="col" colspan="6">订单信息</th>
            </tr>
            <tr>
                <!-- <th scope="col">订单ID</th> -->
                <th scope="col">订单用户</th>
                <th scope="col">订单状态</th>
                <th scope="col">订单金额</th>
                <th scope="col">收益</th>
                <th scope="col">免息时间</th>
                <th scope="col">提现</th>
            </tr>        
        </thead>
        <tbody class="box"></tbody>
    </table>
</center>
<script>
    var telephone = localStorage.getItem("telephone");
     $.ajax({
        url:'http://www.finance.com/kimen/listing',
        type:'GET',
        data:{telephone:telephone},
        success:function(msg){
            var str = "";
            $.each(msg,function(k,v){
                str+='<tr>';
                str+='<th scope="row">'+v.nu_sn+'</th>';
                // str+='<td>'+v.nb_id+'</td>';
                str+='<td>'+v.telephone+'</td>';
                str+='<td>已支付</td>';
                str+='<td>'+v.price+'</td>';
                str+='<td>'+v.money+'</td>';
                str+='<td>'+v.z_time+'</td>';
                str+='<td><a href="htttp://www.finance.com/kimen/withdrawals?price='+v.price+'&money='+v.money+'&z_time='+v.z_time+'&nu_sn='+v.nu_sn+'">提现</a></td>';
                str+='</tr>';
            });
            $('.box').html(str);
        }
      });
</script>
@stop