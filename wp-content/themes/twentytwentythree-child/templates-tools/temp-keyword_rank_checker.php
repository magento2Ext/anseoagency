<?php
/**
 * Template Name: Keyword Rank Checker
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
.g-recaptcha.custom_captcha {
    float: left;
    width: 100%;
    margin-bottom: 20px;
	margin-top: 20px;
}
</style>
<div class="tool-pages keyword-rank-tool tool-inner-page">
<section class="mainHexaa customized_tools custom_keyword_rank">
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
				<div class="customized_right_inner  right-form"> 
			 <?php include get_stylesheet_directory() . '/templates-tools/seo-tools/seo/google-keyword-rank-checker/index.php'; ?>		
			 </div>
			 <div class="related-tools">
			 <h2>Related Tools</h2>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/ad-preview-tool'; ?>" target="_blank">Adsense Preview Tool</a>
			 <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/google-pagerank-checker'; ?>" target="_blank">Google PageRank Checker</a>
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
		
	</div><!-- #primary -->
</div>
</section>
</div>
<?php get_footer(); ?>