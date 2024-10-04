<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $maca_preco = $_POST['maca_preco'];
        $maca_kg = $_POST['maca_kg'];
        $melancia_preco = $_POST['melancia_preco'];
        $melancia_kg = $_POST['melancia_kg'];
        $laranja_preco = $_POST['laranja_preco'];
        $laranja_kg = $_POST['laranja_kg'];
        $repolho_preco = $_POST['repolho_preco'];
        $repolho_kg = $_POST['repolho_kg'];
        $cenoura_preco = $_POST['cenoura_preco'];
        $cenoura_kg = $_POST['cenoura_kg'];
        $batatinha_preco = $_POST['batatinha_preco'];
        $batatinha_kg = $_POST['batatinha_kg'];

        function CalculaGasto($maca_preco,$maca_kg,$melancia_preco,$melancia_kg,$laranja_preco,$laranja_kg,$repolho_preco,$repolho_kg,$cenoura_preco,$cenoura_kg,$batatinha_preco,$batatinha_kg){
            $gasto_maca = $maca_preco * $maca_kg;
            $gasto_melancia = $melancia_preco * $melancia_kg;
            $gasto_laranja = $laranja_preco * $laranja_kg;
            $gasto_repolho = $repolho_preco * $repolho_kg;
            $gasto_cenoura = $cenoura_preco * $cenoura_kg;
            $gasto_batatinha = $batatinha_preco * $batatinha_kg;
            $total_gasto = $gasto_maca + $gasto_melancia + $gasto_laranja + $gasto_repolho + $gasto_cenoura + $gasto_batatinha;
            return $total_gasto;
        };

        $total_gasto = CalculaGasto($maca_preco,$maca_kg,$melancia_preco,$melancia_kg,$laranja_preco,$laranja_kg,$repolho_preco,$repolho_kg,$cenoura_preco,$cenoura_kg,$batatinha_preco,$batatinha_kg);
        $valor_disponivel = 50.00;

        if ($total_gasto < $valor_disponivel) {
            $valor_sobrando = $valor_disponivel - $total_gasto;
            echo "<p style='color: blue;'>Joãozinho ainda pode gastar R$ " . number_format($valor_sobrando, 2, ',', '.') . ".</p>";
        } elseif ($total_gasto > $valor_disponivel) {
            $valor_faltando = $total_gasto - $valor_disponivel;
            echo "<p style='color: red;'>Joãozinho ficou devendo R$ " . number_format($valor_faltando, 2, ',', '.') . ".</p>";
        } else {
            echo "<p style='color: green;'>Joãozinho gastou exatamente R$ 50,00 e esgotou o saldo para compras!</p>";
        }
    }
    