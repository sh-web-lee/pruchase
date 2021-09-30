$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    }
    else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$(function () {
  //review
  light();
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $(window).scrollWindow($(".intro"), $('.intro dl'), ("on"));

});
var className = ["one", "two", "three", "four","five"];
var index = 1;
var nextFun = function() {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $(".review ul li").eq(i).attr("class", className[i]);
  }
  if (index < 4) {
    index++;
    review(index);
  } else {
    index = 0;
    review(index);
  }
};

var prevFun = function() {
  var addName = className.shift();
  className.push(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $(".review ul li").eq(i).attr("class", className[i]);
  }
  if (index > 0) {
    index--;
    review(index);
  } else {
    index = 4;
    review(index);
  }

};

var review = function(index) {
  $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
};



function light() { 
  $(".light02").addClass("hide");
  $(".light").removeClass("hide");
  setTimeout(function () {
     $(".light").addClass("hide");
     $(".light01").removeClass("hide");
  }, 500);
  setTimeout(function () {
     $(".light,.light01").addClass("hide");
     $(".light02").removeClass("hide");
  }, 1000);
  setTimeout("light()",1500)
}