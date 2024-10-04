<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6 - William Wollert</title>
</head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h3>Insira o preço por kg e a quantidade comprada (em kg) para cada item:</h3>

            <label for="maca_preco">Preço da Maçã (R$/kg):</label>
            <input type="number" step="0.01" id="maca_preco" name="maca_preco" required><br><br>

            <label for="maca_kg">Quantidade de Maçã (kg):</label>
            <input type="number" step="0.01" id="maca_kg" name="maca_kg" required><br><br>

            <label for="melancia_preco">Preço da Melancia (R$/kg):</label>
            <input type="number" step="0.01" id="melancia_preco" name="melancia_preco" required><br><br>

            <label for="melancia_kg">Quantidade de Melancia (kg):</label>
            <input type="number" step="0.01" id="melancia_kg" name="melancia_kg" required><br><br>

            <label for="laranja_preco">Preço da Laranja (R$/kg):</label>
            <input type="number" step="0.01" id="laranja_preco" name="laranja_preco" required><br><br>

            <label for="laranja_kg">Quantidade de Laranja (kg):</label>
            <input type="number" step="0.01" id="laranja_kg" name="laranja_kg" required><br><br>

            <label for="repolho_preco">Preço do Repolho (R$/kg):</label>
            <input type="number" step="0.01" id="repolho_preco" name="repolho_preco" required><br><br>

            <label for="repolho_kg">Quantidade de Repolho (kg):</label>
            <input type="number" step="0.01" id="repolho_kg" name="repolho_kg" required><br><br>

            <label for="cenoura_preco">Preço da Cenoura (R$/kg):</label>
            <input type="number" step="0.01" id="cenoura_preco" name="cenoura_preco" required><br><br>

            <label for="cenoura_kg">Quantidade de Cenoura (kg):</label>
            <input type="number" step="0.01" id="cenoura_kg" name="cenoura_kg" required><br><br>

            <label for="batatinha_preco">Preço da Batatinha (R$/kg):</label>
            <input type="number" step="0.01" id="batatinha_preco" name="batatinha_preco" required><br><br>

            <label for="batatinha_kg">Quantidade de Batatinha (kg):</label>
            <input type="number" step="0.01" id="batatinha_kg" name="batatinha_kg" required><br><br>

            <input type="submit" value="Calcular">
        </form>

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
        ?>
    </body>
</html>