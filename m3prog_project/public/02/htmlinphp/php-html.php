<?php 

$titel = "Een php html voorbeeld pagina";
$IMG = "https://sb.kaleidousercontent.com/67418/1920x1100/2ed9107761/bg.png";
$Auteur = "GoldyMAsterdam";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <main>
    <h1><?php echo $titel; ?></h1>
    <img src="<?php echo $IMG; ?>" alt="<?php echo $titel; ?>" />
    
    <section>
        <p><?= "Auteur: ". "$Auteur"; ?> </p>
    </section>
  </main>
</body>
</html>