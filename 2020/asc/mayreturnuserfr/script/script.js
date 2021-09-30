$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

function numberJump() {
  $(".change-num").prop('number', 50).animateNumber({
    number: 100,
  }, 1000);
}

function sect01() {
  var tl = new TimelineMax();
  tl.to(".bottom-circle", 1, {
      height: 114
    })
    .to(".completed", .5, {
      opacity: 1
    }, '+=.5');
}

function sect02() {
  var tl = new TimelineMax();
  tl.to(".privacy", 1, {
      opacity: 1,
      scale: 1
    }, '+=.5')
    .to(".list02 .check", 1, {
      width: 47,
      backgroundColor: '#326de8',
      onComplete: function() {
        $('.list02 .privacy').addClass('on');
      }
    })
    .to(".list02 .privacy .text", 1, {
      opacity: 1,
      bottom: 54
    })
    .to(".list02 .privacy-right", 1, {
      opacity: 1,
      scale: 1
    });
}

var c1 = 0;
var d1 = 0;

$(function() {
  //review
  $(".usereview .users li").mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("current").siblings().removeClass("current");
    $(".userbox dl").eq(num).addClass("active").siblings().removeClass("active");
  });
  //bottomcart
  $(".bottomcart li").click(function() {
    var index = $(this).index();
    var _num = $(this).attr("data-num");
    $(this).addClass("on").siblings().removeClass("on");
    $(".bottomcart .showcase span").eq(index).addClass("on").siblings().removeClass("on");
    var _href = $(".banner .offer").eq(_num).find(".buybtn").attr("href");
    var _discount = $(".banner .offer").eq(_num).find(".price strong").html();
    $(".bottomcart .price").find("strong").html(_discount);
    $(".bottomcart .price").find(".buybtn").attr({
      "href": _href
    });
  });

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".intro").offset().top && $(window).scrollTop() < $(".left-message .message:eq(1)").offset().top - 230) {
      $(".title,.change-img").addClass("on");
      $(".list01").addClass("on");
      setTimeout(function() {
        $('.scan').remove();
        c1 += 1;
        if (c1 == 1) {
          numberJump();
          sect01();
        }
      }, 2000);
    } else {
      $(".title,.change-img").removeClass("on");
    }
    if ($(window).scrollTop() > $(".left-message .message").offset().top + 50) {
      $(".list01").removeClass("show");
      $(".list02").addClass("show");
      d1 += 1;
      if (d1 == 1) {
        sect02();
      }
    } else {
      $(".list01").addClass("show");
      $(".list02").removeClass("show");
    }
    clearTimeout($.data(this, 'scrollTimer'));
  });
});