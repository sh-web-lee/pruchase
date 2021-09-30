
$(window).on('scroll', function() {
	let scrollHeight_dl = $(".banner .buybtn").offset().top;
	if ($(window).scrollTop() > scrollHeight_dl) {
    $('.floatlayer').addClass('on');
	}else {
    $('.floatlayer').removeClass('on');
	}
});
$(".users li").mouseover(function (event) {
  var num = $(this).index();
  $(".users li").eq(num).addClass('active').siblings().removeClass('active');
  $(".review dl").eq(num).addClass('active').siblings().removeClass('active');
});
function focus() {
	$('.progressbar .bar >span').append('<span class="reduce"></span>');
	let tReduce = new TimelineLite();
	let tGift = new TimelineLite();
	tReduce.to('.reduce', 1.5, {
			y: -100,
			autoAlpha: 0,
			onComplete: function() {
				$('.reduce').remove();
			}
		});
	tGift.to('.gift', .25, {
		scale: 1.5
	}).to('.gift', .25, {
		scale: 1
	});
}

function pack(number,starnumber) {
	$('.gift').prop('number', starnumber).animateNumber({
			number: number
		},
		1500
	);
	$('.soldNum').html(500-number);
}

function flipNum(num,numRe) {
	let number =num*2.31;
	$(".progressbar .bar >span").css("width",number);
	if(numRe==1) {
		setTimeout(function () {
			focus();
		}, 500);
	}
}

function pack(number,starnumber) {
	$('.gift').prop('number', starnumber).animateNumber({
				number: number
			},
			1500
	);
	$('.soldNum').html(500-number);
}

function flipNum(num,numRe) {
	let number =num*2.31;
	$(".progressbar .bar >span").css("width",number);
	if(numRe==1) {
		setTimeout(function () {
			focus();
		}, 500);
	}
}

function packsInit() {
	var date = new Date();
	var cName = "endbpre" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	if (arr == null) {
		packs = 64;
	} else {
		packs = parseInt(arr[2]);
	}
	flipNum(packs,0);
	pack(packs,200);
	timeCheck();
	setTimeout('getSales()', reTime * 1000);
}

function getSales() {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "db6preorder.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if ((sales.packsNum != packs)&&($.isNumeric(sales.packsNum))&&($.isNumeric(packs))) {
				flipNum(packs,1);
				pack(sales.packsNum,packs);
				packs=sales.packsNum;
			}
		}
	});
	timeCheck();
	setTimeout('getSales()', reTime * 1000);
}

function timeCheck() {
	if(packs>34){
		reTime=5;
	}else if(packs>10){
		reTime=12;
	}else{
		reTime=27;
	}
}

$(function(){
	packsInit();
});



