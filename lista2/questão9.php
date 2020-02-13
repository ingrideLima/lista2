<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questçao9</title>
</head>
<body>

<?php

$tentativas = 0;
while(true){
	$numeros= rand(0, 50);
	$tentativas++;
	echo "Números ".$numeros."<br />";
	if($numeros == 30){
		echo "Número Encontrado em ".$tentativas." tentativas.";
		break;
	}

}

?>
    
</body>
</html>