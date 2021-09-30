//userreview 
function switchover(name, clickname, active, contname) {
  $(name).on(clickname, function() {
    var num = $(this).index();
    $(name).eq(num).addClass(active).siblings().removeClass(active);
    $(contname).eq(num).addClass(active).siblings().removeClass(active);
  });
}

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

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

$(function() {
  $(".compareBtn").target($("#compare"), 0);
  $('#dg-container').gallery();
  switchover(".users li", "mouseover", "active", ".review .content > dl");
  $(window).scrollWindow($(".banner .buybtn:last"), $('.floatlayer'), ("on"));
  $(window).on('scroll', function() {
    if ($('.banner').isOnScreen(0.5, 0.5)) {
      $(".floatlayer li").removeClass('active');
      $(".floatlayer .top").addClass('active');
    } else if ($('#highlights').isOnScreen(0.5, 0.5)) {
      $(".floatlayer li").removeClass('active');
      $(".floatlayer .highlights").addClass('active');
    } else if ($('#reviews').isOnScreen(0.5, 0.5)) {
      $(".floatlayer li").removeClass('active');
      $(".floatlayer .reviews").addClass('active');
    } else if ($('#compare').isOnScreen(0.5, 0.5)) {
      $(".floatlayer li").removeClass('active');
      $(".floatlayer .compare").addClass('active');
    }
  });
});