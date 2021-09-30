$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".giftNum i").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(number).length;
  var str = number.toString();

  for (var j = 0; j < arr.length; j++) {
    list += '<i>' + arr[j] + '</i>';
  }
  $(".reduce1 .giftNum em").append(list);
  $(".reduce2 .giftNum em").append(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".reduce1 .giftNum em").eq(a).animate({
      marginTop: -curNum * 20,
    }, "slow");
  }

  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".reduce2 .giftNum em").eq(a).animate({
      marginTop: -curNum * 22,
    }, "slow");
  }
  $(".reduceNum").remove();
  $(".giftbox .reduce b").html(num);
  $(".giftbox .reduce").append('<b class="reduceNum">' + num + '</b>');
  setTimeout('$(".reduceNum").addClass("on");', 300);
}
// flipNum(153, 3);


$(function() {
  $(".users li").mouseover(function(event) {
    var num = $(this).index();
    $(".users li").eq(num).addClass('current').siblings().removeClass('current');
    $(".review-list >dl").eq(num).addClass('active').siblings().removeClass('active');
  });
  //floatlayer
  $(window).scrollWindow($(".banner .buybtn"),$('.floatlayer'),("on"));

  getNumber();
  webUser();
});

function getNumber() {
  num = cGet("summersale2020fr0621");
  if (num == null) {
    num = Math.floor(Math.random() * (223 - 153)) + 153;
  } else {
    num--;
    if (num < 7) num = 7;
  }
  flipNum(num, 3);
  cSet('summersale2020fr0621', num);
  t1 = (Math.random() > 0.5) ? 1.3 : 3.3;
  t2 = (Math.random() > 0.5) ? 10.3 : 13.3;
  reTime = ((Math.random() > 0.5) ? t1 : t2) * 1000;
  if (num > 7) setTimeout('getNumber()', reTime);
  else return;
}

function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function webUser() {
  var userAdd = getRndInteger(1, 5);
  numUser = cGet("summersale2020fruser0621");
  if (numUser == null) {
    numUser = Math.floor(Math.random() * (110 - 93)) + 93;
  } else {
    numUser++;
    if (numUser > 111) {
      numUser = Math.floor(Math.random() * (110 - 93)) + 93;
      t1 = (Math.random() > 0.5) ? 1.3 : 3.3;
      t2 = (Math.random() > 0.5) ? 5.3 : 7.3;
      reTimeuser = ((Math.random() > 0.5) ? t1 : t2) * 1000;
      if (numUser < 111) setTimeout('webUser()', reTimeuser);
      else return;
    }
  }
  // $(".floatlayer .userNum").text(numUser);
  cSet('summersale2020fruser0621', numUser);
  t1 = (Math.random() > 0.5) ? 1.3 : 3.3;
  t2 = (Math.random() > 0.5) ? 5.3 : 7.3;
  reTimeuser = ((Math.random() > 0.5) ? t1 : t2) * 1000;
  if (numUser < 111) setTimeout('webUser()', reTimeuser);
  else return;
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
$(".feature .message dl").hover(function() {
  $(this).addClass("active").siblings().removeClass("active");
});
$(".reviewuser span").hover(function() {
  var num = $(this).index();
  $(this).addClass("active").siblings().removeClass("active");
  $(".reviewlist li").eq(num).addClass("active").siblings().removeClass("active");
});