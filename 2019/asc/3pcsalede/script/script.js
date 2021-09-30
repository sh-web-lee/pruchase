//userreview 
$.fn.scrollWindow = function (topheight, scrollclass, ClassName) {
	$(window).on('scroll', function () {
			if ($(window).scrollTop() > topheight.offset().top) {
					scrollclass.addClass(ClassName);
			} else {
					scrollclass.removeClass(ClassName);
			}
	});
};
$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};
function flipNum(num, length) {
		var num = PrefixInteger(num, length);
    var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    var list = '';
    var len = String(num).length;
    var str = num.toString();
    var box = $(".packbox");
    for (var j = 0; j < arr.length; j++) {
      list += '<span>' + arr[j] + '</span>';
    }
    $(".countdown1 .scroll-tick").html(list);
    $(".countdown2 .scroll-tick").html(list);

		for (var i = 0; i <= len; i++) {
			var curNum = str.substring(i, i + 1);
			$(".countdown1 .scroll-tick").eq(i).animate({
					marginTop: -curNum * 19,
			}, "slow");
			$(".countdown2 .scroll-tick").eq(i).animate({
					marginTop: -curNum * 19,
			}, "slow");
		}
}
function PrefixInteger(num, length) {
		return (Array(length).join('0') + num).slice(-length);
}
$(".users li").mouseover(function (event) {
		var num = $(this).index();
		$(this).addClass("active").siblings().removeClass("active");
		$(".review .content > p").eq(num).addClass("active").siblings().removeClass("active");
});
$(function () {
	  packsInit();
	  $(".info").target($(".centbuy"),120);
	  $(".tag").target($(".comparison"),120);
		if ($(document).scrollTop() > $(".intro").offset().top - 300) {
			$(".intro .list").addClass("active");
		}
		$(window).scrollWindow($(".cause"), $('.intro'), ("on"));
		$(window).scrollWindow($(".banner .buybtn"), $('.cause .message'), ("on"));
		$(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
});
function soldout() {
	$(".banner .three-box,.floatlayer").addClass("soldout");
	$(".floatlayer .buybtn").attr("href", $(".banner .box:eq(0)").find(".buybtn").attr("href"));
  $(".floatlayer .buybtn").attr("onclick", $(".banner .box:eq(0)").find(".buybtn").attr("onclick"));
  $(".floatlayer h2").html(" 1 Jahr, 1 Rechner  <strong>22,99</strong>")
  $(".floatlayer .buy-content .date,.asc-reduce").remove();
}
function reduce () {
	$(".asc-reduce").css({ "opacity": 1, "top": -20, "zIndex": 8}).animate({ "opacity": 0, "top": -80, "zIndex": -9}, 500);
}

function packsInit() {
	var date = new Date();
	var cName = "deasc3pc_p" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if (arr === null) {
		packs = 99;
	} else {
		packs = arr[2];
	}
	flipNum(packs,2);
	reduce();
	if(statusCheck()) {
		setTimeout('getSales()', getReTime());
	}
}

function statusCheck(){
	if(packs==0){
		if(!$(".banner .three-box,.floatlayer").hasClass('soldout')){
			soldout();
		}
		return 0;
	}else{
		return 1;
	}
}

function getReTime(){
	if(packs>61){
		return 3*1000;
	}else{
		return 15*1000;
	}
}

function getSales() {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "3pcsalede.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				packs=sales.packsNum;
				flipNum(packs,2);
				reduce();
				statusCheck();
			}
		}
	});
	if(statusCheck()){
		setTimeout('getSales()',getReTime());
	}
}