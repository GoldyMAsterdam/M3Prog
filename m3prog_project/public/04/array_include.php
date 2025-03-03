<?php 
   $reviews = 
   [
       ["demon's souls",10],
       ["mario wonder",9.5],
       ["mega man 2",8],
   ];

   $announcements = [
        "a.html",
        "b.html",
        "c.html",
        "d.html",
        "e.html"
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array include</title>
</head>
<body>
    <?php

    for ($i = 0; $i < count($reviews); $i++) {
    $review = $reviews[$i];

    $title = $review[0];
    $cijfer = $review[1];
    }

    echo $title. "<br>";
    echo $cijfer. "<br>";

    for ($i = 0; $i < count($announcements); $i++) { 
        $announcement = $announcements[$i];
        include "announcements/$announcement";
    }
    ?>
</body>
</html>