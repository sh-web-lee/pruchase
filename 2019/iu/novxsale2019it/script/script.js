$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

var review = function(review) {
  $(review).mouseover(function() {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $("span.line").stop().animate({
      "marginLeft": 98 * index
    }, 200);
    $(".review-message p").eq(index).addClass("active").siblings().removeClass("active");
  });
};


$(function() {
  //review
  review((".review ul li"));
  light();
  $(".learn-more").target($(".comparison"), 100);

});
$('.bottom-content ul li').click(function(event) {
  $(this).addClass("active").siblings().removeClass("active");
  var num = $(this).index();
  $('.bottom-content .buybtn').attr("href", $(".banner .box").eq(num).find(".buybtn").attr("href"));
  $('.bottom-content .buybtn').attr("onclick", $(".banner .box").eq(num).find(".buybtn").attr("onclick"));
  if (num == 0) {
    $(".bottom-content .img-box").addClass("one-box");
    $(".bottom-content dl dt").html("<span>55%</span> di sconto");
    $(".bottom-content dl dd.last").addClass("hide");

  } else {
    $(".bottom-content .img-box").removeClass("one-box");
    $(".bottom-content dl dt").html("<span>85%</span> di sconto");
    $(".bottom-content dl dd.last").removeClass("hide");
  }
});

function light() {
  $(".light02").addClass("hide");
  $(".light").removeClass("hide");
  setTimeout(function() {
    $(".light").addClass("hide");
    $(".light01").removeClass("hide");
  }, 500);
  setTimeout(function() {
    $(".light,.light01").addClass("hide");
    $(".light02").removeClass("hide");
  }, 1000);
  setTimeout("light()", 1500)
}