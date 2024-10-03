<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado = $_POST['lado'];
}
function CalculaQuadrado($lado){
    $area = $lado * $lado;
    echo "A área do quadrado  é: ". $area. " metros.";
}

CalculaQuadrado($lado);