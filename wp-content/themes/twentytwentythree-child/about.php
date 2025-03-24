<?php 
/* Template Name: About */
get_header();
?>
<main>
<section class="inrpage_sec aboutpg ignore-fixed">
    <!-- about banner div start -->
    <div class="aboutbanner">
        <div class="sitegradient inrsitegradient"></div>

<div class="abouttxtbanner wrapper">
    <?php 
    // Retrieve parent group fields
    $about_banner = get_field('banner_group'); 
    
        $banner_text = $about_banner['banner_text'] ; 
        $placeholder_text = $about_banner['place'] ; 
        $small_text = $about_banner['small_text'] ;
    ?>
    <div class="bnrtxt">
        <?php echo esc_html($banner_text); ?>
        <input type="text" id="typewritetext" readonly="readonly" placeholder="<?php echo esc_attr($placeholder_text); ?>">
    </div>
    <div class="bnrsmalltxt">
        <?php echo wp_kses_post($small_text); ?>
    </div>
</div>
<div class="aboutbreadcrumb"><?php generate_breadcrumbs(); ?></div>

    </div>
</section>

<section class="aboutpgsec">
    <!-- director div start -->
    <div class="wrapper">
        <div class="directordivnew">
            <div class="dire_leftnew">
                <div class="seocontent_imgdiv careerimg">
                	<div class="imgcollage">
                	<?php 
$parent_group = get_field('founder_letter_group'); // Fetch the parent group
if ($parent_group && isset($parent_group['career_image'])) : 
    $images = $parent_group['career_image']; // Fetch the repeater field
?>
   
        <div class="imagecolumn">
            <?php foreach ($images as $index => $image_row) : ?>
                <?php if ($index % 2 == 0) : // For column 1 ?>
                    <img src="<?php echo esc_url($image_row['image']['url']); ?>" alt="<?php echo esc_attr($image_row['image']['alt']); ?>">
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="imagecolumn">
            <?php foreach ($images as $index => $image_row) : ?>
                <?php if ($index % 2 != 0) : // For column 2 ?>
                    <img src="<?php echo esc_url($image_row['image']['url']); ?>" alt="<?php echo esc_attr($image_row['image']['alt']); ?>">
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
 
<?php endif; ?>


                </div>
            </div>
            </div>
            <div class="dire_rightnew ptag">
                <div class="letterwrapper">

                    <dl class="letterheader">
                        <dt></dt>
                        <dd><?php the_field('founder_letter_group_letter_heading');?></dd>
                    </dl>
                    <hr>
                    <div class="director_left">
                        <p><strong><?php the_field('founder_letter_group_letter_upper_content');?></strong></p></div>
                        <div class="directorletter divhide">
                    <?php the_field('founder_letter_group_letter_content');?>
                    <dl class="ftr-sign">
                            <dt><?php 
    $image_url = get_field('founder_letter_group_founder_image'); 
    if ($image_url) {
    echo '<img src="' . esc_url($image_url['url']) . '" alt="' . esc_attr($image_url['alt']) . '">';
}
?></dt>
<dd><?php the_field('founder_letter_group_founder_name');?><span><?php the_field('founder_letter_group_designation');?></span>
                            </dd>
                        </dl>
                        <a href="javascript:void" data-width="1500" rel="noreferrer noopener" class="btn-theme wplightbox"><?php the_field('founder_letter_group_book_consultation_button');?></a>
                        <div class="clearfix"></div>
                </div>
                    <button class="btn_expand btn-theme expbtn"><?php the_field('founder_letter_group_button_text');?></button>
                    

                </div>
                
            </div>
            <div class="clearfix"></div>
        </div>
        
    </div>
</section>

    <?php
$award_section = get_field('award_section'); // Retrieve the 'award_section' parent group field

