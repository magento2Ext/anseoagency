<?php get_header();?>
<main class="wp-block-group for404page_wrapper">
<section class="inr_banner 404-page flex_banner for_404page">
		<div class="sitegradient inrsitegradient"></div>
			<div class="wrapper">
						<div class="inrbnr_left">
							<div class="alignitem">
									 <?php generate_breadcrumbs(); ?>
									<h1>404 Not Found</h1>
									<div class="inrbnr_txt">Nothing found for the requested page.</div>
							</div>
						</div>
						<div class="inrbnr_rightimg">
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/02/404-1.png">
						</div>
			</div>
		<div class="clearfix"></div>
		</section>
</main>
<?php get_footer();?>
