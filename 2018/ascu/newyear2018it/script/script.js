function packsGet() {
  var date = new Date();
  var cName = "frascu" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  packs = (arr == null) ? 50 : arr[2];
  if (packs > 3) {
    $('.countNum').html(packs);
    setTimeout('decreasingPacks()', 8000);
  }
}

function decreasingPacks() {
  var dateNow = new Date();
  $.ajax({
    type: "GET",
    url: "index.php",
    data: "action=getPacks&r=" + Math.random() + "&d=" + dateNow.getDate(),
    success: function(sPacks) {
      if (sPacks > 3) {
        $('.countNum').html(sPacks);
        setTimeout('decreasingPacks()', 20000);
      } else {
        $('.countNum').html(3);
      }
    }
  });
}
packsGet();

var countdown = function(countdown) {
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('" + countdown + "')", 1);
};

function getCycleCountdown() {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};

$(function() {
  countdown(("#countdown strong"));
  countdown(("#countdown2 strong"));
  $(".handle li").userMouseover($(".content .reviews"));
});