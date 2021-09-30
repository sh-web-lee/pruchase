$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
    else {
      scrollclass.removeClass(ClassName);
    }
  });
};
function numberJump() {
  $(".change-num").prop('number', 50).animateNumber({
    number: 100,
  }, 1000);
}

function sect01() {
  var tl = new TimelineMax();
  tl.to(".bottom-circle", 1, {height:114})
    .to(".completed", .5, {opacity:1},'+=.5')


}

function sect02() {
  var tl = new TimelineMax();
  tl.to(".privacy", 1, {opacity:1,scale: 1},'+=.5')
    .to(".list02 .check", 1, {width:47,backgroundColor:'#326de8',
      onComplete: function() {
        $('.list02 .privacy').addClass('on');
      }
    })
    .to(".list02 .privacy .text", 1, {opacity:1,bottom: 54})
    .to(".list02 .privacy-right", 1, {opacity:1,scale: 1})

}
function maskTimeCountDown() {
  if (maskTime > 0) {
    maskTime--;
    setTimeout('maskTimeCountDown()', 1000);
  } else if ((maskTime == 0)) {
    $(document).bind('mousemove', mouseOut);
  }
}

function mouseOut(e) {
  if (e.clientY < 5) {
    showPop();
    $(document).unbind('mousemove', mouseOut);
  }
}
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}
function flipNum(num, length) {
  $(".listbox").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var _list = '';
  var len = String(number).length;
  var str = number.toString();
  var _box = $(".flipNum");
  var createobj;
  for (var i = 0; i < length; i++) {
    if (length < 2) {
      createobj = $(new Array(3).join('<div class="listbox"><div class="list"></div></div>'));
    } else {
      createobj = $('<div class="listbox"><div class="list"></div></div>');
    }
    //$(".banner .flipNum").append(createobj);
    _box.append(createobj);
  }
  for (var j = 0; j < arr.length; j++) {
    _list += '<b>' + arr[j] + '</b>';
  }
  $(".flipNum .list").append(_list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".banner .flipNum .list").eq(a).animate({
      marginTop: -curNum * 22,
    }, "slow");
  }
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $(".floatlayer .flipNum .list").eq(a).animate({
      marginTop: -curNum * 22,
    }, "slow");
  }
}


var c1 = 0;
var d1 = 0;

$(window).on('scroll', function() {
  if ($(window).scrollTop() > $(".intro").offset().top && $(window).scrollTop() < $(".left-message .message:eq(1)").offset().top -230) {
    $(".title,.change-img").addClass("on");
    $(".list01").addClass("on");
    setTimeout(function() {
      $('.scan').remove();
      c1+=1;
      if(c1==1){
        numberJump();
        sect01();
      }
    }, 2000);
  }
  else {
    $(".title,.change-img").removeClass("on");
  }
  if ($(window).scrollTop() > $(".left-message .message").offset().top +50) {
    $(".list01").removeClass("show");
    $(".list02").addClass("show");
    d1+=1;
    if(d1==1){
      sect02();
    }
  }
  else {
    $(".list01").addClass("show");
    $(".list02").removeClass("show");
  }
  clearTimeout($.data(this, 'scrollTimer'));
});

//next
$(".dg-next").click(function() {
  var message = $('.dg-container ul li:eq(0)');
  $('.dg-container ul li:eq(0)').removeClass("first");
  $('.dg-container ul li:eq(1)').removeClass("two");
  $('.dg-container ul li:eq(2)').removeClass("three");
  $('.dg-container ul li:eq(3)').removeClass("active");
  $('.dg-container ul li:eq(4)').removeClass("four");
  $('.dg-container ul li:eq(5)').removeClass("five");


  $('.dg-container ul').find('li:first').appendTo($('.dg-container ul'));

  $('.dg-container ul li:eq(0)').addClass("first");
  $('.dg-container ul li:eq(1)').addClass("two");
  $('.dg-container ul li:eq(2)').addClass("three");
  $('.dg-container ul li:eq(3)').addClass("active");
  $('.dg-container ul li:eq(4)').addClass("four");
  $('.dg-container ul li:eq(5)').addClass("five");

  var num = $('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
});
//prev
$(".dg-prev").click(function() {
  var message = $('.dg-container ul li:last');

  $('.dg-container ul li:eq(0)').removeClass("first");
  $('.dg-container ul li:eq(1)').removeClass("two");
  $('.dg-container ul li:eq(2)').removeClass("three");
  $('.dg-container ul li:eq(3)').removeClass("active");
  $('.dg-container ul li:eq(4)').removeClass("four");
  $('.dg-container ul li:eq(5)').removeClass("five");


  $('.dg-container ul li:eq(0)').before(message);

  $('.dg-container ul li:eq(0)').addClass("first").addClass("on");
  $('.dg-container ul li:eq(1)').addClass("two");
  $('.dg-container ul li:eq(2)').addClass("three");
  $('.dg-container ul li:eq(3)').addClass("active");
  $('.dg-container ul li:eq(4)').addClass("four");
  $('.dg-container ul li:eq(5)').addClass("five");

  var num = $('.dg-container ul li.active').attr("data-num");
  $('.review .reviews').eq(num).addClass("active").siblings().removeClass("active");
});

(function () {
  //asc
  setTimeout('$(".banner .box").addClass("on");', 500);
  $(window).scrollWindow($(".comparison tr:eq(3)"), $('.feature dl'), ("on"));
  $(window).scrollWindow($(".comparison"), $('.floatlayer'), ("on"));
  packsInit();
  //gifts
  $(".gifts .gifts-message .gifts-box").hover(function () {
    var giftsNum = $(this).index();
    $(this).find("ul").slideDown(300);
    $(this).find(".arrow").hide();
    $(this).siblings().find("ul").slideUp(300, function () {
      $(this).siblings().find(".arrow").show()
    });
  });
  //gifts fold
  $(document).on("mouseover", function (e) {
    if($(e.target).closest('.gifts-box').length == 0) {
      $(".gifts .gifts-message .gifts-box").find("ul").slideUp(300).end().find(".arrow").show();
    }
  });
}());

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function packsInit() {
  packs = 99;
  getSales(1);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xrasce.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        // $(".pickNum").html(packs);
        flipNum(packs, 2);
      }
      if (packs > 0) {
        setTimeout('getSales()', getReTime());
      }
    }
  });
}

function getReTime() {
  var reTime = 20;
  var packsNumTotal = cGet('frascxnovexp_t');
  if (packsNumTotal > 1) {
    if (packs > 32) {
      reTime = (Math.random() > 0.5) ? 0.5 : 2;
    } else {
      reTime = 200 / packsNumTotal;
    }
  }
  return reTime * 1000;
}