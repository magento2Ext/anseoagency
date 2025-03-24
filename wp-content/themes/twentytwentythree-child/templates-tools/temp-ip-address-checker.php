<?php
/**
 * Template Name: IP Address Checker
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
get_header(); ?>
<div class="tool-pages ip-page tool-inner-page">
 <section class="mainHexaa customized_tools">
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
					<div class="register-form customized_right_inner ip_add right-form">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<?php include get_stylesheet_directory() . '/templates-tools/seo-tools/security/ip-checker/index.php'; ?>
										
						<!-- 		</div>
							</div>
						</div>
					</div> -->
	
				</div>

				</div>
			</div>
</div>
<div class="related-tools">
       <h2>Related Tools</h2>
      
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/source-encrypter'; ?>" target="_blank">Source Code Encrypter</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/email-validator'; ?>" target="_blank">Email Validation</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/network-utilities'; ?>" target="_blank">Network Utilities</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/server-type-checker'; ?>" target="_blank">Survey Type Survey </a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/wpa-encryption-key-generator'; ?>" target="_blank">WPA encryption Key Generator</a>
       
      </div>
</div>
</div>
</div>
</div>
</section>
</div>
<?php get_footer(); ?>