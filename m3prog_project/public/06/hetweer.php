<?php

$dag = $_GET["dag"];

$voorspelling = [
    "ma" => 20,
    "di" => 21,
    "wo" => 29,
    "do" => 19,
    "vr" => 24,
    "za" => 22,
    "zo" => 23
];

$weer_icons = [
    "ma" => "https://github.com/progsen/M3Prog_backend/blob/main/les-06-getpost/icons/cloud.png?raw=true",
    "di" => "https://github.com/progsen/M3Prog_backend/blob/main/les-06-getpost/icons/rain.png?raw=true",
    "wo" => "https://github.com/progsen/M3Prog_backend/blob/main/les-06-getpost/icons/snow.png?raw=true",
    "do" => "https://github.com/progsen/M3Prog_backend/blob/main/les-06-getpost/icons/sun.png?raw=true",
    "vr" => "https://github.com/progsen/M3Prog_backend/blob/main/les-06-getpost/icons/cloud.png?raw=true",
    "za" => "https://github.com/progsen/M3Prog_backend/blob/main/les-06-getpost/icons/rain.png?raw=true",
    "zo" => "https://github.com/progsen/M3Prog_backend/blob/main/les-06-getpost/icons/thunder.png?raw=true"
];

$fahrenheit = ($voorspelling[$dag] * 9/5) + 32;
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hetweer.css">
    <title>Het Weer</title>
</head>
<body>
    <div class="weather-container">
        <h1>Het Weer</h1>
        
        <div class="weather-info">
            <h2><?php echo ucfirst($dag); ?></h2>
            <img class="weather-icon" src="<?php echo $weer_icons[$dag]; ?>" alt="Weer icoon">
            <div class="temperature">
                <?php echo $voorspelling[$dag]; ?>°C
                <div class="fahrenheit"><?php echo round($fahrenheit, 1); ?>°F</div>
            </div>
        </div>

        <div class="nav-links">
            <a href="hetweer.php?dag=ma">Maandag</a>
            <a href="hetweer.php?dag=di">Dinsdag</a>
            <a href="hetweer.php?dag=wo">Woensdag</a>
            <a href="hetweer.php?dag=do">Donderdag</a>
            <a href="hetweer.php?dag=vr">Vrijdag</a>
            <a href="hetweer.php?dag=za">Zaterdag</a>
            <a href="hetweer.php?dag=zo">Zondag</a>
        </div>
    </div>
</body>
</html>