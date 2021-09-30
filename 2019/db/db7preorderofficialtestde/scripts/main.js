// ******************************** Public Functions ********************************************
$.fn.scrollWindow = function (topHeight, scrollClass, ClassName) {
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > topHeight.offset().top) {
      scrollClass.addClass(ClassName);
    } else {
      scrollClass.removeClass(ClassName);
    }
  });
};

function goTarget(target) {
  var height = target.offset().top;
  $('html, body').animate({scrollTop: height}, 800);
}

//过期弹窗
function expire() {
  $('#popup').addClass('on');
}

// ************************************ Applications ********************************************
$(document).ready(function () {
  $(window).scrollWindow($('#bannerBtn'), $('#feature'), ('on'));
  $(window).scrollWindow($('#feature'), $('#float'), ('on'));

  $('#goMore').on('click', function () {
    goTarget($('#feature'));
  });

  $('#tabSwitch').on('mouseenter', '.avatar', function () {
    $(this).addClass('active').siblings().removeClass('active');
    var index = $(this).index();
    var parent = $(this).closest('.right');
    parent.find('.review-text').find('p').eq(index).addClass('active').siblings().removeClass('active');
    parent.find('.line').removeClass('pos-0 pos-1 pos-2 pos-3').addClass('pos-' + index);
  });
});

function setNum(packsNum){
  $(".buyNum").html(1000-packsNum);
  $(".packsNum").html(packsNum);
}

function packsInit() {
  var date = new Date();
  var cName = "dedbpre_p" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr === null) {
    packs = 99;
  } else {
    packs = arr[2];
  }
  setNum(packs);
  if(statusCheck()) {
    setTimeout('getSales()', getReTime());
  }
}

function statusCheck(){
  if(packs==0){
    if(!$('#popup').hasClass('on')){
      expire();
    }
    return 0;
  }else{
    return 1;
  }
}

function getReTime(){
  return 6*1000;
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "db7preorderofficialtest.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs=sales.packsNum;
        setNum(packs);
        statusCheck();
      }
    }
  });
  if(statusCheck()){
    setTimeout('getSales()',getReTime());
  }
}

$(function(){
  packsInit();
});