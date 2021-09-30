$(".review .next").click(function (event) {
  $(".review .roll")
    .stop(true, true)
    .animate(
      {
        marginLeft: -820,
      },
      "slow",
      function () {
        $(".review .roll").css("marginLeft", "0");
        $(".review .roll").find("dl:first").appendTo($(".review .roll"));
      }
    );
});
$(".review .prev").click(function (event) {
  $(".review .roll").find("dl:last").prependTo($(".review .roll"));
  $(".review .roll").css("marginLeft", -820);
  $(".review .roll").stop(true, true).animate(
    {
      marginLeft: 0,
    },
    "slow"
  );
});

var bannerHeight = 0;
var packHeight = $('.pack-cont').offset().top;
var proHeight = $('.product-cont').offset().top;
$(window).on('scroll', function() {
    var scrollTop = $(document).scrollTop();
    if (scrollTop < 200) {
        $(".off-item").each(function(index){
            if (index === 0) {
                $(this).addClass('active')
            } else {
                $(this).removeClass('active')
            }
        });
    } else if (scrollTop >= packHeight - 100 && scrollTop < packHeight + 100) {
        $(".off-item").each(function(index){
            if (index === 1) {
                $(this).addClass('active')
            } else {
                $(this).removeClass('active')
            }
        });
        $('.g-float').css('display', 'block')
    } else if (scrollTop > proHeight - 100) {
        $(".off-item").each(function(index){
            if (index === 2) {
                $(this).addClass('active')
            } else {
                $(this).removeClass('active')
            }
        });
        $('.g-float').css('display', 'block')
    }
});

reloadPage()
function reloadPage() {
    var curHeight = $(document).scrollTop();
    if (curHeight < packHeight) {
        $(".off-item").each(function(index){
            if (index === 0) {
                $(this).addClass('active')
            } else {
                $(this).removeClass('active')
            }
        });
    } else if (curHeight >= packHeight && curHeight < proHeight) {
        $(".off-item").each(function(index){
            if (index === 1) {
                $(this).addClass('active')
            } else {
                $(this).removeClass('active')
            }
        });
        $('.g-float').css('display', 'block')
    } else {
        $(".off-item").each(function(index){
            if (index === 2) {
                $(this).addClass('active')
            } else {
                $(this).removeClass('active')
            }
        });
        $('.g-float').css('display', 'block')
    }
}

$(".g-float .off-item").click(function () {
  $(".off-item").removeClass("active");
  $(this).addClass("active");
  var idx = $(this).index();
  if (idx === 0) {
    $("html,body").animate({ scrollTop: 0 }, 500);
  } else if (idx === 1) {
    $("html,body").animate({ scrollTop: packHeight }, 500);
  } else {
    $("html,body").animate({ scrollTop: proHeight }, 500);
  }
});


function cSet(name, value) {
	var Days = 1;
	var exp = new Date();
	name = name + exp.getDate();
	exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
	document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
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

var leftTime = cGet('summer2021it')
if (!leftTime && leftTime != 0) {
    leftTime = 600
    cSet('summer2021it', leftTime)
} else if (leftTime === 0) {
    this.handleBannerHtml()
}

var timer = null
timer = setInterval(countDown, 1000)
function countDown() {
    var h, m, s;
    if (leftTime > 0) {
        leftTime--;
        h = Math.floor(leftTime / 60 / 60)
        m = Math.floor(leftTime / 60 % 60)
        s = Math.floor(leftTime % 60)
    } else  {
        clearInterval(timer)
        h = 0
        m = 0
        s = 0
        handleBannerHtml()
    }
    cSet('summer2021it', leftTime)
    $('.hour').text(h < 10 ? '0' + h : h)
    $('.minute').text(m < 10 ? '0' + m : m)
    $('.second').text(s < 10 ? '0' + s : s)
}

function handleBannerHtml() {
    var isClick = cGet('summer2021itBtnClick')
    if (isClick) {
        $('#bannerBtn').attr("href", 'javascript:;')
    }
    $('#offItem90').addClass('timeout')
    $('#offItem90 .num, #offItem90 .name').css('color', '#AAA')
    $('#time span').css('color', '#5C5C5C');
    $('#bannerTitle').css('color', '#888');
    $('#bannerTitle i').css('background-position-x', '-62px')
    $('#bannerTag').css('background-position-y', '-28px').css('color', '#fff')
    $('#bannerTag i').css('color', '#fff')
    $('#bannerBtn').css('background-position-y', '-166px')
}

$('#bannerBtn').click(function() {
    var leftTime = cGet('summer2021it')
    if (leftTime == 0) {
        var isClick = cGet('summer2021itBtnClick')
        if (!isClick) {
            setTimeout(function() {
                cSet('summer2021itBtnClick', true)
                $('#bannerBtn').attr("href", 'javascript:;')
            }, 0)
        } else {
            $('#tip').css('display', 'block')
        }
    }
})