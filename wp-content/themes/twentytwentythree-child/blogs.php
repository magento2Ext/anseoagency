<?php
/* Template Name: Blogs */
get_header();
$author_id = get_the_author_meta('ID');
$author_image = get_field('author_image', 'user_'. $author_id); 
?>

<main>
<section class="blogdtlpg inr_banner flex_banner">
            <div class="sitegradient inrsitegradient"></div>
            <div class="wrapper">
                <div class="inrbnr_left">
                     <?php generate_breadcrumbs(); ?>
                	<h1 class="pgtitle"><?php the_field('blogs_banner_group_banner_heading');?></h1>
<div class="searchdiv">
    <form role="search" method="get" class="woocommerce-product-search searchbox" action="<?php echo esc_url(home_url('/')); ?>">
        <input id="typewritetext1" type="search" class="search-field searchtext aa-input" placeholder="Search articles" value="<?php echo get_search_query(); ?>" name="s">
        <button type="submit" class="search-submit"></button>
    </form>
</div>
</div>
<div class="inrbnr_rightimg">
	<?php
	$image = get_field('blogs_banner_group_banner_image');
	if($image){
		echo '<img src="' . esc_url($image['url']) . '">';
	}
	?>
</div>
</div>
</section>

<section class="inrpage_sec blogresourcepg">
                          <div class="wrapper container servicelistslide">
              <div class="hs__wrapper seoservice_tablist">
                <ul class="hs tablist">
                
                <?php while (have_rows('tabs')): the_row(); 
                    // Retrieve subfields
                    $tab_text = get_sub_field('tab_name');
                    $tab_link = get_sub_field('tab_link'); // Text field, allows #id
                ?>
                <li class="hs__item makemeactive">
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
                    <button onclick="toggleDropdown()" class="dropbtn" data-rocket-lazy-bg-19766016-2587-49b6-9a46-8c1351342cb2="loaded">Select Service</button>
                    <div id="myDropdown" class="dropdown-content">
                     <?php while (have_rows('tabs')): the_row(); 
                    // Retrieve subfields
                    $tab_text = get_sub_field('tab_name');
                    $tab_link = get_sub_field('tab_link'); // Text field, allows #id
                ?>
                <a href="<?php echo esc_attr($tab_link); ?>"><?php echo esc_html($tab_text); ?></a>
            
               <?php endwhile; ?>
                                          </div>
                  </div>
                </div>
              </div>
          </section>
<section class="sec_ppc new_ppc">
                <div class="wrapper">
                	<div class="pagetitle"><?php the_field('editor_choice_text');?></div>
                	<div class="flex-container wrap">
                        <div class="blog_8">
                           <div class="relarti_container">
    <?php
    // Define WP_Query parameters
    $args = array(
        'post_type'      => 'post',         // Fetch posts
        'posts_per_page' => 4,             // Limit to 4 posts
        'category_name'  => 'editor-choice',  
    );

    // Create a new query
    $query = new WP_Query($args);

    // Loop through posts
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'blog_list'); // Get featured image
            $author_name = get_the_author(); // Get author name
            $author_url = get_author_posts_url(get_the_author_meta('ID')); // Get author URL
            $category = get_the_category(); // Get category
            $category_name = $category[0]->name ?? 'Uncategorized';
            $category_link = get_category_link($category[0]->term_id) ?? '#';
    ?>
    <div class="articlebox">
        <div class="articleimg">
            <a href="<?php the_permalink(); ?>">
                <img 
                    width="430" 
                    height="258" 
                    src="<?php echo esc_url($featured_image ?: 'default-image.png'); ?>" 
                    class="attachment-blog_list size-blog_list" 
                    alt="<?php the_title_attribute(); ?>" 
                    decoding="async">
            </a>
        </div>
        <div class="article_middle">
            <div class="articletype">
                <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a>
            </div>
            <div class="articlename">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="articleby">
                <!-- <a href="<?php // echo esc_url($author_url); ?>">  -->
                    <p><span>
                        <img 
                            src="<?php echo $author_image ?>" 
                            alt="<?php echo esc_attr($author_name); ?>" 
                            class="useravtar">
                    </span>
                    By <?php echo esc_html($author_name); ?></p>
                <!-- </a> -->
            </div>
        </div>
    </div>
    <?php
        endwhile;
    else :
        echo '<p>No posts found.</p>';
    endif;

    // Reset post data
    wp_reset_postdata();
    ?>
