$.fn.changeActive = function(clickName,buybtn,fun) {
  $(this).on(clickName,function() {
   var num = $(this).index();
   $(this).addClass("active").siblings().removeClass("active");
   buybtn.attr("href",$(this).attr("data-url"));
   buybtn.attr("onclick",$(this).attr("data-ga"));
   $(".price").html($(this).attr("data-price"));
   $(".original").html($(this).attr("data-original"));
   fun(num);
 });
};
$.fn.target=function (target,yoffset) {
  $(this).click(function() { 
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
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
 $(function(){
  $(".buy-bottom ul li").changeActive("mouseover",$(".buy-bottom .buy-btn"), function(num){
  if (num==0) {
    $(".buy-bottom .img-box").removeClass("c").removeClass("b").addClass("a");
    $(".buy-container p span").html("121,97€");
  }
  else if(num==1) {
     $(".buy-bottom .img-box").removeClass("a").removeClass("c").addClass("b");
     $(".buy-container p span").html("32€");
  }
  else {
     $(".buy-bottom .img-box").removeClass("a").removeClass("b").addClass("c");
     $(".buy-container p span").html("13€");
  }
 });
 $(".introduction a").target($("#compare"),0);
  countdown((".countdown span"));
});