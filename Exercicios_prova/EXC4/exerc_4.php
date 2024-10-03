<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
}
function CalculaRetangulo($lado1, $lado2){
    return $lado1 * $lado2;
}

$resultado = CalculaRetangulo($lado1,$lado2);

if ($resultado > 50) {
    $tag = 'h1';
} else {
    $tag = 'h3';
}
?>

</<?php echo $tag; ?> class="resultado">
        A área do retângulo com lados <?php echo $lado1; ?> e <?php echo $lado2; ?> Metros, é: <?php echo $resultado; ?> Metros
</<?php echo $tag; ?>>