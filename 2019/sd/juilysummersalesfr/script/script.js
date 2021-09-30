$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp("2019-07-02 00:00:00");
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 3);
}

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "frdbapr_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  var countTime;
  if (arr == null) {
    countTime = nowTime + 3600;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
  countDate = getLocalTime(countTime);
  countdown(("#countdown strong"));
}

function getLocalTime(dateTime) {
  var date = new Date(dateTime * 1000);
  var Y = date.getFullYear() + '-';
  var M = (date.getMonth() + 1 < 10 ? '0' + (date.getMonth() + 1) : date.getMonth() + 1) + '-';
  var D = (date.getDate() < 10 ? '0' + (date.getDate()) : date.getDate()) + ' ';
  var h = (date.getHours() < 10 ? '0' + date.getHours() : date.getHours()) + ':';
  var m = (date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes()) + ':';
  var s = (date.getSeconds() < 10 ? '0' + date.getSeconds() : date.getSeconds());
  return Y + M + D + h + m + s;
}

function getBuyNum() {
  $.ajax({
    type: "GET",
    url: "index.php",
    data: "action=getSales&r=" + Math.random(),
    success: function(sales) {
      sales = JSON.parse(sales);
      $('.buyNum').html(sales.buyNum);
      setTimeout('getBuyNum()', 5000);
    }
  });
}
setTimeout('getBuyNum()', 5000);

function choice(select) {
  $(select).hover(function() {
    if (!$(this).hasClass("sold")) {
      var index = $(this).index();
      var _num = $(this).attr("data-num");
      var _url = $(".banner .content dl").eq(_num).find(".buybtn").attr("href");
      var _ga = $(".banner .content dl").eq(_num).find(".buybtn").attr("onclick");
      var _price = $(".banner .content dl").eq(_num).find(".price strong big").text();
      var _del = $(".banner .content dl").eq(_num).find(".price del").text();
      $(this).addClass("active").siblings().removeClass("active");
      $(select).parent().parent().find(".box img").stop().animate({
        "marginLeft": index * (-270)
      }, 300);
      $(select).parent().parent().find(".price strong big").text(_price);
      $(select).parent().parent().find(".price del").text(_del);
      $(select).parent().parent().find(".buybtn").attr({
        "href": _url,
        "onclick": _ga
      });
      // console.log(_del);
    }
  });
}

$(function() {
  $('#dg-container').gallery();
  timeInit();
  $(window).scrollWindow($(".banner .buybtn"), $('.feature dl'), ("on"));
  choice("#centbuy ul li");
  choice("#footbuy ul li");
  // $(".mask").removeClass("on").addClass("on");
});