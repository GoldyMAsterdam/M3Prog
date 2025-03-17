<?php

$getal1 = 60;
$getal2 = 40;
$getal3 = 100;
$getal4 = 10;
$getal5 = 4;
$getal6 = 2;
$getal8 = 6;
$getal9 = 6;


function add($getal1, $getal2) {
    $som = $getal1 + $getal2; 
    return $som;
}

function subtract($getal3, $getal4) {
    $som2 = $getal3 - $getal4; 
    return $som2;
}

function divide($getal5, $getal6) {
    $som3 = $getal5 / $getal6; 
    return $som3;
}

function multiply($getal8, $getal9) {
    $som4 = $getal8 * $getal9; 
    return $som4;
}

echo add($getal1, $getal2). "<br>";
echo subtract($getal3, $getal4). "<br>";
echo divide($getal5, $getal6). "<br>";
echo multiply($getal8, $getal9). "<br>";


