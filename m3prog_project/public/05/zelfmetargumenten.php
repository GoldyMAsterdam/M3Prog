<?php 

function convertCurrency($amount, $fromCurrency, $toCurrency) {
  
    $convertTable =["euro_to_yen" => 100];
    $exchangeRate = $convertTable[$fromCurrency . "_to_" . $toCurrency];
    
    $result = $amount * $exchangeRate ;
    echo $result. "<br>";
};

$amount = 100;



// --------------
function sendEmail($to, $from, $subject, $message) {
    $email = $to. "<br>". $from . "<br>". $subject. "<br>". $message ."<br>";
    echo $email;
}



// --------------   
function generateRandomString($length) {
  $lengte = 10;
  echo $lengte. "<br>"; 
}

$length = "length";


// --------------
function calculateArea($length, $width) {
    $result2 = $length. '<br>' . $width;
    echo $result2. "<br>";
}
$width = "width";



// -------------
convertCurrency($amount, "euro", "yen");

generateRandomString(10);

calculateArea(10, 20);

sendEmail("leraar@college.nl","student@college.nl", "huiswerk", "voor volgende week");

?>
