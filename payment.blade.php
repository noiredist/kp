<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, maximum-scale=1.2" >
	<title>Food Car</title>
  <script src="js/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	 <!-- =======jQuery載入========================================= -->
    <script type="text/javascript" src="{{ mix('js/checksessionexpire.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/jquery.shop_food.js') }}"></script>
	  <link rel="stylesheet" href="css/payment_style_1080606.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-124756195-1', 'auto');
    ga('send', 'pageview', location.pathname);
  </script>
</head>
<body style="overflow-x:hidden">
	<div class="couponSection">
		<div class="title_wrapper">
		   <a class="back_btn"></a>
		   <h4>優惠</h4>
		</div>
		<div class="serial_wrapper">
		<ul class="discount_list pd_0 margin_auto wd_90">
		<li class="offer_number">
                    <form id="coupon_form">
                        <div class="form-group">
                            <input name="" class="form-control noframe" id="coupon_num" placeholder="請輸入優惠碼">
                            <a type="button" class="buttEnable" id="using_discount" disabled="disabled" value="兌換" data-click="0" style="color: rgb(51, 51, 51);">兌換</a>

                            <div class="coupon" id="delete_discount" style="display:none">
                                <div class="coupon__tag">
                                  ✶ Coupon ✶
                                </div>
                                <div class="coupon__body">
                                  <div class="coupon__title" id="coupon_content"></div>
                                  <div class="coupon__value" id="coupon_value" style="display:none;"><strong></strong></div>
                                  <div class="coupon__deadline" id="coupon_deadline"></div>
                                </div>

                            
                            <input type="button" class="buttEnable" onclick="CouponDelete()" value="先不使用優惠" id="couponDelete">
                            </div>
                        </div>
                    </form>
                </li>
	     </ul>
	   </div>
	   <div class="coupon_wrapper">
		<ul>
		  <li>
		    <div class="coupon_ticket">
			<div class="coupon_title">
			  RW468D - 開幕見面禮
			</div>
			<div class="expired_date">有效期限：2020/05/20</div>
			<div class="select_wrapper">
			<div class="discount_info">滿60折10</div>
			<input type="checkbox" id="select_checkbox" class="select_checkbox" style="margin-left: 10px">
			<label class="forSelect" for="select_checkbox">
			<span></span>
			</label>   
			</div>
		    </div>
		  </li>
		</ul>
	    </div>
	   <div class="apply_btn">
		<span>使用優惠</span>
 	   </div>	
	</div>
	<div class="wrapper" style="height: fit-content;">

		<div class="main_bg"></div>

		<!-- Start header -->
		<div class="space"></div>

		<div class="header">
			<div class="payment_title">結帳資訊</div>
			<!-- <div class="close_box">
				<a href="restaurant_menu.html" style="text-decoration:none">
					<div class="close">
						<div class="close_bar bar1"></div>
						<div class="close_bar bar2"></div>
					</div>
				</a>
			</div> -->
		</div>

		<div class="shop_items"></div>

		<!-- End dish_list -->


    <!-- start session expire-->
        <div class="modal fade" id="SessionExpiredModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="SessionExpiredModal">已過點餐時間</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                已過點餐時間 無法付款
              </div>
              <!-- <div class="modal-footer">
                <div style="width:50%; border-right:1px solid #e9ecef"><button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_button" style="width:100%">取消</button></div>
                <div style="width:50%"><button type="button" class="btn btn-primary" id="clearcart_button" style="width:100%">切換站點</button></div> -->
              </div>
            </div>
          </div>

    <!-- End session expire-->

    <!-- Start setting -->
    <div class="check_setting">
        <div class="setting_title" id="service_percentage"></div>
        <div class="content" id="service_fee_price"></div>
    </div>
		<!-- <a href="#" style="text-decoration:none"> -->
		<div class="check_setting">
			<div class="setting_title">取餐位置</div>
			<div class="content" id="selectstation"></div>
		</div>
		<!-- </a> -->
		<!-- End setting -->
		<!-- Start discount_list -->


    <!--  <a href="#" style="text-decoration:none"> -->
    <!-- <a href="payment_way.html" style="text-decoration:none"> -->
		<div class="payway_setting" id="credit_pay" style="display:none">
			<div class="setting_title">付款方式</div>
			<div class="content">信用卡付款</div>
			<!-- <div class="action_arrow"></div>
			<img class="visa" src="img/visa.png" alt="">  -->
		</div>

        <div class="payway_setting" id="cash_pay" style="display:none">
            <div class="setting_title">付款方式</div>
            <div class="content">現金付款</div>
        </div>
		<!-- </a> -->
      <div class="discount_box">
          <div class="checkbox" style="margin-bottom:3px;">
          <label style="padding-left:3vw">
              <input type="checkbox" id="coupon_checkbox" value="" onclick="coupon_checkbox(this)" style="padding-left: 10px;"> 使用CheerLife優惠序號
              <!-- <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span> -->
              <!-- <span class="cr_title">提供點餐收據</span> -->
          </label>
          <div id="use_discount" style="display: none;">false</div>
          </div>

          <ul class="discount_list" style='list-style-type:none;'>
                <!-- <li class="uncheck">使用CheerLife Points
                    <div class="points">0</div>
                </li> -->

               <!--  <li class="uncheck" id="use_discount">使用CheerLife優惠序號</li> -->
                <li class="offer_number ">
                    <form id = "coupon_form">
                        <div class="form-group">
                            <!-- <input type="text" id="txtInput" placeholder="please input"></input> -->
                            <input name="" class="form-control" id="coupon_num"  placeholder="請輸入優惠碼" disabled="disabled"></input>
                            <!-- <button class="buttEnable" onclick="CouponSubmit()" disabled ="disabled">Submit</button> -->
                            <a type="button" class="buttEnable" id="using_discount" disabled='disabled' value="兌換" data-click="0">兌換</a>
          <!--  <div class="coupon_ticket" id="delete_discount" style='display:none'>
                                <div id="show_coupon_content">123</div>
                                <div id="show_coupon_deadline">456</div>
                                <input type="button" class="buttEnable" onclick="CouponDelete()" value="刪除優惠" id="couponDelete"></input>
                            </div> -->

                            <div class="coupon" id="delete_discount" style='display:none'>
                                <div class="coupon__tag">
                                  ✶ Coupon ✶
                                </div>
                                <div class="coupon__body">
                                  <div class="coupon__title" id="coupon_content"></div>
                                  <div class="coupon__value" id="coupon_value" style="display:none;"><strong></strong></div>
                                  <div class="coupon__deadline" id="coupon_deadline"></div>
                                </div>

                            
                            <input type="button" class="buttEnable" onclick="CouponDelete()" value="先不使用優惠" id="couponDelete"></input>
                            </div>
                        </div>
                        <!-- <div class="">
                            <div class="btn_offer_number_check"  data-toggle="modal" data-target="#alber_offer_number_check">兌換</div>
                        </div>  -->
                    </form>
                </li>
            </ul>
        </div>
        <!-- <div class="discount_box">
            <ul class="discount_list" style='list-style-type:none;'>
                <li class="uncheck">使用CheerLife Points
                    <div class="points">0</div>
                </li>
                <li class="uncheck">使用CheerLife優惠序號</li>
                <li class="offer_number ">
                    <form>
                        <div class="form-group">
                            <input name="" class="form-control" id="name"  value="" disabled="disabled">
                            <input name="" class="form-control" id="name"  placeholder="請輸入優惠序號">
                        </div>
                        <div class="">
                            <div class="btn_offer_number_check"  data-toggle="modal" data-target="#alber_offer_number_check">兌換</div>
			                  </div>
                    </form>
                </li>
            </ul>
        </div> -->




		<!-- <div class="discount_box">
			<ul class="discount_list" style='list-style-type:none;'>
				<li class="uncheck">使用CheerLife Points<div class="points">200</div></li>
				<li class="checked">使用CheerLife優惠票卷</li>
				<li class=" "><div class="dropdown">
					  <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">選擇票券</button>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					  	<a class="dropdown-item" href="#">美食車-飲品兌換</a>
					    <a class="dropdown-item" href="#">美食車-飲品兌換</a>
				        <a class="dropdown-item" href="#">美食車-飲品兌換</a>
					  </div>
					</div></li>
			</ul>
		</div> -->
		{{--@if($payment=='credit')--}}
			<!-- <a href="invoice.html" style="text-decoration:none">
			<div class="invoic_setting">
				<div class="setting_title">電子發票</div>
				<div class="action_arrow"></div>
			</div>
			</a> -->
		{{--@endif--}}
    <!-- email setting -->                                                    
    <div class="item_wrapper">
        <div class="checkbox" style="margin-bottom:3px;">
        <label style="padding-left:0">
            <input type="checkbox" id="coupon_checkbox" value="" onclick="coupon_checkbox(this)" style="padding-left: 10px;"> 付款人email (*必填 將自動帶入付款頁)
        </label>
        </div> 
        <form id = "email_form">
            <div class="form-group">
             <input type="email" pattern="[0-9a-zAZNn._@-]{10,50}" class ="form-control" id="email_record" placeholder="訂單資訊通知信箱" value="{{ $email_old }}" required > 
             </div>                   
        </form>                                                                 
    </div>   
    <!-- email setting --> 
    <!-- voice setting -->
    <div class="voice_setting">
        <div class="checkbox">
          <label>
              <input type="checkbox" value="" onclick="need_receipt(this)">
              <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
              <span class="cr_title">提供點餐收據</span>
          </label>
          <div id="receipt_need" style="display: none;">false</div>
        </div>
    </div>
    <!-- voice setting -->

    <div class="total_price">
        <div class="totalprice_discount_title">優惠折抵</div>
        <div class="totalprice_discount_money" id="discount_price">$ 0</div>
    </div>

		<div class="total_price">
			<div class="totalprice_title">總計</div>
			<div class="totalprice_money" id="totalprice_money">$ 0</div>
		</div>
		<!-- End discount_list -->

		<!-- Start go_action -->
		<!-- <div class="container">
			<div class="row go_action">
				<div class="col-6 comfirm_sty" style="margin-left:4% ; margin-right:4%">
				<a href="/cart?token=123456" style="text-decoration:none">
					<div class="back_buttom">返回</div>
				</a>
				</div>

				<div class="col-6 paybutton comfirm_sty" id="paybutton">
					<div class="pay_buttom" id="pay_buttom"></div>
				</div>
			</div>
		</div> -->

    <div class="container">
        <div class="row" style="padding-top:2vw;padding-bottom:2vw;">
            <div class="col-6">
               <a href="/cart?token=123456" style="text-decoration:none;">
                  <div class="back_buttom">返回</div>
              </a>
              </div>
              <div class="col-6 paybutton" id="paybutton" style="max-width:48%;">
                  <div class="pay_buttom" id="pay_buttom" style="width:100%;"></div>
              </div>
        </div>
    </div>

		<!-- End go_action -->

        <form name='Spgateway' method='post' action='' id='Spgateway'>
            <input type='hidden' name='MerchantID' id='MerchantID' value=''>
            <input type='hidden' name='TradeInfo' id='TradeInfo' value=''>
            <input type='hidden' name='TradeSha' id='TradeSha' value=''>
            <input type='hidden' name='Version' id='Version' value=''>
            <input type='submit' value='Submit' id='to_pay' style='display: none;'>
        </form>



  </div>
    <div class="loading_modal"></div>


