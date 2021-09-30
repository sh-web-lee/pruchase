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
