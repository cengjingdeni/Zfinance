@extends('lay')
@section('content')
<br>
<style>
    #page {
        width: auto;
    }
    #comm-header-inner, #content {
        width: 950px;
        margin: auto;
    }
    #logo {
        padding-top: 26px;
        padding-bottom: 12px;
    }
    #header .wrap-box {
        margin-top: -67px;
    }
    #logo .logo {
        position: relative;
        overflow: hidden;
        display: inline-block;
        width: 140px;
        height: 35px;
        font-size: 35px;
        line-height: 35px;
        color: #f40;
    }
    #logo .logo .i {
        position: absolute;
        width: 140px;
        height: 35px;
        top: 0;
        left: 0;
        background: url(http://a.tbcdn.cn/tbsp/img/header/logo.png);
    }
</style>
<style>
        * { margin: 0;padding: 0; list-style: none;box-sizing: border-box;  }
        .click_pop {display: block;height: 40px;width: 160px;margin: 100px auto;line-height: 40px;text-align: center;
                          border-radius: 20px;background-color: #60A1C9;color: #fff;font-weight: bold;text-decoration: none;}
        .bgPop{ display: none;position: absolute;z-index: 9;left: 0;top: 0;width: 100%;height: 100%;background: rgba(0,0,0,.2);  }
        .pop {  display: none;width: 500px;height: 300px;position: absolute; top: 0;left: 0;bottom: 0;right: 0;margin: auto;padding: 50px;
                  z-index: 10;border-radius: 35px;background-color: #ffe; box-shadow: 0 3px 18px rgba(0, 0, 0, .5); }
        .cancel, .ok {  position: absolute;bottom: 30px;left: 280px;width: 80px;height: 30px;
                               border: none;border-radius: 15px;background-color: #00BA98;color: #fff;cursor:pointer; }
        .cancel {  background-color: #999;left: 150px;   }
        input:focus{outline:none}
</style>
<div id="page">
    <div id="content" class="grid-c">
        <form id="J_Form" name="J_Form" action="" method="post">
            <h3 class="dib">确认订单信息</h3>
              <table cellspacing="0" cellpadding="0" class="order-table" id="J_OrderTable" >
                  <thead>
                    <tr>
                        <th class="s-title">订单名称<hr/></th>
                        <th class="s-price">单价(元)<hr/></th>
                        <th class="s-agio">是否使用优惠<hr/></th>
                        <th class="s-total">总计<hr/></th>
                    </tr>
                  </thead>
              <tbody data-spm="3" class="J_Shop" data-tbcbid="0" data-outorderid="47285539868" data-isb2c="false" data-postMode="2" data-sellerid="1704508670">
                  <tr class="first">
                      <td colspan="5"></td>
                  </tr>
                  <tr class="shop blue-line">
                      <td colspan="3">
                          所购买计划：优选计划
                      </td>
                      <td colspan="2" class="promo">
                          <div>
                              <ul class="scrolling-promo-hint J_ScrollingPromoHint"></ul>
                          </div>
                      </td>
                  </tr>
                  <tr class="item" data-lineid="19614514619:31175333266:35612993875" data-pointRate="0">
                      <td class="s-title">
                          <a target="_blank" title="优选计划" class="J_MakePoint">
                              <div class="props">
                                  <span class="mi"></span>
                              </div>
                          </a>
                      </td>
                      <td class="s-price">
                          <span class='price dan'></span>
                      </td>
                      <td class="s-agio">
                          <div class="J_Promotion promotion">
                              <input type="radio" class="coupon" name="hy" value="0" checked="checked">不使用优惠
                       <!--        <input type="radio" class="coupon" name="hy" value="1">红包
                              <input type="radio" class="coupon" name="hy" value="2">优惠劵 -->
                          </div>
                          <div class="phoenix">
                              
                          </div>
                      </td>
                      <td class="s-total">
                                <span>&yen;</span>
                          <span class="ding"></span>
                      </td>
                  </tr>
                  <tr class="shop-total blue-line">
                      <td colspan="5">订单合计
                            <span class='price g_price '>
                                <span>&yen;</span>
                                <span class="ding"></span>
                            </span>
                      </td>
                  </tr>
              </tbody>
              <tfoot>
                  <tr>
                      <td colspan="5">
                          <div class="kd-popup pop-back" style="margin-bottom: 40px;margin-top: 40px;">
                              <a id="J_Go" class="btn-go but"  tabindex="0" title="点击此按钮，提交订单。">提交订单
                                  <b class="dpl-button"></b>
                              </a>
                          </div>
                      </td>
                  </tr>
              </tfoot>
          </table>
      </form>
      <!--遮罩层-->
 <div class="bgPop"></div>
<!--弹出框-->
 <div class="pop">
    <!-- <p> -->
        <table border="1">
          <tr>
            <td>消费总额：</td>
            <td><span class="zong"></span></td>
          </tr>
          <tr>
            <td>实际金额</td>
            <td><span class="shi"></span></td>
          </tr>
          <tr>
            <td>所选优惠：</td>
            <td><span class="tu"></span></td>
          </tr>
          <tr>
            <td>优惠金额：</td>
            <td><span class="hui"></span></td>
          </tr>
        </table>
    <!-- </p> -->
    <input type="button" value="Cancel" class="cancel"/>
    <input type="button" value="OK" class="ok"/>
 </div>
  </div>
</div>
<script>
  $(function(){
    var telephone = localStorage.getItem("telephone");
    var mount = localStorage.getItem("mount");
    var you = localStorage.getItem("you");
    $(".mi").text(you);
    $(".dan").text(mount);
    $(".ding").text(mount);
    localStorage.setItem("hongbao","0");
    $(".coupon").click(function(){
        var coupon = $("input[type='radio']:checked").val();
        if(coupon==0){
          $(".ding").text(mount);
          $(".phoenix").html('');
          localStorage.setItem("hongbao","0");
          localStorage.setItem("sub",'0');
        }else if(coupon==1){
          $(".ding").text('');
            $.ajax({
              type: "GET",
              url: "http://www.finance.com/kimen/coupon",
              data: {coupon:coupon,telephone:telephone},
              success: function(msg){
                if(msg==""){
                  alert("您無法使用紅包");
                  location.reload();
                }
                var str = "";
                $.each(msg,function(k,v){
                  str+="<input type='radio' class='sub' name='hy' value='"+v.mount+"'>"+v.mount+"￥";
                });
                $(".phoenix").html(str);
                localStorage.setItem("hongbao","0");
              }
            });
        }else{
            $(".ding").text('');
            $.ajax({
              type: "GET",
              url: "http://www.finance.com/kimen/coupon",
              data: {coupon:coupon,telephone:telephone},
              success: function(msg){
                if(msg==""){
                  alert("您無法使用優惠劵");
                  location.reload();
                }
                var str = "";
                $.each(msg,function(k,v){
                  str+="<input type='radio' class='sub' name='hy' value='"+v.quota+"'>"+v.quota+"￥<br />";
                });
                $(".phoenix").html(str);
                localStorage.setItem("hongbao","0");
              }
            });
        }
    });
    $(document).on('click','.sub',function(){
      var sub   = $("input[type='radio']:checked").val();
      var stand = mount-sub;
      localStorage.setItem("sub",sub);
      localStorage.setItem("shi",stand);
      $(".ding").text(stand);
    });
          $('.but').click(function () {
              $('.bgPop,.pop').show();
              var zong = localStorage.getItem("mount");
              var tu = localStorage.getItem("hongbao");
              var hui = localStorage.getItem("sub");
              $(".zong").text(zong);
              $(".shi").text(zong);
              if(tu=="0"){
                $(".tu").text("没有优惠");
              }else if(tu=="1"){
                $(".tu").text("红包优惠");
              }else{
                $(".tu").text("优惠劵优惠");
              }
              $(".hui").text('0');
          });
          $('.cancel').click(function () {
              $('.bgPop,.pop').hide();
          });
          $('.ok').click(function () {
              var zong = localStorage.getItem("mount");
              var shi = localStorage.getItem("shi");
              var money = localStorage.getItem("money");
              var tu = localStorage.getItem("hongbao");
              var hui = localStorage.getItem("sub");
              $.ajax({
                url:'http://www.finance.com/kimen/teemo',
                type:'GET',
                data:{zong:zong,shi:shi,tu:tu,hui:hui,telephone:telephone,money:money},
                success:function(msg){
                  if(msg=="0"){
                    alert("支付失败");
                    location.href="http://www.finance.com/kimen/norder";
                  }else{
                    alert("支付成功");
                    location.href="http://www.finance.com/kimen/order";
                  }
                }
              });
          });
  });
</script>
@stop