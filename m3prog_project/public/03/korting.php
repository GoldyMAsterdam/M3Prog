<?php 

$totaalBesteld = 304;
$verzendKosten = 3.50;
$korting = 0;
$cadeautje = false;

// IF
if($totaalBesteld >= 100) {
    $verzendKosten = 0;
}

if($totaalBesteld >= 250) {
    $korting = 0.05;
}

if($totaalBesteld >= 400) {
    $cadeautje = true;
}

$totaal = $totaalBesteld - ($korting*$totaalBesteld) + $verzendKosten;

echo "Totaal van de bestelde artiekelen $totaalBesteld <br>";
echo "Totaal met verzendkosten wordt het $totaal<br>";

if($cadeautje == true) {
 echo "U Krijgt ook een cadeautje ter waarde van 10 euro <br>";
}
if($cadeautje == false) {
    echo "U krijgt geen cadeautje <br>";
}