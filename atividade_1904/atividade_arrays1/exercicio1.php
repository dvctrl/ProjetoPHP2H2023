<?php
    $soma = 0;
    $alunos = array("João" => 7.8, "Maria" => 8.8, "Alvar" => 5.6, "Thiaguinho" => 6.4, "Dvd" => 6.0, 
    "Marcos" => 6.4, "Fabio" => 3.4, "Marcia" => 5.0, "Debis" => 8.0, "G" => 7.7);
    
   
    $valores = array_values($alunos);

    for ($i = 0; $i < sizeof($valores); $i++){
        $soma = $soma + $valores[$i]; 
    }
    echo ("A média das notas é ".($soma/sizeof($valores))); 


 
   

?>