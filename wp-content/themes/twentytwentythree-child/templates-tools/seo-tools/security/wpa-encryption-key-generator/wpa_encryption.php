<?php
header('Content-Type: text/html; charset=ISO-8859-1');
function randomPassword($length,$count, $characters) {
 
    // $length - the length of the generated password
    // $count - number of passwords to be generated
    // $characters - types of characters to be used in the password
    
    // define variables used within the function    
    $symbols = array();
    $passwords = array();
    $used_symbols = '';
    $pass = '';
 
    // an array of different character types    
    $symbols["lower_case"] = 'abcdefghijklmnopqrstuvwxyz';
    $symbols["upper_case"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols["numbers"] = '1234567890';
    $symbols["special_symbols"] = '!"#&\'\,:;?@';
    $symbols["basic_math"] = '+-*=';
    $symbols["standard_math"] = '%\|^~()<>[]{}';
    $symbols["enhanced_math"] = '¹²³¼½¾±×÷µ°';
    $symbols["currency"] = '$¢£¤¥';
    $symbols["french_lower_case"] = 'àâäèéêëîïôœùûüÿ';
    $symbols["french_upper_case"] = 'ÀÂÄÈÉÊËÎÏÔŒÙÛÜŸ';
    $symbols["french_miscellaneous"] = 'Çç«»';
    $symbols["german_lower_case"] = 'äöü';
    $symbols["german_upper_case"] = 'ÄÖÜß';
    $symbols["spanish_lower_case"] = 'áéíóúñü';
    $symbols["spanish_upper_case"] = 'ÀÉÍÓÚÑÜ';
    $symbols["spanish_miscellaneous"] = '¿¡«»';
 
 
    $characters = explode(",",$characters); // get characters types to be used for the passsword
    foreach ($characters as $key=>$value) {
        $used_symbols .= $symbols[$value]; // build a string with all characters
    }
    $symbols_length = strlen($used_symbols) - 1; //strlen starts from 0 so to get number of characters deduct 1
     
    for ($p = 0; $p < $count; $p++) {
        $pass = '';
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0,$symbols_length); // get a random character from the string with all characters
           
            $pass .= $used_symbols[$n]; // add the character to the password string
        }
        $passwords[] = $pass;
    }
     
    return $passwords; // return the generated password
}

$length;

if (!empty($_POST['length'])) {
    $length = $_POST['length'];
   
} else {
    $length = $_POST['customlength'];
   
}
// print_r("HERE".$length);
// die;
$lowerCase;
$upperCase;
$numbers;
$specialSymbols;
$basicMath;
$standardMath;
$enhancedMath;
$currency;
$frenchLowerCase;
$frenchUpperCase;
$frenchMiscellaneous;
$germanLowerCase;
$germanUpperCase;
$spanishLowerCase;
$spanishUpperCase;
$spanishMiscellaneous;
if (isset($_POST['lower_case'])) {
    $lowerCase = $_POST['lower_case'];
   
}
if (isset($_POST['upper_case'])) {
    $upperCase = $_POST['upper_case'];
   
}
if (isset($_POST['numbers'])) {
    $numbers = $_POST['numbers'];
   
}
if (isset($_POST['special_symbol'])) {
    $specialSymbols = $_POST['special_symbol'];
   
}
if (isset($_POST['basic_math'])) {
    $basicMath = $_POST['basic_math'];
   

}
if (isset($_POST['standard_math'])) {
    $standardMath = $_POST['standard_math'];
   

}
if (isset($_POST['enhanced_math'])) {
    $enhancedMath = $_POST['enhanced_math'];
   

}
if (isset($_POST['currency'])) {
    $currency = $_POST['currency'];


}
if (isset($_POST['french_lower_case'])) {
    $frenchLowerCase = $_POST['french_lower_case'];
 
}
if (isset($_POST['french_upper_case'])) {
    $frenchUpperCase = $_POST['french_upper_case'];
   
}
if (isset($_POST['french_miscellaneous'])) {
    $frenchMiscellaneous = $_POST['french_miscellaneous'];
   
}
if (isset($_POST['german_lower_case'])) {
    $germanLowerCase = $_POST['german_lower_case'];
   
}
if (isset($_POST['german_upper_case'])) {
    $germanUpperCase = $_POST['german_upper_case'];
   
}
if (isset($_POST['spanish_lower_case'])) {
    $spanishLowerCase = $_POST['spanish_lower_case'];
   
}
if (isset($_POST['spanish_upper_case'])) {
    $spanishUpperCase = $_POST['spanish_upper_case'];
   
}
if (isset($_POST['spanish_miscellaneous'])) {
    $spanishMiscellaneous = $_POST['spanish_miscellaneous'];
    
}

$characters = "";

if(isset($lowerCase)){
    $characters = $lowerCase;

}
if(isset($upperCase)){
    if(empty($characters)){
        $characters = $upperCase;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$upperCase;//lowercase,uppercase
    }
}
if(isset($numbers)){
    if(empty($characters)){
        $characters = $numbers;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$numbers;
    }
}
if(isset($specialSymbols)){
    if(empty($characters)){
        $characters = $specialSymbols;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$specialSymbols;
    }
}
if(isset($basicMath)){
    if(empty($characters)){
        $characters = $basicMath;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$basicMath;
    }
}
if(isset($standardMath)){
    if(empty($characters)){
        $characters = $standardMath;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$standardMath;
    }
}
if(isset($enhancedMath)){
    if(empty($characters)){
        $characters = $enhancedMath;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$enhancedMath;
    }
}
if(isset($currency)){
    if(empty($characters)){
        $characters = $currency;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$currency;
    }
}
if(isset($frenchLowerCase)){
    if(empty($characters)){
        $characters = $frenchLowerCase;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$frenchLowerCase;
    }
}
if(isset($frenchUpperCase)){
    if(empty($characters)){
        $characters = $frenchUpperCase;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$frenchUpperCase;
    }
}
if(isset($frenchMiscellaneous)){
    if(empty($characters)){
        $characters = $frenchMiscellaneous;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$frenchMiscellaneous;
    }
}
if(isset($germanLowerCase)){
    if(empty($characters)){
        $characters = $germanLowerCase;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$germanLowerCase;
    }
}
if(isset($germanUpperCase)){
    if(empty($characters)){
        $characters = $germanUpperCase;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$germanUpperCase;
    }
}
if(isset($spanishLowerCase)){
    if(empty($characters)){
        $characters = $spanishLowerCase;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$spanishLowerCase;
    }
}
if(isset($spanishUpperCase)){
    if(empty($characters)){
        $characters = $spanishUpperCase;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$spanishUpperCase;
    }
}
if(isset($spanishMiscellaneous)){
    if(empty($characters)){
        $characters = $spanishMiscellaneous;
    }
    else{
        $temp = $characters;
        $characters = $temp.",".$spanishMiscellaneous;
    }
}

 $my_passwords = randomPassword($length,5,$characters);

 print_r(implode(' , ', $my_passwords));
// header('Location: /nobs/resources/tools/wpa-encryption-key-generator/');
// exit;
?>