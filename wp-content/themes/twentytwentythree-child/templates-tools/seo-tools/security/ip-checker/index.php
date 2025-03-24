<?php
$url = site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/security/ip-checker/'); 

if(isset($_POST['save'])){
    $ip_address1=explode('//',$_POST['ip_address']);
    if($ip_address1[0]=='https' || $ip_address1[0]=='http'){
        $ipaddress=$ip_address1[1];
    }else{
        $ipaddress=$_POST['ip_address'];
    }

    $domin1=str_replace('https://','', $ipaddress);
    $domin2=str_replace('http://','', $domin1);
    $userIP=str_replace('/','', $domin2);

    // your ip address here
    $data = @unserialize(file_get_contents('http://ip-api.com/php/'.$userIP));
}
?>
    <script src="https://www.google.com/recaptcha/api.js" async defer> </script>
    <style>
        .g-recaptcha.custom_captcha {
            float: left;
            width: 100%;
            margin-bottom: 20px;
            margin-top: 20px;
        }
    </style>
                                        <div class="bg_with_border">
                                        <?php echo get_the_post_thumbnail( get_the_ID());?>
                                        <h2 align="center">IP Address</h2>
                                        <form  action="" method="post" id="validate_form">
                                            <div class="form-content">
                                                <div class="form-group">
                                                    <input type="text" name="ip_address" class="form-control" placeholder="Enter IP Address">
                                                </div>

                                                <div class="g-recaptcha custom_captcha" data-sitekey="6LcflZoqAAAAAPx2upg7lrPvul--MUCpjimTffls"></div>
                                                <input type="submit" name="save" class="btnSubmit custom-btn" value="Submit"/>
                                            </div>
                                        </form>
                                        </div>
                        <?php if(isset($data)){ ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped custom_table-border" style="width:100%;">
                                        <tbody>

                                        <?php
                                        if(isset($_POST['save'])){
                                            if(!filter_var($userIP, FILTER_VALIDATE_IP)) {
                                                echo "Please enter valid IP address!";die;
                                            }
                                        }else{
                                            if(!filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP)) {
                                                echo "Please enter  valid IP address!";die;
                                            }
                                        }
                                        ?>
                                        <tr>
                                            <th style="text-transform: uppercase;">IP</th>

                                            <td><?php echo $data['query']; ?></td>
                                        </tr>
                                        <tr>
                                            <th style="text-transform: uppercase;">COUNTRY CODE</th>

                                            <td><?php echo $data['countryCode']; ?></td>
                                        </tr>

                                        <tr>
                                            <th style="text-transform: uppercase;">COUNTRY NAME</th>

                                            <td><?php echo $data['country']; ?></td>
                                        </tr>

                                        <tr>
                                            <th style="text-transform: uppercase;">REGION CODE</th>

                                            <td><?php echo $data['region']; ?></td>
                                        </tr>

                                        <tr>
                                            <th style="text-transform: uppercase;">REGION NAME</th>

                                            <td><?php echo $data['regionName']; ?></td>
                                        </tr>

                                        <tr>
                                            <th style="text-transform: uppercase;">CITY</th>

                                            <td><?php echo $data['city']; ?></td>
                                        </tr>
                                        <tr>
                                            <th style="text-transform: uppercase;">ZIP CODE	  </th>

                                            <td><?php echo $data['zip']; ?></td>
                                        </tr>
                                        <tr>
                                            <th style="text-transform: uppercase;">TIME ZONE</th>

                                            <td><?php echo $data['timezone']; ?></td>
                                        </tr>
                                        <tr>
                                            <th style="text-transform: uppercase;">LATITUDE</th>

                                            <td><?php echo $data['lat']; ?></td>
                                        </tr>
                                        <tr>
                                            <th style="text-transform: uppercase;">LONGITUDE</th>

                                            <td><?php echo $data['lon']; ?></td>
                                        </tr>




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php }

                        ?>
                    
    <script>

        document.getElementById("validate_form").addEventListener("submit",function(evt)
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