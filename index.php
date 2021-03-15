<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Random</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<div id="container">
			  <div class="card card1"><img src="images/1.jpg" width="100%"/></div>
			  <div class="card card2"><img src="images/2.jpg" width="100%"/></div>
			  <div class="card card3"><img src="images/3.jpg" width="100%"/></div>
			</div>
			<div class="cards"></div>
			<div id="kq" class="text-center"></div>
			<div id="coupon" class="text-center"></div>
			<div id="btnXem" class="text-center">Chạm để xem kết quả</div>
			<button type="button" id="btnVoucher">Nhận mã Voucher</button>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script id="rendered-js">
		setTimeout(function(){
			  $('#container').toggleClass('spread');
		}, 500);

		$('.cards').hide();

		$("#btnXem").click(function(){
			$("#btnXem").hide();
			$("#container").hide();
			$("#coupon").hide();
			$("#kq").hide();
			$('.cards').show();

			var items = [1,2,3];
			var item = jQuery.rand(items);
			if(item){
				setTimeout(function(){
					$("#kq").show();
					$("#kq").html('<img src="images/Card'+item+'.png" width="100%">');
					$(".cards").hide();
					$("#btnVoucher").show();
				}
					, 1000);
			}
		});


		(function($) {
		    $.rand = function(arg) {
		        if ($.isArray(arg)) {
		            return arg[$.rand(arg.length)];
		        } else if (typeof arg === "number") {
		            return Math.floor(Math.random() * arg);
		        } else {
		            return 4;  // chosen by fair dice roll
		        }
		    };
		})(jQuery);

		$("#btnVoucher").click(function(){
			var num = $(".count").val() ? $(".count").val() : 5,
   		    len = $(".length").val() ? $(".length").val() : 5;
	   		var kq = makeid(5);
			$("#coupon").show();
			$("#coupon").html("Mã voucher: " + kq);
			$("#btnVoucher").hide();
		});



		function makeid(length) {
		   var result           = '';
		   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		   var charactersLength = characters.length;
		   for ( var i = 0; i < length; i++ ) {
		      result += characters.charAt(Math.floor(Math.random() * charactersLength));
		   }
		   return result;
		}

		window.addEventListener("DOMContentLoaded", function() {
		     alert(0)
		});

		</script>
	</body>
</html>
