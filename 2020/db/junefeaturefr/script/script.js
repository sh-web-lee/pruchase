$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

$(function() {

  $(".usereview .users li").mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("current").siblings().removeClass("current");
    $(".userbox dl").eq(num).addClass("active").siblings().removeClass("active");
  });

  //bottomcart
  $(".bottomcart ul li").click(function() {
    var index = $(this).index();
    var num = $(this).attr("data-num");
    var _strong = $(".banner .content li").eq(num).find(".price strong").html();
    var _del = $(".banner .content li").eq(num).find(".price del").html();
    var _url = $(".banner .content li").eq(num).find(".buybtn").attr("href");
    var _ga = $(".banner .content li").eq(num).find(".buybtn").attr("onclick");
    $(this).addClass("active").siblings().removeClass("active");
    $(".bottomcart .buybtn").attr({
      "href": _url,
      "onclick": _ga
    });
    $(".bottomcart .price").find("strong").html(_strong);
    $(".bottomcart .price").find("del").html(_del);
    if (index === 0) {
      $(".bottomcart .img").removeClass("three-pc").removeClass("one-pc");
    } else if (index === 1) {
      $(".bottomcart .img").addClass("three-pc").removeClass("one-pc");
    } else {
      $(".bottomcart .img").addClass("one-pc").removeClass("three-pc");
    }
  });
  // timeInit();

  countdown((".countdown b"));

  $(".feature-list dl").click(function() {
    $(".notes").removeClass("on");
    $(this).addClass("on").siblings().removeClass("on");
    var index = $(this).index();
    $(".feature-box").eq(index).addClass("on").siblings().removeClass("on");
    setTimeout(function() {
      $(".feature-box").eq(index).find(".notes").addClass('on');
    }, 100);

    $(".feature-box h3,.feature .cylinder,.feature-box .progress-bar,.feature-box.three .driver,.feature-box .updated-driver,.feature-box.three .complete,.feature-box.three .attention,.feature-box .usbox,.feature-box .usb").removeClass("on");
    $(".driver-start").removeClass("finished");

    switch (index) {
      case 0:
        setTimeout(function() {
          $(".feature-box.one h3,.feature .cylinder").addClass("on");
        }, 300);
        break;
      case 1:
        setTimeout(function() {
          $(".feature-box .progress-bar,.feature-box.two h3").removeClass("on").addClass("on");
        }, 300);
        break;
      case 2:
        setTimeout(function() {
          $(".feature-box.three .driver,.feature-box .updated-driver").addClass('on');
        }, 300);
        setTimeout(function() {
          $(".feature-box.three .attention").addClass('on');
        }, 1000);
        setTimeout(function() {
          $(".feature-box .updated-driver").removeClass('on');
        }, 3800);
        setTimeout(function() {
          $(".feature-box.three .driver,.feature-box.three .attention").removeClass('on');
          $(".feature-box.three .complete").addClass('on');
          $(".driver-start").addClass("finished");
        }, 4400);
        break;
      case 3:
        setTimeout(function() {
          $(".feature-box .usbox").addClass("on");
        }, 300);
        setTimeout(function() {
          $(".feature-box .usbox.one .usb").addClass("on");
        }, 2200);
        setTimeout(function() {
          $(".feature-box .usbox.two .usb").addClass("on");
        }, 4200);
        setTimeout(function() {
          $(".feature-box .usbox.three .usb").addClass("on");
        }, 6200);
        setTimeout(function() {
          $(".feature-box .usbox.four .usb").addClass("on");
        }, 8200);
        break;
      default:
        return;
    }
  });

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".payment").offset().top && $(".feature-list dl").eq(0).hasClass("on")) {
      oneFlag = false;
      $(".feature-box").eq(0).addClass("on").siblings().removeClass("on");
      $(".feature-box h3,.feature .cylinder").removeClass("on").addClass("on");
      $(".feature-box").eq(0).find(".notes").addClass('on');
    }
  });
});

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