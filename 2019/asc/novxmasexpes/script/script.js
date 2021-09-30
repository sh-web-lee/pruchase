$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
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

var chartShow = function() {
  var i = 0;
  var chartSet = setInterval(function() {
    if (i < $(".chart .clist span").length + 1) {
      $(".chart .clist span:nth-child(" + i + ")").addClass("on");
      i++;
    } else {
      $(".chart .text").addClass("on");
      clearInterval(chartSet);
    }
  }, 150);
};

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
  chartShow();
  $(window).scrollWindow($(".payment"), $('.feature ul li'), ("on"));
  $(window).scrollWindow($(".intro h2"), $('.intro dl'), ("on"), 150);
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"), 0);
  $(".more").target($(".comparison"), 50);
  setDateStr(-1, 0);
  setDateStr(1, 2);
  packsInit();
});

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function getMonthStr(i) {
  var month = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
  return month[i - 1];
}

function getDate(AddDayCount) {
  var dd = new Date();
  dd.setDate(dd.getDate() + AddDayCount);
  var y = dd.getFullYear();
  var m = (dd.getMonth() + 1) < 10 ? "0" + (dd.getMonth() + 1) : (dd.getMonth() + 1);
  var d = dd.getDate() < 10 ? "0" + dd.getDate() : dd.getDate();
  return [getMonthStr(parseInt(m)), d];
}

function setDateStr(daysDiff, dateIndex) {
  var dateArr = getDate(daysDiff);
  var dateSrt = dateArr[1] + ' ' + dateArr[0];
  $(".chart .clist").eq(dateIndex).find(".month").html(dateSrt);
}

function packsInit() {
  packs = 51;
  getSales(1);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xrasce.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        $(".pickNum").html(packs);
        flipNum(packs,2);
      }
      if (packs > 3) {
        setTimeout('getSales()', getReTime());
      }
    }
  });
}

function getReTime() {
  if (packs >= 40) {
    reTime = 6;
  } else if (packs >= 20) {
    reTime = 20;
  } else {
    reTime = 7;
  }
  return reTime * 1000;
}