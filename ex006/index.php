<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício PHP</title>
</head>
<body>
    <?php
        $value1 = $_GET["v1"] ?? 0;
        $value2 = $_GET["v2"] ?? 0;
    ?>
    <main>
        <h1>Values Sum</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <div>
                <label for="v1">Value 1:</label>
                <input type="number" name="v1" id="v1"
                    value="<?=$value1?>"
                >
            </div>
            <div>
                <label for="v2">Value 2:</label>
                <input type="number" name="v2" id="v2"
                    value="<?=$value2?>"
                >
            </div>
            <div>
                <input type="submit" value="Sum">
            </div>
        </form>

        <section>
            <h2>Sum Result</h2>
            <?php
                $sum = $value1 + $value2;
                echo "<p>";
                echo "
                    The sum between
                    <strong>$value1</strong> and
                    <strong>$value2</strong> is
                    <strong>$sum</strong>
                ";
                echo "</p>";
            ?>
        </section>
    </main>
</body>
</html>