<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        if ($numero1 < $numero2) {
            echo "O número ".$numero1." é menor que o número ".$numero2.".";
        } else if ($numero1 == $numero2) {
            echo "Ambos os números são iguais.";
        } else {
            echo "O número ".$numero2." é menor que o número ".$numero1.".";
        }
        
    ?>
</body>
</html>