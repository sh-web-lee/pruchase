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

function reviewChange(index) {
  $(".review dl dt img").eq(index).addClass("on").siblings().removeClass("on");
  $(".review dl dd p").eq(index).addClass("on").siblings().removeClass("on");
  $(".review .content > div").eq(index).addClass("on").siblings().removeClass("on");
  $(".review ul.small-person li").eq(index).addClass("on").siblings().removeClass("on");
  $(".review ul.point li").eq(index).addClass("on").siblings().removeClass("on");
}


$(function() {
  $(".users li").userMouseover($(".content dl"));

  $(".benefit a").target($(".comparison"), 0);

  $(".benefit .detail-list dl").hover(function() {
    $(".benefit .showcase .screenshot").css('marginLeft', -555 * ($(this).index() + 1));
    $(".benefit .zoom li").removeClass('active').eq($(this).index() + 1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benefit .list-icon li").removeClass('active').eq($(this).index() + 1).addClass('active');
  });
  $(".benefit .list-icon li").hover(function() {
    $(".benefit .showcase .screenshot").css('marginLeft', -555 * ($(this).index()));
    $(".benefit .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if (num === 0) {
      $(".benefit .detail-list dl").removeClass("active");
    } else {
      $(".benefit .detail-list dl").eq($(this).index() - 1).addClass("active").siblings().removeClass("active");
    }
    $(".benefit .list-icon li").removeClass('active');
    $(this).addClass('active');
  });

  var index = 0;
  var review = setInterval(function() {
    if (index < 5) {
      reviewChange(index);
      index++;
    } else {
      index = 0;
      reviewChange(index);
    }
  }, 5000);
  $(".review ul.small-person li").click(function() {
    index = $(this).index();
    reviewChange(index);
  });
  $(".review ul.point li").click(function() {
    index = $(this).index();
    reviewChange(index);
  });

  $(".float-change li").mouseover(function() {
    var index = $(this).index();
    var _num = $(this).attr("data-num");
    var _price = $(".banlist").eq(_num).find(".price big").text();
    var _original = $(".banlist").eq(_num).find(".price del").text();
    var _href = $(".banlist").eq(_num).find(".buybtn").attr("href");
    var _ga = $(".banlist").eq(_num).find(".buybtn").attr("onclick");
    $(this).addClass("on").siblings().removeClass("on");
    $(".floatlayer .left img").eq(index).addClass("on").siblings().removeClass("on");
    $(".floatlayer .price").find("big").text(_price);
    $(".floatlayer .price").find("del").text(_original);
    $(".floatlayer .buybtn").attr({
      "href": _href,
      "onclick": _ga
    });
  });
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
  reTime = parseInt(Math.random() * (10 - 2 + 1) + 2, 10);
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

$(function() {
  packs = 99;
  getSales();
});