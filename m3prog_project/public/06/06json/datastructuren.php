<?php
$films = [
    'bioscoop' => [
        'films' => [
            [
                'titel' => 'Inception',
                'details' => [
                    'regisseur' => 'Christopher Nolan',
                    'jaar' => 2010,
                    'genre' => 'Science fiction'
                ]
            ]
        ]
    ]
];

$json = json_encode($films);
echo $json; 