<?php



// Enqueue parent theme styles

function twentytwentythree_child_enqueue_styles() {

    wp_enqueue_style('twentytwentythree-parent-style', get_template_directory_uri() . '/style.css');

}

add_action('wp_enqueue_scripts', 'twentytwentythree_child_enqueue_styles');

// Enqueue styles and scripts

function enqueue_multiple_styles() {



    // Enqueue additional CSS files

    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/assets/css/common-critical_ver=1721214277.css', array(), '1.0.0');

    wp_enqueue_style('custom-style1', get_stylesheet_directory_uri() . '/assets/css/dragbox-style_ver=1721214277.css', array(), '1.0.0');

       wp_enqueue_style('custom-style2', get_stylesheet_directory_uri() . '/assets/css/headerfirst.css', array(), '1.0.0');

       wp_enqueue_style('custom-style3', get_stylesheet_directory_uri() . '/assets/css/common-resp_ver=1721214277.css', array(), '1.0.0');

       

       wp_enqueue_style('custom-style4', get_stylesheet_directory_uri() . '/assets/css/home_ver=1721214277.css', array(), '1.0.0');

       wp_enqueue_style('custom-style5', get_stylesheet_directory_uri() . '/assets/css/marquee.css', array(), '1.0.0');wp_enqueue_style('custom-style6', get_stylesheet_directory_uri() . '/assets/css/marquee_ver=1721214277.css', array(), '1.0.0');

       wp_enqueue_style('custom-style7', get_stylesheet_directory_uri() . '/assets/css/sec_mkt-services_ver=1721214277.css', array(), '1.0.0');

    wp_enqueue_style('custom-style8', get_stylesheet_directory_uri() . '/assets/css/scroll-tabs_ver=1721214277.css', array(), '1.0.0');

     wp_enqueue_style('custom-style9', get_stylesheet_directory_uri() . '/assets/css/sec_awards_ver=1721214277.css', array(), '1.0.0');

    wp_enqueue_style('custom-style10', get_stylesheet_directory_uri() . '/assets/css/home.latest-posts_ver=1721214277.css', array(), '1.0.0');

     wp_enqueue_style('custom-style11', get_stylesheet_directory_uri() . '/assets/css/sec_inr_bloglistcont.css', array(), '1.0.0');

 wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0.0');

 wp_enqueue_style('custom-style13', get_stylesheet_directory_uri() . '/assets/css/style.min_ver=6.6.css', array(), '1.0.0');

 wp_enqueue_style('custom-style14', get_stylesheet_directory_uri() . '/assets/css/services.css', array(), '1.0.0');

 wp_enqueue_style('custom-style15', get_stylesheet_directory_uri() . '/assets/css/location-detail-new.css', array(), '1.0.0');

 wp_enqueue_style('custom-style16', get_stylesheet_directory_uri() . '/assets/css/sec_teamcont_one.css', array(), '1.0.0');

 wp_enqueue_style('custom-style17', get_stylesheet_directory_uri() . '/assets/css/location-detail.css', array(), '1.0.0');

 wp_enqueue_style('custom-style18', get_stylesheet_directory_uri() . '/assets/css/location.css', array(), '1.0.0');

 wp_enqueue_style('custom-style19', get_stylesheet_directory_uri() . '/assets/css/sec_location.css', array(), '1.0.0');

 wp_enqueue_style('custom-style20', get_stylesheet_directory_uri() . '/assets/css/sec_mktingtool_ver=1721214277.css', array(), '1.0.0');

 wp_enqueue_style('custom-style21', get_stylesheet_directory_uri() . '/assets/css/blogdtlpg.css', array(), '1.0.0');

 wp_enqueue_style('custom-style22', get_stylesheet_directory_uri() . '/assets/css/bloglist.css', array(), '1.0.0');

 wp_enqueue_style('custom-style23', get_stylesheet_directory_uri() . '/assets/css/about.css', array(), '1.0.0');

 wp_enqueue_style('custom-style24', get_stylesheet_directory_uri() . '/assets/css/awardtimeline.css', array(), '1.0.0');

 wp_enqueue_style('custom-style25', get_stylesheet_directory_uri() . '/assets/css/ourjourney-sec.css', array(), '1.0.0');

 wp_enqueue_style('custom-style26', get_stylesheet_directory_uri() . '/assets/css/custom.css', array(), '1.0.0');

 wp_enqueue_style('custom-style27', get_stylesheet_directory_uri() . '/assets/css/clientreview_ver=1721214277.css', array(), '1.0.0');

 wp_enqueue_style('custom-style28', get_stylesheet_directory_uri() . '/assets/css/sec_process.css', array(), '1.0.0');

 wp_enqueue_style('custom-style29', get_stylesheet_directory_uri() . '/assets/css/mobilemenu_ver=1721214277.css', array(), '1.0.0');

 wp_enqueue_style('custom-style30', get_stylesheet_directory_uri() . '/assets/css/smk-accordion_ver=1721214277.css', array(), '1.0.0');

 //wp_enqueue_style('custom-style31', get_stylesheet_directory_uri() . '/assets/css/career.css', array(), '1.0.0');

wp_enqueue_style('custom-style32', get_stylesheet_directory_uri() . '/assets/css/tools.css', array(), '1.0.0');

wp_enqueue_style('custom-style33', get_stylesheet_directory_uri() . '/assets/css/maintools.css', array(), '1.0.0');

wp_enqueue_style('custom-style34', get_stylesheet_directory_uri() . '/assets/css/casestudy-stories.css', array(), '1.0.0');

wp_enqueue_style('custom-style35', get_stylesheet_directory_uri() . '/assets/css/industry-platform.css', array(), '1.0.0');

wp_enqueue_style('custom-style36', get_stylesheet_directory_uri() . '/assets/css/sec_teammemberlist.css', array(), '1.0.0');

wp_enqueue_style('custom-style37', get_stylesheet_directory_uri() . '/assets/css/ser_list_section.css', array(), '1.0.0');

 wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme_ver=1721214277.css', array(), '1.0.0');

 wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/css/slick_ver=1721214277.css', array(), '1.0.0');

}

