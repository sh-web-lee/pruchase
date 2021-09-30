 //  countdown 
    $(function () {
      countdown(("#countdown strong"));
      countdown(("#float-countdown strong"));;
    });

    var countdown = function (countdown){
      getCycleCountdown();
      $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
      setTimeout("countdown('"+ countdown +"')", 1);
    };
    function getCycleCountdown () {
      var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
      var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
      d = MApp(2.2).packages.zeroize(datetime[0], 2);
      h = MApp(2.2).packages.zeroize(datetime[1], 2);
      i = MApp(2.2).packages.zeroize(datetime[2], 2);
      s = MApp(2.2).packages.zeroize(datetime[3], 2);
      mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    }

    // review
    let reviewArrays = ["far-left","on-left","on-middle","on-right"];
    let reviewIndex = 0;
    // previous page
    function prevFun() {
      reviewArrays.unshift(reviewArrays[3]);
      reviewArrays.pop();
      $("ul.review-content li").each(function (i,e) {
        $(e).removeClass().addClass(reviewArrays[i]);
      });
      reviewIndex --;
      if(reviewIndex < 0){
        reviewIndex = 3;
      }
    }
    // next page
    function nextFun() {
      reviewArrays.push(reviewArrays[0]);
      reviewArrays.shift();
      $("ul.review-content li").each(function (i,e) {
        $(e).removeClass().addClass(reviewArrays[i]);
      });
      reviewIndex ++;
      if(reviewIndex > 3){
        reviewIndex = 0;
      }
    }

    // floatlayer
    $(window).on('scroll', function () {
      var scrollHeight = $(".header .attention").offset().top;
      if ($(window).scrollTop() > scrollHeight) {
        $('.floatlayer').addClass('on');
      } else {
        $('.floatlayer').removeClass('on');
      }
    });

    //
    $("a.intro").on("click",function() { 
    var Theigth = $("#comparetab").offset().top;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  });