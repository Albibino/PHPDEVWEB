<?php
$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb" => array(
                "bancoDados 1",
                "engSoft 1"
            )
        ),
        "4a Fase" => array(
            "Intro Web",
            "bancoDados 2",
            "engSoft 2"
        )
    )
);
function imprimirArvore($array, $nivel = 0) {
    foreach ($array as $chave => $valor) {
        echo str_repeat("-", $nivel). " "."<br>";
        if (is_array($valor)) {
            echo $chave . "\n";
            imprimirArvore($valor, $nivel + 1);
        } else {
            echo $valor . "\n";
        }
    }
}

imprimirArvore($pastas);