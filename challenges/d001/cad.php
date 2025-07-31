<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Final Result</h1>
        <section id=sec-result>
            <?php
                $number = $_GET["number"];
                $ant = $number - 1;
                $succ = $number + 1;
                echo "<p> The chosen number is <strong>$number</strong> </p>";
                echo "<p> Its antecessor is <strong>$ant</strong> </p>";
                echo "<p> Its successor is <strong>$succ</strong> </p>";
            ?>
            <div id="div-input">
                <a href="javascript:history.go(-1)">
                    Back
                </a>
            </div>
        </section>
    </main>
</body>
</html>