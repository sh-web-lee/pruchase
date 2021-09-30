$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};
$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};
function soldoutGift() {
  $(".header .gift-box,.bottom-buy li.three-gift,.gift-message ,.floatlayer").addClass("expired").removeClass("active");
  $('.fl-des').html('<span class="viewNum">**</span> utenti stanno guardando ora ');
  $(".bottom-buy .img-box").addClass("three-pc").removeClass("three-gift");
  $(".bottom-buy ul li").eq(2).addClass("active").siblings().removeClass("active");;
  $(".bottom-buy .message del").html("74,85");
  $(".bottom-buy .message strong").html("25");
  $(".gift-message .buybtn,.gift-message .buybtn").attr("href", "http://www.iobit.com/buy.php?product=it-db83pc2599&ref=it_db83pc2599purchase1809c"+refStr+"&refs=it_purchase_db").attr("onclick", "ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PC1809c-it')");
}
function onePc() {
  $(".bottom-buy .buybtn").attr("href", "http://www.iobit.com/buy.php?product=it-db81pc2499&ref=it_db81pc2499purchase1809c"+refStr+"&refs=it_purchase_db");
  $(".bottom-buy .buybtn").attr("onclick", "ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1PC1809c-it')");
  $(".bottom-buy .message del").html("59,85");
  $(".bottom-buy .message strong").html("24");
  $(".bottom-buy ul li").eq(0).addClass("active").siblings().removeClass("active");
  $(".bottom-buy .img-box").removeClass("three-pc").removeClass("three-gift");
}

function threePc() {
  $(".bottom-buy .buybtn").attr("href", "http://www.iobit.com/buy.php?product=it-db83pc2599&ref=it_db83pc2599purchase1809c"+refStr+"&refs=it_purchase_db");
  $(".bottom-buy .buybtn").attr("onclick", "ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PC1809c-it')");
  $(".bottom-buy .message del").html("74,85");
  $(".bottom-buy .message strong").html("25");
  $(".bottom-buy ul li").eq(2).addClass("active").siblings().removeClass("active");
  $(".bottom-buy .img-box").addClass("three-pc").removeClass("three-gift");
}

function threePcAndGift() {
  $(".bottom-buy .buybtn").attr("href", "http://www.iobit.com/buy.php?product=it-db83pcsdpf2499&ref=it_db83pcsdpf2499purchase1809c"+refStr+"&refs=it_purchase_db");
  $(".bottom-buy .buybtn").attr("onclick", "ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3PCsdpf1809c-it')");
  $(".bottom-buy .message del").html("144,79");
  $(".bottom-buy .message strong").html("24");
  $(".bottom-buy ul li").eq(1).addClass("active").siblings().removeClass("active");
  $(".bottom-buy .img-box").addClass("three-gift").addClass("three-pc");
}
$(".review dl dt .img-box").mouseover(function(event) {
  $(this).parent().parent().addClass("active").siblings().removeClass("active");
});
function focus() {
  $('.bar span').append('<i class="reduce"></i>');
  setTimeout(function() {
    $(".reduce").remove();
  }, 600);
}
$(window).on('scroll', function() {
  if ($(window).scrollTop() > $(".gift-message").offset().top) {
    $('.review dl').addClass("red-round");
  } else {
    $('.review dl').removeClass("red-round");
    $('.review dl.active').addClass("red-round");
  }
});
$("#floatlayer .close").on('click', function(event) {
  $("#floatlayer").hide();
});
$(".db-message .message dl").hover(function () {
  $(".db-message .inner ul").css('marginLeft', -274 * ($(this).index() + 1));
  $(this).addClass('active').siblings().removeClass("active");
  $(".db-message .zoom li").removeClass('active').eq($(this).index()).addClass('active');
});
function settime() {
  var date = new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  var timeDiff = count1 - nowTime;
  $(".number .num strong").html("" + timeDiff + "")
}

$(function(){
  $(".bottom-buy ul li").mouseover(function() {
    var num = $(this).index();
    if ($(".bottom-buy ul li").hasClass("expired")) {
      if ($(".bottom-buy ul li").eq(2).hasClass("expired")) {
        onePc()
      } else {
        if (num == 0) {
          onePc()
        } else {
          threePc()
        }
      }

    } else {
      if (num == 0) {
        onePc()
      } else if (num == 1) {
        threePcAndGift()
      } else {
        threePc()
      }
    }
  });
  timeInit();
  packsInit();
  countdown();
});

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
  var date = new Date();
  var cName = "itascjune_d" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    count1 = nowTime + 10;
    count2 = nowTime + 600;
    cSet(cName, count1 + '.' + count2);
  } else {
    var packsArr = arr[2].split('.');
    count1 = parseInt(packsArr[0]);
    count2 = parseInt(packsArr[1]);
  }
}