</div>
</div>
<div class="blog_4 111">
    <div class="blog_list">
        <div class="blog_title">Latest Articles</div>
        <ul>
            <?php
            // Define query parameters
            $args = array(
                'post_type'      => 'post',         // Fetch posts
                'posts_per_page' => 6,             // Limit to 6 posts
                'category_name'  => 'editor-choice',
            );

            // Create a new query
            $query = new WP_Query($args);

            // Loop through posts
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $author_name = get_the_author(); // Get the author name
                    $author_url = get_author_posts_url(get_the_author_meta('ID')); // Get author URL
                    $categories = get_the_category(); // Get categories
                    $category_name = $categories[0]->name ?? 'Uncategorized';
                    $category_link = get_category_link($categories[0]->term_id) ?? '#';
            ?>
                <li>
                    <span>
                        <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?> Articles</a>
                    </span>
                    <a href="<?php the_permalink(); ?>">
                        <div class="blog_content"><?php the_title(); ?></div>
                    </a>
                    <!-- <a href="<?php // echo esc_url($author_url); ?>">  -->
                        <p>By <?php echo esc_html($author_name); ?></p>
                    <!-- </a> -->
                </li>
            <?php
                endwhile;
            else :
                echo '<p>No articles found.</p>';
            endif;

            // Reset post data
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>
</div>
                </div>
            </section>

<section class="sec_ppc new_ppc margin-160px" id="PPC">
                    <div class="wrapper">
                        <div class="pagetitle"><?php the_field('ppc_heading');?></div>
						
                        <div class="flex-container wrap">
        <div class="blog_8">
        	<div class="relarti_container">
    <?php
    // Define WP_Query parameters
    $args = array(
        'post_type'      => 'post',         // Fetch posts
        'posts_per_page' => 4,             // Limit to 4 posts
        'category_name'  => 'ppc-articles',  
    );

    // Create a new query
    $query = new WP_Query($args);

    // Loop through posts
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'blog_list'); // Get featured image
            $author_name = get_the_author(); // Get author name
            $author_url = get_author_posts_url(get_the_author_meta('ID')); // Get author URL
            $category = get_the_category(); // Get category
            $category_name = $category[0]->name ?? 'Uncategorized';
            $category_link = get_category_link($category[0]->term_id) ?? '#';
    ?>
    <div class="articlebox">
        <div class="articleimg">
            <a href="<?php the_permalink(); ?>">
                <img 
                    width="430" 
                    height="258" 
                    src="<?php echo esc_url($featured_image ?: 'default-image.png'); ?>" 
                    class="attachment-blog_list size-blog_list" 
                    alt="<?php the_title_attribute(); ?>" 
                    decoding="async">
            </a>
        </div>
        <div class="article_middle">
            <div class="articletype">
                <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a>
            </div>
            <div class="articlename">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="articleby">
                <!-- <a href="<?php // echo esc_url($author_url); ?>">  -->
                    <p><span>
                        <img 
                            src="<?php echo $author_image ?>" 
                            alt="<?php echo esc_attr($author_name); ?>" 
                            class="useravtar">
                    </span>
                    By <?php echo esc_html($author_name); ?></p>
                <!-- </a> -->
            </div>
        </div>
    </div>
    <?php
        endwhile;
    else :
        echo '<p>No posts found.</p>';
    endif;

    // Reset post data
    wp_reset_postdata();
    ?>
</div>
        </div>
        <div class="blog_4 222">
    <div class="blog_list">
        <div class="blog_title">Latest Articles</div>
        <ul>
            <?php
            // Define query parameters
            $args = array(
                'post_type'      => 'post',         // Fetch posts
                'posts_per_page' => 6,             // Limit to 6 posts
                'category_name'  => 'ppc-articles',

            );

            // Create a new query
            $query = new WP_Query($args);

            // Loop through posts
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $author_name = get_the_author(); // Get the author name
                    $author_url = get_author_posts_url(get_the_author_meta('ID')); // Get author URL
                    $categories = get_the_category(); // Get categories
                    $category_name = $categories[0]->name ?? 'Uncategorized';
                    $category_link = get_category_link($categories[0]->term_id) ?? '#';
            ?>
                <li>
                    <span>
                        <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a>
                    </span>
                    <a href="<?php the_permalink(); ?>">
                        <div class="blog_content"><?php the_title(); ?></div>
                    </a>
                    <!-- <a href="<?php echo esc_url($author_url); ?>">  -->
                        <p>By <?php echo esc_html($author_name); ?></p>
                    <!-- </a> -->
                </li>
            <?php
                endwhile;
            else :
                echo '<p>No articles found.</p>';
            endif;

            // Reset post data
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>
    </div>
