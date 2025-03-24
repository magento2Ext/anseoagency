<?php
/**
 * Template Name: Tools
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod('understrap_container_type');
?>
<div class="tool-pages custom-main-tools">
<section class="tools_banner define_float">
    <div class="container">
        <div class="row">
            <div class="tools_inner define_float">
                <div class="col-md-12 col-sm-12 col-xs-12 tool_ban_right">
                    <div class="tools_heading">
                    <h1>
                        <?php the_field('tool_banner_title'); ?>
                    </h1>
                    </div>
                    <p>
                        <?php the_field('tool_banner_content'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tools_web grey_web define_float">
    <div class="container">
        <div class="row">
            <div class="tools_web_inner define_float">
                <div class="tools_heading define_float">
                    <h2>
                        <?php the_field('webmaster_title'); ?>
                    </h2>
                    <p>
                        <?php the_field('webmaster_tool_content'); ?>
                    </p>
                    <div class="web-seo">
                    <h2>
                        <?php the_field('seo_title'); ?>
                    </h2>
                    <p>
                        <?php the_field('seo_subtitle'); ?>
                    </p>
                </div>
                </div>
                <div class="tools_main tools_with_bg define_float">
                    <?php if (have_rows('seo_tools')) {
                        while (have_rows('seo_tools')) {
                            the_row(); ?>
                            <div class="tools_web_outer">
                                <div class="tools_con_inner define_float">
                                <span><img src="<?php the_sub_field('tool_image'); ?>"></span>
                                
                                    <h4>
                                        <a href="<?php the_sub_field('tool_link'); ?>">
                                        <?php the_sub_field('tool_title'); ?>
                                        </a>
                                    </h4>
                                
                                    <?php $content = get_sub_field('tool_intro');
                                    $content = strip_tags($content); ?>
                                    <p>
                                        <?php echo substr($content, 0, 150) . '...'; ?>
                                    </p>
                                    <!--p><?php //the_sub_field('tool_intro');?></p-->
                                    <!--div class="tools_btn define_float"><a href="<?php //the_sub_field('tool_link'); ?>">Read
                                            More</a></div--->
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>

                <!-- <div class="tools_slider define_float">
                    <div id="tools_one" class="owl-carousel owl-theme tools_slid">
                        <?php /* if( have_rows('html_css_tools') ){
                                             while ( have_rows('html_css_tools') ) { the_row(); ?>
                                                 <div class="item">
                                                     <div class="tools_con_inner define_float">
                                                         <img src="<?php the_sub_field('tool_image');?>">
                                                         <h3><?php the_sub_field('tool_title');?></h3>
                                                         <p><?php the_sub_field('tool_intro');?></p>
                                                         <div class="tools_btn define_float"><a href="<?php the_sub_field('tool_link');?>" >Read More</a></div>
                                                     </div>
                                                 </div>
                                                 
                                         <?php  }}*/?>
                    </div> -->
            </div>
        </div>
    </div>
</section>
<section class="tools_web define_float seo_tool_sec front-tools">
    <div class="container">
        <div class="row">
            <div class="tools_web_inner define_float">
                <div class="tools_heading define_float">
                    <h2>
                        <?php the_field('html_css_title'); ?>
                    </h2>
                </div>
                <div class="tools_main define_float">
                    <?php if (have_rows('html_css_tools')) {
                        while (have_rows('html_css_tools')) {
                            the_row(); ?>
                            <div class="tools_web_outer">
                                <div class="tools_con_inner define_float">
                                    <span><img src="<?php the_sub_field('tool_image'); ?>"></span>
                                    
                                    <h4>
                                        <a href="<?php the_sub_field('tool_link'); ?>">
                                        <?php the_sub_field('tool_title'); ?>
                                        </a>
                                    </h4>
                                    
                                    <?php $content = get_sub_field('tool_intro');
                                    $content = strip_tags($content); ?>
                                    <p>
                                        <?php echo substr($content, 0, 150) . '...'; ?>
                                    </p>
                                    <!--p><?php //the_sub_field('tool_intro');?></p-->
                                    <!---div class="tools_btn define_float"><a href="<?php //the_sub_field('tool_link'); ?>">Read
                                            More</a></div--->
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
                <!-- <div class="tools_slider define_float">
                    <div id="tools_two" class="owl-carousel owl-theme tools_slid">
                        <?php //if( have_rows('seo_tools') ){
                        //while ( have_rows('seo_tools') ) { the_row(); ?>
                                    <div class="item">
                                        <div class="tools_con_inner define_float">
                                            <img src="<?php // the_sub_field('tool_image');?>">
                                            <h3><?php // the_sub_field('tool_title');?></h3>
                                            <p><?php // the_sub_field('tool_intro');?></p>
                                            <div class="tools_btn define_float"><a href="<?php // the_sub_field('tool_link');?>" >Read More</a></div>
                                        </div>
                                    </div>
                        <?php // }} ?>
                    </div>  -->
            </div>
        </div>
    </div>
</section>
<section class="tools_web define_float secure_sec">
    <div class="container">
        <div class="row">
            <div class="tools_web_inner define_float">
                <div class="tools_heading define_float">
                    <h2>
                        <?php the_field('security_title'); ?>
                    </h2>
                    <p>
                        <?php the_field('security_subtitle'); ?>
                    </p>
                </div>
                <div class="tools_main define_float">
                    <?php if (have_rows('security_tools')) {
                        while (have_rows('security_tools')) {
                            the_row(); ?>
                            <div class="tools_web_outer">
                                <div class="tools_con_inner define_float">
                                <span><img src="<?php the_sub_field('tool_image'); ?>"></span>
                                
                                    <h4>
                                        <a href="<?php the_sub_field('tool_link'); ?>">
                                        <?php the_sub_field('tool_title'); ?>
                                        </a>
                                    </h4>
                                
                                    <?php $content = get_sub_field('tool_intro');
                                    $content = strip_tags($content); ?>
                                    <p>
                                        <?php echo substr($content, 0, 150) . '...'; ?>
                                    </p>
                                    <!--p><?php //the_sub_field('tool_intro');?></p-->
                                    <!---div class="tools_btn define_float"><a href="<?php //the_sub_field('tool_link'); ?>">Read
                                            More</a></div--->
                                </div>
                            </div>
                        <?php }
                    } ?>

                </div>
                <!-- <div class="tools_slider define_float">
                    <div id="tools_three" class="owl-carousel owl-theme tools_slid">
                        <?php /* if( have_rows('security_tools') ){
                                             while ( have_rows('security_tools') ) { the_row(); ?>
                                                 <div class="item">
                                                     <div class="tools_con_inner define_float">
                                                         <img src="<?php the_sub_field('tool_image');?>">
                                                         <h3><?php the_sub_field('tool_title');?></h3>
                                                         <p><?php the_sub_field('tool_intro');?></p>
                                                         <div class="tools_btn define_float"><a href="<?php the_sub_field('tool_link');?>" >Read More</a></div>
                                                     </div>
                                                 </div>
                                     <?php  }} */?>
                    </div> -->
            </div>
        </div>
    </div>
</section>
      
</div>
<?php get_footer(); ?>
