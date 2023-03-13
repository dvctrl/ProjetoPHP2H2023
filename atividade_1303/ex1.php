<?php

    $a=20;
    $b=7;
    $valor=$a+$b;

    if($valor>=20){

        $valor = $valor + 8;
        echo "o valor final é ".$valor;

    }else if ($valor <= 20){
        
        $valor = $valor - 5;
        echo "o valor final é ".$valor;
    }

?>