jQuery(document).ready(function ($) {

    $('ol[start]').each(function () {
        var val = parseFloat($(this).attr("start")) - 1;
        $(this).css('counter-increment', 'my-awesome-counter ' + val);
    });

    $('.menu-list-item-main').each(function () {
        $(this).find(".digimarkli").wrapAll("<div class='digimark'></div>");
    });

    // an alternative structure to check individual matches
    if (navigator.userAgent.match(/Android/i)) {
        $("body").addClass("android_device");
        console.log('android');
    }
    if (navigator.userAgent.match(/iPhone/i)) {
        $("body").addClass("iphone_device");
        console.log('iphone');
    }


    var ico = $('<i class="fa fa-angle-down sks_custom" aria-hidden="true"></i>');
    $("nav#menu li:has(ul) > a").append(ico);

    $("nav#menu li:has(ul)").on("click", function () {
        $(this).toggleClass("open");
    });

    $("a#toggle").on("click", function (e) {
        $("html").toggleClass("open-menu");
        return false;
    });

    $("div#overlay").on("click", function () {
        $("html").removeClass("open-menu");
    });

    /*$('.storybx .wplightbox').on('click', function () {
        $('body').addClass('story_open');
    });

    $("#html5-close-fullscreen").click(function () {
        alert('hi');
        $('body').removeClass('story_open');
    });*/


    //	$(".google_cheatsheet_container .semititle").on("click", function (e) {
    //		$("body").toggleClass("story_open");
    //		return false;
    //	});

    $(".storybx .wplightbox, .applynowpopup, .bannerleft_content .type2.getproposal, .ctacontainer .ctabtn, .ftrproposal > a, .directorletter a.btn-theme").on(
        "click",
        function () {
            $("body").addClass("story_open");
        }
    );

    $(document).on("click", "#html5-close-fullscreen, .mh-icon-close, #html5-close, #html5-lightbox-overlay, .tf-v1-close, .tf-v1-popup", function () {
        $("body").removeClass("story_open");
        $(".casestudyslide .slick-next").trigger("click");
        $(".tf-v1-close").trigger("click");
        console.log("clk1");
    });
    $(document).keyup(function (e) {
        if (e.keyCode == 27) {
            $("body").removeClass("story_open");
            $(".casestudyslide .slick-next").trigger("click");
            console.log("clk1");
        }
    });

    $(".seoservice_tablist .hs.tablist li").on("click", function () {
        $(this).addClass("active").siblings().removeClass("active");
    });

    /*Scroll top*/
    var scrollTop = $(".scrollTop");
    $(window).scroll(function () {
        var topPos = $(this).scrollTop();
        if (topPos > 0) {
            $(scrollTop).css("opacity", "1");
        } else {
            $(scrollTop).css("opacity", "0");
        }
    });
    $(scrollTop).click(function () {
        $("html, body").animate(
            {
                scrollTop: 0,
            },
            600
        );
        return false;
    });

    /*Menu dropdown*/
    var ico = $('<i class="fa fa-angle-down menudrop" aria-hidden="true"></i>');
    $(".menu_link li:has(.drp-megamenu) > a,.menu_link li:has(.dropdown-menu) > a").append(ico);
    $(".menudrop").on("click", function (e) {
        $(this).parent().parent().addClass("no-hover");

        $(".menu_link ul li").not($(this).parent().parent()).find(".drp-megamenu").stop(true, true).delay(200).fadeOut(500);
        $(".menu_link ul li").not($(this).parent().parent()).removeClass("open");
        $(".menu_link ul li a .menudrop").not($(this)).removeClass("openedmenu");
        $(".menu_link ul li a .menudrop").not($(this)).addClass("closemenu");

        e.preventDefault();
        if ($(this).hasClass("openedmenu")) {
            $(this).parent().parent().find(".drp-megamenu").stop(true, true).delay(200).fadeOut(500);
            $(this).removeClass("openedmenu");
            $(this).addClass("closemenu");
        } else {
            $(this).parent().parent().find(".drp-megamenu").stop(true, true).delay(200).fadeIn(500);
            $(this).removeClass("closemenu");
            $(this).addClass("openedmenu");
        }
    });

    if ($(window).width() >= 1120) {
        $("header").hover(
            function () {
                $("body").addClass("menuoverlay");
                $(window).trigger("resize");
            },
            function () {
                $("body").removeClass("menuoverlay");
            }
        );
    }

    if ($(window).width() >= 1120) {
        $(".submenu > li.has-sub").hover(
            function () {
                $(this).addClass("submenuhover");
            },
            function () {
                $(this).removeClass("submenuhover");
            }
        );
    }

    // $(".ftlinkdiv .wid33 .fttitle").click(function(){
    // 	$(this).toggleClass("ft_openmenu");
    // 	$(this).next(".ftlinkdiv ul").stop().slideToggle();
    // });

    if ($(".accordion-demo").length) {
        $(".accordion-demo").smk_Accordion({
            showIcon: true, //boolean
            animation: true, //boolean
            closeAble: true, //boolean
            closeOther: false, //boolean
            slideSpeed: 200, //integer, miliseconds
        });
    }

    var $this = $(this);
    function serviceblocklinkheight() {
        var max = 0;
        $(".servicebx_container .serviceinfobx span", $this)
            .each(function () {
                $(this).height("");
                var h = $(this).height();
                max = Math.max(max, h);
            })
            .height(max);
    }

    //setHeight();
    $(window).on("load resize orientationchange", serviceblocklinkheight);
    var shrinkHeader = 350;
    var ww = window.innerWidth;
    if (ww > 300) {
        // console.log(ww);
        $(window).scroll(function () {
            var scroll = getCurrentScroll();
            var pad_top = 0;

            var headproposal = $("body header").find(".headproposal");

            if (scroll >= shrinkHeader) {
                $("body header").addClass("fixhead");
                $(".holiday-header").addClass("fixhead")
                $(".holiday-header").addClass("fixed-header")
                    ;
                $("body.fixedtabpg").addClass("fixedinrsection");
                headproposal ? headproposal.addClass("btn-wiggle") : null;
                pad_top = $("body header").outerHeight();
                if ($(".fixedinrsection .inrpage_sec:not(.ignore-fixed)").length) {
                    pad_top += $(".inrpage_sec").outerHeight();
                    pad_top += parseInt($(".inrpage_sec").css("marginTop").replace("px", ""));
                    pad_top += parseInt($(".inrpage_sec").css("marginBottom").replace("px", ""));
                }
                $("body").css("paddingTop", pad_top);
            } else {
                $("body header").removeClass("fixhead");
                $(".holiday-header").removeClass("fixhead");
                $(".holiday-header").removeClass("fixed-header");
                $("body.fixedtabpg").removeClass("fixedinrsection");
                $("body").css("paddingTop", "");
                headproposal ? headproposal.removeClass("btn-wiggle") : null;
            }
        });
        function getCurrentScroll() {
            return window.pageYOffset || document.documentElement.scrollTop;
        }
    }
    

    $(".submenu > li").on("mouseenter", function () {
        $(this).addClass("menu-item-hover").siblings().removeClass("menu-item-hover");
    });

    $("#menu-primary-menu-1 .el-depth-0").on("mouseenter", function () {
        if (!$(this).find(".submenu > li.menu-item-hover").length) {
            $(this).find(".submenu > li:first-child").trigger("mouseenter");
        }
    });

    jQuery(".wid25 .fttitle").click(function () {
        jQuery(this).toggleClass("ft_openmenu");
        jQuery(this).next(".wid25 ul").stop().slideToggle();
    });

    if ($(".casestudyslide").length > 0) {
        //case study slider
        $(".casestudyslide").slick({
            dots: false,
            infinite: false,
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            //centerMode: true,
            autoplaySpeed: 5000,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                //             ,
                //                       {
                //                      breakpoint:575,
                //                      settings: {
                //                        centerMode: true,
                //                        slidesToShow: 2,
                //                        slidesToScroll: 1,
                //                      },
                //                    }
            ],
        });
    }

    // Add class to .getproposal button on hover
    $(".getproposal").hover(
        function () {
            $("body").addClass("menuoverlay-proposal");
        },
        function () {
            $("body").removeClass("menuoverlay-proposal");
        }
    );

    let $rplg_close = $('<span class="rplg-badge-close">×</span>');

    $rplg_close.on('click', function () {
        $('.rplg').hide();
    });

    $('.rplg-badge-cnt').append($rplg_close);

});

