
$.fn.target=function (target,yoffset) {
  $(this).click(function() { 
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
};

var review = function (review) {
  $(review).mouseover(function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $("span.line").stop().animate({"marginLeft": 98*index}, 200);
    $(".review-message p").eq(index).addClass("active").siblings().removeClass("active");
  });
};


$(function () {
  //review
  review((".review ul li"));
  $(".sd-content p a ").target($(".comparison"),0);

});
$('.bottom ul li').click(function ( event ) {
  $(this).addClass("active").siblings().removeClass("active");
  var num =$(this).index();
  $('.bottom .buybtn').attr("href",$(".banner .box").eq(num).find(".buybtn").attr("href"));
  if(num==0) {
    $(".bottom .img-box").addClass("one-box");
    $(".bottom dl dt").html("<span>33%</span> Korting")
    $(".bottom dl dd.last").addClass("hide"); 

  }
  else {
    $(".bottom .img-box").removeClass("one-box");
    $(".bottom dl dt").html("<span>70%</span> Korting")
    $(".bottom dl dd.last").removeClass("hide");
  }
});
