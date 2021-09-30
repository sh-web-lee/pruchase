$.fn.userMouseover = function(UserMessage) {
  $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
  });
};

function strFormat(str) {
  return str.replace(/,/g, '.');
}

$(function() {
  $(".users li").userMouseover($(".content dl"));
  $('.buyNum').html(strFormat($('.buyNum').html()));
});