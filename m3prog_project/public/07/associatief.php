<?php

$verbruik = [
    'Fohn' => 29,
    'Koelkast' => 10,
    'TV' => 20,
    'Wasmachine' => 10,
    'PC' => 20,
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="associatief.css">
    <title>Associatief</title>
</head>
<body>
    <?php foreach($verbruik as $key => $value): ?>
        <p><?php echo $key; ?> verbruikt <?php echo $value; ?> kWh</p>
</body>
<?php endforeach; ?>
<h1> Totaal verbruik </h1>
<?php
    $totaal = 0;

    foreach($verbruik as $key => $value) {
        $totaal += $value;
    }
    ?>

    <p><?php echo $totaal; ?> kWh</p>

</body>
</html>
