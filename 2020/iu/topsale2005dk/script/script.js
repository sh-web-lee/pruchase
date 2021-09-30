function footbuyFun(selector) {
  var index = selector.index();
  var dataName = selector.attr("data-num");
  var dataUrl = $(".banner dl").eq(dataName).find(".buybtn").attr("href");
  var dataGa = $(".banner dl").eq(dataName).find(".buybtn").attr("onclick");
  var discount = $(".banner dl").eq(dataName).find(".price strong big").text();
  var original = $(".banner dl").eq(dataName).find(".price del").text();
  selector.addClass("active").siblings().removeClass("active");
  $(".footbuy .box img").stop().animate({"marginLeft": -index*265}, 300);
  $(".footbuy .price del").text(original);
  $(".footbuy .price strong big").text(discount);
  $(".footbuy .buybtn").attr({
    "href": dataUrl,
    "onclick": dataGa
  });
}

$(function () {
  $('#dg-container').gallery();
  $(".footbuy li").on("click", function() {
    footbuyFun($(this));
  });
});

$(window).on('scroll', function() {
  if ($(document).scrollTop() > $(".intro").offset().top - 300) {
    $(".intro dl").addClass("on");
  }
});