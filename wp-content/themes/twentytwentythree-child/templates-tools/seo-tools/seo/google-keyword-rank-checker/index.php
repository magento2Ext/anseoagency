<?php $url = site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/seo/google-keyword-rank-checker/');

if (isset($_POST["domain"])){

    function get_domain($Url)
    {
        $url2 = trim($Url);
        $url=explode("://",$Url);

        if($url[0]=='http' || $url[0]=='https'){
            $url1=$Url;
        }else{
            $url1="https://".$url[0];
        }
        $ch = curl_init($url1);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_TIMEOUT,10);
        $output = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if($url2=='' ){
            return false;
        }elseif($httpcode==0 || $httpcode==404|| $httpcode==403){
            return false;
        }else{
            $pieces = parse_url($url1);
            $domain = isset($pieces['host']) ? $pieces['host'] : $pieces['path'];
            if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
                return $regs['domain'];
            }

        }

    }
    $domain=get_domain($_POST['domain']);
}else{
    $domain='';
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

    <section class="mainHexaa customized_tools custom_keyword_rank   bg_with_border">
        <div class="container">
            <div class="robt_main_otr ">

                <div class="row">
                    <img src="/anseo_agency/wp/wp-content/uploads/2025/02/css_valid-1.webp" alt="">
                    <div class="col-xl-5 col-lg-6 col-sm-12 broken_left">
                        <div class="register-form customized_right_inner">
                            <div class="form">
                                <div class="note">
                                    <?php

                                    if(isset($_REQUEST['query'])){
                                        $query= $_REQUEST['query'];
                                    } else {
                                        $query= '';
                                    }
                                    ?>
                                </div>
                                <form action="" id="validate_form" method="POST">
                                    <div class="form-content">


                                        <div class="form-group">
                                            <textarea type="text" class="form-control"  name="query"  placeholder="Enter up to ten keywords, one per line." size="40"><?php echo $query; ?></textarea>
                                            <!--  <input type="text" class="form-control"  name="query"  placeholder="keyword 1, keyword 2, keyword 3" size="40" value="<?php echo $query; ?>" required /> -->
                                        </div>
                                        <div class="form-group domain_input">

                                            <input type="text" class="form-control" name="domain" placeholder="domain.com" size="40" value="<?php echo $domain; ?>" required/>
                                            <?php if(isset($_POST['submit'])){if($domain==false){echo "<span style='color: red;'>Please enter valid url<span>";}}?>
                                        </div>

                                    </div>
                                    <input type="hidden" name="gl" value="us" id="location">
                                    <input type="hidden" name="hl" value="en">
                                    <input type="hidden" name="pages" value="100">

                            </div>
                            <div class="g-recaptcha custom_captcha" data-sitekey="6LcflZoqAAAAAPx2upg7lrPvul--MUCpjimTffls"></div>
                            <div class="form-group submission">
                                <button name="submit" class="btnSubmit" type="submit">Submit</button>


                            </div>
                            </form>
                        </div>

                      
                    </div>
                </div>

            </div><!-- #primary -->
        </div>
    </section>
  <?php


                        $PublicIP = $_SERVER['REMOTE_ADDR'];

                        $url="http://ipinfo.io/".$PublicIP."/geo";
                        $json     = file_get_contents($url);
                        //    echo "<pre>";
                        // print_r($json);die;







                        if($domain!=false){
                            if (isset($_POST["domain"]) && isset($_POST["query"])){

                                $GOOGLE_API_KEY = 'AIzaSyBw1mBTbCU2WOHIwmlsnIDYdbFZ5OfDE8w';
                                $GOOGLE_CSE_CX = '124771e4f0c3185b2';

                                $abc=array();
                                $query = explode("\n",$_POST["query"]);
                                // $domain = $_POST["domain"];
                                $val=explode("://", $_POST["domain"]);
                                if($val[0]=='http' || $val[0]=='https'){
                                    $domain=$val[1];
                                }else{
                                    $domain=$val[0];
                                }

                                $pages = isset($_POST["pages"])?$_POST["pages"]:1;
                                $gl = isset($_POST["gl"])?$_POST["gl"]:"in";
                                // $gl = strtolower($country);
                                $hl = isset($_POST["hl"])?$_POST["hl"]:"en";

                                $querys1=array();


                                echo "<div class='alt_table_outer g_keyword_ranks custom_table-border'><table class='table table-bordered'>";
                                echo "<tr><th style='text-align:center;'>Keyword</th><th style='text-align:center;'>Rank</th></tr>";
                                //$trimmedArray = array_map('trim', $linksArray);
                                //print_r(in_array(' ',$query));die;
                                //print_r(array_filter($query, 'strlen'));die;
                                function trim_array($Array)
                                {
                                    foreach ($Array as $value) {
                                        if(trim($value) === '') {
                                            $index = array_search($value, $Array);
                                            unset($Array[$index]);
                                        }
                                    }
                                    return $Array;
                                }
                                $query=trim_array($query);
                                foreach($query as $key =>$querys){
                                    for($page = 1;$page <=10;$page++){

                                        $apiurl = sprintf('https://www.googleapis.com/customsearch/v1?q=%s&cx=%s&key=%s&hl=%s&gl=%s&start=%d',urlencode($querys),$GOOGLE_CSE_CX,$GOOGLE_API_KEY,$hl,$gl,($page-1)*10+1);
                                        $json = file_get_contents($apiurl);
                                        $obj = json_decode($json);
                                        if(isset($obj->items)){
                                            foreach ($obj->items as $idx=>$item) {
                                                if (strpos($item->link, $domain)){
                                                    echo "<tr><td>".$querys."</td><td>".($idx + ($page-1)*10 +1)."</td></tr>";
                                                    $querys=1;
                                                    break;
                                                }

                                            }

                                        }else{
                                            $query2==2;
                                            break;
                                        }

                                    }
                                    if($query2==2){

                                        echo "<tr><td>".$querys."</td><td>Not found</td></tr>";

                                    }
                                    if($querys!=1){
                                        echo "<tr><td>".$querys."</td><td>Not in top 100</td></tr>";
                                    }
                                }

                                echo "</ul>"; echo "</table></div>";
                            }
                        }
                        ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showLocation);
            }else{
                $('#location').html('Geolocation is not supported by this browser.');
            }
        });


        function showLocation(position){
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            $.ajax({
                type:'POST',
                url:'<?php echo $url; ?>/getLocation.php',
                data:'latitude='+latitude+'&longitude='+longitude,
                success:function(msg){
                    // console.log(msg);
                    if(msg){
                        $("#location").val(msg);
                    }else{
                        $("#location").html('Not Available');
                    }
                }
            });
        }


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