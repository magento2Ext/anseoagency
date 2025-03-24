<?php
/**
 * Template Name: Robots Txt
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>	
<div class="tool-pages  tool-inner-page robot-page">
<section class="mainHexaa customized_tools google-pagerank-checker robt_main_otr">
<div class="container">
			<div class="row">
					<!-- <div class="col-12 col-md-6">
						<h2 class="text-dark fw-bolder"><?php the_field('robots_title'); ?></h2>
					</div> -->
				<div class="col-12 con_nob robt_main_otr">
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
							<?php endwhile;  ?>
						</div>
						<div class="tool-inn-right">
							<div class="bg_with_border">
								<?php include get_stylesheet_directory() . '/templates-tools/seo-tools/seo/robots-txt-generator/index.php'; ?>
							</div>
						<div class="related-tools">
							<h2>Related Tools</h2>
							<a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/google-keyword-rank-checker'; ?>" target="_blank">Google Keyword Rank Checker</a>
							<a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/google-pagerank-checker'; ?>" target="_blank">Google PageRank Checker</a>
							<a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/keyword-frequency-counter'; ?>" target="_blank">Keyword Frequency Counter</a>
							<a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/keyword-research-tool'; ?>" target="_blank">Keyword Research Tool</a>
							<a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/lynxviewer'; ?>" target="_blank">Lynx Viewer</a>
							<a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/meta-tag-generator'; ?>" target="_blank">Meta Tag Generator</a>
							<a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/search-engine-simulator'; ?>" target="_blank">Search Engine Simulator</a>
							<a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/website-traffic-checker'; ?>" target="_blank">Traffic Checker</a>
							</div>
										</div>
					</div>
				</div>
			</div>
</div>
</section>
</div>

<?php get_footer(); ?>