<?php
/* Template Name: Banner Page */
get_header();
$author_id = get_the_author_meta('ID');
$author_image = get_field('author_image', 'user_'. $author_id); 

?>
<main>
<section class="hm_banner">
    <div class="sitegradient"></div>
    <div class="wrapper">
        <!-- Banner Left Content -->
        <div class="bannerleft_content">
            <div class="bannertitle">
                <p><?php the_field('subheading'); ?></p>
                <h1><?php the_field('main_heading'); ?></h1>
                <?php the_field('main-subheading'); ?>
                <p><?php the_field('description'); ?></p>
            </div>
            <?php if (have_rows('agencyimage')): ?>
    <div class="batches">
        <?php while (have_rows('agencyimage')): the_row();
            // Get the image subfield
            $image = get_sub_field('image1'); // Replace 'image1' with your actual image subfield name

            // If image exists, get its URL and alt text
            if (!empty($image)) {
                $image_url = $image['url'];
                $image_alt = !empty($image['alt']) ? $image['alt'] : 'no image found'; // Default alt text
            }
        ?>
            <div class="batch_cell">
                <div class="img_box">
                    <?php if (!empty($image_url)): ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" />
                    <?php endif; ?>
                </div>
                <?php $image_text = get_sub_field('image_text');?>
                <div class="img_text"><?php echo esc_html($image_text) ;?></div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

            <div class="buttonbardiv">

                <button type="button" class="btn-theme headproposal open-modal-btn" id="openTypeform" 
        data-url="https://form.typeform.com/to/IiODHhup?typeform-embed-id=5245186993312996&typeform-embed=popup-blank&typeform-source=anseoagency.com&typeform-medium=snippet&typeform-medium-version=next&typeform-embed-handles-redirect=1">
    <?php the_field('button_text'); ?>
</button>
<button id="closeTypeform" class="close-btn" style="display: none;">&times;</button>


            </div>
        </div>




        <!-- Banner Right Content -->
        <div class="banner_right-content">
    <?php if (have_rows('videos')): 
        $video_count = 0; // To keep track of the video position
        $column_videos = [2, 3, 2]; // Number of videos in each column
        $current_column = 0; // Track current column
        $videos_in_column = 0; // Videos added to the current column
        $data_delay = 1200; // Initial AOS delay
    ?>

        <!-- Start the first column -->
        <div class="column aos-init aos-animate" 
            data-aos="fade" 
            data-aos-easing="ease" 
            data-aos-duration="300" 
            data-aos-delay="<?php echo $data_delay + ($current_column * 200); ?>">

        <?php while (have_rows('videos')): the_row(); 
            $video = get_sub_field('video_url');
            $video_url = !empty($video) ? $video['url'] : '';
            $title = get_sub_field('video_title');

            // Check if the column has reached its limit
            if ($videos_in_column >= $column_videos[$current_column]): 
                $current_column++; // Move to the next column
                $videos_in_column = 0; // Reset video count for the column
        ?>
                </div> <!-- Close the current column -->
                
                <!-- Start a new column -->
                <div class="column aos-init aos-animate" 
                    data-aos="fade" 
                    data-aos-easing="ease" 
                    data-aos-duration="300" 
                    data-aos-delay="<?php echo $data_delay + ($current_column * 200); ?>">
        <?php endif; ?>

            <!-- Video Item -->
            <div class="item">
                <?php if (!empty($video_url)): ?>
                    <video playsinline autoplay muted loop disablepictureinpicture controlslist="nodownload">
                        <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                    </video>
                <?php endif; ?>
                <?php if (!empty($title)): ?>
                    <span class="title-gif"><?php echo esc_html($title); ?></span>
                <?php endif; ?>
            </div>

        <?php 
            $videos_in_column++; // Increment the video count in the current column
            $video_count++;
        endwhile; ?>

        <!-- Close the last open column -->
        </div>
    <?php endif; ?>
</div>


    </div>
</section>

