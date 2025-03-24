<?php $url = site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/security/wpa-encryption-key-generator/');  ?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer> </script>
    <style>
        .g-recaptcha.custom_captcha {
            float: left;
            width: 100%;
            margin-bottom: 20px;
            margin-top: 20px;
        }
    </style>

    
                             <div class="pass_gen_heading define_float">
                                <h2>Password Generator Tool</h2	>
                                <p>Length:</p>
                            </div>
                            <div class="pass_gen_form define_float">
                                <form action="javascript:void(0);" method="post" id="frmTest">
                                    <div class="form_pass_inner define_float">
                                        <div class="pass_radio_top define_float">
                                            <div class="pass_form_radio define_float">
                                                <input type="radio" id="1" name="frmpasswordgeneratorpredefinedlength" value="63"  />
                                                <label for="wp2_63"><span>WPA/WPA2 (63 Characters - Maximum)</span></label>
                                            </div>
                                            <div class="pass_form_radio define_float">
                                                <input type="radio" id="2" name="frmpasswordgeneratorpredefinedlength" value="32"    />
                                                <label for="wp2_32"><span>WPA/WPA2 (32 Characters - Intermediate)</span></label>
                                            </div>

                                            <div class="pass_form_radio define_float">
                                                <input type="radio" id="3" name="frmpasswordgeneratorpredefinedlength" value="8"    />
                                                <label for="wp2_8"><span>WPA/WPA2 (8 Characters - Minimum)</span></label>
                                            </div>

                                            <div class="pass_form_radio define_float">
                                                <input type="radio" id="4" name="frmpasswordgeneratorpredefinedlength" value="13"     />
                                                <label for="wep_13"><span>104/128 bit WEP (13 Characters)</span></label>
                                            </div>

                                            <div class="pass_form_radio define_float">
                                                <input type="radio" id="5" name="frmpasswordgeneratorpredefinedlength" value="5"     />
                                                <label for="wep_5"><span>40 bit WEP (5 Characters)</span></label>
                                            </div>

                                            <div class="pass_form_radio define_float">
                                                <input type="radio" id="6" name="frmpasswordgeneratorpredefinedlength" value="0" onclick="document.getElementById('6').focus()"    />
                                                <label for="custom_256"><span>Custom (1-256)</span></label>
                                                <div class="charcter-main">
                                                    <input type="number" name="custom_length" id="7" onclick="document.getElementById('value_radio').checked=true">
                                                    <p>characters</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pass_check_bottom define_float">
                                            <div class="pass_check_main define_float">
                                                <input type="checkbox" id="lower_case" name="lower_case" value="lower_case"  >
                                                <label> Lower Case</label>
                                                <p>a b c d e f g h i j k l m n o p q r s t u v w x y z</p>
                                            </div>
                                            <div class="pass_check_main define_float">
                                                <input type="checkbox" id="upper_case" name="upper_case" value="upper_case"   >
                                                <label>Upper Case</label>
                                                <p>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</p>
                                            </div>
                                            <div class="left-gen">
                                                <div class="pass_check_main define_float">
                                                    <input type="checkbox" id="numbers" name="numbers" value="numbers"   >
                                                    <label>Numbers</label>
                                                    <p>0 1 2 3 4 5 6 7 8 9</p>
                                                </div>
                                                <div class="pass_check_main define_float">
                                                    <input type="checkbox" id="special_symbol" name="special_symbol" value="special_symbols"    >
                                                    <label>Special Symbol</label>
                                                    <p>! " # & ' , : ; ? @</p>
                                                </div>
                                                <div class="pass_check_main define_float">
                                                    <input type="checkbox" id="basic_math" name="basic_math" value="basic_math"    >
                                                    <label>Basic Maths</label>
                                                    <p>+ - * / =</p>
                                                </div>
                                                <div class="pass_check_main define_float">
                                                    <input type="checkbox" id="standard_math" name="standard_math" value="standard_math"    >
                                                    <label>Standard Math</label>
                                                    <p>% \ | ^ ~ ( ) < > [ ] { }</p>
                                                </div>
                                                <div class="pass_check_main define_float">
                                                    <input type="checkbox" id="enhanced_math" name="enhanced_math" value="enhanced_math"    >
                                                    <label>Enhanced Math</label>
                                                    <p>¹ ² ³ ¼ ½ ¾ ± × ÷ µ °</p>
                                                </div>
                                                <div class="pass_check_main define_float">
                                                    <input type="checkbox" id="currency" name="currency" value="currency"    >
                                                    <label>Currency</label>
                                                    <p>$ ¢ £ ¤ ¥</p>
                                                </div>
                                            </div>
                                            <div class="right-gen">

                                                <div class="pass_check_main define_float">
                                                    <input type="checkbox" id="french_lower_case" name="french_lower_case" value="french_lower_case"    >
                                                    <label>French Lower Case</label>
                                                    <p>à â ä è é ê ë î ï ô œ ù û ü ÿ</p>
                                                </div>
                                                <div class="pass_check_main define_float">
                                                    <input type="checkbox" id="french_upper_case"  name="french_upper_case" value="french_upper_case"   >
                                                    <label>French Upper Case</label>
                                                    <p>À Â Ä È É Ê Ë Î Ï Ô Œ Ù Û Ü Ÿ</p>
                                                </div>
                                                <div class="pass_check_main define_float">
                                                    <input type="checkbox" id="french_miscellaneous"  name="french_miscellaneous" value="french_miscellaneous"   >
                                                    <label>French Miscellaneous</label>
                                                    <p>Ç ç « »</p>
                                                </div>
                                                <div class="pass_check_main define_float">
                                                    <input type="checkbox" id="german_lower_case"  name="german_lower_case" value="german_lower_case"    >
                                                    <label>German Lower Case</label>
                                                    <p>ä ö ü</p>
                                                </div>
                                                <div class="pass_check_main define_float">
                                                    <input type="checkbox" id="german_upper_case"  name="german_upper_case" value="german_upper_case"   >
                                                    <label>German Upper Case</label>
                                                    <p>Ä Ö Ü ß</p>
                                                </div>
                                                <div class="pass_check_main define_float">
                                                    <input type="checkbox" id="spanish_lower_case" name="spanish_lower_case" value="spanish_lower_case"    >
                                                    <label>Spanish Lower Case</label>
                                                    <p>á é í ó ú ñ ü</p>
                                                </div>
                                                <div class="pass_check_main define_float">
                                                    <input type="checkbox" id="spanish_upper_case"  name="spanish_upper_case" value="spanish_upper_case"   >
                                                    <label>Spanish Upper  Case</label>
                                                    <p>À É Í Ó Ú Ñ Ü</p>
                                                </div>
                                                <div class="pass_check_main define_float">
                                                    <input type="checkbox" id="spanish_miscellaneous"  name="spanish_miscellaneous" value="spanish_miscellaneous"     >
                                                    <label>Spanish Miscellaneous</label>
                                                    <p>¿ ¡ « »</p>
                                                </div>
                                            </div>
                                            <div class="g-recaptcha custom_captcha" data-sitekey="6LcflZoqAAAAAPx2upg7lrPvul--MUCpjimTffls"></div>

                                            <div class="pass_submit define_float">
                                                <input type="submit" value="GENERATE" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
             

    <script>
        jQuery('.pass_check_bottom input[type=checkbox]').change(function() {

            if(this.checked) {
                jQuery(this).removeClass('ischecked');
                jQuery(this).addClass('ischecked');
            }else{
                jQuery(this).removeClass('ischecked');
            }
        });
    </script>
    <script>
        jQuery('#frmTest').submit(function(){
            if(!jQuery('#frmTest input[type="checkbox"]').is(':checked')){
                alert("Please select at least one type of characters !!.");
                return false;
            }
            length=jQuery("input[name=frmpasswordgeneratorpredefinedlength]:checked").val();
            customlength=jQuery("input[name=custom_length]").val();
            lower_case=jQuery("input[name=lower_case]:checked").val();
            upper_case=jQuery("input[name=upper_case]:checked").val();
            numbers=jQuery("input[name=numbers]:checked").val();
            special_symbol=jQuery("input[name=special_symbol]:checked").val();
            basic_math=jQuery("input[name=basic_math]:checked").val();
            standard_math=jQuery("input[name=standard_math]:checked").val();
            enhanced_math=jQuery("input[name=enhanced_math]:checked").val();
            currency=jQuery("input[name=currency]:checked").val();
            french_lower_case=jQuery("input[name=french_lower_case]:checked").val();
            french_upper_case=jQuery("input[name=french_upper_case]:checked").val();
            french_miscellaneous=jQuery("input[name=french_miscellaneous]:checked").val();
            german_lower_case=jQuery("input[name=german_lower_case]:checked").val();
            german_upper_case=jQuery("input[name=german_upper_case]:checked").val();
            spanish_lower_case=jQuery("input[name=spanish_lower_case]:checked").val();
            spanish_upper_case=jQuery("input[name=spanish_upper_case]:checked").val();
            spanish_miscellaneous=jQuery("input[name=spanish_miscellaneous]:checked").val();

            jQuery.ajax({
                url:"<?php echo $url; ?>wpa_encryption.php",
                method:"post",
                data:{
                    length:length,
                    customlength:customlength,
                    lower_case:lower_case,
                    upper_case:upper_case,
                    numbers:numbers,
                    special_symbol:special_symbol,
                    basic_math:basic_math,
                    standard_math:standard_math,
                    enhanced_math:enhanced_math,
                    currency:currency,
                    french_lower_case:french_lower_case,
                    french_upper_case:french_upper_case,
                    french_miscellaneous:french_miscellaneous,
                    german_lower_case:german_lower_case,
                    german_upper_case:german_upper_case,
                    spanish_lower_case:spanish_lower_case,
                    spanish_upper_case:spanish_upper_case,
                    spanish_miscellaneous:spanish_miscellaneous,
                },

                success:function(data){
                    var array = data.split(',');

                    //console.log(array);

                    jQuery('.generated_keys').html("");
                    jQuery('.generated_keys').html("<h2>Generated Passwords</h2>")
                    for(var i=0;i<array.length; i++){
                        //console.log(array[i]);
                        jQuery('.generated_keys').append("<div class='srt_code'><span id='passcode"+i+"'>"+array[i]+"</span><button onclick='copyCode(\"passcode"+i+"\")'>Copy</button></div>");
                    }

                }
            });
        });
        jQuery('input[name="frmpasswordgeneratorpredefinedlength"]').change(function () {
            if(jQuery("#6").is(':checked')) {
                jQuery('#7').attr('required', true);
            } else {
                jQuery('#7').removeAttr('required');
            }
        });
    </script>
    <script>
        function copyCode(id) {
            // alert(id);
            var $temp = jQuery("<input>");
            jQuery("body").append($temp);
            $temp.val(jQuery("#"+id).text()).select();
            document.execCommand("copy");
            alert("Text Copied!");
            $temp.remove();
        }
    </script>
    <script>

        document.getElementById("frmTest").addEventListener("submit",function(evt)
        {

            var response = grecaptcha.getResponse();
            if(response.length == 0)
            {
                //reCaptcha not verified
                alert("please verify you are human!");
                evt.preventDefault();
                return false;
            }
            //captcha verified
            //do the rest of your validations here

        });

    </script>

