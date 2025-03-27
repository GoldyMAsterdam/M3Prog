<?php

header('Content-Type: application/json');

$mario = ["naam" => "Mario", "cijfer" => 7.5];
$wario = ["naam" => "Wario", "cijfer" => 4.5];
$bowser = ["naam" => "Bowser", "cijfer" => 2.8];
$toad = ["naam" => "Toad", "cijfer" => 9.2];

$dataObject = ["students" => [$mario, $wario, $bowser, $toad]];

$jsonString = json_encode($dataObject);

echo $jsonString;

?>

