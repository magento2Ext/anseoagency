<?php

/* Template Name: Industries Seo Template */



get_header(); ?>

<main class="industries-seo-template">

   <section class="inr_banner flex_banner">

      <div class="sitegradient inrsitegradient"></div>

      <div class="wrapper">

         <div class="inrbnr_left">

            <div class="alignitem">

               <?php generate_breadcrumbs(); ?>

               <h1><?php the_field('banner_group_banner_heading'); ?></h1>

               <div class="inrbnr_txt"><?php the_field('banner_group_banner_subheading'); ?></div>

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

               <?php while (have_rows('tabs_group_lawyer_tabs')): the_row();

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

                  <?php while (have_rows('tabs_group_lawyer_tabs')): the_row();

                     // Retrieve subfields



                     $tab_text = get_sub_field('tabs_text');



                     $tab_link = get_sub_field('tab_link'); // Text field, allows #id



                  ?>

                     <a href="<?php echo esc_attr($tab_link); ?>"><?php echo esc_html($tab_text); ?></a>

                  <?php endwhile; ?>

               </div>

            </div>

         </div>

      </div>

   </section>

   <section class="seocontent_sec seo-service-inn-main " id="seoservices_sec">

      <div class="wrapper">

         <div class="servicecontent_div maketopspacing">

            <div class="serviceimgbx fleft">

               <?php

               $image = get_field('lawyer_services_group_lawyer_services_image');



               if ($image) {



                  echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
               }



               ?>

            </div>

            <div class="servicecontentbx fright ptag">

               <?php the_field('lawyer_services_group_lawyer_services_content'); ?>

            </div>

         </div>

      </div>

   </section>

   <div class="dividerline">

      <hr>

   </div>

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

                     <p><?php echo esc_html(strip_tags($service_semi_description)); ?></p>

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

                                       <a href="<?php echo esc_url($link_url); ?>" class="servicesubbox tilt">

                                          <span class="sicon">

                                             <img src="<?php echo esc_url($link_icon['url']); ?>" alt="<?php echo esc_attr($link_title); ?>">

                                          </span>

                                          <span class="sicontitle"><?php echo esc_html($link_title); ?></span>

                                       </a>

                                    </li>

                              <?php endwhile;

                              endif; ?>

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

   <div class="dividerline">

      <hr>

   </div>

   <section class="seocontent_sec  seo-digital-main" id="seoservices_sec">

      <div class="wrapper">

         <div class="servicecontent_div">

            <div class="servicecontentbx fleft ptag">

               <?php the_field('digital_marketing_lawyers_lawyer_digital_marketing_content'); ?>

            </div>

            <div class="serviceimgbx fright">

               <?php

               $image = get_field('digital_marketing_lawyers_lawyer_digital_marketing_image');



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

   <section class="seocasestudy_sec mobilehide margin-100px slider_hidden" id="seo_casestudy">

      <div class="wrapper" bis_skin_checked="1">

         <h3><?php the_field('case_studies_case_study_heading','option'); ?></h3>

         <div class="main-seoinsight">

            <div class="semititle" bis_skin_checked="1"><?php the_field('case_studies_case_study_subheading','option'); ?></div>

            <div class="sec_absolutetxt" bis_skin_checked="1"><?php the_field('case_studies_case_study_subcontent','option'); ?></div>

         </div>

         <div class="clearfix" bis_skin_checked="1"></div>

      </div>

      <div class="container casestudy_container" style="width:100%; margin:0" bis_skin_checked="1">

         <div class="casestudycontainer" bis_skin_checked="1">

            <div class="casestudyslide regular slider" bis_skin_checked="1">

               <?php while (have_rows('case_studies_case_study_images','option')) : the_row();

                  $user_image = get_sub_field('case_study_image');



                  $user_text = get_sub_field('case_study_text');



               ?>

                  <div class="storybx" bis_skin_checked="1" data-slick-index="0" aria-hidden="true" style="width: 283px;" tabindex="-1">

                     <a href="javascript:void;" class="wplightbox">

                        <img src="<?php echo esc_url($user_image['url']); ?>" alt="<?php echo esc_html($user_text); ?>">

                     </a>

                     <div class="casestudyname" bis_skin_checked="1"><?php echo esc_html($user_text); ?></div>

                  </div>

               <?php endwhile; ?>

            </div>

         </div>

      </div>

      <!-- case study section end -->
      
   </section>
