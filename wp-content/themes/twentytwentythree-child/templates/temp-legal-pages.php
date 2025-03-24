<?php
/**
 * Template Name: Legal Pages 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header();  ?>
<main>
<section class="blogdtlpg inr_banner privacypolicybanner flex_banner">
	<div class="sitegradient inrsitegradient"></div>
	<div class="wrapper">
		<div class="inrbnr_left">
			<?php generate_breadcrumbs(); ?>
			<h1 class="pgtitle"><?php the_title(); ?></h1>
		</div>
		<?php if (has_post_thumbnail($post->ID)) {
		$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');?>
		<div class="inrbnr_rightimg">  
					<?php echo '<img src="' . $image[0] . '" alt="' . get_the_title() . '" />'; ?>
				</div>
		<?php }  ?>
	</div>
</section>
<section class="mainHexaa customized_tools define_float legal_page_temp">
	<div class="container wrapper">
		<div class="robt_main_otr">
			
			<div class="row">
				<div class="col-xl-7 col-lg-6 col-sm-12 broken_right">
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
			</div>
		</div>
	</div>
</section>
</main>
<?php get_footer(); ?>