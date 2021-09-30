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
  body:'<tr><td>Driver Booster 8 PRO</td><td>3 PCs</td><td>$74.85</td><td>$0</td></tr><tr><td>Smart Defrag 6 PRO </td><td>3 PCs</td><td>$39.99</td><td>$11.99</td></tr><tr><td>IObit Software Updater 3 PRO</td><td>3 PCs</td><td>$32.99</td><td>$9.99</td></tr>',
  Discount:'70% OFF + Free Gift',
  Subtotal:'$147.83',
  Total:'$21.98',
  url:'https://www.iobit.com/buy.php?product=2020dbisusd2198&ref=xr_dbisusd'+refStr+'&refs=purchase_3bundlexr&tw='+tw,
  ga:"ga('send', 'event', 'dbisusdbuy', 'buy', '3bundlepurchasexr-dbisusd');"
},
{
  className:'two',
  body:'<tr><td>Driver Booster 8 PRO</td><td>3 PCs</td><td>$74.85</td><td>$19.95</td></tr>',
  Discount:'70% OFF',
  Subtotal:'$74.85',
  Total:'$19.95',
  
  url:'https://www.iobit.com/buy.php?product=2020db3pc1995&ref=xr_db'+refStr+'&refs=purchase_3bundlexr&tw='+tw,
  soldoutUrl:'https://www.iobit.com/buy.php?product=2020db3pc1995&ref=xr_dbsold'+refStr+'&refs=purchase_3bundlexr&tw='+tw,
  ga:"ga('send', 'event', 'dbbuy', 'buy', '3bundlepurchasexr-dbisusd');",
  soldoutUrlGa:"ga('send', 'event', 'dbsoldbuy', 'buy', '3bundlepurchasexr-dbisusd');"
},
{
  className:'three',
  body:'<tr><td>IObit Software Updater 3 PRO</td><td>3 PCs</td><td>$32.99</td><td>$9.99</td></tr>',
  Discount:'70% OFF',
  Subtotal:'$32.99',
  Total:'$9.99',
  
  url:'https://www.iobit.com/buy.php?product=2020isu3pc999&ref=xr_isu'+refStr+'&refs=purchase_3bundlexr&tw='+tw,
  
  soldoutUrl:'https://www.iobit.com/buy.php?product=2020isu3pc999&ref=xr_isusold'+refStr+'&refs=purchase_3bundlexr&tw='+tw,
  ga:"ga('send', 'event', 'isubuy', 'buy', '3bundlepurchasexr-dbisusd');",
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
  ga:"ga('send', 'event', 'sdbuy', 'buy', '3bundlepurchasexr-dbisusd');",
  soldoutUrlGa:"ga('send', 'event', 'sdsoldbuy', 'buy', '3bundlepurchasexr-ascdbsd');"
}]

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
  $('.floatlayer .numer .s').eq(0).html('<b>Save 70%</b> on Driver Booster 8 PRO')
  $('.floatlayer .numer .s').eq(1).html('Enjoy Smooth PC and Game Performance')
  $('.floatlayer .left .pc').attr('src',$('.floatlayer .left .pc').attr('src').replace(/one/, "two"))
  $('.floatlayer .price .buy-btn span').html("<strong>$<b>19</b>.95</strong> <del>$74.85</del>")
  $('.floatlayer .left').addClass('ac')
  $('.banner .content .list li.ones .asck').fadeIn()
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
    url: "xthreeb.php?pop=xr_dbisusd",
    data: "action=getPacks&d=" + date.getDate(),
    success: function (res) {
      var sales = JSON.parse(res);
      var packs = sales.packsNum;
      if (packs <= 0) {
        soldout();
      }
      if (packs > 0) {
        $(window).unload(function () {
          packs = cGet('endbisusd_p');
        });
        var total = cGet('endbisusd_t');
        $('.tis p').css('right',(100-((packs/total).toFixed(2))*66)+'%')
        $('.time-text').text(packs);
        setTimeout('getSales()', getReTime());
      }
    }
  });
}

function getReTime() {
  var packsNumTotal = cGet('endbisusd_t');
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