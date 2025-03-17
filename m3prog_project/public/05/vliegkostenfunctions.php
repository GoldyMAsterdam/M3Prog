<?php

function berekenVliegKosten($afstand_km, $prijs_liter_kerosine, $bagage, $welkeclass) {
    $kosten_kerosine = ($afstand_km * $prijs_liter_kerosine) / 30;
    $kosten_bagage = $bagage * 5;
    $kosten_euro = $kosten_kerosine + $kosten_bagage;

    if ($welkeclass == 'business') {
        $kosten_euro *= 1.5;
    }
    if ($welkeclass == 'economy') {
        $kosten_euro *= 1;
    }

    return $kosten_euro;
}