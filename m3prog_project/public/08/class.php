<?php

$artiekel = [
    "naam" => "Hello World Badge",
    "Prijs" => 5.99,
    "Voorraad" => 200
];

$json = json_encode($artiekel);
echo $json;

$object = json_decode($json); // het object slaat decode alles in de json en bewaart het in de variable object

print_r($object);
