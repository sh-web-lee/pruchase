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
    _box.append(createobj);
  }
  for (var j = 0; j < arr.length; j++) {
    _list += '<b>' + arr[j] + '</b>';
  }
  $(".list").append(_list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#flip .list").eq(a).animate({
      marginTop: -curNum * 22,
    }, "slow");
  }
}
// flipNum(48, 4);

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
  $(window).scrollWindow($(".payment"), $('.feature dl,.feature .machine,.feature .scan'), ("on"));
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".intro").offset().top - 280) {
      $('.intro dl').addClass("on");
    }
  });

  setDateStr(-1, 0);
  setDateStr(1, 2);
  packsInit();
  // flipNum(23, 2);
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
  var month = ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"];
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
  packs = 26;
  getSales(1);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xrdbe.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        flipNum(packs, 2);
        $(".pickNum b").html(packs);
      }
      if (packs > 3) {
        setTimeout('getSales()', getReTime());
      }
    }
  });
}

function getReTime() {
  var reTime = 20;
  var packsNumTotal = cGet('itdbxnovexp_t');
  if (packsNumTotal > 1) {
    if (packs > 32) {
      reTime = (Math.random() > 0.5) ? 0.5 : 2;
    } else {
      reTime = 200 / packsNumTotal;
    }
  }
  return reTime * 1000;
}