<?php if (get_field('why_lawyer_seo_services_why_lawyer_heading')): ?>
   
   <section class="seocontent_sec advantages-seo-main " id="seoservices_sec">

      <div class="wrapper">

         <div class="servicecontent_div maketopspacing service-strategy">

            <div class="serviceimgbx fleft account-fleft">

               <?php

               $image = get_field('why_lawyer_seo_services_why_lawyer_image');



               if ($image) {



                  echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
               }



               ?>

            </div>

            <div class="servicecontentbx fright ptag">

               <h2><?php the_field('why_lawyer_seo_services_why_lawyer_heading'); ?></h2>

               <?php the_field('why_lawyer_seo_services_why_lawyer_content'); ?>

            </div>

         </div>

      </div>

   </section>
<?php endif;?>

   <?php if (get_field('trusted_title')): ?>

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

                              <img src="<?php echo esc_url($image_url); ?>" />

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

                              <img src="<?php echo esc_url($image_url); ?>" />

                           <?php endif; ?>

                        </p>

                     <?php endwhile; ?>

                  </div>

               <?php endif; ?>

            </div>

         </section>

      </section>

   <?php endif; ?>

   <?php if (get_field('feature_lawyer_group_feature_lawyer_heading')): ?>

      <div class="dividerline">
         <hr>
      </div>

      <section class="seocontent_sec  key-seo-main" id="seoservices_sec">

         <div class="wrapper">

            <div class="servicecontent_div">

               <div class="servicecontentbx fleft ptag">

                  <h2><?php the_field('feature_lawyer_group_feature_lawyer_heading'); ?></h2>

                  <?php the_field('feature_lawyer_group_feature_lawyer_content'); ?>

               </div>

               <div class="serviceimgbx fright">

                  <?php

                  $image = get_field('feature_lawyer_group_feature_lawyer_image');



                  if ($image) {



                     echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                  }



                  ?>

               </div>

            </div>

         </div>

      </section>

   <?php endif; ?>

   <section class="seoteam_sec margin-100px online-success-main" id="seoteam">

      <!-- <div class="sitegradient"></div> -->

      <div class="wrapper">

         <h3><?php the_field('team_leads_group_team_lead_heading'); ?></h3>

         <div class="main-seoinsight">

            <div class="semititle ftsz22"><?php the_field('team_leads_group_team_lead_subheading'); ?></div>

            <div class="sec_absolutetxt"><?php the_field('team_leads_group_team_lead_content'); ?></div>

         </div>

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

   <div class="dividerline">

      <hr>

   </div>

   <?php

   $heading = get_field('get_lawyer_services_get_lawyer_services_heading');

   $content = get_field('get_lawyer_services_get_lawyer_services_content');

   $image = get_field('get_lawyer_services_get_lawyer_image');



   if ($heading || $content || $image) :
        if(is_page(3507)):
            ?>
            <section class="seocontent_sec effective-seo-main" id="seoservices_sec">

<div class="wrapper">

   <div class="servicecontent_div maketopspacing service-strategy">

      <?php if ($heading || $content) : ?>

         <div class="servicecontentbx fleft ptag">

            <?php if ($heading) : ?>

               <h2><?php echo esc_html($heading); ?></h2>

            <?php endif; ?>

            <?php if ($content) : ?>

               <?php echo $content; ?>

            <?php endif; ?>

         </div>

      <?php endif; ?>

      <?php if ($image) : ?>

<div class="serviceimgbx fright account-fleft">

   <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

</div>

<?php endif; ?>
   </div>

</div>

