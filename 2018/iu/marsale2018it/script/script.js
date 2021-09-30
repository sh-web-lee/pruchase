//target
$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

//floatlayer
function showFloat(subject, target) {
  var scrollHeight = $(subject).offset().top;
  if ($(window).scrollTop() > scrollHeight) {
    $(target).addClass('on');
  } else {
    $(target).removeClass('on');
  }
}

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".banner .giftnum .item").remove();
  var num = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(num).length;
  var str = num.toString();
  var box = $(".banner .giftnum");
  var createobj;
  for (var i = 0; i < length; i++) {
    if (length < 2) {
      createobj = $(new Array(3).join('<div class="item"></div>'));
    } else {
      createobj = $('<div class="item"></div>');
    }
    box.append(createobj);
  }
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .giftnum .item").append(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#gift .item").eq(a).animate({
      marginTop: -curNum * 16,
    }, "slow");
    $("#shadow .item").eq(a).animate({
      marginTop: -curNum * 16,
    }, "slow");
  }
}

function timeOver() {
  $(".banner .timebox").addClass("timeover");
  $('.floatlayer .title').hide();
  $(".banner .timebox").html('Solo <div class="giftbox"><div id="gift" class="giftnum"></div><div id="shadow" class="giftnum shadow packsNum"></div></div> PEZZI RIMASTI OGGI!');
  //flipNum(80, 2);
}

function zoomout() {
  $("#shadow").addClass("zoomout");
  $(".banner .imgbox").append("<div class='dissolve'></div>");
  setTimeout(function() {
    $("#shadow").removeClass("zoomout");
    $(".banner .imgbox .dissolve").remove();
  }, 1500);
}

$(function() {
  $(".comparebtn").target($(".comparison"));
  $(".banner .gift").target($(".donation"));
  $(".benfits .detail-list dl").hover(function() {
    $(".benfits .detail-list dl").removeClass("active");
    $(".benfits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  }, function() {
    $(".benfits .detail-list dl").eq(0).addClass("active");
  });

  timeInit();
  packsInit();
  countdown(1);
  if (isFirst) {
    setTimeout('getSales()', 2000);
  } else {
    setTimeout('getSales()', 15000);
  }

  $(window).on('scroll', function() {
    var isClass = $(".floatlayer").hasClass("scroll");
    if (!isClass) {
      showFloat(".payment:last", "#floatlayer");
    }
  });

  $(".floatlayer .close").on("click", function() {
    $(".floatlayer").removeClass("on").addClass("scroll");
  });

  $(".footbuy li").on("click", function() {
    var discount, original;
    var num = $(this).index();
    var index = $(this).attr("data-num");
    $(this).addClass("active").siblings().removeClass("active");
    if (index === "1") {
      $(".footbuy .price").find(".original").removeClass("hide");
      $(".footbuy .price b").find("span").removeClass("hide");
      discount = $(".banner .list").eq(index).find(".discount").text();
      original = $(".banner .list").eq(index).find(".original").text();
      $(".footbuy .price").find(".discount").text(discount);
      $(".footbuy .price").find(".original").text(original);
    } else {
      $(".footbuy .price").find(".original").addClass("hide");
      $(".footbuy .price b").find("span").addClass("hide");
    }
    var btnHref = $(".banner .list").eq(index).find(".buybtn").attr("href");
    var sale = $(".banner .list").eq(index).find(".sale").text();
    $(".footbuy .imgbox").find("img").eq(num).addClass("active").siblings().removeClass("active");
    $(".footbuy .buybtn").attr("href", btnHref);
    $(".footbuy .price").find(".sale").text(sale);
  });
});

function timeInit() {
  var date = new Date();
  var cName = "itiumar" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    count1 = nowTime + 60 * 10;
    cSet(cName, count1);
  } else {
    count1 = arr[2];
  }
}

function packsInit() {
  var packs;
  var date = new Date();
  var cName = "itiumarp" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 115;
    isFirst = true;
  } else {
    //var packsArr = arr[2].split('%2A');
    packs = arr[2];
    isFirst = false;
  }
  $('.packsNum').html(packs);
  flipNum(packs, 2)
}

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < count1) {
    return 1;
  } else {
    return 2;
  }
}

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    if (!$('.timebox').hasClass('timeover')) {
      timeOver();
      packsInit();
    }
  }
  return statusNow;
}

function getCycleCountdown(endTime, ctype) {
  var datetime = timeCountDown(endTime, ctype);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
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

var countdown = function(tType) {
  var statusNow = statusSet();
  getCycleCountdown(count1);
  $("#countdown1 strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $("#countdown2 strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  setTimeout("countdown(" + statusNow + ")", 1);
};

function getSales() {
  var date = new Date();
  var statusNow = statusCheck();
  var reTime = (statusNow == 1) ? 15000 : 20000;
  $.ajax({
    type: "GET",
    url: "marsale2018.php",
    data: "action=getSales&type=" + statusNow + "&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      var scrollHeight = $(".banner").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $(".floatlayer").removeClass('on');
        setTimeout("$('.floatlayer').addClass('on');", 800);
      }
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);
      if (sales.saleType == 3) {
        $('.floatlayer .salesType').html('ha appena acquistato');
        $('.floatlayer .salesDes').html('pezzi restanti, approfittane subito!');
      } else {
        $('.floatlayer .salesType').html('ha appena acquistato');
        $('.floatlayer .salesDes').html('pezzi restanti, attiva ora');
      }
      $('.packsNum').html(sales.packsNum);
      $('.buyNum').html(sales.buyNum);
      flipNum(sales.buyNum, 2);
      zoomout();
      packsInit();
    }
  });
  if (isFirst) {
    setTimeout('getSales()', 2000);
  } else {
    setTimeout('getSales()', reTime);
  }
}