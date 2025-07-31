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
                $start = date('m-d-Y', strtotime("-7 days"));
                $end = date('m-d-Y');

                $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$start'&@dataFinalCotacao='$end'&\$top=1&\$orderby=dataHoraCotacao%20desc&\$format=json&\$select=cotacaoCompra,dataHoraCotacao";

                $data = json_decode(
                    file_get_contents($url), true
                );
                $cotation = $data['value'][0]['cotacaoCompra'];


                $currReais = $_GET["currency"];
                $currDollar = $currReais / $cotation;


                $pattern = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                $currReaisToShow = numfmt_format_currency($pattern, $currReais, "BRL");

                $currDollarToShow = numfmt_format_currency($pattern, $currDollar, "USD");

                $cotationToShow = numfmt_format_currency($pattern, $cotation, "BRL");

                echo "<p> Your $currReaisToShow are equivalent to <strong> 
                $currDollarToShow</strong> </p><br>";

                echo "<p>Cotation from Banco Central do Brasil. Currenct cotation: <strong>$cotationToShow</strong></p><br>";
            ?>
            <div id="div-input">
                <a href="javascript.history.go(-1)">
                    Back
                </a>
            </div>
        </section>
    </main>
</body>
</html>