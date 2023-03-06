<?php
    $nome = "Geraldo"; 

    function exibir(){
        $nome = "Fabiola";

        echo (" <br>valor dentro da variavel da função ".$nome); 
        
    }
    
    echo  ("valor fora da variavel da função ".$nome); 
    exibir(); //chamada da função

?>