<?php
$sessionId= $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if($text == ""){
    $responce = "CON What would you want to check \n";
    $responce = "1. My Account \n";
    $responce = "1. My Phone Number \n";
    // $responce = "1. My Account \n";
}
else if($text == "1"){
    $responce = "CON Choose Account information you want view \n";
    $responce = "1. Account Number \n";
    $responce = "1. Account BAlance \n";
}else if($text == "2"){
    $responce = "END Your Phone Number is".$phoneNumber;

}else if($text == "1*1"){
    $acctNumber = "ACC1001";

    $responce = "END Your account Number is:".$acctNumber;

}else if($text == "1*2"){
    $balance = "KES 10,000";

    $responce = "END Your Balance is:".$balance;

}
header('Content-type;text/plain');

echo $responce;

?>