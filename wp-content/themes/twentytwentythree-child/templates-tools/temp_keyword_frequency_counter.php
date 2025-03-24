<?php
/**
 * Template Name: Keyword Frequency Counter
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>	
<div class="tool-pages  tool-inner-page freq-page">
<section class="mainHexaa custom_keyword_frequency customized_tools for_991">
<div class="container">
			<div class="robt_main_otr">
				<div class="row">
				<div class="tool-inn-left">
					<div class="define_float">
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
					
					<div class="combi customized_right_inner  bg_with_border">
					<?php echo get_the_post_thumbnail( get_the_ID());?>
						<?php include get_stylesheet_directory() . '/templates-tools/seo-tools/seo/keyword-frequency-counter/index.php'; ?>
					</div>
				<div class="related-tools">
			 <h2>Related Tools</h2>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/google-keyword-rank-checker'; ?>" target="_blank">Google Keyword Rank Checker</a>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/google-pagerank-checker'; ?>" target="_blank">Google PageRank Checker</a>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/keyword-research-tool'; ?>" target="_blank">Keyword Research Tool</a>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/lynxviewer'; ?>" target="_blank">Lynx Viewer</a>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/meta-tag-generator'; ?>" target="_blank">Meta Tag Generator</a>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/robots-txt-generator'; ?>" target="_blank">Robots Txt Generator</a>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/search-engine-simulator'; ?>" target="_blank">Search Engine Simulator</a>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/website-traffic-checker'; ?>" target="_blank">Traffic Checker</a>
			</div>		
					
					
				</div>

				</div>
			</div>
</div>
</section>
</div>	
<?php get_footer(); ?>