var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.removeClass("more").addClass(ClassName);
      $(".floatlayer .hurry").addClass("show");
      $(".floatlayer .purse").removeClass("show");
      //flipNum(22, 2);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

//num reduce
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  var num = PrefixInteger(num, length);
  var len = String(num).length;
  var str = num.toString();
  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    $(".floatlayer .scroll-tick").eq(i).animate({
      marginTop: -curNum * 32,
    }, "slow");
  }
}

//claimPack
var mask = $(".mask .panel");

function claimPack() {
  $(".mask").addClass("show");
  mask.addClass("claim").removeClass("congrats");
  mask.html('<h2>Thank you for your order!</h2><p>To claim your <b>FREE</b> gift pack, please enter your email address in the input box and click the button below. The gift pack will be sent over in minutes.</p><p><input type="text" name="email" class="email" placeholder="Enter your email address here" /></p><p><button class="emailbtn" onclick="sendGift()">Claim my gift pack</button></p><p class="note">For any help, please email tickets@iobit.com with your order id included.</p>');
}

//congrats
function congrats() {
  $(".mask").addClass("show");
  mask.addClass("congrats").removeClass("claim");
  mask.html('<strong>Congrats!</strong><h2>The <b>FREE gift</b> pack has been sent to your mail box.</h2><p>* Please check your email and feel free to contact tickets@iobit.com if you have any question.</p>');
  closecongrats();
}
//hidecongrats
function closecongrats() {
  setTimeout('$(".mask").remove();', 6000);
  setTimeout("window.location.href='index.php?ref='+MApp(2.2).url.getParameters('ref')", 6000);
}

$(function() {
  packsInit();
  setTimeout('getSales(1)', 5000);

  giftCheck();
  refCheck();
  countdown(("#toptime strong"));
  countdown(("#botime strong"));
  $(window).scrollWindow($("#introbtn"), $('.floatlayer'), ("on"));
  $(".banner .right").mouseover(function() {
    var isMore = $(".floatlayer").hasClass("on");
    if (!isMore) {
      $(".floatlayer").removeClass("on").addClass("more");
      $(".floatlayer .purse").addClass("show");
      $(".floatlayer .hurry").removeClass("show");
    }
  });
  $(".banner .right").mouseout(function() {
    var isMoreout = $(".floatlayer").hasClass("more");
    if (isMoreout) {
      $(".floatlayer").removeClass("more");
    }
  });
  // setTimeout('window.location.href="http://purchase.iobit.com/aff/en/asc/2017asc10general/index.php'+location.search+'"',5000);
  // $('.pop-up').remove();
});

function onPopClosed(orderReference) {
  if (orderReference) {
    claimPack();
  }
}

function refCheck() {
  var ref = MApp(2.2).url.getParameters('ref');
  var aff = MApp(2.2).url.getParameters('aff');
  if (!(ref||aff)){
    ref=cGet('bf_ref');
    aff=cGet('bf_aff');
  }
  if ((ref.length > 0)||(aff.length>0)) {
    if (ref == 'fs1702en') {
      $('.bfp1').attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value', '2017-iobit-black-friday-special-pack-1-pc');
      $('.bfp3').attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value', '2017-iobit-black-friday-special-pack-3-pcs');
      $('.asc1').attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value', 'advanced-systemcare-pro-1-year-subscription-1-pc-70off');
      $('.asc3').attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value', 'advanced-systemcare-pro-1-year-subscription-3-pcs-70off');
      $('.db1').attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value', 'driver-booster-pro-1-year-subscription-1-pc-70off');
      $('.db3').attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value', 'driver-booster-pro-1-year-subscription-3-pcs-70off');
      $('.imf1').attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value', 'iotransfer-1-year-1-pc-1477');
      $('.imf3').attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value', 'iotransfer-1-year-3pcs-1799');
      $('.mb1').attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value', 'macbooster-lite-1-mac-70off');
      $('.mb3').attr('href', '#').attr('data-fsc-action', 'Add,Checkout').attr('data-fsc-item-path-value', 'macbooster-standard-3-macs-70off');
    } else {
      $('.buybtn').each(function() {
        var buyHrefTemp = $(this).attr('href');
        var buyHref = buyHrefTemp.replace(/ref=(.*)&aff=/, 'ref=' + ref + '&aff=' + aff);
        $(this).attr('href', buyHref);
      });
    }
  }
}

function cGet(name) {
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return '';
}

function giftCheck() {
  var pageSrc = MApp(2.2).url.getParameters('src');
  if (pageSrc == 'tp') {
    claimPack();
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
    $('.claim').append("<p style='text-align: center;' id='mail-note'>Sending message.Please wait a moment.</p>");
    $('.emailbtn').attr('onclick', 'javascript:void(0)');
    $.ajax({
      url: 'requestDeal.php',
      type: 'GET',
      dataType: 'json',
      async: true,
      timeout: 60000,
      data: 'action=sendGift&sendEmail=' + sendEmail + '&pid=' + pid,
      success: function(res) {
        if ((res.status == 1) || (res.status == 2)) {
          congrats();
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
}

function packsInit() {
  var date = new Date();
  var cName = "affen" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 79;
  } else {
    packs = arr[2];
  }
  flipNum(packs, 2);
}

function getSales(isf) {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "index.php",
    data: "action=getSales&d=" + date.getDate() + "&t=" + isf,
    success: function(res) {
      if ($.isNumeric(res)) {
        flipNum(res, 2);
      }
    }
  });
  setTimeout('getSales(0)', 20000);
}