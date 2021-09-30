
function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}

function flipNum(num, length) {
  var num = PrefixInteger(num, length);
  var len = String(num).length;
  var str = num.toString();
  var list = '';
  var arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
  for (var j = 0; j < arr.length; j++) {
    list += '<span>' + arr[j] + '</span>';
  }
  $(".banner .countdown .scroll-tick").html(list);
  $(".floatlayer .countdown .scroll-tick").html(list);
  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    $(".banner .countdown .scroll-tick").eq(i).animate({
      marginTop: -curNum * 35,
    }, "slow");
  }
  for (var i = 0; i <= len; i++) {
    var curNum = str.substring(i, i + 1);
    $(".floatlayer .countdown .scroll-tick").eq(i).animate({
      marginTop: -curNum * 35,
    }, "slow");
  }
}

function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}


function numberJump() {
  $(".change-num").prop('number', 50).animateNumber({
    number: 100,
  }, 1000);
}

function sect01() {
  var tl = new TimelineMax();
  tl.to(".bottom-circle", 1, {height:114})
    .to(".completed", .5, {opacity:1},'+=.5')


}
function sect02() {
  var tl = new TimelineMax();
  tl.to(".privacy", 1, {opacity:1,scale: 1},'+=.5')
    .to(".list02 .check", 1, {width:47,backgroundColor:'#326de8',
      onComplete: function() {
        $('.list02 .privacy').addClass('on');
      }
    })
    .to(".list02 .privacy .text", 1, {opacity:1,bottom: 54})
    .to(".list02 .privacy-right", 1, {opacity:1,scale: 1})

}


function soldOut() {
  var aff = MApp(2.2).url.getParameters('aff');
  $(".price").addClass("soldout");
  $(".price strong").html("<b>17</b>,99€");
  $('.banner .price strong').after("<del>49,99€</del>");
  $(".banner .number").html("Las reservas de pedidos por anticipado se han acabado hoy. <br> ¡No te vuelvas a perder el <strong>64%</strong> de descuento!").addClass("soldout");
  $(".floatlayer .number").html("¡No te vuelvas a perder el <strong>64%</strong> de descuento!").addClass("soldout");
  $(".buybtn").attr({
    "href": 'http://www.iobit.com/buy.php?product=es-asc13preorder1799&ref=es_asc13preorderrc1799'+refStr+'&aff=' + aff + '&refs=es_purchase_asc&tw=-8',
    "onclick": "ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderrc-es');"
  });
}

var c = 0;
var d = 0;
var e = 0;
var f = 0;

$(window).on('scroll', function() {
  $(".floatlayer").removeClass("on");

  if ($(window).scrollTop() > $(".intro").offset().top && $(window).scrollTop() < $(".left-message .message:eq(1)").offset().top -100) {
    $(".title,.change-img").addClass("on");
    $(".list01").addClass("on");
    setTimeout(function() {
      $('.scan').remove();
      c+=1;
      if(c==1){
        numberJump();
        sect01();
      }
    }, 2000);

  }
  else {
    $(".title,.change-img").removeClass("on");
  }
  if ($(window).scrollTop() > $(".left-message .message").offset().top +150) {
    $(".list01").removeClass("show");
    //$(".list01").removeClass("on");
    $(".list02").addClass("show");
    d+=1;
    if(d==1){
      sect02();
    }
  }
  else {
    $(".list01").addClass("show");

    $(".list02").removeClass("show");
  }
  clearTimeout($.data(this, 'scrollTimer'));
  $.data(this, 'scrollTimer', setTimeout(function() {
    if ($(window).scrollTop() < $(".banner .buybtn").offset().top) {
      $('.floatlayer').removeClass('on');
    } else {
      $('.floatlayer').addClass('on');
    }
  }, 1000));
});


var users = [];
var len;
var userIndex = 0;
var photos = [];

function getUser(userList) {
  len = $(userList).length;
  for (var i=0; i<len; i++) {
    users.push($(userList).eq(i).attr("class"));
  }
}


//userPrev
function userNext() {
  var newUser = users.pop();
  var newPhoto = photos.pop();
  users.unshift(newUser);
  photos.unshift(newPhoto);
  for (var i=0; i<len; i++) {
    $(".review .review-photos ul li").eq(i).removeClass().addClass(users[i]).attr("data-num", photos[i]);
  }
  if(userIndex > 0 ) {
    userIndex --;
  }else {
    userIndex = 6;
  }
  setTimeout(function () {
    $(".review-details div").eq(userIndex).fadeIn('slow').siblings().hide();
  }, 200);
}


$(function() {
  getUser((".review .review-photos ul li"));
  for (var i =0; i<len; i++) {
    photos.push(parseInt($(".review .review-photos ul li").eq(i).attr("data-num")));
  }
  $(".review .review-photos ul li").click(function () {
    var photoIndex = $(this).attr("data-num");
    if(photoIndex > 0) {
      var newUser = users.splice(0, photoIndex);
      var newPhoto = photos.splice(0, photoIndex);
      users = users.concat(newUser);
      photos = photos.concat(newPhoto);
      for (var i=0; i<len; i++) {
        $(".review .review-photos ul li").eq(i).removeClass().addClass(users[i]).attr("data-num", photos[i]);
      }
      userIndex = $(this).attr('data-fixed');
      setTimeout(function () {
        $(".review-details div").eq(userIndex).fadeIn('slow').siblings().hide();
      }, 200);
    }

  });
});

function packsInit() {
  var cName="enascpre_p";
  packs=cGet(cName);
  if(packs===0){
    soldOut();
  }else{
    getSales();
  }
}

function cGet(name) {
  var exp = new Date();
  name = name + exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function getSales(isInit) {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "asc13preorder.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function(res) {
      var sales = JSON.parse(res);
      if (sales.packsNum != packs) {
        packs = sales.packsNum;
        if (isInit) {
          flipNum(sales.packsNum, 4, 1000);
        } else {
          flipNum(sales.packsNum, 4, 100);
        }
      }
      if (packs > 0) {
        setTimeout('getSales(0)', 6000);
      }else{
        if(!$(".price").hasClass("soldout")){
          soldOut();
        }
      }
    }
  });
}

function getViewNum() {
  $.ajax({
    type: "GET",
    url: "asc13preorder.php",
    data: "action=getViewNum",
    success: function(res) {
      $('.viewNum').html(res);
    }
  });
  setTimeout('getViewNum()', 15000);
}

$(function() {
  packsInit(1);
  setTimeout('getViewNum()', 15000);
});