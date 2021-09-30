function nomal() {
  var price = '<div class="price">'+
								'<p><span>Total:  </span> <strong>$<b>19</b>.85</strong></p>'+
								'<a href="#" class="buybtn"><strong>Buy Now</strong> <span><i class="all-icons"></i></span></a>'+
								'</div>'
	if($(".banner .message .coupon").length > 0){
		$('.banner .message .coupon').after(price);
	}
	else {
		$('.banner .message dl').after(price);
	}
}
function fltect() {
	$(".floatlayer .message h2").html("Buy Now with <span>$55 OFF</span>")
	$(".floatlayer .message p").html("Today Only")
}
function coupon() {
	var coupon = '<div class="coupon">'+
								'<p><span>Subtotal</span> <cite>$74.85</cite></p>'+
								'<p><span>Gift voucher</span> <cite class="red">-$55</cite></p>'+
								'</div>'
	$('.banner .message dl:last').after(coupon);
}
function nomessage() {
	$(".banner .message div,.banner .message dl").remove()
	var nomessage = '<div><span class="img-box"></span><h4>Your cart is empty.</h4><p><i class="all-icons"></i> choose your product now</p></div>'
  $('.banner .message h3').after(nomessage);
  $(".banner .message").addClass("nomessage");

}
function dbmessage() {
	var dbbox = '<dl data-name="db"><dt>'+
								'<span>Driver Booster 7 PRO</span> <em>$</em>74.85 <i class="all-icons close" ></i></dt>'+
								'<dd>1 year subscription, 3 PCs</dd>'+
							'</dl>'
	if($(".banner .message dl").length > 0){
		$('.banner .message dl:last').after(dbbox);
	}
	else {
		$('.banner .message h3').after(dbbox);
	}
	$(".banner .change .db .add-img").removeClass("hide");
}
function dbprice() {
	$(".floatlayer").addClass("one-box").removeClass("two-box").removeClass("sm-box").removeClass(".three-box");
	$(".floatlayer .sm-box,.floatlayer .pf-box,.floatlayer del").addClass("hide");
	$(".floatlayer .db-box").removeClass("hide");
	fltect();

	$(".banner .message .coupon cite:first").html("$74.85");
	$(".banner .message .price p strong,.floatlayer .price li> strong").html("$<b>19</b>.85")
	$('.buybtn').attr('href','https://www.iobit.com/buy.php?product=db1985&ref=db63pcty&aff=' + aff + '&refs=purchase_db&tw=' + tw);
	$('.buybtn').attr('onclick',"ga( ‘send', ‘event’, ‘dbbuy’, ‘buy’, ‘dbpurchase-thankyou’)");
}
function pfmessage() {
	var pfbox = '<dl data-name="pf"><dt>'+
								'<span>Protected Folder</span> <em>$</em>39.95 <i class="all-icons close" ></i></dt>'+
								'<dd>1 year subscription, 1 PC</dd>'+
							'</dl>'
	if($(".banner .message dl").length > 0){
		$('.banner .message dl:last').after(pfbox);
	}
	else {
		$('.banner .message h3').after(pfbox);
	}
}
function pfprice() {
	$(".floatlayer").addClass("one-box").removeClass("two-box").removeClass("sm-box").removeClass(".three-box");
	$(".floatlayer .message").addClass("addgift");
	$(".floatlayer .pf-box").removeClass("hide");
	$(".floatlayer .message h2").html("Spend $15.05 more to get $55 OFF <i class='all-icons'></i>")
	$(".floatlayer .message p").html("<span class='clickadd'></span>Add Protected Folder for $22.95").addClass("addclick")
	$(".floatlayer .db-box,.floatlayer .sm-box,.floatlayer .price del").addClass("hide");
	var addgift = '<div class="addcoupon">'+
								'<p>Spend $15.05 more, get $55 OFF <i class="all-icons"></i></p>'+
								'<div class="add addclick"><span class="clickadd"><i></i></span>Add Start Menu 8 PRO for $22.95</div>'+
							'</div>'
	
	
	$('.banner .message .price p').after(addgift);
	$(".banner .message .coupon").remove();
	$('.banner .message').addClass("giftchange");
	$(".banner .message .price p strong,.floatlayer .price li> strong").html("$<b>39</b>.95")
	$('.buybtn').attr('href','https://www.iobit.com/buy.php?product=pf3995&ref=pf3pcty&aff=' + aff + '&refs=purchase_db&tw=' + tw);
	$('.buybtn').attr('onclick',"ga( ‘send', ‘event’, ‘pfbuy’, ‘buy’, ‘dbpurchase-thankyou’)");
}
function smmessage() {
	
	var smbox = '<dl data-name="sm"><dt>'+
								'<span>Start Menu 8 PRO</span> <em>$</em>22.95 <i class="all-icons close" ></i></dt>'+
								'<dd>1 year subscription, 3 PCs</dd>'+
							'</dl>'
	if($(".banner .message dl").length > 0){
		$('.banner .message dl:last').after(smbox);
	}
	else {
		$('.banner .message h3').after(smbox);
	}
}
function smprice() {
		var addgift = '<div class="addcoupon">'+
								'<p>Spend $32.05 more, get $55 OFF <i class="all-icons"></i></p>'+
								'<div class="add addclick"><span class="clickadd"><i></i></span>Add Protected Folder for $22.95</div>'+
							'</div>'
	//$(".banner .message .coupon cite").html("$74.85");
	$(".floatlayer .message ").addClass("addgift");
	$(".banner .message .coupon").remove();
	$(".floatlayer .sm-box").removeClass("hide");
	$(".floatlayer .message h2").html("Spend $32.05 more to get $55 OFF <i class='all-icons'></i>")
	$(".floatlayer .message p").html("<span class='clickadd'></span>Add Protected Folder for $39.95").addClass("addclick")
	$(".floatlayer .db-box,.floatlayer .pf-box,.floatlayer .price del").addClass("hide");
	$(".floatlayer").addClass("one-box").removeClass("two-box").removeClass("sm-box").removeClass("three-box");
	$('.banner .message .price p').after(addgift);
	$('.banner .message').addClass("giftchange");
	$(".banner .message .price p strong,.floatlayer .price li> strong").html("$<b>22</b>.95")
	$('.buybtn').attr('href','https://www.iobit.com/buy.php?product=sm82295&ref=sm83pcty&aff=' + aff + '&refs=purchase_db&tw=' + tw);
	$('.buybtn').attr('onclick',"ga( ‘send', ‘event’, ‘sm8buy’, ‘buy’, ‘dbpurchase-thankyou’)");
}
function dbpfmessage() {
	$(".floatlayer").removeClass("one-box").addClass("two-box").removeClass("sm-box").removeClass("three-box");
	$(".floatlayer .sm-box").addClass("hide");
	fltect()
	$(".floatlayer .db-box,.floatlayer .pf-box,.floatlayer .price del").removeClass("hide");
	$(".banner .message .coupon cite:first,.floatlayer .price del").html("$114.8");
	$(".banner .message .price p strong,.floatlayer .price li> strong").html("$<b>59</b>.8")
	$('.buybtn').attr('href','https://www.iobit.com/buy.php?product=dbpf&ref=dbpf3pcty&aff=' + aff + '&refs=purchase_db&tw=' + tw);
	$('.buybtn').attr('onclick',"ga( ‘send', ‘event’, ‘dbpfbuy’, ‘buy’, ‘dbpurchase-thankyou’)");
}
function dbsmmessage() {
	$(".floatlayer").removeClass("one-box").addClass("two-box").removeClass("sm-box").removeClass("three-box");
	$(".floatlayer .pf-box").addClass("hide");
	fltect()
	$(".floatlayer .db-box,.floatlayer .sm-box,.floatlayer .price del").removeClass("hide");
	$(".banner .message .coupon cite:first,.floatlayer .price del").html("$97.8");
	$(".banner .message .price p strong,.floatlayer .price li> strong").html("$<b>42</b>.8")
	$('.buybtn').attr('href','https://www.iobit.com/buy.php?product=dbsm8&ref=dbsm3pcty&aff=' + aff + '&refs=purchase_db&tw=' + tw);
	$('.buybtn').attr('onclick',"ga( ‘send', ‘event’, ‘dbsmbuy’, ‘buy’, ‘dbpurchase-thankyou’)");
}
function smpfmessage() {
	$(".floatlayer").removeClass("one-box").removeClass("two-box").addClass("sm-box").removeClass("three-box");
	$(".floatlayer .db-box").addClass("hide");
	fltect()
	$(".floatlayer .sm-box,.floatlayer .pf-box,.floatlayer .price del").removeClass("hide");
	$(".banner .message .coupon cite:first,.floatlayer .price del").html("$62.9");
	$(".banner .message .price p strong,.floatlayer .price li> strong").html("$<b>7</b>.9")
	$('.buybtn').attr('href','https://www.iobit.com/buy.php?product=pfsm8&ref=pfsm3pcty&aff=' + aff + '&refs=purchase_db&tw=' + tw);
	$('.buybtn').attr('onclick',"ga( ‘send', ‘event’, ‘pfsmbuy’, ‘buy’, ‘dbpurchase-thankyou’)");
}
function dbsmpfmessage() {
	$(".floatlayer").removeClass("one-box").removeClass("two-box").removeClass("sm-box").addClass("three-box");
	//$(".floatlayer .db-box").addClass("hide");
	fltect()
	$(".floatlayer .sm-box,.floatlayer .pf-box,.floatlayer .db-box,.floatlayer .price del").removeClass("hide");
	$(".banner .message .coupon cite:first,.floatlayer .price del").html("$137.75");
	$(".banner .message .price p strong,.floatlayer .price li> strong").html("$<b>82</b>.75")
	$('.buybtn').attr('href','https://www.iobit.com/buy.php?product=dbpfsm8&ref=dbpfsm3pcty&aff=' + aff + '&refs=purchase_db&tw=' + tw);
	$('.buybtn').attr('onclick',"ga( ‘send', ‘event’, ‘dbpfsmbuy’, ‘buy’, ‘dbpurchase-thankyou’)");
}

