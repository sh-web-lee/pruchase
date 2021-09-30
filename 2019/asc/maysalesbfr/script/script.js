$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  //$(".secbox").html("");
  //$(".seclist").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(number).length;
  var str = number.toString();
  var box = $(".secbox");
  var createobj;
  for (var i = 0; i < length; i++) {
    if (length < 2) {
      createobj = $(new Array(3).join('<b class="seclist"></b>'));
    } else {
      createobj = $('<b class="seclist"></b>');
    }
    box.append(createobj);
  }
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  if($(".seclist").html()==''){
    $(".seclist").append(list);
  }
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#sec .seclist").eq(a).animate({
      marginTop: -curNum * 20,
    }, "slow");
  }
}


// soldOut
function soldOut() {
  //banner
  $(".banner .offer85").addClass("soldout");
  $(".banner .offer65").addClass("soldend");
  $(".banner .offer65").addClass("active");
  $(".banner .offer65 .price strong").text(offer65.price);
  $(".banner .offer65 .off").attr("src", offer65.boxImgUrl);
  $(".banner .offer65 .buybtn").attr({"href": offer65.href, "onclick": offer65.ga});
  //giftbox
  $(".giftbox").addClass("soldout");
  //bottombuy
  $(".bottombuy .asc-select").addClass("soldout");
  $(".bottombuy .offer65").attr({"data-discount": offer65.price, "data-href": offer65.href, "data-ga": offer65.ga}).addClass("active").siblings().removeClass("active");
  $(".bottombuy .offer65>img").attr("src", offer65.bottombuyImgUrl);
  bottombuySelect($(".bottombuy .offer65"));
}

//bottombuySelect
function bottombuySelect(selector) {
  var _discount = selector.attr("data-discount");
  var _original = selector.attr("data-original");
  var _href = selector.attr("data-href");
  var _ga = selector.attr("data-ga");
  if (selector.index() == 0) {
    $(".asc-box-content").addClass("active");
  } else if (selector.index() == 1) {
    $(".asc-box-content").removeClass("active");
  }
  selector.addClass("active").siblings().removeClass("active");
  $(".asc-message p del").text(_original);
  $(".asc-message strong").text(_discount);
  $(".asc-message a.buybtn").attr("href", _href).attr("onclick", _ga);
}

function popShow() {
  $(".popbg,.popbox").removeClass("on").addClass("on");
  $(".close").click(function() {
    $(".popbg,.popbox").removeClass("on");
  });
}

function popHide() {
  $(".popbg,.popbox").removeClass("on");
}

$(function() {
  $(window).scrollWindow($(".feature dl"), $('.reviews dl'), ("on"));
  $(".selecter").click(function() {
    bottombuySelect($(this));
  });
  flipNum(98, 2);
});

var cArr = ["shot3", "shot2", "shot1"];
var index = 0;

//prevFun
function prevFun() {
  cArr.unshift(cArr[2]);
  cArr.pop();
  $(".showcase .imglist li").each(function(i, e) {
    $(e).removeClass().addClass(cArr[i]);
  });
  index--;
  if (index < 0) {
    index = 2;
  }
}
//nextFun
function nextFun() {
  cArr.push(cArr[0]);
  cArr.shift();
  $(".showcase .imglist li").each(function(i, e) {
    $(e).removeClass().addClass(cArr[i]);
  });
  index++;
  if (index > 2) {
    index = 0;
  }
}


$(function(){
  timeInit();
  countdown((".offer85 .countdown strong"),1);
  countdown((".offer65 .countdown strong"),2);
  countdown((".giftbox .countdown strong"),1);
});
function cSet(cName,cVal){
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days*24*60*60*1000);
  document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}
function cSetPop(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}
function timeInit(){
  var date = new Date();
  var cName = "itascnata" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime=Math.floor(date.getTime()/1000);
  if (arr == null) {
    count1=nowTime+300;
    count2=nowTime+660;
    cSet(cName,count1+'.'+count2);
  } else {
    var packsArr = arr[2].split('.');
    count1 = parseInt(packsArr[0]);
    count2 = parseInt(packsArr[1]);
  }

  mouseEvent = false;
  if (cGet('enascanni_s') == -1) {
    maskTimeInit();
  }
}

function statusCheck(){
  var date=new Date();
  var timeNow=date.getTime()/1000;
  if ((timeNow >= (count1 - 240)) && (cGet('enascanni_s') == null) && (!mouseEvent)) {
    mouseEvent = true;
    $(document).bind('mousemove', mouseOut);
  }
  if(timeNow<count1){
    return 1;
  }else if(timeNow<count2){
    return 2;
  }else{
    return 3;
  }
}

function statusSet(){
  var statusNow=statusCheck();
  if(statusNow==2){
    if(!$(".banner .offer85").hasClass('soldout')){
      soldOut();
    }
  }else if(statusNow==3){
    if(!$(".banner .offer65").hasClass('soldend')){
      soldOut();
    }
  }
}

function timeCountDown(startTimestamp) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = startTimestamp - time;
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

var countdown = function (countdown,tType){
  statusSet();
  if(tType==1){
    getCycleCountdown(count1);
  }else if(tType==2){
    getCycleCountdown(count2);
  }
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('"+ countdown +"',"+tType+")", 1);
};

function getCycleCountdown (endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}
function getCycleCountdownPop(endTime) {
  var dateObj = new Date();
  var time = dateObj.getTime().toString().substring(0, 10);
  var remainingTime = endTime - time;
  sp = remainingTime % 60;
}
function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function mouseOut(e) {
  if (e.clientY < 10) {
    var cName = 'enascanni_s';
    cSetPop(cName, -1);
    maskTimeInit();
    $(document).unbind('mousemove', mouseOut);
  }
}

function maskTimeInit() {
  if ((cGet('enascanni_s') == -1) && (!$(".popbg,.popbox").hasClass('on'))) {
    popShow();
    var date = new Date();
    var cName = "enascanni_c";
    var arr = cGet("enascanni_c");
    var nowTime = Math.floor(date.getTime() / 1000);
    if (arr == null) {
      maskCountTime = nowTime + 60;
      cSetPop(cName, maskCountTime);
    } else {
      maskCountTime = parseInt(arr);
    }
    maskCountdown();
  }
}

var maskCountdown = function() {
  var statusNow = maskStatusSet();
  getCycleCountdownPop(maskCountTime);
  flipNum(parseInt(sp), 2);

  if (statusNow == 1) {
    setTimeout("maskCountdown()", 1000);
  }
};

function maskStatusSet() {
  var statusNow = maskStatusCheck();
  if (statusNow == 2) {
    cSetPop('enascanni_s', -2);
    popHide();
  }
  return statusNow;
}

function maskStatusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < maskCountTime) {
    return 1;
  } else {
    return 2;
  }
}

