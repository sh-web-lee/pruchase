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
  countdown((".box.three-gift span "));
  countdown((".donation p strong "));
  $(".review .users li").userMouseover($(".review .content dl"));
});
$(".bottom-buy ul li").click(function(){
  var num = $(this).index();
  $(this).addClass("active").siblings().removeClass("active");
  var tw=MApp(2.2).datetime.getTimeZone();
  if(num==0) {
    $(".bottom-buy .img-box").removeClass("three-gift").removeClass("three-box");
    $(".bottom-buy .buybtn").attr("href","https://www.iobit.com/buy.php?product=fr-imf61pc1799&ref=fr_imf61pcpurchase1804"+refStr+"&aff=&refs=fr_purchase_imf&tw="+tw);
    $(".bottom-buy .buybtn").attr("onclick","ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1801b-fr')")
    $(".bottom-buy dl dt").html("<strong>17</strong><span><span>€99</span> <del>39,95€</del></span>")
  }
  else if(num==1) {
    $(".bottom-buy .img-box").addClass("three-gift").removeClass("three-box");
    $(".bottom-buy .buybtn").attr("href","https://www.iobit.com/buy.php?product=fr-imf6amcpfsd2199&ref=fr_imf6amcpfsdpurchase1804"+refStr+"&aff=&refs=fr_purchase_imf&tw="+tw);
    $(".bottom-buy .buybtn").attr("onclick","ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1801a-fr')")
    $(".bottom-buy dl dt").html("<strong>21</strong><span><span>€99</span> <del>169,96€</del></span>")
  }
  else {
    $(".bottom-buy .img-box").removeClass("three-gift").addClass("three-box");
    $(".bottom-buy .buybtn").attr("href","https://www.iobit.com/buy.php?product=fr-imf63pc2199&ref=fr_imf63pcpurchase1804"+refStr+"&aff=&refs=fr_purchase_imf&tw="+tw);
    $(".bottom-buy .buybtn").attr("onclick","ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1801c-fr')")
    $(".bottom-buy dl dt").html("<strong>21</strong><span><span>€99</span> <del>79,99€</del></span>")
  }
});