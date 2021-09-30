
$(function() {
  var aff = getQueryVariable('AFF')
  if (aff) {
    $(".buybtn").attr('data-product', '').removeClass('paddle_button').attr('href', 'https://www.iobit.com/buy.php?product=sd-acpa');
  }
})

//userreview
function switchover(name,clickname,active,contname) {
  $(name).on(clickname,function(){
    var num = $(this).index();
    $(name).eq(num).addClass(active).siblings().removeClass(active);
    $(contname).eq(num).addClass(active).siblings().removeClass(active);
  });
}

//floatlayer
function showFloat(subject,target){
  var scrollHeight = $(subject).offset().top;
  if ($(window).scrollTop() > scrollHeight) {
    $(target).addClass('on');
  } else {
    $(target).removeClass('on');
  }
}

function getQueryVariable(variable){
  let query = window.location.search.substring(1);
  let vars = query.split("&");
  for (let i=0;i<vars.length;i++) {
    let pair = vars[i].split("=");
    if(pair[0] == variable){return pair[1];}
  }
  return(false);
}

// buyProduct
function buyProduct() {
  window.location.href = 'https://www.iobit.com/buy.php?product=sd-acpa';
}

$(document).ready(function() {

  //btn
  $(".buybtn .inner").on("mouseover",function(){
    $(this).parent(".buybtn").addClass("active");
  });
  $(".buybtn .inner").on("mouseout",function(){
    $(this).parent(".buybtn").removeClass("active");
  });

  switchover(".users li", "mouseover", "active", ".review .content > dl");
  $(window).on('scroll', function () {
    showFloat(".banner .buybtn:last","#floatlayer");
  });
});