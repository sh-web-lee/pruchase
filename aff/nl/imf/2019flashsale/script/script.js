// Cycle count down
function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 24:00:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 3);
  $(".countdown:eq(0) strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(".countdown:eq(1) strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("getCycleCountdown()", 1);
}

$(function() {

  getCycleCountdown();

  $(".bottombuy").on("click", "li", function() {
    var index = $(this).index();
    var num = $(this).attr("data-num");
    var url = $(".offer").eq(num).find(".buybtn").attr("href");
    var price = $(this).attr("data-price");
    var del = $(this).attr("data-del");
    $(this).addClass("active").siblings().removeClass("active");
    $(".boxes").animate({
      "marginLeft": -index * 271
    }, 500);
    $(".bottombuy .price strong").text(price);
    $(".bottombuy .price del").text(del);
    $(".bottombuy .price").attr("class", "price price0" + index);
    $(".bottombuy .buybtn").attr("href", url);
  });

  $(".feature").on("mouseenter", "dl", function() {
    var index = $(this).attr("data-index");
    $("#show" + index).addClass("on").siblings().removeClass("on");
    $(".detail-show").addClass("on");
  }).stop().on("mouseleave", "dl", function() {
    $(".showes").removeClass("on");
    $(".detail-show").removeClass("on");
  });
});