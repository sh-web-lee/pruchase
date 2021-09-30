$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

$(function() {
  //goto comparison-table
  $("a.intro").target($(".comparison"));
  $('#dg-container').gallery();
  //benifts
  $(".benfits .detail-list dl").hover(function() {
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  });
});

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
  if (packs < 56) {
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
    url: "index.php",
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
      if (packs < 56) {
        $('.viewNum').html(viewNum);
      }
    }
  });
  if (packs > 56) {
    setTimeout('getPacksNum()', 5000);
  } else {
    setTimeout('getPacksNum()', 15000);
  }
}

$(function() {
  packsInit();
});

function showPacksNum(packs) {
  var one = Math.floor(packs / 10);
  var two = packs - one * 10;
  $("p.surplus b").eq(0).html(one).end().eq(1).html(two);
  $(".bottomcart h3 span").html(String(one)+two);
}

function packsInit() {
  var date = new Date();
  var cName = "nldboct" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 61;
  } else {
    packs = arr[2];
  }
  showPacksNum(packs);
  var number = packs * 0.86;
  $(".progressbar > span").css("width", number);
  if (packs > 56) {
    setTimeout('getPacksNum()', 5000);
  } else {
    setTimeout('getPacksNum()', 15000);
  }
}