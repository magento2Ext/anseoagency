<?php


if(isset($_POST["btnWHOIS"]) ||isset($_POST["btnDNS"]) ||isset($_POST['btnDIG'])){
    if(!empty($_POST['domain'])){
        function get_domain($url)
        {
            $pieces = parse_url($url);
            $domain = isset($pieces['host']) ? $pieces['host'] : $pieces['path'];
            if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
                return $regs['domain'];
            }
            return false;
        }

        $domain=get_domain($_POST['domain']);
        if($domain!=false){
            $apiKey = 'at_IVv3f0i4DyKbxQlzQHkoBfFe1rIqA';
            $url = "https://www.whoisxmlapi.com/whoisserver/WhoisService"."?domainName={$domain}&apiKey={$apiKey}&outputFormat=JSON";
            $whois=json_decode(file_get_contents($url));

            foreach($whois as $value){
                $result['registrarName']=$value->registrarName;
                $result['nameServers']=$value->registryData->nameServers->hostNames;
                $result['CreatedDate']=date('d m Y',strtotime(substr($value->createdDate, 0, strpos($value->createdDate, "T"))));
                $result['UpdatedDate']=date('d m Y',strtotime(substr($value->updatedDate, 0, strpos($value->createdDate, "T"))));
                $result['ExpiresDate']=date('d m Y',strtotime(substr($value->expiresDate, 0, strpos($value->createdDate, "T"))));

                $result['Nameserverorganisation']=$value->whoisServer;
                $result['status']=$value->registryData->status;
                $result['rawText']=$value->registryData->rawText;
                $result['referalUrl'] = substr($value->whoisServer, strpos($value->whoisServer, ".") + 1);
            }
        }
    }
}

?>

