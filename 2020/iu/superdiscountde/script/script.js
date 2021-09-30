//scrollWindow
$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

//goTarget
function goTarget(target) {
  var Theigth = target.offset().top;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}

// flipNum
function flipNum(number, length) {
  var num = PrefixInteger(number, length);
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .countdown .countdown-list, .float .countdown .countdown-list").html(list);
  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    $(".banner .countdown .countdown-list").eq(i).animate({
      marginTop: -curNum * 22,
    }, "slow");
    $(".float .countdown .countdown-list").eq(i).animate({
      marginTop: -curNum * 16,
    }, "slow");
  }
}
//PrefixInteger
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

var reviewPersonName = ['Chip.de', 'Jeff A Watts', 'Lynette van Niekerk', 'Paulo Martins', 'Lovro Žužić'];

(function () {
  //flipNum
  flipNum(1000, 4);
  setTimeout('getSales(1)', 1000);
  // getSales(1);
  //feature
  $(window).scrollWindow($(".banner .buybtn"),$('.feature dl, .float'),("on"));
  //review
  $(".review .content ul li").hover(function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".review .content .review-content p").eq(index).addClass("active").siblings().removeClass("active");
    $(".review .content .line").text(reviewPersonName[index]).stop().animate({"left": index*144 }, 300);
  });
}());
function newnc() {
  $(".banner,.float").addClass("newnc")
  $(".banner .large  .price big").html("15")
  $(".banner .large .buybtn,.float .buybtn").attr("href", "https://www.iobit.com/buy.php?product=de-iu11pfsd1599&ref=de_iuspecial3pcsale"+refStr+"&tw=-8");
  $(".banner .large .buybtn,.float .buybtn").attr("onclick", "ga('send', 'event', 'iubuy', 'buy', 'iuspecial3pcsale-de')");
  $(".banner .small .buybtn").attr("href", "https://www.iobit.com/buy.php?product=de-iu111pc1699&ref=de_iuspecial1pcsale"+refStr+"&tw=-8");
  $(".banner .small .buybtn").attr("onclick", "ga('send', 'event', 'iubuy', 'buy', 'iuspecial1pcsale-de')");
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

function getSales(isInit) {
  packs = cGet("superdiscountde");
  if (packs == null) {
    packs = 199;
    setTimeout('flipNum('+packs+', 4);', 1000);
  } else {
    packs--;
    flipNum(packs, 4);
  }
  cSet('superdiscountde',packs);
  if (packs > 3) {
    setTimeout('getSales(0)', 5000);
  }
}
