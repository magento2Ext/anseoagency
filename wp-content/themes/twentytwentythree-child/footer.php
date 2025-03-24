<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package WordPress
 * @subpackage YourThemeName
 * @since YourThemeName 1.0
 */
?>

<footer class="btm_ftr">
<div class="sitegradient"></div>
      <div class="wrapper">
        <div class="ft_quicklinksdiv">
          <div class="ftlogo">
            <a href="javascript:void(0);">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/anseo-logo1.svg" alt="<?php bloginfo('name'); ?>" class="logooriginal" />
          </a>
          </div>
           
          <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-first',
            'container'      => 'ul',
            'menu_id'        => 'menu-footer-menu',
            'menu_class'     => 'ftquicklink',
        ));
        ?>

      </div>
      <div class="ft_mainlinkdiv">
          <div class="ftlinkdiv">
            <div class="footer_menus">
              <div class="wid25">
                <div class="fttitle">We offer services in</div>
                 
                    <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-locations',
            'container'      => 'ul',
            'menu_id'        => 'menu-footer-locations',
            'menu_class'     => '',
        ));
        ?>
                 
            </div>
            <div class="wid25">
                <div class="fttitle">Services</div>
                <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-services',
            'container'      => 'ul',
            'menu_id'        => 'menu-footer-traffic-generation',
            'menu_class'     => '',
        ));
        ?>
            </div>
            <div class="wid25">
                <div class="fttitle">Solutions</div>
                <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-solutions',
            'container'      => 'ul',
            'menu_id'        => 'menu-footer-conversion',
            'menu_class'     => '',
        ));
        ?>
            
                <div class="fttitle">Resources</div>
                <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-resources',
            'container'      => 'ul',
            'menu_id'        => 'menu-footer-guides',
            'menu_class'     => '',
        ));
        ?>
    </div>
        <div class="wid25">
        <div class="fttitle">Quick Links</div>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-quick-links',
            'container'      => 'ul',
            'menu_id'        => 'menu-footer-guides',
            'menu_class'     => '',
        ));
        ?>
        <div class="fttitle"><?php the_field('reach_us_heading','option'); ?></div>
        <ul id="menu-footer-guides" class="footer-hidenumber">
        <li><a href="tel:+91<?php echo get_field('phone_number', 'option'); ?>"> <?php the_field('heading'); ?></a></li>
        <li><a href="<?php the_field('address_url','option'); ?>" target="_blank"><?php the_field('reach_us_address','option'); ?></a></li>
        </ul>
            </div>
        </div>
    </div>
    </div>
    <div class="ft_social">
    <ul>
        
            <li class="ft_fblink">
               <a href="<?php echo esc_url(get_field('facebook_url', 'option')); ?>" target="_blank" rel="noreferrer noopener">
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                </a>
            </li>
       

       
            <li class="ft_linkedlink">
                <a href="<?php echo esc_attr(get_field('linked_in_url', 'option')); ?>" target="_blank" rel="noreferrer noopener">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
            </li>
 

       
            <li class="ft_instalink">
                <a href="<?php echo esc_attr(get_field('instagram_url', 'option')); ?>" target="_blank" rel="noreferrer noopener">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>

    </ul>
</div>
<div class="ftquicklink_mobile">
           <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-first',
            'container'      => 'ul',
            'menu_id'        => 'menu-footer-menu-1',
            'menu_class'     => 'ftquicklink',
        ));
        ?>
        </div>
<div class="ft_copyright">
          <p>
            <!-- <a href="privacy-policy/">Privacy Policy</a> --> © Copyright 2025 AnSEOAgency 
            - SEO &amp; Digital Marketing Agency. <br />All rights reserved.
          </p>
        </div>
  </div>

</footer>
    <?php
        // Important: Ensure this function is present to load scripts in the footer
        wp_footer();
        ?>

    </body>
    </html>