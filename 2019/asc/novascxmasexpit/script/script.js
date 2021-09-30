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

$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".listbox").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var _list = '';
  var len = String(number).length;
  var str = number.toString();
  var _box = $(".flipNum");
  var createobj;
  for (var i = 0; i < length; i++) {
    if (length < 2) {
      createobj = $(new Array(3).join('<div class="listbox"><div class="list"></div></div>'));
    } else {
      createobj = $('<div class="listbox"><div class="list"></div></div>');
    }
    //$(".banner .flipNum").append(createobj);
    _box.append(createobj);
  }
  for (var j = 0; j < arr.length; j++) {
    _list += '<b>' + arr[j] + '</b>';
  }
  $(".flipNum .list").append(_list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".floatlayer .flipNum .list").eq(a).animate({
      marginTop: -curNum * 22,
    }, "slow");
  }
}

function reduceNum() {
  $(".reduce").remove();
  $(".banner .giftnum span").text(packs);
  $(".centbuy .pickNum").text(packs);
  $(".banner .reduceNum").append('<span class="reduce"></span>');
  setTimeout('$(".reduce").addClass("on");', 300);
  setTimeout('$(".banner .giftnum .reduce").remove();', 1500);
}

var className = ["one", "two", "three", "four"];
var index = 1;
var nextFun = function() {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $(".review ul li").eq(i).attr("class", className[i]);
  }
  if (index < 3) {
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
  for (var i = 0; i < $(".review ul li").length; i++) {
    $(".review ul li").eq(i).attr("class", className[i]);
  }
  if (index > 0) {
    index--;
    review(index);
  } else {
    index = 3;
    review(index);
  }

};

var review = function(index) {
  $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
};

$(function() {

  $(".textlink").target($(".comparison"), 0);

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".intro h2").offset().top - 280) {
      $(".intro h2, .intro dl").addClass("on");
    }
  });

  $(window).scrollWindow($(".comparison"), $('.floatlayer'), ("on"), 0);

  $(window).scrollWindow($(".banner .buybtn"), $('.popbox'), ("on"));
  $("#popbox .close").on('click', function(event) {
    $("#popbox").hide();
  });

  viewCheck();
  packsInit();

  $(".benfits .detail-list dl").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index() + 1));
    $(".benfits .zoom li").removeClass('active').eq($(this).index() + 1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .list-icon li").removeClass('active').eq($(this).index() + 1).addClass('active');
  });

  $(".benfits .list-icon li").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if (num == 0) {
      $(".benfits .detail-list dl").removeClass("active");
    } else {
      $(".benfits .detail-list dl").eq($(this).index() - 1).addClass("active").siblings().removeClass("active");
    }
    $(".benfits .list-icon li").removeClass('active');
    $(this).addClass('active');
  });

});

function packsInit() {
  var date = new Date();
  var cName = "itascnovxexp" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    if (pageView) {
      packs = 10;
      reTime = 10;
    } else {
      packs = 26;
      timeCheck();
    }
  } else {
    packs = arr[2];
    timeCheck();
  }
  reduceNum();
  flipNum(packs,2);
  var packsCount = 300 - packs;
  //flipNum(packsCount, 3);
  $(".banner .people .packsCount").text(packsCount);
  $(".buynum").text(packsCount);
  if (packs == 0) {
    soldout();
  } else {
    //numInit(packs,2);
    setTimeout('getSales()', reTime * 1000);
  }
}

function viewCheck() {
  var date = new Date();
  var dateToday = date.getDate();
  var cName = "itascnovxexpv";
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  pageView = (arr != null);
  if ((arr == null) || ((arr != null) && (arr[2] == dateToday))) {
    pageView = false;
    cSet(cName, dateToday);
  } else {
    pageView = true;
  }
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeCheck() {
  if (packs > 26) {
    reTime = 10;
  } else {
    reTime = 6.2;
  }
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xrasce.php",
    data: "action=getPacks&d=" + date.getDate() + '&pageView=' + (pageView ? 1 : 0),
    success: function(res) {
      var sales = JSON.parse(res);

      if ((reTime > 2) && ($(document).scrollTop() > $(".banner .buybtn").offset().top)) {
        $("#popbox").removeClass('on');
        setTimeout("$('#popbox').addClass('on');", 800);
      }
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);

      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        if (packs == 5) {
          soldout();
        }
        reduceNum();
        flipNum(packs,2);
        var packsCount = 300 - packs;
        $(".banner .people .packsCount").text(packsCount);
        $(".buynum").text(packsCount);
        if (!pageView) {
          timeCheck();
        }
      }
    }
  });
  setTimeout('getSales()', reTime * 1000);
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