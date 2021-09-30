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
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};
$(window).on('scroll', function () {
  if ($(window).scrollTop() > $(".banner .three-gift").offset().top) {
    $('.intro dl').addClass("on");
  }
  else if($(window).scrollTop() < $(".banner h2").offset().top) {
    $('.intro dl').removeClass("on");
  }
});

$.fn.changeActive = function(clickName,buybtn,fun) {
  $(this).on(clickName,function() {
   var num = $(this).index();
   $(this).addClass("active").siblings().removeClass("active");
   buybtn.attr("href",$(this).attr("data-url"));
   $(".price").html($(this).attr("data-price"));
   $(".original").html($(this).attr("data-original"));
   fun(num);
 });
};
$(function() {
  countdown((".banner ul li strong"));
  countdown((".donation ul li strong"));
  $(".users li").userMouseover($(".content dl"));
  $(".bottom-buy li").changeActive("click",$(".bottom-buy .buybtn"), function(num){
    if (num==0) {
      $(".bottom-buy .img-box").addClass("one-pc").removeClass("three-pc");
    }
    else {
      $(".bottom-buy .img-box").removeClass("one-pc").removeClass("three-pc");
    }
   });
});