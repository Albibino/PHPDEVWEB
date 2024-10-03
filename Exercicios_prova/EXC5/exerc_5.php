<?php

    function CalculaTriangulo($base, $altura){
        $resultado = ($base * $altura) / 2;
        return $resultado;
    }

$base = 10;
$altura = 5;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5 - William Wollert</title>
    <style>
        .resultado {
            color: black;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1 class="resultado"><?php echo "A área do triângulo retângulo é: " . CalculaTriangulo($base, $altura); ?></h1>
</body>
</html>