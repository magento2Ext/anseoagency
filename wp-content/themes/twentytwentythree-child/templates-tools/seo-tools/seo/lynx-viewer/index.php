<?php $url = site_url('/wp-content/themes/twentytwentythree-child/templates-tools/seo-tools/seo/lynx-viewer/'); ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer> </script>
    <style>
        .g-recaptcha.custom_captcha {
            float: left;
            width: 100%;
            margin-top: 20px;
        }
    </style>        <div class="tool-inn-right">
                        <img src="/anseo_agency/wp/wp-content/uploads/2025/02/lynx.webp" alt="">
                     
                    <div class="lynx_viewer_result_outer">
                    <div class="lynx_viewer_result customized_right_inner bg_with_border">
                        <form action="" method="post" id="validate_form">
                            <div class="view_lynxx-form">
                                <input type="text" name="url" placeholder="Enter url with https or http" style="width: 100%" value="<?php if(!empty( $_POST['url'])) {echo $_POST['url']; }?>" class="form-control" required=''/>
                                <input type="submit" class="btn btn-default custom-btn" name="button" id="submitBtn">
                                <div class="g-recaptcha custom_captcha" data-sitekey="6LcOm_8qAAAAAEOYGDHe-vJmNZfyQq4R-g3NfxeQ"></div>
                            </div>
                        </form>
                    </div>
                    </div>

                    <div class="lynx_result">
                        <?php
                        include('simple_html_dom.php');

                        $html = new simple_html_dom();
                        //$file=file_get_contents('https://www.flipkart.com/');



                        if(isset($_POST['url'])){
                            echo '<div class="lynx_viewer_inner">';
                            $url2 = trim($_POST['url']);
                            $url=explode("://",$_POST['url']);

                            if($url[0]=='http' || $url[0]=='https'){
                                $url1=$_POST['url'];
                            }else{
                                $url1="https://".$url[0];
                            }
                            $ch = curl_init($url1);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                            curl_setopt($ch,CURLOPT_TIMEOUT,10);
                            $output = curl_exec($ch);
                            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                            curl_close($ch);

//print_r($httpcode);die;
                            if($url2=='' ){
                                echo '<span1  style="color:red;">Please Enter the URL..!</span1>';
                                unset($_POST['url']);
                            }elseif($httpcode==0 || $httpcode==404|| $httpcode==403){
                                echo '<span1  style="color:red;">Please Enter the Valid URL..!</span1>';
                                unset($_POST['url']);
                            }else{
                                $html->load_file($url1);
                                foreach ($html->find('head') as $k1){

                                    foreach ($k1->find('title') as $k2){
                                        echo '[title]'.$k2->innertext."[title]<br><br>";
                                    }

                                    foreach ($k1->find('style') as $k2){
                                        echo '[embedded CSS]'.$k2->innertext."[/embedded CSS]<br><br>";
                                    }
                                    foreach ($html->find('body') as $e){
                                        foreach ($e->find('header') as $k){


                                            foreach ($k->find('li') as $k1){

                                                foreach ($k1->find('a') as $k2){
                                                    echo '[a href="'.$k2->href.'"]'.$k2->innertext."[/a]<br><br>";
                                                }
                                            }

                                            foreach ($k->find('li') as $k1){
                                                foreach ($k1->find('h4') as $k3){
                                                    echo '[h4]'.$k3->innertext."[/h4]<br><br>";
                                                }
                                            }
                                        }
                                    }
                                }
                                foreach ($html->find('body') as $e){

                                    foreach ($e->find('.heading_title') as $k1){
                                        foreach ($k1->find('h3') as $k2){
                                            foreach ($k2->find('span') as $k){
                                                if($k2->innertext!=''){
                                                    echo '[h3]'.$k->innertext."[/h3]<br><br>";
                                                    foreach ($k3->find('button') as $k4){
                                                        echo '[button]'.$k3->plaintext .'[/button]<br><br>';
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                foreach ($html->find('body') as $e){
                                    foreach ($e->find('img') as $k2){
                                        if($k2->src!=''){

                                            echo '[img src="'.$k2->src.'"][/img]<br><br>';
                                            foreach ($k2->find('button') as $k4){
                                                echo '[button]'.$k4->plaintext .'[/button]<br><br>';
                                            }
                                        }
                                    }
                                }

                                foreach ($html->find('body') as $e){

                                    foreach ($e->find('p') as $k2){
                                        if($k2->plaintext!=''){
                                            echo '[p]'.$k2->plaintext .'[/p]<br><br>';
                                            foreach ($k2->find('button') as $k4){
                                                echo '[button]'.$k4->plaintext .'[/button]<br><br>';
                                            }
                                        }
                                    }
                                }
                                foreach ($html->find('body') as $e){
                                    foreach ($e->find('b') as $k2){
                                        if($k2->plaintext!=''){
                                            echo '[b]'.$k2->plaintext .'[/b]<br><br>';
                                            foreach ($k2->find('button') as $k4){
                                                echo '[button]'.$k4->plaintext .'[/button]<br><br>';
                                            }
                                        }
                                    }
                                }

                                foreach ($html->find('span') as $k2){
                                    if($k2->plaintext!=''){
                                        echo '[span]'.$k2->plaintext .'[/span]<br><br>';
                                        foreach ($k2->find('button') as $k4){
                                            echo '[button]'.$k4->plaintext .'[/button]<br><br>';
                                        }
                                    }
                                }

                                foreach ($html->find('div') as $k2){
                                    if($k2->plaintext!=''){
                                        echo '[p]'.$k2->plaintext .'[/p]<br><br>';
                                        foreach ($k2->find('button') as $k4){
                                            if($k4->plaintext!=''){
                                                echo '[button]'.$k4->plaintext .'[/button]<br><br>';
                                            }
                                        }
                                    }
                                    foreach ($html->find('span') as $k3){
                                        if($k3->plaintext!=''){
                                            echo '[span]'.$k3->plaintext .'[/span]<br><br>';
                                            foreach ($k3->find('button') as $k4){
                                                echo '[button]'.$k3->plaintext .'[/button]<br><br>';
                                            }
                                        }
                                    }
                                }

                            }

                            echo '</div>';

                        }






                        ?>
                    </div>
                    <div class="related-tools">
             <h2>Related Tools</h2>
             
             <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/google-keyword-rank-checker'; ?>" target="_blank">Google Keyword Rank Checker</a>
             <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/google-pagerank-checker'; ?>" target="_blank">Google PageRank Checker</a>
             <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/keyword-frequency-counter'; ?>" target="_blank">Keyword Frequency Counter</a>
             <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/keyword-research-tool'; ?>" target="_blank">Keyword Research Tool</a>
             <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/meta-tag-generator'; ?>" target="_blank">Meta Tag Generator</a>
             <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/robots-txt-generator'; ?>" target="_blank">Robots Txt Generator</a>
             <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/search-engine-simulator'; ?>" target="_blank">Search Engine Simulator</a>
             <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/website-traffic-checker'; ?>" target="_blank">Traffic Checker</a>
            </div>  
            </div>

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