//userreview 
function switchover(name, clickname, active, contname) {
  $(name).on(clickname, function() {
    var num = $(this).index();
    $(name).eq(num).addClass(active).siblings().removeClass(active);
    $(contname).eq(num).addClass(active).siblings().removeClass(active);
  });
}

$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

$(function() {
  $(".compareBtn").target($("#compare"), 0);
  switchover(".users li", "mouseover", "active", ".review .content > dl");
  $(window).scrollWindow($(".banner"), $('.backtotop'), ("on"));
  $(".backtotop").target($(".banner"), 0);
  packsInit();
});

function numSet(packsNum){
  var buyNum=500-parseInt(packsNum);
  $(".packsNum").html(packsNum);
  $(".buyNum").html(buyNum);
}

function packsInit() {
  var date = new Date();
  var cName = "desdson_p" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs = 68;
  } else {
    packs = arr[2];
  }
  numSet(packs);
  setTimeout('getSales()', 8000);
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "sonderangebot.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function (packsNum) {
      if(!isNaN(packsNum)){
        numSet(packsNum);
      }
    }
  });
  setTimeout('getSales()', 8000);
}