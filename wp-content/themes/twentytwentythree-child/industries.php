<?php
/* Template Name: Industries */
get_header();
?>
<main>
<section class="inr_banner flex_banner">
	<div class="sitegradient inrsitegradient"></div>
	<div class="wrapper">
		<div class="inrbnr_left">
			<div class="alignitem">
				 <?php generate_breadcrumbs(); ?>
				<h1><?php the_field('banner_section_title')?></h1>
				<div class="inrbnr_txt"><?php the_field('banner_section_banner_content')?></div>
			</div>
		</div>
		<div class="inrbnr_rightimg">
			<?php 
    $image_url = get_field('banner_section_banner_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?>
		</div>
	</div>
	<div class="clearfix"></div>
</section>

<?php if (is_page(480)): ?>
    <section class="industry_sec margin-100px" id="seo_industry">
    <div class="wrapper">
        <h3><?php the_field('google_penalty_industries_groups_comm_google_penalty_industries_title', 'option')?></h3>
        <div class="main-seoinsight">
        <div class="semititle ftsz22"><?php the_field('google_penalty_industries_groups_comm_google_penalty_industries_subtitle', 'option')?></div>
        <div class="sec_absolutetxt"><?php the_field('google_penalty_industries_groups_comm_google_penalty_industries_content', 'option')?></div>
    </div>
        <?php
// Retrieve the group field
$service_group = get_field('google_penalty_industries_groups_comm_google_penalty_industries_repeater', 'option'); // Replace 'service_group' with your group field name

if ($service_group && isset($service_group)): ?>
    <div class="servicebx_container fourcolumn flex-container wrap">
        <?php foreach ($service_group as $service): 
            $service_link = isset($service['google_penalty_industries_url']) ? $service['google_penalty_industries_url'] : '#'; 
            $service_image = isset($service['google_penalty_industries_image']) ? $service['google_penalty_industries_image'] : ''; 
            $service_name = isset($service['google_penalty_industries_text']) ? $service['google_penalty_industries_text'] : ''; 
        ?>
        <a href="<?php echo esc_url($service_link); ?>" class="servicebx">
            <dl>
                <dt>
                    <img src="<?php echo esc_url($service_image['url']); ?>"  
                         class="" 
                         decoding="async">
                </dt>
                <dd>
                    <span><?php echo esc_html($service_name); ?></span>
                </dd>
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
        <h3><?php the_field('india_services_section_title')?></h3>
        <div class="semititle"><?php the_field('india_services_section_subtitle')?></div>
        <?php
// Retrieve the group field
$service_group = get_field('india_services'); // Replace 'service_group' with your group field name

if ($service_group && isset($service_group['services'])): ?>
    <div class="servicebx_container locationcitycontainer">
        <?php foreach ($service_group['services'] as $service): 
            $service_link = $service['service_link']; 
            $service_image = $service['service_image']; 
            $service_name = $service['service_location']; 
            $service_seo_name = $service['service_seo_name'];
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
<?php
$location_group = get_field('other_location'); 
// Get the ACF field values
$seo_link = $location_group['other_link_url'];
$seo_link_text = $location_group['other_link_text']; 

?>
    <a href="javascript:void" class="moretoollink rightabsolutelink">
        <?php echo esc_html($seo_link_text); ?>
    </a>

<div class="clearfix"></div>
    </div>
</section>
<?php elseif (is_page(2103)): ?>
    <section class="servicepg margin-100px location_list location_sec splloc" id="ourlocation">
    <div class="wrapper">
        <h3><?php the_field('india_services_section_title')?></h3>
        <div class="semititle"><?php the_field('india_services_section_subtitle')?></div>
        <?php
// Retrieve the group field
$service_group = get_field('india_services'); // Replace 'service_group' with your group field name

if ($service_group && isset($service_group['services'])): ?>
    <div class="servicebx_container locationcitycontainer">
        <?php foreach ($service_group['services'] as $service): 
            $service_link = $service['service_link']; 
            $service_image = $service['service_image']; 
            $service_name = $service['service_location']; 
            $service_seo_name = $service['service_seo_name'];
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
<?php
$location_group = get_field('other_location'); 
// Get the ACF field values
$seo_link = $location_group['other_link_url'];
$seo_link_text = $location_group['other_link_text']; 

?>
    <a href="javascript:void" class="moretoollink rightabsolutelink">
        <?php echo esc_html($seo_link_text); ?>
    </a>

<div class="clearfix"></div>
    </div>
</section>

<section class="industry_sec margin-100px" id="seo_industry">
    <div class="wrapper">
        <h3><?php the_field('industries_services_section_title')?></h3>
        <div class="main-seoinsight">
        <div class="semititle ftsz22"><?php the_field('industries_services_section_subtitle')?></div>
        <div class="sec_absolutetxt"><?php the_field('industries_services_section_content')?></div>
    </div>
        <?php
// Retrieve the group field
$service_group = get_field('google_penalty_industries_groups_comm_google_penalty_industries_repeater', 'option'); // Replace 'service_group' with your group field name

if ($service_group && isset($service_group)): ?>
    <div class="servicebx_container fourcolumn flex-container wrap">
        <?php foreach ($service_group as $service): 
            $service_link = isset($service['google_penalty_industries_url']) ? $service['google_penalty_industries_url'] : '#'; 
            $service_image = isset($service['google_penalty_industries_image']) ? $service['google_penalty_industries_image'] : ''; 
            $service_name = isset($service['google_penalty_industries_text']) ? $service['google_penalty_industries_text'] : ''; 
        ?>
        <a href="javascript:void" class="servicebx">
            <dl>
                <dt>
                    <img src="<?php echo esc_url($service_image['url']); ?>"  
                         class="" 
                         decoding="async">
                </dt>
                <dd>
                    <span><?php echo esc_html($service_name); ?></span>
                </dd>
            </dl>
        </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>


<div class="clearfix"></div>
    </div>
</section>

<?php endif; ?>


</main>
<?php get_footer(); ?>