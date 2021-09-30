$.fn.userMouseover = function (UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};

$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$.fn.target=function (target,yoffset) {
  $(this).click(function() {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });
};


function focus() {
  $(".asc-shadow").css({ "opacity": 1, "top": 20, "zIndex": 8}).animate({ "opacity": 0, "top": -20, "zIndex": -9}, 1000);
}

function hideFloat(argument) {
  $('.float').remove();
}

function packsInit(){
  var date = new Date();
  var cName = "sviuoct" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs=90;
  } else {
    packs=arr[2];
  }
  $('.packsNum').html(packs);

  if(packs>80){
    setTimeout('getPacks()',8000);
  }else if(packs>0){
    setTimeout('getPacks()',30000);
  }

  setTimeout('getBuyUser()', 20000);
  getSalesNum(packs);
}

function getPacks(){
  var date=new Date();
  $.ajax({
    type:'GET',
    url:'febsale.php',
    data:'action=getSales&d='+date.getDate(),
    success:function(sPacks){
      if(!isNaN(sPacks)){
        if(sPacks!=packs) {
          packs=sPacks;
          $('.packsNum').html(sPacks);
          focus();
          getSalesNum(packs);
        }
      }
    }
  });
  if(packs>80){
    setTimeout('getPacks()',8000);
  }else if(packs>0){
    setTimeout('getPacks()',30000);
  }
}

function getBuyUser(){
  $.ajax({
    type:'GET',
    url:'febsale.php',
    data:'action=getUser',
    success:function(res){
      var sales=JSON.parse(res);
      var scrollHeight = $(".banner .buybtn").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $(".float").removeClass('on');
        setTimeout("$('.float').addClass('on');", 800);
      }
      $("#firstName").html(sales.firstName);
      $("#lastName").html(sales.lastName);
      $("#saleType").html(sales.saleType);
      $(".viewNum").html(sales.viewNum);
    }
  });
  setTimeout('getBuyUser()', 20000);
}

$(function(){
  packsInit();
  $(window).scrollWindow($(".gifts"), $('.reviews dl'), ("on"));
  $(window).scrollWindow($(".banner .buybtn"), $('.float'), ("on"));

  $(".textlink").target($("#compare"));
  $(".benfits .detail-list dl").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index() + 1));
    $(".benfits .zoom li").removeClass('active').eq($(this).index() + 1).addClass('active');
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .list-icon li").removeClass('active').eq($(this).index() + 1).addClass('active');
  });
  $(".benfits .list-icon li").hover(function() {
    $(".benfits .showcase .screenshot").css('marginLeft', -555 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
    var num = $(this).index();
    if (num === 0) {
      $(".benfits .detail-list dl").removeClass("active");
    } else {
      $(".benfits .detail-list dl").eq($(this).index() - 1).addClass("active").siblings().removeClass("active");
    }
    $(".benfits .list-icon li").removeClass('active');
    $(this).addClass('active');
  });

  $(".bottombuy").on("mouseover","li",function () {
    var message = {
      index: $(this).index(),
      url: $(this).attr("data-url"),
      ga: $(this).attr("data-ga"),
      price: $(this).attr("data-price"),
      del: $(this).attr("data-del")
    };
    $(this).addClass("active").siblings().removeClass("active");
    $(".bottombuy .box img").stop().animate({"marginLeft": message.index*(-281)}, 400);
    $(".bottombuy .price strong").text(message.price);
    $(".bottombuy .price del").text(message.del);
    $(".bottombuy .buybtn").attr("href", message.url).attr("onclick", message.ga);
  });
});

function getSalesNum(packsNow) {
  var date = new Date();
  var daysDiff = Math.floor((date.getTime() - Date.parse('2018-11-20')) / (3600 * 24 * 1000));
  var buyNum = 3258765 + daysDiff * 59 + (59 - packsNow);
  $('.buyNum').html(commafy(buyNum));
}

function commafy(num) {
  num = num + "";
  num = num.replace(/[ ]/g, "");
  if (num == "") {
    return;
  }
  if (isNaN(num)) {
    return;
  }
  var index = num.indexOf(".");
  if (index == -1) {
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(num)) {
      num = num.replace(reg, "$1 $2");
    }
  } else {
    var intPart = num.substring(0, index);
    var pointPart = num.substring(index + 1, num.length);
    var reg = /(-?\d+)(\d{3})/;
    while (reg.test(intPart)) {
      intPart = intPart.replace(reg, "$1.$2");
    }
    num = intPart + "." + pointPart;
  }
  return num;
}