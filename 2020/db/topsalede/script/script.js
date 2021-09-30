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
    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
      $('.feature .machine img').addClass("on");
    }
  });

  $(".feature h2 em").target($(".footer"), 0);

  //bottombuy
  $(".bottombuy ul li").click(function() {
    var index = $(this).index();
    var num = $(this).attr("data-num");
    var url = $(".banner ul").eq(num).find(".buybtn").attr("href");
    var ga = $(".banner ul").eq(num).find(".buybtn").attr("onclick");
    var price = $(".banner ul").eq(num).find(".off span").text();
    var original = $(".banner ul").eq(num).find(".off del").text();
    $(this).addClass("active").siblings().removeClass("active");
    $(".bottombuy .box img").stop().animate({
      "marginLeft": -292 * index
    }, 300);
    $(".bottombuy dl dd .price strong").find("big").text(price);
    $(".bottombuy dl dd .price del").text(original);
    $(".bottombuy dl dd .buybtn").attr({
      "href": url,
      "onclick": ga
    });
  });
});