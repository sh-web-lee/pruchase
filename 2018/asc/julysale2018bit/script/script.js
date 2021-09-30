$.fn.target = function (target, yoffset) {
  $(this).click(function () {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

$.fn.scrollWindow = function (topheight, scrollclass, ClassName) {
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$(function () {
  //textlink
  $(".textlink").target($(".compare"), 0);

  //reviews
  $(window).scrollWindow($(".gifts .lists"), $('.reviews dl'), ("on"));
  $(window).scrollWindow($(".tag"), $('.content ul'), ("on"));

  // sconto changes
  $(".sconto").click(function () {
    var _sconto = $(this).attr("data-sconto");
    if (_sconto == 40) {
      asc_40_Activity();
      $(".sconto40").addClass("active").siblings().removeClass("active");
      $(".asc-sconto40").addClass("active").siblings().removeClass("active");
      $("#asc-off80").animate({"marginTop": -427}, 500);
      $(".bottomcart-box img").addClass("on");
      $(".sconto80-buy").animate({"marginTop": -245}, 500);
    } else if (_sconto == 80) {
      asc_80_Activity();
      $(".sconto80").addClass("active").siblings().removeClass("active");
      $(".asc-sconto80").addClass("active").siblings().removeClass("active");
      $("#asc-off80").animate({"marginTop": 0}, 500);
      $(".bottomcart-box img").removeClass("on");
      $(".sconto80-buy").animate({"marginTop": 0}, 500);
    }
  })

  //initialize
  //asc_80_Activity();

});

//when times < 10s
function timerBlink() {
  $("p.countdown").addClass("blink");
}

//pop-01
function firstPopShow() {
  if(productType==2){
    popSmallCountdown();
  }else {
    var date = new Date();
    var nowTime = Math.floor(date.getTime() / 1000);
    var cName = "mask40";
    countTime40 = cGet(cName);
    if (countTime40 == null) {
      countTime40 = nowTime + 667;
      cSet(cName, countTime40);
    }

    maskTime = -1;
    cSet('mask_t', maskTime);
    $(".pop-backdrop").addClass("on");
    TweenMax.to(".pop-01", .3, {
      visibility: "visible",
      scale: 1
    });
  }
}
//pop-02
function secondPopShow() {
  $(".pop-backdrop").addClass("on");
  TweenMax.to(".pop-02", .3, {
    visibility: "visible",
    scale: 1
  });
}
function secondPopHide() {
  TweenMax.to(".pop-02", .3, {
    scale: 0,
    x: "0%",
    y: "0%",
    visibility: "hidden"
  });
}
//rinuncio
// function rinuncio() {
//     TweenMax.to(".pop-01", .3, {
//         scale: 0,
//         visibility: "hidden",
//         onComplete: function () {
//             secondPopShow();
//         }
//     });
// }
//minimizza
function minimizza() {
  TweenMax.to(".pop", .3, {
    x: "50%",
    y: "50%",
    scale: 0,
    visibility: "hidden",
    onComplete: function () {
      $(".pop-backdrop").removeClass("on");
      $(".pop-small").show();
    }
  })
}
//massimizza
function massimizza() {
  $(".pop-small").hide();
  TweenMax.to(".pop-01", .3, {
    onStart: function () {
      $(".pop-backdrop").addClass("on");
      secondPopHide();
    },
    scale: 1,
    x: "0%",
    y: "0%",
    visibility: "visible"
  });
}
//refuse
function refuse() {
  TweenMax.to(".pop", .3, {
    scale: 0,
    visibility: "hidden"
  });
  $(".pop-backdrop").removeClass("on");
}


//progress-bar
function focus() {
  $('.progress-bar .bar >span').append('<span class="reduce"></span>');
  var tReduce = new TimelineLite();
  tReduce.to('.reduce', 1.5, {
    y: -100,
    autoAlpha: 0,
    onComplete: function () {
      $('.reduce').remove();
    }
  })
}

function pack(number, starnumber) {
  $('.gift').prop('number', starnumber).animateNumber({
      number: number
    },
    500
  );
}

function flipNum(num) {
  var number =390 - (79-num) * 4.9;
  $(".progress-bar .bar >span").css("width", number);
  setTimeout(function () {
    focus();
  }, 500);
}
function asc_80_Activity() {
  productType=1;
  console.log(statusCheck());
  if((statusCheck()==1)&&(maskTime==-1)){
    $('.pop-small').css('display','block');
  }else{
    $('.pop-small').css('display','none');
  }
  $(".pop .container img").attr("src", sconto_50.imgUrl);
  $(".pop.pop-01 .container a.buybtn").attr("href", sconto_50._href1).attr("onclick", sconto_50._ga1);
  $(".pop.pop-02 .container a.buybtn").attr("href", sconto_50._href2).attr("onclick", sconto_50._ga2);
  $(".pop-small a.buybtn").attr("href", sconto_50._href3).attr("onclick", sconto_50._ga3);
  $("dl.originale dd del").text(sconto_50.price1);
  $("dl.scontato dd del").text(sconto_50.price2);
  $("dl.ulteriore dd strong").text(sconto_50.price3);
  $("dl.ulteriore dt span").text(sconto_50.off);
  $(".pop-small p.price strong").text("-" + sconto_50.off + "€");
  $(".gifts a.buybtn").attr("href", sconto_50._href).attr("onclick", sconto_50._ga);
}
function asc_40_Activity() {
  productType=2;
  $('.pop-small').css('display','none');
  // $(".pop .container img").attr("src", sconto_30.imgUrl);
  // $(".pop.pop-01 .container a.buybtn").attr("href", sconto_30._href1).attr("onclick", sconto_30._ga1);
  // $(".pop.pop-02 .container a.buybtn").attr("href", sconto_30._href2).attr("onclick", sconto_30._ga2);
  $("dl.originale dd del").text(sconto_30.price1);
  $("dl.scontato dd del").text(sconto_30.price2);
  $("dl.ulteriore dd strong").text(sconto_30.price3);
  $("dl.ulteriore dt span").text(sconto_30.off);
  // $(".pop-small p.price strong").text("-" + sconto_30.off + "€");
  // $(".pop-small a.buybtn").attr("href", sconto_30._href3).attr("onclick", sconto_30._ga3);
}

// asc-sconto80-activity-end
function ascActivityEnd() {
  $('.pop-small').css('display','none');
  $(".content-box .asc-sconto80").removeClass("active").addClass("over").siblings().addClass("active");
  $(".content-box img.esaurito").addClass("on");
  $(".content-off #asc-off80").animate({"marginTop": -427}, 500);
  $(".lists").addClass("esaurito");
  $(".bottomcart-box img").addClass("on");
  $(".bottomcart-off .sconto80").removeClass("active").addClass("over").siblings().addClass("active");
  $(".bottomcart-off img.bottomcart-esaurito").addClass("on");
  $(".bottomcart-buy .sconto80-buy").animate({"marginTop": -245}, 500);
  $(".gifts a.buybtn").attr("href", sconto_30._href).attr("onclick", sconto_30._ga);
  asc_40_Activity();
}

// when the time is over
function popSmallCountdown() {
  $(".pop-small").addClass("over");
  $(".pop-small img.esaurito").addClass("on");
  $(".pop-small a.larger ").css({ visibility : 'hidden'});
}

function cSet(name,value) {
  var Days = 2;
  var exp = new Date();
  name=name+exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
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

function timeCountDown(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
    if(remainingTime<180){
      timerBlink();
    }else{
      $("p.countdown").removeClass("blink");
    }
    var d = Math.floor(remainingTime / (24 * 60 * 60));
    var h = Math.floor(remainingTime / (60 * 60) % 24);
    var i = Math.floor(remainingTime / 60 % 60);
    var s = Math.floor(remainingTime % 60);
    var mi = 999 - dateObj.getMilliseconds();
    if (mi < 10) {
      mi = '00' + mi;
    } else if (mi < 100) {
      mi = '0' + mi;
    }
    return [d, h, i, s, mi];
  } else {
    $("p.countdown").removeClass("blink");
    return [0, 0, 0, 0, 0];
  }
}

var countdown = function (countdown,tType){
  statusSet();
  if(tType==1){
    if(productType==1){
      getCycleCountdown(countTime);
    }else{
      getCycleCountdown(countTime40);
    }
  }
  $(".countdown:eq(0) strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(".countdown:eq(1) strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  setTimeout("countdown('"+ countdown +"',"+tType+")", 1);
};

function getCycleCountdown (endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function statusCheck(){
  var date=new Date();
  var timeNow=date.getTime()/1000;
  if(timeNow<countTime){
    return 1;
  }else{
    if(expireTimeCheck40Activity()){
      return 2;
    }
    else{
      return 3;
    }
  }
}

function statusSet(){
  var statusNow=statusCheck();
  if(statusNow==2){
    if(!$(".content-box .asc-sconto80").hasClass('over')){
      ascActivityEnd();
    }
  }else if(statusNow==3){
    ascActivityEnd();
    popSmallCountdown();
  }
}

function timeInit(){
  var date = new Date();
  var nowTime=Math.floor(date.getTime()/1000);
  var cName = "itascjul";
  countTime=cGet(cName);
  if (countTime == null) {
    countTime = nowTime + 546;
    cSet(cName, countTime);
  }

  maskTime=cGet('mask_t');
  if(maskTime==null){
    maskTime=10;
    cSet('mask_t',maskTime);
  }
  if(maskTime==-1){
    if(expireTimeCheck()){
      productType=1;
      firstPopShow();
      minimizza();
    }else{
      productType=2;
      if(expireTimeCheck40Activity()){
        firstPopShow();
        minimizza();
      }
    }
  }
  maskTimeCountDown();
}

function maskTimeCountDown(){
  if(maskTime>0){
    if(maskTime==10){
      $(document).bind('mousemove',mouseOut);
    }
    maskTime--;
    cSet('mask_t',maskTime);
    setTimeout('maskTimeCountDown()',1000);
  }else if((maskTime==0)&&(expireTimeCheck())){
    $(document).bind('mousemove',mouseMove);
  }
}

function expireTimeCheck(){
  var expireTime=cGet('itascjul');
  if((Date.parse(new Date())/1000)<expireTime){
    return (expireTime-Date.parse(new Date())/1000);
  }else{
    return false;
  }
}

function expireTimeCheck40Activity(){
  var expireTime=cGet('mask40');
  if((Date.parse(new Date())/1000)<expireTime){
    return (expireTime-Date.parse(new Date())/1000);
  }else{
    return false;
  }
}

function packsInit() {
  var date = new Date();
  var cName = "itascjulpa" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 49;
  } else {
    packs = arr[2];
  }
  $('.packsNum').html(packs);
  //pack(parseInt(packs), parseInt(packs));
  flipNum(packs);
  //getSalesNum(packs);
  if(expireTimeCheck()==false){
    setTimeout('getPacks()', 4000);
  }else {
    if (packs > 45) {
      setTimeout('getPacks()', 2000);
    } else if (packs > 0) {
      setTimeout('getPacks()', 15000);
    }
  }
}

function getPacks() {
  var date = new Date();
  $.ajax({
    type: 'GET',
    url: 'julysale2018.php',
    data: 'action=getSales&d=' + date.getDate()+'&exp='+((expireTimeCheck()==false)?1:0),
    success: function (res) {
      res=JSON.parse(res);
      var sPacks=res.packsNum;
      var viewNum=res.viewNum;
      $('.personsNum').html(viewNum);
      $('.buyNum').html(res.buyNum);
      if (sPacks != packs) {
        $('.packsNum').html(packs);
        flipNum(packs);
        packs = sPacks;
      }
    }
  });
  if(expireTimeCheck()==false){
    setTimeout('getPacks()', 4000);
  }else {
    if (packs > 45) {
      setTimeout('getPacks()', 2000);
    } else if (packs > 0) {
      setTimeout('getPacks()', 15000);
    }
  }
}

function mouseOut(e){
  if(e.clientY<3){
    firstPopShow();
    $(document).unbind('mousemove',mouseOut);
  }
}

function mouseMove(e){
  firstPopShow();
  $(document).unbind('mousemove',mouseMove);
  $(document).unbind('mousemove',mouseOut);
}

$(function(){
  countTime40=0;
  packsInit();
  timeInit();
  asc_80_Activity();
  countdown(".time-count",1);
});

