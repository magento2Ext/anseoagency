<?php $url = site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/seo/traffic-checker/');  ?>
   
                    <div class="register-form customized_right_inner">
                        <img src="/anseo_agency/wp/wp-content/uploads/2025/02/traffic_checker.webp" alt="">
                        <div class="flex-grid col-align customized_right_inner wind_resizer">
                            <img src="/anseo_agency/wp/website-traffic-checker//anseo_agency/wp/website-traffic-checker/" alt="">
                            <div class="register-form stackedForm">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="url" placeholder="domain.com" size="40"  required />
                                    <button class="btnSubmit" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="stat_div"></div>
             


    <script>
        var ajaxurl = '<?php echo $url.'/ajax.php'; ?>';

        jQuery(document).ready(function(){
            jQuery('button[type="submit"]').click(function(e){
                var url=jQuery('input[name="url"]').val();

                jQuery.ajax({
                    url:ajaxurl,
                    type:'post',
                    data:{'action':'func_phpCode','url':url},
                    success:function(data){
//console.log(data);
                        jQuery('#stat_div').html(data);
                        //$('input[name="url"]').val(null);
                    }

                });
            });

        });
    </script>