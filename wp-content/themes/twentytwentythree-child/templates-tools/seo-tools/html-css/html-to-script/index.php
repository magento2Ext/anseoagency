<?php $url = site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/html-css/html-to-script/');?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


                    <div class="col-xl-5 col-lg-6 col-sm-12 broken_left">
                        <div class="register-form stackedForm customized_right_inner">
                            <img src="/anseo_agency/wp/wp-content/uploads/2025/02/stacked_form-1.png" alt="">
                            <div class="form-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" id="code" placeholder="Type or paste your content here. Privacy of Data: Text-Filter.com ! Doesn't save or share your Text/Data. This tool is built-with and functions-in Client Side JavaScripting, so only your computer will see or process your data input/output." name="html" rows="25"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="customStackedBtns">
                                <ul class="list-unstyled firstUl">

                                    <li><button type="submit" class="btn btn-info htmltophp button custom-outline-btn" value="HTML TO PHP">HTML TO PHP</button></li>
                                    <li><button type="submit" class="btn btn-success htmltojs button custom-outline-btn" value="HTML TO JAVA SCRIPT">HTML TO <br>JAVA SCRIPT</button></li>
                                    <li><button type="submit" class="btn btn-danger htmltoasp button custom-outline-btn" value="HTML TO ASP">HTML TO ASP</button></li>
                                </ul>
                                <ul class="list-unstyled secondUl">
                                    <li><input type="reset" class="btn btn-warning reset button custom-btn" value="Reset"/></li>
                                    <li><input type="button" class="btn btn-warning all_select button custom-btn" value="All Select" onclick="myFunction()"/></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                

    <script>
        jQuery(document).ready(function(){
            var ajaxurl = '<?php echo $url; ?>'+"ajax.php";
            jQuery('.htmltophp').click(function(){
                var html1 = jQuery('textarea[name="html"]').val();
                jQuery.ajax({
                    url:ajaxurl,
                    method:"POST",
                    data:{'html':html1,'submit':"php"},
                    // dataType:"json",
                    success:function(data){
                        console.log(data);
                        jQuery('#code').val(data);
                        // $('input[type="submit"]').attr('disabled', 'disabled');
                    }

                });

            });
            jQuery('.htmltojs').click(function(){
                var html1 = jQuery('textarea[name="html"]').val();
                jQuery.ajax({
                    url:ajaxurl,
                    method:"POST",
                    data:{'action':'func_codephp_convert','html':html1,'submit':"js"},
                    // dataType:"json",
                    success:function(data){
                        // console.log(data);
                        jQuery('#code').val(data);
                        // $('input[type="submit"]').attr('disabled', 'disabled');
                    }

                });

            });


            jQuery('.htmltoasp').click(function(){
                var html1 = jQuery('textarea[name="html"]').val();
                jQuery.ajax({
                    url:ajaxurl,
                    method:"POST",
                    data:{'action':'func_codephp_convert','html':html1,'submit':"asp"},
                    // dataType:"json",
                    success:function(data){
                        console.log(data);
                        jQuery('#code').val(data);
                        //$('input[type="submit"]').attr('disabled', 'disabled');
                    }

                });

            });


            jQuery('.reset').click(function(){
                jQuery('textarea').val(null);
            });

            jQuery('.info').click(function(){
                jQuery('textarea').val("You are free to distribute and modify this file, as long as you do not remove this copyright notice and clearly label modified versions as being modified.");
            });

        });


        function myFunction() {
            document.getElementById("code").select();
        }

    </script>
