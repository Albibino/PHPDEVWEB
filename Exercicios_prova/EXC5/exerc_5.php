<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = $_POST['base'];
    $altura = $_POST['altura'];
}
function CalculaTriangulo($base, $altura){
    $resultado = ($base * $altura) / 2;
    return $resultado;
}

echo "O resultado é: ". CalculaTriangulo($base, $altura);