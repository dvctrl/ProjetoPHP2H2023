<?php
    $ano = 2023; 
    function exibir(){
        GLOBAL $ano;
        $ano++;
        return $ano;
    }

    echo exibir();
    

?>