$.fn.target=function (target,yoffset) {
	$(this).click(function() { 
		if(!yoffset) yoffset = 0;
		var Theigth = target.offset().top - yoffset;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	});
};

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};

function cSet(name, value, withDate) {
  var Days = 1;
  var exp = new Date();
  if(withDate){
    name = name + exp.getDate();
  }
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name,withDate) {
  var exp = new Date();
  if(withDate){
    name = name + exp.getDate();
  }
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function timeInit() {
  var date = new Date();
  var cName = "enaffbf_t";
  var nowTime = Math.floor(date.getTime() / 1000);
  countTime=cGet(cName,1);
  if (cGet(cName,1) == null) {
    countTime = nowTime + 300;
    cSet(cName, countTime,1);
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

var changeTab = true,livetime = '',backtime= '';
function getCycleCountdown(endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
}

var countdown = function(countdown2) {
  var statusNow = statusSet();
  getCycleCountdown(countTime);
  $(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if (statusNow == 2) {
    cSet('2020sale','soldout');
    return
  }
  if(changeTab==true) {
    setTimeout("countdown('" + countdown2 + "')",1);
  }
};

function statusSet() {
  var statusNow = statusCheck();
  if (statusNow == 2) {
    soldout();
  }
  return statusNow;
}

function getCookie(name)
{
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
 
    if(arr=document.cookie.match(reg))
 
        return unescape(arr[2]);
    else
        return null;
}



function statusCheck() {
  var date = new Date();
  var timeNow = date.getTime() / 1000;
  if (timeNow < countTime) {
    return 1;
  } else {
    return 2;
  }
}
document.addEventListener("visibilitychange", function() {
  if(getCookie('2020sale')) return

  if(document.hidden ) {
    changeTab = false;
    livetime=new Date().getTime() / 1000
    // console.log(livetime)
  }
  else {
    changeTab = true;
    // _init();
    backtime=new Date().getTime() / 1000;
    var timenow2 = Math.floor(backtime - livetime);
    countTime = parseInt(countTime) + timenow2;

    var date = new Date();
    var cName = "enaffbf_t";

    cSet(cName, countTime,1);

    countdown("#countdown2 strong");

  }
});

var soldout = function () {
  $('.soldout-box').addClass('soldout')
  $('.add').addClass('_soldout')
  $('.offer-img').attr('src', $('.offer-img').attr('src').replace(/offer/, "soldout-offer"))
  $('.banner .cont .right dd.one').html('<span style="font-size:20px;">67%</span>&nbsp; <span style="font-size:16px;opacity: 1;">Rabatt</span>')
  $('.soldout-none').hide()
  $('.soldout-block').show()
  // $('.paquete').css('background','transparent')
  $('.banner .cont .center .time').css('margin','-60px 0 0 -40px')
  $('.comparison-table').css('margin-top','-38px')
  $('.banner .cont').css({'padding':'82px 120px 100px 60px'})
  $('.banner .cont .right dd.three p.t').html('<span>299<b>Kr</b></span> <del>899Kr</del>')
  $('.original').text('899Kr')
  $('.soldout-num').html('299<b>kr</b>')
  $('.banner .cont .right').addClass('_soldout')
  $('.ga-button').each((i,v)=>{
    $(v).attr('href','https://www.iobit.com/buy.php?product=sv-db83pc299&ref=sv_db83pc299purchase2011xr'+refStr+'&refs=sv_purchase_db').removeAttr('onclick').attr('onclick',"ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pc2011xr-sv')")
  })
};
function sendGift() {
  var sendEmail = $('.email').val();
  if (sendEmail.length <= 0) {
    alert('Please enter your email address to claim your free gift pack.');
  } else if (!isEmail(sendEmail)) {
    alert('Incorrect E-mail format.');
  } else {
    var pid = MApp(2.2).url.getParameters('t');
    $('.mail form button').before("<p style='text-align: center;' id='mail-note'>Sending message.Please wait a moment.</p>");
    $('.emailbtn').attr('onclick', 'javascript:void(0)');
    $.ajax({
      url: 'requestDeal.php',
      type: 'GET',
      dataType: 'json',
      async: true,
      timeout: 10000,
      data: 'action=sendGift&sendEmail=' + sendEmail + '&pid=' + pid,
      success: function(res) {
        statistic(3,'mail send');
        if ((res.status == 1) || (res.status == 2)) {
          // showCoupon('gift');
          //setTimeout('closeCoupon(0)',6000);
        } else if (res.errorMsg.length > 0) {
          alert(res.errorMsg);
        } else {
          alert('There is something wrong while sending email.Please try again later.');
        }
        $('#mail-note').remove();
        $('.emailbtn').attr('onclick', 'sendGift()');
      }
    });
  }
  return false;
}

function statistic(status,des){
  $.ajax({
    type: "GET",
    url:'index.php?action=statistic&status='+status+'&des='+des
  })
}

function _init(){
  timeInit();
  countdown("#countdown2 strong");
}



var packs=50;
$(function () {
  //goto comparison-table
  $("a.intro").target($(".comparison-table"));

  //benefits
  $(".benefits .detail-list dl").hover(function() {
    $(this).addClass("active").siblings().removeClass("active");
    $(".benefits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
    $(".benefits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  });
  $(".reviews .img-box li").hover(function() {
    var num =$(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".reviews .message li").eq(num).addClass("active").siblings().removeClass("active");
  });
});

// progressbar
function focus() {
   $(".raduem").css({ "opacity": 1, "top": -100, "zIndex": 8}).animate({ "opacity": 0, "top": -130, "zIndex": -9}, 800);
   $(".raduemnum").css({ "opacity": 1, "top": 13, "zIndex": 8}).animate({ "opacity": 0, "top": -60, "zIndex": 0}, 800);
   $(".raduemtab").css({ "opacity": 1, "top": 14, "zIndex": 8}).animate({ "opacity": 0, "top": 22, "zIndex": 0}, 800);
}
var className = ["one", "two", "three", "four"];
var index = 1;
var nextFun = function() {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $(".review ul li").eq(i).attr("class", className[i]);
  }
  if (index < 3) {
    index++;
    review(index);
  } else {
    index = 0;
    review(index);
  }
};

var prevFun = function() {
  var addName = className.shift();
  className.push(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $(".review ul li").eq(i).attr("class", className[i]);
  }
  if (index > 0) {
    index--;
    review(index);
  } else {
    index = 3;
    review(index);
  }

};
var review = function(index) {
  $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
};

$(function(){
  $(window).scrollWindow($(".service"), $('.feature dl,.feature .machine'), ("on"));
  // chartShow()
  // var cName='enaffbf_i';
  //     if(cGet(cName,1)==null){
  //       // setTimeout(showCoupon('info'), 1000);
  //       cSet(cName,1,1);
  //       // setTimeout('closeCoupon(1)',1000);
  //     }else{
        
  //     }
  _init();
});
function flipNum(num, length) {
  var num = PrefixInteger(num, length);
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var wid = num * 6.8;
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".surplus b").html(list);
  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    $(".surplus b").eq(i).animate({
      marginTop: -curNum * 24,
    }, "slow");
  }
  focus();
}
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}
function packsInit(){
  // getPacksNum();
  //var packs=50;
  flipNum(packs,2);
  //$('.packsNum').html(packs);
  //setTimeout('getPacksNum()', 1000);
}

