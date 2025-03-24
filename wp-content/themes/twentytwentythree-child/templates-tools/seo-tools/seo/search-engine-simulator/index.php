
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
require_once('simulator/Simulator.php');

$tool = new Simulator();

$url ='';
$html='';

if (isset($_POST['url'])){

    function get_domain($Url)
    {
        $url2 = trim($Url);
        $url=explode("://",$Url);

        if($url[0]=='http' || $url[0]=='https'){

            $url1=$url2;
        }else{
            $url1="https://".$url[0];
        }
        $ch = curl_init($url1);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_TIMEOUT,10);
        $output = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if($url2==''){
            return 'empty';
        }elseif($httpcode==0 || $httpcode==404){
            return 'false';
        }else{

            return $url1;

        }

    }
    $url=get_domain($_POST['url']);
    if($url!='false'&& $url!='empty'){
        $html = $tool->getPageContent($url);
    }elseif($url=='empty'){
        $invalid_url=$url;
    }else{
        $invalid_url='false';
    }

}else{
    $url='';
}

?>
                    <div class="col-xl-5 col-lg-6 col-sm-12 broken_left">
                        <div class="flex-grid col-align">

                        </div>
                    </div>
                </div>
                <div class="search_engine_outer">
                    <div class="customized_right_inner  bg_with_border">
                        <form id="validate_form" method="POST" action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter page url: https://" name="url" required>
                                <div class="input-group-append">
                                    <button id="submit" type="submit" class="input-group-text btn btn-success">
                                        Submit</button>
                                </div>
                            </div>
                            <?php
                            if(isset($invalid_url)){
                                if($invalid_url=='false'){echo "<span style='color: red;'>Please enter valid  url<span>";}
                                else{ echo "<span style='color: red;'>Please enter  url<span>"; }

                            }
                            //if(isset($_POST['url'])==''){echo "<span style='color: red;'>Please enter  url<span>";}
                            ?>
                            <div class="g-recaptcha custom_captcha" data-sitekey="6LcflZoqAAAAAPx2upg7lrPvul--MUCpjimTffls"></div>
                        </form>


                    </div>
                    <?php


                    if($url!=false && $html !=''){

                        ?>
                        <div id="simulator-result" class=" lazyloaded" >
                            <h4>Your SEO Simulator Results</h4>
                            <div class="alt_table_outer_lefty alt_table_outer no_border">
                                <table>
                                    <tr>
                                        <td><h4>URL:</h4></td><td>  <?php echo $url; ?></td>
                                    </tr>
                                    <tr>
                                        <td><h4>TITLE:</h4> </td><td><?php if($html !=''){ echo $tool->getTitle($html); } ?></td>
                                    </tr>
                                    <tr>
                                        <td><h4>DESCRIPTION:</h4></td> <td><?php  echo $tool->getMetaTages($html); ?></td>
                                    </tr>
                                    <tr>
                                        <td><h4>ALL WORDS:</h4></td><td> <?php echo $tool->allWord($html); ?></td>
                                    </tr>
                                    <tr>
                                        <td><h4>UNIQUE WORDS:</h4> </td><td><?php echo $tool->allWord($html,true); ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="define_float">

                                <div class="resultHeading lazyloaded"><h4>KEYWORDS PHRASE FREQUENCIES</h4></div>
                                <div class="combo_table">
                                    <div class="alt_table_outer_lefty alt_table_outer striped half">
                                        <table class="table table-striped custom_table-border"  style="width:100%">
                                            <thead>
                                            <tr>
                                                <th scope="col">TWO WORD PHRASES</th>
                                                <th scope="col">COUNT</th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $TwoWord = $tool->countTotalTwoWord($html);
                                            //$TwoWord1 = $tool->countTotalThreeWord($html);
                                            // array_merge($TwoWord ,$TwoWord1);
                                            // $table= array_merge($TwoWord ,$TwoWord1);
                                            // print_r($table);

                                            arsort($TwoWord);
                                            foreach($TwoWord as $key => $value) {
                                                echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
                                            }
                                            ?>

                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="alt_table_outer_lefty alt_table_outer striped half">
                                        <table class="table table-striped custom_table-border" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th scope="col">THREE WORD PHRASES</th>
                                                <th scope="col">COUNT</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $TwoWord = $tool->countTotalThreeWord($html);
                                            arsort($TwoWord);
                                            foreach($TwoWord as $key => $value) {
                                                echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="alt_table_outer_lefty alt_table_outer striped">
                                <table class="table" style="border-bottom-width: 0px;">
                                    <tr><td style="width: 35%;border-bottom-width: 0px">
                                            <div class="resultHeading lazyloaded" style="text-align: top;"> <h4>H1 HEADINGS:</h4> </div></td><td style="border-bottom-width: 0px;">
                                            <div class="resultData lazyloaded" id="h1Headings">
                                                <?php
                                                $h1 = $tool->fnextractHeadins('h1',$html);
                                                echo  $h1 ? $h1 : '<span class="error-item">No H1 Tags Found</span>';
                                                ?>
                                            </div>
                                        </td></tr>
                                    <div style="clear: both"></div>
                                    <tr><td style="border-bottom-width: 0px;">
                                            <div class="resultHeading lazyloaded"><h4>H2 HEADINGS:</h4> </div></td><td style="border-bottom-width: 0px;">
                                            <div class="resultData lazyloaded" id="h4Headings">
                                                <?php
                                                $h2 = $tool->fnextractHeadins('h2',$html);
                                                echo  $h2 ? $h2 : '<span class="error-item">No H2 Tags Found</span>';
                                                ?>
                                            </div>
                                        </td></tr>
                                    <div style="clear: both"></div>
                                    <tr><td style="border-bottom-width: 0px;">
                                            <div class="resultHeading lazyloaded"><h4>H3 HEADINGS:</h4></div></td><td style="border-bottom-width: 0px;">
                                            <div class="resultData lazyloaded" id="h3Headings">
                                                <?php
                                                $h3 = $tool->fnextractHeadins('h3',$html);
                                                echo  $h3 ? $h3 : '<span class="error-item">No H3 Tags Found</span>';
                                                ?>
                                            </div>
                                        </td></tr>
                                    <div style="clear: both"></div>
                                    <tr><td style="border-bottom-width: 0px;">
                                            <div class="resultHeading lazyloaded"><h4> ALT LINK TEXT:</h4></div></td><td  style="border-bottom-width: 0px;">
                                            <div class="resultData lazyloaded" id="altText">
                                                <?php
                                                $Alts = $tool->getImgAlts($url);
                                                if(count($Alts) >0){
                                                    foreach($Alts as $alt){
                                                        echo $alt.'<br>';
                                                    }
                                                }else{
                                                    echo'<span class="error-item">No Image Alt Text Found</span>';
                                                }
                                                ?>
                                            </div>
                                        </td></tr>
                                    <div style="clear: both"></div>
                                    <tr><td style="border-bottom-width: 0px;">
                                            <div class="resultHeading lazyloaded"><h4>ON PAGE LINKS:</h4> </div></td><td style="border-bottom-width: 0px;">
                                            <div class="resultData lazyloaded" id="links">
                                                <?php
                                                $links = $tool->linkExtractor($html);
                                                if(count($links) >0){
                                                    foreach($links as $text => $link){
                                                        echo '<a href="'.$link.'" target="_blank" style="color:#f16e24">'.$text.'</a><br>';
                                                    }
                                                }else{
                                                    echo'<span class="error-item">No Image Alt Text Found</span>';
                                                }
                                                ?>
                                            </div>
                                        </td></tr>
                                    <div style="clear: both"></div>
                                    <tr><td style="border-bottom-width: 0px;">
                                            <div class="resultHeading lazyloaded"><h4>PAGE TEXT:</h4></div></td><td style="border-bottom-width: 0px;">
                                            <div class="resultData lazyloaded" id="pageText">
                                                <?php
                                                if(isset($_POST['url']))
                                                {
                                                    $url1=explode('://', $_POST['url']);
                                                    if($url1[0]=='https' && (substr($url1[1],0,3)!='www')){
                                                        $url ='https://www.'.$url1[1];
                                                        // echo substr($url1[1],0,2);die;
                                                    }elseif($url1[0]=='https' && (substr($url1[1],0,3)=='www')){
                                                        $url ='https://'.$url1[1];
                                                        //echo"2";die;
                                                    }elseif($url1[0]=='http'){
                                                        $url ='https://'.$url1[1];
                                                        echo"3";die;
                                                    }elseif(substr($url1[0],0,3)!='www'){
                                                        $url = 'https://www.'.$_POST['url'];
                                                        // echo"4";die;
                                                    }else{
                                                        $url = 'https://'.$_POST['url'];
                                                        //echo"5";die;
                                                    }
                                                    include('simulator/simple_html_dom1.php');
                                                    $html = new simple_html_dom();
                                                    $html->load_file($url);
                                                    if($html->find('body'))
                                                    {
                                                        foreach ($html->find('body') as $e){
                                                            if($url=='https://www.google.com' || $url=='https://www.google.com/')
                                                            {
                                                                foreach ($e->find('a') as $k7){
                                                                    echo  '-'.$k7->plaintext."<br><br>";
                                                                }
                                                            }
                                                            if($e->find('li'))
                                                            {
                                                                foreach ($e->find('li') as $k1){
                                                                    if($k1->find('h4')){
                                                                        foreach ($k1->find('h4') as $k3){
                                                                            echo "-".$k3->innertext."<br><br>sdfsdf";
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                            if($e->find('header'))
                                                            {
                                                                foreach ($e->find('header') as $k)
                                                                {
                                                                    foreach ($k->find('li') as $k1)
                                                                    {
                                                                        foreach ($k1->find('a') as $k2)
                                                                        {

                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }


                                                        if($html->find('body'))
                                                        {
                                                            foreach ($html->find('body') as $e)
                                                            {
                                                                if($e->find('.heading_title'))
                                                                {
                                                                    foreach ($e->find('.heading_title') as $k1)
                                                                    {
                                                                        if($k1->find('h3')){
                                                                            foreach ($k1->find('h3') as $k2)
                                                                            {
                                                                                if($k2->find('span'))
                                                                                {
                                                                                    foreach ($k2->find('span') as $k)
                                                                                    {
                                                                                        if($k2->innertext!=''){
                                                                                            echo "-".$k->innertext."<br><br>";
                                                                                            foreach ($k2->find('button') as $k4){
                                                                                                echo "-".$k4->plaintext .'<br><br>';
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                    if($e->find('p'))
                                                                    {
                                                                        foreach ($e->find('p') as $k2)
                                                                        {
                                                                            if($k2->plaintext!=''){
                                                                                echo "-".$k2->plaintext .'<br><br>';
                                                                                foreach ($k2->find('button') as $k4){
                                                                                    echo "-".$k4->plaintext .' <br><br>';
                                                                                }
                                                                            }
                                                                            foreach ($e->find('b') as $k2)
                                                                                if($k2->plaintext!=''){
                                                                                    echo "-".$k2->plaintext .'<br><br>';
                                                                                    foreach ($k2->find('button') as $k4){
                                                                                        echo "-".$k4->plaintext .'<br><br>';
                                                                                    }
                                                                                }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        //die('here2');
                                                        if($html->find('span'))
                                                        {
                                                            foreach ($html->find('span') as $k2)
                                                            {
                                                                if($k2->plaintext!=''){
                                                                    echo "-".$k2->plaintext .'<br><br>';
                                                                    if($k2->find('button')){
                                                                        foreach ($k2->find('button') as $k4){
                                                                            echo "-".$k4->plaintext .'<br><br>';
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }

                                                        if($html->find('div'))
                                                        {
                                                            foreach ($html->find('div') as $k2)
                                                            {
                                                                if($k2->plaintext!=''){
                                                                    echo "-".$k2->plaintext .'<br><br>';
                                                                    foreach ($k2->find('button') as $k4){
                                                                        if($k2->plaintext!=''){
                                                                            echo "-".$k4->plaintext .'<br><br>';
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }

                                                        if($k2->find('span'))
                                                        {
                                                            foreach ($k2->find('span') as $k3)
                                                            {
                                                                if($k3->plaintext!=''){
                                                                    echo "-".$k3->plaintext .'<br><br>';
                                                                    foreach ($k3->find('button') as $k4){
                                                                        echo "-".$k4->plaintext .'<br><br>';
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                } ?>
                                            </div>
                                        </td></tr>
                                    <div style="clear: both"></div>
                                </table>

                            </div>
                        </div>
                    <?php } ?>
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

        });

    </script>
