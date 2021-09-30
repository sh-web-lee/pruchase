//userreview 
function switchover(name,clickname,active,contname) {
	console.log(123)
  $(name).on(clickname,function(){
    var num = $(this).index();
    $(name).eq(num).addClass(active).siblings().removeClass(active);
    $(contname).eq(num).addClass(active).siblings().removeClass(active);
  });
}

//floatlayer
function showFloat(subject, target) {
  var scrollHeight = $(subject).offset().top;
  if ($(window).scrollTop() > scrollHeight) {
    $(target).addClass('on');
  } else {
    $(target).removeClass('on');
  }
}


$(document).ready(function() {
	
  //btn
  $(".buybtn .inner").on("mouseover", function() {
    $(this).parent(".buybtn").addClass("active");
  });
  $(".buybtn .inner").on("mouseout", function() {
    $(this).parent(".buybtn").removeClass("active");
  });
	
	switchover(".users li", "mouseover", "active", ".review .content > dl");
	
  $(window).on('scroll', function() {
    showFloat(".banner .buybtn:last", "#floatlayer");
  });
  
	
 
});