<!-- servidor com exercicios \\10.67.96.195 -->
<?php  

    echo "Calculadora soma <br/>";

    $a = $_REQUEST['numero1'];
    $b = $_REQUEST['numero2'];
    $c = $a + $b;
    $resultado =  sprintf("A soma dos valores $a e $b é: %.0f ",$c);
    
    echo $resultado;


?>