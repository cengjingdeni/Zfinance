<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<center>
	<h2><font color="red">请选择支付方式</font></h2><hr>
	<table border="1">
		<tr>
			<td>
			<div id="wrap">
				微信支付：<input type="radio"  name="sex" value="1" > | 
				 支付宝支付：<input type="radio" name="sex" value="2" > | 
			     银行卡支付：<input type="radio" name="sex" value="3" > 
			</div>
			</td>
		</tr>
	</table>
	<button class="btns" style="margin-top:20px;height:50px;width:120px;font-size:20px;color:#666">点击支付</button>
</center>
	
</body>
</html>
<script type="text/javascript" src="./js/jquery-3.1.1.js"></script>
<script type="text/javascript">
$('.btns').click(function(){
	var names = $('#wrap input[name="sex"]:checked ').val();
	// alert(names);
	if (names == '1') {
		window.location.replace("{{url('weChat')}}");
	} else if(names == '2') {
		window.location.replace("{{url('payzfb')}}");
	} else if(names == '3') {
		window.location.replace("{{url('bankCard')}}");
	} else {
		alert('请选择支付方式');
	}
})
	// $.ajax({
 //       type: "POST",
 //       url: "http://www.interface.com/public/paymentMethod",
 //       // data: {},
 //       success: function(msg){
 //         alert(msg);
 //       }
 //    });
</script>