// featured in box hover --- tilt style hover
let els = document.getElementsByClassName("tilt");

Array.prototype.forEach.call(els, function (el) {
    const height = el.clientHeight;
    const width = el.clientWidth;

    el.addEventListener("mousemove", handleMove);

    function handleMove(e) {
        const xVal = e.layerX;
        const yVal = e.layerY;
        const yRotation = 20 * ((xVal - width / 2) / width);
        const xRotation = -20 * ((yVal - height / 2) / height);

        el.style.transform = "perspective(1000px) scale(1.0) rotateX(" + xRotation + "deg) rotateY(" + yRotation + "deg)";
    }

    el.addEventListener("mouseout", function () {
        el.style.transform = "perspective(1000px) scale(1) rotateX(0) rotateY(0)";
    });

    el.addEventListener("mousedown", function () {
        el.style.transform = "perspective(1000px) scale(0.9) rotateX(0) rotateY(0)";
    });

    el.addEventListener("mouseup", function () {
        el.style.transform = "perspective(1000px) scale(1.1) rotateX(0) rotateY(0)";
    });




});
//    var window = $(window);
//if (window.innerWidth < 480) {
//    $(".ft_linkcontainer .fttitle").click(function(){
//         $(this).toggleClass("ft_openmenu");
//         $(this).next(".ftlinkbox ul.ftlinklist").stop().slideToggle();
//    });
//}


   jQuery(document).ready(function($) {



      $(".accordion-faq-main").hide(); // Hide all content initially



      $(".accordion-faq-main:first").show(); // Show the first one



      $(".js-accordion-titles:first").addClass("open"); // Add the "open" class to the first title



      $(".js-accordion-titles").click(function() {



         var $this = $(this);



         // If the clicked accordion is not already open



         if ($this.hasClass("open") == false) {



            // Close the currently open accordion



            $(".js-accordion-titles.open").removeClass("open").next().slideUp(300);



            // Open the clicked accordion



            $this.addClass("open").next().slideDown(300);



         }



      });



   });
