//userreview 
function switchover(name, clickname, active, contname) {
  $(name).on(clickname, function() {
    var num = $(this).index();
    $(name).eq(num).addClass(active).siblings().removeClass(active);
    $(contname).eq(num).addClass(active).siblings().removeClass(active);
  });
}

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

//time
var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

$(function() {
  countdown(("#countdown2 strong"));
  switchover(".users li", "mouseover", "active", ".review .content > dl");
  $(window).scrollWindow($(".banner .buybtn:last"), $('.floatlayer'), ("on"));
  $("#floatlayer .close").on('click', function(event) {
    $("#floatlayer").hide();
  });

  $(window).on('scroll', function() {　
    if ($(document).scrollTop() > $(".intro").offset().top - 300) {
      $(".intro .list").addClass("active");
    }
  });
  packsInit();
  setTimeout('getPacks()', 12000);
  setTimeout('getSales()', 12000);
});

function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2017-11-17')) / (3600 * 24 * 1000));
  var buyNum = 6078707 + daysDiff * 164 + (164 - packsNow);
  $('.buyNum').html(commafy(buyNum));
}

function packsInit() {
  date = new Date();
  var cName = 'deascaug' + date.getDate();
  var packsNow, arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packsNow = 164;
  } else {
    packsNow = arr[2];
  }
  $('.packsNum').html(packsNow);
  getSalesNum(packsNow);
}

function getPacks() {
  var date = new Date();
  $.ajax({
    'url': './newyearde.php',
    'type': 'get',
    'data': 'action=getPacks&d=' + date.getDate(),
    success: function(sPacks) {
      $('.packsNum').html(sPacks);
      getSalesNum(sPacks);
    }
  });
  setTimeout('getPacks()', 12000);
}

function getSales() {
  $.ajax({
    type: "GET",
    url: "newyearde.php",
    data: "action=getSales",
    success: function(res) {
      var sales = JSON.parse(res);
      $("#floatlayer").removeClass('on');
      setTimeout("$('#floatlayer').addClass('on');", 800);
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);
      $("#saleType").html(sales.saleType);
      setTimeout('getSales()', 12000);
    }
  })
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
      num = num.replace(reg, "$1.$2");
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