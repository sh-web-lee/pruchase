 (function($) {
   $.fn.isOnScreen = function(x, y) {
     if (x == null || typeof x == 'undefined') x = 1;
     if (y == null || typeof y == 'undefined') y = 1;
     var win = $(window);
     var viewport = {
       top: win.scrollTop(),
       left: win.scrollLeft()
     };
     viewport.right = viewport.left + win.width();
     viewport.bottom = viewport.top + win.height();
     var height = this.outerHeight();
     var width = this.outerWidth();
     if (!width || !height) {
       return false;
     }
     var bounds = this.offset();
     bounds.right = bounds.left + width;
     bounds.bottom = bounds.top + height;
     var visible = (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
     if (!visible) {
       return false;
     }
     var deltas = {
       top: Math.min(1, (bounds.bottom - viewport.top) / height),
       bottom: Math.min(1, (viewport.bottom - bounds.top) / height),
       left: Math.min(1, (bounds.right - viewport.left) / width),
       right: Math.min(1, (viewport.right - bounds.left) / width)
     };
     return (deltas.left * deltas.right) >= x && (deltas.top * deltas.bottom) >= y;

   };
 })(jQuery);

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
     } else {
       scrollclass.removeClass(ClassName);
     }
   });
 };

 $(function() {
   $(window).on('scroll', function() {
     if ($('.feature-box').isOnScreen(.2, .2)) {
       $('.feature-box dl').addClass("on");
     }
   });
   $(".feature-box .per ").target($("#compare"), 0);
   $(".footbuy li").on("click", function() {
     var index = $(this).index();
     var dataName = $(this).attr("data-num");
     var dataUrl = $(".banner .box").eq(dataName).find(".buybtn").attr("href");
     var dataGa = $(".banner .box").eq(dataName).find(".buybtn").attr("onclick");
     var original = $(".banner .box").eq(dataName).find(".original").text();
     var current = $(".banner .box").eq(dataName).find(".current").text();
     var currentsm = $(".banner .box").eq(dataName).find(".current-sm").text();
     $(".footbuy .price").find(".original").text(original);
     $(".footbuy .price").addClass("active");
     $(".footbuy .price").find(".current").text(current);
     $(".footbuy .price").find(".current-sm").text(currentsm);
     $(this).addClass("active").siblings().removeClass("active");
     $(".footbuy .imgbox").find("img").eq(index).addClass("active").siblings().removeClass("active");
     $(".footbuy .buybtn").attr("href", dataUrl);
     $(".footbuy .buybtn").attr("onclick", dataGa);
   });

   $(".review dl dt .img-box").mouseover(function(event) {
     $(this).parent().parent().addClass("active").siblings().removeClass("active");
   });
   timeInit();
   countdown((".countdown strong"));
 });

 function cSet(cName, cVal) {
   var Days = 2;
   var exp = new Date();
   exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
   document.cookie = cName + "=" + escape(cVal) + ";expires=" + exp.toGMTString();
 }

 function timeInit() {
   var date = new Date();
   var cName = "itdbann" + date.getDate();
   var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
   var nowTime = Math.floor(date.getTime() / 1000);
   if (arr == null) {
     countTime = nowTime + 584;
     cSet(cName, countTime);
   } else {
     countTime = arr[2];
   }
   packsInit();
   getPacks();
   countdown((".countdown strong"));
 }

 var countdown = function(countdown, tType) {
   var expireCheck = getCycleCountdown(countTime);
   $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
   if (expireCheck) {
     expire();
     packsInit();
   } else {
     setTimeout("countdown('" + countdown + "'," + tType + ")", 1);
   }
 };

 function getCycleCountdown(endTime) {
   var datetime = timeCountDown(endTime);
   d = MApp(2.2).packages.zeroize(datetime[0], 2);
   h = MApp(2.2).packages.zeroize(datetime[1], 2);
   i = MApp(2.2).packages.zeroize(datetime[2], 2);
   s = MApp(2.2).packages.zeroize(datetime[3], 2);
   mi = MApp(2.2).packages.zeroize(datetime[4], 3);
   return (eval(datetime.join('+')) == 0);
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

 function packsInit() {
   var date = new Date();
   var cName = "itdbanb" + date.getDate();
   var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
   if (arr == null) {
     packs = 89;
   } else {
     packs = arr[2];
   }
   flipNum(packs);
   zoomout();
 }

 function getPacks() {
   timeCheck();
   setTimeout('getSales()', reTime * 1000);
 }

 function getSales() {
   var date = new Date();
   var nowTime = Math.floor(date.getTime() / 1000);
   var isExpired = (nowTime > countTime) ? 1 : 0;
   $.ajax({
     type: "GET",
     url: "index.php",
     data: "action=getPacks&d=" + date.getDate() + "&isExpired=" + isExpired,
     success: function(res) {
       var sales = JSON.parse(res);
       $("#first").html(sales.firstName);
       $("#last").html(sales.lastName);
       if ((sales.packsNum != packs) && isExpired) {
         packs = sales.packsNum;
         flipNum(packs);
         zoomout();
       }
       timeCheck();
     }
   });
   setTimeout('getSales()', reTime * 1000);
 }

 function timeCheck() {
   var date = new Date();
   var nowTime = Math.floor(date.getTime() / 1000);
   if (countTime - nowTime > 579) {
     reTime = 1.5;
   } else if (nowTime < countTime) {
     reTime = 10;
   } else {
     if (packs > 97) {
       reTime = 1;
     } else if (packs > 94) {
       reTime = 3;
     } else if (packs > 88) {
       reTime = 9;
     } else {
       reTime = 18;
     }
   }
 }

 function expire() {
   $(".banner .box .gift").html('Только <div id="giftnum" class="giftnum"><b><span class="fisrt">*</span><span class="last">*</span></b><b class="shadow"><span class="fisrt">9</span><span class="last">8</span></b></div> Пакетов Остались');
 }

 function zoomout() {
   $(".giftnum .shadow").addClass("zoomout");
   $(".banner .ds-box").append("<span class='dissolve'></span>");
   setTimeout(function() {
     $(".giftnum .shadow").removeClass("zoomout");
     $(".banner .ds-box .dissolve").remove();
   }, 1500);
 }

 function flipNum(packsNum) {
   var firstNum = $('.fisrt');
   var lastNum = $('.last');
   if (packsNum >= 10) {
     firstNum.html(Math.floor(packsNum / 10));
     lastNum.html(packsNum % 10);
   } else {
     firstNum.html(0);
     lastNum.html(packsNum);
   }
 }