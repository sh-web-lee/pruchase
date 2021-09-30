//PrefixInteger
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

//flipNum
function flipNum(num, length) {
  $(".listbox").remove();
  var _number = PrefixInteger(num, length);
  var _arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var _list = '';
  var _len = String(_number).length;
  var _str = _number.toString();
  var _box = $(".reduceNum");
  var _createobj;
  for (var i = 0; i < length; i++) {
    if (length < 2) {
      _createobj = $(new Array(3).join('<div class="listbox"><div class="list"></div></div>'));
    } else {
      _createobj = $('<div class="listbox"><div class="list"></div></div>');
    }
    _box.append(_createobj);
  }
  for (var j = 0; j < _arr.length; j++) {
    _list += '<b>' + _arr[j] + '</b>';
  }
  $(".list").append(_list);
  for (var a = 0; a <= _len; a++) {
    var curNum = _str.substring(a, a + 1);
    $("#reduce .list").eq(a).animate({
      marginTop: -curNum * 28,
    }, "slow");
    $("#fReduce .list").eq(a).animate({
      marginTop: -curNum * 28,
    }, "slow");
  }
  var width = num * 1.4;
  $(".banner .bar span").css("width", width);
}

//numberJump
function numberJump(obj, num, num2, time) {
  $(obj).prop('number', num).animateNumber({
    number: num2,
  }, time);
}

var pageIndex = 0;
var startTime = 0;
var endTime = 0;



// var wheelEvent = "onwheel" in document.createElement("div") ? "wheel" : document.onmousewheel !== undefined ? "mousewheel" : "DOMMouseScroll";

//actFeature
function actFeature() {
  $(".feature").each(function (index, ele) {
    ele.addEventListener('wheel', wheelFun);
    // ele.onwheel = function(event){
    // };
  });
}

//wheelFun
function wheelFun(event) {
  startTime = new Date().getTime();
  if((endTime - startTime) < -1000) {
    if (event.deltaY > 0) {
      event.preventDefault();
      pageIndex ++;
      if(pageIndex === 1) {
        if(c === 0) {
          setTimeout('actCleaner()', 900);
        }
      }
      if(pageIndex === 2) {
        setTimeout('actSafer()', 900);
      }
      if(pageIndex > 2) {
        pageIndex = 2;
        // $(".feature").removeClass("action");
        $("html, body").stop().animate({scrollTop: 1735}, 'slow');
        endFeature();
      }
      featureChange(pageIndex);
      endTime = new Date().getTime();
    }
    if (event.deltaY < 0) {
      event.preventDefault();
      pageIndex --;
      if(pageIndex < 0) {
        pageIndex = 0;
        // $(".feature").removeClass("action");
        $("html, body").stop().animate({scrollTop: 0}, 'slow');
        if(s !== 0) {
          endFeature();
        }
      }
      featureChange(pageIndex);
      endTime = new Date().getTime();
    }
  }else {
    event.preventDefault();
  }
}

//endFeature
function endFeature() {
  $(".feature").each(function (index, ele) {
    ele.removeEventListener('wheel', wheelFun);
  });
}

var easierInterval;
var cleanerInterval;
var saferInterval;

//actEasier
function actEasier() {
  var tl1 = new TimelineMax();
  tl1.staggerTo(".feature .interface-list .easier > ul li", .3, {
    opacity: 0
  }, .3).to(".feature .interface-list .easier > ul li", .1, {
    opacity: 1,
    delay: .5
  });

  easierInterval = setInterval(function () {
    tl1.staggerTo(".feature .interface-list .easier > ul li", .3, {
      opacity: 0
    }, .3).to(".feature .interface-list .easier > ul li", .1, {
      opacity: 1,
      delay: .5
    });
  }, 3000);
}

//actCleaner
function actCleaner() {
  c ++;
  var tl = new TimelineMax();
  var tl2 = new TimelineMax();
  tl.to(".feature .interface-list .cleaner .picture > span", 1, {
    bottom: 2
  });
  tl2.to(".feature .interface-list .cleaner > .xprogress > span", 1, {
    width: 360
  });
  cleanerInterval = setInterval(function () {
    tl.set(".feature .interface-list .cleaner .picture > span", {
      bottom: -170
    }).to(".feature .interface-list .cleaner .picture > span", 1, {
      bottom: 2,
      delay: .5
    });
    tl2.set(".feature .interface-list .cleaner > .xprogress > span", {
      width: 0,
    }).to(".feature .interface-list .cleaner > .xprogress > span", 1, {
      width: 360,
      delay: .5
    });
  }, 2500);
}

//actSafer
function actSafer() {
  s ++;
  var tl4 = new TimelineMax();
  var tl5 = new TimelineMax();
  tl4.staggerTo(".feature .interface-list .safer > ul li.act", .3, {
    opacity: 0,
  }, .3).to(".feature .interface-list .safer > ul li.three", .5, {
    top: 0
  }).to(".feature .interface-list .safer > ul li.three", .1, {
    top: 178,
    delay: 1
  }).to(".feature .interface-list .safer > ul li.act", .3, {
    opacity: 1
  });
  saferInterval = setInterval(function () {
    tl5.staggerTo(".feature .interface-list .safer > ul li.act", .3, {
      opacity: 0,
    }, .3).to(".feature .interface-list .safer > ul li.three", .5, {
      top: 0
    }).to(".feature .interface-list .safer > ul li.three", .1, {
      top: 178,
      delay: 1
    }).to(".feature .interface-list .safer > ul li.act", .3, {
      opacity: 1
    });
  }, 3500);
}