if ($award_section): // Check if the award section exists
    $awards_timeline = $award_section['awards_timeline']; // Get the 'awards_timeline' repeater field

    if ($awards_timeline): // Check if there are entries in the 'awards_timeline'
        ?>
        <section class="servicesection awardtimeline journey_sec scroll-view">
            <div class="wrapper">
                <div class="semititle ftsz22">Our Awards Timeline</div>
                <div class="servicecontainer journeycontainer mobilehide">
                    <div class="servicecont_left journeyyear">
                        <ul class="servicelistbox scroll-view-tabs" data-active_class="activeservice">
                            <?php 
                            // Loop through the 'awards_timeline' repeater
                            foreach ($awards_timeline as $index => $timeline): ?>
                                <li class="<?php echo $index == 0 ? 'activeservice' : ''; ?>">
                                    <div class="yeardiv">
                                        <span><?php echo esc_html($timeline['year_range']); ?></span>
                                        <p><?php echo esc_html($timeline['description']); ?></p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Right Side Award Content -->
                    <div class="servicecont_right journeycontent scroll-view-tabs-content">
                        <?php 
                        // Loop through the 'awards_timeline' for the right side content
                        foreach ($awards_timeline as $index => $timeline): ?>
                            <div class="replacecontent yearcontentchange <?php echo $index == 0 ? 'no-right-img' : ''; ?>">
                                <div class="yr_contentleft">
                                    <div class="yearbox"><?php echo esc_html($timeline['year_range']); ?></div>
                                    <div class="secsemititle">Awards from <?php echo esc_html($timeline['year_range']); ?></div>
                                    
                                    <!-- Check if there are award details in the current timeline entry -->
                                    <?php if (isset($timeline['award_details']) && !empty($timeline['award_details'])): ?>
                                        <?php foreach ($timeline['award_details'] as $award): ?>
                                            <p><?php echo esc_html($award['award_name']); ?></p>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="yr_contentrightimg atg_slider">
                                   <?php foreach ($timeline['award_slider'] as $award): ?>
                                            <?php 
                                            $award_image = $award['award_slider_image']; 
                                            // Check if the award image exists before creating the <li> element
                                            if ($award_image): ?>
                                                
                                                    <div class="atg_img">
                                                        <img src="<?php echo esc_url($award_image['url']); ?>" alt="<?php echo esc_attr($award_image['alt']); ?>">
                                                    </div>
                                               
                                            <?php endif; ?>
                                        <?php endforeach; ?> 
                                </div>


                                <!-- Awards Images -->
                                <?php if (isset($timeline['award_details']) && !empty($timeline['award_details'])): ?>
                                    <ul class="abt_awards">
                                        <?php foreach ($timeline['award_details'] as $award): ?>
                                            <?php 
                                            $award_image = $award['award_image']; 
                                            // Check if the award image exists before creating the <li> element
                                            if ($award_image): ?>
                                                <li class="awardlogobx">
                                                    <div class="awardbox">
                                                        <img src="<?php echo esc_url($award_image['url']); ?>" alt="<?php echo esc_attr($award_image['alt']); ?>">
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>

                            

                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>
        <?php
    else:
        echo 'No Awards Timeline Found';
    endif;
else:
    echo 'No Award Section Found';
endif;
?>

<div class="wrapper">
    <?php if (have_rows('award_section')): ?>
    <div class="serviceaccordioncontainer awardtimeline">
        <div class="accordion-demo smk_accordion acc_with_icon">
            <?php while (have_rows('award_section')): the_row(); ?>
                <?php if (have_rows('awards_timeline')): ?>
                    <?php while (have_rows('awards_timeline')): the_row(); ?>
                        <div class="accordion_in acc_active">
                            <!-- Year Range -->
                            <div class="acc_head">
                                <div class="acc_icon_expand"></div> 
                                <?php the_sub_field('year_range'); ?>
                            </div>

                            <!-- Content -->
                            <div class="acc_content">
                                <!-- Left Content: Award Details -->
                                <div class="yr_contentleft">
                                    <div class="secsemititle">
                                        Awards from <?php the_sub_field('year_range'); ?>
                                    </div>
                                    <?php if (have_rows('award_details')): ?>
                                        <?php while (have_rows('award_details')): the_row(); ?>
                                            <p>
                                                <?php the_sub_field('award_name'); ?>
                                            </p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>

                                <!-- Right Content: Slider -->
                                <div class="yr_contentrightimg atg_slider">
                                    <?php if (have_rows('award_slider')): ?>
                                        <?php while (have_rows('award_slider')): the_row(); ?>
                                            <?php $slider_image = get_sub_field('award_slider_image'); ?>
                                            <?php if ($slider_image): ?>
                                                <div class="atg_img">
                                                    <img src="<?php echo esc_url($slider_image['url']); ?>" 
                                                         alt="<?php echo esc_attr($slider_image['alt']); ?>" 
                                                         width="<?php echo esc_attr($slider_image['width']); ?>" 
                                                         height="<?php echo esc_attr($slider_image['height']); ?>">
                                                </div>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>

                                <div class="clearfix"></div>

                                <!-- Award Images -->
                                <ul class="hs awardcontainer1 abt_awards">
                                    <?php if (have_rows('award_details')): ?>
                                        <?php while (have_rows('award_details')): the_row(); ?>
                                            <?php $award_image = get_sub_field('award_image'); ?>
                                            <?php if ($award_image): ?>
                                                <li class="awardbox">
                                                    <div class="awardbox">
                                                        <img src="<?php echo esc_url($award_image['url']); ?>" 
                                                             alt="<?php echo esc_attr($award_image['alt']); ?>" 
                                                             width="<?php echo esc_attr($award_image['width']); ?>" 
                                                             height="<?php echo esc_attr($award_image['height']); ?>">
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>