add_action('wp_enqueue_scripts', 'enqueue_multiple_styles');



// Enqueue Swiper and Slick scripts with custom inline JS

function enqueue_custom_slider_scripts() {

    // Enqueue Swiper JS and CSS



 wp_enqueue_script('custom-main-js', get_stylesheet_directory_uri() . '/assets/js/about.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js1', get_stylesheet_directory_uri() . '/assets/js/clientstafftab.js', array('jquery'), null, true );

wp_enqueue_script('custom-main-js2', get_stylesheet_directory_uri() . '/assets/js/common.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js3', get_stylesheet_directory_uri() . '/assets/js/Draggable.min.js', array('jquery'), null, true );



 wp_enqueue_script('custom-main-js4', get_stylesheet_directory_uri() . '/assets/js/easy-responsive-tabs.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js5', get_stylesheet_directory_uri() . '/assets/js/expand-viewport.js', array('jquery'), null, true );

wp_enqueue_script('custom-main-js6', get_stylesheet_directory_uri() . '/assets/js/gsap.min.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js7', get_stylesheet_directory_uri() . '/assets/js/home.js', array('jquery'), null, true );



 wp_enqueue_script('custom-main-js8', get_stylesheet_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js9', get_stylesheet_directory_uri() . '/assets/js/jquery.shuffleLetters.js', array('jquery'), null, true );

wp_enqueue_script('custom-main-js10', get_stylesheet_directory_uri() . '/assets/js/jquery.simplyscroll.min.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js11', get_stylesheet_directory_uri() . '/assets/js/marquee.js', array('jquery'), null, true );



 wp_enqueue_script('custom-main-js12', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js13', get_stylesheet_directory_uri() . '/assets/js/scroll-tabs.js', array('jquery'), null, true );

wp_enqueue_script('custom-main-js14', get_stylesheet_directory_uri() . '/assets/js/slick.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js15', get_stylesheet_directory_uri() . '/assets/js/slidebx-script.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js16', get_stylesheet_directory_uri() . '/assets/js/smk-accordion.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js17', get_stylesheet_directory_uri() . '/assets/js/video-testi.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js18', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js19', get_stylesheet_directory_uri() . '/assets/js/mobile/menu-mobile.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js20', get_stylesheet_directory_uri() . '/assets/js/typewriter.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js21', get_stylesheet_directory_uri() . '/assets/js/typewritestxt.js', array('jquery'), null, true );

 wp_enqueue_script('custom-main-js22', get_stylesheet_directory_uri() . '/assets/js/blog.js', array('jquery'), null, true );

//  wp_enqueue_script('custom-main-js23', get_stylesheet_directory_uri() . '/assets/js/guidepg.js', array('jquery'), null, true );

    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), null);

    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);

     wp_enqueue_script('typeform-js', 'https://embed.typeform.com/embed.js', array(), null, true);



    // Enqueue Slick Carousel JS and CSS

    wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), null);

    wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);



    // Custom Inline JS for Swiper and Slick sliders

    $custom_slider_js = "

        document.addEventListener('DOMContentLoaded', function () {

            const swiper = new Swiper('.marquee-slider', {

                slidesPerView: 7, // Display 7 slides

                spaceBetween: 10, // Optional spacing between slides

                loop: true, // Enable infinite loop

                speed: 3000, // Adjust speed for smooth sliding

                autoplay: {

                    delay: 0, // No delay at all

                    disableOnInteraction: false, // Continue autoplay on interaction

                },

                allowTouchMove: false, // Disable touch dragging for a marquee effect

            });

        });



        jQuery(document).ready(function () {

            jQuery('.slider_feat').slick({

                slidesToShow: 3, // Adjust to control visible slides

                slidesToScroll: 1,

                infinite: true,

                autoplay: true,

                autoplaySpeed: 0,

                speed: 3000, // Adjust speed for smooth scrolling

                cssEase: 'linear', // Ensures smooth movement

                variableWidth: true,

            });



            jQuery('.casestudyslide').slick({

                dots: false,

                infinite: true,

                arrows: true,

                slidesToShow: 4,

                slidesToScroll: 1,

                autoplay: true,

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

                ],

            });

        });

    ";



    // Add the inline script after the dependencies are loaded

    wp_add_inline_script('swiper-js', $custom_slider_js);

}

