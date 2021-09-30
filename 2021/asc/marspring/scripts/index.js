// @ts-nocheck
$(function() {
  checkDateTime();
})

window.onload = function() {
  init();
  getScroll();
}

function checkDateTime() {
  var Date = getCookie("today") ? getCookie("today") : null;
  var currentDate = getNowFormatDate();
  if (Date != null) {
    Date = Date.split('-');
    currentDate = currentDate.split('-');
    if (currentDate[0] > Date[0]) {
      delAllCookie();
    } else {
      if (currentDate[1] > Date[1]) {
        delAllCookie();
      } else {
        if (currentDate[2] > Date[2]) {
          delAllCookie();
        }
      }
    }
  }
  restnum(100);
}

function delAllCookie() {
  delCookie('getcookie');
  delCookie('currentNum');
  delCookie('today');
}

function init() {
  var currentNum = getCookie("currentNum") ? getCookie("currentNum") : null;
  if (currentNum != null && currentNum !== '0') {
    $('.product-content ul li').removeClass('second first')
  } else if (currentNum != null && currentNum === '0') {
    hidePck();
  }
}

function arrowLeft() {
  var len = $('.comments-content>ul>li').length;
  var current = $('.comments-content>ul>li.on').index();
  if (current == 0) {
    current = len - 1;
  } else {
    current--;
  }
  commonHtml(current)
}

function arrowRight() {
  var len = $('.comments-content>ul>li').length;
  var current = $('.comments-content>ul>li.on').index();
  if (current == (len - 1)) {
    current = 0;
  } else {
    current++;
  }
  commonHtml(current)
}

function commonHtml(current) {
  $('.comments-content>ul>li').removeClass('on');
  $('.comments-content>ul>li').eq(current).addClass('on');
  $('#carousel').carousel({
    curDisplay: current,
  });
}


function getScroll() {
  var num = 1;
  $(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    var scrollHeight = $(document).height();
    var windowHeight = $(this).height();
    if (scrollTop > windowHeight) {
      bannerChange();
    } else {
      $('.floatlayer').removeClass("on");
    }
  });
}

function getClose() {
  $('.tc').hide();
}

function bannerChange() {
  $('.floatlayer').addClass("on");
  // var currentNum = getCookie("currentNum") ? getCookie("currentNum") : null;
  // if (currentNum != null && currentNum !== '0') {
  //   $('.banner1').show();
  //   $('.banner2').hide();
  // } else if (currentNum === '0') {
  //   $('.banner1').hide();
  //   $('.banner2').show();
  // } else if (currentNum == null) {
  //   $('.banner1').show();
  //   $('.banner2').hide();
  // }
}

function restnum(max) {
  var currentNum = getCookie("currentNum") ? getCookie("currentNum") : null;
  var Date = getCookie("today") ? getCookie("today") : null;
  var datetime = getNowFormatDate();
  if (!Date) {
    cookieGO('today', datetime);
  }
  if (currentNum == null) {
    splitNum('100');
  }
  if (currentNum != null && currentNum !== '0') {
    $('.num').html(currentNum);
    splitNum(currentNum);
    max = parseInt(currentNum);
  }
  if (currentNum === '0') {
    $('.num').html(currentNum);
    liChange();
    return;
  }
  var timers = null,
    timer = null;
  timers = setInterval(function() {
    if (max > 10) {
      max--;
      $('.num').html(max);
      splitNum(max);
      cookieGO('currentNum', max + '');
    } else {
      clearInterval(timers);
      timer = setInterval(function() {
        max--;
        if (max <= 0) {
          clearInterval(timer);
          liChange();
          // bannerShowOrHide();
          hidePck();
        }
        $('.num').html(max);
        splitNum(max);
        cookieGO('currentNum', max + '');
      }, 30000)
    }
  }, 6000);
}

function hidePck() {
  $('#super-value-pack').remove();
  $(".review-h2").css("paddingTop", "0px");
  $(".center-bg").css("backgroundSize", "100% 1592px");
  // $('#super-value-pack').hide();
  // $('#container').css({
  //   'background': "url('../../2021/asc/jannewyear/images/bg-1.png') no-repeat",
  //   'height': '4161px',
  //   'background-position': '50%',
  //   'background-size': 'cover'
  // });
}

// function bannerShowOrHide() {
//   if ($('.banner1').css("display") == "none") {
//     $('.banner2').hide();
//   } else {
//     $('.banner1').hide();
//     $('.banner2').show();
//   }
// }

function splitNum(max) {
  max = max + '';
  var arr = max.split('');
  if (arr.length == 1) {
    $('.bai').html('0');
    $('.shi').html('0');
    $('.ge .time').animate({
      'marginTop': -parseInt(arr[0]) * 40 + 'px'
    })
  } else if (arr.length == 2) {
    $('.bai').html('0');
    $('.shi .time').animate({
      'marginTop': -parseInt(arr[0]) * 40 + 'px'
    })
    $('.ge .time').animate({
      'marginTop': -parseInt(arr[1]) * 40 + 'px'
    })
  } else if (arr.length == 3) {
    $('.bai .time').animate({
      'marginTop': -parseInt(arr[0]) * 40 + 'px'
    })
    $('.shi .time').animate({
      'marginTop': -parseInt(arr[1]) * 40 + 'px'
    })
    $('.ge .time').animate({
      'marginTop': -parseInt(arr[2]) * 40 + 'px'
    })
  }
}

function liChange() {
  // hidePck();
  $(".mask").remove();
  $("#product-list,.floatlayer").removeClass("sold").addClass("sold");
  $("#product-list li.three").removeClass("bigsell");
  $("#product-list .product-content li.two").removeClass("sell");
  $("#product-list .product-content li.one").addClass("sell");
  $("#product-list .product-content li.two").addClass("bigsell");
  $("#product-list .product-content li.three").find(".buybtn").removeClass("sell").addClass("normal");
  $("#product-list .product-content li.two").find(".buybtn").removeClass("normal").addClass("sell");

  $("#product-list .product-content li.three").append('<div class="mask"><span class="sold-word"></span></div>');
  setTimeout('$(".sold-word").addClass("on");', 900);

  var _imgSrc = $("#product-list .product-content li.two .imgbox").find("img").attr("src");
  var _href = $("#product-list .product-content li.two .buybtn").attr("href");
  var _ga = $("#product-list .product-content li.two .buybtn").attr("ga");
  var _strong = $("#product-list .product-content li.two .price").find("strong").html();
  var _del = $("#product-list .product-content li.two .price").find("del").html();

  $(".floatlayer .imgbox").find("img").attr("src", _imgSrc);

  $(".floatlayer .countDown").html("75% OFF");
  $(".floatlayer .price strong").html(_strong);
  $(".floatlayer .price del").html(_del);
  $(".floatlayer .price .buybtn").attr({
    "href": _href,
    "onclick": _ga
  });
}

function getNowFormatDate() {
  var date = new Date();
  var seperator1 = "-";
  var year = date.getFullYear();
  var month = date.getMonth() + 1;
  var strDate = date.getDate();
  if (month >= 1 && month <= 9) {
    month = "0" + month;
  }
  if (strDate >= 0 && strDate <= 9) {
    strDate = "0" + strDate;
  }
  var currentdate = year + seperator1 + month + seperator1 + strDate;
  return currentdate;
}