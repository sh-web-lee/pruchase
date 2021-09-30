$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

var review = function (review) {
  $(review).mouseover(function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".reviews").eq(index).addClass("active").siblings().removeClass("active");
  });
};

function expired() {
  $(".ctable table td.itema").html("Expiré");
  $(".ctable table tr.gray td.itema").html("")
}

function soldout() {
  var href = $(".banner .offer.small .buybtn").attr("href");
  var ga = $(".banner .offer.small .buybtn").attr("onclick");
  var del = $(".banner .offer.small .price del").text();
  $(".banner .offer.large").html(" ");
  $(".banner .offer.large, .gift dl, .between-buy").addClass("soldout");
  $(".gift .price del, .between-buy .price del, .comparison .price del").text(del);
  $(".gift .buybtn, .comparison .buybtn, .between-buy .buybtn").attr({"href": href, "onclick": ga});
}

$(function () {
  //packs
  packs = 83;
  //timeInit
  timeInit();
  //countdown
  countdown((".countdown strong"), (".countdown1 strong"), (".countdown2 strong"));
  //param
  var stStr = MApp(2.2).url.getParameters('st');
  var stArr = ['pm_t5', 'pm_p3', 'pm_r2'];
  if ($.inArray(stStr, stArr) != '-1') {expired();}
  //review
  review((".review ul li"));
  //intro
  $(window).scrollWindow($(".payment"),$('.intro dl'),("on"));
});

function packsInit() {
  var date = new Date();
  var cName = "juneascupl" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 82;
    timeCheck();
  } else {
    packs = arr[2];
    timeCheck();
  }
  if (packs <= 3) {
    packs = 3;
  } else {
    setTimeout('getSales()', reTime * 1000);
  }
}

function timeCheck() {
  reTime = (Math.random() > 0.5) ? 7 : 10;
}

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "juneascupl" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 950;
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

var countdown = function (countdown, countdown2, countdown3) {
  var statusNow = statusSet();
  getCycleCountdown(countTime);
  Countdonspace(i);
  Countdonspace(s);
  var iUnit = i.substr(0, 1);
  var iDeca = i.substr(1, 2);
  var sUnit = s.substr(0, 1);
  var sDeca = s.substr(1, 2);
  var miUnit = mi.substr(0, 1);
  var miDeca = mi.substr(1, 2);
  $(countdown).eq(0).html(iUnit).end().eq(1).html(iDeca).end().eq(2).html(sUnit).end().eq(3).html(sDeca).end().eq(4).html(miUnit).end().eq(5).html(miDeca);
  $(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown3).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if (statusNow == 1) {
    setTimeout("countdown('" + countdown + "', '" + countdown2 + "', '"+ countdown3 +"')", 1);
  }
};

function Countdonspace(t) {
  parseInt(t);
  if(t < 10) {
    t = "0"+t;
  }
  return t;
}

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
    if (!$(".banner").hasClass('"sold"')) {
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

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "junesale2020.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function (res) {
      var sales = JSON.parse(res);

      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        if (packs <= 3) {
          packs = 3;
        }
        $(".pickNum").html(packs);
        timeCheck();
      }
    }
  });
  setTimeout('getSales()', reTime * 1000);
}