// progressbar
function focus() {
  $('.progressbar > span').append('<span class="reduce"></span>');
  var tReduce = new TimelineLite();
  tReduce.to('.reduce', 1.5, {
    y: -100,
    autoAlpha: 0,
    onComplete: function() {
      $('.reduce').remove();
    }
  });
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
    url: "promanonovopt.php",
    data: "action=getPacks&d=" + date.getDate() + "&r=" + Math.random(),
    success: function(res) {
      var packsInfo = JSON.parse(res);
      if (packs != packsInfo['packsNum']) {
        packs = packsInfo['packsNum'];
        showPacksNum(packs);
        flipNum(packs);
      }
      var viewNum = packsInfo['viewNum'];
      $('.packsNum').html(packs);
      if (packs < 89) {
        $('.viewNum').html(viewNum);
      }
    }
  });
  if (packs > 90) {
    setTimeout('getPacksNum()', 500);
  } else {
    setTimeout('getPacksNum()', 12000);
  }
}

function showPop() {
  $('.popout').addClass('on');
}

$(function() {
  packsInit();
  var ver = MApp(2.2).url.getParameters('ver');
  var patt = new RegExp('^12\.0\.(.*)');
  if (patt.test(ver)) {
    showPop();
  }
});

function showPacksNum(packs) {
  var one = Math.floor(packs / 100);
  var two = Math.floor(packs / 10) - one * 10;
  var three = Math.floor(packs) - one * 100 - two * 10;
  $("p.surplus b").eq(0).html(one).end().eq(1).html(two).end().eq(2).html(three);
}

function packsInit() {
  var date = new Date();
  var cName = "frdboct" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 98;
  } else {
    packs = arr[2];
  }
  showPacksNum(packs);
  var number = packs * 0.86;
  $(".progressbar > span").css("width", number);
  if (packs > 90) {
    setTimeout('getPacksNum()', 500);
  } else {
    setTimeout('getPacksNum()', 12000);
  }
}