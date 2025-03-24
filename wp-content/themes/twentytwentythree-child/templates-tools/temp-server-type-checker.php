<?php
/**
 * Template Name: Server Type Checker
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
get_header();  ?>
<div class="tool-pages server-page tool-inner-page">
<section class="mainHexaa server_type_custom customized_tools respo">
<div class="container">
      <div class="robt_main_otr" style="max-width:100%;">
        <div class="row">
         <div class="tool-inn-left">
        <div class="robt_con define_float">
          <?php
          while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="page-content">
              <?php
                the_content();
                wp_link_pages(
                  array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
                    'after'  => '</div>',
                  )
                );
              ?>
            </div>
          </article>
          <?php endwhile;  ?>
        </div>
        </div>
        
        <div class="tool-inn-right">
          <div class="customized_right_inner">

            <?php include get_stylesheet_directory() . '/templates-tools/seo-tools/security/server-type-checker/index.php'; ?>
          

    </div>
  </div>
</section>
</div>
<?php get_footer(); ?>