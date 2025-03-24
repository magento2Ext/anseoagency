<?php
/**
 * Template Name: Email Validation
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
get_header(); ?> 
<div class="tool-pages email-tool tool-inner-page">
<section class="mainHexaa customized_tools email_validation_custom">
<div class="container">
      <div class="robt_main_otr">
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
        <div>
        <div class="register-form customized_right_inner email_valid bg_with_border right-form"> 
          <div class="covr">
              <?php echo get_the_post_thumbnail( get_the_ID());?>
        <?php include get_stylesheet_directory() . '/templates-tools/seo-tools/security/email-validator/index.php'; ?>
  
        
      </div>  
  

      </div>  

  </div>
</div>
</div>
</section>
</div>
<?php get_footer(); ?>