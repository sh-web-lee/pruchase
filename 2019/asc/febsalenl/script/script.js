function onePc() {
	$(".bottomcart .button").attr("href","https://www.iobit.com/buy.php?product=nl-asc141pc1899&ref=nl_asc141pc1899purchase1902"+refStr+"&refs=nl_purchase_asc&tw=-8");
	$(".bottomcart dl strong b").html("€18")
	$(".bottomcart dl dt del").html("€29,99")
	$(".showcase span").removeClass().addClass('one-pc');
	$(".bottomcart .selection li:eq(2)").addClass('active').siblings().removeClass("active");
}
function packs() {
	$(".bottomcart .button").attr("href","https://www.iobit.com/buy.php?product=nl-asc143pcsd1999&ref=nl_asc143pcsd1999purchase1902"+refStr+"&refs=nl_purchase_asc&tw=-8");
	$(".bottomcart dl strong b").html("€19")
	$(".bottomcart dl del").html("€79,98")
	$(".showcase span").removeClass().addClass('packs');
	$(".bottomcart .selection li:eq(1)").addClass('active').siblings().removeClass("active");
}
function threePc() {
	$(".bottomcart .button").attr("href","https://www.iobit.com/buy.php?product=nl-asc141y3pc1999&ref=nl_asc143pc1999purchase1902"+refStr+"&refs=nl_purchase_asc&tw=-8");
	$(".bottomcart dl strong b").html("€19")
	$(".bottomcart dl del").html("€49,99")
	$(".showcase span").removeClass().addClass('three-pcs');
	$(".bottomcart .selection li:eq(0)").addClass('active').siblings().removeClass("active");
}
function soldout() {
	threePc();
	$(".banner .packs").addClass("three-packs");
	$(".banner .packs h3").html("Voor <span>3</span> computers, slechts:")
	$(".banner .packs dl strong").html("60%")
	$(".banner .packs dl dd:last-child,.bottomcart .btnarea dd:last-child").remove();
	$(".banner .three-pcs dl strong").html("75%")
	$(".banner .three-pcs").addClass("sold-out");
	$(".banner .packs .button").attr("href","https://www.iobit.com/buy.php?product=nl-asc141y3pc1999&ref=nl_asc143pc1999purchase1902"+refStr+"&refs=nl_purchase_asc&tw=-8");
	$(".gifts.default").remove();
	$(".gifts.exceed").removeClass("hide");
	$(".bottomcart ul li.packs").addClass("exceed").removeClass("active");
	$(".bottomcart ul li.packs").html("");
}
function goTarget(target, yoffset) {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
}

$(".benfits .detail-list dl").hover(function() {
	$(".benfits .showcase .screenshot").css('marginLeft', -555*($(this).index()+1));
	$(".benfits .zoom li").removeClass('active').eq($(this).index()+1).addClass('active');
	$(this).addClass("active").siblings().removeClass("active");
  $(".benfits .list-icon li").removeClass('active').eq($(this).index()+1).addClass('active');
	
});
$(".benfits .list-icon li").hover(function() {
	$(".benfits .showcase .screenshot").css('marginLeft', -555*($(this).index()));
	$(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
	var num = $(this).index()
	if(num==0) {

		$(".benfits .detail-list dl").removeClass("active");
	}
	else {
		$(".benfits .detail-list dl").eq($(this).index()-1).addClass("active").siblings().removeClass("active");
	}
	$(".benfits .list-icon li").removeClass('active')
	$(this).addClass('active');
});

$(".bottomcart .selection li").mouseover(function(event) {
	var num =$(this).index();
	if($(".bottomcart .selection li.packs").hasClass("exceed")) {
		if(num==0){
			threePc();
		}else if (num==2){
			onePc();
		}
	}
	else {
		if(num==1) {
			packs();
		}else if(num==0){
			threePc();
		}else if(num==2){
			onePc();
		}
	}


});

$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > topheight.offset().top) {
			scrollclass.addClass(ClassName);
		}else {
			scrollclass.removeClass(ClassName);
		}
	});
};

$(window).scrollWindow($(".gifts .button"),$('.reviews dl'),("on"));

$(function(){
	timeInit();
	countdown(".packs h3 strong",".gifts .price p strong",".btnarea dd strong");
});

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit(){
	var date = new Date();
	var cName = "nlascfeb_t" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	var nowTime = Math.floor(date.getTime() / 1000);
	if (arr == null) {
		countTime = nowTime + 408;
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
		var mi = Math.floor((999 - dateObj.getMilliseconds())/10);
		return [d, h, i, s, mi];
	} else {
		return [0, 0, 0, 0, 0];
	}
}

var countdown = function(countdown,countdown1,countdown2) {
	var statusNow=statusSet();
	getCycleCountdown(countTime);
	$(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
	$(countdown1).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
	$(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
	if(statusNow==1){
		setTimeout("countdown('"+countdown+"','"+countdown1+"','"+countdown2+"')", 1);
	}
};

function getCycleCountdown(endTime) {
	var datetime = timeCountDown(endTime);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 2);
}

function statusSet() {
	var statusNow = statusCheck();
	if (statusNow == 2) {
		if (!$(".banner .three-pcs").hasClass('"sold-out"')) {
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