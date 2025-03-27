<?php
/* Template Name: Seo_Melbourne */
get_header();
$author_id = get_the_author_meta('ID');
$author_image = get_field('author_image', 'user_'. $author_id); 
?>
<main class="seo_melbourne">
<section class="inr_banner flex_banner">
        <div class="sitegradient inrsitegradient"></div>
        <div class="wrapper">
          <div class="inrbnr_left">
            <div class="alignitem">
              <?php generate_breadcrumbs(); ?>

            	<h1><?php the_field('seo_heading');?></h1>
            	<div class="inrbnr_txt"><?php the_field('seo_description');?></div>

</div>
</div>
<div class="inrbnr_rightimg">
	<?php
	$image = get_field('seo_banner_image');
    if ($image) {
    echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
}
 ?>
</div>
</div>
</section>

<section class="inrpage_sec seoservicepg">
                          <div class="wrapper container servicelistslide">
              <div class="hs__wrapper seoservice_tablist">
                <ul class="hs tablist">
                
                <?php while (have_rows('tabs')): the_row(); 
                    // Retrieve subfields
                    $tab_text = get_sub_field('tab_text');
                    $tab_link = get_sub_field('tab_link'); // Text field, allows #id
                ?>
                <li class="hs__item">
                    <a href="<?php echo esc_attr($tab_link); ?>"><?php echo esc_html($tab_text); ?></a>
                </li>
                <?php endwhile; ?>
                </ul>
              </div>
              <div class="clearfix"></div>
              
            </div>
<div class="wrapper jumpservices_sec">
                <div class="jumbservicelinkbox">
                  <span>Jump to</span>
                  <div class="dropdown">
                    <button onclick="toggleDropdown()" class="dropbtn" data-rocket-lazy-bg-19766016-2587-49b6-9a46-8c1351342cb2="loaded">Discover More</button>
                    <div id="myDropdown" class="dropdown-content">
                      <?php while (have_rows('tabs')): the_row(); 
                    // Retrieve subfields
                    $tab_text = get_sub_field('tab_text');
                    $tab_link = get_sub_field('tab_link'); // Text field, allows #id
                ?>
                <a href="<?php echo esc_attr($tab_link); ?>"><?php echo esc_html($tab_text); ?></a>
            
                <?php endwhile; ?>
                                          </div>
                  </div>
                </div>
              </div>
           

          </section>

<section class="seoservices_sec margin-100px">
    <div class="wrapper">
        <div class="serviceseo_container">
            <!-- Image Section -->
            <div class="seoservice_img">
              <?php 
                    $image_url = get_field('counter_image'); 
                    if ($image_url) {
                    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
                }
               ?>
               <?php /* <img fetchpriority="high" width="623" height="505" 
                     src="<?php the_field('seo_service_image'); ?>" 
                     decoding="async"> */ ?>
            </div>

            <!-- Content Section -->
            <div class="seoservice_infobox">
                <h2 class="sectiontitle"><?php the_field('counter_heading'); ?></h2>
                <p><?php the_field('counter_description'); ?></p>

                <!-- Counter List -->
                <ul id="counterdiv" class="contlistul wid50 ptag">
                    <?php if (have_rows('seo_service_counter')): // Check for repeater rows ?>
                        <?php while (have_rows('seo_service_counter')): the_row(); ?>
                            <li>
                                <p><span class="counter-value" 
                                    data-count="<?php the_sub_field('counter_value'); ?>">0</span>+</p>
                                <p><?php the_sub_field('counter_description'); ?></p>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
    </div>
</section>

