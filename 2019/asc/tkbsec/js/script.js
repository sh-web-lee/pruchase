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


$(window).on('scroll', function() {
	var scrollHeight = $(".banner .buybtn").offset().top;
	if ($(window).scrollTop() > scrollHeight) {
		$('.floatlayer').addClass('on');
	} else {
		$('.floatlayer').removeClass('on');
	}
});
 function scale() {
	var text = $(".banner .numer-change .nomal").text();
	$(".numer-change .redum").html(text);
	$(".numer-change .redum").addClass("active")
	 setTimeout('$(".numer-change .redum").removeClass("active");', 600);
}
function flipNum(num, length) {
	$(".nomal").html(num);
	$(".redum").html(num);
	scale();
	var num = PrefixInteger(num, length);
	var len = String(num).length;
	var str = num.toString();
	var list = '';
	var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".floatlayer  .countdown .scroll-tick").html(list);
	for (var i = 0; i <= len; i++) {
			var curNum = str.substring(i, i + 1);
			$(".floatlayer  .countdown .scroll-tick").eq(i).animate({
					marginTop: -curNum * 44,
			}, "slow");
	}
}
function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

function soldout() {
	$(".banner .packs,.comparison tfoot .iteme").addClass("sold-out")
	$(".banner .box:eq(1)").addClass("active")
	$(".banner .box:eq(1) .buybtn").removeClass("border")
	$(".comparison .iteme .buybtn").addClass("border")
	$(".banner .packs .date").remove();
	$(".floatlayer ul li.packs").addClass("active").siblings().removeClass("active");
	$(".gift-message").remove();
	$(".floatlayer.consent").remove();
	$(".floatlayer").removeClass("soldout-fl");
  $(".floatlayer .right p").html("3 Months / 3 PCs")

  $(".comparison .itemc .buybtn,.banner .box:eq(0) .buybtn").attr("href", $(".floatlayer ul li:eq(0)").attr("data-url"));
  $(".comparison .itemc .buybtn,.banner .box:eq(0) .buybtn").attr("onclick", $(".floatlayer ul li:eq(0)").attr("data-ga"));
  $(".comparison .itemd .buybtn,.banner .box:eq(1) .buybtn").attr("href", $(".floatlayer ul li:eq(1)").attr("data-url"));
  $(".comparison .itemd .buybtn,.banner .box:eq(1) .buybtn").attr("onclick", $(".floatlayer ul li:eq(1)").attr("data-ga"));
}
$(".floatlayer ul li").click( function () {
	var index = $(this).index();
  $(this).addClass("active").siblings().removeClass("active");
	$(".floatlayer .buybtn").attr("href", $(this).attr("data-url"));
  $(".floatlayer .buybtn").attr("onclick", $(this).attr("data-ga"));
	if(index==0) {
  	$(".floatlayer .right p").html("1 Month / 3 PCs")
	}
	else {

  	$(".floatlayer .right p").html("3 Months / 3 PCs")
	}
});
$(function(){
	//flipNum("0058")
	packsInit();
	setTimeout("getViewNum()",30000);
	$(".intro").target($("#compare"));
	$(".banner .icons").target($(".gift-message"));
});
function cGet(name) {
	var exp = new Date();
	name=name+exp.getDate();
	var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
	if (arr = document.cookie.match(reg))
		return unescape(arr[2]);
	else
		return null;
}
function packsInit() {
	packs=99;
	getSales(1);
}

function getSales(isInit) {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "tkbsec.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				packs = sales.packsNum;
				flipNum(packs,4);
				if ((packs <= 0) && (!$(".banner .packs,.comparison tfoot .iteme").hasClass('sold-out'))) {
					soldout();
				}
			}
			if(packs>0){
				setTimeout('getSales(0)', getReTime());
			}
		}
	});
}

function getReTime(){
	var packsNumTotal=cGet('enasctkb_t');
	if(packsNumTotal>1) {
		return (1200 / packsNumTotal) * 1000;
	}else{
		return 20000;
	}
}

function getViewNum(){
	$.ajax({
		type: "GET",
		url: "tkbsec.php",
		data: "action=getViewNum",
		success: function(viewNum) {
			if(!isNaN(viewNum)){
				$(".viewNum").html(viewNum);
			}
		}
	});
	setTimeout("getViewNum()",30000);
}
