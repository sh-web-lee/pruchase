$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function focus() {
  $('.progressbar .bar > p').append('<span class="reduce"></span>');
  var tReduce = new TimelineLite();
  tReduce.to('.reduce', 1.5, {
    y: -100,
    autoAlpha: 0,
    onComplete: function() {
      $('.reduce').remove();
    }
  })
}

function flipNum(num) {
  var number =num*2;
  $(".progressbar .bar > p").css("width",number);
}

function offover() {
  $(".banner").addClass("over");
  $(".floatlayer").addClass("over");
  $("span.timer").addClass("over");
  $(".banner p.price strong").text("25.99");
  $(".banner a.buybtn").attr("href", _href).attr("onclick", _ga);
  $(".benfits a.buybtn").attr("href", _href).attr("onclick", _ga).text("Renew Now & Save 50%");
  $(".bottom").css({ "padding" : "50px 0 50px 0"});
}

function timerShow() {
  $("span.timer").addClass("on");
  setTimeout(function () {
    $("span.timer").addClass("move")
  }, 800);
}

function timerContinue() {
  $("span.timer").removeClass("move");
  setTimeout(function () {
    $("span.timer").addClass("move")
  }, 1);
}

$(function () {
  $(".comparison table tr:even").addClass("whitebg");
  $('#dg-container').gallery();
  $(window).scrollWindow($('.banner .buybtn'), $('.floatlayer'), ('on'));
  packsInit();
});

function packsInit(){
  var date = new Date();
  var cName = "enimfexp" + date.getDate();
  var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
  if (arr == null) {
    packs=null;
    getPacks(1);
  } else {
    packs = arr[2];
    flipNum(packs);
    $('.packsNum').html(packs);
    if((packs<=10)&&(packs>0)) {
      if (!$("span.timer").hasClass('on')) {
        timerShow();
      }else{
        timerContinue();
      }
    }else if(packs<=0){
      offover();
    }
    setTimeout('getPacks()', 6300);
  }
  setTimeout('getViewNum()', 15000);
}

function getPacks(isInit) {
  var date = new Date();
  $.ajax({
    type: 'GET',
    url: 'imfexp.php',
    data: 'action=getSales&d=' + date.getDate(),
    success: function(sPacks) {
      if (!isNaN(sPacks)) {
        if (sPacks != packs) {
          flipNum(parseInt(sPacks));
          packs = sPacks;
          $('.packsNum').html(packs);
          if(!isInit){
            focus();
          }
        }

        if((sPacks<=10)&&(sPacks>0)) {
          if (!$("span.timer").hasClass('on')) {
            timerShow();
          }else{
            timerContinue();
          }
        }else if(sPacks<=0){
          offover();
        }
      }
    }
  });
  setTimeout('getPacks()', 6300);
}

function getViewNum() {
  if(packs>0) {
    $.ajax({
      type: "GET",
      url: "imfexp.php",
      data: "action=getViewNum",
      success: function (res) {
        $('.viewNum').html(res);
      }
    });
    setTimeout('getViewNum()', 15000);
  }
}