//feature
function featureChange(idx) {
  if (idx === 1 && c === 0) {
    setTimeout('actCleaner()', 900);
  }
  if (idx === 2 && s === 0) {
    setTimeout('actSafer()', 900);
  }
  $(".feature .interface-list .interface").eq(idx).fadeIn(500).siblings().hide();
  $(".feature .detail-list .detail").eq(idx).addClass("active").siblings().removeClass("active");
  $(".feature .feature-nav li").eq(idx).addClass("active").siblings().removeClass("active");
}

// soldOut()
function soldOut() {
  //var
  var aff = MApp(2.2).url.getParameters('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  //flipNum
  flipNum(0, 3);
  //banner
  $(".banner,.floatlayer").addClass("sold");
  //float
  $(".floatlayer .number").html('Migliore programma per disinstallare <strong>60% DI SCONTO</strong>');
  //price
  $(".price").find("strong").html("<del>39,99€</del> <span>15,99€</span>");
  setTimeout(function() {
    $(".price strong").addClass("remove");
  }, 500);
  //buybtn
  $(".buybtn").attr({
    "href": 'https://www.iobit.com/buy.php?product=it-iu11preorder1599&ref=it_iu11preorderrcsoldout1599' + refStr + '&aff=' + aff + '&refs=it_purchase_iu&tw=' + tw,
    "onclick": "ga('send', 'event', 'iubuy', 'buy', 'iu11preorderrcsoldout-it');"
  }).html("<span>Ottienilo ora - 60% SCONTO</span>");
}

//scroll
var e = 0;
var c = 0;
var s = 0;

$(window).scroll(function() {
  //banner
  $("[data-name^='animation']").each(function() {
    if ($(document).scrollTop() > $(this).offset().top - 200) {
      $(this).find("[data-name^='default']").addClass('on');
    }
  });

  //banner+floatlayer
  if ($(document).scrollTop() > 350) {
    $(".banner .price").removeClass("delay").addClass("nomail");
    $(".floatlayer").addClass('on');
    $(".price").addClass("flext");
  } else {
    $(".banner .price").removeClass("delay").addClass("nomail");
    $(".floatlayer").removeClass('on');
    $(".price").removeClass("flext");
  }

  //feature-detail
  if ($(document).scrollTop() > $(".feature").offset().top - 200) {
    if (s === 0) {
      if (e === 0) {
        e ++;
        setTimeout('actEasier()', 900);
      }
      // $(".feature").addClass("action");
      // $("html, body").animate({scrollTop: 835}, 'slow');
      featureChange(pageIndex);
      actFeature();
    } else {
      // $(".feature").removeClass("action");
    }
  }
});

function record() {
  if ($(".banner").hasClass("record")) {
    $(".banner").removeClass("record");
  } else {
    $(".banner").addClass("record");
  }
}

$(function() {
  packsInit();
  setTimeout('getViewNum()', 15000);
  $("html, body").animate({
    scrollTop: 0
  }, 'slow');
  //banner price
  $(".banner .price").addClass("delay");
  //banner
  setTimeout(function() {
    $(".banner").find("[data-name^='default']").addClass('on');
  }, 300);
  //feature
  $(".feature .feature-nav li").click(function() {
    pageIndex = $(this).index();
    featureChange(pageIndex);
  });
  //review
  $('.review ul li').hover(function() {
    $(this).addClass('active').siblings().removeClass('active');
    $('.review .review-box .box').eq($(this).index()).addClass('active').siblings().removeClass('active');
  });
});

function packsInit() {
  packs = cGet("itiujunerc_p");
  if (packs == null) {
    packs = 99;
    getSales(1);
  } else {
    flipNum(packs, 3);
    $(".buyNum").html(500 - packs);
    $(".giftNum").html(packs);
    if ((packs <= 0) && (!$(".banner,.floatlayer").hasClass('sold'))) {
      soldOut();
    } else {
      setTimeout('getSales(0)', 1000);
    }
  }
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "iu11preorder.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum !== packs) {
        flipNum(sales.packsNum, 3);
        packs = sales.packsNum;
        $(".buyNum").html(500 - packs);
        $(".giftNum").html(packs);
        if ((packs <= 0) && (!$(".banner,.feature,.floatlayer").hasClass('sold'))) {
          soldOut();
        }
      }
      if (packs > 0) {
        setTimeout('getSales(0)', getReTime());
      }
    }
  });
}

function getViewNum() {
  if (packs > 0) {
    $.ajax({
      type: "GET",
      url: "iu11preorder.php",
      data: "action=getViewNum",
      success: function(res) {
        $('.viewNum').html(res);
      }
    });
    setTimeout('getViewNum()', 12000);
  }
}

function getReTime() {
  var packsNumTotal = cGet('itiujunerc_t');
  if ((packsNumTotal >= 49) && (packsNumTotal <= 58)) {
    return (420 / packsNumTotal) * 1000;
  } else {
    return 15000;
  }
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
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}