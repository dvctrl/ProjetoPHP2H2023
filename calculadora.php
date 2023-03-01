<?php  

    echo "Calculadora soma <br/>";

    $a = 12;
    $b = 22;
    $c = $a + $b;
    $resultado =  sprintf("A soma dos valores $a e $b é: %.0f ",$c);
    
    echo $resultado;


?>