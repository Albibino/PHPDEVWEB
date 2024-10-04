<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor_a_vista = $_POST['valoravista'];
    }
    
    $valor_parcela = 489.65; 
    $numero_parcelas = 60;

    function valor_total_financiamento($valor_parcela,$numero_parcelas){
        $valor_total_financiamento = $valor_parcela * $numero_parcelas;
        return $valor_total_financiamento;
    }

    $valor_total_financiamento = valor_total_financiamento($valor_parcela,$numero_parcelas);

    function juros_pagos($valor_total_financiamento, $valor_a_vista){
        $juros_pago = $valor_total_financiamento - $valor_a_vista;
        return $juros_pago;
    }

    $juros_pago = juros_pagos($valor_total_financiamento,$valor_a_vista);

    echo "<p>Valor à vista do carro: R$ " . number_format($valor_a_vista, 2, ',', '.') . "</p>";
    echo "<p>Valor total do financiamento: R$ " . number_format($valor_total_financiamento, 2, ',', '.') . "</p>";
    echo "<p>Juros pagos no financiamento: R$ " . number_format($juros_pago, 2, ',', '.') . "</p>";
