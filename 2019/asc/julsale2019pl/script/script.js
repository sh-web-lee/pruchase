$.fn.scrollWindow=function(topheight,scrollclass,ClassName){
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }else {
      scrollclass.removeClass(ClassName);
    }
  });
};

var index = 0;
var slideIn = setInterval(function () {
  $(".banner .middle-message ul li").eq(index).addClass("on");
  index++;
  if(index >=  $(".banner .middle-message ul li").length ) {
    clearInterval(slideIn);
  }
}, 50);

//var viewNum = 58241;
//var countdown = setInterval(function () {
//  fillIn(viewNum);
//  viewNum--;
//  if(viewNum <= 58141) {
//    clearInterval(countdown);
//  }
//}, 3000);

var fillIn = function(viewNum){
  viewNum = viewNum.toString();
  for(var i=0; i<viewNum.length; i++){
    $(".viewNum strong").eq(i).text(viewNum[i]);
  }
};

var userIndex = 0;
var userMouseover = function() {
  if(userIndex < $(".review-message dl").length-1) {
    userIndex++;
    $(".review-message dl").eq(userIndex).addClass("active").siblings().removeClass("active");
  } else {
    userIndex = -1;
    userMouseover();
  }
};


$(function () {
  $(window).scrollWindow($(".banner .buybtn"), $('.feature dl'),("on"));
  $(window).scrollWindow($(".feature dl"), $('.benefits ul li'),("on"));
});