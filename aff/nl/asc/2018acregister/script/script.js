// review
$('.review .handle li').hover(function() {
    $(this).addClass('active').siblings().removeClass('active');
    $('.review .reviews').eq($(this).index()).addClass('active').siblings().removeClass('active');
});

  
//floatlayer
function showFloat(subject,target){
  var scrollHeight = $(subject).offset().top;
  if ($(window).scrollTop() > scrollHeight) {
    $(target).addClass('on');
  } else {
    $(target).removeClass('on');
  }
}

$(document).ready(function() {

  //btn
  $(".buybtn .inner").on("mouseover",function(){
    $(this).parent(".buybtn").addClass("active");
  });
  $(".buybtn .inner").on("mouseout",function(){
    $(this).parent(".buybtn").removeClass("active");
  });
  
  $(window).on('scroll', function () {
    showFloat(".banner .buybtn:last","#floatlayer");
  });
});