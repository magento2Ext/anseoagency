<?php
/**
 * Template Name: WPA encryption Key Generator
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
header('Content-Type: text/html; charset=ISO-8859-1');
get_header();?>	
<div class="tool-pages wpa-tool tool-inner-page">
<section class="mainHexaa customized_tools wpa_encryption_custom encryption_generator">
<div class="container">
			<div class="robt_main_otr">
			<div class="row">
				<div class="tool-inn-left">
					<div class="robt_con">
					<?php
					while ( have_posts() ) { the_post(); ?>
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
					<?php }  ?>
					
					</div>
					
					<div class="generated_keys  bg_with_border">
					</div>	
					
				</div>
			<div class="tool-inn-right">
				<div class="pass_gen_inner customized_right_inner right-form  bg_with_border">
				<?php echo get_the_post_thumbnail( get_the_ID());?>
				<?php include get_stylesheet_directory() . '/templates-tools/seo-tools/security/wpa-encryption-key-generator/index.php'; ?>
					
				</div>
				<div class="related-tools">
       <h2>Related Tools</h2>
      
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/source-encrypter'; ?>" target="_blank">Source Code Encrypter</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/email-validator'; ?>" target="_blank">Email Validation</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/ip-address-checker'; ?>" target="_blank">IP Address Checker</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/network-utilities'; ?>" target="_blank">Network Utilities</a>
      <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/server-type-checker'; ?>" target="_blank">Survey Type Survey </a>
       
			
			</div>
			</div>
		</div>
			<div class="generated_keys mob_code bg_with_border">
						
						
			</div>
		
		</div>	
</div>
</section>	
</div>
<?php get_footer(); ?>	