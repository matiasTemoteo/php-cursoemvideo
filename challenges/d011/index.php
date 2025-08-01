<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_d011.css">
    <title>Reajustador de Preços</title>
</head>
<body>
    <?php 
        $preco = $_GET["preco"] ?? 0;
        $ajuste = $_GET["ajuste"] ?? 0;
    ?>
    <main>
        <section id="sec-input">
            <h1>Reajustador de Preços</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <div>
                    <label for="preco">
                        Preço do Produto (R$)
                    </label>
                    <input type="number" name="preco" id="preco"
                        value="<?=$preco?>" min="1" required
                    >
                </div>
                <div>
                    <label for="ajuste">
                        Qual será o percentual de reajuste?
                        (<span id="sp_adj"><?=$ajuste?></span>%)
                    </label>
                    <input type="range" name="ajuste" id="ajuste"
                     oninput="changeAdjust()" value="<?=$ajuste?>"
                    >
                </div>
                <div>
                    <input type="submit" value="Reajustar">
                </div>
            </form>
        </section>
        <section id="sec-result">
            <h2>Resultado do Reajuste</h2>
            <div>
                <?php
                    $preco_reaj = $preco + ($preco * ($ajuste / 100));
                ?>
                <p>
                    O produto que custava R$
                    <?=number_format($preco, 2, ',')?>
                    com <strong><?=$ajuste?>% de aumento</strong>
                    vai passar a custar <strong>R$ 
                    <?=number_format($preco_reaj, 2, ',')?>
                    </strong> a partir de agora.
                </p>
            </div>
        </section>
    </main>
    <script>
        function changeAdjust() {
            let adjEl = document.getElementById('ajuste');
            let sp_adj = document.getElementById('sp_adj');
            sp_adj.innerText = adjEl.value;
        }
    </script>
</body>
</html>