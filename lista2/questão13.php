<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questão13</title>
</head>
<body>

<?php

$adicao = 0;
for($cont = 0; $cont < 10000; $cont += 7){
	$adicao += $cont;
}
echo "adição: ".$adicao;

?>
    
</body>
</html>