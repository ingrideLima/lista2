<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao15</title>
</head>
<body>

    <?php

    echo "<table border=1>";

    for($linha = 1; $linha <= $_GET["linhas"]; $linha++){
        echo "<tr>";
        for($col = 1; $col <= $_GET["col"]; $col++){
            echo "<td>linha ".$linha." - col".$col."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>
</html>