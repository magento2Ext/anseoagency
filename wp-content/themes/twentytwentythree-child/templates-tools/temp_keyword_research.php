<?php
/**
 * Template Name: Keyword Research
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package pss
 */

get_header();
?>
 <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/DataTables/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/DataTables/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/DataTables/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/Site.css" rel="stylesheet" />
    <script src="https://cdn.tiny.cloud/1/kb158zp9hqea1uc399j8poffc0o9z8afdj438uhr8lkg6qxj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<div class="tool-pages  tool-inner-page keyword-page">
<section class="mainHexaa">
<div class="container">
			<div class="robt_main_otr">
			<div class="robt_con  define_float customized_tools">
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
<!-- 			<div class="register-form stackedForm">
				<div class="container">
					<div class="row panel-keyword">
							<a id="programatically" href="" class="btn btn-primary" download="date.txt">Download</a>
                <div class="col-xs-12 keyword_main" align="center">
                	<div id="show">
                	<span id="span">0</span><span>:</span><span id="span1">0</span>
                </div>
                    <textarea id="search" type="text" class="form-control search" placeholder="Enter the keyword" aria-describedby="startjob" style="height: 300px;width: 500px; font-size: 10px;font-weight: bold;;"></textarea>
                    <table></table>
                </div>
                <div class="col-xs-12 text-center keyword_btn">
                    <label class="radio-inline">
                        <input type="radio" name="MethodOptions" id="Method1" value="1" checked style="display: none">  Method 1 (a to z) 
                    </label>
                    <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#MethodModal1">?</button> 
                    <label class="radio-inline">
                        <input type="radio" name="MethodOptions" id="Method2" value="2" style="display: none">  Method 2 (aa to zz)

                    </label>
                    <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#MethodModal2">?</button> 
                </div>
                <div class="col-xs-12 text-center keyword_btn">
                    <div role="group" class="btn-group">
                        <button role="group" id="startjob" class="btn btn-success" type="button">Find Keywords</button>
                    </div>
                </div>
                 <div class="col-xs-12 positive_filter" >
                    <textarea id="filter_positive" type="text" class="form-control" placeholder="Positive Filter  " aria-describedby="startjob" ></textarea>
                    <table></table>
                </div>
                 <div class="col-xs-12 positive_filter " >
                    <textarea id="filter_negative" type="text" class="form-control" placeholder="Negative Filter" aria-describedby="startjob" ></textarea>
                    <table></table>
                </div>
				
				
					</div>
				</div>
				<div class="container body-content">
        <hr />
        
    </div>
			</div> -->

		</div>
</div>
</section>
                        </div>

 <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/DataTables/jquery.dataTables.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/DataTables/dataTables.buttons.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/DataTables/buttons.html5.js"></script>    
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.keywords.finder.js"></script>
    <script type="text/javascript">
    	 jQuery('#show').hide();

        window.setInterval(jQuery().DoJob, 750);

        jQuery("#startjob").on("click", function () {
           
          var search= jQuery('#search').val();
          jQuery('#programatically').attr('download', search+'.txt')
          if(search!=''){
             jQuery(".hidden").removeClass("hidden");
            if (jQuery("input[name=MethodOptions]:checked").val() == 1) {
                jQuery().StartJobMethod1();
            }
            else {
              
            }
          }else{
            alert("Please Enter input Box..!");
          }
        });
        jQuery(".select-lang li").on("click", function () {
            jQuery("#lang").html(jQuery(this).html());
            jQuery("#gg-lang").val(jQuery(this).data("lang"));
        });

    </script>
      <script>

jQuery("a#programatically").click(function(){
	var text=jQuery('#search').val();
    var now = new Date().toString();
    this.href = "data:text/plain;charset=UTF-8,"  + text+"\n";
});;

jQuery('textarea').focus(function() {
    var theVal = jQuery(this).val();
    jQuery(this).val(theVal);
});


  </script>
  
<?php get_footer(); ?>