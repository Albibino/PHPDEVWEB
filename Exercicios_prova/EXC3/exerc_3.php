<?php 
function CalculaQuadrado($lado){
    $area = $lado * $lado;
    return $area;
}

$lado = 10;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 - William Wollert</title>
    <style>
        .resultado {
            color: black;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1 class="resultado"><?php echo "A área do quadrado é: " . CalculaQuadrado($lado), " Metros"; ?></h1>
</body>
</html>
