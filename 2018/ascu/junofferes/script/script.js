$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
  });
};
$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};
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

$(function() {
  $(".users li").userMouseover($(".content dl"));
  countdown(("#banCountdown strong"));
  countdown(("#footCountdown strong"));
  $(".intro .more").target($(".comparison"));
  $(".banner .right i").target($(".donation"), 50);
  $(window).on('scroll', function() {　
    if ($(document).scrollTop() > $(".intro").offset().top - 300) {
      $(".intro .list").addClass("active");
    }
  });
  packsInit();
});

function packsInit(){
  var date = new Date();
  var cName = "esascup" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs=129;
  } else {
    packs=arr[2];
  }
  $('.packsNum').html(packs);
  setTimeout('getPacks()',30000);
}

function getPacks(){
  var date=new Date();
  $.ajax({
    type:'GET',
    url:'index.php',
    data:'action=getPacks&d='+date.getDate(),
    success:function(sPacks){
      if(!isNaN(sPacks)){
        if(sPacks!=packs) {
          $('.packsNum').html(sPacks);
        }
      }
    }
  });
  setTimeout('getPacks()',30000);
}