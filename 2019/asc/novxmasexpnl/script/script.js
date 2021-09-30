function soldout() {
  $('.banner .packs').addClass('three-packs');
  $('.banner .three-pcs').addClass('sold-out');
  $('.banner h2').html('Cadeaus uitverkocht. Pak 60% Kerstkorting nu het nog kan!');
  $('.packs .price strong b,.bottomcart .price strong b').html('19');
  $('.banner .packs del,.bottomcart del').html('€49,99');

  var a0 = $('.packs a'), a1 = $('.three-pcs a');
  var bannerLink0 = a0.attr('href'),
    bannerLink1 = a1.attr('href');
  a0.attr('href', bannerLink1);
  a1.attr('href', bannerLink0);

  $('#floatlayer').addClass('out');
  $('#floatlayer .center').html('<h2>Helaas, de kerstaanbieding is uitverkocht <br> Pak toch nog 60% korting!</h2>');
  $('#floatlayer .price p').html('<p><strong>€19,99</strong>&nbsp;&nbsp;<del>€49,99</del></p>');
  $('#floatlayer .price a').attr('href', bannerLink1);
}

function goTarget(target, yoffset) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $('html, body').animate({
    scrollTop: Theigth
  }, 'slow');
}

$('.benfits .detail-list dl').hover(function () {
  $('.benfits .showcase .screenshot').css('marginLeft', -555 * ($(this).index() + 1));
  $('.benfits .zoom li').removeClass('active').eq($(this).index() + 1).addClass('active');
  $(this).addClass('active').siblings().removeClass('active');
  $('.benfits .list-icon li').removeClass('active').eq($(this).index() + 1).addClass('active');
});
$('.benfits .list-icon li').hover(function () {
  $('.benfits .showcase .screenshot').css('marginLeft', -555 * ($(this).index()));
  $('.benfits .zoom li').removeClass('active').eq($(this).index()).addClass('active');
  var num = $(this).index();
  if (num == 0) {

    $('.benfits .detail-list dl').removeClass('active');
  } else {
    $('.benfits .detail-list dl').eq($(this).index() - 1).addClass('active').siblings().removeClass('active');
  }
  $('.benfits .list-icon li').removeClass('active');
  $(this).addClass('active');
});

$.fn.scrollWindow = function (topheight, scrollclass, ClassName) {
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};
$(window).scrollWindow($('.payments'), $('#floatlayer'), ('on'));
$(window).scrollWindow($('.float-beacon'), $('.intro dl'), ('on'));

var review = function (index) {
  $('.review .details div').eq(index).addClass('active').siblings().removeClass('active');
};
var className = ['one', 'two', 'three', 'four'];
var index = 1;
var nextFun = function () {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $('.review ul li').eq(i).attr('class', className[i]);
  }
  if (index < 3) {
    index++;
    review(index);
  } else {
    index = 0;
    review(index);
  }
};
var prevFun = function () {
  var addName = className.shift();
  className.push(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $('.review ul li').eq(i).attr('class', className[i]);
  }
  if (index > 0) {
    index--;
    review(index);
  } else {
    index = 3;
    review(index);
  }

};

//***************************************************************************************************

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + '=' + escape(value) + ';expires=' + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = 'nlascxmas_t' + date.getDate();
  var arr = document.cookie.match(new RegExp('(^| )' + cName + '=([^;]*)(;|$)'));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 408;
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

var countdown = function (countdown, countdown1, countdown2) {
  var statusNow = statusSet();
  getCycleCountdown(countTime);
  $(countdown).eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown1).eq(1).html(i[1]).end().eq(2).html(s[0]).end().eq(3).html(s[1]).end().eq(4).html(mi[0]).end().eq(5).html(mi[1]);
  if (statusNow == 1) {
    setTimeout('countdown(\'' + countdown + '\',\'' + countdown1 + '\',\'' + countdown2 + '\')', 1);
  }
};

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 2);
}

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$('.banner .three-pcs').hasClass('"sold-out"')) {
      soldout();
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
    return 2;
  }
}

$(function () {
  timeInit();
  countdown('.banner .date strong', '.numbox .listbox');
});
