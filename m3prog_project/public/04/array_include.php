<?php 
   $reviews = 
[
    ["demon's souls", 10, "L Game"], 
    ["mario wonder", 9.5, "L Game"], 
    ["mega man 2", 8, "L Game"]
];

   $announcements = 
   [
        "a.html",
        "b.html",
        "c.html",
        "d.html",
        "e.html"
   ];


for ($i = 0; $i < count($reviews); $i++) {
    $review = $reviews[$i];
    $title = $review[0];
    $cijfer = $review[1];
    $conclusion = $review[2];
    echo "<h2>" .$title. "</h2>";
    echo "<h4>" .$cijfer. "</h4>";
    echo "<p>" .$conclusion. "</p>";
}

   for ($i = 0; $i < count($announcements); $i++) { 
        $announcement = $announcements[$i];
        include "announcements/$announcement";
    }
    
?>
    