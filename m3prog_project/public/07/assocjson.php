<?php

$verbruik = [
    'Fohn' => 29,
    'Koelkast' => 10,
    'TV' => 20,
    'Wasmachine' => 10,
    'PC' => 20,
];

$persoon = [
    'voornaam' => 'Luigi',
    'achternaam' => 'Mario',
    'leeftijd' => 19,
    'minst favoriet eten' => 'couscous',
    'woonplaats' => 'Heerhugowaard'
];

$trophiesPerGame = [
    "Demon's souls" => 11,
    "Mario wonder" => 0,
    "Rayman Origins" => 9,
    "Tetris" => 2
];

$information = [
    'maandag' => 20,
    'dinsdag' => 14,
    'woensdag' => 34,
    'donderdag' => 4,
    'vrijdag' => 41,
    'zaterdag' => 10,
    'zondag' => 1
];

$jsonArray = [
    'trophiesPerGame' => $trophiesPerGame,
    'persoon' => $persoon,
    'weer' => $information,
    'verbruik' => $verbruik
];

$json = json_encode($jsonArray);
echo $json;
header("Content-Type: application/json");
