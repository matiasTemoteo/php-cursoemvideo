<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_d009.css">
    <title>Média Aritmética</title>
</head>
<body>
    <?php 
        $v1 = $_GET["v1"] ?? 0;
        $v2 = $_GET["v2"] ?? 0;
        $p1 = $_GET["p1"] ?? 1;
        $p2 = $_GET["p2"] ?? 1;
    ?>
    <main>
        <section id="sec-input">
            <h1>Médias Aritméticas</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>">
                <div>
                    <label for="v1">1º Valor</label>
                    <input type="number" name="v1" id="v1"
                        value="<?=$v1?>" required
                    >
                </div>
                <div>
                    <label for="p1">1º Peso</label>
                    <input type="number" name="p1" id="p1"
                        value="<?=$p1?>" min="1" required
                    >
                </div>
                <div>
                    <label for="v2">2º Valor</label>
                    <input type="number" name="v2" id="v2"
                        value="<?=$v2?>" required
                    >
                </div>
                <div>
                    <label for="p2">2º Peso</label>
                    <input type="number" name="p2" id="p2"
                        value="<?=$p2?>" min="1" required
                    >
                </div>
                <div>
                    <input type="submit" value="Calcular Médias">
                </div>
            </form>
        </section>
        <section id="sec-result">
            <h2>Cálculo das Médias</h2>
            <div>
                <?php
                    $media = number_format(($v1 + $v2) / 2, 2, ',');
                    $mediaPon = number_format(
                        (($v1 * $p1) + ($v2 * $p2)) /
                        ($p1 + $p2), 2, ','
                    );

                    echo "<p>Analisando os valores $v1 e $v2:</p>";
                    echo "<ul>";
                    echo "<li>A <strong>Média Aritmética simples</strong> entre os valores é igual a $media</li>";
                    echo "<li>A <strong>Média Aritmética Ponderada com os pesos $p1 e $p2 é igual a $mediaPon</strong></li>";
                    echo "</ul>";
                ?>
            </div>
        </section>
    </main>
</body>
</html>