</div>
</section>

<section class="sec_ppc new_ppc margin-160px" id="SEO" >
                    <div class="wrapper">
                        <div class="pagetitle"><?php the_field('seo_heading');?></div>
                        <div class="flex-container wrap">
        <div class="blog_8">
        	<div class="relarti_container">
    <?php
    // Define WP_Query parameters
    $args = array(
        'post_type'      => 'post',         // Fetch posts
        'posts_per_page' => 4,             // Limit to 4 posts
        'category_name'  => 'seo',
    );

    // Create a new query
    $query = new WP_Query($args);

    // Loop through posts
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'blog_list'); // Get featured image
            $author_name = get_the_author(); // Get author name
            $author_url = get_author_posts_url(get_the_author_meta('ID')); // Get author URL
            $category = get_the_category(); // Get category
            $category_name = $category[0]->name ?? 'Uncategorized';
            $category_link = get_category_link($category[0]->term_id) ?? '#';
    ?>
    <div class="articlebox">
        <div class="articleimg">
            <a href="<?php the_permalink(); ?>">
                <img 
                    width="430" 
                    height="258" 
                    src="<?php echo esc_url($featured_image ?: 'default-image.png'); ?>" 
                    class="attachment-blog_list size-blog_list" 
                    alt="<?php the_title_attribute(); ?>" 
                    decoding="async">
            </a>
        </div>
        <div class="article_middle">
            <div class="articletype">
                <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a>
            </div>
            <div class="articlename">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="articleby">
                <!-- <a href="<?php // echo esc_url($author_url); ?>">  -->
                    <p><span>
                        <img 
                            src="<?php echo $author_image ?>" 
                            alt="<?php echo esc_attr($author_name); ?>" 
                            class="useravtar">
                    </span>
                    By <?php echo esc_html($author_name); ?></p>
                <!-- </a> -->
            </div>
        </div>
    </div>
    <?php
        endwhile;
    else :
        echo '<p>No posts found.</p>';
    endif;

    // Reset post data
    wp_reset_postdata();
    ?>
</div>
        </div>
         <div class="blog_4 222">
    <div class="blog_list">
        <div class="blog_title">Latest Articles</div>
        <ul>
            <?php
            // Define query parameters
            $args = array(
                'post_type'      => 'post',         // Fetch posts
                'category_name'  => 'seo',             // Limit to 6 posts

            );

            // Create a new query
            $query = new WP_Query($args);

            // Loop through posts
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $author_name = get_the_author(); // Get the author name
                    $author_url = get_author_posts_url(get_the_author_meta('ID')); // Get author URL
                    $categories = get_the_category(); // Get categories
                    $category_name = $categories[0]->name ?? 'SEO Articles';
                    $category_link = get_category_link($categories[0]->term_id) ?? '#';
            ?>
                <li>
                    <span>
                        <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a>
                    </span>
                    <a href="<?php the_permalink(); ?>">
                        <div class="blog_content"><?php the_title(); ?></div>
                    </a>
                    <!-- <a href="<?php // echo esc_url($author_url); ?>"> -->
                        <p>By <?php echo esc_html($author_name); ?></p>
                    <!-- </a> -->
                </li>
            <?php
                endwhile;
            else :
                echo '<p>No articles found.</p>';
            endif;

            // Reset post data
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>
    </div>
</div>
</section>

