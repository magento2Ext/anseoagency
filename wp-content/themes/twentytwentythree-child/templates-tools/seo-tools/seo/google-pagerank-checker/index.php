<?php

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
            margin-top: 20px;
            text-align:center;

        }
        .g-recaptcha.custom_captcha >div {display:inline-block;}
    </style>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
                

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
                                        <input type="text" class="form-control" name="domain" placeholder="domain.com" size="40" value="<?php echo $domain; ?>" required/>
                                        <?php if(isset($_POST['submit'])){if($domain==false){echo "<span style='color: red;'>Please enter valid url<span>";}}?>
                                        <button name ="submit"class="btnSubmit" type="submit">Submit</button>
                                    </div>
                                    <div class="g-recaptcha custom_captcha" data-sitekey="6LcflZoqAAAAAPx2upg7lrPvul--MUCpjimTffls"></div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php
                    if($domain!=false){
                        if (isset($_POST["domain"])){

                            // echo "<div class='container'><table class='table table-striped table-bordered'>";
                            //          echo "<tr><th>URL</th><th>Rank</th></tr>";

                            //yrCPp3k3MhKDBguNxD0NPHPTidC9hhzvS7dkcgU4H-RW8eBhD_3pTjbfnZ0Wl9e5

                            // $service_url='https://api.rankapi.net/v1/pagerank?key=8rxZrYNsFEQrTvw2AyLS7lI81CIg124G7TFX7boPvc4d7zg7GFwnjBDk6gBCRpyY&url='.$_POST["domain"];
                            //  $json = file_get_contents($service_url);

                            //  $obj = json_decode($json);


                            $url = 'https://openpagerank.com/api/v1.0/getPageRank';
                            $domin1=str_replace('https://','', $_POST['domain']);
                            $domin2=str_replace('http://','', $domin1);
                            $domin=str_replace('/','', $domin2);

                            $query = http_build_query(array(
                                'domains' => explode(',',$domin)
                            ));
                            $url = $url .'?'. $query;
                            $ch = curl_init();
                            $headers = ['API-OPR: cc08kwkcg4skkkcskc8o0ws4wkc48g0sw04ck4og'];
                            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            $output = curl_exec ($ch);
                            curl_close ($ch);
                            $output = json_decode($output,true);

                            if(isset($output['response'])){
                                echo "<div class='alt_table_outer g_pagerank_checker'><table class='table table-striped table-bordered'>";
                                echo "<tr><th>URL</th><th>Page Rank</th></tr>";

                                foreach ($output['response'] as $value){

                                    echo "<tr><td>".$value['domain']."</td>";

                                    if($value['rank']!=''){
                                        if($value['page_rank_integer']==9||$value['page_rank_integer']==10){
                                            echo "<td> <div class='w3-border green '><div class='rank_digit w3-green'reen'> ".$value['page_rank_integer']." </div><div class='rank_bar'><div class='w3-green' style='height:10px;width:".($value['page_rank_integer']/1)."0%;padding:2px;'></div></div></div></td></tr>";
                                        }
                                        else if($value['page_rank_integer']==8||$value['page_rank_integer']==6||$value['page_rank_integer']==7){
                                            echo "<td> <div class='w3-border yellow'><div class='rank_digit w3-yellow'reen'> ".$value['page_rank_integer']." </div><div class='rank_bar'><div class='w3-yellow' style='height:10px;width:".($value['page_rank_integer']/1)."0%;padding:2px;'></div></div></div></td></tr>";
                                        }
                                        else if($value['page_rank_integer']==5||$value['page_rank_integer']==3||$value['page_rank_integer']==4){
                                            echo "<td> <div class='w3-border orange'><div class='rank_digit w3-orange'reen'> ".$value['page_rank_integer']." </div><div class='rank_bar'><div class='w3-orange' style='height:10px;width:".($value['page_rank_integer']/1)."0%;padding:2px;'></div></div></div></td></tr>";
                                        }
                                        if($value['page_rank_integer']==0||$value['page_rank_integer']==1||$value['page_rank_integer']==2){
                                            echo "<td> <div class='w3-border red'><div class='rank_digit w3-red'reen'> ".$value['page_rank_integer']." </div><div class='rank_bar'><div class='w3-red' style='height:10px;width:".($value['page_rank_integer']/1)."0%;padding:2px;'></div></div></div></td></tr>";
                                        }
                                    }else{
                                        echo "<td> <div class='w3-border'> No Rank</div></td></tr>";
                                    }
                                }
                            }else{
                                echo "<div class='table-responsive'><table class='table table-striped table-bordered'>";
                                echo "<tr><th row='2'>Data Not Found</th></tr>";
                            }
                            echo "</table></div>";
                        }
                    }	?>



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