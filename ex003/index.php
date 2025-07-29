<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Primitive Types Tests</h1>
    <?php
        $num = 0x1A;
        echo "The value is $num";
        print('<br><br>');

        $num2 = 0x1A;
        var_dump($num2);
        print('<br><br>');

        $var = true;
        var_dump($var);
        print('<br><br>');

        $txt = "Alberto";
        var_dump($txt);
        print('<br><br>');

        $numPot = 4e8;
        var_dump($numPot);
        print('<br><br>');

        $numPot = (int) 4e8;
        var_dump($numPot);
        print('<br><br>');

        $numTxt = "145";
        var_dump($numTxt);
        print('<br><br>');

        $numTxt2 = (int) "145";
        var_dump($numTxt2);

        $boolVar = true;
        echo "The value is $boolVar";
        print("<br><br>");

        $boolVar2 = false;
        echo "The value is $boolVar2";
        print("<br><br>");

        $vet = [6, 4, 8];
        var_dump($vet);
        print("<br><br>");

        $vet = [9, 2, 8.5, "Mary", false, -15];
        var_dump($vet);
        print("<br><br>");

        class Person {
            private string $name;
        }

        $p = new Person();
        var_dump($p);
    ?>
</body>
</html>