$.fn.scrollWindow = function (topheight, scrollclass, ClassName) {
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};
$.fn.target=function (target, yoffset) {
  $(this).click(function() {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
};

function flipNum(num1, num2, length) {
  $(".packsNum").html(num2);
  var num1 = PrefixInteger(num1, length);
  var num2 = PrefixInteger(num2, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len1 = String(num1).length;
  var len2 = String(num2).length;
  var str1 = num1.toString();
  var str2 = num2.toString();
  var count1 = $(".countdown1 .scroll-tick");
  var count2 = $(".countdown2 .scroll-tick");
  var count3 = $(".countdown3 .scroll-tick");
  var count6 = $(".countdown6 .scroll-tick");
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  count1.html(list);
  count2.html(list);
  count3.html(list);
  count6.html(list);

  for (var i = 0; i <= len1; i++) {
    var curNum1 = str1.substring(i, i + 1);
    count1.eq(i).animate({
      marginTop: -curNum1 * 22,
    }, "slow");
    count6.eq(i).animate({
      marginTop: -curNum1 * 15,
    }, "slow");
  }
  for (var i = 0; i<= len2; i++) {
    var curNum2 = str2.substring(i, i + 1);
    count2.eq(i).animate({
      marginTop: -curNum2 * 22,
    }, "slow");
    count3.eq(i).animate({
      marginTop: -curNum2 * 15,
    }, "slow");
  }
}
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

var reviewPersonName = ['Bruce Ramsay', 'Hank Ewert', 'Loretta Harnarine', 'Markus Thomas Geldermann'];

$(function () {
  packsInit();
  //hint
  $(".hint-icon").hover(function () {
    $(this).parent().children(".hint-content").addClass("show").mouseleave(function () {
      $(this).removeClass("show");
    });
  });
  //intro
  $(".intro").target($(".comparison"), 80);
  //top
  $(".top").target($(".banner"));
  //review
  $(".review ul li").hover(function () {
    var index = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".review .review-content p").eq(index).addClass("active").siblings().removeClass("active");
    $(".review .line").text(reviewPersonName[index]).stop().animate({"left": index*176 }, 300);
  });
  //bottombuy
  $(".bottombuy ul li").hover(function () {
    var index = $(this).index();
    var url   = $(this).attr("data-url");
    var ga    = $(this).attr("data-ga");
    var price = $(this).attr("data-price");
    var del   = $(this).attr("data-del");
    $(this).addClass("active").siblings().removeClass("active");
    $(".bottombuy .box img").stop().animate({"marginLeft": index*-261}, 300);
    $(".bottombuy .price strong").text(price);
    $(".bottombuy .price del").text(del);
    $(".bottombuy .buybtn").attr({"href": url, "onclick": ga});
    if(index === 0) {
      $(".bottombuy .bottombuy-countdown .countdown3,.bottombuy .bottombuy-countdown .countdown6").fadeOut();

    } else if(index ===1) {
      $(".bottombuy .bottombuy-countdown .countdown3").fadeIn();
      $(".bottombuy .bottombuy-countdown .countdown6").hide();
    } else if(index ===2) {
      $(".bottombuy .bottombuy-countdown .countdown6").fadeIn();
      $(".bottombuy .bottombuy-countdown .countdown3").hide();
    }
  });
  //float
  $(window).scrollWindow($(".banner .buybtn"),$('.float'),("on"));
  //top
  $(window).scrollWindow($(".payments"),$('.top'),("on"));
});

//soldOut
function soldOut() {
  $(".bottombuy ul li:nth-child(3)").unbind().addClass("soldout");
  var middle = $(".banner .message.middle");
  var right = $(".banner .message.right");
  middle.addClass("soldout");
  setTimeout(function () {
    middle.addClass("soldout02");
    right.addClass("show02");
  },300);
  setTimeout(function () {
    middle.addClass("soldout03");
    right.addClass("show03");
  },600);
}

function packsInit() {
  var date = new Date();
  var cName = "deascli" + date.getDate();
  var packsArr;
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packsArr=[151,601];
  } else {
    packsArr = arr[2].split('%2A');
  }
  flipNum(packsArr[0],packsArr[1],3);
  decreasingPacks(1);
}

function decreasingPacks(type) {
  var date=new Date();
  $.ajax({
    type: "GET",
    url: "limitedsale.php",
    data: "action=getSalePacks&d="+date.getDate()+"&type="+type,
    success: function (packs) {
      var packsArr = packs.split('*');
      flipNum(packsArr[0],packsArr[1],3);
      statusCheck(packsArr);
    }
  });
}

function statusCheck(packsArr){
  var packs75=packsArr[1];
  var packs70=packsArr[0];
  var reTime=4;
  var type;
  if(packs70>0){
    if(packs70>3){
      var randNum=Math.random();
      if(packs75>600){
        if(randNum>0.5){
          type=1;
        }else{
          type=2;
        }
      }else{
        if(randNum>0.8){
          type=2;
        }else{
          type=1;
        }
      }
      reTime=1;
    }else{
      type=1;
      reTime=2.5;
    }
  }else{
    type=2;
    if(!$(".banner .message.middle").hasClass("soldout")){
      soldOut();
    }
    if(packs75>123){
      reTime=2;
    }
  }
  setTimeout("decreasingPacks("+type+")",reTime*1000);
}

