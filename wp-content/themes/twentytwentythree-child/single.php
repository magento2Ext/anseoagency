<?php get_header(); ?>
<main>
<section class="blogdtlpg inr_banner blddtlpgbnr">
            <div class="sitegradient inrsitegradient"></div>
            <div class="wrapper">
    
                
    
            </div>
        </section>
<section class="blogdtl_sec blogdtlmodify">
    <div class="wrapper">
        <div class="dtlpg_brdcrmb_title">
            <?php generate_breadcrumbs(); ?>
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                <h1 class="pgtitle"><?php the_title(); ?></h1>
            </div>
                
                <div class="blog_cstdy_wrapper">
                    <div class="searchdiv">
                        <form role="search" method="get" class="woocommerce-product-search searchbox" action="<?php echo esc_url(home_url('/')); ?>">
                            <input id="typewritetext1" type="search" class="search-field searchtext aa-input" placeholder="Search articles" value="<?php echo get_search_query(); ?>" name="s">
                            <button type="submit" class="search-submit"></button>
                        </form>
                    </div>

                    <div class="contenttablediv desktopviewshow">
                        <div class="mobiletablecontent">Table of Content</div>
                        <div class="clearfix"></div>
                        <div class="blog-lef-filter">
                            <div class="contentbl_title open">Table of Content</div>
                            <a href="javascript:void(0);" class="closemenu"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu-close.png" alt="close" width="" height=""></a>
                            <?php
                            global $post;
                            $content = apply_filters('the_content', $post->post_content);

                            // Match all <h2> tags in the content
                            preg_match_all('/<h2[^>]*>(.*?)<\/h2>/i', $content, $matches);

                            if (!empty($matches[0])) :
                                // Output the list of <h2> headings as <ul> with custom class
                                $output = '<ul class="tblcontent blog_tblcontent">'; 
                                $counter = 1;

                                // Loop through each <h2> to create list items
                                foreach ($matches[1] as $h2_content) :
                                    $output .= '<li class="h2-link"><a href="#marker__' . $counter . '" class="section-link">';
                                    $output .=  esc_html(strip_tags($h2_content)) . '</a></li>';
                                    $counter++;
                                endforeach;
                                $output .= '</ul>';

                                // Output the generated list
                                echo $output;
                            endif;

                            // Add IDs to <h2> tags to make them linkable
                            $counter = 1;
                            foreach ($matches[0] as $h2_tag) :
                                // Replace <h2> with an ID attribute
                                $new_h2_tag = preg_replace('/<h2/', '<h2 id="marker__' . $counter . '"', $h2_tag, 1);
                                $content = str_replace($h2_tag, $new_h2_tag, $content);
                                $counter++;
                            endforeach;
                            ?>
                        </div>
                    </div>

                    <!-- Display the post content with the newly added IDs for <h2> -->
                    <div class="blog_casestudy_content ptag">
                    <div class="blogbnr_container">
                        <?php
                    // Display the featured image
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large'); // You can change 'large' to 'medium', 'thumbnail', or any custom size.
                    }
                    ?>
                    </div>
                        <?php echo $content; ?></div>

                </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
</main>
<?php get_footer(); ?>
