$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

function reduceNum() {
  $(".reduce").remove();
  $(".banner .giftnum span").text(packs);
  $(".centbuy .pickNum").text(packs);
  $(".banner .reduceNum").append('<span class="reduce"></span>');
  setTimeout('$(".reduce").addClass("on");', 300);
  setTimeout('$(".banner .giftnum .reduce").remove();', 1500);
}

function soldout() {
  $(".maskbg,.ausbox").remove();
  $(".offer.center,.gifts").append('<div class="maskbg"></div><div class="ausbox">ESAURITO</div>');
  $(".footbuy li.gift").append('<div class="ausbox">ESAURITO</div>');
  var _href3 = $(".banner .offer.right").find(".buybtn").attr("href");
  var _ga3 = $(".banner .offer.right").find(".buybtn").attr("onclick");
  var _origian3 = $(".banner .offer.right .price").find("del").text();
  var _discount3 = $(".banner .offer.right .price").find("strong").text();
  $(".footbuy li").removeClass("on");
  $(".footbuy .imglist").removeClass("on");
  $(".footbuy li.gift").addClass("sold");
  $(".footbuy li.five").addClass("on");
  $(".footbuy .imglist.five").addClass("on");
  $(".footbuy li.gift").addClass("default");
  $(".footbuy .buybtn").attr({
    "href": _href3,
    "onclick": _ga3
  });
  $(".footbuy .price").find("del").text(_origian3);
  $(".footbuy .price").find("strong").text(_discount3);
  setTimeout(function() {
    $(".ausbox").addClass("zoomout");
  }, 300);
}
// soldout();

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

$(function() {

  $(".textlink").target($("#compare"), 0);

  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $("#floatlayer .close").on('click', function(event) {
    $("#floatlayer").hide();
  });

  viewCheck();
  packsInit();

  countdown((".countdown strong"));
  countdown((".countdown2 strong"));

  $(".footbuy li").on("click", function() {
    if (!$(this).hasClass("sold")) {
      var index = $(this).index();
      var _num = $(this).attr("data-num");
      $(this).addClass('on').siblings().removeClass("on");
      $(".footbuy .imglist").eq(index).addClass("on").siblings().removeClass("on");
      var _origian = $(".banner .offer").eq(_num).find(".price del").text();
      var _discount = $(".banner .offer").eq(_num).find(".price strong").text();
      var btnHref = $(".banner .offer").eq(_num).find(".buybtn").attr("href");
      var btnGa = $(".banner .offer").eq(_num).find(".buybtn").attr("onclick");
      $(".footbuy .price").find("del").text(_origian);
      $(".footbuy .price").find("strong").text(_discount);
      $(".footbuy .price").find(".buybtn").attr({
        "href": btnHref,
        "onclick": btnGa,
      });
    }
  });

  $(".benfits .detail-list dl").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index() + 1));
    $(".benfits .zoom li").removeClass('active').eq($(this).index() + 1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .list-icon li").removeClass('active').eq($(this).index() + 1).addClass('active');
  });

  $(".benfits .list-icon li").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if (num == 0) {
      $(".benfits .detail-list dl").removeClass("active");
    } else {
      $(".benfits .detail-list dl").eq($(this).index() - 1).addClass("active").siblings().removeClass("active");
    }
    $(".benfits .list-icon li").removeClass('active');
    $(this).addClass('active');
  });

});
var packs;
function packsInit() {
  /*var date = new Date();
  var cName = "itascnovx" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    if (pageView) {
      packs = 54;
      reTime = 10;
    } else {
      packs = 30;
      timeCheck();
    }
  } else {
    packs = arr[2];
    timeCheck();
  }
  timeCheck();
  //getSalesNum(packs);
  reduceNum();
  var packsCount = 300 - packs;
  //flipNum(packsCount, 3);
  $(".banner .people .packsCount").text(packsCount);*/
  getPacksNum();
  // if (packs == 0) {
  //   soldout();
  // } else {
  //   //numInit(packs,2);
  //   setTimeout('getPacksNum()', reTime * 1000);
  // }
}

