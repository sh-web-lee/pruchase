$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};
$.fn.userMouseover = function (UserMessage) {
   $(this).mouseover(function(event) {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    $(this).parent().parent().find(UserMessage).eq(num).addClass("active").siblings().removeClass("active")
   });
};
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  var num = PrefixInteger(num, length)
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
  for (var j = 0; j < arr.length; j++) {
      list += '<span>' + arr[j] + '</span>';
  }
  $(".countdown1 .scroll-tick").html(list);
  $(".countdown2 .scroll-tick").html(list);
  for (var i = 0; i <= len; i++) {
      var curNum = str.substring(i, i + 1);
      $(".countdown1 .scroll-tick").eq(i).animate({
          marginTop: -(9-curNum) * 44,
      }, "slow");
      $(".countdown2 .scroll-tick").eq(i).animate({
          marginTop: -(9-curNum) * 58,
      }, "slow");
  }
}
function focus() {
  $(".banner .reduce").css({ "opacity": 1, "top": 3, "zIndex": 8}).animate({ "opacity": 0, "top": -50, "zIndex": -9}, 500);
}
 $(function(){ 
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".banner h2").offset().top) {
      $(".step-content dl").addClass("on");
    }
  });
  $(window).scrollWindow($(".banner p.year"),$('.floatlayer'),("on"));
  $(".users li").userMouseover($(".content dl"));
  //packsGet();
  focus()
});

window.onload=function(){
    packsGet();
}

function packsGet() {
    var date = new Date();
    var cName = "eniuup" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    packs = (arr == null) ? 78 : arr[2];
    flipNum(packs,4);
    setTimeout('decreasingPacks()', 20000);
}

function decreasingPacks() {
    var dateNow = new Date();
    $.ajax({
        type: "GET",
        url: "iu8updater.php",
        data: "action=getPacks&r=" + Math.random() + "&d=" + dateNow.getDate(),
        success: function(sPacks) {
            var rePacks = packs - sPacks;
            if (rePacks > 0) {
                flipNum(sPacks,4);
                focus();
            }
            packs = sPacks;
            setTimeout('decreasingPacks()', 20000);
        }
    });
}
