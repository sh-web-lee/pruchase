function goTarget(target) {
  var Theigth = target.offset().top;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}


$(function () {
  timeInit();
  showcase(".showlist li");
  showLarge(".box-container img");
  $(".stratum").click(function () {
    closeStratum();
  });
  $(".stratum .stratumlist").click(function (event) {
    event.stopPropagation();
  });
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 58) {
      $(".countdown").addClass("on");
    } else {
      $(".countdown").removeClass("on");
    }
  });
});

var showcase = function (showlist) {
  $(showlist).click(function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".showcase").attr("class", "showcase showcase"+ index);
    $(".showcase .box-container").stop().animate({"marginLeft": -552*index}, 300);
  });
};

var showLarge = function (bigImg) {
  $(bigImg).click(function () {
    var index = $(this).index();
    if(index > 0) {
      $(".stratum").fadeIn(500).find("img").attr("src", pictures[index-1]);
    }
  });
};

var closeStratum = function () {
  $(".stratum").fadeOut(500);
};

var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('"+ countdown +"')", 1);
};

function getCycleCountdown () {
  //var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(countTime, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}
function cGet(name) {
  var exp = new Date();
  name=name+exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}
function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}
function timeInit(){
  var cName='ptascjun_t';
  countTime=cGet(cName);
  if(countTime==null){
    var date=new Date();
    countTime=Math.floor(date.getTime()/1000)+30600;
    cSet(cName,countTime);
  }else{
    countTime=parseInt(countTime);
  }
  countdown((".countdown strong"));
}