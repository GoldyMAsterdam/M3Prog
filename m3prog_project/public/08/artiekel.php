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
echo "<br>";

class Artiekel {
    public $naam;
    public $prijs;
    public $voorraad;
}

$game = new Artiekel();
$game->naam="Mario Wonder";
$game->prijs=59.99;
$game->voorraad=50;

echo "<br>";
print_r($game);

$json_game = json_encode($game);
echo $json_game;
