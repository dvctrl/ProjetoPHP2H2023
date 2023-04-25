<?php
    $v = array(1 => 'a', 3 => 'b', 6 => 'c', 8 => 'd');

    print_r($v);
    /* esta é uma forma onde posso customizar a chave, relacionando-a com um valor.  */
?>

<?php
    $v = array("KA" => 'Karen', "AB" => 'Abel', "DA" => "David");
    $v["VE"] = "VEIGA";

    print_r($v); 
?>

<?php
    $v = array("KA" => 'Karen', "AB" => 'Abel', "DA" => "David");
    $v["VE"] = "VEIGA";
    /* posso criar vetores dentro de um vetor */
    $v["Time"] = array("goleiro" => 'weverton', 
                        "defesa" => 'Gustavo Gomes', 
                        "meio campista" => array("Zé Raphael", "Rafael Veiga"),
                        "Atacante" => "Rony Rustico");
    $v["Time"]["Campeão da America"] = true; 



    print_r($v); 
?>

<?php
    $v = array("KA" => 'Karen', "AB" => 'Abel', "DA" => "David");
    $v["VE"] = "VEIGA";
    /* posso criar vetores dentro de um vetor */
    



   foreach($v as $campo => $valor){
    echo "o campo $campo é $valor";
   }
?>