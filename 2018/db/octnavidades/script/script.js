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

$(function () {
  //goto comparison-table
  $("a.intro").target($(".comparison-table"));
  //review
  $(".review dl dt .img-box").mouseover(function () {
    $(this).parent().parent().addClass("active").siblings().removeClass("active");
  });
  //benifts
  $(".benfits .detail-list dl").hover(function() {
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  });
});

// progressbar
function focus() {
  $('.progressbar > span').append('<span class="reduce"></span>');
  var tReduce = new TimelineLite();
  tReduce.to('.reduce', 1.5, {
    y: -100,
    autoAlpha: 0,
    onComplete: function() {
      $('.reduce').remove();
    }
  });
  if(packs<90){
    $(".db-reduce").css({ "opacity": 1, "bottom": 0, "zIndex": 8}).animate({ "opacity": 0, "bottom": 40, "zIndex": -9}, 1500);
  }else{
    $(".db-reduce").css({ "opacity": 1, "bottom": 0, "zIndex": 8}).animate({ "opacity": 0, "bottom": 40, "zIndex": -9}, 400);
  }
}
function flipNum(num) {
  var number =num*0.86;
  $(".progressbar > span").css("width",number);
  setTimeout(function () {
    focus();
  }, 500);
}

function getPacksNum(){
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "octnavidades.php",
    data: "action=getPacks&d="+date.getDate()+"&r="+Math.random(),
    success: function(res){
      var packsInfo=JSON.parse(res);
      if(packs!=packsInfo['packsNum']){
        packs=packsInfo['packsNum'];
        showPacksNum(packs);
        flipNum(packs);
      }
      var viewNum=packsInfo['viewNum'];
      $('.packsNum').html(packs);
      if(packs<89) {
        $('.viewNum').html(viewNum);
      }
    }
  });
  if(packs>90){
    setTimeout('getPacksNum()', 500);
  }else{
    setTimeout('getPacksNum()', 12000);
  }
}

$(function(){
  packsInit();
});

function showPacksNum(packs) {
  var one = Math.floor(packs/100);
  var two = Math.floor(packs/10) - one*10;
  var three = Math.floor(packs) - one*100 - two*10;
  $("p.surplus b").eq(0).html(one).end().eq(1).html(two).end().eq(2).html(three);
}

function packsInit(){
  var date = new Date();
  var cName = "frdboct" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs=98;
  } else {
    packs=arr[2];
  }
  showPacksNum(packs);
  var number =packs*0.86;
  $(".progressbar > span").css("width",number);
  $('.packsNum').html(packs);
  if(packs>90){
    setTimeout('getPacksNum()', 500);
  }else{
    setTimeout('getPacksNum()', 12000);
  }
}

