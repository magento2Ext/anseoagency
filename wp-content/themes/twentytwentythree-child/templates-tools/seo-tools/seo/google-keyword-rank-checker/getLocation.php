<?php
//if latitude and longitude are submitted

if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){

    //send request and receive json data by latitude and longitude
    $url = 'http://api.geonames.org/countryCodeJSON?lat='.trim($_POST['latitude']).'&lng='.trim($_POST['longitude']).'&username=frames';
    $json = @file_get_contents($url);
    $data = json_decode($json);
  
    $status = $data->countryCode;
    
    //if request status is successful
    if(isset($data->countryCode)){
     
        $location = $data->countryCode;
    }else{
        $location =  '';
    }
    
    //return address to ajax 
    echo $location;
}
?>