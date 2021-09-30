//feature
var length = $(".feature .listboxs ul li").length;
var boxWidth = $(".feature .listboxs").width() / 2;
var virtual = length * boxWidth;
var speed = 600;
var time = 5000;
var items = $("#switcher");
var move = boxWidth + "px";
var leftCriticalPoint = "-" + virtual + "px";
var flag = true;

function scrollContentStructure(len) {
  if(len < 3) {
    $("#switcher").width(boxWidth * (len + 3));
    if(len !== 0) {
      var content1 = $(".content_1").html();
      for(var i=0; i<5-len; i++) {
        $(".content_1").append(content1);
      }
    }
  } else {
    $("#switcher").width(virtual * 2);
    $(".content_2").html($(".content_1").html());
  }
}

function moving() {
  flag = false;
  if(items[0].style.left === leftCriticalPoint) {
    items[0].style.left = "0px";
  }
  items.animate({ left: '-=' + move }, speed, function() {
    if(items[0].style.left === leftCriticalPoint) {
      items[0].style.left = "0px";
    }
  });
  flag = true;
}

$(function () {
  //feature
  scrollContentStructure(length);
  if(length !== 0) {
    var callback = setInterval(moving, time);
  }
  $(".feature .content > a").click(function () {
    if (!items.is(":animated") && flag) {
      var left = items[0].style.left;
      clearInterval(callback);
      if ($(this).is(".next")) {
        if(left === leftCriticalPoint) {
          items[0].style.left = "0px";
        }
        items.animate({ left: '-=' + move }, speed, function() {
          if(items[0].style.left === leftCriticalPoint) {
            items[0].style.left = "0px";
          }
          callback = setInterval(moving, time);
        });
      } else if($(this).is(".prev")) {
        if(isNaN(parseInt(left)) || left === "0px") {
          items[0].style.left = leftCriticalPoint;
        }
        items.animate({ left: '+=' + move }, speed, function() {
          if(items[0].style.left === "0px") {
            items[0].style.left = leftCriticalPoint;
          }
          callback = setInterval(moving, time);
        });
      }
    }
  });
});