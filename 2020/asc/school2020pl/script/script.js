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
  $(".giftNum em").append(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".giftNum em").eq(a).animate({
      marginTop: -curNum * 18,
    }, "slow");
  }

  $(".reduceNum").remove();
  $(".giftbox .reduce b,.floatlayer .reduce b").html(num);
  $(".giftbox .reduce,.floatlayer .reduce").append('<b class="reduceNum">' + num + '</b>');
  setTimeout('$(".reduceNum").addClass("on");', 300);
}
// flipNum(153, 3);

var className = ["one", "two", "three", "four","five"];
var index = 1;
var nextFun = function() {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $(".reviewuser span").length; i++) {
    $(".reviewuser span").eq(i).attr("class", className[i]);
  }
  if (index < 4) {
    index++;
    review(index);
  } else {
    index = 0;
    review(index);
  }
};

var prevFun = function() {
  var addName = className.shift();
  className.push(addName);
  for (var i = 0; i < $(".reviewuser span").length; i++) {
    $(".reviewuser span").eq(i).attr("class", className[i]);
  }
  if (index > 0) {
    index--;
    review(index);
  } else {
    index = 4;
    review(index);
  }
};

var sWidth = $(".reviewlist").width();
var len = $(".reviewlist li").length;
$(".reviewlist ul").css("width", sWidth * (len));

var review = function(index) {
  $(".reviewlist ul").css("width", sWidth * (len));
  var nowLeft = $(".reviewlist").width();
  $(".reviewlist ul").stop(true, true).animate({
    "marginLeft": -nowLeft
  }, 'slow', function() {
    $('.reviewlist ul').css('marginLeft', '0');
    $('.reviewlist ul').find('li:first').appendTo($('.reviewlist ul'));
  });
};

var tw = MApp(2.2).datetime.getTimeZone();
var _hrefArr = ["http://www.iobit.com/buy.php?product=pl-asc133pciupf74&ref=pl_asc133pciupf74purchase2008&refs=pl_purchase_asc&tw=" + tw, "http://www.iobit.com/buy.php?product=pl-asc133pc74&ref=pl_asc133pc74purchase2008&refs=pl_purchase_asc&tw=" + tw, "http://www.iobit.com/buy.php?product=pl-asc131pc69&ref=pl_asc131pc69purchase2008&refs=pl_purchase_asc&tw=" + tw];

$(function() {
  $(".benefits .detail-list dl").hover(function() {
    $(".benefits .showcase .screenshot").css('marginLeft', -486 * ($(this).index()));
    $(".benefits .zoom li").removeClass('on').eq($(this).index()).addClass('on');
    $(this).addClass("on").siblings().removeClass("on");
  });
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".payment").offset().top) {
      $(".floatlayer").addClass("on");
    } else {
      $(".floatlayer").removeClass("on");
    }
  });

  $(".footerbuy li").mouseover(function() {
    var index = $(this).index();

    var _num = $(this).attr("data-num");
    var _del = $(".banner .offer").eq(_num).find(".price del").text();
    var _strong = $(".banner .offer").eq(_num).find(".price strong").text();
    $(this).addClass("on").siblings().removeClass("on");

    $(".footerbuy .imgbox img").removeClass("on");
    $(".footerbuy .discount").remove();

    switch (index) {
      case 0:
        $(".footerbuy .imgbox").append('<span class="discount">-80<small>%</small></span>');
        $(".footerbuy .imgbox img").eq(0).addClass("on");
        setTimeout('$(".footerbuy .discount").addClass("on");', 300);
        break;
      case 1:
        $(".footerbuy .imgbox").append('<span class="discount six">-60<small>%</small></span>');
        $(".footerbuy .imgbox img").eq(1).addClass("on");
        setTimeout('$(".footerbuy .discount").addClass("on");', 300);
        break;
      case 2:
        $(".footerbuy .imgbox").append('<span class="discount six">-40<small>%</small></span>');
        $(".footerbuy .imgbox img").eq(2).addClass("on");
        setTimeout('$(".footerbuy .discount").addClass("on");', 300);
        break;
      default:
        return;
    }

    $(".footerbuy .price").find("del").text(_del);
    $(".footerbuy .price").find("strong").text(_strong);
    $(".footerbuy .price").find(".buybtn").attr({
      "href": _hrefArr[index],
    });
  });

  $(".floatlayer .close").click(function() {
    $(".floatlayer").remove();
  });

  getNumber();
  webUser();
});

function getNumber() {
  num = cGet("school20200621");
  if (num == null) {
    // num = Math.floor(Math.random() * (223 - 153)) + 153;
    num = 87;
  } else {
    num--;
    if (num < 7) num = 7;
  }
  flipNum(num, 3);
  cSet('school20200621', num);
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
  numUser = cGet("school2020user0621");
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
  $(".floatlayer .userNum").text(numUser);
  cSet('school2020user0621', numUser);
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