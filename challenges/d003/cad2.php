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
                /*
                    Using 'numfmt_create()' and
                    'numfmt_format_currency()' functions.

                    * By default only works in servers.
                */
                const COTATION = 5.89;
                $currReais = $_GET["currency"];
                $currDollar = $currReais / COTATION;

                $pattern = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                $currReaisToShow = numfmt_format_currency($pattern, $currReais, "BRL");

                $currDollarToShow = numfmt_format_currency($pattern, $currDollar, "USD");

                $cotationToShow = numfmt_format_currency($pattern, COTATION, "BRL");

                echo "<p> Your $currReaisToShow are equivalent to <strong> 
                $currDollarToShow</strong> </p><br>";

                echo "<p><strong>Static Cotation of $cotationToShow </strong> informed directly in code</p><br>";

                
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