<?php

include 'reiskosten.php';

$kosten_berlijn = berekenRitKosten(663, 15, 1.90);
$kosten_stockholm = berekenRitKosten(1438, 20, 1.46);
$kosten_kiev = berekenRitKosten(1991, 18.47, 2.23);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reiskostengebruik.css">
    <title>Document</title>
</head>
<body>
<article>
    <?php
    echo "Berlijn: €" . number_format($kosten_berlijn, 2) . "<br>";
    echo "Stockholm: €" . number_format($kosten_stockholm, 2) . "<br>";
    echo "Kiev: €" . number_format($kosten_kiev, 2) . "<br>"; ?>
</article>
</body>
</html>