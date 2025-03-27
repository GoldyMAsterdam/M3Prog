<?php

header('Content-Type: application/json');

$steden = [
    "amsterdam",
    "rotterdam",
    "utrecht"
];

$jsonString = json_encode($steden);

echo json_encode($steden);

?>