<section class="seocontent_sec seo-srever-one">
          <div class="wrapper">
            <div class="servicecontent_div maketopspacing">
              <div class="serviceimgbx fright">
                <?php 
    $image_url = get_field('right_cost_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?>
              </div>
              <div class="servicecontentbx fleft ptag">
                <?php the_field('left_cost_melbourne'); ?>
              </div>
            </div>
          </div>
        </section>
        <div class="dividerline">
          <hr>
        </div>

    <section class="seocontent_sec seo-sec-two">
    <div class="wrapper">
          
              <div class="servicecontent_div">
                <div class="serviceimgbx fleft">
                  <?php 
    $image_url = get_field('left_cost_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?>
                </div>
                <div class="servicecontentbx fright ptag">
                  <?php the_field('right_cost_content'); ?>
                </div>
              </div>
            </div>
          </section>

          <div class="dividerline">
        <hr>
      </div>
<?php if(get_field('google_seo_process_group_google_seo_heading','option')) { ?>
  <section class="seoprocess_sec margin-100px scroll-view" id="seo_processsection">
   <div class="wrapper">
      <h3><?php the_field('google_seo_process_group_google_seo_heading', 'option'); ?></h3>
      <div class="main-seoinsight">
         <div class="semititle"><?php the_field('google_seo_process_group_google_seo_process_subheading', 'option'); ?></div>
         <div class="sec_absolutetxt"><?php the_field('google_seo_process_group_google_seo_process_content', 'option'); ?></div>
      </div>

      <div class="processcontainer" data-x="0" data-activeprocess="1">
         <?php if( have_rows('google_seo_process_group', 'option') ): 
            while( have_rows('google_seo_process_group', 'option') ) : the_row();
               if( have_rows('google_seo_process_repeater', 'option') ): ?>
                  <!-- Left Section (process steps) -->
                  <div class="processcont_left scrollbar" id="style-3">
                     <ul class="processlistbox force-overflow scroll-view-tabs" data-active_class="active">
                        <?php 
                        $count = 1;
                        while( have_rows('google_seo_process_repeater', 'option') ) : the_row(); 
                           $process_number = get_sub_field('google_seo_process_number');
                           $process_text = get_sub_field('google_seo_process_text');
                        ?>
                           <li class="<?php echo ($count == 1) ? 'active' : ''; ?>">
                              <a href="javascript:void(0);">
                                 <span><?php echo esc_html($process_number); ?></span>
                                 <div class="processname">
                                    <?php echo wp_kses_post($process_text); ?>
                                 </div>
                              </a>
                           </li>
                        <?php 
                        $count++; 
                        endwhile; ?>
                     </ul>
                  </div>

                  <!-- Right Section (process details) -->
                  <div class="processcont_right scroll-view-tabs-content">
                     <?php 
                     while( have_rows('google_seo_process_repeater', 'option') ) : the_row();
                        $process_detail_heading = get_sub_field('google_seo_process_detail_heading');
                        $process_detail_content = get_sub_field('google_seo_process_detail_content');
                        $process_detail_image = get_sub_field('google_seo_detail_image');
                     ?>
                        <div class="replacecontent">
                           <div class="processinfo_left ptag">
                              <div class="sectiontitle"><?php echo esc_html($process_detail_heading); ?></div>
                              <p><?php echo wp_kses_post($process_detail_content); ?></p>
                           </div>
                           <div class="processimg_right">
                              <?php if( $process_detail_image ): ?>
                                 <img src="<?php echo esc_url($process_detail_image['url']); ?>" alt="<?php echo esc_attr($process_detail_image['alt']); ?>">
                              <?php endif; ?>
                           </div>
                        </div>
                     <?php endwhile; ?>
                  </div>
               <?php endif; ?>
            <?php endwhile; 
         endif; ?>
      </div>

      <div class="clearfix"></div>

      <!-- Accordion Section -->
      <?php if (have_rows('google_seo_process_group', 'option')) : ?>
         <div class="processaccordioncontainer">
            <div class="accordion-demo">
               <?php while (have_rows('google_seo_process_group', 'option')) : the_row(); 
                  if (have_rows('google_seo_process_repeater', 'option')) : 
                     while (have_rows('google_seo_process_repeater', 'option')) : the_row(); 
                        $step_number = get_sub_field('google_seo_process_number');
                        $step_title = get_sub_field('google_seo_process_text');
                        $step_header = get_sub_field('google_seo_process_detail_heading');
                        $step_description = get_sub_field('google_seo_process_detail_content');
                        $step_image = get_sub_field('google_seo_detail_image');
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
                              <?php if ($step_image): ?>
                                 <img src="<?php echo esc_url($step_image['url']); ?>" alt="<?php echo esc_attr($step_image['alt']); ?>">
                              <?php endif; ?>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php endwhile; 
                  endif; 
               endwhile; 
            endif; ?>
         </div>
      </div>
   </div>
</section>
<div class="dividerline">
        <hr>
      </div>
<?php } ?>

<section class="trustedbusiness seo-true-main">
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
          <div class="clearfix"></div>
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
          <div class="clearfix"></div>
</section>
<div class="dividerline">
        <hr>
      </div>

      <section class="seocontent_sec seo-aside-inse">
        <div class="wrapper">
          
          <div class="servicecontent_div maketopspacing">
            <div class="serviceimgbx fright">
              <?php 
    $image_url = get_field('right_important_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?>
            </div>
            <div class="servicecontentbx fleft ptag">
              <?php the_field('right_important_content'); ?>
            </div>
          </div>
        </div>
      </section>
      <div class="dividerline">
        <hr>
      </div>

<section class="seoteam_sec margin-100px" id="seoteam">
  <div class="sitegradient"></div>
  <div class="wrapper">
    <h3><?php the_field('team_heading'); ?></h3>
    <div class="main-seoinsight">
    <div class="semititle ftsz22">
      <?php the_field('team_content'); ?>
    </div>
    <div class="sec_absolutetxt">
      <?php the_field('team_right_content'); ?>
    </div>
</div>
    <div class="teamcontainer">
      <div class="teaminfobox">
        <div class="membernamediv">
          <dl>
            <dt>
              <?php the_field('team_member_name'); // Display Team Member Name ?>
            </dt>
            <dd>
              <span>
                <?php the_field('team_member_title'); // Display SEO Strategy Director ?>
              </span>
              <span>
                (<?php the_field('team_member_experience'); // Display Years of Experience ?> Years Experience)
              </span>
            </dd>
          </dl>
          <div class="ptag">
            <p>
              <?php the_field('team_member_bio'); // Display Team Member Bio ?>
            </p>
          </div>
        </div>
      </div>

      <div class="teamimg_right">
         <?php 
    $image_url = get_field('team_member_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</section>

<div class="dividerline">
        <hr>
      </div>

<section class="seocontent_sec adblue-seo">
        <div class="wrapper">
          
              <div class="servicecontent_div">
                <div class="serviceimgbx fleft">
                  <?php 
    $image_url = get_field('working_section_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?>
                </div>
                <div class="servicecontentbx fright ptag">
                  <h2 class="sectiontitle"><?php the_field('working_section_heading'); ?></h2>
                  <?php the_field('working_section_content'); ?>
                </div>
              </div>
            </div>
          </section>

          <div class="dividerline">
        <hr>
      </div>
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
<div class="dividerline">
        <hr>
      </div>
<section class="seocontent_sec seoCon-main-aside">
        <div class="wrapper">
          
              <div class="servicecontent_div maketopspacing">
                <div class="serviceimgbx fright">
                  <?php 
    $image_url = get_field('audit_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?>
                </div>
                 <div class="servicecontentbx fleft ptag">
              <h2 class="sectiontitle">
                 <?php the_field('audit_heading'); ?>
              </h2>
              <?php the_field('audit_content'); ?>
            </div>
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
<div class="dividerline">
        <hr>
      </div>

<section class="seocontent_sec an-se-Main">
        <div class="wrapper">
          
          <div class="servicecontent_div">
            <div class="serviceimgbx fleft">
              <?php 
    $image_url = get_field('melbourne_seo_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?>
            </div>
            <div class="servicecontentbx fright ptag">
              <h2 class="sectiontitle"> <?php the_field('melbourne_seo_text'); ?></h2>
              <?php the_field('melbourne_seo_content'); ?>
            </div>
          </div>
        </div>
      </section>
      <div class="dividerline">
        <hr>
      </div>
  <section class="seocontent_sec local-anseo-in">
        <div class="wrapper">
          <div class="servicecontent_div maketopspacing">
            <div class="serviceimgbx fright">
              <?php 
    $image_url = get_field('seo_sevices_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?>
            </div>
            <div class="servicecontentbx fleft ptag">
              <h2 class="sectiontitle"><?php the_field('seo_services_heading'); ?></h2>
              <?php the_field('seo_services_content'); ?>
            </div>
          </div>
        </div>
      </section>
      <div class="dividerline">
        <hr>
      </div>
    <section class="locationdtl_content">
  <div class="wrapper">
    <div class="officeinfo_container flex-container wrap">
      
      <!-- Office Information Section -->
      <div class="openinghrs_container">
        <div class="ftaddressdiv">
          <dl>
            <dt>
              <?php 
                $office_logo = get_field('office_logo');
                if ($office_logo): ?>
                <img 
                  src="<?php echo esc_url($office_logo['url']); ?>" 
                  alt="<?php echo esc_attr($office_logo['alt']); ?>" 
                  width="86" height="78" 
                />
              <?php endif; ?>
            </dt>
            <dd>
              <p><?php the_field('office_name'); ?></p>
              <h2><?php the_field('office_title'); ?></h2>
              <?php the_field('office_subtitle'); ?>
            </dd>
          </dl>
        </div>

        <!-- Opening Hours -->
                <div class="business-hours">
    <div class="opening-hours">
      <div class="business-main">
    <h2>Business Hours</h2>
  </div>
    <div class="content">
        <div class="left-aside-text">
            <h2>Monday - Saturday</h2>
           <p>24 hrs</p>
        </div>

        <div class="right">
         <h2>Sunday</h2>
            <p>Closed</p>
        </div>
    </div>
</div>
      </div>
      </div>
      
      <!-- Address and Map Section -->
      <div class="address_container">
        <div class="officeaddress_div ptag">
          <div class="sectiontitle"><?php the_field('address_title'); ?></div>
          <dl>
            <dt><i class="fa fa-map-marker" aria-hidden="true"></i></dt>
            <dd><?php the_field('address'); ?></dd>
          </dl>
          <dl>
            <dt><i class="fa fa-phone" aria-hidden="true"></i></dt>
           <!-- <dd><a href="tel:<?php // the_field('phone_number'); ?>"><?php // the_field('phone_number'); ?></a></dd> -->
            <dd><a href="tel:+91<?php echo get_field('phone_number', 'option'); ?>"><?php echo get_field('phone_number', 'option'); ?></a></dd>
          </dl>
          
          <div class="clearfix"></div>
        </div>
        
        <!-- Google Map -->
        <div class="mapdiv">
          <?php if ($map_iframe = get_field('google_iframe')): ?>
            <?php echo $map_iframe; ?>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>
</section>
<div class="dividerline">
        <hr>
      </div>

      <section class="blog_sec margin-100px" id="seo_articles">
            <div class="sitegradient"></div>
            <div class="wrapper"><h3><?php the_field('blog_section_heading'); ?></h3>
              <div class="main-seoinsight">
              <div class="semititle ftsz22"><p><?php the_field('blog_section_subtitle'); ?></p></div>
              <div class="sec_absolutetxt"><p><?php the_field('blog_section_description'); ?></p></div>
            </div>
              <div class="bloglistcontainer flex-container wrap">
    <?php
    // Custom WP_Query to fetch the latest posts
    $category_slug = 'popular-articles'; // Replace with your desired category slug

        // Query arguments
        $args = array(
            'category_name'  => $category_slug, // Get posts from this category
            'posts_per_page' => 3,              // Number of posts to display
            'post_status'    => 'publish',      // Only published posts
        );
    $blog_query = new WP_Query($args);

    if ($blog_query->have_posts()):
        while ($blog_query->have_posts()): $blog_query->the_post();
            // Variables for dynamic content
            $post_title = get_the_title();
            $post_permalink = get_permalink();
            $post_image = get_the_post_thumbnail_url(get_the_ID(), 'medium'); // Use 'medium' size for images
            $post_category = get_the_category();
            $author_name = get_the_author();
            $author_avatar = get_avatar_url(get_the_author_meta('ID'), ['size' => 96]); // Gravatar for author
    ?>
    <div class="articlebox cmnarticles">
        <div class="articleimg">
            <a href="<?php echo esc_url($post_permalink); ?>">
                <img src="<?php echo esc_url($post_image); ?>" alt="<?php echo esc_attr($post_title); ?>" class="wp-post-image" decoding="async">
            </a>
        </div>
        <div class="article_middle">
            <div class="articletype">
                <?php if (!empty($post_category)): ?>
                    <a href="<?php echo esc_url(get_category_link($post_category[0]->term_id)); ?>">
                        <?php echo esc_html($post_category[0]->name); ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="articlename">
                <a href="<?php echo esc_url($post_permalink); ?>">  
                    <?php echo esc_html($post_title); ?>
                </a>
            </div>
            <div class="articleby">
                <!-- <a href="<?php // echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">  -->
                    <p><span><img alt="<?php echo esc_attr($author_name); ?>" title="<?php echo esc_attr($author_name); ?>" src="<?php echo $author_image ?>" class="avatar avatar-96 photo" height="96" width="96" decoding="async"></span>
                    By <?php echo esc_html($author_name); ?></p>
                <!-- </a> -->
            </div>
        </div>
    </div>
    <?php
        endwhile;
    else:
        echo '<p>No posts found.</p>';
    endif;
    wp_reset_postdata(); // Reset query
    ?>
</div>

<div class="clearfix"></div>
            </div>
          </section>
<div class="dividerline">
        <hr>
      </div>

      <section class="seocontent_sec aside-main-sep-an">
        <div class="wrapper">
                    </div>
      </section>

      <section class="servicepg margin-100px location_list" id="offer_services">
    <div class="wrapper">
        <h3>We offer services in</h3>
        <div class="servicebx_container locationcitycontainer">
            <?php while (have_rows('service_locations')): the_row(); ?>
                <?php 
                $location_name = get_sub_field('location_name');
                $anchor_text = get_sub_field('anchor_text');
                $location_url = get_sub_field('location_url');
                $image = get_sub_field('location_image');
                ?>
                <a href="javascript:void(0)" class="servicebx">
                    <dl>
                        <dt>
                            <img src="<?php echo esc_url($image['url']); ?>" 
                                 alt="<?php echo esc_attr($anchor_text . ' ' . $location_name); ?>" 
                                 decoding="async">
                        </dt>
                        <dd>
                            <?php echo esc_html($anchor_text); ?><span><?php echo esc_html($location_name); ?></span>
                        </dd>
                    </dl>
                </a>
            <?php endwhile; ?>
        </div>
        <div class="clearfix"></div>
        <hr>
    </div>
</section>

<section class="industry_sec margin-100px" id="seo_industry">
    <div class="wrapper">
        <h3><?php the_field('industries_group_indurtries_heading')?></h3>
        <div class="semititle ftsz22"><?php the_field('industries_group_industries_subheading')?></div>

        <?php
// Retrieve the group field
$service_group = get_field('industries_group'); // Replace 'service_group' with your group field name

if ($service_group && isset($service_group['industries_repeater'])): ?>
    <div class="servicebx_container fourcolumn flex-container wrap">
        <?php foreach ($service_group['industries_repeater'] as $service): 
            $service_link = $service['industries_url']; 
            $service_image = $service['industries_image']; 
            $service_name = $service['industries_text']; 
        ?>
        <a href="javascript:void(0)" class="servicebx">
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
</main>
<?php get_footer(); ?>