<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="_token" content="{!! csrf_token() !!}"/>
	<title>Document</title>
</head>
<body>
<center>
	<!-- <form> -->
		<table>
		<h2><font color="red">请先充值</font></h2>
			<tr>
				<td>充值金额</td>
				<td><input type="text" class="money" name="money"></td>
			</tr>
			<tr>
				<td>选择支付方式</td>
				<td>
					<input type="radio" name="payType" value="1">支付宝
					<input type="radio" name="payType" value="2">微信
					<input type="radio" name="payType" value="3">银行卡
				</td>
			</tr>
			<tr>
				<td><button class="btn">确认充值</button></td>
			</tr>
		</table>
	<!-- </form> -->
</center>
</body>
</html>
<script type="text/javascript" src="./js/jquery-3.1.1.js"></script>
<script type="text/javascript">
	$('.btn').click(function(){
		var money = $('.money').val();
		var payType  = $('input[name="payType"]:checked').val(); 
		// alert(money);
		$.ajax({
       		type: "POST",
       		url: "{{url('rechargeadds')}}",
       		data: {money:money,payType:payType},
       		success: function(msg){
       			if(msg == '1') {
       				alert('充值成功');
       				location.href="{{url('home/shouye')}}";
       			}
       		}
    	});
	})
</script>
<script type="text/javascript">
	$.ajaxSetup({
		headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
	});
</script>