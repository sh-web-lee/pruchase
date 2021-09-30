$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  setTimeout("countdown('"+ countdown +"')", 1);
};
function getCycleCountdown () {
  var startTimestamp = MApp(2.2).datetime.getTimestamp(countDate);
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 3);
}

function cSet(cName, cVal) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
  document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
  var date = new Date();
  var cName = "dkdbapr_t" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime = Math.floor(date.getTime() / 1000);
  var countTime;
  if (arr == null) {
    countTime = nowTime + 3600;
    cSet(cName, countTime);
  } else {
    countTime = parseInt(arr[2]);
  }
  countDate=getLocalTime(countTime);
  countdown(("#countdown strong"));
}

function getLocalTime(dateTime){
  var date = new Date(dateTime*1000);
  var Y = date.getFullYear() + '-';
  var M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
  var D = (date.getDate() < 10 ? '0' + (date.getDate()) : date.getDate()) + ' ';
  var h = (date.getHours() < 10 ? '0' + date.getHours() : date.getHours()) + ':';
  var m = (date.getMinutes() <10 ? '0' + date.getMinutes() : date.getMinutes()) + ':';
  var s = (date.getSeconds() <10 ? '0' + date.getSeconds() : date.getSeconds());
  return Y+M+D+h+m+s;
}

function getBuyNum(){
  $.ajax({
    type: "GET",
    url: "./aprsale.php",
    data: "action=getSales&r="+Math.random(),
    success: function(sales){
      sales=JSON.parse(sales);
      var scrollHeight = $(".feature").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $(".float").removeClass('on');
        setTimeout("$('.float').addClass('on');", 800);
      }
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);
      $('.buyNum').html(sales.buyNum);
      setTimeout('getBuyNum()', 5000);
    }
  });
}
setTimeout('getBuyNum()', 5000);

$(function () {
  $('#dg-container').gallery();
  timeInit();
  $(window).scrollWindow($(".banner .buybtn"),$('.feature .list li'),("on"));
  $(window).scrollWindow($(".feature"),$('.float'),("on"));
  //feature
  $(".feature .list li").hover(function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".feature .intro li:first-child").stop().css({"marginTop": index*(-485)});
  });
  //cutbuy
  $(".cutbuy ul li").hover(function () {
    var index = $(this).index();
    var _url = $(this).attr("data-url");
    var _price = $(this).attr("data-price");
    var _del = $(this).attr("data-del");
    $(".cutbuy ul li").eq(index).addClass("active").siblings().removeClass("active");
    $(".cutbuy2 ul li").eq(index).addClass("active").siblings().removeClass("active");
    $(".cutbuy .box img").stop().animate({"marginLeft": index*(-238)} , 300);
    $(".cutbuy .price strong").text(_price);
    $(".cutbuy .price del").text(_del);
    $(".cutbuy .buybtn").attr({"href": _url});
  })
});

function hideFloat(argument) {
  $('.float').remove();
}