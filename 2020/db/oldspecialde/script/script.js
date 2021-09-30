//userreview 
function switchover(name, clickname, active, contname) {
  $(name).on(clickname, function() {
    var num = $(this).index();
    $(name).eq(num).addClass(active).siblings().removeClass(active);
    $(contname).eq(num).addClass(active).siblings().removeClass(active);
  });
}

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

//choice
$.fn.changeActive = function(name, clickName, buybtn, fun) {
  $(this).on(clickName, function() {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".footbuy .list").eq(num).addClass("active").siblings().removeClass("active");
    $(name + " .boxpc").find("img").eq(num).addClass("active").siblings().removeClass("active");
    var dataUrl = $(".banner .list").eq(num).attr("data-url");
    var dataOff = $(".banner .list").eq(num).attr("data-off");
    var dataPercent = $(".banner .list").eq(num).attr("data-percent");
    var original = $(".banner .list").eq(num).find(".original").text();
    var discount = $(".banner .list").eq(num).find(".discount").text();
    $(name + " .buybtn").attr("href", dataUrl);
    $(".footbuy").find(".buybtn").attr("href", dataUrl);
    $(name + " .price").find(".original").text(original);
    $(name + " .price").find(".discount").text(discount);
    $(".off").text(dataOff);
    $(".percent").text(dataPercent);
    fun(num);
  });
};

function getScrollTop() {
  $(window).scroll(function() {　　
    var scrollTop = $(this).scrollTop();　　
    var scrollHeight = $(document).height();　　
    var windowHeight = $(this).height();　　
    if (scrollTop + windowHeight < scrollHeight && scrollTop > 200) {　　　　
      $(".footbuy").addClass("on");
    } else if (scrollTop + windowHeight == scrollHeight) {
      $(".footbuy").removeClass("on");
    } else if (scrollTop == 0) {
      $(".footbuy").removeClass("on");
    }
  });
}

function strFormat(str) {
  return str.replace(/,/g, '.');
}

$(function() {
  countdown(("#countdown strong"));
  switchover(".users li", "mouseover", "active", ".review .content > dl");
  $(".choice .list").changeActive(".banner", "click", $(".buybtn"), function(num) {});
  $(".smchoice .list").changeActive(".centbuy", "click", $(".buybtn"), function(num) {});
  $(".fchoice .list").changeActive(".footbuy", "click", $(".buybtn"), function(num) {
    $(".choice .list").eq(num).addClass("active").siblings().removeClass("active");
    $(".smchoice .list").eq(num).addClass("active").siblings().removeClass("active");
    $(".banner .boxpc").find("img").eq(num).addClass("active").siblings().removeClass("active");
    $(".centbuy .boxpc").find("img").eq(num).addClass("active").siblings().removeClass("active");
    var dataUrl = $(".banner .list").eq(num).attr("data-url");
    var original = $(".banner .list").eq(num).find(".original").text();
    var discount = $(".banner .list").eq(num).find(".discount").text();
    $(".centbuy .buybtn").attr("href", dataUrl);
    $(".banner .buybtn").attr("href", dataUrl);
    $(".centbuy .price").find(".original").text(original);
    $(".centbuy .price").find(".discount").text(discount);
  });
  getScrollTop();
  $('.buy-num').html(strFormat($('.buy-num').html()));
});