function dbbox() {
	dbmessage();
	coupon();
	nomal();
	dbprice();
}
function pfbox() {
	pfmessage()
	nomal()
	pfprice()
}
function smbox() {
	smmessage()
	nomal()
	smprice();
}


function dbpfbox() {
	pfmessage();
	dbpfmessage();
}
function pfdbbox() {
	dbmessage();
	coupon();
	dbpfmessage();
}
function dbsmbox() {
	smmessage();
	dbsmmessage();
}
function smdbbox() {
	dbmessage();
	coupon();
	dbsmmessage();
}
function pfsmbox() {
	smmessage();
	coupon();
	smpfmessage();
}
function smpfbox() {
	pfmessage();
	coupon();
	smpfmessage();
}

$(function(){
	var dateArr=getDate(0);
	$(".date-str").html(dateArr[2]+" "+dateArr[1]+" "+dateArr[0]);
});

function getMonthStr(i){
	var month=["January","February","March","April","May","June","July","August","September","October","November","December"];
	return month[i-1];
}

function getDate(AddDayCount){
	var dd = new Date();
	dd.setDate(dd.getDate()+AddDayCount);
	var y = dd.getFullYear();
	var m = (dd.getMonth()+1)<10?"0"+(dd.getMonth()+1):(dd.getMonth()+1);
	var d = dd.getDate()<10?"0"+dd.getDate():dd.getDate();
	return [y,getMonthStr(parseInt(m)),d];
}

