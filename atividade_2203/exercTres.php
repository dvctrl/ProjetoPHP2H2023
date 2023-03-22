<?php
    $senha = 1234;
    $senhaConf = 1234; 
    $n1 = 100; 
    $n2 = 25;

    echo "Olá usuário, por favor cadastre a sua senha\n";
    echo "============================================\n";
    
    if($senha != $senhaConf){
        echo "|senhas divergentes, programa encerrado!|";
    }else{
        echo "|senha correta, segue o valor da divisão ->".($n1/$n2);
    }


?>