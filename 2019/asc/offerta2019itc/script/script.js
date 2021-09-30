function goTarget(target, yoffset) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}

$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function hideFloat(argument) {
  $('.float').remove();
}

$(function () {
  $(window).scrollWindow($(".gifts .buybtn"),$('.reviews dl'),("on"));
  $(window).scrollWindow($(".payments"),$('.float'),("on"));
  $(".price .tip").mouseover(function () {
    $(".tipbox").addClass("show");
  }).mouseleave(function () {
    $(".tipbox").removeClass("show")
  });

  $(".benfits .detail-list dl").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555*($(this).index()+1));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()+1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .list-icon li").removeClass('active').eq($(this).index()+1).addClass('active');
  });

  $(".benfits .list-icon li").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555*($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if(num==0) {
      $(".benfits .detail-list dl").removeClass("active");
    }
    else {
      $(".benfits .detail-list dl").eq($(this).index()-1).addClass("active").siblings().removeClass("active");
    }
    $(".benfits .list-icon li").removeClass('active');
    $(this).addClass('active');
  });

  $(".bottombuy ul li").on("click", function () {
    getSelect($(this));
  });
  popShow=0;
  packsInit();
  timeInit();
  packsProInit();
  getBuyUser();
});

function soldOut (solder) {
  var index = 2 - $(solder).index();
  if(index === 2) {
    $(".gifts").addClass("soldout");
    $(".gifts .buybtn").attr("href", "javascript: void(0)").attr("onclick", "goTarget($('.banner'))")
  }
  $(".banner ul li").eq(index).append("<div class='discover'></div>").addClass("soldout");
  $(solder).removeClass("active").addClass("soldout").next().addClass("active");
  $(solder).off(getSelect($(solder)));
  getSelect($(solder).next());
}

function getSelect (selector) {
  var message = {
    index : selector.index(),
    url : selector.attr("data-url"),
    ga: selector.attr("data-ga"),
    price: selector.attr("data-price"),
    del : selector.attr("data-del")
  };
  selector.addClass("active").siblings().removeClass('active');
  $(".bottombuy .box img").stop().animate({"marginLeft": message.index*(-240)},300);
  $(".bottombuy .price strong").text(message.price);
  $(".bottombuy .price del").text(message.del);
  $(".bottombuy .buybtn").attr("href", message.url).attr("onclick", message.ga);
}

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function packsInit(){
  var date = new Date();
  var cName = "itascoff_p" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 16;
  } else {
    packs = arr[2];
  }
  $('.packsNum').html(packs);
  if (packs > 13) {
    setTimeout('getSales()', 1200);
  } else {
    setTimeout('getSales()', 33300);
  }
}

function timeInit(){
  var date = new Date();
  var cName = "itdbdecny_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 545;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
  countdown();
}

function packsProInit() {
  var date = new Date();

  var nowTime = Math.floor(date.getTime() / 1000);
  var timeDiff = countTime - nowTime;
  packsPro = (timeDiff>540)?(Math.ceil((timeDiff-540) / 1.5)+18):(Math.ceil(timeDiff / 28.4) > 0 ? Math.ceil(timeDiff / 28.4) : 0);
  //packsPro = Math.ceil(timeDiff / 5.9) > 0 ? Math.ceil(timeDiff / 5.9) : 0;
  $(".packsNumPro").html(packsPro);
  if(packsPro>20){
    setTimeout('getPacksPro()', 1500);
  }else{
    setTimeout('getPacksPro()', 28000);
  }
  getSalesNum();
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
    var mi = Math.floor((999 - dateObj.getMilliseconds())/10);
    return [d, h, i, s, mi];
  } else {
    return [0, 0, 0, 0, 0];
  }
}

var countdown = function() {
  var statusNow=statusSet();
  getCycleCountdown(countTime);
  $(".countdown:eq(0) strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if(statusNow==1) {
    setTimeout("countdown()", 1);
  }
};

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 2);
}

