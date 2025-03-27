<?php

class student {
    public $name; 
    public $gemiddeldeCijfer;
}

class dataObject {
    public $studenten;
}

$mario = new student();
$mario->name="Mario";
$mario->gemiddeldeCijfer=8;

$bowser = new student();
$bowser->name="Bowser";
$bowser->gemiddeldeCijfer=2.8;


$peach = new student();
$peach->name="Peach";
$peach->gemiddeldeCijfer=9.8;


$wario = new student();
$wario->name="Wario";
$wario->gemiddeldeCijfer=10;


$dataObject = new dataObject();
$dataObject->studenten = [$mario,$bowser,$peach,$wario];

echo json_encode($dataObject);