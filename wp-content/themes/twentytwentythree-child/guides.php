<?php
/* Template Name: Guide */
get_header(); ?>

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

<section class="guidelistsec inrpage_sec guidelistpg_new">
            <div class="wrapper">
                <div class="guidelistcontainer flex-container wrap guidelist_newcontainer">
                	<?php
            // Query to get all 'guides' posts
            $args = array(
                'post_type'      => 'guides',
                'posts_per_page' => -1, // Fetch all guides
                'post_status'    => 'publish',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $title = get_the_title();
                    $permalink = get_permalink();
                    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'medium'); // Get featured image
                    if (!$thumbnail) {
                        $thumbnail = 'https://via.placeholder.com/600x809'; // Fallback image
                    }
            ?>
                    <a href="<?php echo esc_url($permalink); ?>" class="guidebx">
                        <span class="guideimgbx book-container">
                            <div class="book">
                                <img width="600" height="809" src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($title); ?>" decoding="async" />
                            </div>
                        </span>
                        <span class="guidecontentbx">
                            <p class="guidename"><?php echo esc_html($title); ?></p>
                        </span>
                    </a>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No guides found.</p>';
            endif;
            ?>
                </div>
            </div>
        </section>

</main>

<?php get_footer(); ?>