<?php $url = site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/html-css/color-picker');?>
<link rel="stylesheet" id="site_main-css" href="<?php echo $url; ?>/main.css" type="text/css" media="all">
   
                    <div class="app_controls col-xl-5 col-lg-6 col-sm-12 broken_left">
                        <div class="customized_right_inner">
                            <img src="/anseo_agency/wp/wp-content/uploads/2025/02/color_picker.webp" alt="">
                            <h2> Color Picker </h2>

                            <div id="colors_showcase" class="grid_3 color-resutls" style="display:none;">
                                <ul id="main_selcted_color"><li  style="background: rgb(145, 0, 0) !important;"></li><li style="background: rgb(0, 145, 145) !important;"></li></ul>
                            </div>
                            <div class="color_selector">
                                <div class="color_palette">
                                    <div id="color_picker" style="display: none;"></div>
                                </div>
                                <div class="color_codes">
                                    <span class="main_color" style="background: rgb(145, 0, 0) !important;"><input type="text" value="#1F85DE" maxlength="7"></span>
                                    <a class="share_link" href="#"></a>
                                    <ul id="color_codes_list">
                                        <li id="hcode">H: <input type="text" class="value" value="0" id="h" maxlength="6"></li>
                                        <li id="scode">S: <input type="text" class="value" value="0" id="s" maxlength="6"></li>
                                        <li id="vcode">B: <input type="text" class="value" value="0" id="v" maxlength="6"></li>
                                        <li id="rcode">R: <input type="text" class="value" value="0" id="r" maxlength="6"></li>
                                        <li id="gcode">G: <input type="text" class="value" value="0" id="g" maxlength="6"></li>
                                        <li id="bcode">B: <input type="text" class="value" value="0" id="b" maxlength="6"></li>
                                    </ul>

                                    <!--button onclick="myFunction()">Copy</button-->
                                </div>
                            </div>
                            <div class="color_picker_action">
                                <a onclick="myFunction()" class="btn_save" href="javascript:void(0)">COPY</a>
                            </div>
                        </div>
                    </div>
           

    <script>
        function myFunction() {
            /* Get the text field */
            var copyText = document.getElementById("main_selcted_color").firstChild.innerHTML;
            // alert(copyText);
            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText);

            /* Alert the copied text */
            alert("Color copied to clipboard: " + copyText);
        }
    </script>

    <script src="<?php echo $url; ?>/jquery.tools.min.js"></script>
    <link rel="stylesheet" id="spectrum-styles-css" href="<?php echo $url; ?>/spectrum.css" type="text/css" media="screen">
    <link rel="stylesheet" id="color-picker-styles-css" href="<?php echo $url; ?>/color-picker.css" type="text/css" media="screen">


    <script type="text/javascript" src="<?php echo $url; ?>/main.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/js.cookie.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/colorUtil.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/spectrum.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/colors-showcase.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/color-picker.js"></script>