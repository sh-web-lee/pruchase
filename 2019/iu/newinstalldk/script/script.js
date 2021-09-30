//userreview 
function switchover(name, clickname, active, contname) {
  $(name).on(clickname, function() {
    var num = $(this).index();
    $(name).eq(num).addClass(active).siblings().removeClass(active);
    $(contname).eq(num).addClass(active).siblings().removeClass(active);
  });
}

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

$(function() {
  timeInit();
  $(".compareBtn").target($("#compare"), 0);
  switchover(".users li", "mouseover", "active", ".review .content > dl");
  $(window).scrollWindow($(".banner .buybtn:last"), $('.floatlayer'), ("on"));
});
/*getUrlParam*/
(function($) {
  $.getUrlParam = function(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]);
    return '';
  }
})(jQuery);
$(".right-message .box").on("click",function(){
  var aff = $.getUrlParam('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  var new3pchref="http://www.iobit.com/buy.php?product=dk-iu113pcpf159&ref=dk_iu113pcpf1906newinstall"+refStr+"&aff=" + aff + "&refs=dk_purchase_iu&tw=" + tw;
  var new3pcga="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3pc1907newinstall-dk')";
  var new1pchref="http://www.iobit.com/buy.php?product=dk-iu113pc179&ref=dk_iu111pc1906newinstall"+refStr+"&aff=" + aff + "&refs=dk_purchase_iu&tw=" + tw;
  var new1pcga="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1pc1907newinstall-dk')";
  if(!$("[data-num=pc1").hasClass("soldout")) {
    var dataNum = $(this).attr("data-num");
    var dataIndex = $(this).attr("data-index");
    $("[data-num=\'" + dataNum + "\']").addClass("active"); 
    $("[data-num^='pc']:not([data-num=\'" + dataNum + "\'])").removeClass("active");
    if(dataIndex==0) {
      $(".banner,.bottom-buy").removeClass("banner-iu");
      $(".banner .price strong b,.bottom-buy .price strong b").html("159");
      $(".banner .price dt del,.bottom-bu .price dt del").html("kr. 798");
      $(".banner .buybtn,.bottom-buy .buybtn").attr("href",new3pchref);
      $(".banner .buybtn,.bottom-buy .buybtn").attr("onclick",new3pcga);
      $(".gift-message").removeClass("soldout");
    }
    else {
      $(".banner,.bottom-buy").addClass("banner-iu");
      $(".banner .price strong b,.bottom-buy .price strong b").html("179");
      $(".banner .price dt del,.bottom-bu .price dt del").html("kr. 399");
      $(".banner .buybtn,.bottom-buy .buybtn").attr("href",new1pchref);
      $(".banner .buybtn,.bottom-buy .buybtn").attr("onclick",new1pcga);
      $(".gift-message").addClass("soldout");
    }

  }
  else {
    $(".banner,.bottom-buy").addClass("banner-iu");
    
  }
});
function soldout() {
  var aff = $.getUrlParam('aff');
  var tw = MApp(2.2).datetime.getTimeZone();
  var new1pchref="http://www.iobit.com/buy.php?product=dk-iu113pc179&ref=dk_iu111pc1906newinstall"+refStr+"&aff=" + aff + "&refs=dk_purchase_iu&tw=" + tw;
  var new1pcga="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1pc1907newinstall-dk')";
  $(".banner,.bottom-buy").addClass("banner-iu");
  $(".banner .right-message,.gift-message,.bottom-buy").addClass("soldout")
  $("[data-num=pc1").addClass("soldout").removeClass("active"); 
   $("[data-num=pc0").addClass("active");
  $(".price strong b").html("179")
  $(".price dt del").html("kr. 399")
  $(".banner .gifts .left-message").html("<strong>IObit Uninstaller PRO</strong> (1 år, 3 pc'er)");
  $(".banner .box:eq(1) .left-message").html("<strong>IObit Uninstaller PRO</strong> (1 år, 3 pc'er)<span><i class='all-icons'></i>  IObit Uninstaller PRO （ekstra 2 måneder）</span><span><i class='all-icons'></i>  Protected Folder gave</span>");
  $(".bottom-buy li.gifts").html("<span>IObit Uninstaller PRO     </span> <strong>-55%</strong>");
  $(".bottom-buy li:eq(1)").html("<span>IObit Uninstaller PRO + <i class='all-icons'></i> <b>Protected Folder </b>    </span> <strong>-80%</strong>");
  $(".banner .box:eq(1) .price b").html("kr. 639 ")
  $(".banner .gifts .price b").html("kr. 220 ")
  $(".banner .gifts h3").remove();
  $(".banner .buybtn,.bottom-buy .buybtn").attr("href",new1pchref);
  $(".banner .buybtn,.bottom-buy .buybtn").attr("onclick",new1pcga);
}

function cSet(cName,cVal){
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days*24*60*60*1000);
  document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
}

function timeInit(){
  var date = new Date();
  var cName = "dkiujan" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  var nowTime=Math.floor(date.getTime()/1000);
  if (arr == null) {
    countTime=nowTime+480;
    cSet(cName,countTime);
  } else {
    countTime=parseInt(arr[2]);
  }
  countdown(".count-time span");
}

function statusCheck(){
  var date=new Date();
  var timeNow=date.getTime()/1000;
  if(timeNow<countTime){
    return 1;
  }else{
    return 2;
  }
}

function statusSet(){
  var statusNow=statusCheck();
  if(statusNow==2){
    if(!$(".banner .right-message,.gift-message,.bottom-buy").hasClass('soldout')){
      soldout();
    }
  }
  return statusNow;
}

var countdown = function(countdown) {
  var statusNow=statusSet();
  getCycleCountdown(countTime);
  $(countdown).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if(statusNow!=2){
    setTimeout("countdown('" + countdown + "')", 1);
  }
};

function getCycleCountdown (endTime) {
  var datetime = timeCountDown(endTime);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 2).substr(0, 2);
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