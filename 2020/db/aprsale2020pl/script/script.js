$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};

var className = ["one", "two", "three", "four"];
var index = 1;
var nextFun = function() {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $(".review ul li").eq(i).attr("class", className[i]);
  }
  if (index < 3) {
    index++;
    review(index);
  } else {
    index = 0;
    review(index);
  }
};

var prevFun = function() {
  var addName = className.shift();
  className.push(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $(".review ul li").eq(i).attr("class", className[i]);
  }
  if (index > 0) {
    index--;
    review(index);
  } else {
    index = 3;
    review(index);
  }

};

var review = function(index) {
  $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
};

var firstNum = [2, 1, 0];
var lastNum = [1, 2, 0];
var _del, _strong, _href, _ga;

function firstChange(change) {
  $(".bottombuy .imgbox img").eq(firstNum[change]).addClass("on").siblings().removeClass("on");
  _del = $(".banner .offer").eq(firstNum[change]).find(".price del").text();
  _strong = $(".banner .offer").eq(firstNum[change]).find(".price strong").text();
  _href = $(".banner .offer").eq(firstNum[change]).find(".buybtn").attr("href");
  _ga = $(".banner .offer").eq(firstNum[change]).find(".buybtn").attr("onclick");
  return _del, _strong, _href, _ga;
}

function lastChange(change) {
  //console.log(lastNum[change]);
  $(".bottombuy .imgbox img").eq(lastNum[change]).addClass("on").siblings().removeClass("on");
  _del = $(".banner .offer").eq(lastNum[change]).find(".price del").text();
  _strong = $(".banner .offer").eq(lastNum[change]).find(".price strong").text();
  _href = $(".banner .offer").eq(lastNum[change]).find(".buybtn").attr("href");
  _ga = $(".banner .offer").eq(lastNum[change]).find(".buybtn").attr("onclick");
  return _del, _strong, _href, _ga;
}

function soldOut() {
  $(".banner,.bottombuy li.one,.giftbox").removeClass("sold").addClass("sold");

  $(".banner .countdown").html('Prezenty niedostępne. Skorzystaj jeszcze ze specjalnej zniżki!');
  $(".banner .offer").eq(1).removeClass("bigbox").addClass("right");
  $(".banner .offer").eq(2).removeClass("right").addClass("bigbox");
  setTimeout('$(".banner .offer.bigbox,.banner .offer.right").removeClass("move").addClass("move");', 300);
  setTimeout(function() {
    $(".banner .offer.right").append('<div class="maskbox"><span>ZAKONZAONO</span></div>');
    $(".banner .offer.right").find("img").attr("src", _src);
    setTimeout("$('.maskbox span').removeClass('on').addClass('on')", 300);
  }, 600);

  $(".giftbox .sdpfamc").remove();

  $(".bottombuy .imgbox img").eq(0).addClass("on").siblings().removeClass("on");
  $(".bottombuy li.one b").html('Driver Booster 1 rok / 3 PC + prezenty');
  $(".bottombuy li.two b").html('Driver Booster 1 rok / 3 PC');
  $(".bottombuy li.one").append('<div class="maskbox"><span>ZAKONZAONO</span></div>');

  lastChange(1);
  $(".bottombuy .price").find(".origain").text(_del);
  $(".bottombuy .price").find(".discount").text(_strong);
  $(".bottombuy .price").find(".buybtn").attr({
    "href": _href,
    "onclick": _ga
  });
}
// soldOut();

$(function() {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".feature").offset().top - 300) {
      $(".feature .list").addClass("active");
    }
  });

  $(".feature .panel .list").mouseover(function() {
    $(".feature .panel ul").css('marginLeft', -700 * ($(this).index()));
    $(this).addClass('on').siblings().removeClass("on");
  });

  $(".bottombuy li").mouseover(function() {
    var index = $(this).index();

    if (!$(this).hasClass("sold")) {
      $(this).addClass("on").siblings().removeClass("on");
      firstChange(index);
      if ($(".bottombuy li.one").hasClass("sold")) {
        lastChange(index);
      }
      $(".bottombuy .price").find(".origain").text(_del);
      $(".bottombuy .price").find(".discount").text(_strong);
      $(".bottombuy .price").find(".buybtn").attr({
        "href": _href,
        "onclick": _ga
      });
    }
  });

  timeInit();
  countdown("#giftcount strong", "#bottomcount strong", "#topcount strong");

});


function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = "pldbaprsale_t" + date.getDate();
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
  $(countdown).eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown1).eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown2).eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  if (statusNow == 1) {
    setTimeout("countdown('" + countdown + "','" + countdown1 + "','" + countdown2 + "')", 1);
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
    return 2;
  }
}