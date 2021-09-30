$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};



$("a.intro").target($("#compare"), 100);



$(function () {
  //benifts
  $(".benfits .detail-list dl").hover(function() {
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  });
  //review
  $(".usereview .users li").mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("current").siblings().removeClass("current");
    $(".userbox dl").eq(num).addClass("active").siblings().removeClass("active");
  });
  //bottomcart
  $(".bottomcart ul li").click(function () {
    var num = $(this).index();
    var dataName = $(this).attr("data-name");
    
      $(this).addClass("active").siblings().removeClass("active");
      $(".bottomcart .buybtn").attr("href", $(".banner .box[data-name=\'" + dataName + "\']").find(".buybtn").attr("href"));
      $(".bottomcart dl dt strong b").text($(".banner .box[data-name=\'" + dataName + "\']").find("b").text());
      //$(".bottomcart p.price del").text($(this).attr("data-original"));
      if(num === 0) {
        $(".bottomcart .img").removeClass("three-pc").removeClass("one-pc");
      }else if(num === 1) {
        $(".bottomcart .img").addClass("three-pc").removeClass("one-pc");
      }
      else {
        $(".bottomcart .img").addClass("one-pc").removeClass("three-pc");
      }
  });
});
