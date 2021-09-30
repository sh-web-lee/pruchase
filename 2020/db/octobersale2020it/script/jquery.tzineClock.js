(function($) {

	var gVars = {},
		opts;

	$.fn.tzineClock = function(opt) {


		var container = this;

		if (!container) {
			try {
				console.log("Invalid selector!");
			} catch (e) {}

			return false;
		}

		if (!opt) opt = {};

		var defaults = {
			colors: ['circle1', 'circle2', 'circle3', 'circle4'],
			words: ['H', 'M', 'S', 'Ms*'],
			_time: ['2020-07-26 14:59:00'],
		};

		opts = $.extend({}, defaults, opt);

		setUp.call(container);

		return this;
	}

	function setUp() {
		var isIE = function() {
			if (!!window.ActiveXObject || "ActiveXObject" in window) {
				return true;
			} else {
				return false;
			}
		};

		function getTs(time) {
			var arr = time.split(/[- :]/),
				_date = new Date(arr[0], arr[1] - 1, arr[2], arr[3], arr[4], arr[5]),
				timeStr = Date.parse(_date)
			return timeStr
		}

		var _self = $(this);
		var dateArr = [];
		for (var i = 0; i < _self.length; i++) {
			var currentElement = $(_self[i]);
			// var dateTime = $(_self[i]).attr('data-time');
			var dateTime = opts._time[0];
			// var type = $(_self[i]).attr('data-type');
			var leftDate = getTs(dateTime);
			(function(currentElement, leftDate) {

				var timer = setInterval(function() {
					var currentDate = +(new Date());
					var times = leftDate - currentDate;
					d = parseInt(times / 1000 / 60 / 60 / 24);
					h = parseInt(times / 1000 / 60 / 60 % 24);
					m = parseInt(times / 1000 / 60 % 60);
					s = parseInt(times / 1000 % 60);
					animation(currentElement.children('.circle4'), s, 60);
					animation(currentElement.children('.circle3'), m, 60);
					animation(currentElement.children('.circle2'), h, 24);
					animation(currentElement.children('.circle1'), d, 365);
				}, 1000);
			})(currentElement, leftDate)
		}
	}

	function animation(clock, current, total) {
		var angle = (360 / total) * (current);
		if (current > total) {
			angle = 360;
		}
		clock.rotateLeft = clock.find('.countcirlce.right');
		clock.rotateRight = clock.find('.countcirlce.left');
		clock.display = clock.children('.number');

		var element;

		if (current == 0) {

			clock.rotateRight.hide();

			rotateElement(clock.rotateLeft, 0);
		}
		if (angle <= 180) {
			element = clock.rotateLeft;
			clock.rotateRight.hide();
		} else {
			clock.rotateRight.show();
			clock.rotateLeft.show();

			rotateElement(clock.rotateLeft, 180);

			element = clock.rotateRight;
			angle = angle - 180;
		}

		if (current <= 0) {
			clock.display.html('00');
			return;
		}
		rotateElement(element, angle);

		clock.display.html(current < 10 ? '0' + current : current);
	}

	function rotateElement(element, angle) {

		var rotate = 'rotate(' + angle + 'deg)';

		if (element.css('MozTransform') != undefined)
			element.css('MozTransform', rotate);

		else if (element.css('WebkitTransform') != undefined)
			element.css('WebkitTransform', rotate);

		else if (element.css("filter") != undefined) {
			var cos = Math.cos(Math.PI * 2 / 360 * angle);
			var sin = Math.sin(Math.PI * 2 / 360 * angle);

			element.css("filter", "progid:DXImageTransform.Microsoft.Matrix(M11=" + cos + ",M12=-" + sin + ",M21=" + sin + ",M22=" + cos + ",SizingMethod='auto expand',FilterType='nearest neighbor')");

			element.css("left", -Math.floor((element.width() - 100) / 2));
			element.css("top", -Math.floor((element.height() - 100) / 2));
		}
	}

})(jQuery);