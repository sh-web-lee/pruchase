$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$(function () {
  //feature
  $(window).scrollWindow($(".banner .buybtn"),$('.feature .machine img'),("on"));
  //bottombuy
  $(".bottombuy ul li").click(function () {
    var index = $(this).index();
    var url = $(this).attr("data-url");
    var ga = $(this).attr("data-ga");
    var price = $(this).attr("data-price");
    var original = $(this).attr("data-original");
    $(this).addClass("active").siblings().removeClass("active");
    $(".bottombuy .box img").stop().animate({"marginLeft": -292*index}, 300);
    $(".bottombuy dl dd .price strong").text(price);
    $(".bottombuy dl dd .price del").text(original);
    $(".bottombuy dl dd .buybtn").attr({"href": url, "onclick": ga});
  });
});