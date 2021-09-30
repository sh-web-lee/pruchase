function onePc() {
	$(".bottomcart .button").attr("href","https://www.iobit.com/buy.php?product=nl-asc121pc1899&ref=nl_asc121pc1899purchase1812"+refStr+"&refs=nl_purchase_asc");
	// $(".bottomcart .button").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1811-it')");
	$(".bottomcart dl strong").html("<b>€18</b>,99")
	$(".bottomcart dl dt del").html("29,99")
	$(".showcase span").removeClass().addClass('one-pc');

}
function packs() {
	$(".bottomcart .button").attr("href","https://www.iobit.com/buy.php?product=nl-asc123pcsdpf1999&ref=nl_asc123pcsdpf1999purchase1812"+refStr+"&refs=nl_purchase_asc");
	$(".bottomcart dl strong").html("<b>€19</b>,99")
	$(".bottomcart dl del").html("119,93")
	$(".showcase span").removeClass().addClass('packs');
}
function threePc() {
	$(".bottomcart .button").attr("href","https://www.iobit.com/buy.php?product=nl-asc121y3pc1999&ref=nl_asc123pc1999purchase1812"+refStr+"&refs=nl_purchase_asc");
	// $(".bottomcart .button").attr("onclick","ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1811-it')");
	$(".bottomcart dl strong").html("<b>€19</b>,99")
	$(".bottomcart dl del").html("49,99")
	$(".showcase span").removeClass().addClass('three-pcs');
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
$(".benfits .list-icon li").click(function() {
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
	console.log(num)
	if(num==1) {
		packs();
	}else if(num==0){
		onePc();
	}else if(num==2){
		threePc();
	}
	$(".bottomcart .selection li").removeClass('active');
	$(this).addClass('active');
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

function statusSet(){
	var statusNow=statusCheck();
	if(statusNow==2){
		if(!$(".banner .sold-box .img-box").hasClass('one-box')){
			soldOut();
			packsInit();
			setTimeout('getPacks()',2000);
		}
	}
}

var countdown = function (countdown){
	getCycleCountdown();
	$(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
	setTimeout("countdown('"+ countdown +"')", 1);
};

function getCycleCountdown () {
	var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 00:00:00');
	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
	d = MApp(2.2).packages.zeroize(datetime[0], 2);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

$(function(){
	countdown((".sold-box h3 strong"),1);
});