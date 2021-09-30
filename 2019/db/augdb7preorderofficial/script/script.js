function packNum(number, starnumber) {
	$('.buyNum').prop('number', starnumber).animateNumber({
		number: number
	}, 1500);
}

function PrefixInteger(num, length) {
	return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length, _time) {
  $(".nwrap .numlist").html('');
  $(".nwrap em").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(number).length;
  var str = number.toString();
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".nwrap .numlist").append(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#topNum .nwrap").eq(a).append('<em>' + curNum + '</em>');
    $("#botNum .nwrap").eq(a).append('<em>' + curNum + '</em>');

    $("#topNum .numlist").eq(a).animate({
      marginTop: -curNum * 31,
    }, _time, function() {
      if (a = 3) {
        $("#topNum .nwrap").eq(3).find("em").css({
          "opacity": 1,
          "fontSize": 26 + "px"
        }).animate({
          "opacity": 0,
          "fontSize": 46 + 'px',
        }, 500);
      }
    });
    $("#botNum .numlist").eq(a).animate({
      marginTop: -curNum * 31,
    }, _time, function() {
      if (a = 3) {
        $("#botNum .nwrap").eq(3).find("em").css({
          "opacity": 1,
          "fontSize": 26 + "px"
        }).animate({
          "opacity": 0,
          "fontSize": 46 + 'px',
        }, 500);
      }
    });
  }
}

function soldout() {
	var aff = MApp(2.2).url.getParameters('aff');
	$(".banner,.floatlayer,.price").removeClass("sold").addClass("sold");
	$(".banner .offer .right").find("h2").html('Oops!');
	$(".banner .numbox").html('<h4>Preorder Driver Booster for free is unavailable now</h4><p>But we also provide this <b>70% OFF</b> Discount for you</p>');
	$(".price li.first").html('<p><strong>$<big>22</big>.95</strong> <del>$74.85</del></p><p>1 year subscription / 3 PCs</p>');
	$(".floatlayer .numbox").html('Be the First to Get Latest Driver Booster 7 PRO<br> for Better PC & Gaming Performance');
	$(".buybtn").attr({
		"href": 'https://www.iobit.com/buy.php?product=db7preorder2295&ref=db7preorder2295official'+refStr+'&aff=' + aff + '&refs=purchase_db&tw=-8',
		"onclick": "ga('send', 'event', 'db3pcbuy', 'buy', 'db7preorderofficial');"
	});
}

$(window).on('scroll', function() {
	var _timer;
	var _timer1;
	var _timer2;

	if ($(window).scrollTop() > $(".why").offset().top + 100) {
		$('.maglist').addClass('on');
		_timer1 = setTimeout('$(".db-message").addClass("first");', 800);
	}
	if ($(window).scrollTop() > $(".maglist.three").offset().top + 100) {
		$('.featlist').addClass('on');
		_timer2 = setTimeout('$(".db-feature").addClass("first");', 3200);
	}

	$('.floatlayer').removeClass('on');
	clearTimeout($.data(this, 'scrollTimer'));
	$.data(this, 'scrollTimer', setTimeout(function() {
		$('.floatlayer').addClass('on');
		if ($('.floatlayer').hasClass("on") && $(window).scrollTop() < $(".banner .buybtn").offset().top) {
			$('.floatlayer').removeClass('on');
		} else {
			$('.floatlayer').addClass('on');
			if ($(window).scrollTop() > $(".why").offset().top - 200 && !$(".db-message").hasClass("first")) {
				$('.floatlayer').removeClass('on');
			} else if ($(window).scrollTop() > $(".maglist.three").offset().top - 100 && !$(".db-feature").hasClass("first")) {
				$('.floatlayer').removeClass('on');
			} else {
				$('.floatlayer').addClass('on');
			}
		}
	}, 300));
});

$(document).ready(function() {
	$('#dg-container').gallery();
	//packNum(134, 1000, '.buyNum');
	//flipNum(1000, 4, 100);
});

function cSet(name,value) {
	var Days=2;
	var exp = new Date();
	name=name+exp.getDate();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

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
		url: "db7preorderofficial.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				packs = sales.packsNum;
				if(isInit){
					flipNum(sales.packsNum, 4, 1000);
				}else{
					flipNum(sales.packsNum, 4, 100);
				}
				if ((packs <= 0) && (!$(".banner,.floatlayer,.price").hasClass('sold'))) {
					soldout();
				}
			}
			if(packs>0){
				setTimeout('getSales(0)', getReTime());
			}
		}
	});
}

function getReTime() {
	var packsNumTotal = cGet('endbexp_t');
	if (packsNumTotal > 1) {
		if ((packsNumTotal - packs) <= 6) {
			return 1000 + (packsNumTotal - packs) * 1000;
		} else {
			return (1200 / packsNumTotal) * 1000;
		}
	} else {
		return 20000;
	}
}

function getViewNum() {
	$.ajax({
		type: "GET",
		url: "db7preorderofficial.php",
		data: "action=getViewNum",
		success: function(res) {
			$('.buyNum').html(res);
		}
	});
	setTimeout('getViewNum()', 12000);
}

$(function() {
	packsInit(1);
	setTimeout('getViewNum()', 12000);
});