</body>
<script src="js/bootstrap.bundle.min.js" type="text/javascript" ></script>
</html>

<script>
$body = $("body");
//$(document).on({
    //ajaxStart: function() { $body.addClass("loading");  },
    // ajaxStop: function() { setTimeout(function() {
    //     $body.removeClass("loading");
    // }, 250); }
//});
 window.onload = function () {
        var u = navigator.userAgent;
  console.log(u);
        if (u.indexOf('Android') > -1 || u.indexOf('Linux') > -1) {//安卓手机
            //  拿到获取焦点的input
            let input = document.querySelector('input')
            input.addEventListener('focus', function () {
                setInterval(function () {
                // 核心
                    input.scrollIntoView(false);
                }, 200)
            })
        }
}
$(document).ready(function(){
	CheckSessionExpire()
  var service_fee =  {!! json_encode($service_fee)!!};
	displayPayment("from_cart","",service_fee);

    $('#using_discount').on('click',function(){
       if($(this).attr('disabled')!='disabled'){
            CouponSubmit();
        }else{
            return false;
        }
    });

    jQuery(document).ready(function() {
      jQuery('input').keypress(function(e) {
          var code = (e.keyCode ? e.keyCode : e.which);
          if ( (code==13) || (code==10))
              {
              jQuery(this).blur();
              return false;
              }
      });
    });

    if(window.sessionStorage.getItem("payment_type")=="credit"){
        document.getElementById("credit_pay").style.display = "block";
        document.getElementById("pay_buttom").textContent = "確認付款";
    }else{
        document.getElementById("cash_pay").style.display = "block";
        document.getElementById("pay_buttom").textContent = "確認訂單";
    }

    $.ajaxSetup({
        headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.paybutton').click(function(e){
      var cltoken = {!! json_encode($cltoken) !!};
      var path_name = {!! json_encode($path) !!};
      var value = window.sessionStorage.getItem("foodcar");
      var station = window.sessionStorage.getItem("station");
      var receipt = document.getElementById("receipt_need").textContent;
      var coupon_num = document.getElementById("coupon_num").value;
      var use_discount = document.getElementById("use_discount").textContent;
			var menu = window.sessionStorage.getItem("menu");
      var email = document.getElementById("email_record").value;

      if (email == ''){
        alert("請填寫付款人Email");
        return;
      } else if (email.search(/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/)!=-1) {
        
      } else {
        alert("Email格式錯誤，請重新輸入！");
        return;
      }

      CheckSessionExpire()
      e.preventDefault();
      $(this).attr("disabled", "disabled");
      $("#using_discount").attr("disabled","disabled").css({'background':'#c3c3c3','color':'#f2f2f2'});
      $body.addClass("loading");
      
      //for Coupon
      var coupon_num = document.getElementById("coupon_num").value;
      var coupon_button = document.getElementById('using_discount');
      // Get the values
      var coupon_click = coupon_button.getAttribute('data-click');
      if(coupon_click == "0")
        coupon_num = "";


      if (window.sessionStorage.getItem('order_number') != null){
      	//alert("pay_failed");
        var payment_status = "pay_failed";
        var order_number = window.sessionStorage.getItem('order_number');
        data = {'data' : value,'station': station,'payment_status':payment_status,'coupon_number':coupon_num,'order_number':order_number,'cltoken':cltoken,'path_name':path_name,"receipt":receipt,"menu":menu,'email':email};
      }else{
        var payment_status = "from_cart";
        data = {'data' : value,'station': station,'payment_status':payment_status,'coupon_number':coupon_num,'cltoken':cltoken,'path_name':path_name,"receipt":receipt,"menu":menu,'email':email};
      }

      $.ajax({
              method: 'post',
              url: '/orderpost?token=123456',
              data: data,
              tryCount : 0,
              retryLimit : 3,
              beforeSend : function(xhr, opts){
                  var now = new Date();
                  var ts_date = new Date(window.sessionStorage.getItem('timestamp')*1000);
                  if(now.getTime() > ts_date.getTime()){  //just an example
                    $('#SessionExpiredModal').modal('show');
                    $body.removeClass("loading");
                    xhr.abort();
                  }
              },
              success:function(response) {
                window.sessionStorage.setItem('order_number',response.number)
                  if (response.payment_type=="cash"){
                    window.location.assign("/order?token=123456&number="+response.number);
                  }else{
                      //pass to spgateway
                      //alert("no redirect~ pass to spgateway");
                      if (response.spga_status == 1) {
                            setTimeout(function() {
                              $body.removeClass("loading");
                            }, 750);

                            $('#Spgateway').attr('action', response.spga_url);
                            $('#MerchantID').val(response.member_chant_id);
                            $('#TradeInfo').val(response.trade_info);
                            $('#TradeSha').val(response.trade_sha);
                            $('#Version').val(response.version);
                            document.forms["Spgateway"].submit();
                      } // end if
                      else {
                          alert('Get Spgateway data error.');
                          $body.removeClass("loading");
                      } // end else
                  }
                },
              error: function (xhr) {
                    if (window.sessionStorage.getItem('order_number') != null){
                      var payment_status = "pay_failed";
                      var order_number = window.sessionStorage.getItem('order_number');
                      data = {'data' : value,'station': station,'payment_status':payment_status,'order_number':order_number,'cltoken':cltoken,'path_name':path_name};
                    }
                    this.tryCount++;
                    if (this.tryCount <= this.retryLimit) {
                        //try again
                        this.data = data;
                        $.ajax(this);
                        return;
                    }
                   $body.removeClass("loading");
                   alert('網路不穩定! 請再試一次');
                   location.reload();
              }
              //error: function(xhr, status, error) {
              //  var err = eval("(" + xhr.responseText + ")");
              //  alert(err.Message);
              //}
        });
  });


})
</script>


