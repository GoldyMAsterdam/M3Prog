<?php 
$hoelangisditwoord = "scrabbleWoord";
$woordlengte = strlen($hoelangisditwoord);

print($woordlengte);
echo "<br>";

/*vraag 1)

    wat is het type het argument van strlen?    
Antwoord: string

vraag 2)
    wat is het type van wat strlen returned?
Antwoord: een int
vraag 3)

    het getal wat strlen returned, wat is dat?
Antwoord: de lengte van de string

*/

$nogeenlangwoord = "Hoiditiseenerglangwoordmetsuperveelkaraktersikwilditsuperlangmakenwantwaaromniet";
$woordlengte2 = strlen($nogeenlangwoord);

print($woordlengte2);

 /* vraag 4)
    hoevaak heb je nu de function strlen aangeroepen?
Antwoord: 2 keer
*/
echo "<br>";
$tweeMacht2 = pow(2,2);
$tweeMacht10 = pow(2,10);
print($tweeMacht10);

$derdemacht = pow(3,4);
echo "<br>";
print($derdemacht);

/*
vraag 1)
hoe geven we het resultaat door?

Antwoord: met een print statement

*/

$Naam = "Wario";
$NaamGroot = strtoupper($Naam);
echo "<br>";
print($NaamGroot);

$Naam2 = "Mario";
$NaamGroot2 = strtolower($Naam2);
echo "<br>";
print($NaamGroot2);