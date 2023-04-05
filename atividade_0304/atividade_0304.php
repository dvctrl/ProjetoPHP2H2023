<?php 

    // crie uma calculadora: operações simples; somar, subtrair, multiplicar e dividir; 

    /* OBRIGATORIAMENTE DEVEMOS UTILIZAR FUNÇÕES
        -> TEMOS QUE EXPLICAR PARA O USUARIO QUAL OPERAÇÃO O USUARIO DEVE REALIZAR; 
        -> O USUASRIO IRA INSERIR OS DOIS NUMEROS. 
        -> ELE DEVERA ESCOLHER QUAL OPERAÇÃO ELE QUER.
        -> RETORNAR PARA QUE O USUARIO: OS NUMEROS DIGITADOS/A OPERAÇÃO SELECIONADA
        E MOSTRAR O RESULTADO DA OPERAÇÃO.
        -> DETALHE IMPORTANTE, QUE É IMPOSSIVEL DIVIDIR POR ZERO.  
    */

    $num1 = 45;
    $num2 = 15;
    $operacao = 1; 

    echo "===== CALCULADORA =====
    <br/>Informe os dois numeros, por gentileza";

    echo "<br/>você digitou os numeros ".$num1." e ".$num2;

    echo "<br/>===== SELECIONE A OPERAÇÃO =====
    <br/> 1 - SOMA<br/> 2 - SUBTRAÇÃO<br/> 3 - MULTIPLICAÇÃO<br/> 4 - DIVISÃO<br/>";


    switch($operacao){
        case 1:
            $op = "soma";
            $valor = somar($num1, $num2);
            break;
        case 2:
            $op = "subtração";
            $valor = subtracao($num1, $num2);
            break;
        case 3:
            $op = "multiplicação";
            $valor = multiplicacao($num1, $num2);
            break;
        case 4:
            $op = "divisão";
            $valor = divisao($num1, $num2);
            break;
        default: echo" <br/> Opção informada invalida: ";
            $op = "";
            $valor = "";
            break;                     
    }

    imprimir($valor,$op);



    function imprimir($valor,$op){
        echo "o resultado da ".$op." é ".$valor;
    }
    function somar($num1, $num2){
        return ($num1 + $num2);
    }
    function subtracao($num1, $num2){
        return ($num1 - $num2);
    }
    function multiplicacao($num1, $num2){
        return ($num1 * $num2);
    }
    function divisao($num1, $num2){
        if($num2 == 0 || $num1 == 0){
            return "OPERAÇÃO INVÁLIDA, NÃO É POSSÍVEL DIVIDIR POR ZERO";
        }
        return ($num1 / $num2);
     }



?>