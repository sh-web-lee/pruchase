function flipNum(num, length) {
  $(".packsNum").html(num);
  var num = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(num).length;
  var str = num.toString(); 
  var count = $(".numdown .numlist strong > span");
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  count.html(list);

  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    count.eq(i).animate({
      marginTop: -curNum * 22,
    }, "slow");
  }
}
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function soldout() {
  //banner
  $(".banner .panel").addClass("soldout");
  $(".banner .panel .offer.large .banner-bottom").html(" ");
  //gifts
  $(".gifts").slideUp();
  //buybtn
  $(".banner .offer.large .buybtn, .comparison .buybtn").attr({
  	"href": "https://www.iobit.com/buy.php?product=iu93pc1677&ref=en-iu3pcsoldfeb"+ refStr +"&aff="+ aff +"&refs=purchase_iu&tw=-8",
  	"onclick": "ga('send', 'event', 'iu3pcsoldbuy', 'buy', 'iupurchase-202002');"
  });
  $(".banner .offer.small .buybtn").attr({
  	"href": "https://www.iobit.com/buy.php?product=iu91pc1477&ref=en-iu1pcsoldfeb"+ refStr +"&aff="+ aff +"&refs=purchase_iu&tw=-8",
  	"onclick": "ga('send', 'event', 'iu1pcsoldbuy', 'buy', 'iupurchase-202002');"
  });
}

function comparisonBgColor() {
  var index = $(".comparison table tbody tr").length;
  for(var i=1; i<=index; i++) {
  	if(i%2 == 0) {
  	  $(".comparison table tbody tr:nth-child("+ i +") td").addClass("white");
  	}else {
  	  $(".comparison table tbody tr:nth-child("+ i +") td").addClass("purple");
  	}
  }
  $(".comparison table tbody tr td.space").css({"background": "#fff"});
}

function addParameter(param) {
  if(param != undefined) {
  	$(".banner .top ul li.three p").html("<b>"+ param +"</b> malicious plugins are detected");
  	$(".banner .top ul li.four p").html("<b>"+ param +"</b> program updates are ready");
  }
}

$(function() {
  //
  $('#dg-container').gallery();
  //
  packsInit();
  //
  comparisonBgColor();
});

function packsInit() {
	packs = cGet("eniufeb_p");
	if (packs == null) {
		packs = 79;
		getSales(1);
	} else {
		flipNum(packs, 2);
		if (packs <= 0) {
			soldout();
		} else {
			setTimeout('getSales(0)', 1000);
		}
	}
}

function getSales() {
	var date = new Date(); 
	$.ajax({
		type: "GET",
		url: "febsale.php",
		data: "action=getPacks&d=" + date.getDate(),
		success: function(res) {
			var sales = JSON.parse(res);
			if (sales.packsNum != packs) {
				flipNum(sales.packsNum, 2);
				packs = sales.packsNum;
				if (packs <= 0) {
					soldout();
				}
			}
			if (packs > 0) {
				setTimeout('getSales()', getReTime());
			}
		}
	});
}

function getReTime() {
	return reTime = ((Math.random() > 0.5) ? 4.5 : 9.5)*1000;
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

function cSet(name, value) {
	var Days = 2;
	var exp = new Date();
	name = name + exp.getDate();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}