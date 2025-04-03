<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $json = json_encode($verbruik);
    echo $json;
    header("Content-Type: application/json");?>
    <?php foreach($verbruik as $key => $value): ?>
        <p><?php echo $key; ?> verbruikt <?php echo $value; ?> kWh</p>
</body>
<?php endforeach; ?>
</html>