function statusSet() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (packs <= 0) {
    if (!$(".bottombuy ul li:eq(0)").hasClass('soldout')) {
      soldOut(".bottombuy ul li:eq(0)");
    }
  }
  if (timeNow > countTime) {
    $(".countdown span").removeClass("warning").removeClass("warning-fast");
    packs=0;
    if (!$(".bottombuy ul li:eq(0)").hasClass('soldout')) {
      soldOut(".bottombuy ul li:eq(0)");
    }
    $('.packsNum').html(0);
    var cName = "itascoff_p" + date.getDate();
    cSet(cName,0);
    if (!$(".bottombuy ul li:eq(1)").hasClass('soldout')) {
      soldOut(".bottombuy ul li:eq(1)");
    }
  }else{
    var timeDiff=countTime-timeNow;
    if(timeDiff>5*60){
      $(".countdown span").addClass("warning");
    }else{
      $(".countdown span").removeClass("warning").addClass("warning-fast");
    }
  }
  if((packs<=0)&&(timeNow>countTime)&&(popShow==0)){
    var cNameMask = "itdboffta_m" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cNameMask + "=([^;]*)(;|$)"));
    if (arr == null) {
      //$(document).bind('mousemove', mouseOut);
    }else{
      showPop();
    }
    return 0;
  }else{
    return 1;
  }
}

function mouseOut(e) {
  if (e.clientY < 3) {
    showPop();
    var date=new Date();
    var cName="itdboffta_m" + date.getDate();
    cSet(cName,1);
    $(document).unbind('mousemove', mouseOut);
  }
}

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow > countTime) {
    return 2;
  }else if(packs<=0){
    return 3;
  } else {
    return 1;
  }
}

function getSalesNum() {
  var buyNum = 472 + (22 - packsPro)+(16-packs);
  $('.buyNum').html(commafy(buyNum));
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

function getSales() {
  var date = new Date();
  var statusNow = statusCheck();
  $.ajax({
    type: "GET",
    url: "offerta2019.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        if (packs != sales.packsNum) {
          packs = sales.packsNum;
          $('.packsNum').html(packs);
        }
        getSalesNum();
      }
    }
  });
  if (packs > 14) {
    setTimeout('getSales()', 1200);
  } else {
    setTimeout('getSales()', 33300);
  }
}

function getPacksPro() {
  var date = new Date();
  var nowTime = Math.floor(date.getTime() / 1000);
  var timeDiff = countTime - nowTime;
  var packsNow = (timeDiff>540)?(Math.ceil((timeDiff-540) / 1.3)+18):(Math.ceil((timeDiff-5) / 28.4) > 0 ? Math.ceil((timeDiff-5) / 28.4) : 0);
  if (packsNow != packsPro) {
    if (statusCheck() == 2) {
      packsPro = 0;
    } else {
      packsPro = packsNow;
    }
    $(".packsNumPro").html(packsPro);
  }
  getSalesNum();
  if (statusCheck() != 2) {
    if(packsPro>18){
      setTimeout('getPacksPro()', 1000);
    }else{
      setTimeout('getPacksPro()', 28000);
    }
  }
}

function getBuyUser(){
  var statusNow = statusCheck();
  if(statusNow!=2) {
    $.ajax({
      type: "GET",
      url: "offerta2019.php",
      data: "action=getBuyUser",
      success: function (sales) {
        sales=JSON.parse(sales);
        var scrollHeight = $(".payments").offset().top;
        if ($(window).scrollTop() > scrollHeight) {
          $(".float").removeClass('on');
          setTimeout("$('.float').addClass('on');", 800);
        }
        $("#first").html(sales.firstName);
        $("#last").html(sales.lastName);
        var salesType=sales.saleType;
        var statusNow=statusCheck();
        if(statusNow==3){
          salesType='Professional &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
        }
        $("#saleType").html(salesType);
      }
    });
    setTimeout('getBuyUser()',10000);
  }else{
    $(".float").remove()
  }
}

//add pop
function showPop() {
  //$(".pop").removeClass("mini").fadeIn(100,function(){popShow=1});
  //$(".pop-small").removeClass("on");
}
function closePop() {
  $(".pop").fadeOut(100);
}
function miniPop() {
  $(".pop").addClass("mini").fadeOut(500);
  setTimeout(function () {
    $(".pop-small").addClass("on");
  }, 500);
}