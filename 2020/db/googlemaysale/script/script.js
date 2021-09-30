$.fn.target = function(target, yoffset, event) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({
    scrollTop: Theigth
  }, 'slow');
};

function numberJump(name, num) {
  $(name).prop('number', 0).animateNumber({
    number: num
  }, 1000);
}

function numberJumptwo(name, num) {
  var decimal_places = 2;
  var decimal_factor = decimal_places === 0 ? 1 : decimal_places * 10;
  $(name).animateNumber({
    number: num * decimal_factor,
    numberStep: function(now, tween) {
      var floored_number = Math.floor(now) / decimal_factor,
        target = $(tween.elem);
      if (decimal_places > 0) {
        floored_number = floored_number.toFixed(decimal_places);
        floored_number = floored_number.toString().replace('.', '.');
      }
      target.text(floored_number);
    }
  }, 1000);
}

$(function() {
  var sWidth = $(".userview").width();
  var len = $(".userview li").length;
  var index = 0;
  var picTimer;

  $(".userview .next").click(function() {
    index += 1;
    if (index == len) {
      index = 0;
    }
    showPics(index);
  });

  $(".userview ul").css("width", sWidth * (len));

  // $(".userview").hover(function() {
  //   clearInterval(picTimer);
  // }, function() {
  //   picTimer = setInterval(function() {
  //     showPics(index);
  //     index++;
  //     if (index == len) {
  //       index = 0;
  //     }
  //   }, 8000);
  // }).trigger("mouseleave");

  function showPics(index) {
    var nowLeft = $(".userview").width();
    $(".userview ul").stop(true, true).animate({
      "marginLeft": -nowLeft
    }, 'slow', function() {
      $('.userview ul').css('marginLeft', '0');
      $('.userview ul').find('li:first').appendTo($('.userview ul'));
    });
  }
});

$(function() {

  var interval;

  $("#two .feature-box img").click(function cover() {
    $(this).addClass("zoomimg").fadeOut(500, append);

    function append() {
      $(this).removeClass("zoomimg").appendTo("#two .feature-box").show();
      var name = $("#two .feature-box").children("img").first().attr("alt");
      $("#two .imglist li").eq(name).addClass("on").siblings().removeClass("on");
      $("#two .feature-point li").eq(name).addClass("on").siblings().removeClass("on");
    }
  });

  $("#two .imglist li").click(function cover() {
    $(this).eq(name).addClass("on").siblings().removeClass("on");
    $("#two .feature-box img").eq(0).addClass("zoomimg").fadeOut(500, append);
    var _index = $(this).index();
    $("#two .feature-point li").eq(_index).addClass("on").siblings().removeClass("on");

    function append() {
      $("#two .feature-box img").eq(0).removeClass("zoomimg").appendTo("#two .feature-box").show();
    }
  });

  function auto() {
    var play = $("#two .feature-box").children("img").first();
    play.addClass("zoomimg").fadeOut(500, append);

    function append() {
      $(this).removeClass("zoomimg").appendTo("#two .feature-box").show();
      var name = $(this).parent().children("img").first().attr("alt");
      $("#two .imglist li").eq(name).addClass("on").siblings().removeClass("on");
      $("#two .feature-point li").eq(name).addClass("on").siblings().removeClass("on");
    }
    interval = setTimeout(auto, 5000);
  }

  $("#two .feature-box img,#two .imglist li").hover(function() {
    stopPlay();
  }, function() {
    interval = setTimeout(auto, 5000);
  });

  function stopPlay() {
    clearTimeout(interval);
  }

  var flag2 = true;
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $("#two").offset().top) {
      if (flag2) {
        flag2 = false;
        auto();
      } else {
        return;
      }
    }
  });
});

$(function() {

  var interval3;

  $("#three .feature-box img").click(function cover() {
    $(this).addClass("zoomimg").fadeOut(500, append);

    function append() {
      $(this).removeClass("zoomimg").appendTo("#three .feature-box").show();
      var name = $("#three .feature-box").children("img").first().attr("alt");
      $("#three .imglist li").eq(name).addClass("on").siblings().removeClass("on");
      $("#three .feature-point li").eq(name).addClass("on").siblings().removeClass("on");
    }
  });

  $("#three .imglist li").click(function cover() {
    $(this).eq(name).addClass("on").siblings().removeClass("on");
    var _index = $(this).index();
    $("#three .feature-point li").eq(_index).addClass("on").siblings().removeClass("on");
    $("#three .feature-box img").eq(0).addClass("zoomimg").fadeOut(500, append);

    function append() {
      $(".feature-box.three img").eq(0).removeClass("zoomimg").appendTo(".feature-box.three").show();
    }
  });

  function auto3() {
    var play = $("#three .feature-box").children("img").first();
    play.addClass("zoomimg").fadeOut(500, append);

    function append() {
      $(this).removeClass("zoomimg").appendTo("#three .feature-box").show();
      var name = $(this).parent().children("img").first().attr("alt");
      $("#three  .imglist li").eq(name).addClass("on").siblings().removeClass("on");
      $("#three  .feature-point li").eq(name).addClass("on").siblings().removeClass("on");
    }
    interval3 = setTimeout(auto3, 7000);
  }

  $("#three .feature-box img, #three .imglist li").hover(function() {
    stopPlay3();
  }, function() {
    interval3 = setTimeout(auto3, 7000);
  });

  function stopPlay3() {
    clearTimeout(interval3);
  }

  var flag3 = true;
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $("#three").offset().top) {
      if (flag3) {
        flag3 = false;
        auto3();
      } else {
        return;
      }
    }
  });
});