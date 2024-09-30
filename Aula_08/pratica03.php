<?php

    $salario1 = 1000;
    $salario2 = 2000;
    $salario2 = $salario1;
    $salario2 +=1;
    $salario1 *= 1.1;
    
    // echo "Valor do salario 1: ".$salario1,"<br>", "Valor do salario 2: ".$salario2;

    if ($salario1 > $salario2) {
        echo "O Valor do salario 1 é maior que o salario 2";
    } else {
        if ($salario1 < $salario2) {
            echo "O valor do salario 1 é menor que o salario 2";
        } else {
            echo "O valor dos dois salarios são iguais";
        }
    }
?>  