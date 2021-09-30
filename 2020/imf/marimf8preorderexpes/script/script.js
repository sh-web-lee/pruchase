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

function numberJump(num, starnumber, time) {
  $(".reduceNum em.packsNum").remove();
  totalNum = parseInt(500 - num);
  $('.totalNum').prop('number', starnumber).animateNumber({
    number: totalNum,
  }, time);
  var number = totalNum * 0.71;
  $(".progressbar span").css("width", number);
  $(".banner .barbox .numbox").css("left", number);
  $(".reduceNum").append('<em class="packsNum"></em>');
  $(".reduceNum em").html(num);
  setTimeout('$(".reduceNum em.packsNum").removeClass("zoomout").addClass("zoomout");', 300);
  setTimeout('$(".reduceNum em.packsNum").remove();', 1200);
}
// numberJump(0, 500, 1500);

function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  $(".banner,.price,.floatlayer").removeClass("sold").addClass("sold");
  $(".banner .changebar").text("");
  $(".banner .msgbox h2").html('Consigue de nuevo tu Versión PRO con 70% Dto.');
  setTimeout(function() {
    $(".reducebar").html('El precio no está disponible');
    $(".banner .barbox .numbox").remove();
  }, 600);
  $(".price strong").html('19,99€');
  $(".price sup").remove();
  $(".floatlayer h2").html('Ahora con un 70% de Descuento');
  $(".floatlayer .numbox").html('Desbloquea la Versión Pro ahora y consigue protección total');
  $(".buybtn").attr({
    "href": "https://www.iobit.com/buy.php?product=es-imf8preorder3pc1999&ref=es_imf8preordersoldout1999" + refStr + "&aff=" + aff + "&refs=es_purchase_imf&tw=" + tw,
    "onclick": "ga('send', 'event', 'imfsoldbuy', 'buy', 'imf8predorderexp-es');",
  });
}
// soldOut();

function getNumber() {
  num = cGet("marimf8preorderexpes");
  if (num == null) {
    num = Math.floor(Math.random() * (88 - 49)) + 49;
  } else {
    num--;
    if (num < 0) num = 0;
  }
  // $('.reduceNum').html(num);
  // $('.totalNum').html(500 - num);
  totalNum = parseInt(500 - num);
  numberJump(num, totalNum, 1500);
  cSet('marimf8preorderexpes', num);
  t1 = (Math.random() > 0.5) ? 1.3 : 3.3;
  t2 = (Math.random() > 0.5) ? 5.3 : 7.3;
  reTime = ((Math.random() > 0.5) ? t1 : t2) * 1000;
  if (num > 0) setTimeout('getNumber()', reTime);
  else soldOut();
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
    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
      $('.floatlayer').addClass('on');
    } else {
      $('.floatlayer').removeClass('on');
    }

    if ($(window).scrollTop() > $(".fbottom h2").offset().top - 300) {
      $(".warning").removeClass("on").addClass("on");
    }

    if ($(window).scrollTop() > $(".feature .arrow-down").offset().top + 100) {
      $(".feature .shield,.feature .shield-shadow").removeClass("on").addClass("on");
    }
  });

});