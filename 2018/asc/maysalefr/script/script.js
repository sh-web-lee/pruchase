$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
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
  countdown(("#banCountdown strong"));
  countdown(("#giftCountdown strong"));
  $(window).scrollWindow($(".donation .buybtn"), $('.review dl'), ("on"));
  $(".feature .textlink").target($("#compare"), 0);

  $(".feature .detail-list dl").hover(function() {
    $(this).addClass('active').siblings().removeClass("active");
    $(".feature .showcase .screenshot").css('marginLeft', -392 * ($(this).index()));
    $(".feature .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  });

  $(".footbuy li").on("click", function() {
    var index = $(this).index();
    var dataName = $(this).attr("data-num");
    var dataUrl = $(".banner .offer").eq(dataName).find(".buybtn").attr("href");
    var dataGa = $(".banner .offer").eq(dataName).find(".buybtn").attr("onclick");
    var original = $(".banner .offer").eq(dataName).find(".original").text();
    var discount = $(".banner .offer").eq(dataName).find(".discount").text();
    $(this).addClass("active").siblings().removeClass("active");
    $(".footbuy .imgbox").find("img").eq(index).addClass("active").siblings().removeClass("active");
    $(".footbuy .original").text(original);
    $(".footbuy .discount").text(discount);
    $(".footbuy .buybtn").attr("href", dataUrl);
    $(".footbuy .buybtn").attr("onclick", dataGa);
  });
});