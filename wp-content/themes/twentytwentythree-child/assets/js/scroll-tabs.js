(function ($) {

    let init = function () {
        $.each($('.scroll-view'), function () {
            $(window).scroll(window_scroll.bind(this));
            $(this).find('[data-active_class] > *').on('click', activate_tab);
        });
    };

    let window_scroll = function() {
        let $window = $(window);
        let $content = $(this).find('.scroll-view-tabs-content');
        let window_top = parseInt($window.scrollTop());
        let content_top = parseInt($content.offset().top) - 180 + parseInt($content.css('paddingTop').replace('px', ''));
        let active_tab = 0;
        let content_top_with_item = content_top;

        $.each($content.find('> *'), function(idx, item) {
            if(window_top >= content_top_with_item) {
                active_tab = idx;
            }

            content_top_with_item += parseInt($(item).outerHeight()) + parseInt($(item).css('marginBottom').replace('px', ''));
        });

        let tab_wrapper = $(this).find('[data-active_class]');
        let active_class = tab_wrapper.attr('data-active_class');

        tab_wrapper.find(' > *:eq(' + active_tab + ')').addClass(active_class).siblings().removeClass(active_class);
    };

    let activate_tab = function () {
        let $content = $(this).closest('.scroll-view').find('.scroll-view-tabs-content');
        let content_top = parseInt($content.offset().top) - 180 + parseInt($content.css('paddingTop').replace('px', ''));
        let active_tab = $(this).index();
        let content_top_with_item = content_top;

        $.each($content.find('> *'), function(idx, item) {
            if(idx < active_tab) {
                content_top_with_item += parseInt($(item).outerHeight()) + parseInt($(item).css('marginBottom').replace('px', ''));
            }
        });

        $("html, body").animate({
            scrollTop: content_top_with_item,
            easing: 'linear'
        }, 100);
    };

    $(function () {
        init();
    });

})(jQuery);


/*(function ($) {

    let init = function () {
        $.each($('.scroll-view'), function () {
            $(this).wrap('<scroll-view></scroll-view>');

            $(this).find('.scroll-view-tabs-content > *:not(:first-child)').hide();
            $(this).find('.scroll-view-tabs > *').on('click', activate_tab);

            let tab_count = $(this).find('.scroll-view-tabs > *').length;
            $(this).parent().height($(this).parent().height() + tab_count * 175);
            $(window).scroll(window_scroll.bind(this));
        });
    };

    let activate_tab = function () {
        let active_class = $(this).parent().attr('data-active_class');
        $(this).addClass(active_class).siblings().removeClass(active_class);
        let $content = $(this).closest('.scroll-view').find('.scroll-view-tabs-content > *:eq(' + $(this).index() + ')');
        $content.siblings().hide();
        $content.stop().fadeIn('slow');
    };

    let window_scroll = function () {
        if ($(document).scrollTop() >= $(this).parent().offset().top) {
            let tab_count = $(this).find('.scroll-view-tabs > *').length;
            let active_tab = Math.floor(($(document).scrollTop() - $(this).parent().offset().top) / (($(this).parent().outerHeight() / tab_count) * 0.3));

            if (active_tab <= tab_count) {
                $(this).find('.scroll-view-tabs > *:eq(' + active_tab + ')').trigger('click');
            }
        }
    };

    $(function () {
        init();
    });

})(jQuery);*/
