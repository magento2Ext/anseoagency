<?php get_header(); ?>
<main>
<div class="search-results">
    <h1>Search Results for: "<?php echo get_search_query(); ?>"</h1>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="search-item">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <!-- Display the featured image -->
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium', ['class' => 'search-item-thumbnail']); ?>
                </a>
            <?php endif; ?>
            <p><?php the_excerpt(); ?></p>
        </div>
    <?php endwhile; else : ?>
        <p>No results found. Please try another search.</p>
    <?php endif; ?>
</div>
</main>
<?php get_footer(); ?>
