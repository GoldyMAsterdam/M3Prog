<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/pokeloop.css">
    <title>Pokemon</title>
</head>
<body>
    <?php 
    $pokemon = ["Gastly", "Gengar", "Charizard", "Raichu", "Machamp"];
    $images = ["https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/092.png", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/094.png", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/006.png", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/026.png", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/068.png" ];
    
    for ($i = 0; $i < count($pokemon); $i++) { 
        echo "<h1>{$pokemon[$i]}</h1>";
        echo "<img src='{$images[$i]}' alt='{$pokemon[$i]}'>";
    }
    
    ?>
</body>
</html>