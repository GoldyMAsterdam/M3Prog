<?php 
  $afstand = 1.09;
  $prijsLiter = 1.89;
  $prijsTrein = "60 euro";
  $tankInhoud = 50;

  $literGebruikt = 72.8;
  $aantalTanken = 1; 
  $kostenReisAuto = $literGebruikt * $prijsLiter;
  $kostenReisTrein = $prijsTrein;

if($kostenReisAuto > $kostenReisTrein) {
    echo "Je kan beter met de auto gaan". "<br>";
}
else if($kostenReisAuto < $kostenReisTrein) {
    echo "Je kan beter met de trein gaan". "<br>";
}

echo "Afstand: $afstand". "<br>";
echo "Prijs per liter $prijsLiter". "<br>";
echo "Prijs met trein $prijsTrein". "<br>";
echo "Hoeveel liter zit er in de tank? $tankInhoud". "<br>";
echo "Hoeveel liter moet er gebruikt worden? $literGebruikt". "<br>";
echo "Hoevaak moet ik hiervoor tanken? $aantalTanken". "<br>";
echo "Totale kosten reizen met de auto: $kostenReisAuto". "<br>";
echo "Totale kosten reizen met de trein: $kostenReisTrein". "<br>";





  /*DATA
  /Je gaat op vakantie met de auto van Amsterdam naar Frankrijk naar de plaats Bordeaux.
  Je auto gebruikt 1 liter benzine per 15 km.
  In de tank van je auto kan 50 liter benzine. */

