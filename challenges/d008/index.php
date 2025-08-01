<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_d008.css">
    <title>Raiz Quadrada e Cúbica</title>
</head>
<body>
    <?php 
        $num = $_GET["num"] ?? 0;
    ?>
    <main>
        <section id="sec-form">
            <h1>Informe um número</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <div>
                    <label for="num">Número</label>
                    <input type="number" name="num" id="num"
                        value="<?=$num?>"
                    >
                </div>
                <div>
                    <input type="submit" value="Calcular Raízes">
                </div>
            </form>
        </section>
        <section id="sec-result">
            <h2>Resultado final</h2>
            <div>
                <?php 
                    $raizQ = sqrt($num);
                    $raizC = $num ** (1/3);

                    echo "Analisando o <strong>número $num </strong>, temos:";
                    echo "<ul>";
                    echo "<li> A sua raíz quadrada é $raizQ</li>";
                    echo "<li> A sua raíz cúbica é $raizC</li>";
                    echo "</il>";
                ?>
            </div>
        </section>
    </main>
</body>
</html>