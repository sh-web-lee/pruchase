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

$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};

$(function() {
  countdown(("#bandown b"));
  countdown(("#giftdown b"));

  $(".review .users li").userMouseover($(".review .content dl"));

  $('.intro .cont li').mouseover(function() {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass('active');
    $(".intro .img-change > img").eq(num).addClass("active").siblings().removeClass('active');
    $(".intro .img-glass li").eq(num).addClass("active").siblings().removeClass('active');
  });

  $(".footbuy li").on("click", function() {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    switch (index) {
      case 0:
        $(".footbuy .imgbox").addClass("one").removeClass("three gift");
        break;
      case 1:
        $(".footbuy .imgbox").addClass("gift").removeClass("three one");
        break;
      case 2:
        $(".footbuy .imgbox").addClass("three").removeClass("one gift");
        break;
      default:
    }
    var discount = $(".banner .box").eq(index).find(".discount").text();
    var original = $(".banner .box").eq(index).find(".original").text();
    var btnHref = $(".banner .box").eq(index).find(".buybtn").attr("href");
    var btnGa = $(".banner .box").eq(index).find(".buybtn").attr("onclick");
    $(".footbuy .discount").text(discount);
    $(".footbuy .original").text(original);
    $(".footbuy .buybtn").attr("href", btnHref);
    $(".footbuy .buybtn").attr("onclick", btnGa);
  });
});