<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once'CSSValidator/Services/W3C/CSSValidator.php';
  $css= new Services_W3C_CSSValidator();
  $result=$css->validateFragment('body{ font-size:20px;}');
   print_r($result);
 
