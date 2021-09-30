//time
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
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

$(function() {
  $(window).on('scroll', function() {　
    if ($(document).scrollTop() > $(".intro").offset().top - 300) {
      $(".intro .list").addClass("active");
    }
  });
  countdown(("#countdown strong"));
  $(".banner .pcs i").target($(".giveway"), 0);

  $(".footbuy li").on("click", function() {
    var index = $(this).index();
    var dataUrl = $(".banner .list").eq(index).find(".buybtn").attr("href");
    var dataGa = $(".banner .list").eq(index).find(".buybtn").attr("onclick");
    var original = $(".banner .list").eq(index).find(".original").text();
    var discount = $(".banner .list").eq(index).find(".discount").text();
    var off = $(".banner .list").eq(index).find(".price").attr("data-off");
    $(this).addClass("active").siblings().removeClass("active");
    $(".footbuy .imgbox").find("img").eq(index).addClass("active").siblings().removeClass("active");
    $(".footbuy .price").find("del").text(original);
    $(".footbuy .price").find(".discount").text(discount);
    $(".footbuy .off").find("font").text(off);
    $(".footbuy .buybtn").attr("href", dataUrl);
    $(".footbuy .buybtn").attr("onclick", dataGa);
  });
});