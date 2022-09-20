<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devop Tp 4</title>
</head>
<body>
    <h1>TP DEVOPS</h1>
    <?php
        date_default_timezone_set('Europe/Paris');
        $date = date("d-m-Y");
        $heure = date("H:i");
        Print("Nous sommes le $date et il est $heure");
    ?>
</body>
</html>