<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_d013.css">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <?php 
        $valor = $_GET["valor"] ?? 0;
    ?>
    <main>
        <section id="sec-input">
            <h1>Caixa Eletrônico</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>">
                <div>
                    <label for="">
                        Qual valor deseja sacar? (R$)
                    </label>
                    <input type="number" name="valor" id="valor"
                        step="5" value="<?=$valor?>" min="5"
                        required
                    >
                </div>
                <div>
                    <input type="submit" value="Sacar">
                </div>
            </form>
        </section>
        <section id="sec-result">
            <h2>
                Saque de R$ <?=number_format($valor, "2", ",", ".")?>
                realizado
            </h2>
            <div>
                <?php 
                    $qnt100 = intdiv($valor, 100);
                    $qnt50 = intdiv($valor % 100, 50);
                    $qnt10 = intdiv($valor % 50, 10);
                    $qnt5 = intdiv($valor % 10, 5);
                ?>
                <ul>
                    <li>
                        <img src="images/nota_100.jpg" alt="Nota 100 reais">
                        x <?=$qnt100?>
                    </li>
                    <li>
                        <img src="images/nota_50.jpg" alt="Nota 50 reais">
                        x <?=$qnt50?>
                    </li>
                    <li>
                        <img src="images/nota_10.jpg" alt="Nota 10 reais">
                        x <?=$qnt10?>
                    </li>
                    <li>
                        <img src="images/nota_5.jpg" alt="Nota 5 reais">
                        x <?=$qnt5?>
                    </li>
                </ul>
            </div>
        </section>
    </main>
</body>
</html>