<section class="featuredin_sec mobilehide">
    <div class="wrapper1">
        <div class="sectiontitle"><?php the_field('banner-below-heading'); ?></div>
    
    <div class="container1">
        <div class="hs__wrapper1">
              <!-- <div class="swiper marquee-slider"> -->
                <?php if (have_rows('banner-below-images')): ?>
                <div class="text-marquee">
                    <ul class="hm_featuredinslider1 text-single" id="scroller1">
                    <?php while (have_rows('banner-below-images')): the_row();
            // Get the image subfield
            $image = get_sub_field('banner-below-slider'); // Replace 'image1' with your actual image subfield name

            // If image exists, get its URL and alt text
            if (!empty($image)) {
                $image_url = $image['url'];
                $image_alt = !empty($image['alt']) ? $image['alt'] : 'no image found'; // Default alt text
            }
        ?>
                     <li class="text js-text"> <?php if (!empty($image_url)): ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>"  />
                    <?php endif; ?></li>
                     <?php endwhile; ?>
                     </ul>
                </div>
                 <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- </div> -->
</section>


<section class="servicesection margin-100px scroll-view" id="seoservices_sec">
    <div class="sitegradient"></div>
    <div class="wrapper">
        <!-- Section Title -->
        <h3><?php the_field('section_title'); ?></h3>
        <div class="main-seoinsight">
        <div class="semititle"><?php the_field('section_description'); ?></div>
        <div class="sec_absolutetxt"><?php the_field('section_absolute_text'); ?></div>
        </div>
        <div class="servicecontainer mobilehide" data-x="0" data-activeservice="1">
            <div class="servicecont_left">
                <ul class="servicelistbox scroll-view-tabs" data-active_class="activeservice">
                    <?php 
                    $service_index = 1;
                    while (have_rows('section_replace')): the_row(); 
                        $service_number = get_sub_field('service_number');
                        $service_name = get_sub_field('service_name');
                        $service_description = get_sub_field('service_description');
                    ?>
                        <li class="activeservicetrafficgeneration activeservice">
                            <span><?php echo esc_html($service_number); ?></span>
                            <div class="servicename"><?php echo esc_html($service_name); ?></div>
                            <div class="servicetxt ptag">
                                <?php echo wpautop($service_description); ?>
                            </div>
                        </li>
                    <?php 
                        $service_index++;
                    endwhile; 
                    ?>
                </ul>
            </div>

            <div class="servicecont_right scroll-view-tabs-content">
                <?php while (have_rows('section_replace')): the_row(); 
                    $service_name = get_sub_field('service_name');
                    $service_description = get_sub_field('service_description');
                    $service_subtitle = get_sub_field('service-subtitle');
                    $service_semi_description = get_sub_field('service-semi-desc');
                ?>
                <div class="replacecontent">
                    <div class="servicetitle"><?php echo esc_html($service_name); ?></div>
                    <p><strong><?php echo esc_html($service_subtitle); ?></strong></p>
                    <p><?php echo wp_kses_post( $service_semi_description ); ?></p>
                    <div class="container">
                        <div class="hs__wrapper">
                            <ul class="hs servicesub_cont">
                                <?php if (have_rows('service_links')): 
                                    while (have_rows('service_links')): the_row(); 
                                        $link_url = get_sub_field('service_link_url');
                                        $link_icon = get_sub_field('service_link_icon');
                                        $link_title = get_sub_field('service_link_title');
                                        $hover_text = get_sub_field('service_hover_text');
                                ?>
                                    <li class="hs__item datahover" data-note="<?php echo esc_attr($hover_text); ?>">
                                        <a href="javascript:void" class="servicesubbox tilt">
                                            <span class="sicon">
                                                <img src="<?php echo esc_url($link_icon['url']); ?>" alt="<?php echo esc_attr($link_title); ?>">
                                            </span>
                                            <span class="sicontitle"><?php echo esc_html($link_title); ?></span>
                                        </a>
                                    </li>
                                <?php endwhile; endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="servicenote"></div>
                     <div class="clearfix"></div>
                </div>
                <?php endwhile; ?>
            </div>
            
       
        </div>
        <?php if (have_rows('section_replace')) : ?>
<div class="serviceaccordioncontainer">
  <div class="accordion-demo">
    <?php while (have_rows('section_replace')) : the_row(); ?>
      <div class="accordion_in acc_active">
        <div class="acc_head">
          <span><?php the_sub_field('service_number'); ?></span>
          <?php the_sub_field('service_name'); ?>
        </div>
        <div class="acc_content">
          <ul class="servicesub_cont flex-container wrap">
            <?php if (have_rows('service_links')) : ?>
              <?php while (have_rows('service_links')) : the_row(); 
                $link_icon = get_sub_field('service_link_icon');
                ?>
                <li class="hs__item">
                  <a href="<?php the_sub_field('service_link_url'); ?>" class="servicesubbox tilt">
                    <span class="sicon">
                      <img src="<?php echo esc_url($link_icon['url']); ?>" alt="<?php the_sub_field('service_link_title'); ?>" decoding="async" />
                    </span>
                    <span class="sicontitle"><?php the_sub_field('service_link_title'); ?></span>
                  </a>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>