<style>
.result_netw .btn_panel input {
    width: 200px;
    margin: 0 0 5px!important;
    border-color: #ff8671!important;
    font-size: 13px!important;
}
</style>
<?php if(isset($_POST['btnWHOIS'])) {?>
    <style>
        .robt_cont input.tablinks1 {    box-shadow: 0px 6px 22px 0px rgb(0,105,255 / 45%);font-size: 15px;padding: 14px 30px;margin: 0 5px 0 0;border:1px solid transparent;background: #0069ff !important;border-radius: 6px;color: #fff !important;font-family: 'poppins';font-weight: 700;}
    </style>
<?php } ?>
<?php if(isset($_POST['btnDNS'])) {?>
    <style>
        .robt_cont input.tablinks2 {    box-shadow: 0px 6px 22px 0px rgb(0,105,255 / 45%);font-size: 15px;padding: 14px 30px;margin: 0 5px 0 0;border:1px solid transparent ;background: #0069ff !important; border-radius: 6px;color: #fff !important;font-family: 'poppins';font-weight: 700;}
    </style>
<?php } ?>
<?php if(isset($_POST['btnDIG'])) {?>
    <style>
        .robt_cont input.tablinks3 {    box-shadow: 0px 6px 22px 0px rgb(0,105,255 / 45%);font-size: 15px;padding: 14px 30px;margin: 0 5px 0 0;border:1px solid transparent;background: #0069ff !important;border-radius: 6px;color: #fff !important;font-family: 'poppins';font-weight: 700;}
    </style>
<?php } ?>

<style>
    .btn {
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 12px;
    color: black;

  }
  .btn:active, .btn.active {
      background-image: none;
      color: white;
      outline: 0;
      -webkit-box-shadow: inset 0 3px 5px rgb(0 0 0 / 13%);
      box-shadow: inset 0 3px 5px rgb(0 0 0 / 13%);}
  .btnDiv{
      padding-right:159px;
  }

  /* Style the active class, and buttons on mouse-over */
  .active, .btn:hover {
    background-color: #666;
    color: white;
  }
  .g-recaptcha.custom_captcha {
    float: left;
    width: 100%;
    margin-bottom: 20px;
  margin-top: 20px;
}
</style>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!--<link rel="stylesheet" href="//www.gstatic.com/external_hosted/material_design_lite/mdl_css-teal-blue-bundle.css" />-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer> </script>

      <div class="col-lg-12  bg_with_border ">
        <form id="dig-form"  method="post" class="main_netwrk_form">
          <div class="customized_right_inner">
            <h2> Please enter website URL: </h2>
            <div class="network_form_sec">
              <div class="input_grp" id="dig-form1">
                <input placeholder="Domain Name"name="domain" value="<?php if(isset($_POST['btnWHOIS'])) {echo $_POST['domain'];}elseif(isset($_POST['btnDNS'])){echo  $_POST['domain'];}elseif(isset($_POST['btnDIG'])){echo  $_POST['domain'];  }else{echo "";}?>" class="mdl-textfield__input d-input div_shadow-position" type="text"id="domain" required>
                <input class="btn_domain-position" name="btnWHOIS" type="submit" value="Submit" id="submitBtn">
              </div>
              <div class="g-recaptcha custom_captcha" data-sitekey="6LcflZoqAAAAAPx2upg7lrPvul--MUCpjimTffls"></div>
            </div>
          </div>
        </form>

      </div>
      <form id="dig-form1"  method="post" class="main_netwrk_form">
            <input placeholder="Domain Name"name="domain" value="<?php if(isset($_POST['btnWHOIS'])) {echo $_POST['domain'];}elseif(isset($_POST['btnDNS'])){echo  $_POST['domain'];}elseif(isset($_POST['btnDIG'])){echo  $_POST['domain'];  }else{echo "";}?>" class="mdl-textfield__input d-input div_shadow-position" type="hidden"id="domain" required>
          <div class="result_netw">
            <?php if(isset($_POST['btnWHOIS'])){
                              if(empty($_POST['domain'])){
                                echo '<p class=""enter_website>Please enter website URL </p>';
                              }
                              }

                               ?>
                          <div class="btn_panel">
                          <?php if(isset($_POST['domain'])){
                              if($domain!=false) {
                                if(isset($_POST['btnWHOIS']) || isset($_POST['btnDNS']) || isset($_POST['btnDIG']) ){ ?>
                            <div id="tab">
                              <input class="tab tablinks1 " name="btnWHOIS" id="btnWHOIS"type="submit" value="Whois">
                              <input class="tab tablinks2 " name="btnDNS"  id="btnDNS" type="submit"   value="DNS Lookup">
                              <input class="tab tablinks3 " name="btnDIG" id="btnDIG" type="submit"   value="Domain Information Groper (DIG)">
                            </div>
                           <?php        }
                              }
                            }?>
                        </div>




        <?php  if(isset($_POST["btnWHOIS"])){  if(!empty($_POST['domain'])){ if($domain!=false) {


         ?>
          <!--<div class="container">-->
            <div class="table-responsive half">
              <h3>Registrar Info</h3>
              <table class="table no_border no_stripes" width="100%">
                <tbody>
                  <tr>
                  <th scope="row">Name</th>
                  <td><?php echo $result['registrarName'];?></td>

                  </tr>
                  <tr>
                  <th scope="row">Whois Server</th>
                  <td><?php echo $result['Nameserverorganisation'];?></td>

                  </tr>
                  <tr>
                  <th scope="row">Referral URL</th>
                  <td><?php echo "http://www.".$result['referalUrl'];  ?></td>

                  </tr>
                  <tr>
                  <th scope="row">Status</th>
                  <td><?php echo $result['status'];?></td>

                  </tr>
                </tbody>
              </table>
            </div>
            <div class="table-responsive half">
              <h3>Important Dates</h3>
              <table class="table no_border no_stripes" width="100%">
                <tbody>
                  <tr>
                  <th scope="row">Expires On</th>
                  <td><?php echo $result['CreatedDate'];?></td>

                  </tr>
                  <tr>
                  <th scope="row">Registered On</th>
                  <td><?php echo $result['ExpiresDate'];?></td>

                  </tr>
                  <tr>
                  <th scope="row">Updated On</th>
                  <td><?php echo $result['UpdatedDate']; ?></td>

                  </tr>

                </tbody>
              </table>
            </div>
            <div class="table-responsive half">
              <h3>Name Servers</h3>
              <table class="table no_border no_stripes" width="100%">
                <tbody>
                <?php foreach($result['nameServers'] as $key=>$server) {?>
                  <tr>
                    <th scope="row"><?php echo $server;?></th>
                    <td><?php echo gethostbyname($server);?></td>

                  </tr>

                  <?php }?>
                </tbody>
              </table>
            </div>
            <div class="table-responsive">
              <h3>Registrar Data</h3>
              <table class="table no_border no_stripes">
                <tbody>

                  <tr>

                  <td><?php echo "<pre>".$result['rawText'];?></td>

                  </tr>


                </tbody>
              </table>
            </div>

            <?php } else {
              echo '<p class=""enter_website>Please enter valid URL </p>';
            } } }  ?>
          <!--</div>-->
          <?php if(isset($_POST["btnDNS"])){  if(!empty($_POST['domain'])){
               // $records = dns_get_record($domain,DNS_ALL);
               $records = dns_get_record($domain, DNS_ANY, $authns, $addtl);
            ?>


              <div class="queryResponseBodyRow">
                <div class="queryResponseBodyKey queryResponseBody">
                  <div class="table-responsive">
                  <table class="table stripes border">
                  <thead>
                    <tr>
                      <th class="text-left">Hostname</th>
                      <th class="text-left">Type</th>
                      <th class="text-left">TTL</th>
                      <th class="text-left">Priority</th>
                      <th class="text-left">Content</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($records as $value){
                      $record = json_decode(json_encode($value));
                      ?>
                    <tr>
                      <td><?php echo  $record->host;?></td>
                      <td><?php echo  $record->type;?></td>
                      <td><?php echo  $record->ttl;?></td>
                      <td><?php if(isset($record->pri)){echo  $record->pri;}?></td>
                      <td><?php if(isset($record->target)) {echo  $record->target;}elseif(isset($record->mname)){echo  $record->mname;}elseif(isset($record->ip)){echo  $record->ip;}else{echo "N/A";}?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                  </table>
                  </div>
                </div>
              </div>


          <?php }}?>
          <?php if(isset($_POST["btnDIG"])){  if(!empty($_POST['domain'])){ ?>
            <div class="tabination_sm_outer" id="dig-type-buttons">

              <div class="tabination_sm" id="myDIV">

                <input class="dig-button  btn active" type="button" value="A">
                <input class="dig-button  btn" type="button" value="AAAA">
                <input class="dig-button  btn" type="button" value="ANY">
                <input class="dig-button  btn" type="button" value="CAA">
                <input class="dig-button  btn" type="button" value="CNAME">
                <input class="dig-button  btn" type="button" value="MX">
                <input class="dig-button  btn" type="button" value="NS">
                <input class="dig-button  btn" type="button" value="PTR">
                <input class="dig-button  btn" type="button" value="SOA">
                <input class="dig-button  btn" type="button" value="SRV">
                <input class="dig-button  btn" type="button" value="TXT">
              </div>
            </div>

            <div id="dig" class="dig_half">



            </div>

          <?php }
        }?>

          </div>
        </form> 
<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace("active", "");
  this.className += "active";
  });
}


</script>
 <?php if(isset($_POST["btnDIG"])){


  ?>
  <script>
jQuery(document).ready(function(){
    jQuery('.table').hide();


    jQuery('.dig-button').click(function(){
        jQuery('.table').show();

        var fired_button = jQuery(this).val();

        var domainName = jQuery('input[name="domain"]').val();

        function extractHostname(url) {
            var hostname;
            //find & remove protocol (http, ftp, etc.) and get hostname

            if (url.indexOf("//") > -1) {
                hostname = url.split('/')[2];
            }
            else {
                hostname = url.split('/')[0];
            }

            //find & remove port number
            hostname = hostname.split(':')[0];
            //find & remove "?"
            hostname = hostname.split('?')[0];

            return hostname;
        }
       domain= extractHostname(domainName);

        jQuery.ajax({
            url:"<?php echo get_stylesheet_directory_uri(); ?>/assets/extra_files/ajax_netork_utilities.php",
            method:"POST",
            data:{fired_button:fired_button,domain:domain},

            // dataType:"json",
            success:function(data){

                arr = jQuery.parseJSON(data); //convert to javascript array
                console.log(arr);
                jQuery('#dig').html("");
                if(arr!="Records not found"){
                    if(arr!=''){
                        for(var i=0; i<=arr.length;i++){
                            if(arr[i].type=="SOA"){
                                var html='<div class="table-responsive"><table width="100%"align="center" class="table table-striped custom_table-border mdl-data-table mdl-js-data-table mdl-shadow--3dp mh-table"><tbody><tr><td class="mdl-data-table__cell--non-numeric"><b>'+arr[i].type+'</b></td><td class="mdl-data-table__cell--non-numeric"><div class="mdl-grid mdl-grid--nesting"><div class="mdl-cell mdl-cell--2-col"><b>TTL: </b>'+(arr[i].ttl)/60+'seconds<br><b>DATA: </b>'+arr[i].host+'<br><ul><li><b>MNAME: </b>'+arr[i].mname+'</li><li><b>RNAME: </b>'+arr[i].rname+'</li><li><b>Serial: </b>'+arr[i].serial+'</li><li><b>Refresh: </b>'+(arr[i].refresh)/60+'minutes </li><li><b>Retry: </b>'+(arr[i].retry)/60+' minutes</li><li><b>Expire: </b>'+(arr[i].expire)/60+' minutes</li><li><b>TTL: </b>'+(arr[i].ttl)/60+'minute </li></ul><br></div></div></td></tr></tbody></table></div>';
                                jQuery('#dig').append(html);
                            }
                            else if(arr[i].type=="AAAA"){
                                var html='<div class="table-responsive"><table width="100%"align="center" class="table table-striped custom_table-border mdl-data-table mdl-js-data-table mdl-shadow--3dp mh-table"><tbody><tr><td class="mdl-data-table__cell--non-numeric"><b>'+arr[i].type+'</b></td><td class="mdl-data-table__cell--non-numeric"><div class="mdl-grid mdl-grid--nesting"><div class="mdl-cell mdl-cell--2-col"><b>TTL: </b>'+arr[i].ttl+'<br><b>DATA: </b>'+arr[i].ipv6+'</div></div></td></tr></tbody></table></div>';
                                jQuery('#dig').append(html);
                            }
                            else if(arr[i].type=="CAA"){
                                var html='<div class="table-responsive"><table width="100%"align="center" class="table table-striped custom_table-border mdl-data-table mdl-js-data-table mdl-shadow--3dp mh-table"><tbody><tr><td class="mdl-data-table__cell--non-numeric"><b>'+arr[i].type+'</b></td><td class="mdl-data-table__cell--non-numeric"><div class="mdl-grid mdl-grid--nesting"><div class="mdl-cell mdl-cell--2-col"><b>TTL: </b>'+(arr[i].ttl)/(60*60)+'hours<br><b>DATA: </b>'+arr[i].value+'</div></div></td></tr></tbody></table></div>';
                                jQuery('#dig').append(html);
                            }
                            else if(arr[i].type=="MX"){
                                var html='<div class="table-responsive"><table width="100%"align="center" class="table table-striped custom_table-border mdl-data-table mdl-js-data-table mdl-shadow--3dp mh-table"><tbody><tr><td class="mdl-data-table__cell--non-numeric"><b>'+arr[i].type+'</b></td><td class="mdl-data-table__cell--non-numeric"><div class="mdl-grid mdl-grid--nesting"><div class="mdl-cell mdl-cell--2-col"><b>TTL: </b>'+arr[i].ttl+'<br><b>EXCHANGE: </b>'+arr[i].target+'<br><b>PREFERENCE: </b>'+(arr[i].pri)+'</div></div></td></tr></tbody></table></div>';
                                $('#dig').append(html);
                            }
                            else if(arr[i].type=="TXT"){
                                var html='<div class="table-responsive"><table width="100%"align="center" class="table table-striped custom_table-border mdl-data-table mdl-js-data-table mdl-shadow--3dp mh-table"><tbody><tr><td class="mdl-data-table__cell--non-numeric"><b>'+arr[i].type+'</b></td><td class="mdl-data-table__cell--non-numeric"><div class="mdl-grid mdl-grid--nesting"><div class="mdl-cell mdl-cell--2-col"><b>TTL: </b>'+(arr[i].ttl)/60+'minutes<br><b>VALUE: </b>'+arr[i].txt+'</div></div></td></tr></tbody></table></div>';
                                jQuery('#dig').append(html);
                            }
                            else if(arr[i].type=="NS"){
                                var html='<div class="table-responsive"><table width="100%"align="center" class="table table-striped custom_table-border mdl-data-table mdl-js-data-table mdl-shadow--3dp mh-table"><tbody><tr><td class="mdl-data-table__cell--non-numeric"><b>'+arr[i].type+'</b></td><td class="mdl-data-table__cell--non-numeric"><div class="mdl-grid mdl-grid--nesting"><div class="mdl-cell mdl-cell--2-col"><b>TTL: </b>'+(arr[i].ttl)/(60*60)+'hours <br><b>TARGET: </b>'+arr[i].target+'</div></div></td></tr></tbody></table></div>';
                                jQuery('#dig').append(html);
                            }
                            else{
                                var html='<div class="table-responsive"><table width="100%"align="center" class="table table-striped custom_table-border mdl-data-table mdl-js-data-table mdl-shadow--3dp mh-table"><tbody><tr><td class="mdl-data-table__cell--non-numeric"><b>'+arr[i].type+'</b></td><td class="mdl-data-table__cell--non-numeric"><div class="mdl-grid mdl-grid--nesting"><div class="mdl-cell mdl-cell--2-col"><b>TTL: </b>'+arr[i].ttl+'<br><b>DATA: </b>'+arr[i].host+'</div></div></td></tr></tbody></table></div>';
                                jQuery('#dig').append(html);
                            }
                        }
                    }else{
                        jQuery('#dig').append("<b>records not found</b>");
                    }
                }
            }

        });
    });

    <?php if(!empty($_POST['domain'])) {

        ?>

        jQuery(".dig-button:first").trigger("click");
        jQuery(".dig-button:first").focus();
   <?php } ?>
});
</script>
<?php } ?>
<script>

document.getElementById("dig-form").addEventListener("submit",function(evt)
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
<script>
jQuery(document).on('click', '.tabination_sm .dig-button', function(){
  jQuery('.dig-button').removeClass('active'); // remove active for all first.
  jQuery(this).addClass('active'); // add active for clicked element
});
</script>