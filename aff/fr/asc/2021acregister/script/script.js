//floatlayer
function showFloat(subject, target) {
  var scrollHeight = $(subject).offset().top;
  if ($(window).scrollTop() > scrollHeight) {
    $(target).addClass('on');
  } else {
    $(target).removeClass('on');
  }
}

$(document).ready(function() {

  //btn
  $(".buybtn .inner").on("mouseover", function() {
    $(this).parent(".buybtn").addClass("active");
  });
  $(".buybtn .inner").on("mouseout", function() {
    $(this).parent(".buybtn").removeClass("active");
  });

  $(window).on('scroll', function() {
    showFloat(".banner .buybtn:last", "#floatlayer");
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
});