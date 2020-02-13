<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questão11</title>
</head>
<body>

    <?php

    echo "<table border=1>";

    for($linha = 1; $linha <= 10; $linha++){
        echo "<tr>";
        for($coluna = 1; $coluna <= 5; $coluna++){
            echo "<td>linha ".$linha." - coluna ".$coluna."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";


    ?>
    
</body>
</html>