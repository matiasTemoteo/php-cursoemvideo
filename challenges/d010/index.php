<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_d010.css">
    <title>Calculo de Ídade</title>
</head>
<body>
    <?php
        $currDate = (int) date('Y');
        $nascY = $_GET["nasc"] ?? 0;
        $chosenY = $_GET["ch-year"] ?? $currDate;
    ?>
    <main>
        <section id="sec-input">
            <h1>Calculando a sua Ídade</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
                <div>
                    <label for="">Em que ano você nasceu?</label>
                    <input type="number" name="nasc" id="nasc"
                        value="<?=$nascY?>" required
                        min="<?=$currDate - 150?>"
                        max="<?=$currDate - 1?>"
                    >
                </div>
                <div>
                    <label for="ch-year">
                        Quer saber sua idade em que ano? (atualmente estamos em
                        <strong><?=$currDate?></strong>)
                    </label>
                    <input type="number" name="ch-year"
                        id="ch-year" value="<?=$chosenY?>"
                        required min="<?=$nascY + 1?>"
                        max="<?=$currDate + 149?>"
                    >
                </div>
                <div>
                    <input type="submit" value="Qual será minha idade?">
                </div>
            </form>
        </section>
        <section id="sec-result">
            <h2>Resultado</h2>
            <div>
                <?php 
                    $age = (int) $chosenY - (int) $nascY;

                    echo "Quem nasceu em $nascY vai ter <strong>$age anos</strong> em $chosenY";
                ?>
            </div>
        </section>
    </main>
</body>
</html>