add_action('wp_enqueue_scripts', 'enqueue_custom_slider_scripts');



// Register navigation menus

function register_theme_menus() {

    register_nav_menus(array(

        'primary-menu' => __('Primary Menu', 'twentytwentyfive'),

    ));

}

add_action('init', 'register_theme_menus');



function register_footer_menus() {

    register_nav_menus(array(

        'footer-first'      => __('Footer First', 'twentytwentythree-child'),

        'footer-locations'      => __('Footer Locations', 'twentytwentythree-child'),

        'footer-services'       => __('Footer Services', 'twentytwentythree-child'),

        'footer-solutions'      => __('Footer Solutions', 'twentytwentythree-child'),

        'footer-quick-links'    => __('Footer Quick Links', 'twentytwentythree-child'),

        'footer-resources'      => __('Footer Resources', 'twentytwentythree-child'),

    ));

}

add_action('after_setup_theme', 'register_footer_menus');



if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(

        'page_title' => 'Theme Settings',

        'menu_title' => 'Theme Settings',

        'menu_slug'  => 'theme-settings',

        'capability' => 'edit_posts',

        'redirect'   => false,

    ));

}



class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {



    // Start each level of the submenu

    public function start_lvl(&$output, $depth = 0, $args = null) {

        $indent = str_repeat("\t", $depth);

        $submenu_class = $depth === 0 ? 'menu-level1' : 'sub-menu-level-2'; // Custom classes for levels



        // Check if the submenu has another level (submenu) and add the specific div structure

        if ($depth === 1) {

            $output .= "\n$indent<div class='submenu-list'>\n";

            $output .= "$indent<div class='menu-list-wrapper'>\n";

            $output .= "$indent<ul class='menu-list-item-main'>\n";

        }elseif($depth === 2){

           

        }

         else {

            $output .= "\n$indent<div class='drp-megamenu'>\n";

            $output .= "$indent<div class='wrapper'>\n";

            $output .= "$indent<ul class='submenu $submenu_class'>\n";

        }

    }



    // End each level of the submenu

    public function end_lvl(&$output, $depth = 0, $args = null) {

        $indent = str_repeat("\t", $depth);



        // Close submenu and divs

        if ($depth === 1) {

            $output .= "$indent</ul>\n";

            $output .= "$indent</div><!-- .menu-list-wrapper -->\n";

            $output .= "$indent</div><!-- .submenu-list -->\n";

        } elseif($depth === 2){

            

        }

        else {

            $output .= "$indent</ul>\n";

            $output .= "$indent</div><!-- .drp-megamenu -->\n";

            $output .= "$indent</div><!-- .wrapper -->\n";

        }

    }



