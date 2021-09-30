$.fn.target = function(target, yoffset, event) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({
    scrollTop: Theigth
  }, 'slow');
};

function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

var totalNum;

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".scroll-tick strong").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(number).length;
  var str = number.toString();

  for (var j = 0; j < arr.length; j++) {
    list += '<strong>' + arr[j] + '</strong>';
  }
  $(".scroll-tick").append(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".countdown1 .scroll-tick").eq(a).animate({
      marginTop: -curNum * 18,
    }, "slow");
  }
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".countdown2 .scroll-tick").eq(a).animate({
      marginTop: -curNum * 18,
    }, "slow");
  }
}
// flipNum(15, 3);
var scheck=false;
function soldOut() {
  flipNum(0, 2);
  var aff = MApp(2.2).url.getParameters('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner,.gift,.floatlayer").addClass("soldout");
  $(".floatlayer .imgbox .number").html('But you can still get PRO version with <strong>65%</strong> OFF ');
  $(".floatlayer .buybtn,.banner .buybtn").attr({
    "href": "https://www.iobit.com/buy.php?product=imf83pc1995&ref=en-imf3pcloyal"+refStr+"&aff=" + aff + "&refs=purchase_imf&tw=" + tw,
    "onclick": "ga('send', 'event', 'imf3pcbuy', 'buy', 'imfpurchase-loyal');",
  });
  if(!scheck){
    $('body').mousemove(function(e){
      popbox();
    });
  }
}

function getNumber() {
  num = cGet("loyal");
  if (num == null) {
    num = Math.floor(Math.random() * (57 - 41)) + 41;
  } else {
    num--;
    if (num < 0) num = 0;
  }
  flipNum(num, 2);
  cSet('loyal', num);
  t1 = (Math.random() > 0.5) ? 3 : 5;//4
  t2 = (Math.random() > 0.5) ? 7 : 9;//8
  reTime = ((Math.random() > 0.5) ? t1 : t2) * 1000;
  //console.log(reTime);
  if (num > 0) setTimeout('getNumber()', reTime);
  else {
    flipNum(0, 2);
    soldOut();
  }
}

function shutdown2(){
  scheck=true;
  snum = cGet("loyals2");
  if (snum == null) {
    snum = 60;
  } else {
    snum--;
    if (snum < 0) snum = 0;
  }
  $('#td').text(snum);
  cSet('loyals2', snum);

  if (snum > 0){
    setTimeout('shutdown2()', 1000);
    return true;
  }else{
    $(".pop-bg,.pop-box").removeClass("on");
    return false;
  }
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
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
function popbox() {
  if(cGet("loyals2")!=0){
    $(".pop-bg,.pop-box").addClass("on");
    if(!scheck){
      shutdown2();
      ga('send', 'event', 'imf3pcpopshow', 'display', 'imfpurchase-loyal');
    }
  }
}
$(function() {

  $(".close").click(function() {
    //cSet('loyals2', 0);
    $('body').unbind('mousemove');
    $(".pop-bg,.pop-box").removeClass("on");
  });

  getNumber();

  $(".review .prev").click(function() {
    $(".review ul li").removeClass("active").removeClass("last");
    var message = $('.review ul li:last');
    
    $('.review ul li:eq(0)').before(message);
    $('.review ul li:last').addClass('last')

    var num = $('.review ul li.last').attr("data-num");
    $('.review .message div').eq(num).addClass("active").siblings().removeClass("active");
    if(num==3) {
      $('.review h2').removeClass("user");
    }
    else {
      $('.review h2').addClass("user");
    }
    setTimeout("$('.review ul li:last').addClass('active')", 200);
  });
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".feature-message h2").offset().top) {
      if($(".feature").length>0){
        if(!$('.list03 p.pro').hasClass("on")) {
          setTimeout('$(".floatlayer").addClass("on");', 2100);
        }
        else {
          $(".floatlayer").addClass("on");
        }
        $('.list01 p.pro').addClass('on');
        setTimeout('$(".list02 .img,.list02 p.pro").addClass("on")', 1000);
        setTimeout('$(".list03 p.pro").addClass("on")', 1600);
      }
      else {
        $('.launchnews .left-message,.launchnews .right-message').addClass('on');
        setTimeout('$(".floatlayer").addClass("on");', 500);
      }
    }
    else {
      $('.floatlayer').removeClass('on');
    }
  });
});