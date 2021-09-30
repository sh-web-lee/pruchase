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

var totalNum;

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  $(".reduce-list").html("");
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(number).length;
  var str = number.toString();

  for (var j = 0; j < arr.length; j++) {
    list += '<em>' + arr[j] + '</em>';
  }
  $(".reduce-list").append(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#topnum .reduce-list").eq(a).animate({
      marginTop: -curNum * 36,
    }, "slow");
  }
  $(".floatlayer .reduceNum").append('<em class="packsNum"></em>');
  $(".floatlayer .reduceNum em").html(num);
  setTimeout('$(".floatlayer .reduceNum em.packsNum").removeClass("zoomout").addClass("zoomout");', 300);
  setTimeout('$(".floatlayer .reduceNum em.packsNum").remove();', 1200);
}
// flipNum(88, 3);

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner,.price,.floatlayer").removeClass("sold").addClass("sold");
  $(".price strong").html('$24.95');
  $(".price sup").remove();
  $(".banner .msgbox h2").html('Get PRO Version with 55% OFF');
  $(".banner .msgbox h3").remove();
  $(".banner .numbox span.one").remove();
  $(".banner .numbox span.two").html('places of $0 presale left');

  $(".floatlayer h2").html('Get 55% OFF to Preorder Now');
  $(".floatlayer .numbox").html('');
  $(".buybtn").attr({
    "href": "https://www.iobit.com/buy.php?product=imf8preorder2495&ref=en-imf8preorderpopupsoldout" + refStr + "&aff=" + aff + "&refs=purchase_imf&tw=" + tw,
    "onclick": "ga('send', 'event', 'imfsoldbuy', 'buy', 'imf8preorderpopup');",
  });
}

function getNumber() {
  num = cGet("imf8preorderpopup");
  if (num == null) {
    num = Math.floor(Math.random() * (88 - 49)) + 49;
  } else {
    num--;
    if (num < 0) num = 0;
  }
  totalNum = parseInt(500 - num);
  flipNum(num, 3);
  cSet('imf8preorderpopup', num);
  // t1 = (Math.random() > 0.5) ? 5.3 : 7.3;
  // t2 = (Math.random() > 0.5) ? 8.3 : 10.3;
  t1 = (Math.random() > 0.5) ? 1.8 : 3.8;
  t2 = (Math.random() > 0.5) ? 5.8 : 7.8;
  reTime = ((Math.random() > 0.5) ? t1 : t2) * 1000;
  console.log(reTime);
  if (num > 0) setTimeout('getNumber()', reTime);
  else {
    flipNum(0, 3);
    soldOut();
  }
}

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
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
// soldOut();

$(function() {

  $(".close").click(function() {
    $(".pop-bg,.popbox").removeClass("on");
  });
  getNumber();
  var sWidth = $(".review-box .reviews").width();
  var len = $(".review-box dl").length;
  var index = 0;
  var picTimer;

  $(".review-box .handle span").click(function() {
    index = $(".review-box .handle span").index(this);
    showPics(index);
  }).eq(0).trigger("click");

  $(".review-box .reviews .inner").css("width", sWidth * (len));

  $(".review-box").hover(function() {
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

  function showPics(index) {
    var nowLeft = -index * sWidth;
    $(".review-box .reviews .inner").stop(true, false).animate({
      "left": nowLeft
    }, 300);
    $(".review-box .handle span").eq(index).attr("class", "on two");
    if (index === 0) {
      $(".review-box .handle span").eq(1).attr("class", "three");
      $(".review-box .handle span").eq(2).attr("class", "one");
    } else if (index === 1) {
      $(".review-box .handle span").eq(2).attr("class", "three");
      $(".review-box .handle span").eq(0).attr("class", "one");
    } else {
      $(".review-box .handle span").eq(0).attr("class", "three");
      $(".review-box .handle span").eq(1).attr("class", "one");
    }
  }

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".brand h3").offset().top) {
      $('.floatlayer').addClass('on');
    } else {
      $('.floatlayer').removeClass('on');
    }

    if ($(window).scrollTop() > 260) {
      $('.brand dl').removeClass("on").addClass('on');
    }
  });

});