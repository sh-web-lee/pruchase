function cookieGO(name, value) {
  var today = new Date();
  var expires = new Date();
  expires.setTime(today.getTime() + 1000 * 60 * 60 * 24);
  setCookie(name, value, expires);
}

function setCookie(name, value, expire) {
  window.document.cookie = name + "=" + escape(value) + ((expire == null) ? "" : ("; expires=" + expire.toGMTString()));
}

function getCookie(Name) {
  var findcookie = Name + "=";
  if (window.document.cookie.length > 0) {
    var offset = window.document.cookie.indexOf(findcookie);
    if (offset != -1) {
      offset += findcookie.length;
      var end = window.document.cookie.indexOf(";", offset)
      if (end == -1)
        end = window.document.cookie.length;
      return unescape(window.document.cookie.substring(offset, end));
    }
  }
  return null;
}

function delCookie(name) {
  var exp = new Date();
  exp.setTime(exp.getTime() - 1);
  var cval = getCookie(name);
  if (cval != null)
    document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString();
}

function countDown() {
  var max = 60;
  var time = '';
  var arr = [];
  var timer = setInterval(function() {
    if (max > 0) {
      max--;
      if (max < 10) {
        time = '0' + max;
      } else {
        time = '' + max;
      }
      arr = time.split('');
      $('.shi1').html(arr[0]);
      $('.fen1').html(arr[1]);
    } else {
      clearInterval(timer);
      $('.tc').hide();
    }
  }, 1000)
}

function TanChuang() {
  var c = getCookie("getcookie") ? getCookie("getcookie") : null;
  var current = getCookie("currentNum") ? getCookie("currentNum") : null;
  if (c != null) {
    $('.tc').hide();
  } else {
    if(current !== '0') {
      cookieGO("getcookie", "cookievalue");
      $('.tc').show();
      countDown();
    }
  }
}

var gaga = function(wrap) {
  var wrap = document.getElementById(wrap);
  var num = 1;
  var hoverDir = function(e) {
    var w = wrap.offsetWidth,
      h = wrap.offsetHeight,
      x = (e.clientX - wrap.offsetLeft - (w / 2)) * (w > h ? (h / w) : 1),
      y = (e.clientY - wrap.offsetTop - (h / 2)) * (h > w ? (w / h) : 1),
      direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180) / 90) + 3) % 4,
      eventType = e.type,
      dirName = new Array('上方', '右侧', '下方', '左侧');
    if (e.type == 'mouseover' || e.type == 'mouseenter') {
    } else {
      if (num != 1) return;
      if (dirName[direction] == '上方') {
        num++;
        TanChuang();
      }
    }
  }
  if (window.addEventListener) {
    wrap.addEventListener('mouseover', hoverDir, false);
    wrap.addEventListener('mouseout', hoverDir, false);
  } else if (window.attachEvent) {
    wrap.attachEvent('onmouseenter', hoverDir);
    wrap.attachEvent('onmouseleave', hoverDir);
  }
}

gaga('touming')
