<?php
/* Template Name: Platforms Seo Template */
get_header();?>
<main>
	<section class="inr_banner flex_banner">
	<div class="sitegradient inrsitegradient"></div>
	<div class="wrapper">
		<div class="inrbnr_left">
			<div class="alignitem">
                 <?php generate_breadcrumbs(); ?>
				<h1><?php the_field('banner_group_banner_heading');?></h1>
				<div class="inrbnr_txt"><?php the_field('banner_group_banner_content');?></div>
			</div>
		</div>
		<div class="inrbnr_rightimg">
			<?php
			$image = get_field('banner_group_banner_image');
    		if ($image) {
    		echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
			}
 			?>
		</div>
	</div>
	<div class="clearfix"></div>
</section>

<section class="inrpage_sec seoservicepg">
						<div class="wrapper container servicelistslide">
			<div class="hs__wrapper seoservice_tablist">
				<ul class="hs tablist">
					<?php while (have_rows('tabs_group_tabs_repeater')): the_row(); 
                    // Retrieve subfields
                    $tab_text = get_sub_field('tabs_text');
                    $tab_link = get_sub_field('tabs_link'); // Text field, allows #id
                ?>
                <li class="hs__item">
                    <a href="<?php echo esc_attr($tab_link); ?>"><?php echo esc_html($tab_text); ?></a>
                </li>
                <?php endwhile; ?>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
         <div class="wrapper jumpservices_sec">
                <div class="jumbservicelinkbox">
                  <span>Jump to</span>
                  <div class="dropdown">
                    <button onclick="toggleDropdown()" class="dropbtn" data-rocket-lazy-bg-19766016-2587-49b6-9a46-8c1351342cb2="loaded">Select Service</button>
                    <div id="myDropdown" class="dropdown-content">
                      <?php while (have_rows('tabs_group_tabs_repeater')): the_row(); 
                    // Retrieve subfields
                    $tab_text = get_sub_field('tabs_text');
                    $tab_link = get_sub_field('tabs_link'); // Text field, allows #id
                ?>
                <a href="<?php echo esc_attr($tab_link); ?>"><?php echo esc_html($tab_text); ?></a>
            
                <?php endwhile; ?>
                                          </div>
                  </div>
                </div>
              </div>
	</section>

<section class="seoservices_sec margin-100px" id="seoservices_sec">
				<div class="wrapper">
					<div class="serviceseo_container">
						<div class="seoservice_img">
						<?php
			$image = get_field('seo_agency_group_seo_agency_image');
    		if ($image) {
    		echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
			}
 			?>	
						</div>
			<div class="seoservice_infobox">
				<h2 class="sectiontitle"><?php the_field('seo_agency_group_seo_agency_heading');?></h2>
				<?php the_field('seo_agency_group_seo_agency_content');?>
			</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</section>

	<section class="seocontent_sec " id="seoservices_sec">
				<div class="wrapper">
					<div class="servicecontent_div">
						<div class="servicecontentbx fleft ptag">
							<div class="container flex-container wrap">
							<?php the_field('what_seo_group_what_seo_content');?>	
							</div>
							<div class="serviceimgbx fright">
							<?php
			$image = get_field('what_seo_group_what_seo_image');
    		if ($image) {
    		echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
			}
 			?>		
							</div>
						</div>
					</div>
				</div>
			</section>

	<section class="seocontent_sec " id="seoservices_sec">
				<div class="wrapper">
					<div class="servicecontent_div maketopspacing">
					<div class="serviceimgbx fleft">
					<?php
			$image = get_field('on_page_improvement_group_page_improvement_image');
    		if ($image) {
    		echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
			}
 			?>			
					</div>

			<div class="servicecontentbx fright ptag">
							<div class="container flex-container wrap">
