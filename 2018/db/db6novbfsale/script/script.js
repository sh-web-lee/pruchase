$(function () {
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
      $(".floatlayer").addClass("on");
    }else {
      $(".floatlayer").removeClass("on");
    }
  });

  $(".pop p.note i").on("mouseover", function () {
    $(".pop p.hiddennote").addClass("on");
  }).stop().on("mouseleave", function () {
    $(".pop p.hiddennote").removeClass("on");
  });

  packsGet();
  productFunStart();
  setTimeout('decreasingPacks(1)', 3000);
});

function popShow () {
  timeInit();
  if(times>0){
    $(".pop").addClass("show");
    countdown();
  }
}

function popClose () {
  $(".pop").removeClass("show");
}

function countdown () {
  var ten = 0;
  var unit= 0;
  if(times >= 0) {
    ten = Math.floor(times/10);
    unit = Math.floor(times) - (ten*10);
    $("p.ten").animate({
      "marginTop": ten*(-18)
    },300);
    $("p.unit").animate({
      "marginTop": unit*(-18)
    },300);
    times --;
    setTimeout('countdown()',1000);
  }else {
    popClose();
  }
}

var soldNum = 0;
var one = 0;
var two = 0;
var three = 0;
var four = 0;

function productFunStart () {
  one = Math.floor(packsNum/1000);
  two = Math.floor(packsNum/100) - one*10;
  three = Math.floor(packsNum/10) - one*100 - two*10;
  four = Math.floor(packsNum) - one*1000 - two*100 - three*10;

  $("p.one").animate({
    "marginTop": one*(-48)
  },300);
  $("p.two").animate({
    "marginTop": two*(-48)
  },300);
  $("p.three").animate({
    "marginTop": three*(-48)
  },300);
  $("p.four").animate({
    "marginTop": four*(-48)
  },300);
  sold = 2000 - packsNum;
  $("span.soldNum").text(sold);
}

function reduce(){
  $("img.reduce").css({
    "opacity": 1,
    "bottom": 0
  }).animate({
    "opacity": 0,
    "bottom": 20
  },1000);
}

function packsGet() {
  var date = new Date();
  var cName = "endbhall" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  packsNum = (arr == null) ? 78 : arr[2];
}

function decreasingPacks(isFirst) {
  var dateNow = new Date();
  $.ajax({
    type: "GET",
    url: "db6novblackfriday.php",
    data: "action=getPacks&r=" + Math.random() + "&d=" + dateNow.getDate() + (isFirst == 1 ? '&f=1' : ''),
    success: function(sPacks) {
      var rePacks = packsNum - sPacks;
      if (rePacks > 0) {
        packsNum = sPacks;
        productFunStart ();
        reduce();
      }
    }
  });
  setTimeout('decreasingPacks()', 10000);
}

function mouseOut(e) {
  if (e.clientY < 5) {
    popShow();
    cSet('hallpop','1');
    $(document).unbind('mousemove', mouseOut);
  }
}

window.onload = function () {
  if(cGet('hallpop')==1){
    popShow();
  }else {
    $(document).bind('mousemove', mouseOut);
  }
};

function cSet(cName, cVal) {
  var exp = new Date();
  cName = cName + exp.getDate();
  var Days = 2;
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function timeInit(){
  var cName='halltime';
  var date = new Date();
  var nowTime=Math.floor(date.getTime()/1000);
  var expireTime=cGet(cName);
  if(expireTime==null){
    expireTime=nowTime+60;
    cSet(cName,expireTime);
  }
  times=expireTime-nowTime;
}