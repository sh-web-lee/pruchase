$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};
var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('"+ countdown +"')", 1);
};
function getCycleCountdown () {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}
$(function() {
  $(window).scrollWindow($(".banner .buybtn"), $('.feature dl'), ("on"));
  $(".users li").userMouseover($(".content dl"));
  $(".intro").target($(".comparison "), 0);
  countdown((".banner h3 strong"));
  $(".bottombuy ul li").click( function () {
    $(this).addClass("active").siblings().removeClass("active");
    var index = $(this).index();
    $(".bottombuy .buybtn").attr("href", $(".banner .box").eq(index).find(".buybtn").attr("href"));
    $(".bottombuy .buybtn").attr("onclick", $(".banner .box").eq(index).find(".buybtn").attr("onclick"));
    if(index==0) {
      $(".bottombuy .left-img").removeClass("one-box");
      $(".bottombuy .price strong b").html("15")
      $(".bottombuy .price del").html("69,94???")
    }
    else {
      $(".bottombuy .left-img").addClass("one-box");
      $(".bottombuy .price strong b").html("12")
      $(".bottombuy .price del").html("19,99???")
    }
  });
});
