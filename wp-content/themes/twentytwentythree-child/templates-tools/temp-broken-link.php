<?php
/**
 * Template Name: Broken Links
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="tool-pages broken-tool">
<section class="mainHexaa customized_tools define_float">
	<div class="container">
		<div class="robt_main_otr">
			<div class="row">
				<div class="tool-inn-left">
					<div class="robt_con define_float">
						<?php
						while (have_posts()):
							the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="page-content">
									<?php
									the_content();

									wp_link_pages(
										array(
											'before' => '<div class="page-links">' . __('Pages:', 'twentyseventeen'),
											'after' => '</div>',
										)
									);
									?>
								</div>
							</article>
						<?php endwhile; ?>

					</div>
				</div>
				<div class="tool-inn-right">
					 <?php include get_stylesheet_directory() . '/templates-tools/seo-tools/html-css/broken-link-checker/index.php'; ?>
					 <div class="related-tools">
			 <h2>Related Tools</h2>
			
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/browser-resize'; ?>" target="_blank">Browser Window Resizer</a>
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