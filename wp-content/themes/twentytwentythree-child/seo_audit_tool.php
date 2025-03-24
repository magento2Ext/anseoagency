<?php
/**
 * Template Name: SEO Audit Tool
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
    <style>
        input {
            width: 300px;
            padding: 10px;
            margin: 10px;
        }
        button {
            padding: 10px 20px;
            cursor: pointer;
        }
        .screensite{
            margin-top: 20px;
            width: 90%;
            height: 500px;
            border: 1px solid #ddd;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        #screenshot {
            margin-top: 20px;
            display: inline-block;
            width: 100%;
            height: auto;
            overflow: hidden;
        }
        img {
            width: auto;
            height: auto;
            max-height: 100vh;  /* Ensure the image fits the view */
        }
    </style>
<?php
$title = get_field('title');
$left_content = get_field('left_content');
?>
<div class="tool-pages broken-tool seo-audit_tool_page">
<section class="mainHexaa customized_tools define_float">
	<div class="container">
		<div class="robt_main_otr">
			<div class="row">
				<div class="tool-inn-left">
				     <div id="screenshot"></div>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="featured-image">
							<?php the_post_thumbnail('full'); ?>
						</div>
					<?php endif; ?>
					</div>
				
				<div class="tool-inn-right">
					<p><a href="/">Home</a><span class="separator" data-rocket-lazy-bg-f7ea7388-8451-4d49-a0d7-f29b8a8fc31d="excluded"> - </span><span class="last"><?php the_title(); ?></span></p>
					 <div class="related-tools">
						 <?php if($title){ ?><h2><?php echo $title; ?></h2><?php } ?>
						 <?php if($left_content){ ?><?php echo $left_content; ?><?php } ?>
						 <div class="weburlform">
						     <input type="text" id="domain" placeholder="Enter your website URL or Domain">
                               <button class="webcheck" onclick="generateScreenshot()">Get SEO Report</button>
						 </div>
						 <div class="reportform" style="display:none"><?php echo do_shortcode('[contact-form-7 id="e77cdb7" title="Seo Audit"]'); ?></div>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="full_content">
			<?php the_content(); ?> 
			</div>
		</div>
	</div>
</section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        async function generateScreenshot() {
            let domain = document.getElementById("domain").value.trim();
            if (domain === "") {
                alert("Please enter a valid domain.");
                return;
            }

            // Ensure that the domain is formatted correctly
            if (!/^https?:\/\//i.test(domain)) {
                domain = "https://" + domain; // Add https:// if it's missing
            }

            let apiKey = "GWP4V3M-4QWM17R-NCM9EX3-3TCT033";  // Replace with your API key from ScreenshotAPI.net
            let apiUrl = `https://shot.screenshotapi.net/screenshot?token=${apiKey}&url=${domain}&output=json&full_page=true`;  // full_page=true

            try {
                // Fetch screenshot data from ScreenshotAPI.net
                let response = await fetch(apiUrl);
                let data = await response.json();

                console.log(data); // Debugging step: view API response

                // Check if the response is successful and contains a screenshot URL
                if (data && data.screenshot) {
                    let screenshotUrl = data.screenshot;
                    let screenshotDiv = document.getElementById("screenshot");

                    // Display the screenshot in the div
                    screenshotDiv.innerHTML = `<img src="${screenshotUrl}" alt="Screenshot of ${domain}">`;
                } else {
                    alert("Could not retrieve the screenshot. Please check the domain or try again later.");
                }
            } catch (error) {
                console.error("Error fetching screenshot:", error);
                alert("An error occurred while fetching the screenshot. Please try again later.");
            }
        }
    </script>
    <script>
$(document).ready(function(){
  $(".webcheck").click(function(){
    $(".weburlform").hide();
     $(".featured-image").hide();
     $("#screenshot").addClass("screensite");
      $(".reportform").show();
  });
});
</script>
<?php get_footer(); ?>