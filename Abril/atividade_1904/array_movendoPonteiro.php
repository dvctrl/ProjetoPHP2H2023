<?php

    $nomes = array("MA" => "Maria", "ZE" => "Jose","PE" => "Pedro", "AN" => "ANA" );

    echo "<br/> Next: ".next($nomes);
    echo "<br/> End: ".end($nomes);
    echo "<br/> Prev: ".prev($nomes);
    echo "<br/> Reset: ".reset($nomes);

?>