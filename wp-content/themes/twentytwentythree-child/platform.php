<?php 
/* Template Name: Platform */
get_header();?>
<main>
<section class="inr_banner flex_banner">
	<div class="sitegradient inrsitegradient"></div>
	<div class="wrapper">
		<div class="inrbnr_left">
			<div class="alignitem">
                 <?php generate_breadcrumbs(); ?>
				<h1><?php the_field('platform_banner_platform_banner_heading');?></h1>
				<div class="inrbnr_txt"><?php the_field('platform_banner_platform_banner_subheading');?></div>
			</div>
		</div>
		<div class="inrbnr_rightimg">
			<?php
	$image = get_field('platform_banner_platform_banner_image');
    if ($image) {
    echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
}
 ?>
		</div>
	</div>
	<div class="clearfix"></div>
</section>

<section class="industry_sec margin-100px" id="seo_industry">
      <div class="wrapper">
      	<h3><?php the_field('platform_digital_marketing_platform_digital_heading');?></h3>
        <div class="main-seoinsight">
      	<div class="semititle ftsz22">
      		<?php the_field('platform_digital_marketing_platform_digital_subheading');?>
      	</div>
      	<div class="sec_absolutetxt">
      		<?php the_field('platform_digital_marketing_platform_digital_content');?>
      	</div>
      </div>
      	<div class="servicebx_container fourcolumn flex-container wrap">
      		<?php 
            $platform_group = get_field('platform_digital_marketing');
            if($platform_group && isset($platform_group['platform_digital_repeater'])): ?>
            	<div class="servicebx_container fourcolumn flex-container wrap techno">
            		<?php foreach($platform_group['platform_digital_repeater'] as $platform): 
            $platform_image = $platform['platform_digital_image']; 
            $platform_name = $platform['platform_digital_text']; ?>
      		
      		<a href="javascript:void" class="servicebx">
            <dl>
            <dt><img src="<?php echo esc_url($platform_image['url']); ?>" class="" alt="<?php echo esc_html($platform_name); ?>" decoding="async"></dt>
             <dd><span><?php echo esc_html($platform_name); ?></span></dd>
             </dl>
         </a>
     <?php endforeach; ?>
      	</div>
      	<?php endif; ?>
      	<div class="clearfix"></div>
      </div>
  </section>

<section class="servicepg margin-100px location_list location_sec splloc" id="ourlocation">
	<div class="wrapper">
        <div class="semititle semititle-new"><?php the_field('platform_services_platform_service_subheading')?></div>
       <div class="paratext_two"> <p><?php the_field('platform_services_platform_subheading_content')?></p></div>
		<h3><?php the_field('platform_services_platform_service_heading')?></h3>
        <div class="paratext_one"><p><?php the_field('platform_services_platform_heading_subcontent')?></p></div>
		
		<?php
// Retrieve the group field
$service_group = get_field('platform_services'); // Replace 'service_group' with your group field name

if ($service_group && isset($service_group['platform_service_repeater'])): ?>
    <div class="servicebx_container locationcitycontainer">
        <?php foreach ($service_group['platform_service_repeater'] as $service): 
            $service_link = $service['platform_seo_link']; 
            $service_image = $service['platform_service_image']; 
            $service_name = $service['platform_seo_country']; 
            $service_seo_name = $service['platform_seo_text'];
        ?>
        <a href="javascript:void" class="servicebx">
            <dl>
                <dt>
                    <img src="<?php echo esc_url($service_image['url']); ?>"  
                         class="" 
                         decoding="async">
                </dt>
                <dd>
                    <?php echo esc_html($service_seo_name); ?><span><?php echo esc_html($service_name); ?></span>
                </dd>
            </dl>
        </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<a href="javascript:void" class="moretoollink rightabsolutelink">View Other Locations</a>

<div class="clearfix"></div>
	</div>
</section>
</div>
</section>
</main>
<?php get_footer();
?>
