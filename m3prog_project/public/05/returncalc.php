<?php


function add($getal1, $getal2) {
    $som = $getal1 + $getal2; 
    // return $som;
}

function subtract($getal1, $getal2) {
    $som2 = $getal1 - $getal2; 
    // return $som2;
}

function divide($getal1, $getal2) {
    $som3 = $getal1 / $getal2; 
    // return $som3;
}

function multiply($getal1, $getal2) {
    $som4 = $getal1 * $getal2; 
    // return $som4;
}

$getal1 = 100;
$getal2 = 100;

echo add($getal1, $getal2). "<br>";
echo subtract($getal1, $getal2). "<br>";
echo divide($getal1, $getal2). "<br>";
echo multiply($getal1, $getal2). "<br>";


