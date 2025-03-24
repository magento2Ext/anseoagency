jQuery(document).ready(function ($) {
	$(".hm_bnr_slideone").slick({
		lazyLoad: "ondemand",
		arrows: false,
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		horizontal: true,
		fade: true,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 3000,
	});

	$(".hm_bnr_slidetwo").slick({
		lazyLoad: "ondemand",
		arrows: false,
		dots: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		horizontal: true,
		fade: true,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 3000,
	});



	$(".marqueeslider").slick({
		speed: 9000,
		autoplay: true,
		autoplaySpeed: 0,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		variableWidth: true,
	});





	letterCarousel(".trustedbusi_row", ".rowone_trusted");
	letterCarouseltwo(".trustedbusi_row", ".rowtwo_trusted");

	function letterCarousel(parent_cls, child_cls) {
		var e = jQuery(parent_cls + " " + child_cls),
			t = jQuery(window).height();
		jQuery(window).on("scroll", function () {
			if (jQuery(parent_cls).length) {
				var t = jQuery(document).scrollTop() + jQuery(window).height(),
					n = jQuery(parent_cls).offset().top;

				if (n <= t) {
					var i = jQuery(document).scrollTop() - n + jQuery(window).height();
					var scroll = i - 200;
					var scroll_slow = scroll + scroll / 70 / 100;
					var img_scroll = (scroll_slow * 30) / 100;
					e.css({
						transform: "translateX(" + img_scroll + "px)",
					});
				}
			}
		});
	}

	function letterCarouseltwo(parent_cls, child_cls) {
		var e = jQuery(parent_cls + " " + child_cls),
			t = jQuery(window).height();
		jQuery(window).on("scroll", function () {
			if (jQuery(parent_cls).length) {
				var t = jQuery(document).scrollTop() + jQuery(window).height(),
					n = jQuery(parent_cls).offset().top;

				if (n <= t) {
					var i = jQuery(document).scrollTop() - n + jQuery(window).height();
					var scroll = i + 200;
					var scroll_slow = scroll + scroll / 70 / 100;
					var img_scroll = (-scroll_slow * 30) / 100;
					e.css({
						transform: "translateX(" + img_scroll + "px)",
					});
				}
			}
		});
	}

});

/*=========================*/

