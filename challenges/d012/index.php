<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_d012.css">
    <title>Calculadora de Tempo</title>
</head>
<body>
    <?php 
        $totSec = $_GET["totSec"];
    ?>
    <main>
        <section id="sec-input">
            <h1>Calculadora de Tempo</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <div>
                    <label for="totSec">
                        Qual é o total de segundos?
                    </label>
                    <input type="number" name="totSec" id="totSec"
                        value="<?=$totSec?>" required min="1"
                    >
                </div>
                <div>
                    <input type="submit" value="Calcular">
                </div>
            </form>
        </section>
        <section id="sec-result">
            <h2>Totalizando tudo</h2>
            <div>
                <?php
                    $semanas = intdiv($totSec, 604800);
                    $dias = intdiv($totSec % 604800, 86400);
                    $horas = intdiv($totSec % 86400, 3600);
                    $minutos = intdiv($totSec % 3600, 60);
                    $segundos = $totSec % 60;

                    echo "<p> Analisando o valor que você digitou, " . number_format($totSec, 0, ',', '.') .
                    "equivalem a um total de:</p><br>";

                    echo "<ul>";
                    echo "<li>$semanas semanas</li>";
                    echo "<li>$dias dias</li>";
                    echo "<li>$horas horas</li>";
                    echo "<li>$minutos minutos</li>";
                    echo "<li>$segundos segundos</li>";
                    echo "</ul>";
                ?>
            </div>
        </section>
    </main>
</body>
</html>