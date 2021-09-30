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

  var countdown = function(countdown) {
    getCycleCountdown();
    $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    setTimeout("countdown('" + countdown + "')", 1);
  };

  function getCycleCountdown() {
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
  }


 $(function() {
   $(window).on('scroll', function() {
     if ($('.feature-box').isOnScreen(.2, .2)) {
       $('.feature-box dl').addClass("on");
     }
   });
   $(".feature-box .per ").target($("#compare"), 0);
   $(".review dl dt .img-box").mouseover(function(event) {
     $(this).parent().parent().addClass("active").siblings().removeClass("active");
   });
   countdown((".countdown:eq(0) b"));
   countdown((".countdown:eq(1) b"));
   packsInit();
 });

 
function reduce(number, starnumber) {
  $('.reducebox').append('<span class="reduce"></span>');
  $(".reduce").addClass("reduceNum");
  $('.giftnum').prop('number', starnumber).animateNumber({
    number: number
  }, 1500);
  setTimeout('$(".reduce").remove()', 1100);
}

 function packsInit() {
   var date = new Date();
   var cName = "rudb" + date.getDate();
   var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
   if (arr == null) {
     packs = 80;
   } else {
     packs = arr[2];
   }
   reduce(packs, 80);
   setTimeout('getPacks()', 7500);
 }

 function getPacks() {
   var date = new Date();
   $.ajax({
     type: 'GET',
     url: 'index.php',
     data: 'action=getSales&d=' + date.getDate(),
     success: function(sPacks) {
       if (!isNaN(sPacks)) {
         if (sPacks != packs) {
           reduce(parseInt(sPacks), parseInt(packs));
           packs = sPacks;
         }
       }
     }
   });
   setTimeout('getPacks()', 7500);
 }
