<?php 
/* Template Name: Contact Us */
get_header(); ?>
<main>
	<section class="inr_banner contactbanner flex_banner">
		<div class="sitegradient inrsitegradient"></div>
		<div class="wrapper">
			<div class="inrbnr_left">
				<?php generate_breadcrumbs(); ?>
				<h1 class="pgtitle"><?php the_field('contact_us_heading');?></h1>
				<div class="inrbnr_txt">
					<?php the_field('contact_us_content');?>
				</div>
			</div>
			<div class="inrbnr_rightimg">
				<img src="<?php the_field('contact_us_image');?>" alt="">
			</div>
		</div>
	</section>
	 <section class="contact_form_sec trustedbusiness contactpageonly">
    <div class="contact_form">
        <div>
			<div class="fields">
				<div class="main_info">
					<div class="name_email_message">
						<?php echo do_shortcode('[contact-form-7 id="9bea31b" title="Contact Us"]');?>
					</div>
					<div class="techin-address-wrapper contact-us-form-sec">
						<div class="address-wrapper">
							<div class="addbox">
								<div class="add-icon">
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/02/address.svg" alt="Location" title="" />
								</div>
								<div class="add-content"><?php the_field('address_location');?></div>
							</div>
							<div class="addbox">
								<div class="add-icon">
								<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/02/email-icon.svg" alt="Email" title="" />
								</div>
								<div class="add-content"><a target="_blank" href="mailto:<?php the_field('email_address','option');?>"><?php the_field('email_address','option');?></a></div>
							</div>
							<div class="connect_socials">
								<strong>Follow Us:</strong>
									<a target="_blank" href="<?php the_field('instagram_url','option');?>" class="social-media-1">
									<img src="<?php the_field('instagram_icon','option');?>" alt="Instagram" title="" />
									</a>
									<a target="_blank" href="<?php the_field('facebook_url','option');?>" class="social-media-2">
									<img src="<?php the_field('facebook_icon','option');?>" alt="Facebook" title="" />
									</a>
									<a target="_blank" href="<?php the_field('linked_in_url','option');?>" class="social-media-3">
									<img src="<?php the_field('linked_in_icon','option');?>" alt="Linked in" title="" />
									</a>
							</div>
						</div>
					</div>
				</div>
			</div>
				

		</div>
		</div> 
		 

		 </section>
</main>

<?php get_footer(); ?>