<?php

$afstand_km = 10;
$km_per_liter = 10;
$liter_prijs = 1.89;

function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs) {
    $aantal_liters = $afstand_km / $km_per_liter;
    $kosten_euro = $aantal_liters * $liter_prijs;
    return $kosten_euro;
}