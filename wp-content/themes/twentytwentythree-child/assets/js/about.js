var flag = true;

jQuery(window).scroll(function() {
    var $element = jQuery('.directordivnew');
    if ($element.length > 0) {
        var hT = $element.offset().top,
            wS = jQuery(this).scrollTop();

        if (flag && wS > (hT - 120)) {
            console.log('coming', wS, (hT - 120));
            jQuery('button.btn_expand.btn-theme.expbtn').trigger('click');
            flag = false;
        }
    } else {
        //console.error('Element with class .directordivnew not found!');
    }
});


/*
jQuery(document).on("click", ".btn_expand.btn-theme.is-active", function (e) {
e.preventDefault();
jQuery('button.btn_expand.btn-theme').addClass('expbtn');
});*/
