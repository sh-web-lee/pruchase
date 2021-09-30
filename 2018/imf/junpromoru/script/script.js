$.fn.target = function (target, yoffset) {
  $(this).click(function () {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};
var countdown = function (countdown,countdown1){
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  $(countdown1).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('"+ countdown +"','"+ countdown1 +"')", 1);
};
function getCycleCountdown () {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}
$.fn.userMouseover = function (UserMessage) {
   $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
   });
};

$(function () {
  $(".intro .klicken").target($("#compare"), 0);
  $(".backtotop").target($(".banner"), 0);
  $(".users li").userMouseover($(".content dl"));
  countdown((".banner h4 strong"),(".bottom-buy h3 strong"));
  //switchover
  var cArr = ["shot3", "shot2", "shot1"];
  var index = 0;
  //next
  $(".next").click(function () {
    nextimg();

  });
  //prev
  $(".prev").click(function () {
    previmg();
  });
  //previmg
  function previmg() {
    cArr.unshift(cArr[2]);
    cArr.pop();
    $(".introimg li").each(function (i, e) {
      $(e).removeClass().addClass(cArr[i]);
    });
    index--;
    if (index < 0) {
      index = 2;
    }
    mask();
  }

  //nextimg
  function nextimg() {
    cArr.push(cArr[0]);
    cArr.shift();
    $(".introimg li").each(function (i, e) {
      $(e).removeClass().addClass(cArr[i]);
    });
    index++;
    if (index > 2) {
      index = 0;
    }
    mask();
  }

  //mask
  function mask() {
    $(".intro .mask").addClass("on");
    setTimeout('$(".intro .mask").removeClass("on");', 200);
  }

  $(document).on("click", ".left-mask", function () {
    previmg();
    return false;
  });

  $(document).on("click", ".right-mask", function () {
    nextimg();
    return false;
  });

});
