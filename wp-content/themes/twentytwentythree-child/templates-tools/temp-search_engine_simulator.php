<?php
/**
 * Template Name: Search Engine Simulator
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
get_header();
 ?> 
<?php 

   
 ?>
 <div class="tool-pages  tool-inner-page search-page">
<section class="mainHexaa customized_tools custom_search_engine">
  <div class="container">
        <div class="robt_main_otr" style="max-width:100%;">
        <div class="row">
        <div class="tool-inn-left">
          <div class="robt_con define_float">
          <?php
          while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <div class="page-content">
                <?php
                  the_content();

                  wp_link_pages(
                    array(
                      'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
                      'after'  => '</div>',
                    )
                  );
                  ?>
              </div>
            </article>
          <?php endwhile;  ?>
          </div>
        </div>
        <div class="tool-inn-right">    
          <div class="flex-grid col-align">
            <?php echo get_the_post_thumbnail( get_the_ID());?>
          </div>

        <div class="related-tools">
       <h2>Related Tools</h2>
      
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/google-keyword-rank-checker'; ?>" target="_blank">Google Keyword Rank Checker</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/google-pagerank-checker'; ?>" target="_blank">Google PageRank Checker</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/keyword-frequency-counter'; ?>" target="_blank">Keyword Frequency Counter</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/keyword-research-tool'; ?>" target="_blank">Keyword Research Tool</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/lynxviewer'; ?>" target="_blank">Lynx Viewer</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/meta-tag-generator'; ?>" target="_blank">Meta Tag Generator</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/robots-txt-generator'; ?>" target="_blank">Robots Txt Generator</a>
       
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/website-traffic-checker'; ?>" target="_blank">Traffic Checker</a>
      </div>  
        </div>
        </div>
        <div class="seach-cus">
        <?php include get_stylesheet_directory() . '/templates-tools/seo-tools/seo/search-engine-simulator/index.php'; ?>
        </div>

      </div>
  </div>
</section>
</div>

<?php get_footer(); ?>