<?php
    
    #array para notas
    $notasArr =  array(1,7,3,6,8);
    #array para faltas
    $faltasArr = array(1,0,0,0,0,1,1,1,0,0);
    #func para media
    function CalcMedia ($notasArr) {
        $media = 0;
        for ($i = 0; $i < count(value: $notasArr); $i++){
            $media += $notasArr[$i];            
        };
        $media = $media / count(value: $notasArr);
        return $media;    
    }

    #func para aprovação acima d e7
    function Calcfreq(){

    }
    #func para aprovação por frequencia
    function CalcAprvFreq(){

    }

    #exibe mensagem
    function exibeMensagem(){
        
    }

?>