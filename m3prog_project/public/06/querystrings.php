<?php 
// http://localhost:88/querystrings.php?stad=Amsterdam&temperatuur=23&land=Nederland
echo $_GET['stad'];
echo $_GET['temperatuur'];
echo $_GET['land'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hoi </h1>
    <p> Het is vandaag <?= $_GET['temperatuur']; ?> graden in Amsterdam, Nederland </p>
</body>
</html>