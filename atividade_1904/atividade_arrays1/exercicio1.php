<?php
    $soma = 0;
    $alunos = array("João" => 7, "Maria" => 8);
   
    $valores = array_values($alunos);

    for ($i = 0; $i < 2; $i++){
        $soma = $soma + $valores[$i]; 
    }
    echo $soma; 


 
   

?>