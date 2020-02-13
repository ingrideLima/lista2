<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questão10</title>
</head>
<body>

    <?php

    $tentativas = 0;
    $adicao = 0;

    while(true){
        $numeros= rand(0, 100);
        $tentativas++;
        $adicao += $numeros;
        if($adicao > 1000){
            echo "Passou de 1.000 com ".$tentativas." sorteios.";
            break;
        }

    }

    ?>
        
</body>
</html>