$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};

var data = 0;
var panelFadeIn = setInterval(function() {
  if (data < 3) {
    $(".banner .content .panel").eq(data).removeClass("in");
    data++;
  } else {
    clearInterval(panelFadeIn);
  }
}, 100);

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(number, length) {
  var num = PrefixInteger(number, length);
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .content .panel.right .off>span>span").html(list);
  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    $(".banner .content .panel.right .off>span>span").eq(i).animate({
      marginTop: -curNum * 58,
    }, "slow");
  }
}

//soldOut
function soldOut() {
  //banner
  $(".banner .content .panel.right").addClass("sold").find(".buybtn").end().find("del").text("199,90 zł");
  flipNum(68, 2);

  $(".banner .panel.right .buybtn,.gifts .buybtn,.bottombuy buybtn").attr({
    // "href": "http://www.iobit.com/buy.php?product=pl-iu103pc64&ref=pl_iu103pc64purchase2004-btm" + ref + "&refs=pl_purchase_iu&tw=-8",
	"href": "http://www.iobit.com/buy.php?product=pl-iu113pc64&ref=pl_iu113pc64purchase2004-btm" + ref + "&refs=pl_purchase_iu",
    "onclick": "ga('send', 'event', 'iubuy', 'buy', 'iuspringsale2020-pl')"
  });
  //gifts
  $(".gifts h2").text("PREZENTY NIEDOSTĘPNE");
  $(".gifts h3").text("WYKORZYSTAJ WYJĄTKOWĄ OFERTĘ").css({
    "fontSize": "20px"
  });
  $(".gifts .content dl").addClass("sold");
  $(".gifts .price del").text("199,90 zł");
  $(".gifts .price span").text("-68%");
  // $(".gifts .buybtn").attr({
  //   "href": "http://www.iobit.com/buy.php?product=pl-iu93pc64&ref=pl_iu93pc64purchase2004-mid" + ref + "&refs=pl_purchase_iu&tw=-8",
  //   "onclick": "ga('send', 'event', 'iubuy, 'buy', 'iuspringsale2020-1pc3y-mid-pl')"
  // });

  //bottombuy
  $(".bottombuy ul").addClass("sold");
  select($(".bottombuy ul li").eq(2));
}

/*var countdown = function (countdown, countdown2, countdown3){
  getCycleCountdown();
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown3).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  setTimeout("countdown('"+ countdown +"', '"+ countdown2 +"', '"+ countdown3 +"')", 1);
};
function getCycleCountdown () {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}*/

var statusNow = 1;

var countdown = function(countdown, countdown2, countdown3) {
  getCycleCountdown();
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown3).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  //$(countdown).eq(0).html(0).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s).end().eq(4).html(mi);
  setTimeout("countdown('" + countdown + "', '" + countdown2 + "', '" + countdown3 + "')", 1);
};

function getCycleCountdown() {
  if (MApp(2.2).cookie.get('springsale2020pl')) {
    dt = MApp(2.2).cookie.get('springsale2020pl');
  } else {
    var date = new Date();
    dt = date.setMinutes(date.getMinutes() + 20);
    setCookie('springsale2020pl', dt, 1);
    //MApp(2.2).cookie.set('janwintersalesfr2020', dt);
  }

  var datetime = getCountdown(dt);
  if (datetime == 0) {
    d = h = i = s = mi = '00';
    if (statusNow == 1) {
      soldOut();
      console.log("sold");
    }
    statusNow++;
  } else {
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
  }
}

function getCountdown(t) {
  var e = new Date,
    i = Math.floor(e.getTime() / 1000),
    r = t / 1000,
    n = r - i;
  if (n > 0) {
    var s = Math.floor(n / 86400),
      a = Math.floor(n / 3600 % 24),
      o = Math.floor(n / 60 % 60),
      u = Math.floor(n % 60),
      h = 999 - e.getMilliseconds();
    return 10 > h ? h = "00" + h : 100 > h && (h = "0" + h),
      Array(s, a, o, u, h)
  }
  return 0
}

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + "; " + expires;
}


//select
function select(selector) {
  var _index = selector.index();
  var _num = selector.attr("data-num");
  var _href = $(".banner .panel").eq(_num).find(".buybtn").attr("href");
  var _ga = $(".banner .panel").eq(_num).find(".buybtn").attr("href");
  var _price = $(".banner .panel").eq(_num).find(".price").text();
  if (_num != 0) {
    var _del = $(".banner .panel").eq(_num).find("del").text();
    $(".bottombuy dl .price").html(_price + " <del>" + _del + "</del>");
  } else {
    $(".bottombuy dl .price").html(_price);
  }
  if (_index == 0) {
    $(".bottombuy .box .off").slideUp(200);
  } else {
    $(".bottombuy .box .off").slideDown(200);
    if (_index == 1) {
      $(".bottombuy .box .off").text("-85%");
    } else if (_index == 2) {
      $(".bottombuy .box .off").text("-68%");
    } else if (_index == 3) {
      $(".bottombuy .box .off").text("-50%");
    }
  }
  selector.addClass("active").siblings().removeClass("active");
  $(".bottombuy .box .iu").attr("class", "iu iu" + _index);
  $(".bottombuy .box .bundle").attr("class", "bundle bundle" + _index);
  $(".bottombuy dl .buybtn").attr({
    "href": _href,
    "onclick": _ga
  });
}

$(function() {
  flipNum(85, 2);
  //banner panel
  setTimeout(panelFadeIn, 100);
  $(".banner .content .panel").hover(function() {
    $(this).addClass("on").siblings().removeClass("on");
  }).mouseleave(function() {
    $(this).parent().find(".right").addClass("on").siblings().removeClass("on");
  });
  //countdown
  countdown((".banner .countdown strong"), (".gifts .countdown strong"), (".bottombuy .countdown strong"));
  //feature
  $(window).scrollWindow($(".service"), $('.feature dl'), ("on"));
  //review
  $(".review ul li").hover(function() {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".review .interview>p").eq(index).addClass("on").siblings().removeClass("on");
  });
  //bottombuy
  $(".bottombuy ul li").click(function() {
    select($(this));
  });
});