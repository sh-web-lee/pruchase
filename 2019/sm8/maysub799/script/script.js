$.fn.scrollWindow = function(topheight, scrollclass, ClassName) {
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > topheight.offset().top) {
      scrollclass.addClass(ClassName);
    } else {
      scrollclass.removeClass(ClassName);
    }
  });
};

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  //$(".gbox .list").remove();
  //$(".gbox").html('');
  var number = PrefixInteger(num, length);
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  var list = '';
  var len = String(number).length;
  var str = number.toString();
  var box = $(".gbox");
  var createobj;
  if(box.html()=='') {
    for (var i = 0; i < length; i++) {
      if (length < 2) {
        createobj = $(new Array(3).join('<b><em class="list"></em></b>'));
      } else {
        createobj = $('<b><em class="list"></em></b>');
      }
      box.append(createobj);
    }
  }
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  if($(".gbox .list").html()==''){
    $(".gbox .list").append(list);
  }
  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    $("#gbox .list").eq(a).animate({
      marginTop: -curNum * 17,
    }, "slow");
    $("#fgbox .list").eq(a).animate({
      marginTop: -curNum * 17,
    }, "slow");
  }
}

function giftSold() {
  if (!$(".banner").hasClass("sold")) {
    $(".banner,.floatlayer").addClass("sold");
    $(".offer.big").html($(".offer.small").children().clone());
    $(".offer.big .imgbox,.floatlayer .imgbox").find("img").attr("src", imgSrc);
    $(".offer.big").find(".buybtn").removeClass("yellow");
    $(".offer.big .imgbox").append('<b>60% OFF</b>');
    $(".floatlayer .imgbox").find("b").text('60% OFF');
    $(".floatlayer .price,.comparison tfoot strong").find("big").text("4");
    $(".floatlayer .price,.comparison tfoot").find("del").text("$12.99");
    $(".comparison tfoot p").find("span").text("1 PC");
    $(".numbox").remove();
    $(".offer.small").append('<div class="mask"><span>Sold Out</span></div>');
    setTimeout(function() {
      $(".offer .mask span").addClass("on");
    }, 100);
    $(".buybtn").attr({
      "href": 'https://www.iobit.com/buy.php?product=sm81pc&ref=sm81pc499sold&aff=&refs=purchase_sm8',
      "onclick": "ga('send', 'event', 'sm81pcsold', 'buy', 'sm8purchase')",
    });
  }
}

$(function() {
  $('#dg-container').gallery();
  $(window).scrollWindow($(".banner .buybtn"), $('.floatlayer'), ("on"));
  $(window).scrollWindow($(".payment"), $('.intro dl'), ("on"));
  packsInit();
});

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function packsInit() {
  packs = cGet('ensmmay');
  if (packs == null) {
    packs = 78;
  }
  if (packs == 0) {
    giftSold();
  } else {
    setTimeout('getPacksNum()', 5000);
  }
  flipNum(packs,3);
}

function getPacksNum() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "index.php",
    data: "action=getPacks&d=" + date.getDate() + "&r=" + Math.random(),
    success: function(res) {
      res = JSON.parse(res);
      var sPacks = res.packsNum;
      var viewNum = res.viewNum;

      if(packs!=sPacks){
        flipNum(sPacks,3);
        packs=sPacks;

        if((packs==0)&&(!$(".banner").hasClass('sold'))){
          giftSold();
        }
        if(sPacks%3==0){
          $('.viewNum').html(viewNum);
        }
      }
    }
  });
  if(packs>0) {
    setTimeout('getPacksNum()', 5000);
  }
}