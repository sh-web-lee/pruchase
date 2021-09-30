var countdown = function (countdown){
  getCycleCountdown();
  $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
  setTimeout("countdown('"+ countdown +"')", 1);
};
function getCycleCountdown () {
  var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
  var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
  d = MApp(2.2).packages.zeroize(datetime[0], 2);
  h = MApp(2.2).packages.zeroize(datetime[1], 2);
  i = MApp(2.2).packages.zeroize(datetime[2], 2);
  s = MApp(2.2).packages.zeroize(datetime[3], 2);
  mi = MApp(2.2).packages.zeroize(datetime[4], 3);
}

var className = ["one", "two", "three", "four"];
var index = 1;
var nextFun = function() {
  var addName = className.pop();
  className.unshift(addName);
  for (var i = 0; i < $(".review ul li").length; i++) {
    $(".review ul li").eq(i).attr("class", className[i]);
  }
  if (index < 3) {
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
    index = 3;
    review(index);
  }

};

var review = function(index) {
  $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
};


(function () {
  //asc
  setTimeout('$(".banner .box").addClass("on");', 500);
  //countdown
  countdown((".banner .countdown strong"));
  countdown((".bottombuy .countdown strong"));
  //gifts
  $(".gifts .gifts-message .gifts-box").hover(function () {
    var giftsNum = $(this).index();
    $(this).find("ul").slideDown(300);
    $(this).find(".arrow").hide();
    $(this).siblings().find("ul").slideUp(300, function () {
      $(this).siblings().find(".arrow").show()
    });
  });
  //gifts fold
  $(document).on("mouseover", function (e) {
    if($(e.target).closest('.gifts-box').length == 0) {
      $(".gifts .gifts-message .gifts-box").find("ul").slideUp(300).end().find(".arrow").show();
    }
  });
}());
