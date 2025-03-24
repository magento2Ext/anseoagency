<?php
/**
 * Template Name: Window Resizer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
get_header(); ?> 	
<div class="tool-pages window-tool tool-inner-page">
<section class="mainHexaa customized_tools window_resize_custom">	
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
			<div class="flex-grid col-align customized_right_inner wind_resizer right-form  bg_with_border">
				<div class="mainsection" id="main-sect" role="main">
				<?php echo get_the_post_thumbnail( get_the_ID());?>
				<?php include get_stylesheet_directory() . '/templates-tools/seo-tools/others/browser-resizer/index.php'; ?>
				<div class="related-tools">
			 <h2>Related Tools</h2>
			
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/broken-link-checker'; ?>" target="_blank">Broken Link Checker</a>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/rgb-to-hex'; ?>" target="_blank">Color Converter </a>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/color-picker'; ?>" target="_blank">Color Picker </a>
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