    // Start each element of the menu

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {

        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = 'menu-item-' . $item->ID;



        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));

        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';



        $output .= $indent . '<li' . $class_names . '>';



        $attributes  = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';

        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';

        $attributes .= !empty($item->xfn)        ? ' rel="' . esc_attr($item->xfn) . '"' : '';

        $attributes .= !empty($item->url)        ? ' href="' . esc_attr($item->url) . '"' : '';



        $menu_img_data = get_field('menu_image', $item->ID); // Replace with your logic if different

        $menu_img_url = !empty($menu_img_data['url']) ? $menu_img_data['url'] : '';



        $item_output = $args->before;

        $item_output .= '<a' . $attributes . '>';



        // Add custom structure with <span> and <img>

        if ($menu_img_url) {

            $item_output .= '<span class="mnnuimg"><img src="' . esc_url($menu_img_url) . '" alt="' . esc_attr($item->title) . '"></span>';

        }

        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;

        $item_output .= '</a>';

        $item_output .= $args->after;



        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);

    }



    // End each element of the menu

    public function end_el(&$output, $item, $depth = 0, $args = null) {

        $output .= "</li>\n";

    }

}





class Mobile_Walker_Nav_Menu extends Walker_Nav_Menu {



    // Start each level of the submenu

    public function start_lvl(&$output, $depth = 0, $args = null) {

        $indent = str_repeat("\t", $depth);

        $submenu_class = 'mobile-submenu'; // Custom class for mobile submenu



        // Add wrapper div for mobile submenu

        if($depth === 2){

        $output .= "$indent<ul class='sub-menu lvl-depth-2'>\n";

        }else{

       

        $output .= "$indent<ul class='$submenu_class'>\n";

}

    }



    // End each level of the submenu

    public function end_lvl(&$output, $depth = 0, $args = null) {

        $indent = str_repeat("\t", $depth);

        if($depth === 2){

        $output .= "$indent</ul>\n";

        }else{

        // Close submenu wrapper

        $output .= "$indent</ul>\n";

       }

    }



    // Start each element of the menu

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {

        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        $classes[] = 'menu-item-' . $item->ID;



        // Add custom class for mobile

        $classes[] = 'mobile-menu-item';



        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));

        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';



        $output .= $indent . '<li' . $class_names . '>';



        $attributes  = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';

        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';

        $attributes .= !empty($item->xfn)        ? ' rel="' . esc_attr($item->xfn) . '"' : '';

        $attributes .= !empty($item->url)        ? ' href="' . esc_attr($item->url) . '"' : '';



        // Get image or any mobile-specific logic

        $menu_img_data = get_field('menu_image', $item->ID);

        $menu_img_url = !empty($menu_img_data['url']) ? $menu_img_data['url'] : '';



        $item_output = $args->before;

        $item_output .= '<a' . $attributes . '>';



        if ($menu_img_url) {

            $item_output .= '<span class="mobile-menu-icon"><img src="' . esc_url($menu_img_url) . '" alt="' . esc_attr($item->title) . '"></span>';

        }

        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;

        $item_output .= '</a>';

        $item_output .= $args->after;



        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);

    }



    // End each element of the menu

    public function end_el(&$output, $item, $depth = 0, $args = null) {

        $output .= "</li>\n";

    }

}





add_filter('nav_menu_css_class', function($classes, $item, $args, $depth) {

    // Check for a specific menu location

    if (isset($args->theme_location) && $args->theme_location === 'primary-menu') {

        $classes[] = 'has-sub'; // Add your custom class

    }

    return $classes;

}, 10, 4);



function allow_svg_uploads($mimes) {

    $mimes['svg'] = 'image/svg+xml'; // Add SVG mime type

    return $mimes;

}

add_filter('upload_mimes', 'allow_svg_uploads');



