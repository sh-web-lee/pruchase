$.fn.userMouseover = function(UserMessage,arrow) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(arrow).stop().animate({marginLeft: 220*num}, 300);
  });
};

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',');

function animateNumber(select, number) {
  $(select).prop('number',  10).animateNumber({
    number: number,
    numberStep:  comma_separator_number_step
  }, 2000);
}

function numberJump() {
  $(".change-num").prop('number', 50).animateNumber({
    number: 100,
  }, 1000);
}

// flipNum(48, 4);
function flipNum(num, length) {
  $(".listbox").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var _list = '';
  var len = String(number).length;
  var str = number.toString();
  var _box = $(".flipNum");
  var createobj;
  for (var i = 0; i < length; i++) {
    if (length < 2) {
      createobj = $(new Array(3).join('<div class="listbox"><div class="list"></div></div>'));
    } else {
      createobj = $('<div class="listbox"><div class="list"></div></div>');
    }
    _box.append(createobj);
  }
  for (var j = 0; j < arr.length; j++) {
    _list += '<b>' + arr[j] + '</b>';
  }
  $(".list").append(_list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#flip .list").eq(a).animate({
      marginTop: -curNum * 30,
    }, "slow");
    $("#fliptwo .list").eq(a).animate({
      marginTop: -curNum * 46,
    }, "slow");
  }
}

function change05() {
  var c6 = new TimelineMax();
  c6.set($('.banner .chartbox'), {
    opacity: 0,
    y: -100,
    onComplete: function() {
      TweenLite.to($('.banner .chartbox'), 1, {
        opacity: 1,
        y: 0,
        onComplete: function() {
          TweenLite.to($('.banner .chartbox.center'), 0.6, {
            y: -50,
          }, "-=0.5");
          TweenLite.to($('.banner .chartbox.center'), 0.8, {
            delay: 0.4,
            y: 0,
            ease: Bounce.easeOut,
          }, "-=0.5");
        },
      });
    },
  });
}

// soldOut();
function soldOut() {
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".price").addClass("soldout");
  $(".change-price").html("<big>19</big>,99€");
  $(".price strong").html("<b>19</b>,99€");
  $(".discount").addClass("soldout");
  $('.banner .price strong').after("<del>74,85€</del>");
  $("p.change").html(soldStr);
  $(".banner .buybtn small").text("- 19,99€");
  $(".banner .numbox").css({'visibility': 'hidden','height': '20'});
  $(".floatlayer .change").css({'marginLeft': '0'});
  $(".buybtn").attr({
    "href": 'https://www.iobit.com/buy.php?product=it-db3pc1999&ref=it_db3pc1999bf2010'+refStr+'&refs=it_purchase_db&tw=' + tw,
    "onclick": "ga('send', 'event', 'dbbuy', 'buy', 'db3pc1999bf2010-it') ;"
  });
}

$(window).on('scroll', function() {

  if ($(window).scrollTop() > $(".intro").offset().top - 100) {
    $(".intro .besom").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".enjoy").offset().top - 140) {
    $(".enjoy .forbid").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".feature h2").offset().top - 280) {
    $(".feature dl").removeClass("on").addClass("on");
  }

  if ($(window).scrollTop() > $(".review").offset().top - 100) {
    animateNumber('.present h4.first', 30000000);
    animateNumber('.present h4.two', 2666667);
  }

  if ($(window).scrollTop() < $(".banner .buybtn").offset().top) {
    $('.floatlayer').removeClass('on');
  } else {
    $('.floatlayer').addClass('on');
  }
});

function packsInit() {
  var cName = "itascnovbrb_p";
  packs = cGet(cName);
  if (packs === 0) {
    soldOut();
  } else {
    if(packs==null){
      getSales(2);
    }else {
      getSales(1);
    }
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

function getSales(isInit) {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "bdb.php",
    data: "action=getPacks&isInit=" + isInit + "&d=" + date.getDate()+"&packsNum="+packsNum,
    success: function(res) {
      var sales = JSON.parse(res);
      if ((sales.packsNum != packs) || (isInit)) {
        packs = sales.packsNum;
        if (isInit) {
          flipNum(sales.packsNum, 4, 1000);
        } else {
          flipNum(sales.packsNum, 4, 100);
        }
      }
      if (packs > 0) {
        setTimeout('getSales(0)', getRetime(isInit));
      } else {
        flipNum(0,4);
        if (!$(".discount,.buybtn,.price,.feature,.numbox").hasClass("soldout")) {
          soldOut();
        }
      }
    }
  });
}

function getRetime(isInit) {
  if(isInit==2){
    return 1000;
  }else {
    var packsNumTotal = cGet('itascnovbrb_t');
    if (packsNumTotal > 1) {
      return (900 / packsNumTotal) * 1000;
    } else {
      return 20000;
    }
  }
}

function getViewNum() {
  $.ajax({
    type: "GET",
    url: "bdb.php",
    data: "action=getViewNum",
    success: function(res) {
      $('.viewNum').html(res);
    }
  });
  setTimeout('getViewNum()', 15000);
}

$(function() {
  setTimeout('getViewNum()', 15000);
  packsInit();
  setTimeout(change05(), 500);
  //feature
  //fillFeature(7);
  //review
  $(".users li").userMouseover($(".content dl"), $(".review span.arrow"));
});