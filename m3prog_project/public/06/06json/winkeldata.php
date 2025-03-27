<?php
$winkel='{
  "winkel": {
    "producten": [
      {
        "productNaam": "Laptop",
        "details": {
          "prijs": 999.99,
          "voorraad": 50
        }
      },
      {
        "productNaam": "Smartphone",
        "details": {
          "prijs": 699.99,
          "voorraad": 100
        }
      }
    ]
  }
}
';

$winkelObj = json_decode($winkel);

echo "Smartphone<br>";
echo $winkelObj->winkel->producten[1]->details->prijs . " euro<br>";

echo "Laptop<br>";
echo $winkelObj->winkel->producten[0]->details->voorraad . " op voorraad"; 