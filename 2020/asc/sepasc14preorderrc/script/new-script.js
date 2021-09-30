function packNum(number, starnumber) {
    $('.buyNum').prop('number', starnumber).animateNumber({
      number: number
    }, 1500);
  }
  
  function PrefixInteger(num, length) {
    return (Array(length).join('0') + num).slice(-length);
  }
  
  function flipNum(num, length, _time) {
    $(".nwrap .numlist").html('');
    // $(".banner .price .soldMsg").hide();
    $(".nwrap em").remove();
    var number = PrefixInteger(num, length);
    var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    var list = '';
    var len = String(number).length;
    var str = number.toString();
    for (var j = 0; j < arr.length; j++) {
      list += '<span>' + arr[j] + '</span>';
    }
    $(".minpro").css('width', num * 1.5)
    $(".pro_icon").css('left', num * 1.5)
    $(".nwrap .numlist").append(list);
    for (var a = 0; a <= len; a++) {
      var curNum = str.substring(a, a + 1);
      $("#topNum .nwrap").eq(a).append('<em>' + curNum + '</em>');
      $("#botNum .nwrap").eq(a).append('<em>' + curNum + '</em>');
  
      $("#topNum .numlist").eq(a).animate({
        marginTop: -curNum * 27,
      });
      $("#botNum .numlist").eq(a).animate({
        marginTop: -curNum * 49,
      });
    }
  }
  
  
  function soldOut() {
    var aff = MApp(2.2).url.getParameters('aff');
    $(".banner,.floatlayer").addClass("soldout")
    $(".banner .price .Presale").remove();
    $(".banner .price .soldMsg").show();
    $(".banner.soldout .price").css('marginTop', 65);
    $(".price strong").html("$<b>16</b>.77 <span class='deltext'>$49.99</span>")
    $(".banner h1").html("Get PRO Edition with <span class='soldouttxt'>60% OFF</span>")
    $(".banner .numbox").remove();
    $(".buybtn").html("BUY NOW")
    $(".floatlayer .numbox").html("Get PRO Edition with <span class='botsoldouttxt'>60% OFF</span>")
    $(".buybtn").attr({
      "href": 'https://www.iobit.com/buy.php?product=asc14preorder1677&ref=en-asc14preorderrcsoldout' + refStr + '&aff=' + aff + '&refs=purchase_asc&tw=-8',
      "onclick": "ga('send', 'event', 'asc3pcbuy', 'buy', 'asc14predorderrc');"
    });
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
  var copypacks;
  function packsInit() {
    packs = 99;
    getSales(1);
  }
  
  function numberJump(obj, num, time) {
    var num2 = $(obj).text();
    $(obj).prop('number', num).animateNumber({
      number: num2,
    }, time);
  }
  
  function getSales(isInit) {
    var date = new Date();
    $.ajax({
      type: "GET",
      url: "asc14preorder.php",
      data: "action=getPacks&d=" + date.getDate(),
      success: function (res) {
        var sales = JSON.parse(res);
        if (sales.packsNum != packs) {
          packs = sales.packsNum;
          copypacks = packs
          if (isInit) {
            flipNum(sales.packsNum, 3, 1000);
          } else {
            flipNum(sales.packsNum, 3, 500);
          }
          if ((packs <= 0) && (!$(".banner,.floatlayer").hasClass('sold'))) {
            soldOut();
          }
        }
        if (packs > 0) {
          $(window).unload(function () {
            packs = cGet('enascrc_p');
          });
          setTimeout('getSales(0)', getReTime());
        }
      }
    });
  }
  
  function getReTime() {
    var packsNumTotal = cGet('enascrc_t');
    if (packsNumTotal > 1) {
      if ((packsNumTotal - packs) <= 30) {
        retime = (Math.random() > 0.5) ? 2 : 6
        return retime * 1000;
      } else {
        if(packsNumTotal <= 78 && packsNumTotal >= 71){
          retime = (Math.random() > 0.5) ? 7.5 : 9.5;
        }else{
          retime = (Math.random() > 0.5) ? 9 : 11;
        }
        return retime * 1000;
      }
    } else {
      return 20000;
    }
  }
  
  function getViewNum() {
    $.ajax({
      type: "GET",
      url: "asc14preorder.php",
      data: "action=getViewNum",
      success: function (res) {
        $('.buyNum').html(res);
      }
    });
    setTimeout('getViewNum()', 12000);
  }
  $(document).ready(function() {
    
    // if(!$(".banner,.floatlayer").hasClass('sold')){
    //   setRoll()
    // }
    
  
  });
  function setRoll() {
    // 修改第一步
    // packsInit(1);
    // 数字滚动
    var r1 = new DigitRoll({
      container: '#numlist01',
    });
    var r2 = new DigitRoll({
      container: '#numlist02',
    });
    var r3 = new DigitRoll({
      container: '#numlist03',
    });
    var r4 = new DigitRoll({
      container: '#numlist04',
    });
    var r5 = new DigitRoll({
      container: '#numlist05',
    });
    var r6 = new DigitRoll({
      container: '#numlist06',
    });
    r1.roll(5)
    r2.roll(0)
    r3.roll(0)
    r4.roll(5)
    r5.roll(0)
    r6.roll(0)
    setTimeout(function () {
      //$(".progreBox .minpro").addClass("minp-active")
      //$(".progreBox .pro_icon").addClass("pro-active")
      r1.roll(0)
      r2.roll(7)
      r3.roll(7)
      r4.roll(0)
      r5.roll(7)
      r6.roll(7)
  
    }, 1000);
  
    packsInit(1)
  }
  $(function () {
    var isSession = sessionStorage.getItem('dercc_down_time');
    if(!isSession){
      setRoll()
      sessionStorage.setItem('dercc_down_time', true);
    }else{
      $(".progreBox .minpro").removeClass("minp-active")
      $(".progreBox .pro_icon").removeClass("pro-active")
      packsInit(1)
    }
    setTimeout('getViewNum()', 12000);
    $(".review  .change span").click(function (event) {
      var num = $(this).index();
      $(this).addClass("active").siblings().removeClass("active");
      $(".review ul li").eq(num).addClass("active").siblings().removeClass("active");
      $(".review .content dl").eq(num).addClass("active").siblings().removeClass("active");
    });
  });
  //scroll
  var e = 0;
  var c = 0;
  var s = 0;
  var d = 0;
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > $(".banner .buybtn").offset().top) {
      $('.floatlayer').addClass('on');
      $('.feature-box .ai').addClass('on');
      $('.whyGet .aiCon').addClass('on');
      $('.whyGet .quickerCon').addClass('on');
      $('.whyGet .why-left').addClass('on');
      $('.whyGet .why-right').addClass('on');
      setTimeout(function () {
        $('.whyGet .minCircle').addClass('minRotate')
      }, 1000)
    } else {
      $('.floatlayer').removeClass('on');
    }
    // tab
    if ($(window).scrollTop() > $(".whyGet .why-center").offset().top) {
  
      $('.preTab-nav li').click(function () {
  
        var i = $(this).index();
        featureChange(i, this);
        // $(this).addClass('navactive').siblings().removeClass('navactive');
  
        // $('.preTab-list .list-item').eq(i).show().siblings().hide();
  
      });

      if ($(document).scrollTop() > $(".preNum").offset().top + 800) {
        if(d===0) {
        if (e === 0) {
          e++;
          setTimeout(Optimization(), 900);
        }
        // $(".feature").addClass("action");
        // $("html, body").animate({scrollTop: 835}, 'slow');
        featureChange(pageIndex);
        actFeature();
        d++;
      }
  
      }else{
        endFeature()
      }
  
  
  
  
  
  
    }
    // tab end
    $("[data-name^='animation']").each(function (i) {
      if ($(document).scrollTop() > $(this).offset().top - 500) {
        $(this).find(".animation").addClass('on');
      }
    });
  });
      //动画Optimization
      function Optimization() {
  
        $(".preNum .rocketIcon").addClass("rocketPlayon");
        $(".preNum .listCon01").addClass("listCondely")
        $(".preNum .listCon01").addClass("on")
      }
      //动画Protection
      function play2() {
        setTimeout(function () {
          $(".preTab-list .listitem02 .light").addClass("on")
            $(".preTab-list .list001 .line").animate({
              height: '59px'
            }, 200);
            $(".preTab-list .list002 .line").animate({
              height: '48px'
            }, 200);
            $(".preTab-list .list003 .line").animate({
              height: '43px'
            }, 200);
          setTimeout(function () {
            $(".preTab-list .list001 .line").animate({
              width: '125px'
            }, 300);
            $(".preTab-list .list002 .line").animate({
              width: '101px'
            }, 300);
            $(".preTab-list .list003 .line").animate({
              width: '50px'
            }, 300);
            $(".preTab-list .safe").addClass('on');
            $(".preTab-list img").addClass('on');
            $(".preTab-list .listitem02 .list004").addClass('on')
          }, 200);
  
  
          $(".preNum .listCon02").addClass("listCon02dely")
          $(".preNum .listCon02").addClass("on")
        }, 100)
  
      }
  
      function Protection() {
        c++;
        play2();
      }
  
      // wheel
      var pageIndex = 0;
      var startTime = 0;
      var endTime = 0;
      // actFeature();
      //actFeature
      function actFeature() {
        $(".preNum").each(function (index, ele) {
          ele.addEventListener('wheel', wheelFun);
        });
      }
  
      function wheelFun(event) {
        startTime = new Date().getTime();
        if ((endTime - startTime) < -1000) {
          if (event.deltaY > 0) {
            event.preventDefault();
            pageIndex++;
            if (pageIndex === 1) {
              if (c === 0) {
                setTimeout('actCleaner()', 900);
              }
            }
            if (pageIndex > 1) {
              pageIndex = 1;
              $("html, body").stop().animate({
                scrollTop: 2200
              }, 'slow');
              endFeature();
            }
            featureChange(pageIndex);
            endTime = new Date().getTime();
          }
        } else {
          event.preventDefault();
        }
      }
      //endFeature
      function endFeature() {
        $(".preNum").each(function (index, ele) {
          ele.removeEventListener('wheel', wheelFun);
        });
      }
      //feature
      function featureChange(idx, that) {
        if (idx === 1 && c === 0) {
          setTimeout(Protection(), 900);
        }
        $('.preTab-list .list-item').eq(idx).show().siblings().hide();
  
        $('.preTab-nav li').eq(idx).addClass('navactive').siblings().removeClass('navactive');
  
      }
  