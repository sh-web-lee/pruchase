$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};
$.fn.userMouseover = function (UserMessage) {
   $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
   });
};
$(function () {
  $("a.compareBtn").target($(".comparison"));
  $(".users li").userMouseover($(".content dl"));
});

// progressbar
function focus() {
  $('.progressbar > span').append('<span class="reduce"></span>');
  setTimeout(function () { $('.progressbar .reduce').addClass("zoomout")}, 100);
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
    url: "index.php",
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
  $(".price-content h3 b").eq(0).html(one).end().eq(1).html(two).end().eq(2).html(three);
}

function packsInit(){
  var date = new Date();
  var cName = "essdoct" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs=98;
  } else {
    packs=arr[2];
  }
  showPacksNum(packs);
  var number =packs*0.86;
  $('.packsNum').html(packs);
  $(".progressbar > span").css("width",number);
  if(packs>90){
    setTimeout('getPacksNum()', 500);
  }else{
    setTimeout('getPacksNum()', 12000);
  }
}
