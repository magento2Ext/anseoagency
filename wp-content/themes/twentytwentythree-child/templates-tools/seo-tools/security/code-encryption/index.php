<?php
$url = site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/security/code-encryption/'); 
?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

                        <div class="contain_box">
                            <div class="form-group">
                                <h2>Enter Your Code:</h2>
                                <textarea type="text" class="form-control" id="code" placeholder="Enter Your Code" name="html" rows="20" required=""></textarea>
                            </div>
                            <div class="interact_source">
                                <button type="submit"  class="btn btn-primary encoding1 custom-btn" align="right" >Encrypt</button>
                                <button onclick="myFunction()" align="right" class="btn btn-primary btn-outline-danger">Encryption Copy</button>
                            </div>
                        </div>
                    </div>
                </div>
     
   


<script>
    jQuery(document).ready(function(){
        jQuery('.encoding1').click(function(){

            var html= jQuery('textarea[name="html"]').val();
            if(html=='' || html==' '){
                alert('Please Enter Your Code..!');
                return;
            }
            var kl="<HTML>"+"\n"+
                "<HEAD>"+"\n"+
                "<SCRIPT>"+"\n"+
                'document.write(unescape("'+escape(html)+'"))'+"\n"+
                "</"+"SCRIPT>"+"\n"+
                "</HEAD>"+"\n"+
                "</HTML>";
            jQuery('textarea[name="html"]').val(kl);
            // $('.encoding1').attr('disabled', 'disabled');

        });

    });



    function myFunction() {
        /* Get the text field */
        var copyText = document.getElementById("code");

        /* Select the text field */

        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.value);

        /* Alert the copied text */
        alert("Copied the text: ");
    }

</script>