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
    if(currentDate[0] > Date[0]) {
      delAllCookie();
    } else {
      if(currentDate[1] > Date[1]) {
        delAllCookie();
      } else {
        if(currentDate[2] > Date[2]) {
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
      $('.banner').hide();
    }
  });
}

function getClose() {
  $('.tc').hide();
}

function bannerChange() {
  var currentNum = getCookie("currentNum") ? getCookie("currentNum") : null;
  if (currentNum != null && currentNum !== '0') {
    $('.banner1').show();
    $('.banner2').hide();
  } else if (currentNum === '0') {
    $('.banner1').hide();
    $('.banner2').show();
  } else if (currentNum == null) {
    $('.banner1').show();
    $('.banner2').hide();
  }
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
          bannerShowOrHide();
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
  $('#super-value-pack').hide();
  $('#container').css({
    'background':"url('../../2021/asc/jannewyear/images/bg-1.png') no-repeat", 
    'height': '4161px',
    'background-position': '50%',
    'background-size': 'cover'
  });
}

function bannerShowOrHide() {
  if ($('.banner1').css("display") == "none") {
    $('.banner2').hide();
  } else {
    $('.banner1').hide();
    $('.banner2').show();
  }
}

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

  var ul = $('.product-content ul');
  var li1 = $('.product-content ul li:nth-child(1)');
  li1.addClass('first');

  var li3 = $('.product-content ul li:nth-child(2)');
  li3.addClass('maiwanle');
  li3.find('.li-top img:nth-child(3), .li-top img:nth-child(1)').addClass('hide');
  li3.find('.li-top img:nth-child(4), .li-top img:nth-child(2)').removeClass('hide');

  var li5 = $('.product-content ul li:nth-child(3)');
  li5.find('.saleout').removeClass('hide');
  li5.addClass('second');
  li5.find('.li-top img:nth-child(3), .li-top img:nth-child(1)').addClass('hide');
  li5.find('.li-top img:nth-child(4), .li-top img:nth-child(2)').removeClass('hide');

  ul.empty();
  ul.append(li5);
  ul.append(li1);
  ul.append(li3);

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
