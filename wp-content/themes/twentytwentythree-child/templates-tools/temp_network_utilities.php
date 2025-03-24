<?php
/**
 * Template Name: Network Utilities
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
  

get_header();?>
<div class="tool-pages network_uti tool-inner-page">
<section class="mainHexaa customized_tools ">
<div class="container">
	<div id="primary" class="content-area robt_cont">
		<main id="main" class="site-main" role="main">
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
				<div class="dns_lookup stackedForm">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-center">
							<?php echo get_the_post_thumbnail( get_the_ID());?>
									
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="network-form right-form">
			<?php include get_stylesheet_directory() . '/templates-tools/seo-tools/security/network-utilities/index.php'; ?>


		</div>
		<div class="related-tools">
       <h2>Related Tools</h2>
      
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/source-encrypter'; ?>" target="_blank">Source Code Encrypter</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/email-validator'; ?>" target="_blank">Email Validation</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/ip-address-checker'; ?>" target="_blank">IP Address Checker</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/server-type-checker'; ?>" target="_blank">Survey Type Survey </a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/wpa-encryption-key-generator'; ?>" target="_blank">WPA encryption Key Generator</a>
       
			
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
</section>
</div>
<?php get_footer(); ?>