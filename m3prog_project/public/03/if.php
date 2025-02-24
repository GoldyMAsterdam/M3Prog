<?php 
$eenBoolVariable = false;
$aantalopvoorraad = 20;
$opvoorraad = $aantalopvoorraad > 0;

if($opvoorraad == false) {
    echo "Dit product is niet op voorraad";
}
?>