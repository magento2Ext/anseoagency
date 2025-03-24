<?php
/**
 * Template Name: Color Picker New
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
get_header(); ?> 
<link rel="stylesheet" id="site_main-css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/color-picker/main.css" type="text/css" media="all">
<div class="tool-pages  tool-inner-page color-pick-page">
<section class="mainHexaa customized_tools">
<div class="container">
      <div class="robt_main_otr">
        <div class="row">
        <div class="tool-inn-left">
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

      </div>  
    
                <?php endwhile;  ?>  
                <div class="tool-inn-right">   
                  <div class="bg_with_border">
         <?php include get_stylesheet_directory() . '/templates-tools/seo-tools/html-css/color-picker/index.php'; ?>
         </div>
         <div class="related-tools">
       <h2>Related Tools</h2>
      
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/broken-link-checker'; ?>" target="_blank">Broken Link Checker</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/browser-resize'; ?>" target="_blank">Browser Window Resizer</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/rgb-to-hex'; ?>" target="_blank">Color Converter </a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/css-validator'; ?>" target="_blank">CSS Validator</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/online-html-to-script-converter-tool'; ?>" target="_blank">Online HTML to Script Converter tool</a>
       
      </div>
     </div>
</div>
</div>
</div>
</section>
</div>
<?php get_footer(); ?>