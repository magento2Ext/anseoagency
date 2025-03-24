<?php
/**
 * Template Name: Ascii Html Characters
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
<style>
.alt_table_outer table {
	display:none;
}
</style>
<div class="tool-pages ascii-character tool-inner-page">
<section class="mainHexaa customized_tools ascii-html-characters_custom">
	<div class="container">
				<div class="robt_main_otr">
					<div class="row">
					<div class="tool-inn-left">
						<div class="robt_con define_float">
							<?php
							while ( have_posts() ) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="page-content">
									<?php the_content();
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
					 <?php include get_stylesheet_directory() . '/templates-tools/seo-tools/html-css/ascii-characters/index.php'; ?>
				</div>
				</div>

		</div>
</section>
</div>


<?php get_footer(); ?>
