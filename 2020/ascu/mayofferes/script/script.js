$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
  });
};
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
  if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
    $('.floatlayer').addClass('on');
  } else {
    $('.floatlayer').removeClass('on');
  }

});


$(function() {
  $(".users li").userMouseover($(".content dl"));
  $(".intro .more").target($(".comparison"), 0);

});


function getViewNum(viewNow) {
  $('.viewNum').html(viewNow);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "index.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
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
  reTime = parseInt(Math.random()*(10-2+1)+2,10);
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

$(function() {
  packs=321;
  getSales();
});