function statusCheck(){
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < count1) {
    //return 1;
    return 2;
  } else if (timeNow < count2) {
    return 2;
  } else {
    return 3;
  }
}

function statusSet(){
  var statusNow = statusCheck();
  if(statusNow==1){

  }else if(statusNow==2){
    //开始计时
    if ($(".header .gift-box").hasClass('before')) {
      $(window).scrollWindow($(".header .buybtn"), $('.floatlayer'), ("on"));
      $(".header .gift-box").removeClass("before");
      $(".header .gift-box .number").remove();
    }
  }else{
    if(!$(".header .gift-box,.bottom-buy li.three-gift,.gift-message ,.floatlayer").hasClass("expired")){
      $(window).scrollWindow($(".header .buybtn"), $('.floatlayer'), ("on"));
      $(".header .gift-box .number").remove();
      //计时结束
      soldoutGift();
    }
  }
  return statusNow;
}

function getSales() {
  var packsNow;
  var date = new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  var timeDiff = count2 - nowTime;
  if(timeDiff>=595){
    packsNow=Math.ceil(timeDiff / 2)-221;
  }else{
    packsNow = Math.ceil(timeDiff / 7.83) > 0 ? Math.ceil(timeDiff / 7.83) : 0;
  }
  if(packs!=packsNow){
    if(statusCheck() != 1) {
      var scrollHeight = $(".visa").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        alert(1);
        $(".floatlayer").removeClass('on');
        setTimeout("$('.floatlayer').addClass('on');", 800);
      }
      else {
        alert(1);
         $(".floatlayer").removeClass('on');
      }
    }
    packs=packsNow;
    focus();
  }
  $('.packsNum').html(packs);
  $('.bar span').css('width',packs*3.46+'px');
  getSalesNum(packs);

  $.ajax({
    type: "GET",
    url: "sepsale2018c.php",
    data:"action=getPack",
    success: function(res){
      var sales=JSON.parse(res);
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);
      $(".viewNum").html(sales.viewNum);
    }
  });

  if (statusCheck() != 3) {
    if(timeDiff>=595){
      setTimeout('getSales()', 2000);
    }else{
      setTimeout('getSales()', 13000);
    }
  }
}

function packsInit() {
  var date = new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  var timeDiff = count2 - nowTime;
  //packs = Math.ceil(timeDiff / 12) > 0 ? Math.ceil(timeDiff / 12) : 0;
  if(timeDiff>=595){
    packs=Math.ceil(timeDiff / 2)-221;
  }else{
    packs = Math.ceil(timeDiff / 7.83) > 0 ? Math.ceil(timeDiff / 7.83) : 0;
  }
  var statusNow=statusCheck();
  if(statusNow==3){
    packs=0;
  }
  //flipNum(packs, 1);
  $('.packsNum').html(packs);
  $('.bar span').css('width',packs*5.59+'px');
  getSales();
}

function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2018-09-18')) / (3600 * 24 * 1000));
  var buyNum = 2379 + daysDiff * 49 + (49 - packsNow);
  $('.buyNum').html(commafy(buyNum));
}

var countdown = function() {
  var statusNow = statusSet();
  getCycleCountdown();
  if (statusNow == 1) {
    settime();
  } else if (statusNow == 2) {
    getCycleCountdown(count2);
  }

  $('.date').each(function(){
    $(this).find('strong').eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  });

  //$('.countdown b').eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if (statusNow != 3) {
    setTimeout("countdown(" + statusNow + ")", 1);
  }
};

function getCycleCountdown(endTime, ctype) {
  var datetime = timeCountDown(endTime, ctype);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
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

function commafy(num) {
  num = num + "";
  num = num.replace(/[ ]/g, "");
  if (num == "") {
    return;
  }
  if (isNaN(num)) {
    return;
  }
  var index = num.indexOf(".");
  if (index == -1) {
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(num)) {
      num = num.replace(reg, "$1,$2");
    }
  } else {
    var intPart = num.substring(0, index);
    var pointPart = num.substring(index + 1, num.length);
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(intPart)) {
      intPart = intPart.replace(reg, "$1.$2");
    }
    num = intPart + "." + pointPart;
  }
  return num;
}