<?php endif; ?>
    </div>
<div class="clearfix"></div>



</section>

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

 <section class="plans_brief trustedbusiness">
        <div class="blocktitle"><?php the_field('service_title'); ?></div>
        <div class="wrapper">
          <div class="plans_wrapper">
            <?php if (have_rows('services')): 
                while (have_rows('services')): the_row(); ?>

            <div class="wrap_card">
              <div class="img_box_wid_title">
                <?php
            // Get the image subfield
            $image = get_sub_field('service_image'); // Replace 'image1' with your actual image subfield name

            // If image exists, get its URL and alt text
            if (!empty($image)) {
                $image_url = $image['url'];
                $image_alt = !empty($image['alt']) ? $image['alt'] : 'no image found'; // Default alt text
            }
        ?>
                <div class="img_box">
                <?php if (!empty($image_url)): ?>
                        <img src="<?php echo esc_url($image_url); ?>"  />
                    <?php endif; ?> 
                </div>
                <?php $service_text = get_sub_field('service_text');?>
                <?php $service_span_text = get_sub_field('service_span_text');?>
<h3 class="title"><?php echo esc_html($service_text); ?><span><?php echo esc_html($service_span_text); ?></span></h3>
            </div>
            <div class="price_break_box">
                <p>Starting From</p>
               <?php
$service_price_raw = get_sub_field('service_price'); // Get ACF price (e.g., "$250")
$service_price = (float) preg_replace('/[^0-9.]/', '', $service_price_raw); // Remove $ sign and convert to float

// Get User Country from IP
$ip = $_SERVER['REMOTE_ADDR'];
$geoData = @json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));

$country = $geoData->country ?? 'Unknown'; // Default to 'Unknown' if API fails

// Set currency based on country
if ($country == 'India') {
    $currency_symbol = '₹';

    // Fetch Live USD to INR Conversion Rate
    $api_url = "https://api.exchangerate-api.com/v4/latest/USD";
    $response = @file_get_contents($api_url);
    
    if ($response) {
        $exchange_data = json_decode($response, true);
        $conversion_rate = $exchange_data['rates']['INR'] ?? 83; // Default to 83 if API fails
    } else {
        $conversion_rate = 83; // Fallback rate if API request fails
    }

    // Convert USD to INR
    $service_price = $service_price * $conversion_rate;
} else {
    $currency_symbol = '$';
}

// Ensure service price is valid before displaying
if ($service_price > 0) {
    echo '<h2>' . esc_html($currency_symbol . number_format($service_price, 2)) . '<span>/month</span></h2>';
} else {
    echo '<h2>Price Not Available</h2>'; // Handle empty or invalid price
}
?>


            </div>
            
         <div class="btn_wrapper">
    <?php if (have_rows('button')): 
        while (have_rows('button')): the_row(); 
            $button_text = get_sub_field('button_text');
            $contact_us_url = get_sub_field('contact_us_url');
            $contact_us_mobile_url = get_sub_field('contact_us_mobile_url');

            // Detect if the user is on mobile
            $is_mobile = wp_is_mobile();

            // Set the appropriate URL based on the device
            $final_url = $is_mobile ? $contact_us_mobile_url : $contact_us_url;
    ?>
            <a href="<?php echo esc_url($final_url); ?>" target="_blank" class="chaty-tooltip Whatsapp-channel chaty-link chaty-whatsapp-channel pos-left" data-form="chaty-form-0-Whatsapp">
                <?php echo esc_html($button_text); ?>
            </a>
    <?php endwhile; endif; ?>
</div>

                
        </div>
        <?php endwhile; endif; ?>
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
            AN SEO AGENCY uses multiple positive testimonials to design a customized strategy to help you reach your online promotion objectives.
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

