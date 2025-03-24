jQuery(document).ready(function ($) {

	$('.page-numbers').addClass('cdp_i');

	if ($(window).width() <= 768) {
		$(".mobiletablecontent").click(function () {
			$(".contenttablediv").toggleClass("table_open");
		});

		$(".blog-lef-filter a.closemenu").click(function () {
			$(".contenttablediv").toggleClass("table_open");
		});
	}

	$(".seoreportcontainer form input[type='text']").on("blur", function () {
		$(this).toggleClass("filled", $(this).val() != "");
	});

	var paginationPage = parseInt($('.cdp').attr('actpage'), 10);
	$('.cdp_i').on('click', function () {
		var go = $(this).attr('href').replace('#!', '');
		if (go === '+1') {
			paginationPage++;
		} else if (go === '-1') {
			paginationPage--;
		} else {
			paginationPage = parseInt(go, 10);
		}
		$('.cdp').attr('actpage', paginationPage);
	});

	new TypeWriter('#typewritetext1', ['Search articles', 'Search blog', 'Search new blog post'], { writeDelay: 100, stopAfterOnce: true });

	$(".removed").each(function () {
		var description = $(this).attr("title");
		var element = $("<aside>" + description + "</aside>");
		var top = $(this).position().top;
		$(this).append(element);
		$(element).css('top', top);
		$(this).hover(function () {
			$(this).data('title', this.title).prop('title', null);
			$(this).find("aside").fadeIn('fast');
		}, function () {
			$(this).prop('title', $(this).data('title'));
			$(this).find("aside").fadeOut('fast');
		})
	});
});

if (document.getElementById("gallerylist")) {
	document.getElementById("gallerylist").onchange = function () {
		window.location.href = this.value;
	};
}

jQuery(window).scroll(function () {
	if (jQuery(".contenttablediv").hasClass("table_open")) {
		jQuery('.contenttablediv').removeClass('table_open');
	}
});

(function () {
	const second = 1000,
		minute = second * 60,
		hour = minute * 60,
		day = hour * 24;

	const birthday = new Date("July 1, 2023").getTime();

	const countdownElement = document.getElementById('countdown');
	const contentElement = document.getElementById('content');

	const daysElement = document.getElementById('days');
	const hoursElement = document.getElementById('hours');
	const minutesElement = document.getElementById('minutes');
	const secondsElement = document.getElementById('seconds');

	if (countdownElement && contentElement && daysElement && hoursElement && minutesElement && secondsElement) {
		const x = setInterval(function () {
			const now = new Date().getTime(),
				distance = birthday - now;

			daysElement.innerText = Math.floor(distance / day);
			hoursElement.innerText = Math.floor((distance % day) / hour);
			minutesElement.innerText = Math.floor((distance % hour) / minute);
			secondsElement.innerText = Math.floor((distance % minute) / second);

			if (distance < 0) {
				let headlineElement = document.createElement('h2');
				headlineElement.innerText = "GA4 is now Live!";
				contentElement.prepend(headlineElement);

				headlineElement.innerText = "GA4 is now Live!";
				countdownElement.style.display = "none";
				contentElement.style.display = "block";
				clearInterval(x);
			}
		}, 0)
	}
}());
