//target
$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2019-07-14 16:00:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function selectfun(selector) {
  var index = selector.index();
  var _num = selector.attr("data-num");
  var _price = $(".banner .offer").eq(_num).find(".price strong").text();
  var _del = $(".banner .offer").eq(_num).find(".price del").text();
  var _href = $(".banner .offer").eq(_num).find(".buybtn").attr("href");
  var _ga = $(".banner .offer").eq(_num).find(".buybtn").attr("onclick");
  selector.addClass("active").siblings().removeClass("active");
  $(".bottombuy .box ul").stop().animate({
    "marginLeft": index * (-330)
  }, 500);
  $(".bottombuy .box ul li").eq(index).addClass("active").siblings().removeClass("active");
  $(".bottombuy .price strong").text(_price);
  $(".bottombuy .price del").text(_del);
  $(".bottombuy .price .buybtn").attr({
    "href": _href,
    "onclick": _ga
  });
}

$(document).ready(function() {

  $(".textlink").target($(".comparison"));
  $('#dg-container').gallery();
  countdown((".countdown1 b"));
  countdown((".countdown2 b"));

  $(".bottombuy .select").on("mouseover", "li", function() {
    selectfun($(this));
  });

  $(".benfits .detail-list dl").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index() + 1));
    $(".benfits .zoom li").removeClass('active').eq($(this).index() + 1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .list-icon li").removeClass('active').eq($(this).index() + 1).addClass('active');
  });

  $(".benfits .list-icon li").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if (num == 0) {
      $(".benfits .detail-list dl").removeClass("active");
    } else {
      $(".benfits .detail-list dl").eq($(this).index() - 1).addClass("active").siblings().removeClass("active");
    }
    $(".benfits .list-icon li").removeClass('active');
    $(this).addClass('active');
  });

});