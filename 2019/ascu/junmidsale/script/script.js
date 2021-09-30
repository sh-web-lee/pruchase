$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function focus(reduce) {
  $(".progress-bar .bar > span").append("<span class='reduce reduce_"+ reduce +"'></span>");
  $(".banner .left-message").append("<span class='shadow'></span>");
  $(".float .left-message").append("<span class='shadow'></span>");
}

function pack(number, starnumber) {
  $('.gift').prop('number', starnumber).animateNumber({
      number: number
    },
    500
  );
  $('.soldNum').html(500 - number);
}

function flipNum(num, length) {
  var num = PrefixInteger(num, length);
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .countdown .scroll-tick").html(list);
  $(".float .countdown .scroll-tick").html(list);
  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    $(".banner .countdown .scroll-tick").eq(i).animate({
      marginTop: -curNum * 33,
    }, "slow");
    $(".float .countdown .scroll-tick").eq(i).animate({
      marginTop: -curNum * 33,
    },"slow");
  }
  var number = num * 3.36;
  $(".progress-bar .bar > span").css("width", number);
  setTimeout(function() {
    focus(1);
  }, 500);
}

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}


function soldOut() {
  var tw = MApp(2.2).datetime.getTimeZone();
  //banner
  $(".banner .left-message").addClass("soldout");
  $(".banner .left-message .gift").attr({"src": soldout.bannerGift});
  $(".banner .right-message").addClass("soldout");
  $(".banner .right-message h3").text(soldout.bannerTitle);
  $(".banner .right-message del").text(soldout.del);
  //gifts
  $(".gifts").addClass("soldout");
  //float
  $(".float .left-message").addClass("soldout");
  $(".float .left-message .gift").attr({"src": soldout.floatGift});
  $(".float .middle-message").addClass("soldout").html("<p>Your one-stop Solution for PC security and performance</p>");
  $(".float .right-message del").text(soldout.del);
  //buybtn
  $(".buybtn").attr({"href": soldout.href + "&tw=" + tw, "onclick": soldout.ga});
}

$(function () {
  packsInit();
  $(window).scrollWindow($(".banner .buybtn"),$('.feature dl dd'),("on"));
  $(window).scrollWindow($(".banner .buybtn"),$('.float'),("on"));
});

function packsInit() {
  var date = new Date();
  var cName = "enascumid_p" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr === null) {
    packs = 99;
  } else {
    packs = arr[2];
  }
  flipNum(packs,2);
  if(statusCheck()) {
    setTimeout('getSales()', getReTime());
  }
}

function statusCheck(){
  if(packs==0){
    if(!$(".banner .left-message").hasClass('soldout')){
      soldOut();
    }
    return 0;
  }else{
    return 1;
  }
}

function getReTime(){
  if(packs>61){
    return 3*1000;
  }else{
    return 8*1000;
  }
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "midsale.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs=sales.packsNum;
        flipNum(packs,2);
        statusCheck();
      }
    }
  });
  if(statusCheck()){
    setTimeout('getSales()',getReTime());
  }
}