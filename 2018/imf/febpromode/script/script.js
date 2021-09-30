$.fn.target = function(target, yoffset) {
  $(this).click(function() {
    if (!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({
      scrollTop: Theigth
    }, 'slow');
  });
};

$.fn.changeActive = function(clickName, buybtn) {
  $(this).on(clickName, function() {
    var num = $(this).index();
    $(this).addClass("active").siblings().removeClass("active");
    var url = $(this).attr("data-url");
    $(".floatlayer .buybtn").attr("href", url);
  });
};

//floatlayer show
function floatShow() {
  $(".floatlayer").addClass("on");
}

//floatlayer close
function floatClose() {
  $(".floatlayer").removeClass("on");
}

$(function() {
  //switchover
  var cArr = ["shot3", "shot2", "shot1"];
  var index = 0;
  //next
  $(".next").click(function() {
    nextimg();

  });
  //prev
  $(".prev").click(function() {
    previmg();
  });
  //previmg
  function previmg() {
    cArr.unshift(cArr[2]);
    cArr.pop();
    $(".introimg li").each(function(i, e) {
      $(e).removeClass().addClass(cArr[i]);
    });
    index--;
    if (index < 0) {
      index = 2;
    }
    mask();
  }
  //nextimg
  function nextimg() {
    cArr.push(cArr[0]);
    cArr.shift();
    $(".introimg li").each(function(i, e) {
      $(e).removeClass().addClass(cArr[i]);
    });
    index++;
    if (index > 2) {
      index = 0;
    }
    mask();
  }

  //mask
  function mask() {
    $(".intro .mask").addClass("on");
    setTimeout('$(".intro .mask").removeClass("on");', 200);
  }

  $(document).on("click", ".left-mask", function() {
    previmg();
    return false;
  });

  $(document).on("click", ".right-mask", function() {
    nextimg();
    return false;
  });

  //var t = setInterval(floatShow, 120000);

  $(".close").on("click", function() {
    if ($(".floatlayer").hasClass("on")) {
      floatClose();
      if ($(".floatlayer .buybtn").hasClass("buy")) {
        //clearInterval(t);
      }
    }
  });
  packsInit();
  timeInit();
});

function cSet(name,value) {
  var Days = 2;
  var exp = new Date();
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000*2);
  document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

function cGet(name) {
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function timeInit(){
  var cName='deimfma_t';
  maskTime = cGet(cName);
  if (maskTime == null) {
    maskTime = 30;
    cSet(cName, maskTime);
  }
  if (maskTime <= 0) {
    if (expireTimeCheck()) {
      floatShow();
      getPacks();
    }
  }else {
    maskTimeCountDown();
  }
}

function packsInit(){
  var cName='deimfma_p';
  packs=cGet(cName);
  if (packs == null) {
    packs = 109;
    cSet(cName,packs);
  }
  $('.packsNum').html(packs);
}

function expireTimeCheck() {
  return (packs>0);
}

function maskTimeCountDown() {
  if (maskTime > 0) {
    var cName='deimfma_t';
    maskTime--;
    cSet(cName, maskTime);
    setTimeout('maskTimeCountDown()', 1000);
  }else{
    if(expireTimeCheck()){
      floatShow();
      getPacks();
    }
  }
}

function getPacks(){
  $.ajax({
    type: "GET",
    url: "febpromode.php",
    data: "action=getPacks&r=" + Math.random(),
    success:function(res){
      packs=parseInt(res);
      if(packs<=0){
        floatClose();
      }else{
        $('.packsNum').html(packs);
        setTimeout('getPacks()', 10000);
      }
    }
  })
}