function switchover(name, clickname, active, contname) {
  $(name).on(clickname, function() {
    var num = $(this).index();
    $(name).eq(num).addClass(active).siblings().removeClass(active);
    $(contname).eq(num).addClass(active).siblings().removeClass(active);
  });
}

var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 16:00:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

$(function() {
  countdown((".countdown1 strong"));
  switchover(".users li", "mouseover", "active", ".review .content > dl");

  $(".footbuy li").on("mouseover", function() {
    var discount, original;
    var num = $(this).index();
    var index = $(this).attr("data-num");
    $(this).addClass("active").siblings().removeClass("active");
    $(".footbuy .price").find(".original").removeClass("hide");
    $(".footbuy .price b").find("span").removeClass("hide");
    discount = $(".banner .list").eq(index).find(".discount").text();
    original = $(".banner .list").eq(index).find(".original").text();
    $(".footbuy .price").find(".discount").text(discount);
    $(".footbuy .price").find(".original").text(original);
    var btnHref = $(".banner .list").eq(index).find(".buybtn").attr("href");
    var btnGa = $(".banner .list").eq(index).find(".buybtn").attr("onclick");
    var sale = $(".banner .list").eq(index).find(".sale").text();
    $(".footbuy .imgbox").find("img").eq(num).addClass("active").siblings().removeClass("active");
    $(".footbuy .buybtn").attr("href", btnHref);
    $(".footbuy .buybtn").attr("onclick", btnGa);
    $(".footbuy .price").find(".sale").text(sale);
  });
});