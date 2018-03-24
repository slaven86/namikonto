
<!-- PHP SKRIPTA KOJA PRIKUPLJA PODATKE UZ POLJA FORMULARA I SALJE NA EMIAL  -->
<?php
$my_email = "radmila.miljkovic56@gmail.com"; 
$errors = array();
if(count($_COOKIE)){foreach(array_keys($_COOKIE) as $value){unset($_REQUEST[$value]);}}
function recursive_array_check_blank($element_value)
{
global $set;
if(!is_array($element_value)){if(!empty($element_value)){$set = 1;}}
else
{
foreach($element_value as $value){if($set){break;} recursive_array_check_blank($value);}
}
}
recursive_array_check_blank($_REQUEST);
if(!defined("PHP_EOL")){define("PHP_EOL", strtoupper(substr(PHP_OS,0,3) == "WIN") ? "\r\n" : "\n");}
function build_message($request_input){if(!isset($message_output)){$message_output ="";}if(!is_array($request_input)){$message_output = $request_input;}else{foreach($request_input as $key => $value){if(!empty($value)){if(!is_numeric($key)){$message_output .= str_replace("_"," ",ucfirst($key)).": ".build_message($value).PHP_EOL.PHP_EOL;}else{$message_output .= build_message($value).", ";}}}}return rtrim($message_output,", ");}

$message = build_message($_REQUEST);
$message = $message . PHP_EOL.PHP_EOL."-- ".PHP_EOL.".";
$message = stripslashes($message);
$subject = " PORUKA SA SAJTA AGENCIJE";         
$subject = stripslashes($subject);
if($from_email)
{
$headers = "From: " . $from_email;
$headers .= PHP_EOL;
$headers .= "Reply-To: " . $_REQUEST['email'];
}
else
{
$from_name = "";
if(isset($_REQUEST['name']) && !empty($_REQUEST['name'])){$from_name = stripslashes($_REQUEST['name']);}
$headers = "From: {$from_name} <{$_REQUEST['email']}>";
}
mail($my_email,$subject,$message,$headers);
?>
<!-- PHP SKRIPTA KOJA PRIKUPLJA PODATKE UZ POLJA FORMULARA I SALJE NA EMIAL  -->


<div id="poruka">
  <h1> Postovani, Vasa poruka je poslata ! </h1>
  
</div>
<meta http-equiv="refresh" content="3;url=index.php">
