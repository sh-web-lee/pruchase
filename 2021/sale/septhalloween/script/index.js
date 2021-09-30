$(function() {
  // 浮窗
  $(window).scroll(function() {
    var scrollTop = $(this).scrollTop();
    var windowHeight = $(this).height();
    if (scrollTop > windowHeight) {
      $('.floatlayer').addClass("on");
    } else {
      $('.floatlayer').removeClass("on");
    }
  });

  
  hoverChange()

  loadcount()
  packHover()
})
// backtop hover效果
function hoverChange() {
  var toTop = document.querySelector('.top_arrow')
  var toTopHover = document.querySelector('.top_arrowhover')
  toTop.addEventListener('mousemove', function() {
    $('.top_arrow').hide()
    $('.top_arrowhover').show()
  })

  toTopHover.onclick = function() {
    // 
    scrollToPosition();
  }
  
  toTopHover.addEventListener('mouseleave', function() {
    $('.top_arrow').show()
    $('.top_arrowhover').hide()
  })
}
function scrollToPosition() {
  window.scrollTo({
      top: 0,
      behavior: "smooth"
  });
}


function PrefixInteger(num, length) {
  return (Array(length).join('0') + num).slice(-length);
}



// banner 
function packHover() {
  var packsList = document.querySelectorAll('.cont-purchase-ul li')
  var packbox = Array(document.querySelectorAll('.cont-box img'))
  packsList.forEach((item, index) => {
    item.addEventListener('mouseover', function() {
      packbox.forEach(element => {
        element[index + 1].classList.add('on')
      })
    })
    item.addEventListener('mouseleave', function() {
      packbox.forEach(element => {
        element[index + 1].classList.remove('on')
      })
    })
  })
}
function loadcount() {
  var num = 123
  var num = PrefixInteger(num, length);
  var arr = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
  var list = '';
  var len = String(num).length;
  var str = num.toString();
  for (var i = 0; i < arr.length; i++) {
    list += '<b>' + arr[i] + '</b>';
  }
  $(".countdown .scroll-tick").html(list);

  for (var a = 0; a <= len; a++) {
    var curNum = str.substring(a, a + 1);
    console.log('num:', num)
    $(".countdown .scroll-tick").eq(a).animate({
      marginTop: -(9 - curNum) * 26,
    }, "slow");
  }
}