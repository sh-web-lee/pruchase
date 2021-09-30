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
    }
  });
};

var className = ["one", "two", "three", "four", "five"];
var index = 1;
var nextFun = function() {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $(".review ul li").eq(i).attr("class", className[i]);
  }
  if (index < 4) {
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
    index = 4;
    review(index);
  }

};

var review = function(index) {
  $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
};

var packs = 50;
$(function() {

  $(".more").target($(".comparison"));

  $(window).scrollWindow($(".intro"), $('.intro dl'), ("on"));

  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));

  setTimeout(function() {
    $(".banner .right-box").addClass("on");
  }, 500);
  setTimeout(function() {
    $(".banner .left-box").addClass("on");
  }, 2000);
  //benifts
  $(".benfits .detail-list dl").hover(function() {
    $(this).addClass("active").siblings().removeClass("active");
    $(".benfits .showcase .screenshot").css('marginLeft', -405 * ($(this).index()));
    $(".benfits .zoom li").removeClass('active').eq($(this).index()).addClass('active');
  });
  $(".reviews .img-box li").hover(function() {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(".reviews .message li").eq(num).addClass("active").siblings().removeClass("active");
  });
});

// progressbar
function focus() {
  $(".banner .raduem").css({
    "opacity": 1,
    "top": -14,
    "zIndex": 8
  }).animate({
    "opacity": 0,
    "top": -35,
    "zIndex": -9
  }, 800);
  $(".raduem-box").css({
    "opacity": 1,
    "top": 182,
    "zIndex": 8
  }).animate({
    "opacity": 0,
    "top": 92,
    "zIndex": -9
  }, 800);
}

function getPacksNum() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xrdbe.php",
    data: "action=getPacks&d=" + date.getDate() + "&r=" + Math.random(),
    success: function(res) {
      var packsInfo = JSON.parse(res);
      if (packs != packsInfo['packsNum']) {
        bynum = 680 + 50 - parseInt(packsInfo['packsNum']);
        $('#bynum').html('8,007,' + bynum);
        packs = packsInfo['packsNum'];
        //showPacksNum(packs);
        flipNum(packs, 2);
        flipNum2(packs, 2);
      }
      var viewNum = packsInfo['viewNum'];
      $('.packsNum').html(packs);
      if (packs < 5) {
        $('.viewNum').html(viewNum);
      }
    }
  });
  if (packs > 45) {
    setTimeout('getPacksNum()', 5000);
  } else {
    setTimeout('getPacksNum()', 15000);
  }
}

$(function() {
  packsInit();
});

function flipNum(num, length) {
  var num = PrefixInteger(num, length)
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
      marginTop: -curNum * 20,
    }, "slow");
  }
  focus();
}

function flipNum2(num, length) {
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
    _box.append(createobj);
  }
  for (var j = 0; j < arr.length; j++) {
    _list += '<b>' + arr[j] + '</b>';
  }
  $(".list").append(_list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#flip .list").eq(a).animate({
      marginTop: -curNum * 22,
    }, "slow");
  }
}

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function packsInit() {
  getPacksNum();
  //var packs=50;
  flipNum(packs, 2);
  flipNum2(packs, 2);
  //$('.packsNum').html(packs);
  //setTimeout('getPacksNum()', 1000);
}