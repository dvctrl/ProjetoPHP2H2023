<?php

    /* array engloba dois campos. 
    
        -> vetores e matrizes 
        -> vetores para uma linha; 
    */

    $nome1 = "Maria";
    $nome2 = "João";
    $nome3 = "Pedro";
    $nome4 = "Paulo";
    $nome5 = "Lucas";
     echo ("$nome1<br/>$nome2<br/>$nome3<br/>$nome4<br/>$nome5");

    
    
?>
<?php
    $nome= array("maria","joao","pedro","paulo","lucas");
    echo "<br/>Os nomes no Arrays";

    foreach ($nome as $nomes){
        echo "<br/>".$nomes;
    }

?>
<?php

    echo ("<br/>Exemplo 2");
    $num = array(1,2,3,4,5);

    foreach ($num as $valor){
        echo "Valor é $valor <br/>";
    }

    $num[0] = "um";
    $num[1] = "dois";
    $num[2] = "tres";
    $num[3] = "quatro";
    $num[4] = "cinco";

    foreach($num as $valor){
        echo "Valor é $valor <br/>";
    }

?>