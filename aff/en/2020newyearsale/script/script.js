$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function goTarget(target, height) {
  var Theigth = target.offset().top + height;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}

// Float Function
var $float = $(".float");
var unfold = function () {
  if(statusCheck()==1) {
    $float.addClass('unfold');
    $float.find('.fold-message').hide(30, function () {
      $float.find('.unfold-message').fadeIn(10);
    });
  }
};
var fold = function () {
  if(statusCheck()==1) {
    $float.removeClass('unfold');
    $float.find('.unfold-message').hide(30, function () {
      $float.find('.fold-message').fadeIn(10);
    });
  }
};
var soldout = function () {
  $('.fold-message .countdown').remove();
  var statusCName='enaffny_s';
  var statusNow=cGet(statusCName);
  if((statusNow!=2)&&(statusNow!=3)){
    cSet(statusCName,2);
  }
  $float.removeClass('unfold');
  $float.find('.unfold-message').hide(30, function () {
    $float.find('.fold-message').fadeIn();
  });
  $float.addClass('soldout');
  $float.find('.learnmore').attr('href','javascript: void(0);');
};

//coupon
var $coupon = $(".coupon");
var showCoupon = function (param) {
  $(".float").css({"visibility": "hidden"});
  $(".banner").css({"marginTop": 0});
  switch (param) {
    case 'info': setTimeout('$(".info").show().siblings().hide();$coupon.fadeIn();',1000); break;
    case 'mail': $(".mail").show().siblings().hide(); $coupon.fadeIn();break;
    case 'gift':
      $coupon.fadeIn();
      $(".mail").html("" +
      "<div class='content'>" +
      "<h2>Congrats!</h2>" +
      "<h4>The <b>FREE gift</b> pack has been sent to your mail box.</h4>" +
      "<em><small>* Please check your email and feel free to contact tickets@iobit.com <br> if you have any question.</small></em>" +
      "</div><a class='close' href='javascript: closeCoupon();'>×</a>").show().siblings().hide(); break;
  }
};
var closeCoupon = function (isInit) {
  $(".float").css({"visibility": "visible"});
  $(".banner").css({"marginTop": 90});
  if(isInit==1){
    _init();
  }
  $coupon.fadeOut();
};

