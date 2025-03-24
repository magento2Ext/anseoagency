jQuery(document).ready(function ($) {
	// for home case study tab slider
	let test_slider = $(".videotestimonial-for").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		infinite: false,
		autoplay: false,
		autoplaySpeed: 3000,
		//fade: true,
		asNavFor: ".videotestimonial-nav",
	});

	$(".videotestimonial-nav").slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: true,
		arrows: true,
		autoplay: false,
		autoplaySpeed: 3000,
		// centerMode: true,
		infinite: true,
		focusOnSelect: true,
		asNavFor: ".videotestimonial-for",
		responsive: [
			{
				breakpoint: 1440,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 575,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				},
			},
		],
	});

	test_slider.on("beforeChange", function (event, slick, currentSlide, nextSlide) {
		$.each(slick.$slides.find("video"), function () {
			$(this)[0].pause();
		});
	});

	$.each($(".videotestimonial-for video"), function () {
		$(this)[0].pause();
	});
});
