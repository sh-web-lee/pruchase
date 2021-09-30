// review
$('.review .handle li').hover(function() {
	$(this).addClass('active').siblings().removeClass('active');
	$('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
});
$(window).on('scroll', function() {
	var scrollHeight = $(".banner .buybtn").offset().top+50;
	if ($(window).scrollTop() > scrollHeight) {
		$('.float,.float-right').addClass('on');
	} else {
		$('.float,.float-right').removeClass('on');
	}
	if($(window).scrollTop() > $('.banner .buybtn').offset().top) {
		$('.feature01 .img-box,.feature01 dl').addClass("on");
	}
	if($(window).scrollTop() > $('.feature01 dl').offset().top) {
		$('.feature02 .img-box,.feature02 dl').addClass("on");
	}
});

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  var num = PrefixInteger(num, length)
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
  for (var j = 0; j < arr.length; j++) {
      list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .countdown .scroll-tick").html(list);
  $(".float .countdown .scroll-tick").html(list);
  for (var i = 0; i <= len; i++) {
      var curNum = str.substring(i, i + 1);
      $(".banner .countdown  .scroll-tick").eq(i).animate({
          marginTop: -(9-curNum) * 22,
      }, "slow");
      $(".float .countdown .scroll-tick").eq(i).animate({
          marginTop: -(9-curNum) * 22,
      }, "slow");
  }
}
$(function() {
	packsGet();
  // review
  $(".review").on("hover", "li", function () {
    var index = $(this).index();
    $(".review .content > span").stop().animate({left: (10+index*20)+"%"}, 150);
    setTimeout(function () {
      $(".review .details dl").eq(index).addClass("active").siblings().removeClass("active");
    },150);
  });
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
   $(".banner,.float").addClass("soldout");
   $(".banner .three-pcs p strong,.float dl dt strong").html("€19,99");
   $(".banner .three-pcs p del,.float dl dt del").html("€39,95");
   $(".banner .one-pc p strong").html("€21,99");
   $(".banner .one-pc p del").html("€79,99");
   $(".float h2").addClass("soldout").html("<strong>50% KORTING</strong> op een volledig <br> beschermde computer");
   $(".number").remove();

   var aff = $.getUrlParam('aff');
   var tw = MApp(2.2).datetime.getTimeZone();
   var new1pc = "https://www.iobit.com/buy.php?product=nl-imf71pc1999&ref=nl_imf1pctracking2019sold"+refStr+"&aff=" + aff + "&refs=nl_purchase_imf&tw=" + tw;
   var new1pcStat = "ga('send', 'event', 'imftrack1pcbuysold', 'buy', 'imfpurchase1904track1pcsold-nl');";
   $('.buybtn').attr({'href': new1pc, 'onclick': new1pcStat});
 }

function packsGet() {
	var date = new Date();
	var cName = "enimftra" + date.getDate();
	var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
	packs = (arr == null) ? 98 : arr[2];
	if (packs > 0) {
		flipNum(packs,2);
		setTimeout('decreasingPacks()', 20000);
	} else {
		soldout();
	}
}

function decreasingPacks() {
	var dateNow = new Date();
	$.ajax({
		type: "GET",
		url: "track.php",
		data: "action=getPacks&r=" + Math.random() + "&d=" + dateNow.getDate(),
		success: function(sPacks) {
			if (sPacks > 0) {
				flipNum(sPacks,2);
			} else {
				soldout();
			}
			packs = sPacks;
		}
	});
	if(packs!==0){
		setTimeout('decreasingPacks()', 20000);
	}
}