<?php
    $nomes = array("Jose", "Marcia","Pedro");

    array_push($nomes, "Ana");
    array_push($nomes, "Debis");

    foreach ( $nomes as $item){
        echo "<br/>".$item;
    }

?>