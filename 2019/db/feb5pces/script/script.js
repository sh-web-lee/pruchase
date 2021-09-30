$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};

$(window).on('scroll', function () {
  if ($(window).scrollTop() > $(".benfits").offset().top) {
    $('.review dl').addClass("red-round");
  }else {
    $('.review dl').removeClass("red-round");
    $('.review dl.active').addClass("red-round");
  }
});

$(function () {
  //goto comparison-table
  $("a.intro").target($(".comparison-table"));
  //review
  $(".review dl dt .img-box").mouseover(function () {
    $(this).parent().parent().addClass("active").siblings().removeClass("active");
  });
  //benifts
  $(".benfits .detail-list dl").hover(function() {
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  });
  $(".banner .box").hover(function() {
    $(this).addClass("active").siblings().removeClass("active");
  });
  $(".bottomcart ul li").click( function () {
    $(this).addClass("active").siblings().removeClass("active");
    var index = $(this).index();
    $(".bottomcart .buybtn").attr("href", $(".banner .box").eq(index).find(".buybtn").attr("href"));
    $(".bottomcart .buybtn").attr("onclick", $(".banner .box").eq(index).find(".buybtn").attr("onclick"));
    if(index==0) {
      $(".bottomcart .left-img").removeClass("three").addClass("one");
      $(".bottomcart dl dt").html("<strong><b>35,</b> 98€ </strong>")
    }
    else if(index==1) {
      $(".bottomcart .left-img").removeClass("one").removeClass("three");
      $(".bottomcart dl dt").html("<strong><b>24,</b> 99€ </strong> <del>129,98€</del>")
    }
    else {
      $(".bottomcart .left-img").addClass("three").removeClass("one");
      $(".bottomcart dl dt").html("<strong><b>19,</b> 99€ </strong> <del>74,85€</del>")
    }
  });
  packsInit();
});

// progressbar
function focus() {
  $(".db-reduce").css({ "opacity": 1, "bottom": -25, "zIndex": 8}).animate({ "opacity": 0, "bottom": 15, "zIndex": -9}, 500);
  $(".dissolve").css({ "opacity": 1, "top": 30, "zIndex": 8}).animate({ "opacity": 0, "top": -30, "zIndex": -9}, 500);
}

function commafy(num) {
  num = num + "";
  num = num.replace(/[ ]/g, "");
  if (num == "") {
    return;
  }
  if (isNaN(num)) {
    return;
  }
  var index = num.indexOf(".");
  if (index == -1) {
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(num)) {
      num = num.replace(reg, "$1.$2");
    }
  } else {
    var intPart = num.substring(0, index);
    var pointPart = num.substring(index + 1, num.length);
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(intPart)) {
      intPart = intPart.replace(reg, "$1.$2");
    }
    num = intPart + "." + pointPart;
  }
  return num;
}
function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2019-3-12')) / (3600 * 24 * 1000));
  var buyNum = 10633 + daysDiff * 59 + (59 - packsNow);
  $('.buyNum').html(commafy(buyNum));
}

function packsInit() {
  var date = new Date();
  var cName = "esdbfeb" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 59;
  } else {
    packs = arr[2];
  }
  getSalesNum(packs);
  $('.packsNum').html(packs);
  setTimeout('getSales()', getReTime());
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "feb5pces.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function (res) {
      var sales = JSON.parse(res);
      if(sales.packsNum!=packs) {
        packs = sales.packsNum;
        getSalesNum(packs);
        $('.packsNum').html(packs);
        focus();
      }
    }
  });
  setTimeout('getSales()', getReTime());
}

function getReTime() {
  var reTime;
  if (packs > 49) {
    reTime = 4;
  } else if(packs>24){
    reTime = 20;
  }else if(packs>3){
    reTime = 6;
  }else{
    reTime = 60;
  }
  return reTime*1000;
}