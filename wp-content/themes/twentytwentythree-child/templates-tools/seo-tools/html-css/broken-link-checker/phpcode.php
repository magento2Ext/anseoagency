<?php

// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: *");

  $key=array(        '0' =>'Bad Host',
                    '100'=> 'Continue',
                    '101'=> 'Switching Protocols',
                    '200'=> 'OK',
                    '201'=> 'Created',
                    '202'=> 'Accepted',
                    '203'=> 'Non-Authoritative Information',
                    '204'=> 'No Content',
                    // '205'=> 'Reset Content',
                    // '206'=> 'Partial Content',
                    // '300'=> 'Multiple Choices',
                    // '301'=> 'Moved Permanently',
                    // '302'=> 'Moved Temporarily',
                    '303'=> 'See Other',
                    '304'=> 'Not Modified',
                    '305'=> 'Use Proxy',
                    '400'=> 'Bad Request',
                    '401'=> 'Unauthorized',
                    // '402'=> 'Payment Required',
                    '403'=> 'Forbidden',
                    '404'=> 'Not Found',
                    '405'=> 'Method Not Allowed',
                    '406'=> 'Not Acceptable',
                    '407'=> 'Proxy Authentication Required',
                    '408'=> 'Request Time-out',
                    '409'=> 'Conflict',
                    '410'=> 'Gone',
                    '411'=> 'Length Required',
                    '412'=> 'Precondition Failed',
                    '413'=> 'Request Entity Too Large',
                    '414'=> 'Request-URI Too Large',
                    '415'=> 'Unsupported Media Type',
                    '500'=> 'Internal Server Error',
                    '501'=> 'Not Implemented',
                    // '502'=> 'Bad Gateway',
                    '503'=> 'Service Unavailable',
                    '504'=> 'Gateway Time-out',
                    '505'=> 'HTTP Version not supported');
               $key1=array_keys($key);

               $http_status_codes = array(
                100 => 'Informational: Continue',
                101 => 'Informational: Switching Protocols',
                102 => 'Informational: Processing',
                200 => 'Successful: OK',
                201 => 'Successful: Created',
                202 => 'Successful: Accepted',
                203 => 'Successful: Non-Authoritative Information',
                204 => 'Successful: No Content',
                205 => 'Successful: Reset Content',
                206 => 'Successful: Partial Content',
                207 => 'Successful: Multi-Status',
                208 => 'Successful: Already Reported',
                226 => 'Successful: IM Used',
                300 => 'Redirection: Multiple Choices',
                301 => 'Redirection: Moved Permanently',
                302 => 'Redirection: Found',
                303 => 'Redirection: See Other',
                304 => 'Redirection: Not Modified',
                305 => 'Redirection: Use Proxy',
                306 => 'Redirection: Switch Proxy',
                307 => 'Redirection: Temporary Redirect',
                308 => 'Redirection: Permanent Redirect',
                400 => 'Client Error: Bad Request',
                401 => 'Client Error: Unauthorized',
                402 => 'Client Error: Payment Required',
                403 => 'Client Error: Forbidden',
                404 => 'Client Error: Not Found',
                405 => 'Client Error: Method Not Allowed',
                406 => 'Client Error: Not Acceptable',
                407 => 'Client Error: Proxy Authentication Required',
                408 => 'Client Error: Request Timeout',
                409 => 'Client Error: Conflict',
                410 => 'Client Error: Gone',
                411 => 'Client Error: Length Required',
                412 => 'Client Error: Precondition Failed',
                413 => 'Client Error: Request Entity Too Large',
                414 => 'Client Error: Request-URI Too Long',
                415 => 'Client Error: Unsupported Media Type',
                416 => 'Client Error: Requested Range Not Satisfiable',
                417 => 'Client Error: Expectation Failed',
                418 => 'Client Error: I\'m a teapot',
                419 => 'Client Error: Authentication Timeout',
                420 => 'Client Error: Enhance Your Calm',
                420 => 'Client Error: Method Failure',
                422 => 'Client Error: Unprocessable Entity',
                423 => 'Client Error: Locked',
                424 => 'Client Error: Failed Dependency',
                424 => 'Client Error: Method Failure',
                425 => 'Client Error: Unordered Collection',
                426 => 'Client Error: Upgrade Required',
                428 => 'Client Error: Precondition Required',
                429 => 'Client Error: Too Many Requests',
                431 => 'Client Error: Request Header Fields Too Large',
                444 => 'Client Error: No Response',
                449 => 'Client Error: Retry With',
                450 => 'Client Error: Blocked by Windows Parental Controls',
                451 => 'Client Error: Redirect',
                451 => 'Client Error: Unavailable For Legal Reasons',
                494 => 'Client Error: Request Header Too Large',
                495 => 'Client Error: Cert Error',
                496 => 'Client Error: No Cert',
                497 => 'Client Error: HTTP to HTTPS',
                499 => 'Client Error: Client Closed Request',
                500 => 'Server Error: Internal Server Error',
                501 => 'Server Error: Not Implemented',
                502 => 'Server Error: Bad Gateway',
                503 => 'Server Error: Service Unavailable',
                504 => 'Server Error: Gateway Timeout',
                505 => 'Server Error: HTTP Version Not Supported',
                506 => 'Server Error: Variant Also Negotiates',
                507 => 'Server Error: Insufficient Storage',
                508 => 'Server Error: Loop Detected',
                509 => 'Server Error: Bandwidth Limit Exceeded',
                510 => 'Server Error: Not Extended',
                511 => 'Server Error: Network Authentication Required',
                598 => 'Server Error: Network read timeout error',
                599 => 'Server Error: Network connect timeout error',
                      );

               function code($code){
// if($code!=NULL){

           switch ($code) {
                    case 0: $text = 'Bad Host'; break;
                    case 100: $text = 'Continue'; break;
                    case 101: $text = 'Switching Protocols'; break;
                    case 200: $text = 'OK'; break;
                    case 201: $text = 'Created'; break;
                    case 202: $text = 'Accepted'; break;
                    case 203: $text = 'Non-Authoritative Information'; break;
                    case 204: $text = 'No Content'; break;
                    case 205: $text = 'Reset Content'; break;
                    case 206: $text = 'Partial Content'; break;
                    case 300: $text = 'Multiple Choices'; break;
                    case 301: $text = 'Moved Permanently'; break;
                    case 302: $text = 'Moved Temporarily'; break;
                    case 303: $text = 'See Other'; break;
                    case 304: $text = 'Not Modified'; break;
                    case 305: $text = 'Use Proxy'; break;
                    case 400: $text = 'Bad Request'; break;
                    case 401: $text = 'Unauthorized'; break;
                    case 402: $text = 'Payment Required'; break;
                    case 403: $text = 'Forbidden'; break;
                    case 404: $text = 'Not Found'; break;
                    case 405: $text = 'Method Not Allowed'; break;
                    case 406: $text = 'Not Acceptable'; break;
                    case 407: $text = 'Proxy Authentication Required'; break;
                    case 408: $text = 'Request Time-out'; break;
                    case 409: $text = 'Conflict'; break;
                    case 410: $text = 'Gone'; break;
                    case 411: $text = 'Length Required'; break;
                    case 412: $text = 'Precondition Failed'; break;
                    case 413: $text = 'Request Entity Too Large'; break;
                    case 414: $text = 'Request-URI Too Large'; break;
                    case 415: $text = 'Unsupported Media Type'; break;
                    case 500: $text = 'Internal Server Error'; break;
                    case 501: $text = 'Not Implemented'; break;
                    case 502: $text = 'Bad Gateway'; break;
                    case 503: $text = 'Service Unavailable'; break;
                    case 504: $text = 'Gateway Time-out'; break;
                    case 505: $text = 'HTTP Version not supported'; break;
                    default:
                        $text = 'Unknown http status code' . htmlentities($code);
                     //$text = 'Bad Host'; 
                    break;
                }
             //  }
               return  $text;
              }

  include('simple_html_dom.php');



