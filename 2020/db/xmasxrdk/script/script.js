'use strict'

$.fn.target = function (target, yoffset) {
  $(this).click(function () {
    if (!yoffset) yoffset = 0
    var Theigth = target.offset().top - yoffset
    $('html, body').animate(
      {
        scrollTop: Theigth
      },
      'slow'
    )
  })
}

function reduceNum(num) {
  $('.zoomout').remove()
  $('.reduce .first').text(num)
  $('.reduce').append('<span class="zoomout">' + num + '</span>')
  setTimeout('$(".zoomout").addClass("on");', 300)
}

function getViewNum(viewNow) {
  $('.viewNum').html(viewNow)
}

function getSales() {
  var date = new Date();
  $.ajax({
    type: "GET",
    url: "xdb.php",
    data: "action=getPacks&d=" + date.getDate(),
    success: function (res) {
      var sales = JSON.parse(res);
      var packs = sales.packsNum;
      $(".gift b").html(packs);
      $(".floatlayer .text b").html(packs);
      if(packs > 3){
        setTimeout("getSales()",timeCheck());
      }
    },
  });
}

function timeCheck() {
  var packsNumTotal = cGet('xmasdkxr2020_t');
  if(packsNumTotal <= 80 && packsNumTotal >= 70){
    var retime = (Math.random() > 0.5) ? 5.7 : 7.7;
  }else{
    var retime = (Math.random() > 0.5) ? 4.8 : 6.8;
  }
  return retime * 1000;
}

function cSet(name, value) {
  var Days = 2
  var exp = new Date()
  exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2)
  document.cookie = name + '=' + escape(value) + ';expires=' + exp.toGMTString()
}

function cGet(name) {
  var exp = new Date()
  name = name + exp.getDate()
  var arr,
    reg = new RegExp('(^| )' + name + '=([^;]*)(;|$)')
  if ((arr = document.cookie.match(reg))) return unescape(arr[2])
  else return null
}

//************************************************************************************
function lightCtrl() {
  let lightIndex = 0
  var container = $('#light-ctrl')
  setInterval(() => {
    container.find('.light-' + lightIndex).removeClass('on')
    lightIndex = lightIndex === 1 ? (lightIndex = 0) : 1
    container.find('.light-' + lightIndex).addClass('on')
  }, 1000)
}

// popup
var popupContainer = $('#popup')
popupContainer.on('click', '.close', function () {
  popupContainer.removeClass('on')
})
function popup() {
  popupContainer.addClass('on')
}

$(function () {
  // packs = 321;
  getSales();

  lightCtrl()

  //review
  $('#dg-container').gallery()

  $('.db-more').target($('.comparison'), 0)

  $(window).on('scroll', function () {
    var featureIcon = $('.feature-txt dl,.feature-icon')

    if ($(window).scrollTop() > $('.feature h2').offset().top - 360) {
      if (!featureIcon.hasClass('on')) featureIcon.addClass('on')
    } else {
      featureIcon.removeClass('on')
    }

    if ($(window).scrollTop() > $('.banner .buybtn').offset().top) {
      $('.floatlayer').addClass('on')
    } else {
      $('.floatlayer').removeClass('on')
    }
  })

  $('.popbox .close').click(function () {
    $('.popbox').remove()
  })
})
