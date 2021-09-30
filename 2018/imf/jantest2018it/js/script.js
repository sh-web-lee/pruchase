$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};
function soldoutGift() {
  if($(".bottom-buy ul li").eq(1).hasClass("active")) {
    threePc();
  }
  $(".banner .three-gift").addClass("expired");
  $(".gift-message").addClass("expired");
  $(".bottom-buy ul li").eq(1).addClass("expired").removeClass("active");
  $(".gift-message .buybtn").html("OTTIENI IL REGALO ORA");
  $(".float-window h2").html("Offerta");
  $(".box.three-box ul").addClass("show");
  $(".float-window h3").addClass("expired");
  $(".float-window h3").html("disponibile per <span > <strong>9</strong> ore </span> <span > <strong>9</strong> min</span> <span><strong>90</strong> sec</span> <span class='last'><strong>241</strong> ms *</span>");
  $(".gift-message .buy-btn a").attr('href','http://www.iobit.com/buy.php?product=it-imf53pcpf2199&ref=it_imf53pcpf2199purchase1801b'+refStr+'&refs=it_purchase_imf');
}
function onePc() {
  $(".bottom-buy .buybtn").attr("href","http://www.iobit.com/buy.php?product=it-imf51pc1999&ref=it_imf51pc1999purchase1801b"+refStr+"&refs=it_purchase_imf");
  $(".bottom-buy dl del").html("€39,95");
  $(".bottom-buy dl strong span").html("19,99");
  $(".bottom-buy ul li").eq(0).addClass("active").siblings().removeClass("active");
  $(".bottom-buy .img-box").removeClass("three-pc").removeClass("three-gift-pc").addClass("one-pc");
  $(".bottom-buy .buybtn").html("ACQUISTA ORA")
}
function threePc() {
  $(".bottom-buy .buybtn").attr("href","http://www.iobit.com/buy.php?product=it-imf53pcpf2199&ref=it_imf53pcpf2199purchase1801b"+refStr+"&refs=it_purchase_imf");
  $(".bottom-buy dl del").html("€99,9");
  $(".bottom-buy dl strong span").html("21,99");
  $(".bottom-buy ul li").eq(2).addClass("active").siblings().removeClass("active");
  $(".bottom-buy .img-box").addClass("three-pc").removeClass("three-gift-pc").removeClass("one-pc");
  $(".bottom-buy .buybtn").html("ACQUISTA ORA")
}
function threePcAndGift() {
  $(".bottom-buy .buybtn").attr("href","http://www.iobit.com/buy.php?product=it-imf53pcsdiupf2199&ref=it_imf53pcsdiupf2199purchase1801b"+refStr+"&refs=it_purchase_imf");
  $(".bottom-buy dl del").html(" €159,88");
  $(".bottom-buy dl strong span").html("21,99");
  $(".bottom-buy ul li").eq(1).addClass("active").siblings().removeClass("active");
  $(".bottom-buy .img-box").addClass("three-gift-pc").removeClass("three-pc").removeClass("one-pc");
  $(".bottom-buy .buybtn").html("APPROFFITANE ORA")
}
$('.message li').mouseover(function (event) {
  var num = $(this).index();
  var index = $(".message li.active").attr("data-num");
  var img = $(".img-change .continer img");
  img.eq(num).addClass('active').siblings().removeClass('active');
  $('.imf-message .message li').eq(num).addClass("active").siblings().removeClass('active');
  $('.list-content li').eq(num).addClass("active").siblings().removeClass('active').removeClass("noaml");
  if (num !== index) {
    img.eq(num + 1).addClass('tran');
    if (num === 3) {
      img.eq(0).addClass('tran');
    }
  }
  setTimeout(function () {
    img.removeClass("tran");
  }, 500);
});
$(".float-window .close").on('click', function (event) {
    $(".float-window").hide();
});
$(window).on('scroll', function () {
  var scrollHeight = $(".imf-message").offset().top;
  if ($(window).scrollTop() > scrollHeight) {
      $('.float-window').addClass('on');
  } else {
      $('.float-window').removeClass('on');
  }
  var scrolltopHeight = $(".banner h1").offset().top;
  if ($(window).scrollTop() > scrolltopHeight) {
      $('.float-top').addClass('on');
  } else {
      $('.float-top').removeClass('on');
  }
});

