//target
$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

//floatlayer
function showFloat(subject, target) {
  var scrollHeight = $(subject).offset().top;
  if ($(window).scrollTop() > scrollHeight) {
    $(target).addClass('on');
  } else {
    $(target).removeClass('on');
  }
}

//countdown
var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 08:00:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};

$(function() {
  $(".comparebtn").target($(".comparison"));
  $(".banner .gift").target($(".donation"));
  countdown((".countdown strong"));
  $(".seven").addClass("on");

  $(window).on('scroll', function() {
    var isClass = $(".floatlayer").hasClass("scroll");
    if (!isClass) {
      showFloat(".payment:last", "#floatlayer");
    }
  });

  $(".floatlayer .close").on("click", function() {
    $(".floatlayer").removeClass("on").addClass("scroll");
  });

  //switchover
  var cArr = ["shot3", "shot2", "shot1"];
  var index = 0;
  //next
  $(".next").click(function() {
    nextimg();
  });
  //prev
  $(".prev").click(function() {
    previmg();
  });
  //previmg
  function previmg() {
    cArr.unshift(cArr[2]);
    cArr.pop();
    $(".introimg li").each(function(i, e) {
      $(e).removeClass().addClass(cArr[i]);
    });
    index--;
    if (index < 0) {
      index = 2;
    }
  }
  //nextimg
  function nextimg() {
    cArr.push(cArr[0]);
    cArr.shift();
    $(".introimg li").each(function(i, e) {
      $(e).removeClass().addClass(cArr[i]);
    });
    index++;
    if (index > 2) {
      index = 0;
    }
  }

  $(document).on("click", ".shot1", function() {
    previmg();
    return false;
  });

  $(document).on("click", ".shot3", function() {
    nextimg();
    return false;
  });
  packsInit();
  setTimeout('packsGet()', 20000);
  $(".users li").userMouseover($(".content dl"));
});

function packsInit() {
  var date = new Date();
  var cName = "itaugiu" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var packs = 0;
  if (arr == null) {
    packs = 138;
  } else {
    packs = arr[2];
  }
  $('.packNum').html(packs);
}

function packsGet() {
  var date = new Date();
  $.ajax({
    type: 'GET',
    url: 'index.php',
    data: 'action=getSales&d=' + date.getDate(),
    success: function(sPacks) {
      if (!isNaN(sPacks)) {
        $('.packNum').html(sPacks);
      }
    }
  });
  setTimeout('packsGet()', 20000);
}