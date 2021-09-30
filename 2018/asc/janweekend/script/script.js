function cycleCountdown(){
  var startTimestamp = MApp(2.2).datetime.getTimestamp(endTime);
  var datetime = getCycleCountdown(startTimestamp);
  if(datetime==false){
    $(".countdown strong").eq(0).html('00').end().eq(1).html('00').end().eq(2).html('00').end().eq(3).html('000');
    statusCheck();
  }else {
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    $(".countdown strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    setTimeout('cycleCountdown()', 1);
  }
}

function getCycleCountdown(startTimestamp){
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
  if (remainingTime > 0) {
    var d = Math.floor(remainingTime / (24 * 60 * 60));
    var h = Math.floor(remainingTime / (60 * 60));
    var i = Math.floor(remainingTime / 60 % 60);
    var s = Math.floor(remainingTime % 60);
    var mi = 999 - dateObj.getMilliseconds();
    if (mi < 10) {
      mi = '00' + mi;
    } else if (mi < 100) {
      mi = '0' + mi;
    }
    return [d, h, i, s, mi];
  } else {
    return false;
  }
}

$.fn.changeActive = function(clickName, buybtn) {
  $(this).on(clickName, function() {
    var num = $(this).index();
    $(".centbuy li").eq(num).addClass("active").siblings().removeClass("active");
    $(".footbuy li").eq(num).addClass("active").siblings().removeClass("active");
    $(".centbuy .imglist img").eq(num).addClass("active").siblings().removeClass("active");
    $(".footbuy .imglist img").eq(num).addClass("active").siblings().removeClass("active");
    var name = $(".purchase .imglist img").eq(num).attr("class");
    var newName = name.substring(0, name.length - 7);
    var oldName = "price list";
    var btnClass = $(".banner .list").eq(num).find(".buybtn").attr("class");
    var dataURL = $(".banner .list").eq(num).find(".buybtn").attr("href");
    var dataGA = $(".banner .list").eq(num).find(".buybtn").attr("onclick");
    var off = $(".purchase li").eq(num).find(".num").text();
    var offtwo = $(".banner .list").eq(num).find(".num-off").text();
    var original = $(".banner .list").eq(num).find(".original strong").text();
    var discount = $(".banner .list").eq(num).find(".discount b").text();
    $(".purchase .price").attr("class", oldName + ' ' + newName);
    $(".purchase .buybtn").attr({
      "class": btnClass,
      "href": dataURL,
      "onclick": dataGA
    });
    $(".purchase .price").find(".num").text(off);
    $(".purchase .price").find(".num-off").text(offtwo);
    $(".purchase .price").find(".original strong").text(original);
    $(".purchase .price").find(".discount b").text(discount);
  });
};
$('.review .handle li').hover(function() {
  $(this).addClass('active').siblings().removeClass('active');
  $('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
});
$(function() {
  $(".centbuy li").changeActive("click", $(".centbuy .buybtn"));
  $(".footbuy li").changeActive("click", $(".footbuy .buybtn"));
  $(".product .list").hover(function() {
    var text = $(this).find(".original strong").text();
    $(this).find(".original strong").html('<del>' + text + '</del>');
  }, function() {
    var text = $(this).find(".original strong").text();
    $(this).find(".original strong").html(text);
  });

  var now = new Date();
  var nowTime = now.getTime() ;
  var dayDis = now.getDay();
  var oneDayTime = 24*60*60*1000 ;
  var MondayTime = nowTime - (dayDis-8)*oneDayTime ;

  var date=new Date(MondayTime);
  var year=date.getFullYear();
  var month=numberFormat(date.getMonth()+1);
  var day=numberFormat(date.getDate());

  endTime=year+'-'+month+'-'+day+' '+'00:00:00';
  statusCheck();
});

function numberFormat(s){
  return s < 10 ? '0' + s: s;
}

function statusCheck(){
  var now = new Date();
  var weekDay = now.getDay();
  if((weekDay===0)||(weekDay==6)){
    cycleCountdown();
  }else{
    $('.buybtn').addClass('default').attr('href','javascript:void(0)').attr('onclick','expired()');
  }
}

function expired(){
  alert('This time limited offer has expired.');
}