$(document).ready(function() {
	$(".users li").mouseover(function(event) {
		var num = $(this).index();
		$(".users li").eq(num).addClass('current').siblings().removeClass('current');
		$(".review .content > dl").eq(num).addClass('active').siblings().removeClass('active');
	});
	$(".info").hover(function(){
	    $(".info-message").addClass('active');
	},function(){
	   $(".info-message").removeClass('active');
	});
});

$.fn.target=function (target) {
  $(this).click(function() {
    var Theigth = target.offset().top;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
};

$(".intro").target($("#compare"));

$(window).on('scroll', function() {
	var scrollHeight = $(".banner .buybtn").offset().top;
	if ($(window).scrollTop() > scrollHeight) {
		$('#floatlayer').addClass('on');
		$('.float').addClass('on');
	} else {
		$('#floatlayer').removeClass('on');
		$('.float').removeClass('on');
	}
});
(function($) {
	$.getUrlParam = function(name) {
		var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
		var r = window.location.search.substr(1).match(reg);
		if (r != null) return unescape(r[2]);
		return '';
	}
})(jQuery);
function soldout() {
	var aff = $.getUrlParam('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	$(".banner .packs,.comparison tfoot .iteme").addClass("sold-out")
	$(".banner .box:eq(1) .buybtn").removeClass("border")
	$(".comparison .iteme .buybtn").addClass("border")
	$(".banner .packs .date").remove();
	$(".floatlayer ul li.packs").addClass("active").siblings().removeClass("active");
	$(".floatlayer ul li.one-box").html("<p>1 Month</p><strong>$<b>2.66</b></strong><p class='check'>at Checkout</p>")
	$(".floatlayer ul li.packs").html("<p>3 Months</p><strong>$<b>7.98</b></strong><p class='check'>at Checkout</p>")
	$(".floatlayer .buybtn,.banner .box:eq(1) .buybtn,.comparison .itemd .buybtn").attr("href", "https://www.iobit.com/buy.php?product=asc133m&ref=en-asc3msoldspecial"+refStr+"&aff=" + aff + "&refs=purchase_asc&tw=" + tw);
  $(".floatlayer .buybtn,.banner .box:eq(1) .buybtn,.comparison .itemd .buybtn").attr("onclick", "ga('send', 'event', 'asc3mbuysold', 'buy', 'ascpurchase- special2020')");
  $(".banner .box:eq(0) .buybtn,.comparison .itemc .buybtn").attr("href", "https://www.iobit.com/buy.php?product=asc131m&ref=en-asc1msoldspecial"+refStr+"&aff=" + aff + "&refs=purchase_asc&tw=" + tw);
  $(".banner .box:eq(0) .buybtn,.comparison .itemc .buybtn").attr("onclick", "ga('send', 'event', 'asc1mbuysold', 'buy', 'ascpurchase-special2020')");

  $(".floatlayer .right p").html("3 Months / 3 PCs")
}
$(".floatlayer ul li").click( function () {
	var aff = $.getUrlParam('aff');
	var tw = MApp(2.2).datetime.getTimeZone();
	var index = $(this).index();
  $(this).addClass("active").siblings().removeClass("active");
  if(!$(".banner .packs").hasClass("sold-out")) {
    $(".floatlayer .buybtn").attr("href", $(".banner .box").eq(index+1).find(".buybtn").attr("href"));
    $(".floatlayer .buybtn").attr("onclick", $(".banner .box").eq(index+1).find(".buybtn").attr("onclick"));
    if(index==0) {
    	$(".floatlayer .right p").html("3 Months / 3 PCs")
    }
    else {
    	$(".floatlayer .right p").html("6 Months / 3 PCs")
    }
  }
  else {
  	$(".floatlayer .buybtn").attr("href", $(".banner .box").eq(index).find(".buybtn").attr("href"));
    $(".floatlayer .buybtn").attr("onclick", $(".banner .box").eq(index).find(".buybtn").attr("onclick"));
  	if(index==0) {
    	$(".floatlayer .right p").html("1 Month / 3 PCs")
  	}
  	else {

    	$(".floatlayer .right p").html("3 Months / 3 PCs")
  	}
  }
});

function randomNum(minNum,maxNum){
	switch(arguments.length){
		case 1:
			return parseInt(Math.random()*minNum+1,10);
			break;
		case 2:
			return parseInt(Math.random()*(maxNum-minNum+1)+minNum,10);
			break;
		default:
			return 0;
			break;
	}
}

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

$(function(){
	timeInit();
	countdown('.date strong');
});

function timeInit() {
	var date = new Date();
	var cName = "enascspecial_t" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime = Math.floor(date.getTime() / 1000);
	if (arr == null) {
		countTime = nowTime + randomNum(360,480);
		cSet(cName, countTime);
	} else {
		countTime = parseInt(arr[2]);
	}
}

function timeCountDown(startTimestamp) {
	var dateObj = new Date();
	var time = dateObj.getTime().toString().substring(0, 10);
	var remainingTime = startTimestamp - time;
	if (remainingTime > 0) {
		var d = Math.floor(remainingTime / (24 * 60 * 60));
		var h = Math.floor(remainingTime / (60 * 60) % 24);
		var i = Math.floor(remainingTime / 60 % 60);
		var s = Math.floor(remainingTime % 60);
		var mi = 999 - dateObj.getMilliseconds();
		if (mi < 10) {
			mi = '00' + mi;
		} else if (mi < 100) {
			mi = '0' + mi;
		}
		return [d, h, i, s, mi];
	} else {
		return [0, 0, 0, 0, 0];
	}
}

function getCycleCountdown(endTime) {
	var datetime = timeCountDown(endTime);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

var countdown = function(countdown) {
	var statusNow=statusSet();
	getCycleCountdown(countTime);
	$(".date").each(function(){
		$(this).find("strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
	});
	if(statusNow!=2){
		setTimeout("countdown('" + countdown + "')", 1);
	}
};

function statusSet() {
	var statusNow = statusCheck();
	if (statusNow == 2) {
		if (!$(".banner .packs,.comparison tfoot .iteme").hasClass('sold-out')) {
			soldout();
		}
	}
	return statusNow;
}

function statusCheck() {
	var date = new Date();
	var timeNow = date.getTime() / 1000;
	if (timeNow < countTime) {
		return 1;
	} else {
		return 2;
	}
}