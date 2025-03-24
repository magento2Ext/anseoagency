<?php
/* Template Name: Career */
get_header(); ?>

<main>
	<section class="inr_banner flex_banner">
    <div class="sitegradient inrsitegradient"></div>
    <div class="wrapper">
        <div class="inrbnr_left">
            <div class="alignitem">
                                <h1><?php the_field('banner_group_banner_heading');?></h1>
                                <div class="inrbnr_txt"><?php the_field('banner_group_banner_subheading');?></div>
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

<section class="aboutpgsec">
    <!--  SEO journey section start  -->
    <section class="sec_wrap">
        <div class="wrapper">
            <div class="position_wrap">
                <div class="position_left ptag">
                    
<div class="semititle ftsz22"><?php the_field('specialist_group_specialist_outer_heading');?></div>
<?php the_field('specialist_group_specialist_outer_content');?>
</div>

    <?php
    if (have_rows('specialist_group')) : 
  // Access the group field
  while (have_rows('specialist_group')) : the_row(); 
    // Check if the repeater field 'ppc_search_service_repeater' exists
    if (have_rows('accordian_repeater')) : ?>
    	<div class="position_right">
                  <div class="accordion-position">
                  	<?php 
          // Loop through the repeater field
          while (have_rows('accordian_repeater')) : the_row(); 
            $acc_header_text = get_sub_field('acc_header_text'); // Service Number
            $acc_country = get_sub_field('location_country'); // Service Title
            $acc_position = get_sub_field('position'); // Service Header
            $acc_specialist_content = get_sub_field('specialist_content'); // Service Content
          ?>

                                <div class="accordion_in">
                                    <div class="acc_head">
                                        <div class="acc_left">
                                            <div class="acc_title"><?php echo esc_html($acc_header_text);?>
                                            <div class="acc_location">
                                                <span>Location:</span><?php echo esc_html($acc_country);?> </div>
                                            </div>
                                            <div class="acc_right">
                                            <span><?php echo esc_html($acc_position);?></span>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="acc_content">
                                        <div class="cc_subtitle">Job Description:</div>
                                    <?php echo esc_html($acc_position);?> 
                                    </div>
                                </div>
                          <?php endwhile; ?>
                            </div>
</div>
<?php endif; 
  endwhile; 
endif; 
?>
</div>
</div>
</section>
</section>

<section class="instagramsec">
    <div class="wrapper">
        <div class="instatitle">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram-icon.svg" alt="<?php the_title(); ?>" />
            anseoagency
        </div>
    </div>
    <div class="instagramcontainer">
        <?php echo do_shortcode('[instagram-feed feed=1]');?>

    </div>
     <div class="wrapper">
        <div class="socialbtnbar">
            <a href="#" target="_blank" rel="noreferrer noopener" class="sociallinkbtn linkedinbtn">
                <dl>
                    <dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin-btn-icon.svg" alt="Linkedin"></dt>
                    <dd>Follow us on <span>Linkedin</span></dd>
                </dl>
            </a>
            <a href="#" target="_blank" rel="noreferrer noopener" class="sociallinkbtn fbbtn">
                <dl>
                    <dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fb-btn-icon.svg" alt="facebook"></dt>
                    <dd>Follow us on <span>Facebook</span></dd>
                </dl>
            </a>
        </div>
    </div>
</section>

<section class="videoreview_section margin-100px" id="testimonials">    
        <div class="sitegradient"></div>
        <div class="wrapper">
          <h3>Client Testimonials</h3>
          <div class="semititle">
            Check Out What Our Valued Customers Have to Say<br />
            about Our Digital Marketing Services.
          </div>
          <div class="sec_absolutetxt"> 
            AN SEO AGENCY uses multiple positive testimonials to design a customized strategy to help you reach your online promotion objectives.
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

<section class="servicepg margin-100px location_list location_sec splloc" id="ourlocation">
    <div class="wrapper">
        <h3><?php the_field('career_digital_marketing_section_title')?></h3>
        <div class="semititle"><?php the_field('career_digital_marketing_section_subtitle')?></div>
        <?php
// Retrieve the group field
$service_group = get_field('career_digital_marketing'); // Replace 'service_group' with your group field name

if ($service_group && isset($service_group['services'])): ?>
    <div class="servicebx_container locationcitycontainer">
        <?php foreach ($service_group['services'] as $service): 
            $service_link = $service['service_link']; 
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

<?php the_footer();?>