<script type="text/javascript">

function CouponSubmit()
{
  var coupon_number = $('#coupon_num').val();
  var value = window.sessionStorage.getItem("foodcar");
  var station = window.sessionStorage.getItem("station");
  var path_name = {!! json_encode($path) !!};
  var cltoken = {!! json_encode($cltoken) !!};
  var from_page = "pay";
  var total_p = parseInt(window.sessionStorage.getItem("food_car_total")) + parseInt(document.getElementById("service_fee_price").textContent.split("$ ")[1]);
  $("#using_discount").attr("disabled","disabled").css({'background':'#c3c3c3','color':'#f2f2f2'});
  $(".discount_box").addClass("coupon_added");
  $.ajax({
        method: 'post',
        url: '/coupon_redeem?token=123456',
        data: {'from_page':from_page,'coupon_number' : coupon_number, 'data' : value, 'station': station,'cltoken':cltoken,'path_name':path_name},
        success:function(response) {
            if (response.result =="success"){
                 alert(" (優惠內容)"+response.coupon_name+" 使用期限" +response.deadline);
                 price_with_coupon = total_p - response.discount
                 coupon_reedem_price(response.discount,price_with_coupon);
                 //change dicsount input disable
                 coupon_reedem_change_status(response.coupon_name,response.discount,response.deadline);
            }else{
                 coupon_reedem_price(response.discount,total_p);
                 alert(response.coupon_name);
            }
        },
        error: function (xhr) {
            coupon_reedem_price(response.discount,total_p);
            alert("網路連線錯誤");
        }
    });
}

