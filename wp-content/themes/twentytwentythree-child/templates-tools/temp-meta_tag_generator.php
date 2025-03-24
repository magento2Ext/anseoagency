<?php session_start();
/**
 * Template Name: Meta Tag Generator
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
get_header(); 
?>
<div class="tool-pages  tool-inner-page meta-page">
<section class="mainHexaa meta_tag_custom customized_tools">
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
									the_content(); ?>
							</div>
						</article>
					<?php endwhile;  ?>
					
					</div>
					
</div>
				<div class="col-xl-5 col-lg-6 col-sm-12 broken_left tool_rt-block">
						<?php include get_stylesheet_directory() . '/templates-tools/seo-tools/seo/meta-generator/index.php'; ?>

					<div class="related-tools">
			 <h2>Related Tools</h2>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/google-keyword-rank-checker'; ?>" target="_blank">Google Keyword Rank Checker</a>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/google-pagerank-checker'; ?>" target="_blank">Google PageRank Checker</a>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/keyword-frequency-counter'; ?>" target="_blank">Keyword Frequency Counter</a>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/keyword-research-tool'; ?>" target="_blank">Keyword Research Tool</a>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/lynxviewer'; ?>" target="_blank">Lynx Viewer</a>
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