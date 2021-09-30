$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function soldOut() {
  $(".bottombuy li.gift").removeClass("on");
  $(".banner .offer.bigbox,.giftbox,.bottombuy li.gift").removeClass("sold").addClass("sold");
  $(".banner .offer.bigbox").find(".off").remove();
  $(".banner .offer.bigbox").find("img").attr("src", _imgsrc);
  $(".banner .offer.bigbox,.giftbox").find(".buybtn").attr("href", "javascript:void(0);");
  $(".banner .offer.bigbox,.giftbox,.bottombuy li.gift").append('<span class="soldwords">ESAURITO</span>');
  setTimeout("$('.soldwords').removeClass('on').addClass('on')", 300);

  $(".bottombuy li").removeClass("on").eq(1).addClass("on");
  $(".bottombuy .imgbox img").removeClass("on").eq(1).addClass("on");
  $(".bottombuy .price").find("del").text("39,99€");
  $(".bottombuy .price").find(".buybtn").attr({
    "href": $(".banner .offer").eq(0).find(".buybtn").attr("href"),
    "onclick": $(".banner .offer").eq(0).find(".buybtn").attr("onclick")
  });
}
//soldout();

$(function() {
  $(".textlink").target($(".compare"), 0);

  $(".benfits .detail-list dl").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index() + 1));
    $(".benfits .zoom li").removeClass('active').eq($(this).index() + 1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .list-icon li").removeClass('active').eq($(this).index() + 1).addClass('active');
  });

  $(".benfits .list-icon li").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if (num == 0) {
      $(".benfits .detail-list dl").removeClass("active");
    } else {
      $(".benfits .detail-list dl").eq($(this).index() - 1).addClass("active").siblings().removeClass("active");
    }
    $(".benfits .list-icon li").removeClass('active');
    $(this).addClass('active');
  });

  $(".review .users li").mouseover(function(event) {
    var num = $(this).index();
    $(".review .users li").eq(num).addClass('current').siblings().removeClass('current');
    $(".review dl").eq(num).addClass('active').siblings().removeClass('active');
  });

  $(".bottombuy li").mouseover(function() {
    var index = $(this).index();
    var _num = $(this).attr("data-num");
    var _discount = $(".banner .offer").eq(_num).find(".price strong").text();
    var _price = $(".banner .offer").eq(_num).find(".price del").text();
    var _href = $(".banner .offer").eq(_num).find(".price .buybtn").attr("href");
    var _ga = $(".banner .offer").eq(_num).find(".price .buybtn").attr("onclick");
    if (!$(this).hasClass("sold")) {
      $(this).addClass("on").siblings().removeClass("on");
      $(".bottombuy .imgbox img").eq(index).addClass("on").siblings().removeClass("on");
      $(".bottombuy .price").find("strong").text(_discount);
      $(".bottombuy .price").find("del").text(_price);
      $(".bottombuy .price").find(".buybtn").attr({
        "href": _href,
        "onclick": _ga
      });
    }
  });

  getPacksNum();
  timeInit();
  countdown("#topcount b", "#giftcount b");
  getViewNum();
});

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "itiufeb_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 592;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
}

function timeCountDown(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
    var d = Math.floor(remainingTime / (24 * 60 * 60));
    var h = Math.floor(remainingTime / (60 * 60) % 24);
    var i = Math.floor(remainingTime / 60 % 60);
    var s = Math.floor(remainingTime % 60);
    var mi = Math.floor((999 - dateObj.getMilliseconds()) / 10);
    return [d, h, i, s, mi];
  } else {
    return [0, 0, 0, 0, 0];
  }
}

var countdown = function(countdown, countdown1, countdown2) {
  var statusNow = statusSet();
  getCycleCountdown(countTime);
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown1).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if (statusNow == 1) {
    setTimeout("countdown('" + countdown + "','" + countdown1 + "')", 1);
  }
};

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 2).substr(0, 2);
}

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$(".banner .offer.bigbox").hasClass('"sold"')) {
      soldOut();
    }
  }
  return statusNow;
}

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < countTime) {
    return 1;
  } else {
    var cName = "itiufeb_n" + date.getDate();
    cSet(cName, 0);
    $('.packsNum').html(0);
    return 2;
  }
}

function getPacksNum() {
  var date = new Date();
  var cName = "itiufeb_n" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 54;
  } else {
    packs = arr[2];
  }
  $('.packsNum').html(packs);
  packs--;
  cSet(cName, packs);
  if (packs > 23) {
    reTime = (Math.random() > 0.5) ? 8 : 16;
  } else {
    reTime = 10;
  }
  if (packs > 0) setTimeout('getPacksNum()', reTime * 1000);
}

function getViewNum() {
  viewNum = parseInt(Math.random()*(356-168+1)+168,10);
  $('.viewNum').html(viewNum);
  setTimeout('getViewNum()', 20000);
}
