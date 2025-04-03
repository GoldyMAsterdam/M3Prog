<?php

$json = '{"naam":"God of war","prijs":39.99,"voorraad":150,"beschrijving":"God of war is een actie-avontuur spel"}';

$object = json_decode($json);

print_r($object);

echo "<br>";
echo $object->naam;
echo "<br>";
echo $object->prijs = 29.99;
echo "<br>";
echo $object->voorraad = 20;
echo "<br>";
echo $object->beschrijving;

$json = json_encode($object);
echo "<br>";
echo $json;