function CouponDelete(){
    reset_discount_info();
    document.getElementById("coupon_num").disabled = false;
    $('#coupon_num').css('display','block');
    $('#using_discount').css('display','block');
    $(".discount_box").removeClass("coupon_added");
}
</script>


<script>
$('#coupon_num').on("blur", function(){
    if($(this).val().length > 0 ){
        $("#using_discount").attr("disabled",false).css({'background':'#FFEB64','color':'#333'});
    }
    else{
        $("#using_discount").attr("disabled","disabled").css({'background':'#c3c3c3','color':'#f2f2f2'});
    }
});

$('#coupon_num').on("keyup",function(){
    if($('#coupon_num').val() != ""){
        $("#using_discount").attr("disabled",false).css({'background':'#FFEB64','color':'#333'});
    }
    else{
        $("#using_discount").attr("disabled","disabled").css({'background':'#FFEB64','color':'#333'});
    }
});
</script>

<script>
    function need_receipt(chkReceipt) {
        result = chkReceipt.checked ? "check" : "not check";
        if(result == "check"){
          document.getElementById("receipt_need").textContent = true;
        }else{
          document.getElementById("receipt_need").textContent = false;
        }
        //alert(result);
    }
    document.getElementById("coupon_num").disabled = false;
    document.getElementById("use_discount").textContent = true;

    function coupon_checkbox(chkCoupon) {
        result = chkCoupon.checked ? "check" : "not check";
        if(result == "check"){
          document.getElementById("coupon_num").disabled = false;
          document.getElementById("use_discount").textContent = true;
        }else{
          //alert("不使用優惠券");
          reset_discount_info();
          document.getElementById("use_discount").textContent = false;
        }
        //alert(result);
    }
    function reset_discount_info(){
        var total_p = parseInt(window.sessionStorage.getItem("food_car_total")) + parseInt(document.getElementById("service_fee_price").textContent.split("$ ")[1]);
        var coupon_button = document.getElementById('using_discount');
        coupon_button.setAttribute('data-click', "0");
        document.getElementById("coupon_num").disabled = true;
        document.getElementById("delete_discount").style.display = "none";
        document.getElementById("coupon_form").reset();
        document.getElementById("use_discount").textContent = false;
        document.getElementById("discount_price").textContent = "$ 0";
        document.getElementById("totalprice_money").textContent = "$ "+ total_p;
        $("#using_discount").attr("disabled","disabled").css({'background':'#c3c3c3','color':'#f2f2f2'});
    }
    function coupon_reedem_change_status(content,discount,deadline) {
        document.getElementById("delete_discount").style.display = "block"; //show delete button
        document.getElementById("coupon_num").disabled = true;
        document.getElementById("using_discount").disabled = true;
        document.getElementById("coupon_content").textContent = content;
        document.getElementById("coupon_value").textContent = "$ "+discount;
        document.getElementById("coupon_deadline").textContent = "截止: "+deadline;
        var coupon_button = document.getElementById('using_discount');
        coupon_button.setAttribute('data-click', "1");
        $('#coupon_num').css('display','none');
        $('#using_discount').css('display','none');
    }
    function coupon_reedem_price(discount,final_price){
        document.getElementById("discount_price").textContent = "$ "+ discount;
        document.getElementById("totalprice_money").textContent = "$ "+ final_price;
    }

    $("form").keypress(function(e) {
      //Enter key
      if (e.which == 13) {
        return false;
      }
    });

    $("form").keypress(function(e) {
      //Enter key
      if (e.which == 13 || e.which == 10) {
        return false;
      }
    });

