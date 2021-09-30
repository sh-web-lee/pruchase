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
    var Theigth = target.offset().top + yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

var reviewPersonName = ['ComputerBild', 'Rod Garnett', 'Dareen Lim', 'Russell Peck'];

$(function() {

  $(".feature .more").target($(".comparison"), 80);
  $(".backtotop").target($(".banner"));

  $(".magazine .book").hover(function() {
    $(".magazine .book .glass").addClass("on");
  }).mouseleave(function() {
    $(".magazine .book .glass").removeClass("on");
  });

  $(".review ul li").hover(function() {
    var index = $(this).index();
    $(this).addClass("on").siblings().removeClass("on");
    $(".review .review-content p").eq(index).addClass("on").siblings().removeClass("on");
    $(".review .line").text(reviewPersonName[index]).stop().animate({
      "left": index * 176
    }, 300);
  });

  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));

  $(window).scrollWindow($(".feature"), $('.backtotop'), ("on"));

  getNumber();
});

function getNumber() {
  num = cGet("superrabatt");
  if (num == null) {
    num = Math.floor(Math.random() * (88 - 74)) + 74;
  } else {
    num--;
    if (num < 3) num = 3;
  }
  $(".reduce").remove();
  $(".packsNum b").html(num);
  $(".packsNum b").append('<em class="reduce">' + num + '</em>');
  setTimeout('$(".packsNum .reduce").addClass("on");', 400);
  cSet('superrabatt', num);
  t1 = (Math.random() > 0.5) ? 1.3 : 3.3;
  t2 = (Math.random() > 0.5) ? 9.3 : 11.3;
  reTime = ((Math.random() > 0.5) ? t1 : t2) * 1000;
  if (num > 3) setTimeout('getNumber()', reTime);
  else num === 3;
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