<div class="banner-left-block">
<h2 class="main-heading"><?php the_field('on_page_improvement_group_page_improvement_heading');?></h2>
</div>
</div>
<?php the_field('on_page_improvement_group_page_improvement_content');?>

				</div>
			</div>
		</div>
		</section>

	<section class="seoteam_sec margin-100px" id="seoteam">
                <!-- <div class="sitegradient"></div> -->
                <div class="wrapper">
                    <h3><?php the_field('team_leads_group_team_lead_heading');?></h3>
                    <div class="semititle ftsz22"><?php the_field('team_leads_group_team_lead_subheading');?></div>
                    <div class="sec_absolutetxt"><?php the_field('team_leads_group_team_lead_content');?></div>
                    <div class="teamcontainer memberlistcontianer">
                        <div class="container">
                            <div class="hs__wrapper">

                                <ul class="hs">
                                	<?php while (have_rows('team_leads_group_team_leads_repeater')): the_row(); 
                    // Retrieve subfields
                    $team_leads_image = get_sub_field('team_leads_image');
                    $team_lead_name = get_sub_field('team_lead_name'); // Text field, allows #id
                    $team_leads_designation = get_sub_field('team_lead_designation');
                    $team_lead_experience = get_sub_field('team_lead_experience');
                    $team_lead_url = get_sub_field('team_lead_url');
                ?>
                <li class="hs__item">
                	<a href="<?php echo esc_url($team_lead_url); ?>" class="memberlistbx">
                     <div class="memberimgbx">
                     <img src="<?php echo esc_url($team_leads_image['url']); ?>">
                 </div>
                                                <div class="membername"><?php echo esc_html($team_lead_name); ?>
                                                <span><span><?php echo esc_html($team_leads_designation); ?></span>
                                                <span><?php echo esc_html($team_lead_experience); ?></span></span>
                                                </div>
                                          </a>
                <?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <section class="seocontent_sec " id="seoservices_sec">
				<div class="wrapper">
					<div class="servicecontent_div">
						<div class="servicecontentbx fleft ptag">
							<div class="container flex-container wrap">
<div class="banner-left-block">
<h2 class="main-heading"><?php the_field('off_page_improvements_group_off_page_improvements_heading');?></h2>
</div>
</div>
<?php the_field('off_page_improvements_group_off_page_improvements_content');?>
</div>
<div class="serviceimgbx fright">
	<?php
			$image = get_field('off_page_improvements_group_off_page_improvement_image');
    		if ($image) {
    		echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
			}
 			?>		
</div>
</div>
</div>
</section>
<div class="dividerline">
	<hr>
</div>

<section class="seocontent_sec " id="seoservices_sec">
				<div class="wrapper">
					<div class="servicecontent_div maketopspacing">
					<div class="serviceimgbx fleft">
					<?php
			$image = get_field('seo_tools_group_seo_tools_image');
    		if ($image) {
    		echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
			}
 			?>		
</div>	
	<div class="servicecontentbx fright ptag">
	<div class="container flex-container wrap">
<div class="banner-left-block">
<h2 class="main-heading"><?php the_field('seo_tools_group_seo_tools_heading');?></h2>
</div>
</div>
	<?php the_field('seo_tools_group_seo_tools_content');?>
					</div>
				</div>
			</div>
		</section>
<div class="dividerline">
	<hr>
</div>

<section class="seocontent_sec " id="seoservices_sec">
				<div class="wrapper">
					<div class="servicecontent_div">
						<div class="servicecontentbx fleft ptag">
							<div class="container flex-container wrap">
<div class="banner-left-block">
<h2 class="main-heading"><?php the_field('log_file_analysis_group_log_file_analysis_heading');?></h2>
</div>
</div>
<?php the_field('log_file_analysis_group_log_file_analysis_content');?>
</div>
<div class="serviceimgbx fright">
	<?php
			$image = get_field('log_file_analysis_group_log_file_analysis_image');
    		if ($image) {
    		echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
			}
 			?>		
</div>
</div>
</div>
</section>
<div class="dividerline">
	<hr>
</div>

<section class="trustedbusiness">
<div class="blocktitle"><?php the_field('trusted_title'); ?></div>
<section class="trustedbusi_row">
          <div class="rowone_trusted">
             <?php if (have_rows('trusted_first_row')): ?>
            <div class="trustedbusinessicons">
               <?php while (have_rows('trusted_first_row')): the_row();
            // Get the image subfield
            $image = get_sub_field('trusted_first_row_image'); // Replace 'image1' with your actual image subfield name

            // If image exists, get its URL and alt text
            if (!empty($image)) {
                $image_url = $image['url'];
                $image_alt = !empty($image['alt']) ? $image['alt'] : 'no image found'; // Default alt text
            }
        ?>
              <p>
                <?php if (!empty($image_url)): ?>
                        <img src="<?php echo esc_url($image_url); ?>"  />
                    <?php endif; ?>  
              </p>
              <?php endwhile; ?>
          </div>
          <?php endif; ?>
      </div>
       <div class="rowtwo_trusted">
        <?php if (have_rows('trusted_first_row')): ?>
            <div class="trustedbusinessicons">
                 <?php while (have_rows('trusted_second_row_')): the_row();
            // Get the image subfield
            $image = get_sub_field('trusted_second_row_image'); // Replace 'image1' with your actual image subfield name

            // If image exists, get its URL and alt text
            if (!empty($image)) {
                $image_url = $image['url'];
                $image_alt = !empty($image['alt']) ? $image['alt'] : 'no image found'; // Default alt text
            }
        ?>
                <p>
                    <?php if (!empty($image_url)): ?>
                        <img src="<?php echo esc_url($image_url); ?>"  />
                    <?php endif; ?>  
                </p>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
          </section>
