
$.fn.target=function (target,yoffset) {
  $(this).click(function() { 
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
};



$(function () {
  //review
  $(".learn-more").target($(".comparison"),0);

});
$('.bottom ul li').click(function ( event ) {
  $(this).addClass("active").siblings().removeClass("active");
  var num =$(this).index();
  $('.bottom .buybtn').attr("href",$(".banner .box").eq(num).find(".buybtn").attr("href"));
  $('.bottom .buybtn').attr("onclick",$(".banner .box").eq(num).find(".buybtn").attr("onclick"));
  if(num==0) {
    $(".bottom .img-box").addClass("one-box");
    $(".bottom dl dt").html("<span>40%</span> de Desconto")
    $(".bottom dl dd.last").addClass("hide"); 

  }
  else {
    $(".bottom .img-box").removeClass("one-box");
    $(".bottom dl dt").html("<span>70%</span> de Desconto")
    $(".bottom dl dd.last").removeClass("hide");
  }
});