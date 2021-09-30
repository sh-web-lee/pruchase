  function PrefixInteger(num, length) {
    return (Array(length).join('0') + num).slice(-length);
  }
  (function($) {
    $.getUrlParam = function(name) {
      var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
      var r = window.location.search.substr(1).match(reg);
      if (r != null) return unescape(r[2]);
      return '';
    }
  })(jQuery);

  function flipNum(num, length) {
    $(".packsNum").html(num);
    $(".packbox .list b").text("");
    var num = PrefixInteger(num, length);
    var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
    var list = '';
    var len = String(num).length;
    var str = num.toString();
    var box = $(".packbox");
    for (var j = 0; j < arr.length; j++) {
      list += '<strong>' + arr[j] + '</strong>';
    }
    $(".countdown1 .scroll-tick").html(list);
    $(".countdown2 .scroll-tick").html(list);
    for (var a = 0; a <= len; a++) {
      var curNum = str.substring(a, a + 1);
      $(".countdown1 .scroll-tick").eq(a).animate({
        marginTop: -(9 - curNum) * 29,
      }, "slow");
      $(".countdown2 .scroll-tick").eq(a).animate({
        marginTop: -(9 - curNum) * 45,
      }, "slow");
    }
  }

  function popDate(num, length) {
    var num = PrefixInteger(num, length);
    var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
    var list = '';
    var len = String(num).length;
    var str = num.toString();
    for (var j = 0; j < arr.length; j++) {
      list += '<strong>' + arr[j] + '</strong>';
    }
    $(".countdown3 .scroll-tick").html(list);
    for (var a = 0; a <= len; a++) {
      var curNum = str.substring(a, a + 1);
      $(".countdown3 .scroll-tick").eq(a).animate({
        marginTop: -(9 - curNum) * 24,
      }, "slow");
    }
  }

  function focus() {
    $(".banner .reduce").css({
      "opacity": 1,
      "top": 60,
      "zIndex": 8
    }).animate({
      "opacity": 0,
      "top": 0,
      "zIndex": -9
    }, 500);
  }

  function soldout() {
    var aff = $.getUrlParam('aff');
    var tw = MApp(2.2).datetime.getTimeZone();
    $(".floatlayer,.banner").addClass("soldout");
    $(".floatlayer .number").html("<h2>74% OFF</h2> <p>Fully protect and optimize your PC!</p>");
    $(".floatlayer .price p").html("<strong> $12.99</strong> <del>$49.99</del>");
    $(".banner .message p:eq(1),.gift-message").remove();
    var soldhref = "https://www.iobit.com/buy.php?product=ascu131299&ref=en-ascu3pcsoldoutcd6" + refStr + "&aff=" + aff + "&refs=purchase_ascu&tw=" + tw;
    var soldga = "ga('send', 'event', 'ascusoldoutbuy', 'buy', 'ascupurchase-1299'); "
    $(".floatlayer .buybtn").html("Activate Now")
    $('.buybtn').attr('href', soldhref);
    $('.buybtn').attr('onclick', soldga);
  }

  function popCongrats() {
    $(".congrats-pop,.popbg").addClass("active");
  }

  function expired() {
    $(".ctable table td.itema").html("Expired")
    $(".ctable table tr.gray td.itema").html("")
  }
  $(document).ready(function() {
    $('#dg-container').gallery();
    $(".congrats-pop .close").click(function() {
      $(".congrats-pop,.popbg").removeClass("active");
    });
    //floatlayer
    $(window).on('scroll', function() {
      var scrollHeight = $(".banner .buybtn").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $('.floatlayer').addClass('on');
      } else {
        $('.floatlayer').removeClass('on');
      }
    });
  });

  $(function() {
    var stStr = MApp(2.2).url.getParameters('st');
    var stArr = ['pm_t5', 'pm_p3', 'pm_r2'];
    if ($.inArray(stStr, stArr) != '-1') {
      expired();
    }
    packsInit();
    setTimeout("getViewNum()", 30000);
    var paramTo = MApp(2.2).url.getParameters('to');
    if (paramTo != 'buyascu') {
      var maskStatus = cGet('enascublack2020cd6_s');
      if (maskStatus != -1) {
        $(document).bind('mousemove', mouseOut);
      }
    }
  });

  function showPop() {
    $('.popout').addClass('on');
  }

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
      url: "cd6.php",
      data: "action=getPacks&d=" + date.getDate(),
      success: function(res) {
        var sales = JSON.parse(res);
        if (sales.packsNum != packs) {
          packs = sales.packsNum;
          flipNum(packs, 3);
          if (isInit) {
            setTimeout('focus()', 800);
          } else {
            focus();
          }
          if ((packs <= 0) && (!$(".floatlayer,.banner").hasClass('soldout'))) {
            soldout();
          }
        }
        if (packs > 0) {
          setTimeout('getSales(0)', getReTime());
        }
      }
    });
  }

  function getReTime() {
    var packsNumTotal = cGet('enascublack2020cd6_t');
    if (packsNumTotal > 1) {
      return (1200 / packsNumTotal) * 1000;
    } else {
      return 200000;
    }
  }

  function getViewNum() {
    $.ajax({
      type: "GET",
      url: "cd6.php",
      data: "action=getViewNum",
      success: function(viewNum) {
        if (!isNaN(viewNum)) {
          $(".viewNum").html(viewNum);
        }
      }
    });
    setTimeout("getViewNum()", 30000);
  }

  function mouseOut(e) {
    if (e.clientY < 3) {
      var cName = 'enascublack2020cd6_s';
      cSet(cName, -1);
      timeInit();
      $(document).unbind('mousemove', mouseOut);
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

  function getCycleCountdown(endTime) {
    var datetime = timeCountDown(endTime);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
  }

  var countdown = function() {
    var statusNow = statusSet();
    getCycleCountdown(countTime);
    popDate(s, 2);
    if (statusNow == 1) {
      setTimeout("countdown()", 1000);
    }
  };

  function statusSet() {
    var statusNow = statusCheck();
    if (statusNow == 2) {
      if ($(".congrats-pop,.popbg").hasClass('active')) {
        $(".congrats-pop,.popbg").removeClass('active');
      }
    }
    return statusNow;
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