$("body").on("click",".banner .change dl", function(event) {
	var num = $(this).index();
	if($(this).hasClass("active")) {
		$(this).removeClass("active");
		var lenght =$(".banner .change dl.active").length;
		if(lenght==0) {
			$(".banner .message").removeClass("two-list").removeClass("three-list").addClass("nomessage").removeClass("giftchange")
			nomessage();
		}
		else if(lenght==1) {
			$(".banner .message").removeClass("two-list").removeClass("three-list").removeClass("nomessage").removeClass("giftchange")
			var onenum =$(".banner .change dl.active").index();

			if(onenum ==0) {
				dbprice();
				$(".message [data-name^='pf'],.message [data-name^='sm']").remove();
			}
			else if (onenum ==1) {
				pfprice();
				$(".message [data-name^='db'],.message [data-name^='sm']").remove();
			}
			else {
				smprice();
				$(".message [data-name^='db'],.message [data-name^='pf']").remove();
			}
		}
		else{
			$(".banner .message").addClass("two-list").removeClass("three-list").removeClass("nomessage").removeClass("giftchange")
			if (num==0) {
				smpfmessage()
				$(".message [data-name^='db']").remove();
			}
			else if(num==1) {
				dbsmmessage()
				$(".message [data-name^='pf']").remove();
			}
			else {
				dbpfmessage()
				$(".message [data-name^='sm']").remove();
			}
		}
	}
	else {
		var lenght =$(".banner .change dl.active").length;
		$(".banner .buybtn").addClass("magnify")
		if(lenght==0) {
			$(".banner .message div").remove()
			$(this).addClass("active");
			$(".banner .message").removeClass("two-list").removeClass("three-list").removeClass("nomessage").removeClass("giftchange")
			if(num==0) {
				dbbox()
			}
			else if(num==1) {
				pfbox();
			}
			else{
				smbox();
			}
		}
		else if(lenght==1) {
			var twonum= $(".banner .change dl.active").index();
			$(this).addClass("active");
			$(".addcoupon").remove();
			$(".banner .message").addClass("two-list").removeClass("three-list").removeClass("nomessage").removeClass("giftchange")
			if(twonum==0) {
				if(num==1){
					dbpfbox();
				}
				else {
					dbsmbox()
				}
			}
			else if(twonum==1) {
				if(num==0){
					pfdbbox();
				}
				else {
					pfsmbox()
				}
			}
			else {
				if(num==0){
					smdbbox();
				}
				else {
					smpfbox()
				}
			}
		}
		else{
			$(this).addClass("active");
			$(".banner .message").removeClass("two-list").addClass("three-list").removeClass("nomessage").removeClass("giftchange")
			if(num==0) {
				dbmessage();
			}
			else if( num==1) {
				pfmessage();
			}
			else {
				smmessage();
			}
			dbsmpfmessage();
		}
		setTimeout(function() {
			$(".banner .buybtn").removeClass("magnify")
		}, 500);
	}
});
$("body").on("click",".addclick", function(event) {
	var name = $(".banner .message dl").attr("data-name");
	$(".banner .message").removeClass("giftchange").addClass("two-list")
	$(".banner .change .sm").addClass("active")
	$(".banner .change .pf").addClass("active")
	$(".addcoupon").remove();
	if(name=='sm') {
		smpfbox()
	}
	else {
		pfsmbox()
	}
});

