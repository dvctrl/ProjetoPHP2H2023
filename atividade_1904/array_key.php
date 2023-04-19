<?php

    $nomes = array("MA" => "Maria", "ZE" => "Jose","PE" => "Pedro", "AN" => "ANA" );
    while($chave = key($nomes)){
        echo "\n".$chave;
        next($nomes);
    }

?>