<?php

if(isset($_GET['leeftijd']) && isset($_GET['opleiding']))
{
    print_r($_GET['leeftijd']);
    print_r($_GET['opleiding']);
}
else if(isset($_GET['naam']) && isset($_GET['Stack']))
{
    print_r($_GET['naam']);
    print_r($_GET['Stack']);
}
else
{
    echo "Niet alle velden zijn ingevuld";
}
?>