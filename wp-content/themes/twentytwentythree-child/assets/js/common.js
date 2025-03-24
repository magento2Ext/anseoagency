const isUrlValid = function (url) {
	var prefix = 'http://';
	var prefixs = 'https://';
	if ((url.substr(0, prefix.length) !== prefix) && (url.substr(0, prefixs.length) !== prefixs)) {
		url = prefix + url; /*Prepending http:// to a URL that doesn't already contain http://*/
	}
	return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
};
const isEmailValid = function (email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
};
(function ($) {
	// Ordered List Start Value Fix
	// $('.blogmaincontent ol').each(function () {
	// 	var startValue = parseInt($(this).attr('start'), 10) || 1;
	// 	$(this).css('--start', startValue - 1);
	// });

	$.fn.shuffleLetters = function (prop) {
		var options = $.extend(
			{
				step: 8, // How many times should the letters be changed
				fps: 25, // Frames Per Second
				text: "", // Use this text instead of the contents
				callback: function () { }, // Run once the animation is complete
			},
			prop
		);

		return this.each(function () {
			var el = $(this),
				str = "";

			// Preventing parallel animations using a flag;

			if (el.data("animated")) {
				return true;
			}

			el.data("animated", true);

			if (options.text) {
				str = options.text.split("");
			} else {
				str = el.text().split("");
			}

			// The types array holds the type for each character;
			// Letters holds the positions of non-space characters;

			var types = [],
				letters = [];

			// Looping through all the chars of the string

			for (var i = 0; i < str.length; i++) {
				var ch = str[i];

				if (ch == " ") {
					types[i] = "space";
					continue;
				} else if (/[a-z]/.test(ch)) {
					types[i] = "lowerLetter";
				} else if (/[A-Z]/.test(ch)) {
					types[i] = "upperLetter";
				} else {
					types[i] = "symbol";
				}

				letters.push(i);
			}

			el.html("");

			// Self executing named function expression:

			(function shuffle(start) {
				// This code is run options.fps times per second
				// and updates the contents of the page element

				var i,
					len = letters.length,
					strCopy = str.slice(0); // Fresh copy of the string

				if (start > len) {
					// The animation is complete. Updating the
					// flag and triggering the callback;

					el.data("animated", false);
					options.callback(el);
					return;
				}

				// All the work gets done here
				for (i = Math.max(start, 0); i < len; i++) {
					// The start argument and options.step limit
					// the characters we will be working on at once

					if (i < start + options.step) {
						// Generate a random character at thsi position
						strCopy[letters[i]] = randomChar(types[letters[i]]);
					} else {
						strCopy[letters[i]] = "";
					}
				}

				el.text(strCopy.join(""));

				setTimeout(function () {
					shuffle(start + 1);
				}, 1000 / options.fps);
			})(-options.step);
		});
	};

	function randomChar(type) {
		var pool = "";

		if (type == "lowerLetter") {
			pool = "abcdefghijklmnopqrstuvwxyz0123456789";
		} else if (type == "upperLetter") {
			pool = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		} else if (type == "symbol") {
			pool = ",.?/\\(^)![]{}*&^%$#'\"";
		}

		var arr = pool.split("");
		return arr[Math.floor(Math.random() * arr.length)];
	}


	const btnSEOAuditHandler = function (e) {
		e.preventDefault();
		// Check if .seoreportcontainer  exists, if yes, then scroll to it
		if ($(".seoreportcontainer").length > 0) {
			$("html, body").animate(
				{
					scrollTop: $(".seoreportcontainer").last().offset().top - 200,
				},
				1000
			);
		} else {
			// Redirect to SEO Audit page
			window.location.href = "/tools/seo-audit/";
		}
		return false;
	};

	$(".btn-seoaudit").on("click", btnSEOAuditHandler);
	$(".btn-seoaudit").hover(
		function () {
			$("body").addClass("menuoverlay-seoreport");
		},
		function () {
			$("body").removeClass("menuoverlay-seoreport");
		}
	);


})(jQuery);

