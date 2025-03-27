<?php 

// celcius naar Fahrenheit
$celsius = $_GET['celsius'];
$fahrenheit =  ($celsius * 1.8) + 32;
$input = $_GET['celsius'];
echo "Celsius: $input <br>";
echo "Fahrenheit: $fahrenheit <br>";
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";


?>