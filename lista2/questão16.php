<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao16</title>
</head>
<body>

    <?php

    $numero = $_GET["numero"];

    for( $i=0; $i<=10; $i++){
        $multi = $i * $numero;
        echo "$i x $numero = $multi";
        echo"<br />";
    }

    ?>
    
</body>
</html>