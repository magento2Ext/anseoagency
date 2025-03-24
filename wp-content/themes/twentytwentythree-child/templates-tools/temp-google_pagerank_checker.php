<?php
/**
 * Template Name: Google PageRank Checker
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
get_header(); ?>
<div class="tool-pages css-validator tool-inner-page">
<section class="mainHexaa customized_tools custom_google_page_rank ">
<div class="container">
			<div class="robt_main_otr">
				<!-- <div class="back-tools-sec">
				<a href="<?php //echo site_url('resources/tools/'); ?>" class="back-tool">Back to Tools</a>
			</div> -->
			<div class="row">
			<div class="col-xl-7 col-lg-6 col-sm-12 broken_right tool-inn-left">
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

	<div class="col-xl-5 col-lg-6 col-sm-12 broken_left tool_rt-block">
		<div class="register-form customized_right_inner">
			

			 <?php echo get_the_post_thumbnail( get_the_ID());?>
<?php include get_stylesheet_directory() . '/templates-tools/seo-tools/seo/google-pagerank-checker/index.php'; ?>
<div class="related-tools">
			 <h2>Related Tools</h2>
			<a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/google-keyword-rank-checker'; ?>" target="_blank">Google Keyword Rank Checker</a>
			<a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/keyword-frequency-counter'; ?>" target="_blank">Keyword Frequency Counter</a>
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
</div>
</section>
</div>



<?php get_footer(); ?>