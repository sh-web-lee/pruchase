$.fn.target = function (target, yoffset) {
  $(this).click(function () {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

function getScrollTop()
{
  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var scrollHeight = $(document).height();
    var windowHeight = $(this).height();
    if (scrollTop + windowHeight < scrollHeight && scrollTop > 200) {
      $(".floatlayer").addClass("on");
      $(".backtotop .box").addClass("on");
    } else if (scrollTop + windowHeight === scrollHeight) {
      // $(".floatlayer").removeClass("on");
    } else if (scrollTop === 0) {
      $(".floatlayer").removeClass("on");
      $(".backtotop .box").removeClass("on");
    }
  });
}

$(function () {
  $(".intro .klicken").target($("#compare"), 0);
  $(".backtotop").target($(".banner"), 0);
  getScrollTop();
  //switchover
  var cArr = ["shot3", "shot2", "shot1"];
  var index = 0;
  //next
  $(".next").click(function () {
    nextimg();

  });
  //prev
  $(".prev").click(function () {
    previmg();
  });
  //previmg
  function previmg() {
    cArr.unshift(cArr[2]);
    cArr.pop();
    $(".introimg li").each(function (i, e) {
      $(e).removeClass().addClass(cArr[i]);
    });
    index--;
    if (index < 0) {
      index = 2;
    }
    mask();
  }

  //nextimg
  function nextimg() {
    cArr.push(cArr[0]);
    cArr.shift();
    $(".introimg li").each(function (i, e) {
      $(e).removeClass().addClass(cArr[i]);
    });
    index++;
    if (index > 2) {
      index = 0;
    }
    mask();
  }

  //mask
  function mask() {
    $(".intro .mask").addClass("on");
    setTimeout('$(".intro .mask").removeClass("on");', 200);
  }

  $(document).on("click", ".left-mask", function () {
    previmg();
    return false;
  });

  $(document).on("click", ".right-mask", function () {
    nextimg();
    return false;
  });

  //Switch
  $('#floatlayer').on('click', 'li', function () {
    var $this = $(this);
    if (!$this.hasClass('active')) {
      $this.closest('ul').find('li').removeClass('active');
      $this.addClass('active');


    }

    var index = $this.closest('ul').find('li').index($this);
    if (index === 0) {
      $this.closest('.wrapper').find('.floatlayer-right').find('em').addClass('up');
    } else {
      $this.closest('.wrapper').find('.floatlayer-right').find('em').removeClass('up');
    }

    var url = $this.data('url');
    $this.closest('.wrapper').find('.floatlayer-right').find('.buy-btn').attr('href', url);
  });
});