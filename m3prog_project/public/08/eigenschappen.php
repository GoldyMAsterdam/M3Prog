<?php

class LunchItem {
    public $naam;
    public $prijs;
    public $beschrijving;
}

$broodjeBal = new LunchItem();
$broodjeBal->naam = "Broodje jouw bal";
$broodjeBal->prijs = 4.50;
$broodjeBal->beschrijving = "Broodje jouw bal";

$croissant = new LunchItem();
$croissant->naam = "Croissant!";
$croissant->prijs = 0.50;
$croissant->beschrijving = "Lekker croissantje";


$LunchArray = [
    $broodjeBal,
    $croissant
];

$jsonLunchArray = json_encode($LunchArray);
echo "<br>". $jsonLunchArray;

foreach($LunchArray as $item) {
    echo "<br>" . $item->naam . "<br>";
    echo $item->prijs. " euro". "<br>";
    echo $item->beschrijving . "<br>";
}
