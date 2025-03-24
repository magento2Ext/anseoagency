<?php
/**
 * Template Name: ALT Key
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
get_header(); ?>
<div class="tool-pages  tool-inner-page alt-page">
<section class="banner-section content_pg_banner text-center define_float position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-sm-12 col-12">
                        <div class="banner-content define_float text-center">
                            <h1><?php the_field('alt_code_key_table_heading'); ?></h1>
							<div class="mainHexaa customized_tools alt_key_custom custom-container-sec">
							<div class="container">
										<div class="robt_main_otr">
						<!-- 	<div class="row">
											<div class="col-xl-7 col-lg-6 col-sm-12 broken_right">
												<div class="robt_con define_float">
													<?php
													while ( have_posts() ) : the_post(); ?>
													<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
														<div class="page-content">
															<?php  the_content();
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
											<div class="col-xl-5 col-lg-6 col-sm-12 broken_left">
												<img src="/wp-content/uploads/2021/11/alt_key_img.png">
											</div>	
										</div>  -->
										<div class="row">
											<div class="col-xl-12 col-lg-12 col-sm-12">
												<div class="section-header text-center">
													<h4><?php the_field('conclusion_heading'); ?></h4>
													<p><?php the_field('conclusion_content'); ?></p>
											</div>
											</div>
										</div>
										<?php include get_stylesheet_directory() . '/templates-tools/seo-tools/html-css/alt-code/index.php'; ?>
										</div>
								</div>
							</div>
                            <p><?php the_field('alt_code_key_table_content'); ?></p>
                            <div class="scroll_to-learn define_float">
                                <a href="#scrollDown">
                                    <img src="<?php echo site_url('/wp-content/uploads/2025/02/mouse-icon.png');?>">
                                    <span>Scroll down to learn more</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<section class="alt-overview-sec define_float" id="scrollDown">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-12">
				<div class="code-sec">
					<h4><?php the_field('overview_of_alt_codes_heading'); ?></h4>
					<?php the_field('overview_of_alt_codes_content'); ?>
				</div>
				<div class="key-table-sec">
					<h4><?php the_field('how_to_use_the_alt_code_heading'); ?></h4>
					 <?php if(have_rows('how_to_use_the_alt_code_repeater')){
                            while(have_rows('how_to_use_the_alt_code_repeater')){
                                the_row();
                            ?>
					<ul>
						<h5><?php the_sub_field('title'); ?></h5>
						 <?php if(have_rows('alt_code_list')){
                            while(have_rows('alt_code_list')){
                                the_row();
                            ?>
							<li><?php the_sub_field('list'); ?></li>
							<?php } } ?>
					</ul>
					<?php } } ?>
				</div>
				<div class="application-wrapper">
				 <?php if(have_rows('applications_repeater')){
                            while(have_rows('applications_repeater')){
                                the_row();
                            ?>
					<div class="application-wrapper-col">
						<h4><?php the_sub_field('title'); ?></h4>
						<ul class="application-wrapper-box">
						 <?php if(have_rows('app_List_repeater')){
                            while(have_rows('app_List_repeater')){
                                the_row();
                            ?>
							<li><?php the_sub_field('app_list'); ?></li>
							<?php } } ?>
						</ul>
					</div>
					 <?php } } ?>
				</div>
			</div>
		</div>
	</div>
</section>


</div>

<?php get_footer(); ?>