// function url_exists($url) {
//     $ch = @curl_init($url);
//     @curl_setopt($ch, CURLOPT_HEADER, TRUE);
//     @curl_setopt($ch, CURLOPT_NOBODY, TRUE);
//     @curl_setopt($ch, CURLOPT_FOLLOWLOCATION, FALSE);
//     @curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//     $status = array();
//       usleep(100);
//     preg_match('/HTTP\/.* ([0-9]+) .*/', @curl_exec($ch) , $status);
//     if( $status[1]==''){
//         $status[1]=0;
//     }
//     return $status[1];
// }
 
function url_exists($url) {

                        $options = array(
                                    CURLOPT_RETURNTRANSFER => true,     
                                    CURLOPT_HEADER         => true,    
                                    CURLOPT_NOBODY         => true ,  
                                    CURLOPT_FOLLOWLOCATION => true,     
                                    CURLOPT_ENCODING       => "",      
                                    CURLOPT_USERAGENT      => "spider", 
                                    CURLOPT_AUTOREFERER    => true,     
                                    CURLOPT_CONNECTTIMEOUT => 170,      
                                    CURLOPT_TIMEOUT        => 150,      
                                    CURLOPT_MAXREDIRS      => 150,  
                                    CURLOPT_IPRESOLVE      =>CURL_IPRESOLVE_V4   
                                );

                            $ch      = curl_init($url);
                            curl_setopt_array( $ch, $options );
                            $content = curl_exec( $ch );
                               // $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                            $err     = curl_errno( $ch );
                            $errmsg  = curl_error( $ch );
                            $httpcode  = curl_getinfo( $ch,CURLINFO_HTTP_CODE);
                            curl_close( $ch );

                            return  $httpcode;

                        }


    //                     function url_exists($url){
    //                          $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_HEADER, 1);
    // curl_setopt($ch , CURLOPT_RETURNTRANSFER, 1);
    // $data = curl_exec($ch);
    // $headers = curl_getinfo($ch);
    // curl_close($ch);

    // return $headers['http_code'];
    //                     }