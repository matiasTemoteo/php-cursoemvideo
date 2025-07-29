<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>PHP Example</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo"); // GMT-3
        echo "Today is " . date("D/M/Y");
        echo " and the current hour is " . date("G:i:s");
        echo "<br>";
        echo "Today is " . date("d/m/y");
        echo " and the current hour is " . date("G:i:s");
    ?>
</body>
</html>