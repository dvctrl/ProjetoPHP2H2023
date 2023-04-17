<?php
    $nomes = array("Jose", "Marcia","Pedro");

    array_unshift($nomes, "Ana");
    array_unshift($nomes, "Debis");

    foreach ( $nomes as $item){
        echo "<br/>".$item;
    }

?>