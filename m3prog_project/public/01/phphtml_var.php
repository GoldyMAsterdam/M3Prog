<?php 
$title = "Mijn mooie website";
$datum = date("d-m-Y");
$tijd = date("H:i");
$favorieteGame = "Super metroid";
$mooisteGetal = 7;
$FavorieteStad = "Amsterdam";
$Mooiste = "M";

?>


<!DOCTYPE html>
<html lang="nl">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h2>De datum vandaag is:<?php echo $datum?>, <?php echo $tijd?> uur.
        
        <p><h2>Mijn favoriete game</h2><?php echo $favorieteGame;?></p>
        <p><h2>Mooiste Getal:</h2><?= $mooisteGetal ?></p>
        <p><h3>Favoriete Stad:</h3><?= $FavorieteStad ?></p>
        <p><h4>Mooiste:</h4><?= $Mooiste?></p>
    </body>
</html>