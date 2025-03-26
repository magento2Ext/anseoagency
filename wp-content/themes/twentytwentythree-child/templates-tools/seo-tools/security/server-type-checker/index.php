<?php
if(isset($_POST['domain'])){
    //function for checking url
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


    //end function checking url
    //code for get data from whois api
    if($domain!=false){
        $ipaddress= gethostbyname($domain) ;
        $apiKey = 'at_920DPBzTNOSD7mLGXnXFe3mwUmuyp';
        $url = "https://www.whoisxmlapi.com/whoisserver/WhoisService"."?domainName={$domain}&apiKey={$apiKey}&outputFormat=JSON";

        $whois=json_decode(file_get_contents($url));

        foreach($whois as $value){
            $result['registrarName']=$value->registrarName;
            $result['nameServers']=$value->registryData->nameServers->hostNames[0];
            $result['CreatedDate']=date('d m Y',strtotime(substr($value->createdDate, 0, strpos($value->createdDate, "T"))));
            $result['Nameserverorganisation']=$value->whoisServer;
        }

        $details = json_decode(file_get_contents("http://ipinfo.io/{$ipaddress}/json"));
        $details1 = json_decode(file_get_contents("https://api.ip2location.com/v2/?ip=$ipaddress&key=9NLV3Y4ATS&package=WS25"));

        $xml = simplexml_load_file('http://data.alexa.com/data?cli=10&dat=snbamz&url='.$domain);
        $rank=isset($xml->SD[1]->POPULARITY)?$xml->SD[1]->POPULARITY->attributes()->TEXT:0;


        function file_get_contents_curl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }

        $html = file_get_contents_curl("http://".$domain);

        //parsing begins here:
        $doc = new DOMDocument();
        @$doc->loadHTML($html);
        $nodes = $doc->getElementsByTagName('title');

        //get and display what you need:
        $title = $nodes->item(0)->nodeValue;

        $metas = $doc->getElementsByTagName('meta');

        for ($i = 0; $i < $metas->length; $i++)
        {
            $meta = $metas->item($i);
            if($meta->getAttribute('name') == 'description'){
                $description = $meta->getAttribute('content');
            }else{
                $description='';
            }
        }

        // get web page meta description
        $SSL_Check = @fsockopen("ssl://".$domain, 443, $errno, $errstr, 30);
        if (!$SSL_Check) {
            $certinfo =false;
        } else {
            $orignal_parse = parse_url("https://".$domain, PHP_URL_HOST);
            $get = stream_context_create(array("ssl" => array("capture_peer_cert" => TRUE)));
            $read = stream_socket_client("ssl://".$orignal_parse.":443", $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $get);
            $cert = stream_context_get_params($read);
            $certinfo = openssl_x509_parse($cert['options']['ssl']['peer_certificate']);
            fclose($SSL_Check);
        }

        $dmrcDetails = dns_get_record("_dmarc.$domain",DNS_TXT);
        $spfDetaials = dns_get_record("_spf.$domain",DNS_TXT);



        $tld = parse_url($domain);
        $tld = (isset($tld['scheme']) ? $tld['host'] : $tld['path']);
        $tld = explode('.',$tld);
        $tld = end($tld);

        $IPV6= dns_get_record($domain,DNS_AAAA);
    }
    //whois data
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
                            <form  method="post" id="validate_form" action="">
                                <div class="form-content">
                                    <h2>Server Type Servey</h2>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="domain" id="domain" placeholder="domain.com"   required/>
                                        <?php if(!empty($_POST['domain'])){if($domain==false){ ?>
                                            <span>please enter valid url</span>
                                        <?php } } ?>
                                    </div>

                                    <div class="g-recaptcha custom_captcha" data-sitekey="6LcOm_8qAAAAAEOYGDHe-vJmNZfyQq4R-g3NfxeQ"></div>
                                    <input type="submit" name="btn" value="Submit" class="btnSubmit custom-btn">
                                </div>
                            </form>
           
                    </div>                       
                <div class="register-form">

                    <?php if(isset($_POST["btn"])){ if($domain!=false){ ?>
                        <h3 style="word-break:break-all;" align="center">Site Report for <?php echo "http://".$domain;?></h3>
                        <div class="form_label_head">
                            <h2>Background Details</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <table class="table  custom_table-border" style="width:100%;">
                                    <tr>
                                        <th scope="row">Site title</th>
                                        <td><?php if(!empty($title)) {echo $title;}else{echo "Not Present";}?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Site rank</th>
                                        <td><?php if(!empty($rank)){echo $rank;}else{ echo "Not Present";} ?></td>
                                    </tr>

                                </table>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <table class="table  custom_table-border" style="width:100%;">
                                    <tr>
                                        <th scope="row">Date first seen</th>
                                        <td><?php echo $result['CreatedDate'];?></td>
                                    </tr>
                                    <!-- <tr>
                                    <th scope="row">Netcraft Risk Rating</th>
                                    <td></td>
                                    </tr> -->
                                    <tr>
                                        <th scope="row">Description</th>
                                        <td><?php if(!empty($description)){ echo $description;}else{echo "Not Present";}?></td>
                                    </tr>
                                </table>
                            </div>

                        </div>

                        <div class="form_label_head">
                            <h2>Netwrok Details</h2>
                        </div>
                        <div class="row fv_table">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <table class="table  custom_table-border" style="width:100%;">
                                    <tr>
                                        <th scope="row">Site </th>
                                        <td><?php echo "http://".$domain;?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Netblock Owner</th>
                                        <td><?php if(!empty($details)){echo  substr($details->org,strpos($details->org, " ") + 1);}else{ echo "Not Present";}?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Hosting company</th>
                                        <td><?php echo $details->org;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Hosting country </th>
                                        <td><?php echo $details->country;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">IPv4 address</th>
                                        <td><?php echo $ipaddress; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">IPv4 autonomous systems</th>
                                        <td><?php echo $details->org;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">IPv6 address </th>
                                        <td><?php if(!empty($IPV6[0]['ipv6'])) {echo $IPV6[0]['ipv6'];}else echo "Not Present";?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Reverse DNS</th>
                                        <td><?php if(!empty($details->hostname)) {echo $details->hostname; }else echo "Not Present";?></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <table class="table  custom_table-border" style="width:100%;">
                                    <tr>
                                        <th scope="row">IPv6 autonomous systems</th>
                                        <td><?php if(!empty($IPV6[0]['ipv6'])){ echo $details->org;}else echo "Not Present";?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Domain</th>
                                        <td><?php echo  $domain;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nameserver</th>

                                        <td><?php echo  $result['nameServers'];?></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Domain registrar</th>
                                        <td><?php  echo $result['registrarName'];  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nameserver organisation</th>
                                        <td><?php  echo  $result['Nameserverorganisation']; ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Organisation</th>
                                        <td><?php if(!empty($details)){echo  substr($details->org,strpos($details->org, " ") + 1);}else{ echo "Not Present";}?></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">Top Level Domain</th>
                                        <td><?php echo ".".$tld;?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">DNS Security Extensions</th>
                                        <td>unknown</td>
                                    </tr>

                                </table>

                            </div>
                        </div>


                        <div class="form_label_head">
                            <h2>SSL/TLS</h2>
                        </div>
                        <?php if($certinfo !=false){ ?>
                            <div class="row fv_table">

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <table class="table custom_table-border" style="width:100%;">
                                        <tr>
                                            <th scope="row">Assurance </th>
                                            <td><?php if(!empty($certinfo['subject']['OU']))echo $certinfo['subject']['OU'];else echo "Not Present";?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Common name</th>
                                            <td><?php if(!empty($certinfo['subject']['CN']))echo $certinfo['subject']['CN'];else echo "Not Present";?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Organisation</th>
                                            <td><?php if(!empty($certinfo['subject']['O']))echo $certinfo['subject']['O'];else echo "Not Present";?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">State</th>
                                            <td><?php  if(!empty($certinfo['subject']['ST']))echo $certinfo['subject']['ST'];else echo "Not Present";?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Country</th>
                                            <td><?php if(!empty($certinfo['subject']['C'])) echo $certinfo['subject']['C']; else echo "Not Present";?></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Subject Alternative Name</th>
                                            <td style="width: 70px;overflow: hidden;white-space: nowrap;"><?php if(!empty($certinfo['extensions']['subjectAltName'])) {echo $certinfo['extensions']['subjectAltName']; }else echo "Not Present";?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Validity period</th>
                                            <td><?php echo date("Y-m-d", $certinfo['validFrom_time_t']).' To '.date("Y-m-d", $certinfo['validTo_time_t']); ?></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Server</th>
                                            <td><?php if(!empty($certinfo['subject']['O']))echo $certinfo['subject']['O'];else echo "Not Present";?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Public key algorithm</th>
                                            <td><?php if(!empty($details->hostname)) {echo $details->hostname; }else echo "Not Present";?></td>
                                        </tr>



                                    </table>

                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <table class="table custom_table-border" style="width:100%;">

                                        <tr>
                                            <th scope="row">Issuing organisation</th>
                                            <td><?php if(!empty($certinfo['subject']['O']))echo $certinfo['subject']['O'];else echo "Not Present";?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Issuer common name</th>
                                            <td><?php if(!empty($certinfo['issuer']['CN']))echo $certinfo['issuer']['CN'];else echo "Not Present";?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Issuer country</th>
                                            <td><?php if(!empty($certinfo['subject']['C']))echo $certinfo['subject']['C'];else echo "Not Present";?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Issuer state</th>
                                            <td><?php if(!empty($certinfo['subject']['ST']))echo $certinfo['subject']['ST'];else echo "Not Present"; ?></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">Certificate Revocation Lists</th>
                                            <td><?php echo $certinfo['extensions']['crlDistributionPoints']; ?></td>
                                        </tr>

                                        <tr>
                                            <?php $pos = strpos($certinfo['extensions']['authorityInfoAccess'], "CA");

                                            ?>
                                            <th scope="row">OCSP servers</th>
                                            <td><?php if(!empty($certinfo['extensions']['authorityInfoAccess']))echo substr($certinfo['extensions']['authorityInfoAccess'], 0, $pos);else echo "Not Present"; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Serial number</th>
                                            <td><?php echo $certinfo['serialNumber']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cipher</th>
                                            <td><?php if(!empty($details->hostname)) {echo $details->hostname; }else echo "Not Present";?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"> Version number</th>
                                            <td><?php if(!empty($certinfo['version'])) {echo $certinfo['version'];  }else echo "Not Present";?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Signature algorithm</th>
                                            <td><?php if(!empty($certinfo['signatureTypeLN'])) {echo $certinfo['signatureTypeLN']; }else echo "Not Present";?></td>
                                        </tr>

                                    </table>

                                </div>
                            </div>
                        <?php } else { echo "Not Found" ;}?>
                        <div class="form_label_head">
                            <h2>SSL Certificate Chain</h2>
                        </div>

                        <div class="row fv_table">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <table class="table custom_table-border" style="width:100%;">
                                    <tr>
                                        <th scope="row">Common name</th>
                                        <td><?php if(!empty($certinfo['issuer']['CN']))echo $certinfo['issuer']['CN'];else echo "Not Present";?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Organisational unit</th>
                                        <td><?php if(!empty($certinfo['issuer']['U']))echo $certinfo['issuer']['U'];else echo "Not Present";?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Organisation</th>
                                        <td><?php if(!empty($certinfo['issuer']['O']))echo $certinfo['issuer']['O'];else echo "Not Present";?></td>
                                    </tr>

                                </table>
                            </div>

                        </div>
                         </div>

                    <?php } }?>
                    <div class="related-tools">
                  <h2>Related Tools</h2>
                  
                  <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/source-encrypter'; ?>" target="_blank">Source Code Encrypter</a>
                  <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/email-validator'; ?>" target="_blank">Email Validation</a>
                  <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/ip-address-checker'; ?>" target="_blank">IP Address Checker</a>
                  <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/network-utilities'; ?>" target="_blank">Network Utilities</a>
                  <a href="<?php echo dirname($_SERVER['PHP_SELF']) . '/wpa-encryption-key-generator'; ?>" target="_blank">WPA encryption Key Generator</a>
                  
      
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