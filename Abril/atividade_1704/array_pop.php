<?php
$nomes = array("Jose", "Marcia","Pedro");
$excluido = array_pop($nomes);

foreach ( $nomes as $item){
    echo "<br/>".$item;

}
echo "<br/> Nome removido:".$excluido;
?>