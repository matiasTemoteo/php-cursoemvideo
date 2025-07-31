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
                $number = $_POST["number"] ?? 0;
                $intPart = (int) $number;
                $decPart = number_format(
                    $number - $intPart, 3
                );

                echo "<p> Analyzing the number <strong>" . number_format($intPart, 3) . "</strong> informed by user:</p> <br>";

                echo "<ul>";

                echo "<li> The integer part is <strong>$intPart</strong> </li>";

                echo "<li> The decimal part is <strong>$decPart</strong> </li>";

                echo "</ul>";
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