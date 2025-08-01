<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_d007.css">
    <title>Slaário Mínimo</title>
</head>
<body>
    <?php
        const SAL_MIN = 1380;
        $sal = $_GET["sal"] ?? 0;

        $pattern = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <section id="sec-form">
            <h1>Informe seu Salário</h1>
            <form action="<?=$_SERVER["PHP_SELF"]?>">
                <div>
                    <label for="sal">Salário (R$)</label>
                    <input type="number" name="sal" id="id"
                        value="<?=$sal?>"
                    >
                </div>
                <div>
                    <p>
                        Considerando o salário mínimo de
                        <strong>
                            <?=numfmt_format_currency(
                                $pattern, SAL_MIN, "BRL"
                            )?>
                        </strong>
                    </p>
                </div>
                <div>
                    <input type="submit" value="Calcular">
                </div>
            </form>
        </section>
        <section id="sec-result">
            <h2>Resultado Final</h2>
            <div>
                <?php
                    $sal_min_eq = intdiv($sal, SAL_MIN);
                    $sal_min_ex = $sal % SAL_MIN;

                    echo "Quem recebe um salário de " .
                    numfmt_format_currency(
                        $pattern, $sal, "BRL"
                    ) .
                    " ganha <strong>
                        $sal_min_eq salários mínimos
                      </strong> +
                    " . numfmt_format_currency(
                        $pattern, $sal_min_ex, "BRL"
                    );
                ?>
            </div>
        </section>
    </main>
</body>
</html>