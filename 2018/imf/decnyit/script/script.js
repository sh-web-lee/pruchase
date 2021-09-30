var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $("#topCountdown strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $("#footCountdown strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
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
$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$.fn.target = function(target) {
  $(this).click(function() {
    var Theigth = target.offset().top;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "index.php",
    data: "action=getSales&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      var scrollHeight = $(".banner").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $(".float").removeClass('on');
        setTimeout("$('.float').addClass('on');", 800);
      }
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);
      $(".buyNum").html(sales.buyNum);
      $(".viewNum").html(sales.viewNum);
    }
  })
  setTimeout('getSales(0)', 15000);
}

$(function() {
  $("a.intro").target($("#compare"));
  countdown();
  $(window).scrollWindow($(".awards"), $('.float'), ("on"));
  $(window).scrollWindow($(".gift-message"), $('.review dl'), ("on"));

  $(".close").on("click", function() {
    $(".float").remove();
  });

  $(".benfits .detail-list dl").hover(function() {
    $(".benfits .detail-list dl").removeClass("active");
    $(".benfits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  }, function() {
    $(".benfits .detail-list dl").eq(0).addClass("active");
  });

  var _discount = ['20,96', '99,8'];

  $(".footbuy li").hover(function() {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".footbuy .imfbox img").eq(index).addClass("active").siblings().removeClass("active");
    var _current = $(".banner .box").eq(index).find(".current").text();
    var _original = $(".banner .box").eq(index).find(".original").text();
    var _href = $(".banner .box").eq(index).find(".buybtn").attr("href");
    $(".footbuy .current").text(_current);
    $(".footbuy .original").text(_original);
    $(".footbuy .discount").text(_discount[index]);
    $(".footbuy .price").find(".buybtn").attr("href", _href);
  });
  setTimeout('getSales(0)', 15000);
});