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
        <h1>Working with random numbers</h1>
        <section id=sec-result>
            <p>Generating random numbers between 0 and 100...</p>
            <?php
                $number = mt_rand(0, 100);
                echo "<p>The generated number is <strong>$number</strong></p>";
            ?>
            <div id="div-submit">
                <input type="button" value="Generate"
                    onclick="window.location.reload()";
                >
            </div>
        </section>
    </main>
</body>
</html>