<?php
    $valorProduto=245;
    $codigo=3;

    echo"---insira o código abaixo correspondente para somar a porcentagem---\n|1->10%|\n|3->25%|\n|4->30%|\n|8->50%|\n";  

    switch($codigo){
        case 1:
            $valorProduto += $valorProduto*0.10;
            echo "o novo valor do produto é R$".$valorProduto; 
            break;
        case 3:
            $valorProduto += $valorProduto*0.25;
            echo "o novo valor do produto é R$".$valorProduto;
            break;
        case 4:
            $valorProduto += $valorProduto*0.30;
            echo "o novo valor do produto é R$".$valorProduto;
            break;
        case 8: 
            $valorProduto += $valorProduto*0.50;
            echo "o novo valor do produto é R$".$valorProduto;
            break;
        default:
            echo "valor invalido";
            break;
    }

?>