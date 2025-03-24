<?php
/**
 * Template Name: Adsense Preview Tool
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
<div class="tool-pages adsense tool-inner-page">
 <section class="mainHexaa">
<div class="container">
			<div class="robt_main_otr">
			<div class="robt_con define_float customized_tools">
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
</div>
</section>
</div>

 
<?php get_footer(); ?>