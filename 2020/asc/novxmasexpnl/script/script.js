

var review = function (indexd) {
  $('.review .details div').eq(indexd).addClass('actived').siblings().removeClass('actived');
};
var className = ['one', 'two', 'three', 'four','five'];
var indexd = 1;
var nextFun = function () {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $('.review ul li').eq(i).attr('class', className[i]);
  }
  if (indexd < 4) {
    indexd++;
    review(indexd);
  } else {
    indexd = 0;
    review(indexd);
  }
};
var prevFun = function () {
  var addName = className.shift();
  className.push(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $('.review ul li').eq(i).attr('class', className[i]);
  }
  if (indexd > 0) {
    indexd--;
    review(indexd);
  } else {
    indexd = 4;
    review(indexd);
  }

};



$.fn.target = function(target, yoffset, event) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({
    scrollTop: Theigth
  }, 'slow');
};

function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}


var start = new TimelineMax();
var t1 = new TimelineMax();
var t2 = new TimelineMax();
var t3 = new TimelineMax();
var t4 = new TimelineMax();
var t5 = new TimelineMax();
var t6 = new TimelineMax();
var t7 = new TimelineMax();
var _end = new TimelineMax();
var _gift;

function scanStart() {
  start.set('.banner .sd,.banner .iu,.banner .pf', {
    opacity: 0,
    scale: 0.5,
    transformOrigin: "50% 100%",
  }).set('.banner .gift-line', {
    width: 0,
  }).set('.banner .gift-flower', {
    scale: 0,
  }).set('.banner .discount', {
    opacity: 0,
    y: -100,
  }).set('.feature-screen', {
    scale: 0.8,
    x: -140,
    y: -20,
    z: 0,
    transformOrigin: "50% 100% 100%",
  });
}

function giftAction() {
  t1.to('.banner .discount', 0.5, {
    opacity: 1,
    y: 0,
  }).to('.banner .sd,.banner .iu,.banner .pf', 0.8, {
    opacity: 1,
    scale: 1,
    ease: Bounce.easeOut,
  }).to('.banner .gift-bg', 0.1, {
    opacity: 0,
    onComplete: function() {
      t2.to('.banner .sd,.banner .iu,.banner .pf', 0, {
        delay: 0.5,
        width: 140,
      }).to('.banner .sd', 0.3, {
        left: -4,
      }).to('.banner .pf', 0.3, {
        left: 52,
      }).to('.banner .pf', 0.3, {
        left: 52,
        onComplete: function() {
          t3.to('.banner .gift-line.one', 0.6, {
            width: 217,
          }).to('.banner .gift-flower', 0.6, {
            scale: 1,
            ease: Bounce.easeOut,
          });
        },
      });
    },
  }, '-=0.5');
}

function soldWord() {
  t5.set('.sold-word', {
    opacity: 0,
    scale: 3,
  }).to('.sold-word', 0.6, {
    delay: 0.4,
    opacity: 1,
    scale: 1,
    ease: Bounce.easeOut,
  });
}
// soldWord();

var len = $(".feature-tab dl").length;
var index = 0;
var picTimer;
var flag = true;

function featureAction() {
  t7.to('.feature-screen', 0.5, {
    scale: 1,
    x: 0,
    y: 0,
    z: 0,
    onComplete: function() {
      t7.set('.feature-screen', {
        clearProps: 'all'
      });
      $(".feature-wrap").hover(function() {
        clearInterval(picTimer);
      }, function() {
        picTimer = setInterval(function() {
          showPics(index);
          index++;
          if (index == len) {
            index = 0;
          }
        }, 4000);
      }).trigger("mouseleave");
    },
  });
}

var _soldCount = 0;

function soldOut() {
  t1.clear();
  t1.eventCallback("onComplete", null);
  clearInterval(_gift);
  t1.set('.banner .discount,.banner .iu,.banner .sd,.banner .pf', {
    clearProps: 'all'
  });
  $(".banner,.gifts,.footbuy").removeClass("sold").addClass("sold");
  $(".banner .offer.big").append('<div class="mask"><span class="sold-word">TERMINATO</span></div>');
  $(".gifts .price").append('<span class="sold-word">TERMINATO</span>');
  if (_soldCount > 0) {
    return;
  } else {
    soldWord();
    _soldCount = 1;
  }
  $(".gifts").find(".buybtn").attr("href", "javascript: void(0)");
  $(".footbuy h2").html("Maak uw pc als nieuw met Krachtige en Volledige Optimalisatie")
  $(".footbuy .tag").html('<span>1 jaar / </span> 3 pc’s');
  $(".footbuy .price").html('<strong><small>€</small>19,99</strong> <del>€49,99</del>');
  $(".footbuy .price").next().hide();
  var _href = $(".banner .offer").eq(1).find(".buybtn").attr("href");
  var _ga = $(".banner .offer").eq(1).find(".buybtn").attr("onclick");
  $(".banner .big .buybtn,.floatlayer .buybtn02").attr({
    "href": _href,
    "onclick": _ga,
  });
  // 浮动栏
  $('#floatlayer').addClass('out');
  $('#floatlayer .center').html('<h2>Helaas, de kerstaanbieding is uitverkocht <br> Pak toch nog 60% korting!</h2>');
  $('#floatlayer .price p').html('<p><strong>€19,99</strong>&nbsp;&nbsp;<del>€49,99</del></p>');
  
}
// soldOut();

function showPics(index) {
  var _index = index + 1;
  $(".feature-tab dl").eq(index).addClass("on").siblings().removeClass("on");
  $(".feature-list").eq(index).addClass("on").siblings().removeClass("on");
}

$(function() {

  var _count = 0;

  scanStart();
  _gift = setTimeout(giftAction, 1000);

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".serviceone").offset().top + 100) {
      if (_count > 0) {
        return;
      }
      featureAction();
      _count = 1;

    }
  });
  

  $(".feature-tab dl").mouseover(function() {
    index = $(".feature-tab dl").index(this);
    showPics(index);
  }).eq(0).trigger("mouseover");
});



$(window).on('scroll', function() {
  
  if($(window).scrollTop() > $(".comparison .float-beacon").offset().top) {
    
    $('.intro dl').addClass('on')

  }else{
    $('.intro dl').removeClass('on')
  }
  
  if($(window).scrollTop() > $(".feature").offset().top) {
    
    $('#floatlayer').addClass('on')

  }else{
    $('#floatlayer').removeClass('on')
  }

});


// 底部倒计时
function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  // exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 30);
  document.cookie = name + '=' + escape(value) + ';expires=' + exp.toGMTString();
}

function timeInit() {
  var date = new Date();
  var cName = 'nlascxmas_t' + date.getDate();
  var arr = document.cookie.match(new RegExp('(^| )' + cName + '=([^;]*)(;|$)'));
  var nowTime = Math.floor(date.getTime() / 1000);
  if (arr == null) {
    countTime = nowTime + 900;
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

var countdown = function (countdown, countdown1, countdown2) {
  var statusNow = statusSet();
  getCycleCountdown(countTime);
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  // $(countdown1).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
   $(countdown1).eq(1).html(i[1]).end().eq(2).html(s[0]).end().eq(3).html(s[1]).end().eq(4).html(mi[0]).end().eq(5).html(mi[1]);
  if (statusNow == 1) {
    setTimeout('countdown(\'' + countdown + '\',\'' + countdown1 + '\',\'' + countdown2 + '\')', 1);
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
    if (!$('.banner .three-pcs').hasClass('"sold-out"')) {
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

$(function () {
  timeInit();
  countdown('.countdown b', '.numbox02 .listbox');

});