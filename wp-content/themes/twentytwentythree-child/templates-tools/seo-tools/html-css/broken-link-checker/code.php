<?php
require_once ('phpcode.php');

ini_set('display_errors','1');
       
function getPage($link,$key1){
  
			$href = array();
			$src = array();
			$src2 = array();
			$rel = array();
			$links = array();
			$links1 = array();
			$links2= array();
			$links3= array();

	$html = new simple_html_dom();
	$html->load_file($link);
     $j=0;
	foreach ($html->find('html') as $k){
          foreach ($k->find('a') as $k2){
               if(!in_array($k2->href, $links)){
                    if (strpos($k2->href,'http://') !== false || strpos($k2->href,'https://') !== false){
                    $j++; 

                         $href[]=$k2->href;
                    }
               }
               $links[]=$k2->href;
          }


          foreach ($k->find('script') as $k2){
               if(!in_array($k2->src, $links1)){
                    if (strpos($k2->src,'http://') !== false || strpos($k2->src,'https://') !== false){ 

                         $src[]= str_replace("data:image/svg+xml,%3Csvg%20xmlns='",'', $k2->src);
                         $j++;
                    }
               }
               $links1[]=$k2->src;
          }


          foreach ($k->find('link') as $k2){
               if(!in_array($k2->href, $links2)){
                    if (strpos($k2->href,'http://') !== false || strpos($k2->href,'https://') !== false){ 

                         $rel[]= str_replace("data:image/svg+xml,%3Csvg%20xmlns='",'', $k2->href);
                         $j++;
                    }
               }
               $links2[]=$k2->href;
          }


          foreach ($k->find('img') as $k2){
               if(!in_array($k2->src, $links3)){
                    if (strpos($k2->src,'http://') !== false || strpos($k2->src,'https://') !== false){ 

                         $src2[]= str_replace("data:image/svg+xml,%3Csvg%20xmlns='",'', $k2->src);
                         $j++;
                    }
               }
               $links3[]=$k2->src;
          }

     }
     return array_merge($href,$src2,$src,$rel);
}



               if (isset($_POST['myurl'])){


                        $url = isset($_POST['myurl']) ? $_POST['myurl'] : '';
                        //$url = isset($_POST['myurl']) ? $_POST['myurl'] : ''; echo "$url";die;

                        $url1=explode("://", $_POST['myurl']);

                        if($url1[0]=='http' || $url1[0]=='https'){
                          $url=$url1[1];
                        }

                        if (!(strpos($url,'http://') === 0) ) $url = 'http://'.$url;

                          if(http($url)===false){
                            echo  json_encode(['da'=>'error']);

                             return;
                          }

                          $txt = getPage($url,$key1);

                        $i=0;
                     $val1=array();
                       foreach ($txt  as $val) {

								         $httpcode=url_exists($val);

                           if($httpcode!=200 && in_array($httpcode,$key1)){
                                     $i++;
                                $val1[]= array($i,$val,code($httpcode));



                            }
                       }

                         echo json_encode($val1);
                         unset($_POST['myurl']);
               }




function http($url){

  $ch = curl_init($url);
                       curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                       curl_setopt($ch,CURLOPT_TIMEOUT,10);
                       $output = curl_exec($ch);
                      $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                     curl_close($ch);

                if($httpcode==0 || $httpcode==404|| $httpcode==403){ 
                         return false;
                       }
 }