<section class="sec_ppc new_ppc margin-160px" id="ContentMarketing">
                    <div class="wrapper">
                        <div class="pagetitle"><?php the_field('content_marketing_heading');?></div>
						
                        <div class="flex-container wrap" data-cat_id="20">
        <div class="blog_8">
        	<div class="relarti_container">
    <?php
    // Define WP_Query parameters
    $args = array(
        'post_type'      => 'post',         // Fetch posts
        'posts_per_page' => 4,             // Limit to 4 posts
        'category_name'  => 'content-marketing-articles',  
    );

    // Create a new query
    $query = new WP_Query($args);

    // Loop through posts
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'blog_list'); // Get featured image
            $author_name = get_the_author(); // Get author name
            $author_url = get_author_posts_url(get_the_author_meta('ID')); // Get author URL
            $category = get_the_category(); // Get category
            $category_name = $category[0]->name ?? 'Uncategorized';
            $category_link = get_category_link($category[0]->term_id) ?? '#';
    ?>
    <div class="articlebox">
        <div class="articleimg">
            <a href="<?php the_permalink(); ?>">
                <img 
                    width="430" 
                    height="258" 
                    src="<?php echo esc_url($featured_image ?: 'default-image.png'); ?>" 
                    class="attachment-blog_list size-blog_list" 
                    alt="<?php the_title_attribute(); ?>" 
                    decoding="async">
            </a>
        </div>
        <div class="article_middle">
            <div class="articletype">
                <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a>
            </div>
            <div class="articlename">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="articleby">
                <!-- <a href="<?php // echo esc_url($author_url); ?>"> -->
                    <p><span>
                        <img 
                            src="<?php echo $author_image ?>" 
                            alt="<?php echo esc_attr($author_name); ?>" 
                            class="useravtar">
                    </span>
                    By <?php echo esc_html($author_name); ?></p>
                <!-- </a> -->
            </div>
        </div>
    </div>
    <?php
        endwhile;
    else :
        echo '<p>No posts found.</p>';
    endif;

    // Reset post data
    wp_reset_postdata();
    ?>
</div>
        </div>
         <div class="blog_4 222">
    <div class="blog_list">
        <div class="blog_title">Latest Articles</div>
        <ul>
            <?php
            // Define query parameters
            $args = array(
                'post_type'      => 'post',         // Fetch posts
                'posts_per_page' => 6,             // Limit to 6 posts
                'category_name'  => 'content-marketing-articles',

            );

            // Create a new query
            $query = new WP_Query($args);

            // Loop through posts
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $author_name = get_the_author(); // Get the author name
                    $author_url = get_author_posts_url(get_the_author_meta('ID')); // Get author URL
                    $categories = get_the_category(); // Get categories
                    $category_name = $categories[0]->name ?? 'Uncategorized';
                    $category_link = get_category_link($categories[0]->term_id) ?? '#';
            ?>
                <li>
                    <span>
                        <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a>
                    </span>
                    <a href="<?php the_permalink(); ?>">
                        <div class="blog_content"><?php the_title(); ?></div>
                    </a>
                    <!-- <a href="<?php // echo esc_url($author_url); ?>">  -->
                        <p>By <?php echo esc_html($author_name); ?></p>
                    <!-- </a> -->
                </li>
            <?php
                endwhile;
            else :
                echo '<p>No articles found.</p>';
            endif;

            // Reset post data
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>
    </div>
</div>
</section>

<section class="sec_ppc new_ppc margin-160px" id="WebDesign">
                    <div class="wrapper">
                        <div class="pagetitle"><?php the_field('web_design_heading');?></div>
						
                        <div class="flex-container wrap">
        <div class="blog_8">
        	<div class="relarti_container">
    <?php
    // Define WP_Query parameters
    $args = array(
        'post_type'      => 'post',         // Fetch posts
        'posts_per_page' => 4,             // Limit to 4 posts
        'category_name'  => 'web-design-articles',  
    );

    // Create a new query
    $query = new WP_Query($args);

    // Loop through posts
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'blog_list'); // Get featured image
            $author_name = get_the_author(); // Get author name
            $author_url = get_author_posts_url(get_the_author_meta('ID')); // Get author URL
            $category = get_the_category(); // Get category
            $category_name = $category[0]->name ?? 'Uncategorized';
            $category_link = get_category_link($category[0]->term_id) ?? '#';
    ?>
    <div class="articlebox">
        <div class="articleimg">
            <a href="<?php the_permalink(); ?>">
                <img 
                    width="430" 
                    height="258" 
                    src="<?php echo esc_url($featured_image ?: 'default-image.png'); ?>" 
                    class="attachment-blog_list size-blog_list" 
                    alt="<?php the_title_attribute(); ?>" 
                    decoding="async">
            </a>
        </div>
        <div class="article_middle">
            <div class="articletype">
                <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a>
            </div>
            <div class="articlename">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="articleby">
                <!-- <a href="<?php // echo esc_url($author_url); ?>"> -->
                    <p><span>
                        <img 
                            src="<?php echo $author_image ?>" 
                            alt="<?php echo esc_attr($author_name); ?>" 
                            class="useravtar">
                    </span>
                    By <?php echo esc_html($author_name); ?></p>
                <!-- </a> -->
            </div>
        </div>
    </div>
    <?php
        endwhile;
    else :
        echo '<p>No posts found.</p>';
    endif;

    // Reset post data
    wp_reset_postdata();
    ?>
