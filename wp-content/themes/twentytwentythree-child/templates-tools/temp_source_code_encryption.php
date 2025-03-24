<?php
/**
 * Template Name: Source Code Encryption
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
<div class="tool-pages linux-page tool-inner-page">
<section class="mainHexaa customized_tools source_code_custom ">
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
				<div class="register-form stackedForm customized_right_inner  bg_with_border">
					
						<div class="contain_box">
								<?php echo get_the_post_thumbnail( get_the_ID());?>
							<?php include get_stylesheet_directory() . '/templates-tools/seo-tools/security/code-encryption/index.php'; ?>
							<div class="related-tools">
       <h2>Related Tools</h2>
      
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/email-validator'; ?>" target="_blank">Email Validation</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/ip-address-checker'; ?>" target="_blank">IP Address Checker</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/network-utilities'; ?>" target="_blank">Network Utilities</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/server-type-checker'; ?>" target="_blank">Survey Type Survey </a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/wpa-encryption-key-generator'; ?>" target="_blank">WPA encryption Key Generator</a>
       
      </div>
		</div>

		</div>
</div>
</section>
</div>
<?php get_footer(); ?>