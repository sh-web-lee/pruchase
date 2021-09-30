$(window).scroll(function() {
  var scrollTop = $(this).scrollTop();
  var scrollHeight = $(document).height();
  var windowHeight = $(this).height();
  if (scrollTop + windowHeight < scrollHeight && scrollTop > 200) {
    $(".floatlayer").addClass("on");
    $(".backtotop .box").addClass("on");
  } else if (scrollTop + windowHeight == scrollHeight) {
    $(".floatlayer").removeClass("on");
  } else if (scrollTop == 0) {
    $(".floatlayer").removeClass("on");
    $(".backtotop .box").removeClass("on");
  }
  var stopHeight = $(".award").offset().top;
  if ($(window).scrollTop() > 220 && $(window).scrollTop() <stopHeight) {
    $('.imf-message dl').addClass('on');
  }
  else {
    $('.imf-message dl').removeClass('on');
  }
});
$.fn.target=function (target,yoffset) {
  $(this).click(function() { 
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
};
$.fn.changeActive = function(clickName,buybtn) {
  $(this).on(clickName,function() {
   var num = $(this).index();
   $(this).addClass("active").siblings().removeClass("active");
   buybtn.attr("href",$(this).attr("data-url"));
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
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0,2);;
}
countdown((".date li"));
$(".imf-message a").target($("#compare"),0);
$(".three-box .message i").target($(".imf-message"),0);
$(".backtotop").target($(".header"),0);
$(".floatlayer ul li").changeActive("click",$(".floatlayer .buybtn"));