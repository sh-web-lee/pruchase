function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length, _time) {
  $(".nwrap .numlist").html('');
  $(".nwrap em").remove();
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(number).length;
  var str = number.toString();
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".nwrap .numlist").append(list);
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#topNum .nwrap").eq(a).append('<em>' + curNum + '</em>');
    $("#centNum .nwrap").eq(a).append('<em>' + curNum + '</em>');
    $("#botNum .nwrap").eq(a).append('<em>' + curNum + '</em>');

    $("#topNum .numlist").eq(a).animate({
      marginTop: -curNum * 30,
    }, _time, function() {
      if (a = 3) {
        $("#topNum .nwrap").eq(3).find("em").css({
          "opacity": 1,
          "fontSize": 22 + "px"
        }).animate({
          "opacity": 0,
          "fontSize": 48 + 'px',
        }, 600);
      }
    });
    $("#centNum .numlist").eq(a).animate({
      marginTop: -curNum * 30,
    }, _time, function() {
      if (a = 3) {
        $("#centNum .nwrap").eq(3).find("em").css({
          "opacity": 1,
          "fontSize": 22 + "px"
        }).animate({
          "opacity": 0,
          "fontSize": 48 + 'px',
        }, 600);
      }
    });
    $("#botNum .numlist").eq(a).animate({
      marginTop: -curNum * 30,
    }, _time, function() {
      if (a = 3) {
        $("#botNum .nwrap").eq(3).find("em").css({
          "opacity": 1,
          "fontSize": 22 + "px"
        }).animate({
          "opacity": 0,
          "fontSize": 48 + 'px',
        }, 600);
      }
    });
  }
}

$(document).ready(function() {
  $('#dg-container').gallery();
  setTimeout('$(".banner .price").removeClass("on").addClass("on");', 300);
  flipNum(55, 4, 100);

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".feature.first h2").offset().top - 200) {
      $(".feature.first .imgbox").removeClass("on").addClass("on");
      setTimeout('$(".feature.first .content").removeClass("on").addClass("on");', 600);
    }
    if ($(window).scrollTop() > $(".feature.first dd").offset().top - 200) {
      $(".feature.second .content").removeClass("on").addClass("on");
      setTimeout('$(".feature.second .imgbox").removeClass("on").addClass("on");', 600);
    }
    if ($(window).scrollTop() > $(".feature.third").offset().top) {
      $(".feature.unique .imgbox,.feature.unique .content").removeClass("on").addClass("on");
    }
    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
      $(".floatlayer").addClass("on");
    } else {
      $(".floatlayer").removeClass("on");
    }
  });
});

function cSet(name, value) {
  var Days = 2;
  var exp = new Date();
  name = name + exp.getDate();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
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

function packsInit() {
  packs = 99;
  getSales(1);
}

function getSales(isInit) {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "newlaunch.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        if (isInit) {
          flipNum(sales.packsNum, 4, 1000);
        } else {
          flipNum(sales.packsNum, 4, 100);
        }
      }
      if (packs > 0) {
        setTimeout('getSales(0)', getReTime());
      }
    }
  });
}

function getReTime() {
  var packsNumTotal = cGet('endbnew_t');
  if (packsNumTotal > 1) {
    if(packs<=3){
      return 200000;
    }
    if ((packsNumTotal - packs) <= 20) {
      return 1000 + (packsNumTotal - packs) * 500;
    } else {
      return (1080 / packsNumTotal) * 1000;
    }
  } else {
    return 20000;
  }
}

function getViewNum() {
  $.ajax({
    type: "GET",
    url: "newlaunch.php",
    data: "action=getViewNum",
    success: function(res) {
      $('.buyNum').html(res);
    }
  });
  setTimeout('getViewNum()', 12000);
}

 $(function() {
   packsInit(1);
   setTimeout('getViewNum()', 12000);
 });