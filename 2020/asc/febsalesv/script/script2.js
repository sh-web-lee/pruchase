//userreview
function switchover(name, clickname, active, contname) {
  $(name).on(clickname, function() {
    var num = $(this).index();
    $(name).eq(num).addClass(active).siblings().removeClass(active);
    $(contname).eq(num).addClass(active).siblings().removeClass(active);
  });
}

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

function reduce() {
  $(".pickNum").append("<span></span>");
}

$(function() {
  //benefit
  $(".benefit .detail-list dl").hover(function() {
    $(".benefit .showcase .screenshot").css('marginLeft', -555 * ($(this).index() + 1));
    $(".benefit .zoom li").removeClass('active').eq($(this).index() + 1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benefit .list-icon li").removeClass('active').eq($(this).index() + 1).addClass('active');
  });
  $(".benefit .list-icon li").hover(function() {
    $(".benefit .showcase .screenshot").css('marginLeft', -555 * ($(this).index()));
    $(".benefit .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if (num === 0) {
      $(".benefit .detail-list dl").removeClass("active");
    } else {
      $(".benefit .detail-list dl").eq($(this).index() - 1).addClass("active").siblings().removeClass("active");
    }
    $(".benefit .list-icon li").removeClass('active');
    $(this).addClass('active');
  });

  $(".textlink").target($("#compare"), 80);
  //users
  $(".users li").mouseover(function(event) {
    var num = $(this).index();
    $(".users li").eq(num).addClass('current').siblings().removeClass('current');
    $(".review-list >dl").eq(num).addClass('active').siblings().removeClass('active');
  });
  //footbuy
  $(".footbuy li").on("hover", function() {
    var index = $(this).index();
    var _num = $(this).attr("data-num");
    $(this).addClass('on').siblings().removeClass("on");
    $(".footbuy .imglist").eq(index).addClass("on").siblings().removeClass("on");
    var _origian = $(".banner .panel").eq(_num).find(".price del").text();
    var _discount = $(".banner .panel").eq(_num).find(".price big").text();
    var btnHref = $(".banner .panel").eq(_num).find(".buybtn").attr("href");
    var btnGa = $(".banner .panel").eq(_num).find(".buybtn").attr("onclick");
    $(".footbuy .price").find("del").text(_origian);
    $(".footbuy .price").find("big").text(_discount);
    $(".footbuy .buybtn").attr({
      "href": btnHref,
      "onclick": btnGa,
    });
  });
  setTimeout('getPacksNum()', 3000);
});

function getPacksNum(){
  var date = new Date();
  var cName = "febsalesv" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 49;
  } else {
    packs = arr[2];
  }
  $('.pickNum').html(packs);
  if(packs>40){
  	reTime = 6;
  }else if(packs>20&&packs<=40){
  	reTime = 20;
  }else if(packs<=20){
  	reTime = 7;
  }else{
  	reTime = 10;
  }
  if(packs>3) setTimeout('getPacksNum()', reTime*1000);
  packs--;
  cSet(cName, packs);
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}