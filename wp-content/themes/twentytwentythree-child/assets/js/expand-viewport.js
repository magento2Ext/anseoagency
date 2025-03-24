jQuery(document).ready(function ($) {
	/**
	 * Copyright 2012, Digital Fusion
	 * Licensed under the MIT license.
	 * http://teamdf.com/jquery-plugins/license/
	 *
	 * @author Sam Sehnert
	 * @desc A small plugin that checks whether elements are within
	 *     the user visible viewport of a web browser.
	 *     only accounts for vertical position, not horizontal.
	 */

	$.fn.visible = function (partial) {
		var $t = $(this),
			$w = $(window),
			viewTop = $w.scrollTop(),
			viewBottom = viewTop + $w.height(),
			_top = $t.offset().top,
			_bottom = _top + $t.height(),
			compareTop = partial === true ? _bottom : _top,
			compareBottom = partial === true ? _top : _bottom;

		return compareBottom <= viewBottom && compareTop >= viewTop;
	};
	$(window).scroll(function (event) {
		$(".cta_getproposal").each(function (i, el) {
			$(this).toggleClass("expandcta1", $(el).visible(true));
			$(this).find(".ctabtn").toggleClass("btn-wiggle", $(el).visible(true));
		});

		$(".cta_audit .ctasmalltext").each(function (i, el) {
			var el = $(el);

			if (el.visible(true)) {
				$(".cta_audit").addClass("expandcta1");
				$("body").addClass("showauditcta");
			} else {
				$(".cta_audit").removeClass("expandcta1");
				$("body").removeClass("showauditcta");
			}
		});
	});
});
