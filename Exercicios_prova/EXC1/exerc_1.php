<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
}
$cor = "black";
function CalculaValor($valor1, $valor2, $valor3, &$cor){
    $resultado = $valor1 + $valor2 + $valor3;
    if ($valor1 > 10) {
        $cor = "blue";
    }
    elseif ($valor2 < $valor3) {
        $cor = "green"; 
    }
    elseif ($valor3 < $valor1 && $valor3 < $valor2) {
        $cor = "red";
    }
    return $resultado;
}
$resultado = CalculaValor($valor1, $valor2, $valor3, $cor);
echo "<div style='color: $cor;'>Resultado: $resultado</div>";
?>
