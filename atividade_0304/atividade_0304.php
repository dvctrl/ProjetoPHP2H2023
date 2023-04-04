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

    $num1 = 20;
    $num2 = 20;
    $operacao = 1; 

    echo "===== CALCULADORA =====
    <br/>Informe os dois numeros, por gentileza";

    echo "<br/>você digitou os numeros ".$num1." e ".$num2;

    echo "<br/>===== SELECIONE A OPERAÇÃO =====
    <br/> 1 - SOMA<br/> 2 - SUBTRAÇÃO<br/> 3 - MULTIPLICAÇÃO<br/> 4 - DIVISÃO<br/>";


    switch($operacao){
        case 1:
            $valor = somar($num1, $num2);
            break;
        case 2:
            echo "<br/>SELECIONADO: SUBTRAÇÃO ➡ A subtração dos valores é: ".subtracao($num1, $num2);
            break;
        case 3:
            echo "<br/>SELECIONADO: MULTIPLICAÇÃO ➡ A multiplicação dos valores é: ".multiplicacao($num1, $num2);
            break;
        case 4:
            echo "<br/>SELECIONADO: DIVISÃO ➡ A divisão dos valores é:".divisao($num1, $num2);
            break;
        default: echo" <br/> Opção informada invalida: ";
            break;                     
    }

    imprimir($valor);



    function imprimir($valor){
        echo "o resultado da operação é: ".$valor;
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