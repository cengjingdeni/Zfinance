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
                <th scope="col">订单ID</th>
                <th scope="col">订单用户</th>
                <th scope="col">订单状态</th>
                <th scope="col">订单金额</th>
                <th scope="col">所属优惠</th>
                <th scope="col">支付</th>
            </tr>        
        </thead>
        <tbody>
            <tr class="box"></tr>
        </tbody>
    </table>
</center>
<script>
    var telephone = localStorage.getItem("telephone");
    // alert(telephone)
     $.ajax({
        url:'http://www.finance.com/kimen/nlisting',
        type:'GET',
        data:{telephone:telephone},
        success:function(msg){
            var str = "";
            $.each(msg,function(k,v){
                str+='<th scope="row">'+v.nu_sn+'</th>';
                str+='<td>'+v.nb_id+'</td>';
                str+='<td>'+v.telephone+'</td>';
                str+='<td>支付失败</td>';
                str+='<td>'+v.price+'</td>';
                str+='<td>'+v.code+'</td>';
                str+='<td><a href="http://www.finance.com/alipay?nu_sn='+v.nu_sn+'">去支付</a></td>';
            });
            $('.box').html(str);
        }
      });
</script>
@stop