</script>

<style>
.form-group {
    margin-bottom: 0;
}
.form-control{
height: 45px;
font-size:16px;
}
input::-webkit-input-placeholder { /* WebKit browsers */
  line-height: 1.7em;
}
input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
  line-height: 1.7em;
}
input::-moz-placeholder { /* Mozilla Firefox 19+ */
  line-height: 1.7em;
}
input:-ms-input-placeholder { /* Internet Explorer 10+ */
  line-height: 1.7em;
}
#coupon_num::placeholder{
  font-size: 15px; 
  color: #999;	
}
.discount_list{
    list-style-type: none;
}
.pd_0{
    padding: 0;	
}
.margin_auto{
    margin: 0 auto;
}
.wd_90{
    width: 90%;
}
.noframe{
    outline; none;
    border: none;
    box-shadow: none;
    display: flex;		
    background: #fafafa;	
}
.couponSection{
    background: #fafafa;
    width: 100vw;
    height: 100vh;
    /* transform: translate3d(0,0,0); */
    z-index: 999;
    /* transform: translate3d(100vw,0,0); */
    transition: all ease .2s;
    position: fixed;
}
.couponSection:before{
    content: "";
    width: 100vw;
    height: 22vh;
    display: block;
    background: #ffffff;
    position: absolute;
    z-index: -100;
    box-shadow: 0px 2px 8px 0px rgba(125,125,125,.1);	
}
.form-control:focus {
    border: none;
    box-shadow: none;
    background: #fafafa;	
}
.coupon_wrapper{
    position: absolute;
    top: 22vh;
    width: 100%;
}
.coupon_wrapper ul{
    margin-top: 10px;
    padding-left: 0;
}
.coupon_wrapper li{
    list-style-type:none;		
    margin-bottom: 8px 
}
.title_wrapper{
    display: flex;	
    justify-content: center;
    padding:10px;	
}
.title_wrapper h4{
    padding; 10px;	
}
.expired_date{
    text-align: center;
    font-family: Helvtica;
    font-size: 14px;
    color: #999;
    padding-bottom: 4px;
    position: absolute;
    bottom: 0;
}
.coupon_title{
   font-size: 1.1em;
   text-shadow: 1px 2px 0 white;
   color: #666;
   font-weight: bold;
   width: 65%;	
   line-height: 1.3;		
}
.coupon_ticket{
    background: #fff;
    width: 94%;
    height: 80px;
    padding: 10px 18px;
    position: relative;
    /* box-shadow: 0 2px 10px 2px rgba(0,0,0,.06); */
    margin-top: 10px;
    margin: 0 auto;
}
.select_wrapper{
   position: absolute;
   right:20px;
   top: 10px;
}
.select_wrapper:before {
    content: " ";
    position: absolute;
    border: 1px solid #ededed;
    width: 1px;
    height: 60px;
    display: block;
    left: -20px;
}
.back_btn{
   position: absolute;
   top: 10px;
   left: 10px;
}
.select_checkbox{
    -webkit-appearance: none;
    background: navajowhite;
    border: 1px solid coral;
    border-radius: 6px;
    /* padding: 3px 20px; */
    color: crimson;
    background: none;
    border: 1px solid #bdbdbd;
    height: 25px;
    width: 25px;
    margin-top: 10px;
    margin-left: 10px; 
    top: 5px;
}
.forSelect{
   position: absolute;
   top: 0%;
   display: block;
   z-index: 90;
   border: 10px solid transparent;
   width: 100%;
   margin-left: 10px;	
   margin-top: 5px;
}
.forSelect:focus{
   outline: none;	
}
.discount_info{
   color: coral;	
   font-size: 15px;
}
input[type=checkbox]:focus{
  outline: none;  	
}
.forSelect span{
   position: relative; 
   top: 20px;	
   left: -1px;
}
.forSelect span:before,.forSelect span:after{
    display: block;
    content: " ";
    position: absolute;
    width: 25px;
    top: 5px;
    height: 3px;
    /*background-color: #343a40;*/
    background: #fff;	
    visibility: hidden;
}
.select_checkbox:checked{
   background: #FFEB64;
   border-color: #FFEB64;		
}
.select_checkbox:checked ~ .forSelect span:before{
    visibility: visible;
    transform: rotate(-45deg);
    /* left: 3px; */
    width: 15px;
    /* top: 9px; */
}
.select_checkbox:checked ~ .forSelect span:after{                                                                                                                                                        
    visibility: visible;
    transform: rotate(45deg);
    left: -3px;
    width: 6px;
    top: 8px;
}
.apply_btn{   
    background: rgb(255, 235, 100);
    color: rgb(51, 51, 51);
    /* margin-top: 50px; */
    padding: 14px;
    /* border-radius: 50px; */
    position: fixed;
    width: 100vw;
    bottom: 0;
    text-align: center; 
}
.buttEnable{
    background: rgb(255, 235, 100);
    color: rgb(51, 51, 51);
    font-weight: bold;
    font-size: 14px;
}
</style>
