<?php
$nomes = array("Jose", "Marcia","Pedro");
$excluido = array_shift($nomes);

foreach ( $nomes as $item){
    echo "<br/>".$item;

}
echo "<br/> Nome removido:".$excluido;
?>