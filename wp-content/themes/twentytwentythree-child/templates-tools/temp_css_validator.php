<?php
/**
 * Template Name: CSS Validator
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pss
 */

get_header();
?>
<div class="tool-pages css-validator tool-inner-page">
<section class="mainHexaa customized_tools css_validator_custom define_float">
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
					<div class="col-xl-5 col-lg-6 col-sm-12 broken_left  bg_with_border">
				<div class="register-form css_vali_form customized_right_inner">
					<div class="container">
						<div class="row">
							<?php echo get_the_post_thumbnail( get_the_ID());?>
					 <?php include get_stylesheet_directory() . '/templates-tools/seo-tools/html-css/css-val/index.php'; ?>
					 <div class="related-tools">
       <h2>Related Tools</h2>
      
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/broken-link-checker'; ?>" target="_blank">Broken Link Checker</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/browser-resize'; ?>" target="_blank">Browser Window Resizer</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/rgb-to-hex'; ?>" target="_blank">Color Converter </a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/color-picker'; ?>" target="_blank">Color Picker </a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/online-html-to-script-converter-tool'; ?>" target="_blank">Online HTML to Script Converter tool</a>
       
      </div>
				</div>
		</div>
			
		  </div>
      </div>
     

</section>		
</div>
<?php get_footer(); ?>