</div>
        </div>
         <div class="blog_4 222">
    <div class="blog_list">
        <div class="blog_title">Latest Articles</div>
        <ul>
            <?php
            // Define query parameters
            $args = array(
                'post_type'      => 'post',         // Fetch posts
                'posts_per_page' => 6,             // Limit to 6 posts
                'category_name'  => 'web-design-articles',

            );

            // Create a new query
            $query = new WP_Query($args);

            // Loop through posts
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $author_name = get_the_author(); // Get the author name
                    $author_url = get_author_posts_url(get_the_author_meta('ID')); // Get author URL
                    $categories = get_the_category(); // Get categories
                    $category_name = $categories[0]->name ?? 'Uncategorized';
                    $category_link = get_category_link($categories[0]->term_id) ?? '#';
            ?>
                <li>
                    <span>
                        <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a>
                    </span>
                    <a href="<?php the_permalink(); ?>">
                        <div class="blog_content"><?php the_title(); ?></div>
                    </a>
                    <!-- <a href="<?php // echo esc_url($author_url); ?>"> -->
                        <p>By <?php echo esc_html($author_name); ?></p>
                    <!-- </a> -->
                </li>
            <?php
                endwhile;
            else :
                echo '<p>No articles found.</p>';
            endif;

            // Reset post data
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>
    </div>
</div>
</section>

<section class="sec_ppc new_ppc margin-160px" id="WebDevelopment">
                    <div class="wrapper">
                        <div class="pagetitle"><?php the_field('web_development_heading');?></div>
						
                        <div class="flex-container wrap">
        <div class="blog_8">
        	<div class="relarti_container">
    <?php
    // Define WP_Query parameters
    $args = array(
        'post_type'      => 'post',         // Fetch posts
        'posts_per_page' => 4,             // Limit to 4 posts
        'category_name'  => 'web-development-articles',  
    );

    // Create a new query
    $query = new WP_Query($args);

    // Loop through posts
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'blog_list'); // Get featured image
            $author_name = get_the_author(); // Get author name
            $author_url = get_author_posts_url(get_the_author_meta('ID')); // Get author URL
            $category = get_the_category(); // Get category
            $category_name = $category[0]->name ?? 'Uncategorized';
            $category_link = get_category_link($category[0]->term_id) ?? '#';
    ?>
    <div class="articlebox">
        <div class="articleimg">
            <a href="<?php the_permalink(); ?>">
                <img 
                    width="430" 
                    height="258" 
                    src="<?php echo esc_url($featured_image ?: 'default-image.png'); ?>" 
                    class="attachment-blog_list size-blog_list" 
                    alt="<?php the_title_attribute(); ?>" 
                    decoding="async">
            </a>
        </div>
        <div class="article_middle">
            <div class="articletype">
                <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a>
            </div>
            <div class="articlename">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="articleby">
                <!-- <a href="<?php // echo esc_url($author_url); ?>"> -->
                    <p><span>
                        <img 
                            src="<?php echo $author_image ?>" 
                            alt="<?php echo esc_attr($author_name); ?>" 
                            class="useravtar">
                    </span>
                    By <?php echo esc_html($author_name); ?></p>
                <!-- </a> -->
            </div>
        </div>
    </div>
    <?php
        endwhile;
    else :
        echo '<p>No posts found.</p>';
    endif;

    // Reset post data
    wp_reset_postdata();
    ?>