function remove_css_on_specific_page() {

    $pages_to_exclude = array(642, 33, 262, 480, 807, 993, 1022, 1840, 1225, 1223, 1227, 2103, 2786, 1321, 1229, 1343, 1339, 1341, 1347, 1349, 1323, 1325, 1665, 1663, 1332, 1329, 3507, 3579, 3511 ,3496);

    $pages_to_exclude1 = array(547,262,807,1022, 1225);

    $pages_to_exclude2 = array(642,262);

    $pages_to_exclude3 = array(33,1189, 1840);

    $pages_to_exclude4 = array(262,1022,807);

    $pages_to_exclude5 = array(33);

    $pages_to_exclude6 = array(1022);

    $pages_to_exclude8 = array(642);



    // Check if it's the specific page (replace 'slug' with the actual page slug or ID)

    if (is_page($pages_to_exclude)) {

        wp_dequeue_style('custom-style21'); // Replace with your CSS handle

    }

    if (is_page($pages_to_exclude1)) {

        wp_dequeue_style('custom-style23'); // Replace with your CSS handle

    }

    if (is_page($pages_to_exclude2)) {

        wp_dequeue_style('custom-style19'); // Replace with your CSS handle

    }

    if (is_page($pages_to_exclude3)) {

        wp_dequeue_style('custom-style14'); // Replace with your CSS handle

    }

    if (is_page($pages_to_exclude4)) {

        wp_dequeue_style('custom-style25'); // Replace with your CSS handle

    }

    if (is_page($pages_to_exclude5)) {

        wp_dequeue_style('custom-style17'); // Replace with your CSS handle

    }

    if (is_page($pages_to_exclude5)) {

        wp_dequeue_style('custom-style22'); // Replace with your CSS handle

    }

    if (is_page($pages_to_exclude7)) {

        wp_dequeue_style('custom-style15'); // Replace with your CSS handle

    }

    if (is_page($pages_to_exclude8)) {

        wp_dequeue_style('custom-style31'); // Replace with your CSS handle

    }

}

add_action('wp_enqueue_scripts', 'remove_css_on_specific_page', 20);



function remove_blog_detail_css() {

    // Check if we're on a single blog post page

    if (is_single()) {

        // Replace 'your-css-handle' with the actual handle of the CSS file you want to remove

        wp_dequeue_style('custom-style23');

    }

}

add_action('wp_enqueue_scripts', 'remove_blog_detail_css', 20);



function prioritize_css_on_page() {

    // Check if we are on a specific page (replace with your condition)

    if (is_page(33)) {



        wp_dequeue_style('custom-style4');



        // Enqueue your prioritized CSS

        wp_enqueue_style(

            'custom-priority-css',

            get_stylesheet_directory_uri() . '/assets/css/home_ver=1721214277.css', // Replace with your file path

            array(), // Dependencies

            '1.0.0'  // Version

        );



        wp_dequeue_style('custom-style3');



        // Enqueue your prioritized CSS

        wp_enqueue_style(

            'custom-priority-css5',

            get_stylesheet_directory_uri() . '/assets/css/common-resp_ver=1721214277.css', // Replace with your file path

            array(), // Dependencies

            '1.0.0'  // Version

        );

    }

   if (is_page(262)) {



   wp_dequeue_style('custom-style14');



        // Enqueue your prioritized CSS

        wp_enqueue_style(

            'custom-priority-css10',

            get_stylesheet_directory_uri() . '/assets/css/services.css', // Replace with your file path

            array(), // Dependencies

            '1.0.0'  // Version

        );

    } 

    if (is_page(807)) {



        wp_dequeue_style('custom-style11');



        // Enqueue your prioritized CSS

        wp_enqueue_style(

            'custom-priority-css2',

            get_stylesheet_directory_uri() . '/assets/css/sec_inr_bloglistcont.css', // Replace with your file path

            array(), // Dependencies

            '1.0.0'  // Version

        );

       wp_dequeue_style('custom-style17');



        // Enqueue your prioritized CSS

        wp_enqueue_style(

            'custom-priority-css9',

            get_stylesheet_directory_uri() . '/assets/css/location-detail.css', // Replace with your file path

            array(), // Dependencies

            '1.0.0'  // Version

        );

    } 

    if (is_page(642)) {



        wp_dequeue_style('custom-style23');



        // Enqueue your prioritized CSS

        wp_enqueue_style(

            'custom-priority-css12',

            get_stylesheet_directory_uri() . '/assets/css/about.css', // Replace with your file path

            array(), // Dependencies

            '1.0.0'  // Version

        );



        wp_dequeue_style('custom-style7');



        // Enqueue your prioritized CSS

        wp_enqueue_style(

            'custom-priority-css3',

            get_stylesheet_directory_uri() . '/assets/css/sec_mkt-services_ver=1721214277.css', // Replace with your file path

            array(), // Dependencies

            '1.0.0'  // Version

        );

        wp_dequeue_style('custom-style3');



        // Enqueue your prioritized CSS

        wp_enqueue_style(

            'custom-priority-css6',

            get_stylesheet_directory_uri() . '/assets/css/common-resp_ver=1721214277.css', // Replace with your file path

            array(), // Dependencies

            '1.0.0'  // Version

        );



        wp_dequeue_style('custom-style17');



        // Enqueue your prioritized CSS

        wp_enqueue_style(

            'custom-priority-css7',

            get_stylesheet_directory_uri() . '/assets/css/location-detail.css', // Replace with your file path

            array(), // Dependencies

            '1.0.0'  // Version

        );



    } 

    if (is_page(1811)) {



        // Enqueue your prioritized CSS

        wp_enqueue_style(

            'custom-priority-css14',

            get_stylesheet_directory_uri() . '/assets/css/guidelistnew.css', // Replace with your file path

            array(), // Dependencies

            '1.0.0'  // Version

        );

    } 



}

