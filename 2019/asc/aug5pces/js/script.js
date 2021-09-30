$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
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
$(function() {
  $(".review dl dt .img-box").mouseover(function () {
      $(this).parent().parent().addClass("active").siblings().removeClass("active");
  });
  $(window).scrollWindow($(".gift-message  .buybtn"), $('.reviews dl'), ("on"));
  $(window).scrollWindow($(".banner .buybtn"),$('.feature dl'),("on"));

  $(".feature a").target($(".comparison"),0);
    var _imgcss = ['img-box three-gift', 'img-box three-box '];
    $(".bottom-buy li").on("click", function() {
    var index = $(this).index();
    var dataName = $(this).attr("data-num");
    var dataUrl = $(".banner .box").eq(dataName).find(".buybtn").attr("href");
    var dataga = $(".banner .box").eq(dataName).find(".buybtn").attr("onclick");
    var original = $(".banner .box").eq(dataName).find(".price del").text();
    var price = $(".banner .box").eq(dataName).find(".price b").text();
    $(this).addClass("active").siblings().removeClass("active");
    $(".bottom-buy .img-box").attr('class', _imgcss[dataName]);
    $(".bottom-buy .price").find("del").text(original);
    $(".bottom-buy .price").find("b").text(price);
    $(".bottom-buy .buybtn").attr("href", dataUrl);
    $(".bottom-buy .buybtn").attr("onclick", dataga);
  });
  packsInit();
});
function raduem() {
  $(".raduem").css({ "opacity": 1, "top": 15, "zIndex": 8}).animate({ "opacity": 0, "top": -10, "zIndex": -9}, 800);
  $(".raduem-gift").css({ "opacity": 1, "bottom": 10, "zIndex": 8}).animate({ "opacity": 0, "bottom": 35, "zIndex": -9}, 800);
}

function packsInit() {
  var date = new Date();
  var cName = "esascaugpa" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 59;
  } else {
    packs = arr[2];
  }
  $('.packsNum').html(packs);
  getSalesNum(packs);
  setTimeout('getPacks()', getReTime());
}

function getPacks() {
  var date = new Date();
  $.ajax({
    type: 'GET',
    url: 'aug5pces.php',
    data: 'action=getSales&d=' + date.getDate(),
    success: function(sPacks) {
      if (!isNaN(sPacks)) {
        if (sPacks != packs) {
          packs = sPacks;
          $('.packsNum').html(packs);
          getSalesNum(packs);
          raduem();
        }
      }
    }
  });
  setTimeout('getPacks()', getReTime());
}

function getReTime(){
  var reTime=25;
  if(packs>50){
    reTime=10;
  }else if(packs>30){
    reTime=20;
  }
  return reTime*1000;
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
      num = num.replace(reg, "$1,$2");
    }
  } else {
    var intPart = num.substring(0, index);
    var pointPart = num.substring(index + 1, num.length);
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(intPart)) {
      intPart = intPart.replace(reg, "$1,$2");
    }
    num = intPart + "." + pointPart;
  }
  return num;
}
function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2019-10-16')) / (3600 * 24 * 1000));
  var buyNum = 6396949 + daysDiff * 59 + (59 - packsNow);
  $('.buyNum').html(commafy(buyNum));
}