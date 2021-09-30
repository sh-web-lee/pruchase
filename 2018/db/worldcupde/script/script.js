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

$(function() {
  $(".mehr").target($("#compare"), 0);
  switchover(".users li", "mouseover", "active", ".review .content > dl");
  $(window).scrollWindow($(".cause"), $('.intro .list'), ("active"));
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  if ($(document).scrollTop() > $(".intro").offset().top - 300) {
    $(".intro .list").addClass("active");
  }
});