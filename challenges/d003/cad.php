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
        <h1>Currency Converter v1.0</h1>
        <br>
        <section id=sec-result>
            <?php
                const COTATION = 5.89;
                $currReais = $_GET["currency"];
                $currDollar = $currReais / COTATION;

                $currReaisToShow = number_format($currReais, 2, ',', '.');

                $currDollarToShow = number_format($currDollar, 2, '.', ',');

                $cotationToShow = number_format(COTATION, 2, ',', '.');

                echo "<p> Your R\$ $currReaisToShow are equivalent to <strong>US\$ 
                $currDollarToShow</strong> </p><br>";

                echo "<p><strong>Static Cotation of R\$ $cotationToShow</strong> informed directly in code</p><br>";


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