jQuery(document).ready(function ($) {
	$(document.body).trigger("wc_fragment_refresh");
	jQuery("img").removeAttr("width").removeAttr("height");
	$("textarea").removeAttr("cols").removeAttr("rows");

	//$('.rank-math-breadcrumb').addClass('woo_breadcums');

	$("li.datahover").hover(function () {
		$(".servicenote").text($(this).data("note"));
	},
		function () {
			$(".servicenote").text('');
		}

	);

	const playVideo = function (videoEl) {
		var video = videoEl.get(0);
		if (video) {
			// Check if video is already playing
			let isVideoPlaying = video.currentTime > 0 && !video.paused && !video.ended && video.readyState > 2;
			if (!isVideoPlaying) {
				video.play();
				videoEl.removeClass("paused");
				videoEl.parent().find(".playpause").hide();
			}
		} else {
			console.log("No Video not found");
		}
		return false;
	};
	const pauseVideo = function (videoEl) {
		var video = videoEl.get(0);
		if (video) {
			video.pause();
			videoEl.addClass("paused");
			videoEl.parent().find(".playpause").show();
		} else {
			console.log("no video tag found");
		}
		return false;
	};
	const togglePlayVideo = function (videoEl) {
		var video = videoEl.get(0);
		console.log("togglePlayVideo clicked");
		if (video) {
			let isVideoPlaying = video.currentTime > 0 && !video.paused && !video.ended && video.readyState > 2;
			if (isVideoPlaying) {
				pauseVideo(videoEl);
			} else {
				playVideo(videoEl);
			}
		}
		// if (video.paused == true) {
		// 	playVideo(videoEl);
		// } else {
		// 	pauseVideo(videoEl);
		// }
		return false;
	};
	$(document).on("click", ".video", function (e) {
		e.preventDefault();
		// get click position
		var clickY = (e.pageY - $(this).offset().top) / $(this).height();
		// avoids interference with controls
		if (clickY > 0.8) {
			return;
		}
		pauseVideo($(this));
	});
	$(document).on("click", ".testimonialvideocontainer .pulse", function (e) {
		e.preventDefault();
		togglePlayVideo($(this).parent().parent().find("video"));
	});
	$(".testimonialvideocontainer video").on("pause", function (e) {
		e.preventDefault();
		pauseVideo($(this));
	});
	$(".testimonialvideocontainer video").on("seeked", function (e) {
		e.preventDefault();
		playVideo($(this));
	});

	$(".number_field").keydown(function (e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if (
			$.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
			// Allow: Ctrl+A, Command+A
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			// Allow: home, end, left, right, down, up
			(e.keyCode >= 35 && e.keyCode <= 40)
		) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if ((e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});

	$("#reg_billing_phone").keydown(function (e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if (
			$.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
			// Allow: Ctrl+A, Command+A
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			// Allow: home, end, left, right, down, up
			(e.keyCode >= 35 && e.keyCode <= 40)
		) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if ((e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});

	$("#billing_phone").keydown(function (e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if (
			$.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
			// Allow: Ctrl+A, Command+A
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			// Allow: home, end, left, right, down, up
			(e.keyCode >= 35 && e.keyCode <= 40)
		) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if ((e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});

	$(".name_field").keydown(function (e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if (
			$.inArray(e.keyCode, [46, 8, 9, 27, 13, 32]) !== -1 ||
			// Allow: Ctrl+A, Command+A
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			// Allow: home, end, left, right, down, up
			(e.keyCode >= 35 && e.keyCode <= 40)
		) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if (e.keyCode < 65 || e.keyCode > 90) {
			e.preventDefault();
		}
	});

	$("#reg_billing_first_name").keydown(function (e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if (
			$.inArray(e.keyCode, [46, 8, 9, 27, 13, 32]) !== -1 ||
			// Allow: Ctrl+A, Command+A
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			// Allow: home, end, left, right, down, up
			(e.keyCode >= 35 && e.keyCode <= 40)
		) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if (e.keyCode < 65 || e.keyCode > 90) {
			e.preventDefault();
		}
	});

	$("#billing_first_name").keydown(function (e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if (
			$.inArray(e.keyCode, [46, 8, 9, 27, 13, 32]) !== -1 ||
			// Allow: Ctrl+A, Command+A
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			// Allow: home, end, left, right, down, up
			(e.keyCode >= 35 && e.keyCode <= 40)
		) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if (e.keyCode < 65 || e.keyCode > 90) {
			e.preventDefault();
		}
	});

	$("#billing_last_name").keydown(function (e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if (
			$.inArray(e.keyCode, [46, 8, 9, 27, 13, 32]) !== -1 ||
			// Allow: Ctrl+A, Command+A
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			// Allow: home, end, left, right, down, up
			(e.keyCode >= 35 && e.keyCode <= 40)
		) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if (e.keyCode < 65 || e.keyCode > 90) {
			e.preventDefault();
		}
	});

	$("#reg_billing_last_name").keydown(function (e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if (
			$.inArray(e.keyCode, [46, 8, 9, 27, 13, 32]) !== -1 ||
			// Allow: Ctrl+A, Command+A
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			// Allow: home, end, left, right, down, up
			(e.keyCode >= 35 && e.keyCode <= 40)
		) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if (e.keyCode < 65 || e.keyCode > 90) {
			e.preventDefault();
		}
	});

	$("#shipping_first_name").keydown(function (e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if (
			$.inArray(e.keyCode, [46, 8, 9, 27, 13, 32]) !== -1 ||
			// Allow: Ctrl+A, Command+A
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			// Allow: home, end, left, right, down, up
			(e.keyCode >= 35 && e.keyCode <= 40)
		) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if (e.keyCode < 65 || e.keyCode > 90) {
			e.preventDefault();
		}
	});

	$("#shipping_last_name_field").keydown(function (e) {
		// Allow: backspace, delete, tab, escape, enter and .
		if (
			$.inArray(e.keyCode, [46, 8, 9, 27, 13, 32]) !== -1 ||
			// Allow: Ctrl+A, Command+A
			(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
			// Allow: home, end, left, right, down, up
			(e.keyCode >= 35 && e.keyCode <= 40)
		) {
			// let it happen, don't do anything
			return;
		}
		// Ensure that it is a number and stop the keypress
		if (e.keyCode < 65 || e.keyCode > 90) {
			e.preventDefault();
		}
	});

	function checking_suburb_postcode(yourInput, me) {
		re = /[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
		var isSplChar = re.test(yourInput);
		if (isSplChar) {
			var no_spl_char = yourInput.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, "");
			me.val(no_spl_char);
		}
	}

	$("#suburb").keyup(function () {
		var yourInput = $(this).val();
		var me = $(this);
		checking_suburb_postcode(yourInput, me);
	});

	$("#suburb1").keyup(function () {
		var yourInput = $(this).val();
		var me = $(this);
		checking_suburb_postcode(yourInput, me);
	});

	var interval;
	// var container = $(".number-1300");
	// if (container.length) {
	// 	container.shuffleLetters({
	// 		text: "AN SEO AGENCY",
	// 	});
	// }
	var temp = 1;

	// function shuffle() {
	// 	if (!container.length) return;

	// 	var text = "";
	// 	if (temp === 1) {
	// 		container.removeClass("black-no");
	// 		container.addClass("orange-no");
	// 		container.parent("div").removeClass("black-no");
	// 		container.parent("div").addClass("orange-no");
	// 		text = "787 753";
	// 		temp = 2;
	// 	} else {
	// 		container.removeClass("orange-no");
	// 		container.addClass("black-no");
	// 		container.parent("div").removeClass("orange-no");
	// 		container.parent("div").addClass("black-no");
	// 		text = "AN SEO AGENCY";
	// 		temp = 1;
	// 	}
	// 	container.shuffleLetters({
	// 		text: text,
	// 	});
	// }
	// interval = setInterval(shuffle, 3000);

	// container
	// 	.mouseover(function () {
	// 		clearInterval(interval);
	// 		container.shuffleLetters({
	// 			text: "787 753",
	// 		});
	// 	})
	// 	.mouseout(function () {
	// 		interval = setInterval(shuffle, 3000);
	// 	});

	var TxtType = function (el, toRotate, period) {
		this.toRotate = toRotate;
		this.el = el;
		this.loopNum = 0;
		this.period = parseInt(period, 10) || 2000;
		this.txt = "";
		this.tick();
		this.isDeleting = false;
	};

	TxtType.prototype.tick = function () {
		var i = this.loopNum % this.toRotate.length;
		var fullTxt = this.toRotate[i];

		if (this.isDeleting) {
			this.txt = fullTxt.substring(0, this.txt.length - 1);
		} else {
			this.txt = fullTxt.substring(0, this.txt.length + 1);
		}

		this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

		var that = this;
		var delta = 120 - Math.random() * 100;

		if (this.isDeleting) {
			delta /= 2.25;
		}

		if (!this.isDeleting && this.txt === fullTxt) {
			delta = this.period;
			this.isDeleting = true;
		} else if (this.isDeleting && this.txt === "") {
			this.isDeleting = false;
			this.loopNum++;
			delta = 200;
		}

		setTimeout(function () {
			that.tick();
		}, delta);
	};

	window.onload = function () {
		var elements = document.getElementsByClassName("typewrite");
		for (var i = 0; i < elements.length; i++) {
			var toRotate = elements[i].getAttribute("data-type");
			var period = elements[i].getAttribute("data-period");
			if (toRotate) {
				new TxtType(elements[i], JSON.parse(toRotate), period);
			}
		}

		var css = document.createElement("style");
		css.type = "text/css";
		css.innerHTML = ".typewrite > .wrap { color: #f7941d; }";
		document.body.appendChild(css);
	};
});

