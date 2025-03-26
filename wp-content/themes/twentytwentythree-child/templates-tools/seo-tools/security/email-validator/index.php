<?php $url = site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/security/email-validator/');  ?>
 <script src="https://www.google.com/recaptcha/api.js" async defer> </script>
<style>
.g-recaptcha.custom_captcha {
    float: left;
    width: 100%;
    margin-bottom: 20px;
  margin-top: 20px;
}
</style>
<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['email'])){

$api_key = '';
$email = $_POST['email'];

$url = 'https://api.zerobounce.net/v2/validate?api_key='.$api_key.'&email='.urlencode($email);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSLVERSION, 6);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
curl_setopt($ch, CURLOPT_TIMEOUT, 150);
$response = curl_exec($ch);
curl_close($ch);
$result = json_decode($response, true);

    }
}
?>


                <h2>Enter Email</h2>
                <form action="" method="post" id="form">
                  <div class="form-group main_input">
                    <input type="text" name="email" class="form-control" placeholder="Enter Email Address" pattern="[a-zA-z0-9._%+-]+@[a-zA-z0-9.-]+\.[a-z]{2,4}$" required>
                  </div>

                  <div class="g-recaptcha custom_captcha" data-sitekey="6LcOm_8qAAAAAEOYGDHe-vJmNZfyQq4R-g3NfxeQ"></div>
                  <div class="form-group">
                    <button class="btn btn-info btn-block custom-btn" type="submit" name="submit">Submit</button>
                  </div>

                </form>
              </div>


        </div>
 
        <div class="email_valid_result-outr row">
          <div class="col-lg-12">

            <?php
                                if(isset($_POST['submit'])){
                                    if(!empty($_POST['email'])){
                     ?>
            <div class="email_table_custom email_valid_result row">
            <table>
              <tbody>
                <tr>
                  <th>Email</th>
                  <th>Status</th>
                </tr>

                <?php
                // Check if email is valid and exist
                                    if($result['status'] =='valid'||$result['sub_status'] =='role_based'){
                  echo "<tr class='valid'>";
                                  echo "  <td> $email</td>";
                   echo "<td><span class='status_bar'></span><span class='status_badge'>Verified</span></td>";

                   echo "</tr>";
                   }else{
                    echo "<tr class='not_valid'>";
                                  echo "  <td> $email</td>";
                   echo "<td><span class='status_bar'></span><span class='status_badge'>Not valid</span></td>";

                   echo "</tr>";
                                    }

                ?>
              </tbody>
            </table>
            </div>
          </div>
                <?php }} ?>
        </div>
  
    <div class="related-tools">
       <h2>Related Tools</h2>
      
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/source-encrypter'; ?>" target="_blank">Source Code Encrypter</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/ip-address-checker'; ?>" target="_blank">IP Address Checker</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/network-utilities'; ?>" target="_blank">Network Utilities</a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/server-type-checker'; ?>" target="_blank">Survey Type Survey </a>
       <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/wpa-encryption-key-generator'; ?>" target="_blank">WPA encryption Key Generator</a>
       
      </div> 




<script>

document.getElementById("form").addEventListener("submit",function(evt)
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