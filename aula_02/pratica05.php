<?php

$disciplinas = array ("Banco de dados 2","Estrutura de dados 2","Adm de sistemas de informação","Engenharia de software 2","Programação WEB 2");

$professores = array ("Marco Aurelio Butzke","Fernando Andrade Bastos","Sandro Alencar","Julian","Cleber Nardelli");

for ($i = 0; $i < 5; $i++) {
    echo "Disciplina: ", $disciplinas[$i]," | ","Professor: ", $professores[$i], "<br>";
}

?>