// 轮播切换
$('.user .prevbtn').click(function() {
    $('.user .user_lists').find('li:last').prependTo($('.user .user_lists'))
    $('.user .user_lists').css('marginLeft', -612)
    $('.user .user_lists').stop(true, true).animate({marginLeft: 0}, 'slow')
    $('.user .user_textlists').find('li:last').prependTo($('.user .user_textlists'))
    $('.user .user_textlists').css('marginLeft', -1140)
    $('.user .user_textlists').stop(true, true).animate({marginLeft: 0}, 'slow')
})
$('.user .nextbtn').click(function() {
    $('.user .user_lists').stop(true, true).animate({marginLeft: -612}, 'slow', function() {
        $('.user .user_lists').css('marginLeft', '0')
        $('.user .user_lists').find('li:first').appendTo($('.user .user_lists'))
    })
    $('.user .user_textlists').stop(true, true).animate({marginLeft: -1140}, 'slow', function() {
        $('.user .user_textlists').css('marginLeft', '0')
        $('.user .user_textlists').find('li:first').appendTo($('.user .user_textlists'))
    })
})

// 倒计时
var countTime = function(param) {
    window.setInterval(function() {
        if (param >= 0) {
            var hour = Math.floor(param / 1000 / 60 / 60)
            var minutes = Math.floor((param - hour * 60 * 60 * 1000)/ 60 / 1000)
            var seconds = Math.floor(param/1000 % 60)
            var ms = Math.floor(param % 1000)
            document.getElementById('shi_jian').innerHTML = '<b id="hour">' + hour + '</b> H : <b id="minute">' + minutes + '</b> M : <b id="second">' + seconds + '</b> S : <b id="millisecond">' +ms+ '</b> MS';
            localStorage.setItem('time', param)
            localStorage.setItem('isDay', day)
            param-=18
        }else{
            document.getElementById('shi_jian').innerHTML = '<b id="hour"> 0 </b> H : <b id="minute"> 0 </b> M : <b id="second"> 0 </b> S : <b id="millisecond"> 0 </b> MS';
        }
    },18)
}

var day = new Date().toLocaleDateString()
var h = document.getElementById('hour').innerHTML
var m = document.getElementById('minute').innerHTML
var s = document.getElementById('second').innerHTML
var hm = document.getElementById('millisecond').innerHTML
var time = Number(h) * 60 * 60 * 1000 + Number(m) * 60 * 1000 + Number(s) * 1000 + Number(hm) - 61000
var counttime =  localStorage.getItem('time')
var isDay =  localStorage.getItem('isDay')
console.log(isDay, day)
if (isDay == day) {
    if (counttime) {
        var localTime =  localStorage.getItem('time')
        countTime(localTime)
    } else {
        countTime(time)
    }
} else {
    countTime(time)
}