function cSet(name, value, withDate) {
  var Days = 2;
  var exp = new Date();
  if(withDate){
    name = name + exp.getDate();
  }
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name,withDate) {
  var exp = new Date();
  if(withDate){
    name = name + exp.getDate();
  }
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function timeInit() {
  var date = new Date();
  var cName = "enaffny_t";
  var nowTime = Math.floor(date.getTime() / 1000);
  countTime=cGet(cName,1);
  if (cGet(cName,1) == null) {
    countTime = nowTime + 300;
    cSet(cName, countTime,1);
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
    var mi = 999 - dateObj.getMilliseconds();
    if (mi < 10) {
      mi = '00' + mi;
    } else if (mi < 100) {
      mi = '0' + mi;
    }
    return [d, h, i, s, mi];
  } else {
    return [0, 0, 0, 0, 0];
  }
}

function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

var countdown = function(countdown1, countdown2) {
  var statusNow = statusSet();
  if (statusNow == 1) {
    getCycleCountdown(countTime);
    $(countdown1).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
    $(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  }
  setTimeout("countdown('" + countdown1 + "','" + countdown2 + "')", 1);
};

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$float.hasClass('soldout')) {
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

function isEmail(strEmail) {
  if (strEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
    return true;
  else
    return false;
}

function sendGift() {
  var sendEmail = $('.email').val();
  if (sendEmail.length <= 0) {
    alert('Please enter your email address to claim your free gift pack.');
  } else if (!isEmail(sendEmail)) {
    alert('Incorrect E-mail format.');
  } else {
    var pid = MApp(2.2).url.getParameters('t');
    $('.mail form button').before("<p style='text-align: center;' id='mail-note'>Sending message.Please wait a moment.</p>");
    $('.emailbtn').attr('onclick', 'javascript:void(0)');
    $.ajax({
      url: 'requestDeal.php',
      type: 'GET',
      dataType: 'json',
      async: true,
      timeout: 10000,
      data: 'action=sendGift&sendEmail=' + sendEmail + '&pid=' + pid,
      success: function(res) {
        statistic(3,'mail send');
        if ((res.status == 1) || (res.status == 2)) {
          showCoupon('gift');
          //setTimeout('closeCoupon(0)',6000);
        } else if (res.errorMsg.length > 0) {
          alert(res.errorMsg);
        } else {
          alert('There is something wrong while sending email.Please try again later.');
        }
        $('#mail-note').remove();
        $('.emailbtn').attr('onclick', 'sendGift()');
      }
    });
  }
  return false;
}

function statistic(status,des){
  $.ajax({
    type: "GET",
    url:'index.php?action=statistic&status='+status+'&des='+des
  })
}

function _init(){
  timeInit();
  countdown("#countdown1 strong","#countdown2 strong");

  $(".fold-message").hover(function(){
    unfold();
  });
  $(".unfold-message").mouseleave(function(){
    fold();
  });

  $(document).on("click", function (e) {
    if($(e.target).closest('.float-content').length === 0) {
      fold();
    }
  });
}

function reBuyLink(){
  var ref = MApp(2.2).url.getParameters('ref');
  var refPattern=new RegExp('ir');
  if(refPattern.test(ref)){
    var buyBtn=$('.buybtn');
    buyBtn.eq(1).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','2019-iobit-xmas-best-value-pack-1-pc-2797');
    buyBtn.eq(2).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','2019-iobit-xmas-best-value-pack-3-pcs-3397');
    buyBtn.eq(3).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','advanced-systemcare-pro-1-year-subscription-1-pc-2019bf-1199');
    buyBtn.eq(4).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','advanced-systemcare-pro-1-year-subscription-3-pcs-2019bf-1499');
    buyBtn.eq(5).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','driver-booster-pro-1-year-subscription-1-pc-2019bf-1499');
    buyBtn.eq(6).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','driver-booster-pro-1-year-subscription-3-pcs-2019bf-1799');
    buyBtn.eq(7).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-malware-fighter-pro-1-year-subscription-1-pc-2019bf-1499');
    buyBtn.eq(8).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-malware-fighter-pro-1-year-subscription-3-pcs-2019bf-1799');
    buyBtn.eq(9).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','macbooster-lite-1-mac-2019bf-1799');
    buyBtn.eq(10).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','macbooster-standard-3-macs-2019bf-3299');
    buyBtn.eq(11).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-software-updater-pro-1-year-subscription-1-pc-899');
    buyBtn.eq(12).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-software-updater-pro-1-year-subscription-3-pcs-2019bf-1199');
    buyBtn.eq(13).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-uninstaller-pro-1-year-subscription-1-pc-2019bf-999');
    buyBtn.eq(14).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','iobit-uninstaller-pro-1-year-subscription-3-pcs-2019bf-1299');
    buyBtn.eq(15).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','2019-iobit-xmas-pack-asc-db-1-pc-2248');
    buyBtn.eq(16).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','2019-iobit-xmas-pack-asc-db-3-pcs-2748');
    buyBtn.eq(17).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','2019-iobit-xmas-pack-asc-imf-1-pc-2248');
    buyBtn.eq(18).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','2019-iobit-xmas-pack-asc-imf-3-pcs-2748');
    buyBtn.eq(19).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','2019-iobit-xmas-pack-db-imf-1-pc-2498');
    buyBtn.eq(20).attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value','2019-iobit-xmas-pack-db-imf-3-pcs-2998');
  }
}

function fsBuy(){
  var statusCName='enaffny_s';
  var statusNow=cGet(statusCName);
  if((statusNow!=2)&&(statusNow!=3)){
    cSet(statusCName,3);
  }
}

function onPopClosed(orderReference) {
  if (orderReference) {
    var statusCName='enaffny_s';
    var statusNow=cGet(statusCName);
    if(statusNow==3){
      showCoupon('mail');
    }else{
      window.location='https://www.iobit.com/en/thankyou.php?refs=enaffny';
    }
  }
}

(function () {
  reBuyLink();
  //timeInit();
  $('#mail-form').submit(function (event) {
    event.preventDefault();
    return false;
  });
    //nav
  $(window).scrollWindow($(".banner .buybtn"),$('.nav'),("on"));

  $(window).on('scroll', function () {
    if ($(window).scrollTop() > $(".banner").offset().top) {
      $(".nav a").eq(0).addClass("active").siblings().removeClass("active");
    }
    if ($(window).scrollTop() > $(".offer70").offset().top - 50) {
      $(".nav a").eq(1).addClass("active").siblings().removeClass("active");
    }
    if ($(window).scrollTop() > $(".offer75").offset().top - 50) {
      $(".nav a").eq(2).addClass("active").siblings().removeClass("active");
    }
  });


  var statusCName='enaffny_s';
  if(cGet(statusCName,0)==null){
    cSet(statusCName,1);
  }

  var cName='enaffny_i';
  if(cGet(cName,1)==null){
    setTimeout(showCoupon('info'), 3000);
    cSet(cName,1,1);
    setTimeout('closeCoupon(1)',10000);
  }else{
    _init();
  }

  var pageSrc = MApp(2.2).url.getParameters('src');
  if (pageSrc == 'tp') {
    showCoupon('mail');
  }

  //review
  $(".review ul li").on("hover", function () {
    var index = $(this).index();
    $(this).addClass('active').siblings().removeClass('active');
    $(".review-content dl").eq(index).addClass('active').siblings().removeClass('active');
    $(".review span.arrow").stop().animate({'marginLeft': index*240 + 120}, 300);
  });

  $(".buybtn").click(function(){
    var statusNow=cGet(statusCName);
    if((statusNow!=2)&&(statusNow!=3)){
      cSet(statusCName,3);
    }
  });

  document.oncontextmenu = function(e){
    e.preventDefault();
  };

  var ref = MApp(2.2).url.getParameters('ref');
  if(ref.length > 0){
    $('.buybtn').each(function() {
      var buyHrefTemp = $(this).attr('href');
      var buyHref = buyHrefTemp.replace(/ref=(.*)&/, 'ref=' + ref + '&');
      $(this).attr('href', buyHref);
    });
  }

  setTimeout('window.location.href="https://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);
}());