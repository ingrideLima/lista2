<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio</title>
</head>
<body>

    <?php
    $max = $_GET["max"];

    $cont = 0;
    $soma = 0;

    while($cont <= $max){
        $soma += $cont;
        $cont++;
    }

    echo " o total da soma: ".$soma;


    ?>  

</body>
</html>