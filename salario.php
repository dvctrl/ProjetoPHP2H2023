<?php
    print("Usando print para exibir na tela <br/>");

        $data = "01 de março de 2023";
        $salario = 1350.00;
        $cargo = "Estagiário";
         
        echo "Arquivo criado em $data <br/>";
        
        printf("Salario mínimo: R$ %.2f <br/>", $salario);

        $texto = sprintf( "%s recebe R$ %.2f por mês",$cargo,$salario);

        echo $texto;
?>