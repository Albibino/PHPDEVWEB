<?php

$valor1 = 9;
$valor2 = 2;
$valor3 = 3;

function CalculaValor($valor1, $valor2, $valor3){
    $resultado = $valor1 + $valor2 + $valor3;
    echo $resultado;
}

$cor = "black";

if ($valor1 > 10) {
    $cor = "blue";
}

elseif ($valor2 < $valor3) {
    $cor = "green"; 
}

elseif ($valor3 < $valor1 && $valor3 < $valor2) {
    $cor = "red";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 - William Wollert</title>
    <style>
        .resultado {
            color: <?php echo $cor; ?>;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1 class="resultado">Resultado da soma: <?php CalculaValor($valor1, $valor2, $valor3); ?></h1>
</body>
</html>