function viewCheck() {
  var date = new Date();
  var dateToday = date.getDate();
  var cName = "itascnovxv";
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  pageView = (arr != null);
  if ((arr == null) || ((arr != null) && (arr[2] == dateToday))) {
    pageView = false;
    cSet(cName, dateToday);
  } else {
    pageView = true;
  }
}

function cSet(name, value) {
  var Days = 1;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function getSalesNum(packsNow) {
  var buyNum = 300 - packsNow;
  $('.buynum').html(commafy(buyNum));
}

function timeCheck() {
  reTime = (Math.random() > 0.5) ? 7 : 15;
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "jansale2020.php",
    data: "action=getPacks&d=" + date.getDate() + '&pageView=' + (pageView ? 1 : 0),
    success: function(res) {
      var sales = JSON.parse(res);
      if (($(document).scrollTop() > $(".banner .buybtn").offset().top)) {
        $("#floatlayer").removeClass('on');
        setTimeout("$('#floatlayer').addClass('on');", 800);
      }
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);

      /*if (sales.packsNum != packs) {
        packs = sales.packsNum;
        if (packs == 0) {
          soldout();
        }
        reduceNum();
        var packsCount = 300 - packs;
        $(".banner .people .packsCount").text(packsCount);
        if (!pageView) {
          timeCheck();
        }
      }*/
    }
  });
}

function commafy(num) {
  num = num + "";
  num = num.replace(/[ ]/g, "");
  if (num == "") {
    return;
  }
  if (isNaN(num)) {
    return;
  }
  var index = num.indexOf(".");
  if (index == -1) {
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(num)) {
      num = num.replace(reg, "$1,$2");
    }
  } else {
    var intPart = num.substring(0, index);
    var pointPart = num.substring(index + 1, num.length);
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(intPart)) {
      intPart = intPart.replace(reg, "$1.$2");
    }
    num = intPart + "." + pointPart;
  }
  return num;
}

/*var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  setTimeout("countdown('"+ countdown +"')", 1);
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

var countdown = function (countdown){
  getCycleCountdown();
  //$(countdown).eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if(d!=0||h!=0||i!=0||s!=0) setTimeout("countdown('"+ countdown +"')", 1);
  else  soldout();
};
function getCycleCountdown () {
  var date=new Date();
  if (MApp(2.2).cookie.get('jansale2020it')) {
    dt = MApp(2.2).cookie.get('jansale2020it');

  }else{
    dt=date.setMinutes(date.getMinutes()+10);
    MApp(2.2).cookie.set('jansale2020it', dt);
  }

  var datetime = getCountdown(dt);
  if(datetime==0){
    d=h=i=s=mi=0;
    soldout();
  }else{
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
  }
}

function getCountdown(t) {
  var e = new Date
    , i = Math.floor(e.getTime()/1000)
    , r = t/1000
    , n = r - i;
  if (n > 0) {
    var s = Math.floor(n / 86400)
      , a = Math.floor(n / 3600 % 24)
      , o = Math.floor(n / 60 % 60)
      , u = Math.floor(n % 60)
      , h = 999 - e.getMilliseconds();
    return 10 > h ? h = "00" + h : 100 > h && (h = "0" + h),
      Array(s, a, o, u, h)
  }
  return 0
}

function getPacksNum(){
  var e = new Date;
  var n1 = MApp(2.2).cookie.get('jansale2020it')/1000;
  var n2 = Math.floor(e.getTime()/1000);
  if(n1-n2>0){
    packs = Math.floor((n1-n2)/11);
  }else packs=0;
  //$('.packsNum').html(packs);
  reduceNum();
  getSales();
  timeCheck();
  setTimeout('getPacksNum()', reTime*1000);
}