<?php $url = site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/html-css/css-val/');?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="<?php echo $url; ?>jquery-linedtextarea.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="<?php echo $url; ?>jquery-linedtextarea.css" type="text/css" rel="stylesheet" />
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

                    
                                    <form method="post">
                                        <div class="row" >
                                            <div class="col-md-12" align="center" >
                                                <h2>CSS VALIDATOR</h2>
                                                <textarea class="lined" cols="100" rows="20" id="code"  name="html" value=""><?php if(!empty($_POST['html'])){ if (isset($_POST['clear'])){echo "";} else{echo $_POST['html'];} } ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="cmn_tool_btn_grp">
                                                <div class="col-md-12" align="center" >
                                                    <input type="button" name="validateCss" id="validateCss" class="button  validate custom-outline-btn" align="center" value="Validate Code"/>
                                                    <input type="button" name="beutifyCss" id="beutifyCss"  class="button button2 format custom-outline-btn" align="center" value="Beautify Code" />
                                                    <input type="button" name="clear" id ="clear"  class="button button3 reset custom-btn" align="center" value="Clear"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-12" >
                                                <div class="g-recaptcha" id="captcha" data-sitekey="6LcOm_8qAAAAAEOYGDHe-vJmNZfyQq4R-g3NfxeQ">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="well well-sm data_well"  style="height: auto; overflow-y: auto; display:none;">
                            <table id="customers">
                                <thead>
                                <tr>
                                    <th>Line</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Browser</th>
                                </tr>
                                </thead>
                                <tbody  id="err">
                                <?php
                                if(!empty($_POST['html'])){
                                    if(isset($result)){
                                        foreach($result as $re){
                                            foreach($re as $a){
                                                ?>
                                                <tr>
                                                    <td><?php  echo $a['line'];?></td>
                                                    <td><?php  echo $a['type'];?></td>
                                                    <td><?php  echo $a['message'].'<br>';?> </td>
                                                    <td><?php  echo 'all';?></td>
                                                </tr>

                                            <?php } } } }
                                else { ?>
                                    <tr class="empty_result">
                                        <td></td>
                                        <td></td>
                                        <td> </td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

<?php

if (!empty($_POST['html'])){
    $css=$_POST['html'];

    if(isset($_POST['validateCss'])){

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://validator.w3.org/nu/?out=json",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $css,
            CURLOPT_HTTPHEADER => array(
                "User-Agent: Any User Agent",
                "Cache-Control: no-cache",
                "Content-type: text/css",
                "charset: utf-8"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            //handle error here
            die('sorry etc...');
        }
        $resJson = json_decode($response, true);
    }
}
?>
    <script>
        jQuery('.format').click(function(e){
            e.preventDefault();
            var v = grecaptcha.getResponse();
            if(v.length == 0)
            {alert(' Please verify that you are not a robot');
                document.getElementById('beutifyCss').innerhtml="Please verify that you are not a robot";
                return false;
            }

            var html1 = jQuery('textarea[name="html"]').val();
            // console.log(html1);
            jQuery.ajax({
                url:"<?php echo $url; ?>css_beautify.php",
                method:"POST",
                data:{html:html1,submit:"cssValidateCode"},
                // dataType:"json",
                success:function(data){
                    console.log(data);
                    jQuery('#code').val(null);
                    jQuery('#code').val(data);

                }

            });

        });

        jQuery('#validateCss').click(function(e){

            var v = grecaptcha.getResponse();
            if(v.length == 0)
            {
                alert(' Please verify that you are not a robot');
                document.getElementById('validateCss').innerhtml="Please verify that you are not a robot";
                return false;
            }
            else
            {
                var html1 = jQuery('textarea[name="html"]').val();
                // console.log(html1);
              
                document.getElementById('validateCss').innerhtml="";
                return true;
            }
        });


        jQuery('.reset').click(function(){

            document.getElementById('clear').innerhtml="";
            return true;

        });

    </script>