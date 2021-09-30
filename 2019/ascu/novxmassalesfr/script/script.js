

var review = function (review) {
  $(review).mouseover(function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".reviews").eq(index).addClass("active").siblings().removeClass("active");
  });
};

function expired() {
  $(".ctable table td.itema").html("Expiré")
  $(".ctable table tr.gray td.itema").html("")
}
$(function () {
  //review
  light();
  var stStr = MApp(2.2).url.getParameters('st');
  var stArr=['pm_t5','pm_p3','pm_r2'];
  if($.inArray(stStr,stArr)!='-1'){
    expired();
  }
  review((".review ul li"));
  packs=83;
  packsInit();
  //countdown((".banner h2 strong"));

});
var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html('00').end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s).end().eq(4).html(mi);
  setTimeout("countdown('"+ countdown +"')", 1);
};
function getCycleCountdown () {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 00:00:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}
function packsInit() {
  var date = new Date();
  var cName = "novxmassalesfr" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 82;
    timeCheck();
  } else {
    packs = arr[2];
    timeCheck();
  }
  if (packs <= 3) {
    packs = 3;
  } else {
    setTimeout('getSales()', reTime * 1000);
  }
}
function light() { 
  $(".light02").addClass("hide");
  $(".light").removeClass("hide");
  setTimeout(function () {
     $(".light").addClass("hide");
     $(".light01").removeClass("hide");
  }, 500);
  setTimeout(function () {
     $(".light,.light01").addClass("hide");
     $(".light02").removeClass("hide");
  }, 1000);
  setTimeout("light()",1500)
}

function timeCheck() {
  reTime = (Math.random() > 0.5) ? 7 : 10;
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "index.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);

      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        if (packs <= 3) {
          packs = 3;
        }
        $(".pickNum").html(packs);
        timeCheck();
      }
    }
  });
  setTimeout('getSales()', reTime * 1000);
}