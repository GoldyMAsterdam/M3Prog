<?php

include 'vliegkostenfunctions.php';

$kostenvlieg = berekenVliegKosten(3722, 2.05, 20, 'economy');
$kostenvlieg2 = berekenVliegKosten(9276, 3.11, 10, 'economy');
$kostenvlieg3 = berekenVliegKosten(1991, 1.50, 30, 'business');

echo "Vliegkosten: €" . number_format($kostenvlieg, 2) . "<br>";
echo "Vliegkosten: €" . number_format($kostenvlieg2, 2) . "<br>";
echo "Vliegkosten: €" . number_format($kostenvlieg3, 2) . "<br>";