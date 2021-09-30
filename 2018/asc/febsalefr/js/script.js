$.fn.changeActive = function(clickName, buybtn) {
  $(this).on(clickName, function() {
    var index = $(this).index();
    var num = $(this).attr("data-num");
    var aHref = $(".banner .box").eq(num).find(".buy-btn").attr("href");
    var aGa = $(".banner .box").eq(num).find(".buy-btn").attr("onclick");
    var original = $(".banner .box").eq(num).find(".original").text();
    $(this).addClass("active").siblings().removeClass("active");
    $(".buy-bottom .img-box img").eq(index).addClass("active").siblings().removeClass("active");
    buybtn.attr("href", aHref);
    buybtn.attr("onclick", aGa);
    $(".buy-bottom .original").html(original);
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
var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
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

$(function() {
  $(".buy-bottom ul li").changeActive("mouseover", $(".buy-bottom .buy-btn"));
  $(".introduction a").target($("#compare"), 0);
  countdown((".banner .countdown strong"));
  countdown((".buy-mid .countdown strong"));
});