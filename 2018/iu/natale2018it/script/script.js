$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};
$.fn.target=function (target) {
  $(this).click(function() {
    var Theigth = target.offset().top;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
};


function focus() {
  $('.progress-bar .bar >span').append('<span class="reduce"></span>');
  var tReduce = new TimelineLite();
  tReduce.to('.reduce', 1.5, {
    y: -100,
    autoAlpha: 0,
    onComplete: function() {
      $('.reduce').remove();
    }
  });
  $("img.box-reduce").css({
    "opacity": 1,
    "bottom": 0
  }).stop().animate({
    "opacity": 0,
    "bottom": 45
  },800);
}

function flipNum(num,isInit) {
  var number =num*3.5;
  $(".progress-bar .bar >span").css("width",number);
  setTimeout(function () {
    if(!isInit){
      focus();
    }
  }, 500);
}


function cycleCountdown(){
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
  $(".banner .box ul strong").eq(0).text(h).end().eq(1).text(i).end().eq(2).text(s).end().eq(3).text(mi);
  setTimeout('cycleCountdown()', 1);
}


function onePc() {
  $(".bottomcart .buybtn").attr("href","https://www.iobit.com/buy.php?product=it-iu81pc1999&ref=it_iu81pcpurchase1811"+ refStr +"&refs=it_purchase_iu");
  $(".bottomcart .buybtn").attr("onclick","ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811-it')");
  $(".bottomcart dl dt").html("<strong><b>19</b> ,99</strong>");
  $(".showcase .img").addClass("one-pc");
}
function threePc() {
  $(".bottomcart .buybtn").attr("href","https://www.iobit.com/buy.php?product=it-iu83pcsdamc1599&ref=it_iu83pcsdamcpurchase1811"+ refStr +"&refs=it_purchase_iu");
  $(".bottomcart .buybtn").attr("onclick","ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811-it')");
  $(".bottomcart dl dt").html("<strong><b>15</b> ,99</strong> <del>79,97<i></i></del> <sup>Risparmi 63,98</sup>");
  $(".showcase .img").removeClass("one-pc");
}


function hideFloat(argument) {
  $('.float').remove();
}

$(function () {
  packsInit();
  $("a.intro").target($("#compare"));

  $(window).scrollWindow($(".between-buy .buybtn"),$('.reviews dl'),("on"));
  $(window).scrollWindow($(".awards"),$('.float'),("on"));

  $(".benfits .detail-list dl").hover(function() {
    $(".benfits .detail-list dl").removeClass("active");
    $(".benfits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  }, function() {
    $(".benfits .detail-list dl").eq(0).addClass("active");
  });

  $(".bottomcart .selection li").mouseover(function(event) {
    var num =$(this).index();
    if ($(this).hasClass('default')) {
      return;
    }else{
      if(num==0) {
        threePc();
      }
      else {
        onePc();
      }
      $(".bottomcart .selection li").removeClass('active');
      $(this).addClass('active');
    }
  });

  cycleCountdown();
});

function packsInit(){
  var date = new Date();
  var cName = "itiuna" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs=79;
  } else {
    packs=arr[2];
  }
  $(".packsNum").html(packs);
  flipNum(packs,true);
  getSalesNum(packs);
  if(packs>76){
    setTimeout('getSales()',5000);
  }else{
    setTimeout('getSales()',10000);
  }
}

function getSales(){
  var date=new Date();
  $.ajax({
    type: "GET",
    url: "index.php",
    data:"action=getSales&d=" + date.getDate(),
    success: function(res){
      var sales=JSON.parse(res);
      var scrollHeight = $(".banner").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $(".float").removeClass('on');
        setTimeout("$('.float').addClass('on');", 800);
      }
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);
      $("#saleType").html(sales.saleType);
      $(".viewNum").html(sales.viewNum);
      if((!isNaN(sales.packsNum))&&(packs!=sales.packsNum)){
        packs=sales.packsNum;
        flipNum(packs,false);
        $(".packsNum").html(packs);
        getSalesNum(packs);
      }
    }
  });
  if(packs>76){
    setTimeout('getSales()',5000);
  }else{
    setTimeout('getSales()',10000);
  }
}

function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2018-11-8')) / (3600 * 24 * 1000));
  var buyNum = 406769 + daysDiff * 79 + (79 - packsNow);
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