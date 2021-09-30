//floatlayer
function showFloat(subject, target) {
  var scrollHeight = $(subject).offset().top;
  if ($(window).scrollTop() > scrollHeight) {
    $(target).addClass('on');
  } else {
    $(target).removeClass('on');
  }
}
function switchHead(className,PrevNext){
	var activeIndex = $(className).find('.active').index(),switchLen = $(className).children().length;
	$(className).children().removeClass('active')
	if(PrevNext == 'prev'){
		if(activeIndex > 0){
			$(className).children(':eq(' + (activeIndex - 1) + ')').addClass('active')
		}
		else{
			$(className).children(':eq(' + (switchLen - 1) + ')').addClass('active')
		}
		
	}else if(PrevNext == 'next'){
		if(activeIndex < (switchLen -1)){
			$(className).children(':eq(' + (activeIndex + 1) + ')').addClass('active')
		}
		else{
			$(className).children(':eq(0)').addClass('active')
		}

	}
	activeIndex = $(className).find('.active').index()
	switchText(activeIndex)
}
function switchText(index){
	
	$('.dg-wrapper .reviews').removeClass('active')
	$('.dg-wrapper .reviews:eq(' + index + ')').addClass('active')
	console.log(index)
}

$(document).ready(function() {

  //btn
  $(".buybtn .inner").on("mouseover", function() {
    $(this).parent(".buybtn").addClass("active");
  });
  $(".buybtn .inner").on("mouseout", function() {
    $(this).parent(".buybtn").removeClass("active");
  });

  $(window).on('scroll', function() {
    showFloat(".banner .buybtn:last", "#floatlayer");
  });

  $(".dg-next").click(function() {
    switchHead('.switchHead','next');
  });
  $(".dg-prev").click(function() {
	switchHead('.switchHead','prev');
  });
});