</section>

<section class="seocontent_sec " id="seoservices_sec">
				<div class="wrapper">
					<div class="servicecontent_div maketopspacing">
					<div class="serviceimgbx fleft">
				<?php
			$image = get_field('platforms_for_seo_group_platform_seo_image');
    		if ($image) {
    		echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
			}
 			?>		
					</div>
			<div class="servicecontentbx fright ptag">
							<div class="container flex-container wrap">
<div class="banner-left-block">
<h2 class="main-heading"><?php the_field('platforms_for_seo_group_platform_seo_heading');?></h2>
</div>
</div>
		<?php the_field('platforms_for_seo_group_platform_seo_content');?>
				</div>
			</div>
		</section>

	<div class="dividerline">
	<hr>
</div>

<section class="videoreview_section margin-100px" id="testimonials">
        <div class="sitegradient"></div>
        <div class="wrapper">
          <h3>Client Testimonials</h3>
          <div class="semititle">
            Check Out What Our Valued Customers Have to Say<br />
            about Our Digital Marketing Services.
          </div>
          <div class="sec_absolutetxt"> 
            With hundreds of 5-star reviews, AN SEO AGENCY can create a tailored plan
            to meet your company’s online marketing goals.
          </div>
          <div class="same_h_aligner">

            <div class="wid50">
              <div class="clienttestimonialsec">
                <div class="googlereview_container">
                  <div class="reviewcountdiv">
                    <dl>
                      <dt><span>363</span> Google Reviews</dt>
                      <dd>
                        <span>4.9</span>
                        <img 
                        src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/yellow-star-img.svg" 
                        alt="Review Star" 
                        title=""
                        />
                      </dd>
                    </dl>
                  </div>
                  <hr />
                  
                      <?php if (have_rows('review')) : ?>
  <div class="reviewlistcontainer reviewdesktop">
    <?php while (have_rows('review')) : the_row(); 
      $user_image = get_sub_field('user_image'); // User image URL
      $username = get_sub_field('username'); // Username
      $star_image = get_sub_field('star_image'); // Star image URL
      $time_period = get_sub_field('time_peroid'); // Time period
      $review_content = get_sub_field('review_content'); // Review content
    ?>
      <div class="googlereviewbox">
        <?php if ($user_image) : ?>
          <img src="<?php echo esc_url($user_image['url']); ?>" alt="<?php echo esc_attr($username); ?>" title="<?php echo esc_attr($username); ?>" />
        <?php endif; ?>
        <div class="reviewtxtbox ptag">
          <div class="reviewnamebox">
            <?php echo esc_html($username); ?>
            <span>
              <?php if ($star_image) : ?>
                <img src="<?php echo esc_url($star_image['url']); ?>" alt="Review Star" title="Review Star" />
              <?php endif; ?>
              <?php echo esc_html($time_period); ?>
            </span>
          </div>
          <p><?php echo esc_html($review_content); ?></p>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
<?php endif; ?>