$("body").on("click",".close", function(event) {
	var name = $(this).parent().parent().attr("data-name");
	var num = $(".banner .change dl.active").length;
	$(this).parent().parent().remove();
	if (num==1) {
		$(".banner .message").removeClass("two-list").removeClass("three-list").addClass("nomessage").removeClass("giftchange")
		nomessage();
		$(".coupon").remove();
		$(".banner .change dl").removeClass("active");
		$(".message [data-name^='db'],.message [data-name^='sm'],.message [data-name^='pf']").remove();
	}
	else if(num==2) {
		$(".banner .message").removeClass("two-list").removeClass("three-list").removeClass("nomessage").removeClass("giftchange")
		$("[data-name=\'" + name + "\']").removeClass("active"); 
		var changename = $(".banner .change dl.active").attr("data-name");
		if(changename=='db') {
			dbprice()
			
		}
		else if (changename=='pf') {
			pfprice()
		}
		else {
			smprice()
		}
	}
	else {
		$(".banner .message").addClass("two-list").removeClass("three-list").removeClass("nomessage").removeClass("giftchange")
		if(name=='db') {
			smpfmessage();
			$(".banner .change dl.db").removeClass("active");
		}
		else if (name=='sm') {
			dbpfmessage();
			$(".banner .change dl.sm").removeClass("active");
		}
		else {
			dbsmmessage();
			$(".banner .change dl.pf").removeClass("active");
		}
	}
});

$(document).ready(function() {
	$('#dg-container').gallery();
	$(window).on('scroll', function () {
		var scrollHeight = $('.change .all-icons').offset().top;
		if ($(window).scrollTop() > scrollHeight) {
			$('.floatlayer').addClass('on');
		} else {
			$('.floatlayer').removeClass('on');
		}
		if ($(window).scrollTop() > scrollHeight) {
			$('.db-feature .img-box,.db-feature .message').addClass('on');
		} else {
			$('.db-feature .img-box,.db-feature .message').removeClass('on');
		}

		if ($(window).scrollTop() > $('.db-feature .message:last').offset().top) {
			$('.gift-message dl').addClass('on');
		} else {
			$('.gift-message dl').removeClass('on');
		}
	});
});