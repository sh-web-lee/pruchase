//userreview 
function switchover(name, clickname, active, contname) {
  $(name).on(clickname, function() {
    var num = $(this).index();
    $(name).eq(num).addClass(active).siblings().removeClass(active);
    $(contname).eq(num).addClass(active).siblings().removeClass(active);
  });
}

//time
var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s).end().eq(4).html(mi);
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}
$.fn.target=function (target,yoffset) {
  $(this).click(function() { 
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
};

$(function() {
  countdown(("#countdown strong"));
  $(".info").target($(".donation"),0);
  switchover(".users li", "mouseover", "active", ".review .content > dl");
  $(window).on('scroll', function() {　
    if ($(document).scrollTop() > $(".intro").offset().top - 300) {
      $(".intro .list").addClass("active");
    }
  });
  $(".footbuy ul li").click( function () {
    $(this).addClass("active").siblings().removeClass("active");
    var index = $(this).index();
    if(index==1) {
      $(".footbuy .imgbox").removeClass("one-pc");
    }
    else {
      $(".footbuy .imgbox").addClass("one-pc");
    }
  });
});