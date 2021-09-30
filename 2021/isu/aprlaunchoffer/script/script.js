var tw = MApp(2.2).datetime.getTimeZone();
var saleFlag = 80;
function buttonLink(){
	if(saleFlag == 85){
		//85%
		$(".banner-cont").removeClass("offer80").removeClass("offer75").addClass("offer85")
		$(".float-footer").removeClass("offer80").removeClass("offer75").addClass("offer85")
		$(".now").html("<i>$</i><h3>9<i>.99</i></h3>")
		$("a.button").attr({
			"href": "https://www.iobit.com/buy.php?product=isu43pcsdpf999&ref=en-isu3pcsdpfloyallaunch"+ refStr +"&aff=&refs=purchase_isu&tw=" + tw,
			"onclick": "ga('send', 'event', 'isubundle999buy', 'buy', 'isupurchase-launch');"
		  });
	}else if(saleFlag == 80){
		//80%
		$(".banner-cont").removeClass("offer85").removeClass("offer75").addClass("offer80")
		$(".float-footer").removeClass("offer85").removeClass("offer75").addClass("offer80")
		$(".now").html("<i>$</i><h3>12<i>.97</i></h3>")
		$("a.button").attr({
			"href": "https://www.iobit.com/buy.php?product=isu43pcsdpf&ref=en-isu3pcsdpflaunch"+ refStr +"&aff=&refs=purchase_isu&tw=" + tw,
			"onclick": "ga('send', 'event', 'isubundlebuy', 'buy', 'isupurchase-launch');"
		  });
	}else if(saleFlag == 7585){
		//85% soldout
		$(".state-after>p").html("Oops! No more loyal-user only discount left, but")
		$(".now").html("<i>$</i><h3>14<i>.77</i></h3>")
		$(".banner-cont").removeClass("offer80").removeClass("offer85").addClass("offer75")
		$(".float-footer").removeClass("offer80").removeClass("offer85").addClass("offer75")
		$(".state-after>p").html("Oops! No more loyal-user only discount left, but")
		$("a.button").attr({
			"href": "https://www.iobit.com/buy.php?product=isu43pcsdpf1477&ref=en-isu3pcsdpfsoldlaunch"+ refStr +"&aff=&refs=purchase_isu&tw=" + tw,
			"onclick": "ga('send', 'event', 'isubundlesoldbuy', 'buy', 'isupurchase-launch');"
		  });
	}else{
		//80% soldout
		$(".state-after>p").html("Oops! No more new-release discount left, but")
		$(".now").html("<i>$</i><h3>14<i>.77</i></h3>")
		$(".banner-cont").removeClass("offer80").removeClass("offer85").addClass("offer75")
		$(".float-footer").removeClass("offer80").removeClass("offer85").addClass("offer75")
		$("a.button").attr({
			"href": "https://www.iobit.com/buy.php?product=isu43pcsdpf1477&ref=en-isu3pcsdpfsoldlaunch"+ refStr +"&aff=&refs=purchase_isu&tw=" + tw,
			"onclick": "ga('send', 'event', 'isubundlesoldbuy', 'buy', 'isupurchase-launch');"
		  });
	}
}
/* countdown number start */
function flipNum(num, length) {
	var num = PrefixInteger(num, length);
	var len = String(num).length;
	var str = num.toString();
	var list = '';
	var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
	for (var j = 0; j < arr.length; j++) {
		list += '<span>' + arr[j] + '</span>';
	}
	$(".countdown .scroll-tick").html(list);
	for (var i = 0; i <= len; i++) {
		var curNum = str.substring(i, i + 1);
		$(".countdown .scroll-tick").eq(i).animate({
			marginTop: -curNum * 45,
		}, "slow");
	}
	var number = num * 3.38 + 18;
	// $(".progress .bar .box").css("width", number);
}
function dissolve() {
	$(".disappear").css({
		"opacity": 0,
		"top": 10
	}).animate({
		"opacity": 1
	}, 500).animate({
		"top": -25,
		"opacity": 0
	}, 500);
}

function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}
function pack(number, starnumber) {
	$('.buyNum').prop('number', starnumber).animateNumber({
			number: number
		},
		1500
	);
	$('.packnum').html(500 - number);
}

function packsInit() {
	packs = 99;
	getSales(1);
}

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	name = name + exp.getDate();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
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


function getSales() {
	var date = new Date();
	$.ajax({
		type: "GET",
		url: "launchoffer.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			packs = sales.packsNum;
			flipNum(packs, 4);
			dissolve();
			if (packs <= 0) {
				testChangeState('75'+saleFlag);
			}
			if (packs > 0) {
				setTimeout('getSales()', getReTime());
			}
		}
	});
}

function getReTime() {
	var packsNumTotal = cGet('launchoff_t');
	if (packsNumTotal > 0) {
		return (600 / packsNumTotal) * 1000;
	} else {
		return 20000;
	}
}

function getViewNum() {
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getViewNum",
		success: function(viewNum) {
			if (!isNaN(viewNum)) {
				$(".viewNum").html(viewNum);
			}
		}
	});
	setTimeout("getViewNum()", 30000);
}
/* countdown number end */

$.fn.scrollWindow = function(scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > (scrollclass.offset().top - 500) && $(window).scrollTop() < (scrollclass.offset().top + 500)) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$(window).scroll(function() {
	if ($(document).scrollTop() > 550) {
		$('.float-footer').fadeIn(500)
	} else {
		$('.float-footer').fadeOut(500)
	}
})


$(document).ready(function() {
	$("#scrollPage").click(function(){
		$('html,body').animate({  
		        scrollTop: 1300  
		}, 600); 
	})
	$(window).scrollWindow($('.left-pic span'), ("on"));
	$('#dg-container').gallery();
	buttonLink()
	packsInit();
	setTimeout("getViewNum()", 3000);
});
function testChangeState(val){
	saleFlag = val;
	buttonLink()
	// console.log(tw)
}