$('.bottom-buy li').click(function (event) {
  var num = $(this).index();
  if($(".bottom-buy ul li").eq(1).hasClass("expired")){
    if (num==0) {
      onePc();
    }
    else if(num ==1) {
    }
    else {
      threePc();
    }
  }
  else {
    if(num==0) {
      onePc()
    }
    else if(num==1) {
      threePcAndGift()
    }
    else {
      threePc()
    }
    $(this).addClass("active").siblings().removeClass("active");
  }
});
$('.users li').mouseover(function (event) {
   var num = $(this).index();
  $(this).addClass("active").siblings().removeClass("active");
  $(".review .content dl").eq(num).addClass("active").siblings().removeClass("active");
});

function timeCountDown(startTimestamp,ctype) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime=0;
  if(ctype==2){
    for(i=1;;i++){
      remainingTime = (startTimestamp+24*60*60*i)-time;
      if (remainingTime > 0) break;
    }
  }else {
    remainingTime = startTimestamp - time;
  }
  if (remainingTime > 0) {
    var d = Math.floor(remainingTime / (24 * 60 * 60));
    var h = Math.floor(remainingTime / (60 * 60) % 24);
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
    return [0, 0, 0, 0, 0];
  }
}

var countdown = function (tType){
  var statusNow=statusSet();
  if(tType==1){
    getCycleCountdown(count1,1);
    $(".three-gift li span").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    $(".float-window h3 span strong").eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  }else if(tType==2){
    getCycleCountdown(count2,2);
    $(".three-box li span").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    $(".float-window h3.expired span strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  }
  setTimeout("countdown("+statusNow+")", 1);
};

function getCycleCountdown (endTime,ctype) {
  var datetime = timeCountDown(endTime,ctype);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

function statusCheck(){
  var date=new Date();
  var timeNow=date.getTime()/1000;
  if(timeNow<count1){
    return 1;
  }else{
    return 2;
  }
}

function statusSet(){
  var statusNow=statusCheck();
  if(statusNow==2){
    if(!$(".three-gift").hasClass('expired')){
      soldoutGift();
      getSales(1);
    }
  }
  return statusNow;
}

function timeInit(){
  var date = new Date();
  var cName = "itimfnata" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime=Math.floor(date.getTime()/1000);
  if (arr == null) {
    count1=nowTime+725;
    count2=nowTime+58925;
    cSet(cName,count1+'.'+count2);
  } else {
    var packsArr = arr[2].split('.');
    count1 = parseInt(packsArr[0]);
    count2 = parseInt(packsArr[1]);
  }
}

function cSet(cName,cVal){
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days*24*60*60*1000);
  document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}

function packsInit(){
  var date = new Date();
  var cName = "itimfnatapa" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var packs=5;
  if (arr == null) {
    packs=39;
  } else {
    var packsArr = arr[2].split('%2A');
    var statusNow=statusCheck();
    if(statusNow==1){
      packs=packsArr[0];
    }else{
      packs=packsArr[1];
    }
  }
  $('.packsNum').html(packs);
}

function getSales(isTrans){
  var ctype=statusCheck();
  $.ajax({
    type: "GET",
    url: "natale2017.php",
    data:"action=getPack&type="+ctype,
    success: function(res){
      var sales=JSON.parse(res);
      var scrollHeight = $(".banner").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $(".float").removeClass('on');
        setTimeout("$('.float').addClass('on');", 800);
      }
      $("#first").html(sales.firstName);
      $("#last").html(sales.lastName);
      $(".packsNum").html(sales.packsNum);
      if(!isTrans){
        setTimeout('getSales(0)',15000);
      }
    }
  })
}

$(function(){
  $(".float-top").target($(".banner"),0);
  timeInit();
  packsInit();
  countdown(1);
  countdown(2);
  setTimeout('getSales(0)',15000);
});