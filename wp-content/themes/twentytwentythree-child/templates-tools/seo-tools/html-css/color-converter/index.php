<?php $url = site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/html-css/color-converter'); ?>
<style>
    #color_output{
        background: rgb(0, 128, 0);
        display: inline-block;
        width: 40px;
        height: 40px;
        border-radius: 8px;
        top: 1px;
        right: 1px;
        border: 5px solid rgb(255, 255, 255);
        box-shadow: rgb(195, 198, 218) 0px 0px 0px 1px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script type='text/javascript' src="<?php echo $url; ?>/tinycolor.js"></script>
    <script type='text/javascript'>
        function colorChange(color) {
            var tiny = tinycolor(color);

            jQuery("#hex-output").text(tiny.toHexString());
            jQuery("#rgb-output").text(tiny.toRgbString());
            jQuery("#float-output").text(tiny.toFloatString());
            jQuery("#hsl-output").text(tiny.toHslString());
            jQuery("#hsv-output").text(tiny.toHsvString());

            jQuery("#color_output").css("background",
                tiny.toHexString()
            );
        }

        jQuery(function () {
            jQuery("#button").bind("click", function () {
                var str1 = jQuery('#color').val();
                var str2 = "rgb";
                var str8 = "RGB";
                var str3="3f";
                var str10="3F";
                var str4="hsl";
                var str5="hsv";
                var str6="#";
                var str7="HSV";
                var str9="HSL";
                if(str1.indexOf(str2) != -1 || str1.indexOf(str8) != -1){
                    colorChange(jQuery('#color').val());
                }else if(str1.indexOf(str3) != -1){
                    colorChange(jQuery('#color').val());
                }else if(str1.indexOf(str4) != -1){
                    colorChange(jQuery('#color').val());
                }else if(str1.indexOf(str5) != -1){
                    colorChange(jQuery('#color').val());
                }else if(str1.indexOf(str7) != -1){
                    colorChange(jQuery('#color').val());
                }else if(str1.indexOf(str9) != -1){
                    colorChange(jQuery('#color').val());
                }else if(str1.indexOf(str10) != -1){
                    colorChange(jQuery('#color').val());
                }
                else  if(str1.indexOf(str6) != -1){

                    if((jQuery('#color').val().length) ==4 || (jQuery('#color').val().length)==7){

                        colorChange(jQuery('#color').val());
                    }else{
                        alert("The color added is not valid..!");
                    }

                }else if((jQuery('#color').val().length) >=3  && (jQuery('#color').val().length)<=6){

                    colorChange(jQuery('#color').val());
                }else{
                    alert("The color added is not valid..gh!");
                }

            });
            colorChange({
                r: 0,
                g: 0,
                b: 0
            });
        });
    </script>


   

                    <div class="col-xl-5 col-lg-6 col-sm-12 broken_left">
                        <div class="customized_right_inner color_convert">
                            <img src="/anseo_agency/wp/wp-content/uploads/2025/02/Illustration.svg" alt="">
                            <h2 align="center">Color Converter Tool</h2>
                            <div class="form_outer define_float">
                                <div class="form_container">
                                    <div class="form_inner">
                                        <div class="datagrid">
                                            <table id="color-input-table">
                                                <tbody>
                                                <tr>
                                                    <td class="data-value data-input">
                                                        <div id='color-input1'>
                                                            <input type="text" placeholder="Write Your Color Code Here" id='color' required=""  minlength="3" />
                                                        </div>
                                                        <br>
                                                        <div id='color-input'>
                                                            <input type="button" class="btn btn-primary" id='button' value="Submit" style="height: 35px;width: 100%;font-size: 15px;" />

                                                        </div>
                                                        <span id="color_output"> </span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table class="color_stat">
                                                <tbody>
                                                <tr class="alt">
                                                    <th>Hex</th>
                                                    <td>
                                                        <pre id='hex-output'></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>RGB</th>
                                                    <td>
                                                        <pre id='rgb-output'></pre>
                                                    </td>
                                                </tr>
                                                <tr class="alt">
                                                    <th>Float</th>
                                                    <td>
                                                        <pre id='float-output'></pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>HSL</th>
                                                    <td>
                                                        <pre id='hsl-output'></pre>
                                                    </td>
                                                </tr>
                                                <tr class="alt">
                                                    <th>HSV</th>
                                                    <td>
                                                        <pre id='hsv-output'></pre>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
           
