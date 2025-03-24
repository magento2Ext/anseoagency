<?php
get_header(); ?>

<main>
	<section class="inr_banner">
    <div class="sitegradient inrsitegradient"></div>
    <div class="wrapper">
        <div class="guidetitlediv">
                                    <h1 class=""><?php the_title(); ?></h1>
                                    <?php generate_breadcrumbs(); ?>        </div>
    </div>
    <div class="clearfix"></div>
</section>

<section class="inrpage_sec guidepg ignore-fixed">
	 <div class="wrapper">
                <div class="quicklink_div">


                    <a href="javascript:void(0)" class="quicklink_trigger">Chapters</a>
                    <a href="javascript:void(0)" class="closemenu"><img width="11" height="11"
                    src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/close-black.png" alt="close"
                    loading="lazy"></a>
                    <div class="sec_title">Chapters</div>
                    <div class="qu-scroll">
                        <ul>
                        </ul>
                    </div>
                    <div class="moretraffic_div audit_section" id="audit-tool-guidesection">
                        <div class="sec_title">Get your instant free SEO report</div>
                        <p class="fordesktop">Get a Free Seo Audit in Minutes</p>
                        <p class="formobile">Get a Free SEO Guide for Startups: Growing Organic Traffic in 2024 and Beyond SEO Audit in Minutes</p>
                        <!-- <form action="/tools/seo-audit/" method="get" class="form-analyze-now">
                    <input type="text" class="websiteurl" name="check_url" placeholder="Enter Your Webiste URL">
                    <input type="submit" class="btnsubmit" value="Analyze Now">
                </form> -->
                        <form class="form_audit_url" name="form-analyze-now form-audit-url">
                            <input type="hidden" name="r" class="audit-ref" value="L2d1aWRlcy9zdGFydHVwLXNlby1ndWlkZS8=">
                            <input type="hidden" name="sID" class="audit-sid" value="">
                            <input type="hidden" name="auto_initiate" class="audit_auto_initiate" value="">
                            <input type="text" class="websiteurl url" placeholder="" required="required" value="" name="url">
                            <input type="submit" class="btnsubmit input_url" value="Analyze Now">
                            <div class="ajax-spinner"></div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="chaptercontainer ch_one" id="section1">
                <div class="guidecontainer ptag">
                    <div class="guidesec-bg">
                    	<?php the_field('guides_heading');?>
                    </div>
                </div>
            </div>
    <?php if (have_rows('guides_content_repeater')): ?>
    <?php $chapter_count = 1; // Counter for dynamic classes and IDs 
    $formatter = new NumberFormatter("en", NumberFormatter::SPELLOUT);
    ?>


    <?php while (have_rows('guides_content_repeater')): the_row(); 
        $chapter_title = get_sub_field('chapter_number');
        $chapter_heading = get_sub_field('chapter_heading');
        $chapter_content = get_sub_field('chapter_content');
        $chapter_word = strtolower(trim((string) $formatter->format($chapter_count)));
        $chapter_class = 'ch_' . $chapter_word;


        $chapter_id = 'section' . $chapter_count;
    ?>
        <div class="chaptercontainer <?php echo esc_attr($chapter_class); ?>" id="<?php echo esc_attr($chapter_id); ?>">
            <div class="guidecontainer ptag">
                <div class="guidesec-bg">
                    <div class="container flex-container wrap">
                        <div class="banner-left-block">
                            <div class="ch-head-badge"><?php echo esc_html($chapter_title); ?></div>
                            <h2 class="main-heading"><?php echo esc_html($chapter_heading); ?></h2>
                        </div>
                    </div>
                   <?php the_sub_field('chapter_content');?>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    <?php 
        $chapter_count++; // Increment counter for next chapter
    endwhile; ?>
<?php endif; ?>

</section>

</main>

<?php get_footer();