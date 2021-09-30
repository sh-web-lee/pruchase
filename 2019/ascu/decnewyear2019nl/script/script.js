$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};
$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};

var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if (countdown === '.bottomcart .countdown b') {
    $(".bottomcart .countdown b").eq(0).attr("data-text", h);
    $(".bottomcart .countdown b").eq(1).attr("data-text", i);
    $(".bottomcart .countdown b").eq(2).attr("data-text", s);
    $(".bottomcart .countdown b").eq(3).attr("data-text", mi);
  }
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function showPop() {
  $('.popout').addClass('on');
}

$(function() {
  $("a.compareBtn").target($(".comparison"));
  $(".handle li").userMouseover($(".review .reviews"));
  countdown((".banner .countdown b"));
  countdown((".bottomcart .countdown b"));

  var ver = MApp(2.2).url.getParameters('ver');
  var patt = new RegExp('^12\.0\.(.*)');
  if (patt.test(ver)) {
    showPop();
  }
});