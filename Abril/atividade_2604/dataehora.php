<?php
    $texto ="micro Computador";

    $tamanho =strlen($texto); //tamanho da string

    echo "<br/>" .$texto."possui".$tamanho."caracters";

    echo "<br/>".strtoupper($texto);

    echo "<br/>".strtolower($texto);

    echo "<br/>".ucfirst($texto);

    echo "<br/>".ucwords($texto);

    //3 caracteres apartir da posiçao 13

    echo "<br/>".substr($texto,13,3);

    echo "<br/>".str_replace("micro","nano",$texto);

?>
<?php

    date_default_timezone_set("America/Sao_Paulo");
    $dataAtual = date("d/m/y");

    echo "<br/> Hoje é ".$dataAtual."<br>";

    $hora = date("G:i:s");

    echo "<br/> Hora atual ".$hora."<br>";

    $dataAtual = date("d/m/y h:i:s");

    echo "<br/> Hoje é ".$dataAtual."<br>";


?>