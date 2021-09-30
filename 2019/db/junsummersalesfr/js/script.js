$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};


$(window).on('scroll', function () {
  if ($(window).scrollTop() > $(".benfits").offset().top) {
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
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2019-06-27 24:00:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}



$(function () {
  packsInit();
  $("a.intro").target($("#compare"), 200);
   countdown((".date strong"));
  //goto comparison-table
  //benifts
  $(".benfits .detail-list dl").hover(function() {
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  });
  //review
  $(".review dl dt .img-box").mouseover(function () {
    $(this).parent().parent().addClass("active").siblings().removeClass("active");
  });
});

function packsInit() {
  var date = new Date();
  var cName = "frdbsum_p" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 78;
  } else {
    packs = arr[2];
  }
  $(".packsNum").html(packs);
  setTimeout('getSales()', 6000);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "2019summersales.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function (packsNum) {
      if(!isNaN(packsNum)){
        $(".packsNum").html(packsNum);
      }
    }
  });
  setTimeout('getSales()', 6000);
}
