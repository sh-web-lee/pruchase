//goTarget
function goTarget(target, yoffset) {
  if (!yoffset) yoffset = 0;
  var Theigth = target.offset().top - yoffset;
  $("html, body").animate({scrollTop: Theigth}, 'slow');
}
var t = null,_t=null,is=false
// $(window).on('scroll', function() {
//   if ($(window).scrollTop() > 500) {
//     $('.floatlayer').addClass('on');
//   } else {
//     $('.floatlayer').removeClass('on');
//   }
  
// });
var tw = MApp(2.2).datetime.getTimeZone();
var bannerObject = [{
  className:'one',
  body:'<tr><td>IObit Malware Fighter 8 PRO</td><td>3 PCs</td><td>$54.95</td><td>$0</td></tr><tr><td>Smart Defrag 6 PRO </td><td>3 PCs</td><td>$39.99</td><td>$11.99</td></tr><tr><td>IObit Software Updater 3 PRO</td><td>3 PCs</td><td>$32.99</td><td>$9.99</td></tr>',
  Discount:'70% OFF + Free Gift',
  Subtotal:'$127.93',
  Total:'$21.98',
  
  url:'https://www.iobit.com/buy.php?product=2020imfisusd2198&ref=xr_imfisusd'+refStr+'&refs=purchase_3bundlexrtw='+tw,
  ga:"ga('send', 'event', 'imfisusdbuy', 'buy', '3bundlepurchasexr-imfisusd');"
},
{
  className:'two',
  body:'<tr><td>IObit Malware Fighter 8 PRO</td><td>3 PCs</td><td>$54.95</td><td>$16.99</td></tr>',
  Discount:'70% OFF',
  Subtotal:'$54.95',
  Total:'$16.99',
  url:'https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=xr_imf'+refStr+'&refs=purchase_3bundlexr&tw='+tw,
  soldoutUrl:'https://www.iobit.com/buy.php?product=2020imf3pc1699&ref=xr_imfsold'+refStr+'&refs=purchase_3bundlexr&tw='+tw,
  ga:"ga('send', 'event', 'imfbuy', 'buy', '3bundlepurchasexr-imfisusd')",
  soldoutUrlGa:"ga('send', 'event', 'imfsoldbuy', 'buy', '3bundlepurchasexr-imfimfisu')"
},
{
  className:'three',
  body:'<tr><td>IObit Software Updater 3 PRO</td><td>3 PCs</td><td>$32.99</td><td>$9.99</td></tr>',
  Discount:'70% OFF',
  Subtotal:'$32.99',
  Total:'$9.99',
  
  url:'https://www.iobit.com/buy.php?product=2020isu3pc999&ref=xr_isu'+refStr+'&refs=purchase_3bundlexr&tw='+tw,
  
  soldoutUrl:'https://www.iobit.com/buy.php?product=2020isu3pc999&ref=xr_isusold'+refStr+'&refs=purchase_3bundlexr&tw='+tw,
  ga:"ga('send', 'event', 'isubuy', 'buy', '3bundlepurchasexr-imfisusd');",
  soldoutUrlGa:"ga('send', 'event', 'isusoldbuy', 'buy', '3bundlepurchasexr-dbisuisu');"
},
{
  className:'four',
  body:'<tr><td>Smart Defrag 6 PRO </td><td>3 PCs</td><td>$39.99</td><td>$11.99</td></tr>',
  Discount:'70% OFF',
  Subtotal:'$39.99',
  Total:'$11.99',
  url:'https://www.iobit.com/buy.php?product=2020sd3pc1199&ref=xr_sd'+refStr+'&refs=purchase_3bundlexr&tw='+tw,
  soldoutUrl:'https://www.iobit.com/buy.php?product=2020sd3pc1199&ref=xr_sdsold'+refStr+'&refs=purchase_3bundlexr&tw='+tw,
  ga:"ga('send', 'event', 'sdbuy', 'buy', '3bundlepurchasexr-imfisusd');",
  soldoutUrlGa:"ga('send', 'event', 'sdsoldbuy', 'buy', '3bundlepurchasexr-imfdbsd');"
},]

$('.banner .content .list li').click(function(){
  if(!$(this).hasClass('ac') && !$(this).hasClass('soldout')){
    change($(this))
  }
})

