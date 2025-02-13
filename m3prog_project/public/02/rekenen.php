<?php 
$getal1 = 5.21214;
$afgerond = ceil($getal1);
$getal2 = 1201.222;
$afgerond2 = floor($getal2);
$rand1 = rand(0, 205031);
$rand2 = rand(0, 15315640);
$rand3 = rand(0, 6931896);
$rand4 = $rand1 + $rand2;
$rand5 = $rand4 / $rand3;

echo "Als je $getal1 afrond dan krijg je: $afgerond". "<br>";
echo "Als je $getal2 afrond dan krijg je: $afgerond2". "<br>";
echo $rand1. "<br>";
echo $rand2. "<br>";
echo $rand3. "<br>";
echo $rand5. "<br>";
?>