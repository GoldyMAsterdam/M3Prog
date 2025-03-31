<?php
$persoon = [
    'voornaam' => 'Luigi',
    'achternaam' => 'Mario',
    'leeftijd' => 19,
    'minst favoriet eten' => 'couscous',
    'woonplaats' => 'Heerhugowaard'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>
    <?php foreach($persoon as $key => $value): ?>
    <tr>
        <td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