</div>
        </div>
      <div class="blog_4 222">
    <div class="blog_list">
        <div class="blog_title">Latest Articles</div>
        <ul>
            <?php
            // Define query parameters
            $args = array(
                'post_type'      => 'post',         // Fetch posts
                'posts_per_page' => 6,             // Limit to 6 posts
                'category_name'  => 'web-development-articles',

            );

            // Create a new query
            $query = new WP_Query($args);

            // Loop through posts
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $author_name = get_the_author(); // Get the author name
                    $author_url = get_author_posts_url(get_the_author_meta('ID')); // Get author URL
                    $categories = get_the_category(); // Get categories
                    $category_name = $categories[0]->name ?? 'Uncategorized';
                    $category_link = get_category_link($categories[0]->term_id) ?? '#';
            ?>
                <li>
                    <span>
                        <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a>
                    </span>
                    <a href="<?php the_permalink(); ?>">
                        <div class="blog_content"><?php the_title(); ?></div>
                    </a>
                    <!-- <a href="<?php echo esc_url($author_url); ?>">  -->
                        <p>By <?php echo esc_html($author_name); ?></p>
                    <!-- </a> -->
                </li>
            <?php
                endwhile;
            else :
                echo '<p>No articles found.</p>';
            endif;

            // Reset post data
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>  
    </div>
</div>
</section>

<section class="sec_ppc new_ppc margin-160px" id="SocialMediaMarketing">
                    <div class="wrapper">
                        <div class="pagetitle"><?php the_field('social_media_heading');?></div>
						
                        <div class="flex-container wrap" data-cat_id="22">
        <div class="blog_8">
        	<div class="relarti_container">
    <?php
    // Define WP_Query parameters
    $args = array(
        'post_type'      => 'post',         // Fetch posts
        'posts_per_page' => 4,             // Limit to 4 posts
        'category_name'  => 'social-media-marketing-articles',  
    );

    // Create a new query
    $query = new WP_Query($args);

    // Loop through posts
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'blog_list'); // Get featured image
            $author_name = get_the_author(); // Get author name
            $author_url = get_author_posts_url(get_the_author_meta('ID')); // Get author URL
            $category = get_the_category(); // Get category
            $category_name = $category[0]->name ?? 'Uncategorized';
            $category_link = get_category_link($category[0]->term_id) ?? '#';
    ?>
    <div class="articlebox">
        <div class="articleimg">
            <a href="<?php the_permalink(); ?>">
                <img 
                    width="430" 
                    height="258" 
                    src="<?php echo esc_url($featured_image ?: 'default-image.png'); ?>" 
                    class="attachment-blog_list size-blog_list" 
                    alt="<?php the_title_attribute(); ?>" 
                    decoding="async">
            </a>
        </div>
        <div class="article_middle">
            <div class="articletype">
                <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a>
            </div>
            <div class="articlename">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="articleby">
                <!-- <a href="<?php // echo esc_url($author_url); ?>">  -->
                    <p><span>
                        <img 
                            src="<?php echo $author_image ?>" 
                            alt="<?php echo esc_attr($author_name); ?>" 
                            class="useravtar">
                    </span>
                    By <?php echo esc_html($author_name); ?></p>
                <!-- </a>  -->
            </div>
        </div>
    </div>
    <?php
        endwhile;
    else :
        echo '<p>No posts found.</p>';
    endif;

    // Reset post data
    wp_reset_postdata();
    ?>
</div>
        </div>
        <div class="blog_4 222">
    <div class="blog_list">
        <div class="blog_title">Latest Articles</div>
        <ul>
            <?php
            // Define query parameters
            $args = array(
                'post_type'      => 'post',         // Fetch posts
                'posts_per_page' => 6,             // Limit to 6 posts
                'category_name'  => 'social-media-marketing-articles',

            );

            // Create a new query
            $query = new WP_Query($args);

            // Loop through posts
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $author_name = get_the_author(); // Get the author name
                    $author_url = get_author_posts_url(get_the_author_meta('ID')); // Get author URL
                    $categories = get_the_category(); // Get categories
                    $category_name = $categories[0]->name ?? 'Uncategorized';
                    $category_link = get_category_link($categories[0]->term_id) ?? '#';
            ?>
                <li>
                    <span>
                        <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($category_name); ?></a>
                    </span>
                    <a href="<?php the_permalink(); ?>">
                        <div class="blog_content"><?php the_title(); ?></div>
                    </a>
                    <!-- <a href="<?php // echo esc_url($author_url); ?>">  -->
                        <p>By <?php echo esc_html($author_name); ?></p>
                    <!-- </a> -->
                </li>
            <?php
                endwhile;
            else :
                echo '<p>No articles found.</p>';
            endif;

            // Reset post data
            wp_reset_postdata();
            ?>
        </ul>
    </div>
</div>  
    </div>
</div>
</section>

<?php
// Get the Blog Archive Link from ACF
$blog_archive_link = get_field('all_blog_all_blog_link');
?>


</main>


<?php get_footer();

?>