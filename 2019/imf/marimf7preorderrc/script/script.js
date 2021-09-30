$(document).ready(function() {
	$('#dg-container').gallery();
});
$(window).on('scroll', function() {
	var scrollHeight = $(".banner .buybtn").offset().top;
	if ($(window).scrollTop() > scrollHeight) {
		$('.float,.float-right').addClass('on');
	} else {
		$('.float,.float-right').removeClass('on');
	}
	if($(window).scrollTop() > $('.step').offset().top) {
		$('.feature dl,.feature .img-box').addClass("on");
	}
});
function thousandBitSeparator(num) {
  return num && (num
    .toString().indexOf('.') != -1 ? num.toString().replace(/(\d)(?=(\d{3})+\.)/g, function($0, $1) {
      return $1 + ",";
    }) : num.toString().replace(/(\d)(?=(\d{3}))/g, function($0, $1) {
      return $1 + ",";
    }));
}

function popbox() {
	$(".pop-over,.pop-bg").addClass("active")
}
function pack(number,starnumber) {
	$('.packnum').prop('number', starnumber).animateNumber({
				number: number
			},
			1500
	);
	$('.buyNum').html(thousandBitSeparator(2000-number));
}
function flipNum(num) {
	var number =num*3.38+18;
	$(".progress .bar .box >span").css("width",number);
}
function cGet(name) {
	var exp = new Date();
	name = name + exp.getDate();
	var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
	if (arr = document.cookie.match(reg))
		return unescape(arr[2]);
	else
		return null;
}
$(function(){
	packsInit();
});
function packsInit() {
	packs = cGet('enimfpre');
	if (packs == null) {
		packs = 49;
	}
	packs=parseInt(packs);
	pack(packs,2000);
	flipNum(packs);
	if (packs == 0) {
		popbox();
	} else {
		setTimeout('getPacks()', getReTime());
	}
}
function dissolve(num) {
	$('.disappear').attr('class', 'disappear');
  $('.disappear').addClass("disappear"+num);
  $(".disappear").css({ "opacity": 0, "top":0}).animate({ "opacity": 1}, 500).animate({ "top": -25},500);
}
function getPacks(isFirst) {
	var dateNow = new Date();
	$.ajax({
		type: "GET",
		url: "imf7preorderrc.php",
		data: "action=getPacks&r=" + Math.random() + "&d=" + dateNow.getDate() + (isFirst == 1 ? '&f=1' : ''),
		success: function(res) {
			res = JSON.parse(res);
			var sPacks = res.packsNum;
			var viewNum = res.viewNum;
			$('.viewNum').html(viewNum);
			if((!isNaN(sPacks))&&(sPacks!=packs)){
				if(sPacks==0){
					if(!$(".pop-over,.pop-bg").hasClass('active')){
						popbox();
					}
				}
				var reNum=packs-sPacks;
				dissolve(reNum);
				pack(sPacks,packs);
				packs=sPacks;
				flipNum(packs);
			}
		}
	});
	if(packs>0){
		setTimeout('getPacks()', getReTime());
	}else{
		if(!$(".pop-over,.pop-bg").hasClass('active')){
			popbox();
		}
	}
}

function getReTime(){
	var reTime=6;
	return reTime*1000;
}
