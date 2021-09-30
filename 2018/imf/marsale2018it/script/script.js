$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

//pc price
var num = 0,
  btnHref,
  discount,
  original,
  tags;

function price() {
  btnHref = $(".banner .box").eq(num).find(".buybtn").attr("href");
  discount = $(".banner .box").eq(num).find(".discount").text();
  original = $(".banner .box").eq(num).find(".original").text();
  tags = $(".banner .box").eq(num).find(".tags").text();
  $(".footbuy .imfbox").find("img").eq(num).addClass("active").siblings().removeClass("active");
  $(".footbuy .buybtn").attr("href", btnHref);
  $(".footbuy .price").find(".discount").text(discount);
  $(".footbuy .price").find(".original").text(original);
  $(".footbuy .price").find(".tags").text(tags);
}

function changePrice(changeNum) {
  num = changeNum;
  price();
}
//rightbox
function rightBox() {
  $(".banner .box.center").addClass("sold").removeClass("active");
  if ($('.banner .box.center .mask').length <= 0) {
    $(".banner .box.center").append('<div class="mask"></div>');
  }
  $(".banner .mask").addClass("show");
  $(".giveway").addClass("active");
  $(".giveway .buybtn").attr("href", "javascript:void(0)");
  $(".banner .box.right").addClass("active");
  $(".floatlayer .countdown").html('<li><strong>09 </strong> O : </li><li><strong>09 </strong> M : </li><li><strong>09 </strong> S : </li><li><strong>09 </strong> ms </li>');
  $(".footbuy").find("li").eq(2).addClass("active").siblings().removeClass("active");
  $(".footbuy").find("li").eq(1).addClass("sold").removeClass("active");
  $(".footbuy .imfbox").find("img").eq(2).addClass("active").siblings().removeClass("active");
  changePrice(2);
}

function rightSold() {
  rightBox();
  changePrice(0);
  $(".banner .box.right").addClass("sold").removeClass("active");
  $(".banner .box.right").append('<div class="mask"></div>');
  $(".banner .mask").addClass("show");
  $(".floatlayer").addClass("sold");
  $(".floatlayer .title").remove();
  $(".floatlayer .salesDes").html('pezzi restanti, approfittane subito！');
  $(".footbuy").find("li").eq(2).addClass("sold").removeClass("active");
  $(".footbuy").find("li").eq(0).addClass("active").siblings().removeClass("active");
  $(".footbuy .imfbox").find("img").eq(0).addClass("active").siblings().removeClass("active");
}

$(function() {
  $(window).scrollWindow($(".giveway .buybtn"), $('.review dl'), ("on"));
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  timeInit();
  packsInit();
  countdown(1);
  countdown(2);
  setTimeout('getSales()', 15000);

  $('.message li').mouseover(function(event) {
    var num = $(this).index();
    var index = $(".message li.active").attr("data-num");
    var img = $(".img-change .continer img");
    img.eq(num).addClass('active').siblings().removeClass('active');
    $('.imf-message .message li').eq(num).addClass("active").siblings().removeClass('active');
    $('.list-content li').eq(num).addClass("active").siblings().removeClass('active').removeClass("noaml");
    if (num !== index) {
      img.eq(num + 1).addClass('tran');
      if (num === 3) {
        img.eq(0).addClass('tran');
      }
    }
    setTimeout(function() {
      img.removeClass("tran");
    }, 500);
  });

  $(".close").on("click", function() {
    $(".floatlayer").hide();
  });

  $(".footbuy li").on("click", function() {
    if (!$(this).hasClass("sold")) {
      $(this).addClass("active").siblings().removeClass("active");
      var index = $(this).index();
      switch (index) {
        case 0:
          changePrice(0);
          break;
        case 1:
          changePrice(1);
          break;
        case 2:
          changePrice(2);
          break;
        default:
      }
    }
  });
});

function timeInit() {
  var date = new Date();
  var cName = "itimfmar" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    count1 = nowTime + 600;
    count2 = nowTime + 11400;
    cSet(cName, count1 + '.' + count2);
  } else {
    var packsArr = arr[2].split('.');
    count1 = parseInt(packsArr[0]);
    count2 = parseInt(packsArr[1]);
  }
}

function packsInit() {
  var packs = new Array();
  var date = new Date();
  var cName = "itimfmarp" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = [59, 89, 98];
  } else {
    //var packsArr = arr[2].split('%2A');
    packs = arr[2].split('%2A');
  }
  var statusNow = statusCheck();
  $('.packsNum').html(packs[statusNow - 1]);
}

function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < count1) {
    return 1;
  } else if (timeNow < count2) {
    return 2;
  } else {
    return 3;
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
    if ($(".banner .box.center").hasClass('active')) {
      packsInit();
      rightBox();
    }
  } else if (statusNow == 3) {
    if (!$(".banner .box.right").hasClass('sold')) {
      packsInit();
      rightSold();
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
  if (tType == 1) {
    getCycleCountdown(count1);
    $("#countdown1 strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
    $("#countdown3 strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  } else if (tType == 2) {
    getCycleCountdown(count2);
    $("#countdown2 strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    $("#countdown3 strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  }
  setTimeout("countdown(" + statusNow + ")", 1);
};

function getSales() {
  var date = new Date();
  var statusNow = statusCheck();
  var reTime = (statusNow == 1) ? 10000 : 15000;
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
      $('.packsNum').html(sales.packsNum);
      packsInit();
    }
  });
  setTimeout('getSales()', reTime);
}