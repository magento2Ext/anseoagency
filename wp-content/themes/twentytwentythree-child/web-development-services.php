<?php
/* Template Name: Webdevelopment-services */
get_header();
$author_id = get_the_author_meta('ID');
$author_image = get_field('author_image', 'user_'. $author_id); 
?>
<main>
<section class="inr_banner flex_banner">
    <div class="sitegradient inrsitegradient"></div>
    <div class="wrapper">
      <div class="inrbnr_left">
        <div class="alignitem">
             <?php generate_breadcrumbs(); ?>
        	<h1><?php the_field('webdesign_banner_webdesign_banner_heading');?></h1>
        	<div class="inrbnr_txt"><?php the_field('webdesign_banner_webdesign_subheading');?></div>
        	
        </div>
    </div>
    <div class="inrbnr_rightimg">
        		<?php 
    $image_url = get_field('webdesign_banner_webdesign_banner_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
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
          	<?php 
          	$webtabs = get_field('webdesign_tabs');
          	if($webtabs && isset($webtabs['webdesign_tabs_repeater'])):
           foreach ($webtabs['webdesign_tabs_repeater'] as $tabs): 
            $tabs_link = $tabs['webdesign_tablink']; 
            $tabs_text = $tabs['webdesign_tabs_text']; 
        ?>
        <li class="hs__item">
                <a href="<?php echo esc_html($tabs_link);?>"><?php echo esc_html($tabs_text);?></a>
              </li>
          <?php endforeach ; 
             endif; ?>
          </ul>
      </div>
  </div>
   <div class="wrapper jumpservices_sec">
                <div class="jumbservicelinkbox">
                  <span>Jump to</span>
                  <div class="dropdown">
                    <button onclick="toggleDropdown()" class="dropbtn" data-rocket-lazy-bg-19766016-2587-49b6-9a46-8c1351342cb2="loaded">Discover More</button>
                    <div id="myDropdown" class="dropdown-content">
                      <?php $webtabs = get_field('webdesign_tabs');
            if($webtabs && isset($webtabs['webdesign_tabs_repeater'])):
           foreach ($webtabs['webdesign_tabs_repeater'] as $tabs): 
            $tabs_link = $tabs['webdesign_tablink']; 
            $tabs_text = $tabs['webdesign_tabs_text']; 
        ?>
               
                <a href="<?php echo esc_attr($tabs_link); ?>"><?php echo esc_html($tabs_text); ?></a>
            
                <?php endforeach ; 
             endif; ?>
                                          </div>
                  </div>
                </div>
              </div>
</section>

<section class="seoservices_sec margin-100px">
		<div class="wrapper">
			<div class="serviceseo_container">
				<div class="seoservice_img">
					<?php 
    $image_url = get_field('webdesign_counter_webdesign_counter_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
    ?>
                
            </div>

            <!-- Content Section -->
            <div class="seoservice_infobox">
                <h2 class="sectiontitle"><?php the_field('webdesign_counter_webdesign_counter_heading'); ?></h2>
                <p><?php the_field('webdesign_counter_webdesign_counter_subheading'); ?></p>

                <?php
// Get the group field
$ppc_services_group = get_field('webdesign_counter');

if ($ppc_services_group) : // Check if the group field exists
    // Get the repeater field inside the group
    $ppc_service_counter = $ppc_services_group['webheading_counter'];

    if ($ppc_service_counter) : // Check if the repeater field has rows
?>

                <!-- Counter List -->
                <ul id="counterdiv" class="contlistul wid50 ptag">
                     <?php foreach ($ppc_service_counter as $counter_row) : 
                // Access subfields inside the repeater
                $counter_number = $counter_row['webheading_number'];
                $counter_description = $counter_row['webheading_counter_text'];
            ?>
                <li>
                    <p>
                        <span class="counter-value" data-count="<?php echo esc_attr($counter_number); ?>">0</span>+
                    </p>
                    <p><?php echo esc_html($counter_description); ?></p>
                </li>
            <?php endforeach; ?>
                </ul>
                <?php
    endif; // End repeater check
endif; // End group field check
?>
            </div>
				</div>
			</div>
		</div>
	</section>

	<section class="seocontent_sec " id="seoservices_sec">
      <div class="wrapper">
        <div class="servicecontent_div">
          <div class="servicecontentbx fleft ptag">
            <h2 class="sectiontitle"><?php the_field('counter_below_section_webdesign_heading');?></h2>
            <?php the_field('counter_below_section_webdesign_content');?>
        </div>
         <div class="serviceimgbx fright">
         	<?php 
    $image_url = get_field('counter_below_section_webdesign_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?>
         </div>
    </div>
</div>
</section>

<section class="servicesection margin-100pxmore_services scroll-view" id="seoservices_sec">
		<div class="sitegradient"></div>
		<div class="wrapper">
			<h3><?php the_field('webdesign_services_webdesign_service_title');?></h3>
            <div class="main-seoinsight">
			<div class="semititle"><?php the_field('webdesign_services_webdesign_service_subtitle');?></div>
			<div class="sec_absolutetxt"><?php the_field('webdesign_services_webdesign_service_content');?></div>
        </div>
			<?php if ($group = get_field('webdesign_services')) : ?>
    <div class="servicecontainer mobilehide" data-x="0" data-activeservice="1">
        <div class="servicecont_left">
            <ul class="servicelistbox scroll-view-tabs" data-active_class="activeservice">
                <?php if (!empty($group['webdesign_service_repeater'])) : ?>
                    <?php foreach ($group['webdesign_service_repeater'] as $index => $item) : ?>
                        <li class="<?php echo $index === 0 ? 'activeservice' : ''; ?>">
                            <span><?php echo esc_html($item['webdesign_service_number']); ?></span>
                            <div class="servicename">
                                <?php echo esc_html(strip_tags($item['webdesign_service_name'])); ?>
                            </div>
                            <div class="servicetxt ptag">
                                <p>
                                    <?php echo wp_kses_post($item['webdesign_service_description']); ?>
                                </p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
        <div class="servicecont_right scroll-view-tabs-content">
            <?php if (!empty($group['webdesign_service_repeater'])) : ?>
                <?php foreach ($group['webdesign_service_repeater'] as $index => $item) : ?>
                    <div class="replacecontent">
                        <div class="servicetitle">
                           <?php echo esc_html($item['webdesign_service_name']); ?>
                           </div>
                           <p><?php echo esc_html($item['webdesign_subtext']); ?></p>
                           <p> <?php echo esc_html(strip_tags($item['webdesign_service_semi_desc'])); ?> </p>
                        
                       
                        <div class="servicenote">
                            <?php echo wp_kses_post($item['webdesign_service_google']); ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<div class="clearfix"></div>
<?php 
// Check if the group field 'ppc_search_service' exists
if (have_rows('webdesign_services')) : 
  // Access the group field
  while (have_rows('webdesign_services')) : the_row(); 
    // Check if the repeater field 'ppc_search_service_repeater' exists
    if (have_rows('webdesign_service_repeater')) : ?>
      <div class="serviceaccordioncontainer">
        <!-- Service detail accordion start -->
        <div class="accordion-demo">
          <?php 
          // Loop through the repeater field
          while (have_rows('webdesign_service_repeater')) : the_row(); 
            $service_number = get_sub_field('webdesign_service_number'); // Service Number
            $service_title = get_sub_field('webdesign_service_name'); // Service Title
            $service_header = get_sub_field('webdesign_subtext'); // Service Header
            $service_content = get_sub_field('webdesign_service_semi_desc'); // Service Content
          ?>
          <div class="accordion_in acc_active">
            <div class="acc_head">
              <span><?php echo esc_html($service_number); ?></span>
              <?php echo esc_html($service_title); ?>
            </div>
            <div class="acc_content">
              <p><?php echo esc_html($service_header); ?></p>
              <p><?php echo $service_content; // WYSIWYG content supports HTML ?></p>
              <div class="clearfix"></div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
        <!-- Service detail accordion end -->
      </div>
    <?php endif; 
  endwhile; 
endif; 
?>
</div>
	</section>

    <section class="seocontent_sec " id="seoservices_sec">
      <div class="wrapper">
        <div class="servicecontent_div maketopspacing">
          <div class="serviceimgbx fleft"><?php 
    $image_url = get_field('what_webdesign_what_webdesign_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?>
</div>
          <div class="servicecontentbx fright ptag"><?php the_field('what_webdesign_what_webdesign_content');?></div>
      </div>
  </div>
</section>

<section class="seoprocess_sec margin-100px scroll-view" id="seo_processsection">
        <div class="wrapper">
            <h3><?php the_field('webdesign_process_webdesign_process_heading');?></h3>
            <div class="main-seoinsight">
            <div class="semititle"><?php the_field('webdesign_process_webdesign_process_subheading');?></div>
            <div class="sec_absolutetxt"><?php the_field('webdesign_process_webdesign_process_content');?></div>
        </div>
            <div class="processcontainer" data-x="0" data-activeprocess="1">
                        
                        <?php
// Check if the ppc_process_group field exists and contains data
if( have_rows('webdesign_process') ):
    // Loop through the rows of data in webdesign_process
    while( have_rows('webdesign_process') ) : the_row();

        // Check if there are rows in the repeater field
        if( have_rows('webdesign_process_repeater') ): ?>
            <div class="processcont_left scrollbar" id="style-3">
                <ul class="processlistbox force-overflow scroll-view-tabs" data-active_class="active">
                    <?php
                    // Loop through the repeater field rows
                    $count = 1; // Counter for active class logic
                    while( have_rows('webdesign_process_repeater') ) : the_row();
                        // Get the subfield values
                        $process_number = get_sub_field('webdesign_process_number');
                        $process_text = get_sub_field('webdesign_process_text');
                        ?>
                        <li class="<?php echo ($count == 1) ? 'active' : ''; ?>">
                            <a href="javascript:void(0);">
                                <span><?php echo esc_html($process_number); ?></span>
                                <div class="processname">
                                    <?php
                                    // Display process text, handle if there are links
                                    echo wp_kses_post($process_text);
                                    ?>
                                </div>
                            </a>
                        </li>
                        <?php
                        $count++; // Increment the counter
                    endwhile;
                    ?>
                </ul>
            </div>
        <?php endif;

    endwhile;
endif;
?>
<?php
// Check if the webdesign_process field exists and contains data
if( have_rows('webdesign_process') ):
    // Loop through the rows of data in webdesign_process
    while( have_rows('webdesign_process') ) : the_row();

        // Check if there are rows in the repeater field
        if( have_rows('webdesign_process_repeater') ): ?>
            <div class="processcont_right scroll-view-tabs-content">

                    <?php
                    // Loop through the repeater field rows
                    $count = 1; // Counter for active class logic
                    while( have_rows('webdesign_process_repeater') ) : the_row();
                        // Get the subfield values
                        $process_detail_heading = get_sub_field('webdesign_process');
                        $process_detail_content = get_sub_field('webdesign_process_detail_content');
                        $process_detail_image = get_sub_field('webdesign_detail_image');
                        ?>
                        <div class="replacecontent">
                    <div class="processinfo_left ptag">
                           <div class="sectiontitle"><?php echo esc_html($process_detail_heading); ?></div>
                           <?php echo wp_kses_post($process_detail_content); ?>
                        </div>
                        <div class="processimg_right">
                            <?php
            
                            echo '<img src="' . esc_url($process_detail_image['url']) . '" alt="' . esc_attr($process_detail_image['alt']) . '">';
            
                            ?>
                        </div>
                    </div>
                        <?php
                    endwhile;
                    ?>
                </div>
            </div>
        <?php endif;

    endwhile;
endif;
?>
<div class="clearfix"></div>

<?php 
// Check if the group field 'ppc_process_group' exists
if (have_rows('webdesign_process')) : 
  // Access the group field
  while (have_rows('webdesign_process')) : the_row(); 
    // Check if the repeater field 'ppc_process_repeater' exists
    if (have_rows('webdesign_process_repeater')) : ?>
      <div class="processaccordioncontainer">
        <!-- Service detail accordion start -->
        <div class="accordion-demo">
          <?php 
          // Loop through the repeater field
          while (have_rows('webdesign_process_repeater')) : the_row(); 
            // Subfields in the repeater
            $step_number = get_sub_field('webdesign_process_number'); // Step Number
            $step_title = get_sub_field('webdesign_process_text'); // Step Title
            $step_header = get_sub_field('webdesign_process'); // Section Header
            $step_description = get_sub_field('webdesign_process_detail_content'); // Description (WYSIWYG)
            $step_image = get_sub_field('webdesign_detail_image'); // Image (URL)

          ?>
          <div class="accordion_in acc_active">
            <div class="acc_head">
              <span><?php echo esc_html($step_number); ?></span>
             <?php echo esc_html(strip_tags($step_title)); ?>
            </div>
            <div class="acc_content">
              <div class="replacecontent">
                <div class="processinfo_left ptag">
                  <div class="sectiontitle"><?php echo esc_html($step_header); ?></div>
                  <p><?php echo wp_kses_post($step_description); ?></p>
                </div>
                <div class="processimg_right">
                 <?php if ($step_image) {
            echo '<img src="' . esc_url($step_image['url']) . '" alt="' . esc_attr($step_image['alt']) . '">';
            }?>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
        <!-- Service detail accordion end -->
      </div>
    <?php endif; 
  endwhile; 
endif; 
?>

                </div>
            </div>
    </section>

<section class="seocontent_sec " id="seoservices_sec">
      <div class="wrapper">
        <div class="servicecontent_div">
          <div class="servicecontentbx fleft ptag">
            <h2><?php the_field('webdesign_thing_group_webdesign_thing_heading');?></h2>
            <?php the_field('webdesign_thing_group_webdesign_thing_content');?>
          </div>
          <div class="serviceimgbx fright"><?php 
    $image_url = get_field('webdesign_thing_group_webdesign_thing_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?></div>
      </div>
  </div>
</section>

<section class="seocontent_sec " id="seoservices_sec">
      <div class="wrapper">
        <div class="servicecontent_div maketopspacing">
          <div class="serviceimgbx fleft"><?php 
    $image_url = get_field('webdesign_thing_group_webdesign_hire_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?></div>
          <div class="servicecontentbx fright ptag"><h2><?php the_field('webdesign_thing_group_webdesign_hire_agency_heading');?></h2>
            <?php the_field('webdesign_thing_group_webdesign_hire_content');?>
          </div>
      </div>
  </div>
</section>

 <section class="videoreview_section margin-100px" id="testimonials">
        <div class="sitegradient"></div>
        <div class="wrapper">
          <h3>Client Testimonials</h3>
          <div class="main-seoinsight">
          <div class="semititle">
            Check Out What Our Valued Customers Have to Say<br />
            about Our Digital Marketing Services.
          </div>
          <div class="sec_absolutetxt"> 
            With hundreds of 5-star reviews, AN SEO AGENCY can create a tailored plan
            to meet your company’s online marketing goals.
          </div>
      </div>
          <div class="same_h_aligner same_h_next">

            <div class="wid50">
              <div class="clienttestimonialsec">
                <div class="googlereview_container">
                  <div class="reviewcountdiv">
                    <dl>
                      <dt><span>363</span> Google Reviews</dt>
                      <dd>
                        <span>5</span>
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
      $time_period = get_sub_field('time_period'); // Time period
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

 <section class="seocontent_sec " id="seoservices_sec">
      <div class="wrapper">
        <div class="servicecontent_div">
          <div class="servicecontentbx fleft ptag">
              <h2><?php the_field('choose_supple_group_choose_supple_heading');?></h2>
              <?php the_field('choose_supple_group_choose_supple_content');?>
          </div>
         <div class="serviceimgbx fright">
             <?php 
    $image_url = get_field('choose_supple_group_choose_supple_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?>
         </div>
      </div>
  </div>
</section>

<section class="seoteam_sec margin-100px" id="seoteam">
  <div class="sitegradient"></div>
  <div class="wrapper">
    <h3><?php the_field('webdesign_team_lead_webdesign_team_lead_heading');?></h3>
    <div class="main-seoinsight">
    <div class="semititle ftsz22"><?php the_field('webdesign_team_lead_webdesign_team_lead_subheading');?></div>
    <div class="sec_absolutetxt"><?php the_field('webdesign_team_lead_webdesign_team_lead_content_first');?></div>
</div>
     <div class="teamcontainer">
      <div class="teaminfobox">
        <div class="membernamediv">
          <dl>
            <dt><?php the_field('webdesign_team_lead_webdesign_team_lead_name');?></dt>
            <dd><span><?php the_field('webdesign_team_lead_webdesign_team_lead_experience');?></span></dd>
          </dl>
      
           <div class="ptag"><?php the_field('webdesign_team_lead_webdesign_team_lead_content');?></div>
      </div>
  </div>
  <div class="teamimg_right">
      <?php 
    $image_url = get_field('webdesign_team_lead_webdesign_team_lead_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?>
  </div>
</div>
 <div class="clearfix"></div>
</div>
</section>

<section class="blog_sec margin-100px" id="articles">
        <div class="sitegradient"></div>
        <div class="wrapper">
            <h3><?php the_field('webdesign_blog_group_webdesign_blog_heading');?></h3>
            <div class="main-seoinsight">
            <div class="semititle ftsz22"><?php the_field('webdesign_blog_group_webdesign_blog_subheading');?></div>
            <div class="sec_absolutetxt"><?php the_field('webdesign_blog_group_webdesign_blog_content');?></div>
        </div>
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
                            <!-- <a href="<?php // echo get_author_posts_url(get_the_author_meta('ID')); ?>">  -->
                                <p><span>
                                    <img alt="<?php the_author(); ?>" 
                                         title="<?php the_author(); ?>" 
                                         src="<?php echo $author_image ?>" 
                                         class="avatar avatar-96 photo" 
                                         height="96" width="96" decoding="async">
                                </span>
                                By <?php the_author(); ?></p>
                            <!-- </a> -->
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

    <section class="award_sec margin-100px" id="award_sec">
        <div class="wrapper">
          <div class="award_recogni_sec">
            <div class="semititle"><?php the_field('awards_text'); ?></div>
            <div class="container">
              <div class="hs__wrapper">
                <ul class="hs awardcontainer">
                    <?php if (have_rows('award_image')): 
                while (have_rows('award_image')): the_row(); ?>
                     <?php
            // Get the image subfield
            $image = get_sub_field('image'); // Replace 'image1' with your actual image subfield name

            // If image exists, get its URL and alt text
            if (!empty($image)) {
                $image_url = $image['url'];
                $image_alt = !empty($image['alt']) ? $image['alt'] : 'no image found'; // Default alt text
            }
        ?>
                  <li class="hs__item">
                    <div class="awardbox">
                        <?php if (!empty($image_url)): ?>
                        <img src="<?php echo esc_url($image_url); ?>"  />
                    <?php endif; ?> 
                    </div>
                </li>
                <?php endwhile; endif; ?>
            </ul>
        </div>
    </div>
    </div>
    </div>
</section>

<section class="industry_sec margin-100px" id="seo_industry">
    <div class="wrapper">
        <h3><?php the_field('google_penalty_industries_groups_comm_google_penalty_industries_title','option')?></h3>
        <div class="main-seoinsight">
        <div class="semititle ftsz22"><?php the_field('google_penalty_industries_groups_comm_google_penalty_industries_subtitle','option')?></div>
        <div class="sec_absolutetxt"><?php the_field('google_penalty_industries_groups_comm_google_penalty_industries_content','option')?></div>
    </div>
        <?php
// Retrieve the group field
$service_group = get_field('google_penalty_industries_groups_comm_google_penalty_industries_repeater','option'); // Replace 'service_group' with your group field name

if ($service_group && isset($service_group)): ?>
    <div class="servicebx_container fourcolumn flex-container wrap">
        <?php foreach ($service_group as $service): 
            $service_link = $service['google_penalty_industries_url']; 
            $service_image = $service['google_penalty_industries_image']; 
            $service_name = $service['google_penalty_industries_text']; 
        ?>
        <a href="<?php echo esc_url($service_link);?>" class="servicebx">
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

<section class="platform_sec margin-100px" id="seo_platform">
 <div class="wrapper">
    <h3><?php the_field('webdesign_platform_webdesign_platfrom_heading');?></h3>
    <div class="main-seoinsight">
    <div class="semititle ftsz22"><?php the_field('webdesign_platform_webdesign_platform_subheading');?></div>
    <div class="sec_absolutetxt"><?php the_field('webdesign_platform_webdesign_platform_content');?></div>
</div>
    <div class="servicebx_container fourcolumn flex-container wrap techno">
        <?php
// Fetch the group field
$ppc_platform_group = get_field('webdesign_platform');

// Check if the group field exists and contains the repeater field
if ($ppc_platform_group && isset($ppc_platform_group['webdesign_platform_repeater'])) :
    $platforms = $ppc_platform_group['webdesign_platform_repeater'];
    ?>
        <?php
        // Loop through repeater field items
        foreach ($platforms as $platform) :
            // Fetch subfields
            $image = $platform['webdesign_platform_image'] ?? '';
            $service_text = $platform['webdesign_platform_service'];
            $technology = $platform['webdesign_platform_technology'] ?? '';
            $url = $platform['webdesign_platform_url'] ?? '#'; // Ensure you have the URL field or use a default value

            // Ensure required fields are not empty
            if ($image && $technology) :
                ?>
                <a href="javascript:void" class="servicebx">
                    <dl>
                        <dt>
                            <img src="<?php echo esc_url($image['url']); ?>" 
                                 alt="<?php echo esc_attr($technology); ?>" 
                                 decoding="async">
                        </dt>
                        <dd>
                            <?php echo esc_html($service_text); ?> 
                            <span><?php echo esc_html($technology); ?></span>
                        </dd>
                    </dl>
                </a>
                <?php
            endif;
        endforeach;
        ?>
    
<?php else : ?>
    <p>No platform data found.</p>
<?php endif; ?>

    </div>
</div>
</section>

<section class="servicepg margin-100px location_list location_sec splloc" id="ourlocation">
    <div class="wrapper">
        <h3><?php the_field('webdesign_digital_marketing_webdesign_digital_title')?></h3>
        <div class="semititle"><?php the_field('webdesign_digital_marketing_webdesign_digital_subheading')?></div>
        <?php
// Retrieve the group field
$service_group = get_field('webdesign_digital_marketing'); // Replace 'service_group' with your group field name

if ($service_group && isset($service_group['webdesign_digital_services'])): ?>
    <div class="servicebx_container locationcitycontainer">
        <?php foreach ($service_group['webdesign_digital_services'] as $service): 
            $service_link = $service['webdesign_link']; 
            $service_image = $service['webdesign_service_image']; 
            $service_name = $service['webdesign_service_location']; 
            $service_seo_name = $service['webdesign_service_seo_name'];
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
</main>
<?php get_footer(); ?>
