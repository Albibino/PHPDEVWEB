<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor_vista = $_POST['valoravista'];
    }
    $taxa_inicial = 0.015;
    $aumento_taxa = 0.005;

    function calcular_parcela($valor_vista, $taxa_juros, $num_parcelas) {
        $montante = $valor_vista * (1 + ($taxa_juros * $num_parcelas));
        $valor_parcela = $montante / $num_parcelas;
        return array('montante' => $montante, 'parcela' => $valor_parcela);
    }

    $resultado_24 = calcular_parcela($valor_vista, $taxa_inicial, 24);
    $resultado_36 = calcular_parcela($valor_vista, $taxa_inicial + $aumento_taxa, 36);
    $resultado_48 = calcular_parcela($valor_vista, $taxa_inicial + 2 * $aumento_taxa, 48);
    $resultado_60 = calcular_parcela($valor_vista, $taxa_inicial + 3 * $aumento_taxa, 60);

    echo "<p>Valor à vista da moto: R$ " . number_format($valor_vista, 2, ',', '.') . "</p>";
    echo "<h4>Opções:</h4>";
    echo "<p>24 parcelas de R$ " . number_format($resultado_24['parcela'], 2, ',', '.') . " com juros de 1,5%<br>";
    echo "Valor total a ser pago: R$ " . number_format($resultado_24['montante'], 2, ',', '.') . "</p>";
    echo "<p>36 parcelas de R$ " . number_format($resultado_36['parcela'], 2, ',', '.') . " com juros de 2,0%<br>";
    echo "Valor total a ser pago: R$ " . number_format($resultado_36['montante'], 2, ',', '.') . "</p>";
    echo "<p>48 parcelas de R$ " . number_format($resultado_48['parcela'], 2, ',', '.') . " com juros de 2,5%<br>";
    echo "Valor total a ser pago: R$ " . number_format($resultado_48['montante'], 2, ',', '.') . "</p>";
    echo "<p>60 parcelas de R$ " . number_format($resultado_60['parcela'], 2, ',', '.') . " com juros de 3,0%<br>";
    echo "Valor total a ser pago: R$ " . number_format($resultado_60['montante'], 2, ',', '.') . "</p>";