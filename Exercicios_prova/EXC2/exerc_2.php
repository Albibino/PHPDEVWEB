<?php 

function DivisivelPor2($numero){
    if ($numero % 2== 0) {
        return True;
    } else{
        return False;
    }
}

$numero = 11;

function RetornaValor($numero){
    if (DivisivelPor2($numero)){
        echo "O número: ", $numero, " é divisivel por 2.";
    } else{
        echo "O número: ", $numero, " não é divisivel por 2.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 - William Wollert</title>
    <style>
        .resultado {
            color: <?php echo $cor; ?>;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1 class="resultado"><?php RetornaValor($numero); ?></h1>
</body>
</html>