add_action('wp_enqueue_scripts', 'prioritize_css_on_page', 20);



function generate_breadcrumbs() {

    // Open the breadcrumb container

    echo '<nav aria-label="breadcrumbs" class="rank-math-breadcrumb"><p>';



    // Add the "Home" link

    echo '<a href="' . home_url() . '">Home</a><span class="separator"> - </span>';



    // Check if the current page is a category, single post, page, or archive

    if (is_category() || is_single()) {

        $category = get_the_category();

        if ($category) {

            // Display the category name with a link

            echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a><span class="separator"> - </span>';

        }

        if (is_single()) {

            // Display the post title

            echo '<span class="last">' . get_the_title() . '</span>';

        }

    } elseif (is_page()) {

        // For standard pages

        if ($post = get_post(get_the_ID())) {

            if ($post->post_parent) {

                // Display parent pages if they exist

                $parent_id = $post->post_parent;

                $crumbs = [];

                while ($parent_id) {

                    $page = get_post($parent_id);

                    $crumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';

                    $parent_id = $page->post_parent;

                }

                $crumbs = array_reverse($crumbs);

                foreach ($crumbs as $crumb) {

                    echo $crumb . '<span class="separator"> - </span>';

                }

            }

            // Current page

            echo '<span class="last">' . get_the_title() . '</span>';

        }

    } elseif (is_archive()) {

        // For archive pages

        echo '<span class="last">' . post_type_archive_title('', false) . '</span>';

    } elseif (is_search()) {

        // For search results

        echo '<span class="last">Search results for: ' . get_search_query() . '</span>';

    } elseif (is_404()) {

        // For 404 pages

        echo '<span class="last">Page not found</span>';

    }



    // Close the breadcrumb container

    echo '</p></nav>';

}



function add_inner_page_class($classes) {

    if (!is_front_page()) {

        $classes[] = 'inner_page';

    }

    return $classes;

}

add_filter('body_class', 'add_inner_page_class');



function custom_post_type_guides() {

    $labels = array(

        'name'               => _x('Guides', 'post type general name', 'textdomain'),

        'singular_name'      => _x('Guide', 'post type singular name', 'textdomain'),

        'menu_name'          => _x('Guides', 'admin menu', 'textdomain'),

        'name_admin_bar'     => _x('Guide', 'add new on admin bar', 'textdomain'),

        'add_new'            => __('Add New', 'textdomain'),

        'add_new_item'       => __('Add New Guide', 'textdomain'),

        'new_item'           => __('New Guide', 'textdomain'),

        'edit_item'          => __('Edit Guide', 'textdomain'),

        'view_item'          => __('View Guide', 'textdomain'),

        'all_items'          => __('All Guides', 'textdomain'),

        'search_items'       => __('Search Guides', 'textdomain'),

        'parent_item_colon'  => __('Parent Guides:', 'textdomain'),

        'not_found'          => __('No guides found.', 'textdomain'),

        'not_found_in_trash' => __('No guides found in Trash.', 'textdomain')

    );



    $args = array(

        'labels'             => $labels,

        'public'             => true,

        'publicly_queryable' => true,

        'show_ui'            => true,

        'show_in_menu'       => true,

        'query_var'          => true,

        'rewrite'            => array('slug' => 'guides'),

        'capability_type'    => 'post',

        'has_archive'        => true,

        'hierarchical'       => false,

        'menu_position'      => 5,

        'menu_icon'          => 'dashicons-book', // Custom icon

        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),

        'show_in_rest'       => true, // Enables Gutenberg support

    );



    register_post_type('guides', $args);

}

add_action('init', 'custom_post_type_guides');



function load_guide_single_css() {

    if (is_singular('guides')) {

        wp_enqueue_style('guide-single-style', get_stylesheet_directory_uri() . '/assets/css/guidepg.css');

    }

}

add_action('wp_enqueue_scripts', 'load_guide_single_css');



function custom_theme_setup() {

    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'custom_theme_setup');