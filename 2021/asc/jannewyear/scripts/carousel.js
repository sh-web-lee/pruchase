;
(function($, window, document, undefined) {
  var Carousel = function(elem, options) {
    this.defaults = {
      curDisplay: 0,
      autoPlay: false,
      interval: 3000
    };
    this.opts = $.extend({}, this.defaults, options);

    var self = this;
    this.$carousel = elem;
    this.$aImg = this.$carousel.find('div');

    this.imgLen = this.$aImg.length;
    this.curDisplay = this.opts.curDisplay;
    this.autoPlay = this.opts.autoPlay;
    this.viewWidth = $(window).width() / 2;
    this.b_switch = true;
    this.iNow = this.opts.curDisplay;
    this.timer = null;
    this.interval = this.opts.interval;
  };

  Carousel.prototype = {
    play: function() {
      if (this.autoPlay) {
        if (this.iNow === this.imgLen - 1) {
          this.iNow = 0;
        } else {
          this.iNow++;
        }
        this.movingNext(this.iNow);
      }
    },

    movingPrev: function(index) {
      this.curDisplay = index;
      this.initalCarousel();
    },

    movingNext: function(index) {
      this.curDisplay = index;
      this.initalCarousel();
    },

    initalCarousel: function() {
      var self = this;
      var half_imgLen = Math.floor(this.imgLen / 2);
      var leftNum, rightNum;
      for (var i = 0; i < half_imgLen; i++) {
        if (i == 0) {
          leftNum = this.curDisplay - i - 1;
          this.$aImg.eq(leftNum).css({
            transform: 'translateX(' + (-190 * (i + 1)) + 'px) ',
            border: "13px solid #fffbf2",
            opacity: 0.3
          });
          rightNum = this.curDisplay + i + 1;
          if (rightNum > this.imgLen - 1) rightNum -= this.imgLen;
          this.$aImg.eq(rightNum).css({
            transform: 'translateX(' + (190 * (i + 1)) + 'px)',
            border: "13px solid #fffbf2",
            opacity: 0.3
          });
        } else {
          leftNum = this.curDisplay - i - 1;
          this.$aImg.eq(leftNum).css({
            transform: 'translateX(' + (-190 * (i + 1)) + 'px) ',
            border: "13px solid #fffbf2",
            opacity: 0
          });
          rightNum = this.curDisplay + i + 1;
          if (rightNum > this.imgLen - 1) rightNum -= this.imgLen;
          this.$aImg.eq(rightNum).css({
            transform: 'translateX(' + (190 * (i + 1)) + 'px)',
            border: "13px solid #fffbf2",
            opacity: 0
          });
        }
        this.$aImg.removeClass('on');
      }

      this.$aImg.eq(this.curDisplay).css({
        transform: 'translateZ(0)',
        border: "13px solid #fffbf2",
        opacity: 1
      }).addClass('on');
      this.$carousel.on('webkitTransitionEnd', function() {
        self.b_switch = true;
      });
    },

    inital: function() {
      var self = this;
      this.initalCarousel();
      this.$aImg.on('click', function(ev) {
        //if (self.b_switch && !$(this).hasClass('on')) {
        if (!$(this).hasClass('on')) {
          self.iNow = $(this).index();
          $('.comments-content>ul>li').removeClass('on');
          $('.comments-content>ul>li').eq($(this).index()).addClass('on');
          // self.b_switch = false;
          var direction = self.viewWidth < ev.clientX ? 'next' : 'prev';
          var index = $(this).index();
          if (direction === 'next') {
            console.log(direction)
            self.movingNext(index);
          } else {
            self.movingPrev(index);
          }

        }
      }).hover(function() {
        clearInterval(self.timer);
      }, function() {
        self.timer = setInterval(function() {
          self.play();
        }, self.interval);
      });
      this.timer = setInterval(function() {
        self.play();
      }, this.interval);
      this.$carousel.on('selectstart', function() {
        return false;
      });
    },
    constructor: Carousel
  };
  $.fn.carousel = function(options) {
    var carousel = new Carousel(this, options);
    return carousel.inital();
  };
})(jQuery, window, document, undefined);
