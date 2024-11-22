<?php 
    define("notas", array(6, 8, 10, 7));
    define("aulas", array(0, 1, 0, 0, 1, 0, 0, 1, 0, 0));
    
    function calcMediaNotas() {
        $somaNotas = 0;
        for($i = 0; $i < count(notas); $i++) {
            $somaNotas += notas[$i];
        }
        $medNotas = $somaNotas / count(notas);
        return $medNotas;
    }

    function verifStatusNotas($medNotas) {
        if($medNotas >= 7) {
            return "Aprovado";
        }
        return "Reprovado";
    }

    function calcFrequencia() {
        $somaFrequencia = 0;
        for($i = 0; $i < count(aulas); $i++) {
            $somaFrequencia += aulas[$i];
        }
        $freq = 100 - (($somaFrequencia * 100) / $i);
        return $freq;
    }

    function verifStatusFreq($freq){
        if($freq >= 70) {
            return "Aprovado";
        }
        return "Reprovado";
    }

    function exibeMensagem($mensagem) {
        echo $mensagem;
    }

    $medNotas = calcMediaNotas();
    $freq = calcFrequencia();

    exibeMensagem("Média de Notas: " . $medNotas . "<br>" .
                  "Status Nota: " . verifStatusNotas($medNotas) . "<br>" . 
                  "Frequencia: " . $freq . "<br>" .
                  "Status Frequencia: " . verifStatusFreq($freq) . "<br>");