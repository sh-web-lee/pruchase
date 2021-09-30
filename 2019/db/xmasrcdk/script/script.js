$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};

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
  $(window).scrollWindow($(".payment"), $('.feature dl,.feature .machine'), ("on"));
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
  var month = [". Januar", ". Februar", ". Marts", ". April", ". Maj", ". Juni", ". Juli", ". August", ". September", ". Oktober", ". November", ". December"];
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
  var dateSrt = dateArr[1] + dateArr[0];
  $(".chart .clist").eq(dateIndex).find(".month").html(dateSrt);
}

function packsInit() {
  packs = 99;
  getSales(1);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xdb.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        $(".pickNum").html(packs);
      }
      if (packs > 0) {
        setTimeout('getSales()', getReTime());
      }
    }
  });
}

function getReTime() {
  var reTime = 20;
  var packsNumTotal = cGet('dkdbxmasrcdk_t');
  if (packsNumTotal > 1) {
    if (packs > 32) {
      reTime = (Math.random() > 0.5) ? 0.5 : 2;
    } else {
      reTime = 200 / packsNumTotal;
    }
  }
  return reTime * 1000;
}