</section>
            <?php
        else: 
   ?>

      <section class="seocontent_sec effective-seo-main" id="seoservices_sec">

         <div class="wrapper">

            <div class="servicecontent_div maketopspacing service-strategy">

               <?php if ($image) : ?>

                  <div class="serviceimgbx fleft account-fleft">

                     <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

                  </div>

               <?php endif; ?>



               <?php if ($heading || $content) : ?>

                  <div class="servicecontentbx fright ptag">

                     <?php if ($heading) : ?>

                        <h2><?php echo esc_html($heading); ?></h2>

                     <?php endif; ?>

                     <?php if ($content) : ?>

                        <?php echo $content; ?>

                     <?php endif; ?>

                  </div>

               <?php endif; ?>

            </div>

         </div>

      </section>

   <?php endif;
    endif;
   ?>



   <?php if ($heading || $content || $image) : ?>

      <div class="dividerline">

         <hr>

      </div>

   <?php endif; ?>


<?php if(is_page(3507)): ?>

    <section class="seocontent_sec immigration-main-seo " id="seoservices_sec">

<div class="wrapper">

   <div class="servicecontent_div maketopspacing service-strategy">

      <div class="servicecontentbx fright ptag">

         <h2><?php the_field('tips_lawyer_group_tips_lawyer_heading'); ?></h2>

         <?php the_field('tips_lawyer_group_tips_lawyer_content'); ?>

      </div>



      <div class="serviceimgbx fleft">

         <?php

         $image = get_field('tips_lawyer_group_tips_lawyer_image');



         if ($image) {



            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
         }



         ?>

      </div>

   </div>

</div>

</section>

    <?php else: ?>
   <section class="seocontent_sec immigration-main-seo " id="seoservices_sec">

      <div class="wrapper">

         <div class="servicecontent_div maketopspacing service-strategy">

            <div class="servicecontentbx fleft ptag">

               <h2><?php the_field('tips_lawyer_group_tips_lawyer_heading'); ?></h2>

               <?php the_field('tips_lawyer_group_tips_lawyer_content'); ?>

            </div>



            <div class="serviceimgbx fright">

               <?php

               $image = get_field('tips_lawyer_group_tips_lawyer_image');



               if ($image) {



                  echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
               }



               ?>

            </div>

         </div>

      </div>

   </section>
