$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};

$(window).on('scroll', function () {
  if ($(window).scrollTop() > $(".imf-message").offset().top) {
    $('.review dl').addClass("red-round");
  }else {
    $('.review dl').removeClass("red-round");
    $('.review dl.active').addClass("red-round");
  }
});
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
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0,2);
}
$(function () {
  //goto comparison-table
  $("a.intro").target($(".comparison-table"));
  countdown((".left-message ul li"));
  //review
  $(".review dl dt .img-box").mouseover(function () {
    $(this).parent().parent().addClass("active").siblings().removeClass("active");
  });
});


// progressbar
function focus() {
  if(packs<140){
    $(".db-reduce").css({ "opacity": 1, "bottom": 0, "zIndex": 8}).animate({ "opacity": 0, "bottom": 40, "zIndex": -9}, 1500);
  }else{
    $(".db-reduce").css({ "opacity": 1, "bottom": 0, "zIndex": 8}).animate({ "opacity": 0, "bottom": 40, "zIndex": -9}, 400);
  }
}
