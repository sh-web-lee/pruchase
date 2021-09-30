$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

function reduceNum(num) {
  $(".zoomout").remove();
  $(".banner .reduce .first").text(num);
  $(".banner .reduce").append('<span class="zoomout">' + num + '</span>');
  setTimeout('$(".zoomout").addClass("on");', 300);
}

$(window).on('scroll', function() {
  if ($(window).scrollTop() > $(".intro h2").offset().top - 50) {
    $('.intro dl').removeClass('on').addClass('on');
    $('.intro .scan').removeClass('on').addClass('on');
  }

  if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
    $('.floatlayer').addClass('on');
  } else {
    $('.floatlayer').removeClass('on');
  }


  if ($(window).scrollTop() > $(".intro h2").offset().top) {
    $('.popbox').addClass('on');
  } else {
    $('.popbox').removeClass('on');
  }
});

$(".dg-next").click(function() {
  var message = $('.dg-container ul li:eq(0)')
  $('.dg-container ul li:eq(0)').removeClass("first")
  $('.dg-container ul li:eq(1)').removeClass("two")
  $('.dg-container ul li:eq(2)').removeClass("three")
  $('.dg-container ul li:eq(3)').removeClass("active")
  $('.dg-container ul li:eq(4)').removeClass("four")
  $('.dg-container ul li:eq(5)').removeClass("five")


  $('.dg-container ul').find('li:first').appendTo($('.dg-container ul'));

  $('.dg-container ul li:eq(0)').addClass("first")
  $('.dg-container ul li:eq(1)').addClass("two")
  $('.dg-container ul li:eq(2)').addClass("three")
  $('.dg-container ul li:eq(3)').addClass("active")
  $('.dg-container ul li:eq(4)').addClass("four")
  $('.dg-container ul li:eq(5)').addClass("five")

  var num = $('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
});
$(".dg-prev").click(function() {
  var message = $('.dg-container ul li:last')

  $('.dg-container ul li:eq(0)').removeClass("first")
  $('.dg-container ul li:eq(1)').removeClass("two")
  $('.dg-container ul li:eq(2)').removeClass("three")
  $('.dg-container ul li:eq(3)').removeClass("active")
  $('.dg-container ul li:eq(4)').removeClass("four")
  $('.dg-container ul li:eq(5)').removeClass("five")


  $('.dg-container ul li:eq(0)').before(message);

  $('.dg-container ul li:eq(0)').addClass("first").addClass("on")
  $('.dg-container ul li:eq(1)').addClass("two")
  $('.dg-container ul li:eq(2)').addClass("three")
  $('.dg-container ul li:eq(3)').addClass("active")
  $('.dg-container ul li:eq(4)').addClass("four")
  $('.dg-container ul li:eq(5)').addClass("five")

  var num = $('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
});

$(function() {
  $(".intro .more").target($("#compare"), 0);

  $(".popbox .close").click(function() {
    $(".popbox").remove();
  });
});


function getViewNum(viewNow) {
  $('.viewNum').html(viewNow);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xasc.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      $(".popbox").removeClass('on');
      setTimeout("$('.popbox').addClass('on');", 800);
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        viewNum = sales.viewNum;
        reduceNum(packs);
        getViewNum(viewNum);
        timeCheck();
      }
    }
  });
  timeCheck();
  setTimeout('getSales()', reTime * 1000);
}

function timeCheck() {
  reTime = parseInt(Math.random() * (10 - 2 + 1) + 2, 10);
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

$(function() {
  packs = 321;
  getSales();
});