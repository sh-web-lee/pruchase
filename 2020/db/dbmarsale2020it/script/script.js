$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
  });
};

var className = ["one", "two", "three", "four"];
var index = 1;

$(function(){
  //countdown
  countdown((".banner .countdown strong"),(".centbuy .countdown strong"),(".bottombuy .countdown strong"));
  //review
  getViewNum();
  //feature
  $(window).scrollWindow($(".payment"), $('.feature dl,.feature .machine'), ("on"));
  //selector
  $(".bottombuy ul li").hover(function () {
    bottombuy($(this));
  });
});

function nextFun () {
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
}

function prevFun () {
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
}

function review (index) {
  $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
}

//soldout
function soldout () {
  var _href = $(".banner .offer.small .buybtn").attr("href");
  var _ga = $(".banner .offer.small .buybtn").attr("onclick");
  var _del = $(".banner .offer.small .price del").text();
  var _price = $(".banner .offer.small .price big").text();
  $(".banner .offer.large, .gifts dl, .centbuy, .bottombuy").addClass("soldout");
  $(".centbuy .buybtn").attr({
    "href": _href,
    "onclick": _ga
  });
  $(".centbuy .price big").text(_price + ",99€");
  $(".centbuy  .price del").text(_del);
  bottombuy($(".bottombuy ul li").eq(1));
  $(".centbuy .countdown, .bottombuy .countdown").hide();
}
//bottombuy
function bottombuy (selector) {
  var index = selector.index();
  var num = selector.attr("data-num");
  var price = $(".banner .offer").eq(num).find(".price big").text();
  var del = $(".banner .offer").eq(num).find(".price del").text();
  var href = $(".banner .offer").eq(num).find(".buybtn").attr("href");
  var ga = $(".banner .offer").eq(num).find(".buybtn").attr("onclick");
  selector.addClass("active").siblings().removeClass("active");
  $(".bottombuy .box img").eq(index).addClass("active").siblings().removeClass("active");
  $(".bottombuy .price big").text(price);
  $(".bottombuy .price del").text(del);
  $(".bottombuy .buybtn").attr({
    "href": href,
    "onclick": ga
  });
}

var countdown = function (countdown1,countdown2,countdown3){
  getCycleCountdown();
  $(countdown1).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown2).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  $(countdown3).eq(0).html(i).end().eq(1).html(s).end().eq(2).html(mi);
  if(h!='00'||i!='00'||s!='00'||mi!='00') {
    setTimeout("countdown('"+ countdown1 +"','"+ countdown2 +"','"+ countdown3 +"')", 1);
  } else {
    soldout();
  }
};

function getCycleCountdown () {
  var date=new Date();
  var cName = "dbmarsale2020it" + date.getDate();
  if (MApp(2.2).cookie.get(cName)) {
    dt = MApp(2.2).cookie.get(cName);
  }else{
    dt=date.setSeconds(date.getSeconds()+600);
    MApp(2.2).cookie.set(cName, dt);
  }

  var datetime = getCountdown(dt);
  if(datetime==0){
    d=h=i=s=mi='00';
    soldout();
  }else{
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
  }
}

function getCountdown(t) {
  var e = new Date
    , i = Math.floor(e.getTime()/1000)
    , r = t/1000
    , n = r - i;
  if (n > 0) {
    var s = Math.floor(n / 86400)
      , a = Math.floor(n / 3600 % 24)
      , o = Math.floor(n / 60 % 60)
      , u = Math.floor(n % 60)
      , h = 999 - e.getMilliseconds();
    return 10 > h ? h = "00" + h : 100 > h && (h = "0" + h),
      Array(s, a, o, u, h)
  }
  return 0
}

function getViewNum() {
	$.ajax({
		type: "GET",
		url: "marsale.php",
		data: "action=getViewNum",
		success: function(viewNum) {
			if (!isNaN(viewNum)) {
				$(".packsNum").html(viewNum);
			}
		}
	});
	setTimeout("getViewNum()", 20000);
}