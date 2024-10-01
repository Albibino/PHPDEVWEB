<?php
function CalculaRetangulo($lado1, $lado2){
    return $lado1 * $lado2;
}

$lado1 = 20;
$lado2 = 2;

$resultado = CalculaRetangulo($lado1,$lado2);

if ($resultado > 50) {
    $tag = 'h1';
} else {
    $tag = 'h3';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4 - William Wollert</title>
    <style>
        .resultado {
            color: black;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <<?php echo $tag; ?> class="resultado">
        A área do retângulo com lados <?php echo $lado1; ?> e <?php echo $lado2; ?> Metros, é: <?php echo $resultado; ?> Metros
    </<?php echo $tag; ?>>
</body>
</html>
