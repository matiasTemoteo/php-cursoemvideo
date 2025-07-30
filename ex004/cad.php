<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
    <style>
        main {
            text-align: center;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Processing Result</h1>
    </header>
    <main>
        <?php 
            $name = $_GET["name"] ?? "No name";
            $sName = $_GET["sName"] ?? "No Sup Name";
            echo "<p>Nice to meet you <strong>$name $sName</strong></p> This is my site!";
        ?>
        <p><a href="javascript:history.go(-1)">Back</a></p>
    </main>
</body>
</html>
