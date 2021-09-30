$(function() {
	// console.log($('.section2').isOnScreen())
	// $(".main").moveTo(3);
	if ($('.section1').isOnScreen()) {
		s1.play();
	}
	cycleCountdown();
});
$(".main").onepage_scroll({
	sectionContainer: ".section",  
	easing: "ease", 
	animationTime: 1000,     
	loop: true,                    
	direction: "vertical",
	beforeMove: function(){
		/*if ($('.section1').isOnScreen()) {
			s2.reverse();
			s3.reverse();
			s4.reverse();
		}
		if ($('.section2').isOnScreen()) {
			s1.reverse();
			s3.reverse();
			s4.reverse();
		}
		if ($('.section3').isOnScreen()) {
			s1.reverse();
			s2.reverse();
			s4.reverse();
		}
		if ($('.section4').isOnScreen()) {
			s1.reverse();
			s2.reverse();
			s3.reverse();
		}*/
	},
	afterMove: function(){
		if ($('.section1').isOnScreen()) {
			s1.play();
		}
		if ($('.section2').isOnScreen()) {
			s2.play();
		}
		if ($('.section3').isOnScreen()) {
			s3.play();
		}
		// if ($('.section4').isOnScreen()) {
		// 	s4.play();
		// }
	},
});


(function ($) {
    $.fn.isOnScreen = function(x, y){

        if(x == null || typeof x == 'undefined') x = 1;
        if(y == null || typeof y == 'undefined') y = 1;

        var win = $(window);

        var viewport = {
            top : win.scrollTop(),
            left : win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var height = this.outerHeight();
        var width = this.outerWidth();

        if(!width || !height){
            return false;
        }

        var bounds = this.offset();
        bounds.right = bounds.left + width;
        bounds.bottom = bounds.top + height;

        var visible = (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

        if(!visible){
            return false;
        }

        var deltas = {
            top : Math.min( 1, ( bounds.bottom - viewport.top ) / height),
            bottom : Math.min(1, ( viewport.bottom - bounds.top ) / height),
            left : Math.min(1, ( bounds.right - viewport.left ) / width),
            right : Math.min(1, ( viewport.right - bounds.left ) / width)
        };

        return (deltas.left * deltas.right) >= x && (deltas.top * deltas.bottom) >= y;

    };
})(jQuery);

// animation

var s1 =  new TimelineLite();
	s1.from(".section1 .title",1,{
		y:100,
		autoAlpha : 0,
		ease: Power1.easeInOut,
		clearProps: "all",
	},"-=0.75")
	.from(".section1 .subtitle", 1, {
		x:200, 
		autoAlpha : 0,
		ease: Power1.easeInOut,
		clearProps: "all",
	},"-=0.75")
	.from(".section1 .dbbox", 1, {
		x:-150,
		autoAlpha:0,
		ease: Power3.easeOut,
		clearProps: "all",
	},"-=0.75")
	.from(".section1 .gitpack", 0.75, {
		x:650,
		autoAlpha:0,
		ease: Power3.easeOut,
		clearProps: "all",
	},"-=0.75")
	.from(".section1 .cart", 1, {
		y:650,
		autoAlpha:0,
		ease: Power1.easeInOut,
		clearProps: "all",
	},"-=0.75")
	.from(".section1 .mouse", 1, {
		autoAlpha:0,
		ease: Power1.easeInOut,
		clearProps: "all",
	},"-=0.75")
	.from(".section1 .discount", 0.75, {
		scale:2,
		autoAlpha:0,
		ease: Bounce.easeOut,
		clearProps: "all",
	},"-=0.75")
	s1.stop();

var s2 = new TimelineLite();
	s2.from(".section2 .title",0.75,{
		x:-50,
		autoAlpha : 0,
		ease: Power1.easeOut,
		clearProps: "all",
	},"-=0.75")
	.from(".section2 .subtitle", 0.75, {
		x:450, 
		autoAlpha : 0,
		ease: Power1.easeOut,
		clearProps: "all",
	},"-=0.75")
	.staggerFrom([".section2 .benfits.a",".section2 .benfits.b",".section2 .benfits.c",".section2 .benfits.d"], 0.5, {
		y:200,
		autoAlpha:0,
		clearProps: "all",
	},0.15)
	.from(".section2 .cart", 1, {
		y:650,
		autoAlpha:0,
		ease: Power1.easeInOut,
		clearProps: "all",
	},"-=0.75")
	.from(".section2 .note", 1, {
		y:650,
		autoAlpha:0,
		clearProps: "all",
	},"-=1")
	.from(".section2 .awards", 1, {
		y:650,
		autoAlpha:0,
		clearProps: "all",
	},"-=0.75")
	s2.stop();

// var s3 = new TimelineLite();
// 	s3.from(".section3 .title",1,{
// 		x:-50,
// 		autoAlpha : 0,
// 		ease: Power1.easeInOut,
// 		clearProps: "all",
// 	},"-=0.75")
// 	.from(".section3 .subtitle", 0.75, {
// 		x:650, 
// 		autoAlpha : 0,
// 		ease: Power1.easeInOut,
// 		clearProps: "all",
// 	},"-=0.75")
// 	.staggerFrom([".section3 .benfits.a",".section3 .benfits.b"], 0.5, {
// 		y:200,
// 		autoAlpha:0,
// 		clearProps: "all",
// 	},0.15,"-=0.75")
// 	.from(".section3 .cart", 1, {
// 		y:650,
// 		autoAlpha:0,
// 		// ease: Power1.easeInOut,
// 		clearProps: "all",
// 	},"-=0.75")
// 	.from(".section3 .note", 1, {
// 		y:650,
// 		autoAlpha:0,
// 		clearProps: "all",
// 	},"-=1")
// 	.staggerFrom([".section3 .review",".section3 .review .a",".section3 .review .b"], 0.5, {
// 		y:650,
// 		autoAlpha:0,
// 		clearProps: "all",
// 	},0.2,"-=0.75")

// 	s3.stop();

var s3 = new TimelineLite();
	s3.from(".section3 .title",0.75,{
		x:-50,
		autoAlpha : 0,
		ease: Power1.easeInOut,
		clearProps: "all",
	},"-=0.75")
	.from(".section3 .subtitle", 0.75, {
		x:650, 
		autoAlpha : 0,
		ease: Power1.easeInOut,
		clearProps: "all",
	},"-=0.75")
	.staggerFrom([".section3 .gifts .a",".section3 .gifts .b",".section3 .gifts .c"], 0.5, {
		y:200,
		autoAlpha:0,
		clearProps: "all",
	},0.2,"-=0.75")
	.from(".section3 .cart", 1, {
		y:650,
		autoAlpha:0,
		// ease: Power1.easeInOut,
		clearProps: "all",
	},"-=0.75")
	.from(".section3 .note", 1, {
		y:650,
		autoAlpha:0,
		clearProps: "all",
	},"-=1")
	.from(".section3 .review", 1, {
		y:650,
		autoAlpha:0,
		clearProps: "all",
	},"-=0.75")

	s3.stop();

// countdown
function cycleCountdown(){
	var startTimestamp = MApp(2.2).datetime.getTimestamp('2017-01-05 22:17:00');
	var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
	h = MApp(2.2).packages.zeroize(datetime[1], 2);
	i = MApp(2.2).packages.zeroize(datetime[2], 2);
	s = MApp(2.2).packages.zeroize(datetime[3], 2);
	$('.countdown').html(h+":"+i+":"+s)
	setTimeout('cycleCountdown()', 1);
}