<?php endif;?>

   <?php if (get_field('5_effective_seo_hotels_heading')) { ?>
   
   <section class="seocontent_sec  key-seo-main-inn" id="seoservices_sec">

         <div class="wrapper">

            <div class="servicecontent_div">

               <div class="servicecontentbx fright ptag">

                  <h2><?php the_field('5_effective_seo_hotels_heading'); ?></h2>

                  <?php the_field('5_effective_hotel_content'); ?>

               </div>

               <div class="serviceimgbx fleft">

                  <?php

                  $image = get_field('5_effective_hotel_image');



                  if ($image) {



                     echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                  }



                  ?>

               </div>

            </div>

         </div>

      </section>
 
   <?php } ?>

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

                                 title="" />

                           </dd>

                        </dl>

                     </div>

                     <hr />

                     <?php if (have_rows('review_section_review','option')) : ?>

                        <div class="reviewlistcontainer reviewdesktop">

                           <?php while (have_rows('review_section_review','option')) : the_row();

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

                              <?php while (have_rows('review_section_review','option')) : the_row();

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

                                             <span><img src="<?php echo esc_url($star_image['url']); ?>" alt="Review Star" /><?php echo esc_html($time_period); ?></span>

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

               <?php if (have_rows('review_section_right_review_image','option')) : ?>

                  <div class="imgcollage">

                     <div class="imagecolumn">

                        <?php

                        $count = 0; // To track column division



                        while (have_rows('review_section_right_review_image','option')) : the_row();



                           $image = get_sub_field('images'); // Get the image subfield



                           if ($image) :



                        ?>

                              <img

                                 src="<?php echo esc_url($image['url']); ?>"

                                 alt="<?php echo esc_attr($image['alt']); ?>"

                                 decoding="async">

                        <?php

                           endif;



                           $count++;







                           // Close and reopen columns every two images



                           if ($count % 2 == 0) :



                              echo '</div><div class="imagecolumn">';



                           endif;



                        endwhile;



                        ?>

                     </div>

                     <!-- Close last column -->

                  </div>

                  <!-- Close imgcollage -->

               <?php endif; ?>

            </div>

         </div>

      </div>

   </section>

   <div class="dividerline">

      <hr>

   </div>

   <?php

   $heading = get_field('lawyer_seo_agency_group_lawyer_seo_agency_heading');

   $content = get_field('lawyer_seo_agency_group_lawyer_seo_agency_content');

   $image = get_field('lawyer_seo_agency_group_lawyer_seo_agency_image');



   if ($heading || $content || $image) :

   ?>
   <section class="seoservices_sec margin-100px SEO-Agency-Main-aside">

         <div class="wrapper">

            <div class="serviceseo_container">

               <?php if ($image) : ?>

                  <div class="serviceimgbx fright">

                     <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

                  </div>

               <?php endif; ?>



               <?php if ($heading || $content) : ?>

                  <div class="servicecontentbx fleft ptag">

                     <?php if ($heading) : ?>

                        <h2 class="sectiontitle"><?php echo esc_html($heading); ?></h2>

                     <?php endif; ?>

                     <?php if ($content) : ?>

                        <?php echo $content; ?>

                     <?php endif; ?>

                  </div>

               <?php endif; ?>

            </div>

         </div>

      </section>


   <?php endif; ?>



   <?php if ($heading || $content || $image) : ?>

      <div class="dividerline">
         <hr>
      </div>

   <?php endif; ?>





   <?php

   $title = get_field('best_choice_wedding_business_title');

   $content = get_field('best_choice_wedding_business_content');

   $image = get_field('best_choice_wedding_image');



   if ($title || $content || $image) :

   ?>

      <section class="seoservices_sec margin-100px travel-agency">

         <div class="wrapper">

            <div class="serviceseo_container">

               <?php if ($image) : ?>

                  <div class="serviceimgbx fleft">

                     <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

                  </div>

               <?php endif; ?>



               <?php if ($title || $content) : ?>

                  <div class="servicecontentbx fright ptag">

                     <?php if ($title) : ?>

                        <h2 class="sectiontitle"><?php echo esc_html($title); ?></h2>

                     <?php endif; ?>

                     <?php if ($content) : ?>

                        <?php echo $content; ?>

                     <?php endif; ?>

                  </div>

               <?php endif; ?>



               <div class="clearfix"></div>

            </div>

         </div>

      </section>

   <?php endif; ?>





   <?php

   $heading = get_field('most_searched_keywords_heading');

   $content = get_field('most_searched_keywords__content');

   $image = get_field('most_searched_keywords_image');



   if ($heading || $content || $image) :

   ?>

      <section class="seocontent_sec searched-keyword" id="seoservices_sec">

         <div class="wrapper">

            <div class="servicecontent_div">

               <?php if ($heading || $content) : ?>

                  <div class="servicecontentbx fleft ptag">

                     <?php if ($heading) : ?>

                        <h2><?php echo esc_html($heading); ?></h2>

                     <?php endif; ?>

                     <?php if ($content) : ?>

                        <?php echo $content; ?>

                     <?php endif; ?>

                  </div>

               <?php endif; ?>



               <?php if ($image) : ?>

                  <div class="serviceimgbx fright">

                     <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">

                  </div>

               <?php endif; ?>

            </div>

         </div>

      </section>

   <?php endif; ?>



   <?php

   $Faq_Heading = get_field('faq_heading');

   $Faqs = get_field('faqs');



   if ($Faq_Heading || !empty($Faqs)) :

   ?>

      <section class="accordion-section seo_indust_immigrate">

         <div class="wrapper">

            <div class="faq-main">

               <?php if ($Faq_Heading) : ?>

                  <div class="faq-heading">

                     <h2><?php echo esc_html($Faq_Heading); ?></h2>

                  </div>

               <?php endif; ?>



               <?php if (!empty($Faqs)) : ?>

                  <div class="faq-accordion">

                     <div id="accordion" class="accordion-container">

                        <?php foreach ($Faqs as $Faq) : ?>

                           <div class="accordion-Main">

                              <?php if (!empty($Faq['faq_question'])) : ?>

                                 <h4 class="accordion-title js-accordion-title js-accordion-titles">

                                    <?php echo esc_html($Faq['faq_question']); ?>

                                 </h4>

                              <?php endif; ?>



                              <?php if (!empty($Faq['faq_answer'])) : ?>

                                 <div class="accordion-content accordion-faq-main">

                                    <p><?php echo ($Faq['faq_answer']); ?></p>

                                 </div>

                              <?php endif; ?>

                           </div>

                        <?php endforeach; ?>

                     </div>

                  </div>

               <?php endif; ?>

            </div>

         </div>

      </section>

   <?php endif; ?>





   <section class="industry_sec margin-100px" id="seo_industry">

      <div class="wrapper">

         <h3><?php the_field('google_penalty_industries_groups_comm_google_penalty_industries_title', 'option') ?></h3>

         <div class="main-seoinsight">

            <div class="semititle ftsz22"><?php the_field('google_penalty_industries_groups_comm_google_penalty_industries_subtitle', 'option') ?></div>

            <div class="sec_absolutetxt"><?php the_field('google_penalty_industries_groups_comm_google_penalty_industries_content', 'option') ?></div>

         </div>

         <?php

         // Retrieve the option field using ACF's get_field() function for options







         $service_group = get_field('google_penalty_industries_groups_comm_google_penalty_industries_repeater', 'option');















         if ($service_group && is_array($service_group)): ?>

            <div class="servicebx_container fourcolumn flex-container wrap">

               <?php foreach ($service_group as $service):

                  $service_link = isset($service['google_penalty_industries_url']) ? $service['google_penalty_industries_url'] : '#';







                  $service_image = isset($service['google_penalty_industries_image']) ? $service['google_penalty_industries_image'] : '';







                  $service_name = isset($service['google_penalty_industries_text']) ? $service['google_penalty_industries_text'] : '';







               ?>

                  <a href="<?php echo esc_url($service_link);?>" class="servicebx">

                     <dl>

                        <dt>

                           <?php if (!empty($service_image)): ?>

                              <img src="<?php echo esc_url($service_image['url']); ?>" class="" decoding="async">

                           <?php endif; ?>

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

         <h3><?php the_field('google_penalty_platform_group_google_penalty_platform_heading', 'option'); ?></h3>

         <div class="main-seoinsight">

            <div class="semititle ftsz22"><?php the_field('google_penalty_platform_group_google_penalty_platform_subheading', 'option'); ?></div>

            <div class="sec_absolutetxt"><?php the_field('google_penalty_platform_group_google_penalty_platform_content', 'option'); ?></div>

         </div>

         <div class="servicebx_container fourcolumn flex-container wrap techno">

            <?php

            // Fetch the group field



            $ppc_platform_group = get_field('google_penalty_platform_group_google_penalty_platform_repeater', 'option');



            // Check if the group field exists and contains the repeater field



            if (isset($ppc_platform_group)) :







            ?>

               <div class="ppc-platform-section">

                  <?php

                  // Loop through repeater field items



                  foreach ($ppc_platform_group as $platform) :



                     // Fetch subfields



                     $image = $platform['google_platform_image'];



                     $service_text = $platform['google_service_text'];



                     $technology = $platform['google_platform_technology'];



                     $url = $platform['google_platform_url'] ?? '#'; // Ensure you have the URL field or use a default valu



                     // Ensure required fields are not empty



                     if ($image && $technology) :



                  ?>

                        <a href="javascript:void;" class="servicebx">

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

               </div>

            <?php else : ?>

               <p>No platform data found.</p>

            <?php endif; ?>

         </div>

         <div class="clearfix"></div>

      </div>

   </section>

   <section class="servicepg margin-100px location_list location_sec splloc" id="ourlocation">

      <div class="wrapper">

         <h3><?php the_field('google_digital_marketing_section_title', 'option') ?></h3>

         <div class="semititle"><?php the_field('google_digital_marketing_section_subtitle', 'option') ?></div>

         <?php

         // Retrieve the group field



         $service_group = get_field('google_digital_marketing_google_services', 'option'); // Replace 'service_group' with your group field name







         if (!empty($service_group)): ?>

            <div class="servicebx_container locationcitycontainer">

               <?php foreach ($service_group as $service):

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


<?php get_footer(); ?>