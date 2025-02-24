<?php 
// 01 
$standaardString = 'hello world<br>';
$extraString = 'extra world<br>'; 

$totaleString = "hello" ." ". "world" ."<br>";

$Voornaam = "Luigi";
$Achternaam = "Mario";
$fullName = $Voornaam ." ". $Achternaam ."<br>";

echo $fullName; 

$tekst = "$Voornaam kocht 1 appel". "<br>";

echo $tekst;


echo $standaardString;
echo $extraString;

// 02 

$Naam = "Yoshi";
$enemy = "Koopa Troopa's";
$Ondertekentdoor = "Bowser";
$Emailtekst = "
Beste $Naam<br>
Helaas moeten wij uw verzoek afwijzen.<br>
Onze $enemy vinden het niet leuk om opgegeten te worden<br>
<br>
Hoogachtend<br>
$Ondertekentdoor<br>
<br>
PS:<br>
De princess is in haar kasteel... voor nu :> <br>
<br>
";
echo $Emailtekst;

?>
