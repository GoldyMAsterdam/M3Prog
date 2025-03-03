<?php 
$games = ["Fortnite", "Hypixel Skyblock", "Minecraft", "Warframe", "Rainbow Six Siege"];

echo "<pre>";
print_r($games);
echo "</pre>";

echo "<pre>";
var_dump($games);
echo "</pre>";

echo "<pre>";
echo $games[2];
echo "</pre>";

echo "<pre>";
echo $games[4];
echo "</pre>";

echo count($games). "<br>";

array_push($games, "Apex Legends", "Valorant");

$games[] = "Apex Legends";

echo count($games). "<br>";

print_r($games). "<br>";

echo "<br>";

sort($games);
echo implode(", ". "<br>", $games)
?>