function change(dom){
  $(dom).addClass('ac '+bannerObject[$(dom).attr('code')].className).siblings().removeClass('ac '+bannerObject[$(dom).attr('code')].className)
    $('.change').find('tbody').html(bannerObject[$(dom).attr('code')].body).addClass('animate__animated animate__fadeInUp')
    $('.change .box.left dt span.num').text($(dom).attr('code') === '0'?'3 Items':'1 Item')
    $('.change .box.right a').attr('href',is?bannerObject[$(dom).attr('code')].soldoutUrl:bannerObject[$(dom).attr('code')].url)
    $('.change .box.right a').removeAttr('onclick').attr('onclick',is?bannerObject[$(dom).attr('code')].soldoutUrlGa:bannerObject[$(dom).attr('code')].ga)
    if($(dom).attr('code') != '0'){
      $('.change .box.left .f-ds').addClass('other')
      $('.change .tis').css('opacity','0')
    }else{
      $('.change .box.left .f-ds').removeClass('other')
      $('.change .tis').css('opacity','1')
    }
    $('.Subtotal').text(bannerObject[$(dom).attr('code')].Subtotal)
    $('.Discount').text(bannerObject[$(dom).attr('code')].Discount)
    $('.Total').text(bannerObject[$(dom).attr('code')].Total)
    setTimeout(function(){
      $('.change').find('tbody').removeAttr('class')
    },1000)
}


$('.review .next').click(function(event) {
  $('.review .roll').stop(true, true).animate({marginLeft: -715}, 'slow',function(){
    $('.review .roll').css('marginLeft', '0');
    $('.review .roll').find('dl:first').appendTo($('.review .roll'));
  });
});
$('.review .prev').click(function(event) {
  $('.review .roll').find('dl:last').prependTo($('.review .roll'));
  $('.review .roll').css('marginLeft', -715);
  $('.review .roll').stop(true, true).animate({marginLeft: 0}, 'slow');
});

function soldout(){
  clearInterval(t)
  clearInterval(_t);
  $('.time-text').text('00')
  $('.tis').hide()
  $('.floatlayer .numer').addClass('soldout')
  $('.floatlayer .numer .s').eq(0).html('<b>Save 70%</b> on IObit Malware Fighter 8 PRO')
  $('.floatlayer .numer .s').eq(1).html('Get Your PC and Personal Data Protected')
  $('.floatlayer .left').addClass('ac')
  $('.banner .content .list li.ones .asck').fadeIn()
  $('.floatlayer .left .pc').attr('src',$('.floatlayer .left .pc').attr('src').replace(/one/, "two"))
  $('.floatlayer .price .buy-btn span').html("<strong>$<b>16</b>.99</strong> <del>$54.95</del>")
  var dom = $('.banner .content .list li.ones')
  $('.banner .content .list li.ones').addClass('soldout').removeClass('ac one')
  $('.floatlayer .price .buy-btn a').attr('href',bannerObject[1].url) 
  $('.floatlayer .price .buy-btn a').removeAttr('onclick').attr('onclick',bannerObject[1].ga)
  change(dom.next())
}

function IEVersion() {
  var userAgent = navigator.userAgent; //取得浏览器的userAgent字符串  
  var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1; //判断是否IE<11浏览器  
  if(isIE) {
      var reIE = new RegExp("MSIE (\\d+\\.\\d+);");
      reIE.test(userAgent);
      var fIEVersion = parseFloat(RegExp["$1"]);
      if(fIEVersion < 10) $('.buy-new').css('background','#ff5400')  
  }
}

function cGet(name) {
  var exp = new Date();
  name=name+exp.getDate();
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return unescape(arr[2]);
  else
    return null;
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xthreeb.php?pop=xr_imfisusd",
    data: "action=getPacks&d=" + date.getDate(),
    success: function (res) {
      var sales = JSON.parse(res);
      var packs = sales.packsNum;
      if (packs <= 0) {
        soldout();
      }
      if (packs > 0) {
        $(window).unload(function () {
          packs = cGet('enimfisusd_p');
        });
        var total = cGet('enimfisusd_t');
        $('.tis p').css('right',(100-((packs/total).toFixed(2))*66)+'%')
        $('.time-text').text(packs);
        setTimeout('getSales()', getReTime());
      }
    }
  });
}

function getReTime() {
  var packsNumTotal = cGet('enimfisusd_t');
  if (packsNumTotal > 1) {
    return ((Math.random() > 0.5) ? 5.1 : 7.1) * 1000;
  } else {
    return 20000;
  }
}

$(function() {
  getSales();
  // var num = cGet('enbtwob_t');
  // t = setInterval(function(){
  //   if(num-1<66){
  //     $('.tis p').addClass('ac')
  //     clearInterval(t)
  //      _t = setInterval(function(){
  //       if(num===0) {
  //         clearInterval(_t);
  //         soldout()
  //         return
  //       }
  //       $('.time-text').text(--num)
  //     }, 1000);
  //   }
  //   $('.time-text').text(--num)
  // }, 40);
  IEVersion()
});
