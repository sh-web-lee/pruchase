$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};

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
  var cName = "julsale0729" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 600;
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
var countdown = function(countdown) {
  var statusNow = statusSet();
  getCycleCountdown(countTime);
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if (statusNow == 1) {
    setTimeout("countdown('" + countdown + "')", 1);
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

var index = 0;

function nextGo() {
  index++;
  if (index > 3) {
    index = 0;
  }
  feature(index);
}

//review
var className = ["one", "two", "three", "four"];
var user = 1;
var $reviewLi = $(".review ul li");
var nextFun = function() {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $reviewLi.length; i++) {
    $reviewLi.eq(i).attr("class", className[i]);
  }
  if (user < 3) {
    user++;
    review(user);
  } else {
    user = 0;
    review(user);
  }
};
var prevFun = function() {
  var addName = className.shift();
  className.push(addName);
  for (var i = 0; i < $reviewLi.length; i++) {
    $reviewLi.eq(i).attr("class", className[i]);
  }
  if (user > 0) {
    user--;
    review(user);
  } else {
    user = 3;
    review(user);
  }
};
var review = function(user) {
  $(".review .details div").eq(user).addClass("active").siblings().removeClass('active');
};

//feature
function feature(index) {
  $(".feature .screens li").eq(index).addClass("active").siblings().removeClass("active");
  $(".feature .zooms li").eq(index).addClass("active").siblings().removeClass("active");
  $(".feature .right-message dl").eq(index).addClass("active").siblings().removeClass("active");
}

function soldout() {
  $(".mask,.sold-word").remove();
  $(".bottom-buy li,.bottom-buy .imf,.bottom-buy .gift,.bottom-buy .giorno").addClass("active");
  $(".bottom-buy .off").removeClass("pf");
  $(".bottom-buy li.pc3").removeClass("active");
  $(".banner, .gifts,.bottom-buy,.bottom-buy li.pc3").addClass('sold');
  $(".banner .offer.large,.gifts dd").append('<div class="mask"><span class="sold-word">SCADUTO</span></div>');
  $(".bottom-buy li.pc3").append('<span class="sold-word">SCADUTO</span>');
  setTimeout('$(".mask,.sold-word").addClass("on")', 300);
  var _soldHref = $(".banner .offer").eq(0).find(".buybtn").attr("href");
  var _soldGa = $(".banner .offer").eq(0).find(".buybtn").attr("onclick");
  var _soldPrice = $(".banner .offer").eq(0).find(".price big").text();
  var _soldOrigial = $(".banner .offer").eq(0).find(".price del").text();
  $(".bottom-buy .buybtn").attr({
    "href": _soldHref,
    "onclick": _soldGa,
  });
  $(".bottom-buy .price").find("big").text(_soldPrice);
  $(".bottom-buy .price").find("del").text(_soldOrigial);
}
// soldout();

(function() {
  //countdown
  timeInit();
  countdown((".banner .countdown b"));
  //feature
  $(".feature .right-message dl").hover(function() {
    index = $(this).index();
    feature(index);
  });
  //comparison
  $(window).scrollWindow($(".awards"), $('.comparison ul.pro'), ("on"));
  //bottom-buy
  $(".bottom-buy ul li").click(function() {
    var index = $(this).index();
    var num = $(this).attr("data-num");
    if (!$(this).hasClass("sold") && !$(".bottom-buy").hasClass("sold")) {
      $(".bottom-buy .off").remove();
      var _href = $(".banner .offer").eq(num).find(".buybtn").attr("href");
      var _ga = $(".banner .offer").eq(num).find(".buybtn").attr("onclick");
      var _price = $(".banner .offer").eq(num).find(".price big").text();
      var _origial = $(".banner .offer").eq(num).find(".price del").text();
      $(this).addClass("active").siblings().removeClass("active");
      $(".bottom-buy .buybtn").attr({
        "href": _href,
        "onclick": _ga,
      });
      $(".bottom-buy .price").find("big").text(_price);
      $(".bottom-buy .price").find("del").text(_origial);
      if (index === 0) {
        $(".bottom-buy .imgbox").append('<span class="off pf">-80%</span>');
        setTimeout('$(".bottom-buy .off").addClass("active")', 200);
        $(".bottom-buy .imf,.bottom-buy .gift,.bottom-buy .giorno").removeClass("active");
      } else {
        $(".bottom-buy .imgbox").append('<span class="off">-80%</span>');
        setTimeout('$(".bottom-buy .off").addClass("active")', 200);
        $(".bottom-buy .imf,.bottom-buy .gift,.bottom-buy .giorno").addClass("active");
      }
    }
  });
})();