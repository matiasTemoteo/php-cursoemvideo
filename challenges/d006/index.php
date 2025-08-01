<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style_d006.css">
    <title>Anatomia da Divisão</title>
</head>
<body>
    <?php
        $dividendo = $_GET["dividendo"] ?? 1;
        $divisor = $_GET["divisor"] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER["PHP_SELF"];?>" method="get">
            <div>
                <label for="dividendo">Dividendo</label>
                <input type="number" name="dividendo" id="dividendo"
                    value="<?=$dividendo?>" step="1"
                >
            </div>
            <div>
                <label for="divisor">Divisor</label>
                <input type="number" name="divisor" id="divisor"
                    value="<?=$divisor?>" step="1"
                >
            </div>
            <div>
                <input type="submit" value="Analisar">
            </div>
        </form>
        <section>
            <h2>Estrutura da Divisão</h2>
            <?php
                $quociente = intdiv($dividendo, $divisor);
                $resto = $dividendo % $divisor;

                echo "<div id='div-result'>";
                echo "<div>$dividendo</div>";
                echo "<div>$divisor</div>";
                echo "<div>$resto</div>";
                echo "<div>$quociente</div>";
                echo "</div>";
            ?>
        </section>
    </main>
</body>
</html>