<div class="reviewlistcontainer reviewmobile">
                    <div class="hs__wrapper mobilereviewslide">
                      <ul class="hs tablist">
                          <?php while (have_rows('review')) : the_row(); 
      $user_image = get_sub_field('user_image'); // User image URL
      $username = get_sub_field('username'); // Username
      $star_image = get_sub_field('star_image'); // Star image URL
      $time_period = get_sub_field('time_peroid'); // Time period
      $review_content = get_sub_field('review_content'); // Review content
      $first_letter = mb_substr($username, 0, 1);
    ?>
    <li class="hs__item">
                          <div class="googlereviewbox">
                            <div class="authorinitial"><?php echo esc_html($first_letter); ?></div>
                            <div class="reviewtxtbox ptag">
                              <div class="reviewnamebox">
                                <?php echo esc_html($username); ?>
                                <span
                                  ><img src="<?php echo esc_url($star_image['url']); ?>" alt="Review Star"/><?php echo esc_html($time_period); ?></span
                                >
                              </div>
                              <p>
                                <?php echo esc_html($review_content); ?>
                              </p>
                            </div>
                          </div>
                        </li>
                       <?php endwhile; ?> 
                      </ul>
                  </div>
              </div>

              </div>
          </div>
      </div>
       <div class="wid50 fright">
          <?php if (have_rows('right_review_image')) : ?>
  <div class="imgcollage">
    <div class="imagecolumn">
      <?php 
      $count = 0; // To track column division
      while (have_rows('right_review_image')) : the_row();
        $image = get_sub_field('images'); // Get the image subfield
        if ($image) :
      ?>
        <img 
          src="<?php echo esc_url($image['url']); ?>" 
          alt="<?php echo esc_attr($image['alt']); ?>"
          decoding="async"
        >
      <?php
        endif;
        $count++;

        // Close and reopen columns every two images
        if ($count % 2 == 0) :
          echo '</div><div class="imagecolumn">';
        endif;
      endwhile;
      ?>
    </div> <!-- Close last column -->
  </div> <!-- Close imgcollage -->
<?php endif; ?>

       </div>
  </div>
</div>
</section>

<section class="blog_sec margin-100px" id="articles">
        <div class="sitegradient"></div>
        <div class="wrapper">
            <h3><?php the_field('blog_group_blog_heading');?></h3>
            <div class="semititle ftsz22"><?php the_field('blog_group_blog_heading_blog_subheading');?></div>
            <div class="sec_absolutetxt"><?php the_field('blog_group_blog_heading_blog_content');?></div>
            <div class="bloglistcontainer flex-container wrap">
                <div class="category-blogs-wrapper">
    <div class="blogs-container">
        <?php
        // Define the category slug
        $category_slug = 'popular-articles'; // Replace with your desired category slug

        // Query arguments
        $args = array(
            'category_name'  => $category_slug, // Get posts from this category
            'posts_per_page' => 3,              // Number of posts to display
            'post_status'    => 'publish',      // Only published posts
        );

        // Custom query
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $post_id = get_the_ID();
                ?>
                <div class="articlebox cmnarticles">
                    <div class="articleimg">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url($post_id, 'medium'); ?>" 
                                 class="wp-post-image" 
                                 alt="<?php the_title_attribute(); ?>" 
                                 decoding="async">
                        </a>
                    </div>
                    <div class="article_middle">
                        <div class="articletype">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) :
                                $category = $categories[0]; // Get the first category
                                ?>
                                <a href="<?php echo get_category_link($category->term_id); ?>">
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="articlename">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                        <div class="articleby">
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                <span>
                                    <img alt="<?php the_author(); ?>" 
                                         title="<?php the_author(); ?>" 
                                         src="<?php echo get_avatar_url(get_the_author_meta('ID'), ['size' => 96]); ?>" 
                                         class="avatar avatar-96 photo" 
                                         height="96" width="96" decoding="async">
                                </span>
                                By <?php the_author(); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No posts found in this category.</p>';
        endif;
        ?>
    </div>
</div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

   <section class="servicepg margin-100px location_list location_sec splloc" id="ourlocation">
    <div class="wrapper">
        <h3><?php the_field('digital_marketing_australia_group_section_title')?></h3>
        <div class="semititle"><?php the_field('digital_marketing_australia_group_section_subtitle')?></div>
        <?php
// Retrieve the group field
$service_group = get_field('digital_marketing_australia_group'); // Replace 'service_group' with your group field name

if ($service_group && isset($service_group['services_repeater'])): ?>
    <div class="servicebx_container locationcitycontainer">
        <?php foreach ($service_group['services_repeater'] as $service): 
            $service_link = $service['service_url']; 
            $service_image = $service['service_image']; 
            $service_name = $service['service_location']; 
            $service_seo_name = $service['service_seo_name'];
        ?>
        <a href="<?php echo esc_url($service_link); ?>" class="servicebx">
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
    <a href="#" class="moretoollink rightabsolutelink">View Other Locations</a>

<div class="clearfix"></div>
    </div>
</section>

</main>
<?php get_footer();?>