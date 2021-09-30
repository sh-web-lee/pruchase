$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};
$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};

function showPop() {
  $('.popout').addClass('on');
}

$(function() {
  $("a.intro").target($(".comparison"));
  $(".users li").userMouseover($(".content dl"));
});

// progressbar
function focus() {
  $('.progressbar > span').append('<span class="reduce"></span>');
  setTimeout(function() {
    $('.progressbar .reduce').addClass("zoomout")
  }, 100);
  if (packs < 90) {
    $(".db-reduce").css({
      "opacity": 1,
      "bottom": 0,
      "zIndex": 8
    }).animate({
      "opacity": 0,
      "bottom": 40,
      "zIndex": -9
    }, 1500);
  } else {
    $(".db-reduce").css({
      "opacity": 1,
      "bottom": 0,
      "zIndex": 8
    }).animate({
      "opacity": 0,
      "bottom": 40,
      "zIndex": -9
    }, 400);
  }
}

function flipNum(num) {
  var number = num * 0.86;
  $(".progressbar > span").css("width", number);
  setTimeout(function() {
    focus();
  }, 500);
}

function getPacksNum() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "maypromo.php",
    data: "action=getPacks&d=" + date.getDate() + "&r=" + Math.random(),
    success: function(res) {
      var packsInfo = JSON.parse(res);
      if (packs != packsInfo['packsNum']) {
        packs = packsInfo['packsNum'];
        showPacksNum(packs);
        flipNum(packs);
      }
      var viewNum = packsInfo['viewNum'];
      if (packs < 89) {
        $('.viewNum').html(viewNum);
      }
    }
  });
  setTimeout('getPacksNum()', 10000);
}

$(function() {
  packsInit();
  $(".benfits .detail-list dl").mouseover(function () {
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .showcase .screenshot").css('marginLeft', -377 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  });
  var ver = MApp(2.2).url.getParameters('ver');
  var patt = new RegExp('^12\.0\.(.*)');
  if (patt.test(ver)) {
    showPop();
  }
});

function showPacksNum(packs) {
  var saleNum=100-parseInt(packs);
  $('.packsNum').html(packs);
  $('.salesNum').html(saleNum);
  var one=Math.floor(saleNum / 10);
  var two=saleNum%10;

  var three=Math.floor(packs / 10);
  var four=packs%10;
  $("p.surplus b").eq(0).html(one).end().eq(1).html(two).end().eq(2).html(three).end().eq(3).html(four);
}

function packsInit() {
  var date = new Date();
  var cName = "deascuoct" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 70;
  } else {
    packs = arr[2];
  }
  showPacksNum(packs);
  var number = packs * 0.86;
  $(".progressbar > span").css("width", number);
  setTimeout('getPacksNum()', 10000);
}