<section class="getintouch_sec">
        <div class="seocontent secondcontent">
          <div class="sitegradient"></div>
          <div class="wrapper flex-container wrap">
            <div class="seocontent_imgdiv">
             <?php if (have_rows('image_columns')) : ?>
    <div class="imgcollage">
        <?php while (have_rows('image_columns')) : the_row(); ?>
            <div class="imagecolumn">
                <?php if (have_rows('column_images')) : ?>
                    <?php while (have_rows('column_images')) : the_row(); ?>
                        <?php
                        $image = get_sub_field('image');
                        if ($image) :
                        ?>
                            <img 
                                src="<?php echo esc_url($image['url']); ?>" 
                                alt="<?php echo esc_attr($image['alt']); ?>" 
                                width="330" 
                                height="auto"
                            />
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
                </div>
            
   <div class="seocontent_txt ptag">
      <h2> <?php the_field('digital_heading'); ?></h2>
      <?php the_field('content_paragraphs'); ?>
   </div>
   <div class="clearfix"></div>
   </div>
        </div>
</section>

<section class="seocontent firstcontent">
        <div class="wrapper flex-container wrap">
          <div class="seocontent_imgdiv">
            <?php if (have_rows('image_columns_two')) : ?>
            <div class="imgcollage">
               <?php while (have_rows('image_columns_two')) : the_row(); ?>
            <div class="imagecolumn">
                <?php if (have_rows('column_images_two')) : ?>
                    <?php while (have_rows('column_images_two')) : the_row(); ?>
                        <?php
                        $image = get_sub_field('image_two');
                        if ($image) :
                        ?>
                            <img 
                                src="<?php echo esc_url($image['url']); ?>" 
                                alt="<?php echo esc_attr($image['alt']); ?>" 
                                width="330" 
                                height="auto"
                            />
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
              </div>
              <?php endif; ?>
          </div>
    <div class="seocontent_txt ptag">
      <h2> <?php the_field('digital_heading_two'); ?></h2>
      <?php the_field('content_paragraphs_two'); ?>
   </div>
   <div class="clearfix"></div>
   </div>
        </div>
</section>

<section class="blogdtl_sec blogdtlmodify hm_blg_sec" id="home_latest_blogs">
    <div class="wrapper">
        <div class="relatedarticle_container blddtlpgrelated">
            <div class="semititle">Latest Blogs</div>
            <div class="blog_sec relarti_container">
                <?php
                // Fetch latest blog posts
                $args = array(
                    'post_type' => 'POST',
                    'posts_per_page' => 3, // Adjust number of posts
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="articlebox">
                            <div class="articleimg">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', array('class' => 'wp-post-image')); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/default.jpg" alt="<?php the_title(); ?>" />
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="article_middle">
                                <div class="articletype">
                                    <?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) :
                                        foreach ($categories as $category) : ?>
                                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
                                                <?php echo esc_html($category->name); ?>
                                            </a>
                                        <?php endforeach;
                                    endif; ?>
                                </div>
                                <div class="articlename">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                <div class="articleby">
                                    <?php /* <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> */ ?>
                                        <p><span>
                                           <img 
												src="<?php echo $author_image ?>" 
												alt="<?php the_author(); ?>" 
												class="useravtar">
                                        </span>
                                        By <?php the_author(); ?></p>
                                    <!-- </a> -->
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else : ?>
                    <p>No blogs found.</p>
                <?php endif;

                wp_reset_postdata();
                ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
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
            <a href="https://www.linkedin.com/company/an-seo-agency" target="_blank" rel="noreferrer noopener" class="sociallinkbtn linkedinbtn">
                <dl>
                    <dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin-btn-icon.svg" alt="Linkedin"></dt>
                    <dd>Follow us on <span>Linkedin</span></dd>
                </dl>
            </a>
            <a href="https://www.facebook.com/official.anseoagency" target="_blank" rel="noreferrer noopener" class="sociallinkbtn fbbtn">
                <dl>
                    <dt><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fb-btn-icon.svg" alt="facebook"></dt>
                    <dd>Follow us on <span>Facebook</span></dd>
                </dl>
            </a>
        </div>
    </div>
</section>

 <section class="contact_form_sec trustedbusiness">
    <div class="contact_form">
        <div>
<?php echo do_shortcode('[contact-form-7 id="967ac4a" title="Front-page-contact"]');?>
</div>
</div>
 <div class="clearfix"></div>
 </section>
 
</main>
<?php get_footer();