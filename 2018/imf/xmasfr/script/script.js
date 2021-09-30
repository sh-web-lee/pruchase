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
$('.intro .cont li').mouseover(function() {
  var num = $(this).index();
  $(this).addClass("active").siblings().removeClass('active');
  $(".intro .img-change > img").eq(num).addClass("active").siblings().removeClass('active');
  $(".intro .img-glass li").eq(num).addClass("active").siblings().removeClass('active');
});

$(function() {
  countdown((".sold-box h3 strong "));
  countdown((".donation p strong "));
  $(".review .users li").userMouseover($(".review .content dl"));
});
 $(".bottomcart li").on("click", function() {
    var index = $(this).index();
    var num = $(".banner .box").eq(index).attr("data-num");
    switch (index) {
      case 0:
        $(".bottomcart .img").addClass("three-pc").removeClass("one-pc");
        break;
      case 1:
        $(".bottomcart .img").removeClass("three-pc").removeClass("one-pc");
        break;
      case 2:
        
        $(".bottomcart .img").addClass("one-pc").removeClass("three-pc");
        
        break;
      default:
    }
    var discount = $(".banner .box").eq(num).find("dt strong").text();
    var discount2 = $(".banner .box").eq(num).find("dt span").text();
    var original = $(".banner .box").eq(num).find("dt del").text();
    var btnHref = $(".banner .box").eq(num).find(".button").attr("href");
    var btnGa = $(".banner .box").eq(num).find(".button").attr("onclick");

    $(this).addClass("active").siblings().removeClass("active");
    $(".bottomcart .btnarea").find("dt b").text(discount);
    $(".bottomcart .btnarea").find("dt span").text(discount2);
    $(".bottomcart .btnarea").find("dt del").text(original);
    $(".bottomcart .btnarea").find(".button").attr("href", btnHref);
    $(".bottomcart .btnarea").find(".button").attr("onclick", btnGa);
 });