<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $information = [
        'maandag' => 20,
        'dinsdag' => 14,
        'woensdag' => 34,
        'donderdag' => 4,
        'vrijdag' => 41,
        'zaterdag' => 10,
        'zondag' => 1
    ];
    ?>
    <h1> Ophalen met sleutel </h1>
    <?php $vandaag = "maandag"; ?>
    <p><?= $vandaag;?> is het <?= $information[$vandaag];?>graden</p>
    <?php $vandaag = "dinsdag"; ?>
    <p><?= $vandaag;?> is het <?= $information[$vandaag];?>graden</p>
    <?php $vandaag = "woensdag"; ?>
    <p><?= $vandaag;?> is het <?= $information[$vandaag];?>graden</p>
    <?php $vandaag = "donderdag"; ?>
    <p><?= $vandaag;?> is het <?= $information[$vandaag];?>graden</p>
    <?php $vandaag = "vrijdag"; ?>
    <p><?= $vandaag;?> is het <?= $information[$vandaag];?>graden</p>

        <table style="border: 0.2   rem; border-color: white; border-style: solid; border-radius: 1rem; padding: 2rem;">
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
            <?php foreach($information as $key => $value): ?>
            <tr>
            <td class="key-td"><?php echo $key; ?></td>
            <td class="value-td"><?php echo $value; ?></td>
            </tr>
    </body>
    <?php endforeach; ?>
</html>