</div>

<section class="servicesection 3 journey_sec scroll-view">
        <div class="wrapper">
          <?php $journey_section = get_field('journey_section'); 
    $journey_timeline = $journey_section['journey_timeline'];
?>
            <div class="semititle ftsz22"><?php echo esc_html($journey_section['journey_heading']); ?></div>
            <div class="servicecontainer journeycontainer mobilehide ">
                <div class="servicecont_left journeyyear">
                    <ul class="servicelistbox scroll-view-tabs" data-active_class="activeservice">

                        <?php 
                            // Loop through the 'awards_timeline' repeater
                            foreach ($journey_timeline as $index => $journey): ?>
                                <li class="<?php echo $index == 0 ? 'activeservice' : ''; ?>">
                                    <div class="yeardiv">
                                        <span><?php echo esc_html($journey['journey_year_range']); ?></span>
                                        <p><?php echo esc_html($journey['journey_description']); ?></p>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                                                </ul>
                                            </div>

                              <!-- Right Side Award Content -->
                    <div class="servicecont_right journeycontent scroll-view-tabs-content">
                        <?php 
                        // Loop through the 'awards_timeline' for the right side content
                        foreach ($journey_timeline as $index => $journey): ?>
                            <div class="replacecontent yearcontentchange">
                                <div class="yr_contentleft">
                                    <div class="yearbox"><?php echo esc_html($journey['journey_year_range']); ?></div>
                                    <?php if (isset($journey['journey_details']) && !empty($journey['journey_details'])): ?>
                                        <?php foreach ($journey['journey_details'] as $part): ?>
                                        
                                    <div class="secsemititle"><?php echo esc_html($part['journey_title']); ?></div>
                                    <p><?php echo esc_html($part['journey_subtitle']); ?></p>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                    <ul class="contlistul">
                                    <!-- Check if there are award details in the current timeline entry -->
                                    <?php if (isset($journey['journey_summary']) && !empty($journey['journey_summary'])): ?>
                                        <?php foreach ($journey['journey_summary'] as $part): ?>
                                            <li><?php echo esc_html($part['journey_summary_years']); ?></li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                                </div>

                                <!-- Awards Images -->
                               
                                    <div class="yr_contentrightimg">
                                        <?php if (isset($journey['journey_details']) && !empty($journey['journey_details'])): ?>
                                       <?php foreach ($journey['journey_details'] as $part): ?>
                                            <?php 
                                            $journey_image = $part['journey_image']; 
                                         ?>
                                                        <img src="<?php echo esc_url($journey_image['url']); ?>" alt="<?php echo esc_attr($journey_image['alt']); ?>">
                                               
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                
                            </div>

                            

                        <?php endforeach; ?>
                    </div>

                </div>
                <div class="clearfix"></div>
</div>
</section>

