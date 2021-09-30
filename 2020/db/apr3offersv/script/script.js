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

function soldOut() {
  $(".banner,.giveaway,.footbuy li.one").removeClass("sold").addClass("sold");
  $(".banner .offer.center").removeClass("on");
  $(".banner .offer.right").addClass("on");
  $(".banner .offer.right .mask,.giveaway .give-list.left .mask,.footbuy li.one .mask-words").remove();
  $(".banner .offer.center,.giveaway .give-list.left").append('<div class="mask"><span class="mask-words"></span></div>');
  $(".footbuy li.one").append('<span class="mask-words"></span>');
  setTimeout('$(".mask-words").addClass("on");', 400);
  var _href = $(".banner .offer.right .buybtn").attr("href");
  var _ga = $(".banner .offer.right .buybtn").attr("onclick");
  $(".giveaway .buybtn,.footbuy .buybtn").attr({
    "href": _href,
    "onclick": _ga,
  });

  $(".footbuy .imgbox").removeClass("on");
  $(".footbuy li").removeClass("stop");
  $(".footbuy .imgbox.db,.footbuy .db-small,.footbuy li.two").addClass("on");
  $(".footbuy .price del").text($(".banner .offer.right .price del").text());

  $("#timecount").html('Tim:<b>0</b>, Min:<b>00</b>, Sek:<b>00</b>, Ms:<b>00</b>*');

  packsInit();
}
// soldOut();

function rightsoldOut() {
  $(".giveaway,.banner").removeClass("soldtwo").addClass("soldtwo");
  $(".footbuy li.two").removeClass("sold").removeClass("on").addClass("sold");
  $(".banner .offer.right .mask,.giveaway .give-list.center .mask,.giveaway .give-list.right .mask,.footbuy li.two .mask-words,.giveaway .wrapper > .mask").remove();
  $(".banner .offer.right,.giveaway .give-list.center,.giveaway .give-list.right,.giveaway .wrapper").append('<div class="mask"><span class="mask-words"></span></div>');
  $(".footbuy li.two").append('<span class="mask-words"></span>');
  setTimeout('$(".mask-words").addClass("on");', 400);

  $(".footbuy .imgbox,.footbuy .db-small").removeClass("on");
  $(".footbuy .imgbox.db,.footbuy li.three").addClass("on");
  $(".footbuy .price del").text($(".banner .offer.left .price del").text());

  var _href = $(".banner .offer.left .buybtn").attr("href");
  var _ga = $(".banner .offer.right .buybtn").attr("onclick");
  $(".footbuy .buybtn").attr({
    "href": _href,
    "onclick": _ga,
  });
}
// rightsoldOut();

function packNum(num) {
  $(".giftNum").html(num);
  $(".giftNum").append('<em class="reduce"></em>');
  $(".giftNum .reduce").html(num);
  setTimeout('$(".giftNum .reduce").removeClass("zoomout").addClass("zoomout");', 300);
  setTimeout('$(".giftNum .reduce").remove();', 1200);
}

$(function() {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".feature h2").offset().top) {
      $('.feature-box dl').removeClass("on").addClass('on');
    }
  });

  $(".footbuy li").mouseover(function() {
    var index = $(this).index();
    var _num = $(this).attr("data-num");
    var _discount = $(".banner .offer").eq(_num).find("del").text();
    var _href = $(".banner .offer").eq(_num).find(".buybtn").attr("href");
    var _ga = $(".banner .offer").eq(_num).find(".buybtn").attr("onclick");

    if (!$(this).hasClass("sold") && !$(this).hasClass("stop")) {
      $(this).addClass("on").siblings().removeClass("on");
      $(".footbuy .imgbox").removeClass("on");
      $(".footbuy .db-small").removeClass("on");
      $(".footbuy .imgbox.db").removeClass("two");
      if (index === 0) {
        $(".footbuy .imgbox").eq(0).addClass("on");
      } else if (index === 1) {
        $(".footbuy .imgbox.db").addClass("two");
        $(".footbuy .imgbox").eq(1).addClass("on");
        $(".footbuy .db-small").removeClass("on").addClass("on");
      } else {
        $(".footbuy .imgbox").eq(1).addClass("on");
      }
      $(".footbuy .price").find("del").text(_discount);
      $(".footbuy .price").find(".buybtn").attr({
        "href": _href,
        "onclick": _ga
      });
    }
  });
});

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
  var cName = "svdbapr3off_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 11;
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
  $(countdown).eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
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

function packsInit() {
  packs = 40;
  getSales(1);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "apr3offersv.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        // $(".giftNum").html(packs);
        packNum(packs);
      }
      if (packs > 5) {
        setTimeout('getSales()', getReTime());
      } else {
        packs = 5;
        // rightsoldOut();
      }
    }
  });
}

function getReTime() {
  var reTime = 20;
  var packsNumTotal = cGet('svdbapr3off_t');
  if (packsNumTotal > 1) {
    if (packs > 30) {
      reTime = (Math.random() > 0.5) ? 3 : 7;
      // console.log(reTime);
    } else {
      reTime = (Math.random() > 0.5) ? 7 : 13;
    }
  }
  return reTime * 1000;
}

$(function() {
  timeInit();
  countdown("#timecount b");
});