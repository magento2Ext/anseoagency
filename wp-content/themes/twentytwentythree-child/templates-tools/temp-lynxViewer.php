<?php
/**
 * Template Name: lynxViewer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
get_header(); ?>
 <script src="https://www.google.com/recaptcha/api.js" async defer> </script>
<style>
.g-recaptcha.custom_captcha {
    float: left;
    width: 100%;
	margin-top: 20px;
}
</style>
<div class="tool-pages linux-page tool-inner-page">
<section class="mainHexaa customized_tools lynx_viewer_custom">
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
					 <?php include get_stylesheet_directory() . '/templates-tools/seo-tools/seo/lynx-viewer/index.php'; ?>
					 
					</div>
			</div>
		</div>
</section>
</div>


<?php get_footer(); ?>