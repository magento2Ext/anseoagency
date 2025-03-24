<?php $url = site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/html-css/broken-link-checker/'); ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  
                    <div class="col-xl-5 col-lg-6 col-sm-12 broken_left">
                        <div class="customized_right_inner  bg_with_border">
                            <img src="/anseo_agency/wp/wp-content/uploads/2025/02/Broken-Link-Checker.png" alt="">
                            <h2 style="text-align:center">Broken Link Checker </h2>
                            <h6 style="text-align:center">Enter your URL (e.g. www.example.com)</h6>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex justify-content-center h-100">
                                        <form id="inputForm" action="javascript:void(0);" method="post">
                                            <div class="searchbar">
                                                <input class="search_input" type="text" name="myurl" placeholder="Enter URL..." required="" />
                                                <button type="submit" class="search_icon"><img src="/anseo_agency/wp/wp-content/uploads/2025/02/search-icon.png" alt="search"></button>
                                            </div>

                                            <div class="captcha_form define_float">
                                                <div class="g-recaptcha" id="captcha" data-callback="callback" data-sitekey="6LcflZoqAAAAAPx2upg7lrPvul--MUCpjimTffls
">

                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row broken-result">
                            <div class="col-md-12 text-center show">
                                <div class="loader" style="display:none;">
                                    <img src="<?php echo $url; ?>/loading.gif"
                                         style="width: 30px;">
                                </div>
                                <div class="show1"></div>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="total_link">
                                    Processed <span class="total">0</span> weblink , found <span class="broken">0</span>
                                    broken links
                                </div>
                            </div>
                            <div class="col-md-12">
                                <table class="table table-striped table-bordered table1 table-responsive">
                                    <tr>
                                        <th>Broken Link</th>
                                        <th>Status</th>
                                    </tr>
                                    <tbody id="show1"></tbody>
                                </table>
                            </div>

                        </div>
                    </div>          

    <script>

        function callback(response) {
            if (grecaptcha && grecaptcha.getResponse().length > 0) {
                //the recaptcha is checked
                // Do what you want here
                return true;
            }
            else {
                return false;
            }
        }

        jQuery(document).ready(function () {
            jQuery('.table1').hide();
            jQuery('.loader').hide();
            jQuery('.table').hide();
            jQuery('.total_link').hide();

            //var captch=jQuery('#captcha').val();
            //alert(callback());


            jQuery("#inputForm").on('submit', function (e) { 
                e.preventDefault();

                if (callback() == true) {
                    jQuery('.table').hide();
                    jQuery(".total").text(0);
                    jQuery(".broken").text(0);
                    jQuery('.show1').html('');
                    jQuery('input[type="hidden"]').val(null);
                    var url = jQuery('.search_input').val();
                    if (url == '' || url == ' ') {
                        alert('Please enter Url');
                        return;
                    }
                    jQuery('#show1').html('');
                    jQuery('.loader').show();
                    jQuery('.total_link').show();
                    jQuery('.search_icon').attr('disabled', 'disabled');

                    jQuery.ajax({
                        url: "<?php echo site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/html-css/broken-link-checker/code.php'); ?>",
                        method: "post",
                        data: { myurl: url },
                        dataType: "json",
                        success: function (data) {
                            console.log(data);

                            if (data.da == 'error') {
                                jQuery('.total_link').hide();
                                jQuery('.loader').hide();
                                jQuery('.table').hide();
                                jQuery('.search_icon').removeAttr('disabled');
                                //alert('please Enter valid url.!');
                                return;
                            }
                            jQuery('.table').show();
                            var html;
                            var data1 = [];
                            var data2 = [];
                            for (var i = 0; i < data.length; i++) {
                                data1[i] = data[i][1];
                                data2[i] = data[i][2];
                            }
                            var counter = 0;
                            var addRow = function (elem) {
                                if (counter < data1.length) {

                                    jQuery("table #show1").append("<tr><td>" + data1[counter] + "</td><td>" + data2[counter] + "</td></tr>");
                                    jQuery(".broken").text(counter + 1);
                                    counter += 1;
                                } else {
                                    clearInterval(timer);
                                }
                            }
                            var timer = setInterval(addRow, 1000);
                        }
                    });
                } else {
                    //jQuery( "#inputForm" ).prop( "disabled", false );
                    alert("Please verify you are human !");
                }
            });


        });
    </script>
