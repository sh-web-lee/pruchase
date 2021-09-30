$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};
$.fn.target=function (target,yoffset) {
  $(this).click(function() {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
};

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
  var date = new Date();
  var cName = "itascjan" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime=Math.floor(date.getTime()/1000);
  if (arr == null) {
    countTime=nowTime+549;
    cSet(cName,countTime);
  } else {
    countTime=parseInt(arr[2]);
  }
  countdown(("#countdown strong"),1);
}

var countdown = function (countdown,tType){
  statusSet();
  if(tType==1){
    getCycleCountdown(countTime);
  }
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
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

function timeCountDown(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
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
    return [0, 0, 0, 0, 0];
  }
}

function statusCheck(){
  var date=new Date();
  var timeNow=date.getTime()/1000;
  if(timeNow<countTime){
    return 1;
  }else{
    return 2;
  }
}

function statusSet(){
  var statusNow=statusCheck();
  if(statusNow==2){
    if(!$(".cutbuy ul li.gifts2").hasClass('sold')){
      soldOut();
      packsInit();
      setTimeout('getPacks()',2000);
    }
  }
}

function getBuyNum() {
  $.ajax({
    type: "GET",
    url: "octflashsales.php",
    data: "action=getBuyNum&r=" + Math.random(),
    success: function(sales) {
      sales = JSON.parse(sales);
      $('.buyNum').html(sales.buyNum);
      setTimeout('getBuyNum()', 20000);
    }
  });
}
setTimeout('getBuyNum()', 20000);

function choice(select) {
  $(select).hover(function() {
    if (!$(this).hasClass("sold")) {
      var index = $(this).index();
      var _num = $(this).attr("data-num");
      var _url = $(".banner .content dl").eq(_num).find(".buybtn").attr("href");
      var _ga = $(".banner .content dl").eq(_num).find(".buybtn").attr("onclick");
      var _price = $(".banner .content dl").eq(_num).find(".price strong big").text();
      var _del = $(".banner .content dl").eq(_num).find(".price del").text();
      $(this).addClass("active").siblings().removeClass("active");
      $(select).parent().parent().find(".box img").stop().animate({
        "marginLeft": index * (-292)
      }, 300);
      $(select).parent().parent().find(".price strong big").text(_price);
      $(select).parent().parent().find(".price del").text(_del);
      $(select).parent().parent().find(".buybtn").attr({
        "href": _url,
        "onclick": _ga
      });
    }
  });
}

function soldOut () {
  var db_href = $(".banner dl.db .buybtn").attr("href");
  var db_ga   = $(".banner dl.db .buybtn").attr("onclick");
  //banner
  $(".banner dl.bundle").removeClass("large").removeClass("fl").addClass("fr");
  $(".banner dl.db").removeClass("fr").addClass("large").addClass("fl");
  setTimeout(function () {
    $(".banner dl.bundle").append("<div class='mask'><span>TERMINÉ!</span></div>");
  }, 100);
  setTimeout(function () {
    $(".banner dl.bundle .mask").removeClass("on").addClass("on");
  }, 200);
  //countdown
  $(".banner .countdown").hide().html("<i class='all-icons'></i> Plus que <b class='packsNum'>119</b> disponibles").addClass("sold").fadeIn(500);
  //gifts
  $(".gifts dl").addClass("sold");
  $(".gifts .buybtn").attr({"href": db_href, "onclick": db_ga});
  //cutbuy
  $(".cutbuy ul li.gifts2").addClass("sold").removeClass("active").append("<div class='mask on'><span>TERMINÉ!</span></div>");
  $(".cutbuy ul li.db").addClass("top active");
  $(".cutbuy .box img").stop().animate({"marginLeft": -292}, 300);
  $(".cutbuy .buybtn").attr({"href": db_href, "onclick": db_ga});
  $(".cutbuy .price strong big").text("24");
  $(".cutbuy .price del").text("74,85€");
}

$(function() {
  timeInit();
  //mask
  $(".mask").removeClass("on").addClass("on");
  //benefits
  $(".benefits .detail-list dl").hover(function() {
    $(this).addClass("active").siblings().removeClass("active");
    $(".benefits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
    $(".benefits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  });
  //intro
  $("a.intro").target($(".comparison"), 82);
  //cutbuy
  choice("#footbuy ul li");
});

//review
var className = ["one", "two", "three", "four"];
var index = 1;
var nextFun = function () {
  var addName = className.pop();
  className.unshift(addName);
  for(var i=0; i<$(".review ul li").length; i++) {
    $(".review ul li").eq(i).attr("class", className[i]);
  }
  if(index < 3) {
    index ++;
    review(index);
  }else {
    index = 0;
    review(index);
  }
};

function packsInit(){
  var date = new Date();
  var cName = "itascjanpa" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs=129;
  } else {
    packs=arr[2];
  }
  $(".packsNum").html(packs);
}

function getPacks(){
  var date=new Date();
  $.ajax({
    type:'GET',
    url:'octflashsales.php',
    data:'action=getSales&d='+date.getDate(),
    success:function(sPacks){
      if(!isNaN(sPacks)){
        if(sPacks!=packs) {
          $('.packsNum').html(sPacks);
          packs=sPacks;
        }
      }
    }
  });
  if(packs>125){
    setTimeout('getPacks()',3000);
  }else {
    setTimeout('getPacks()', 15000);
  }
}

var prevFun = function () {
  var addName = className.shift();
  className.push(addName);
  for(var i=0; i<$(".review ul li").length; i++) {
    $(".review ul li").eq(i).attr("class", className[i]);
  }
  if(index > 0) {
    index --;
    review(index);
  }else {
    index = 3;
    review(index);
  }

};

var review = function (index) {
  $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
};