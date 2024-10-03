<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];
}
function DivisivelPor2($numero){
    if ($numero % 2== 0) {
        return True;
    } else{
        return False;
    }
}

function RetornaValor($numero){
    if (DivisivelPor2($numero)){
        echo "O número: ", $numero, " é divisivel por 2.";
    } else{
        echo "O número: ", $numero, " não é divisivel por 2.";
    }
}

RetornaValor($numero);