<div class="wrapper">
    <?php if (have_rows('journey_section')): ?>
    <div class="serviceaccordioncontainer awardtimeline">
        <div class="accordion-demo smk_accordion acc_with_icon">
            <?php while (have_rows('journey_section')): the_row(); ?>
                <?php if (have_rows('journey_timeline')): ?>
                    <?php while (have_rows('journey_timeline')): the_row(); ?>
                        <div class="accordion_in acc_active">
                            <!-- Year Range -->
                            <div class="acc_head">
                                <div class="acc_icon_expand"></div> 
                                <?php the_sub_field('journey_year_range'); ?>
                            </div>

                            <!-- Content -->
                            <div class="acc_content">
                                <!-- Left Content: Award Details -->
                                <div class="yr_contentleft">
                                    <div class="secsemititle">
                                <?php if (have_rows('journey_details')): ?>
                                        <?php while (have_rows('journey_details')): the_row(); ?>
                                            
                                                <?php the_sub_field('journey_title'); ?>
                                            </div>
                                            <p><?php the_sub_field('journey_subtitle'); ?></p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <ul class="contlistul">
                                       <?php if (have_rows('journey_summary')): ?>
                                        <?php while (have_rows('journey_summary')): the_row(); ?>
                                            <li>
                                                <?php the_sub_field('journey_summary_years'); ?>
                                          </li>
                                           
                                        <?php endwhile; ?>
                                    <?php endif; ?> 
                                    </ul>

                                </div>

                                <!-- Right Content: Slider -->
                                <div class="yr_contentrightimg">
                                    <?php if (have_rows('journey_details')): ?>
                                        <?php while (have_rows('journey_details')): the_row(); ?>
                                            <?php $slider_image = get_sub_field('journey_image'); ?>
                                            <?php if ($slider_image): ?>
                                                
                                                    <img src="<?php echo esc_url($slider_image['url']); ?>" 
                                                         alt="<?php echo esc_attr($slider_image['alt']); ?>" 
                                                         width="<?php echo esc_attr($slider_image['width']); ?>" 
                                                         height="<?php echo esc_attr($slider_image['height']); ?>">
                                                
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>

                                <div class="clearfix"></div>

                                <!-- Award Images -->
                                <ul class="hs awardcontainer1 abt_awards">
                                    <?php if (have_rows('award_details')): ?>
                                        <?php while (have_rows('award_details')): the_row(); ?>
                                            <?php $award_image = get_sub_field('award_image'); ?>
                                            <?php if ($award_image): ?>
                                                <li class="awardbox">
                                                    <div class="awardbox">
                                                        <img src="<?php echo esc_url($award_image['url']); ?>" 
                                                             alt="<?php echo esc_attr($award_image['alt']); ?>" 
                                                             width="<?php echo esc_attr($award_image['width']); ?>" 
                                                             height="<?php echo esc_attr($award_image['height']); ?>">
                                                    </div>
                                                </li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>

</div>

<?php 
$vision_section = get_field('vision_section'); // Fetch the parent group field

?>
<div class="visionsec">
    <div class="wrapper"></div>
    <div class="visionsection">
        <div class="wrapper">
            <div class="visionwrapper">
                <div class="visiondivcontainerslider">
                    <div class="service_box">
                        <h3><?php the_field('vision_section_vision_section_heading');?></h3>
                        
                        <div class="semititle ftsz22"><?php the_field('vision_section_vision_subheading');?></div>
                        <div class="sec_absolutetxt ptag">
                        </div>
                            <p><?php the_field('vision_section_vision_textarea');?></p>
                        </div>
                    
                    <?php  if ($vision_section && isset($vision_section['vision_repitive_section']) && !empty($vision_section['vision_repitive_section'])): 
                    foreach ($vision_section['vision_repitive_section'] as $value): ?>
                    <a href="javascript:void(0);" class="servicebx">
                        <dl>
                            <dt>
                                <?php 
                                $icon = $value['repitive_section_image']; // Subfield 'icon'
                                         ?>
                                                        <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                            </dt>
                            <dd><span><?php echo esc_html($value['repitive_section_heading']); ?></span></dd>
                        </dl>
                        <div class="serviceinfobx">
                            <ul>
                                <?php if (!empty($value['points'])): ?>
                                    <?php foreach ($value['points'] as $point): ?>
                                        <li><?php echo esc_html($point['point']); ?></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </a>
                    <?php endforeach; ?>
<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
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
            <div class="semititle"><?php the_field('award_group_award_text'); ?></div>
            <div class="container">
              <div class="hs__wrapper">
                <ul class="hs awardcontainer">

                    <?php

                     if (have_rows('award_group_award_image')): 
                while (have_rows('award_group_award_image')): the_row(); ?>
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
</main>
<?php get_footer();
?>
