$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active");
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
  $(".backtotop").target($(".banner"), 0);
  $(window).scrollWindow($(".threepoints"), $('.backtotop'), ("on"));
  $(".handle li").userMouseover($(".review .reviews"));
  $(".learn a").mouseover(function() {
    $(".learn .drivers").addClass("active");
  });
  $(".learn a").mouseout(function() {
    $(".learn .drivers").removeClass("active");
  });
});

function dlCount(){
  $.ajax({
    type: "GET",
    url:'index.php?action=downloadCount',
  })
}