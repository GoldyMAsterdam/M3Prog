<?php 
$fahrenheit = 64;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>";

$celsius2 = 64;
$fahrenheit2 =  ($celsius2 * 1.8) + 32;
echo "{$celsius2} graden Celsius = {$fahrenheit2} graden Fahrenheit. <br/>";

// Celsius naar Kelvin
$celsius3 = 12;
$kelvin = $celsius3 + 273.15;
echo "{$celsius3} graden Celsius = {$kelvin} graden Kelvin. <br/>";

// Fahrenheit naar Kelvin
$fahrenheit3 = 64;
$kelvin2 = (($fahrenheit3 - 32) / 1.8) + 273.15;
echo "{$fahrenheit3} graden Fahrenheit = {$kelvin2} graden Kelvin. <br/>";
?>