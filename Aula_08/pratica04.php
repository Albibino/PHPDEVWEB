<?php

$salario1 = 1000;
$salario2 = 2000;
$salario2 = $salario1;
$salario2 += 1;
$salario1 *= 1.1;

for ($i = 0; $i <= 100; $i++) {
    if ($i == 50) {
        break;
    } else {
        $salario1 += 1;
    }
}

echo "<br>";

if ($salario1 > $salario2) {
    echo "sal1 = ".$salario1;
} else {
    echo "sal2 = ".$salario2;
    echo "sal1 = ".$salario1;
}