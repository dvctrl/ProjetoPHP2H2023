<?php

    // array associativa 

    $salarios = array("João" => 2000, "Pedro" => 1000, "Maria" => 500);

    echo "\nSalário de João é ".$salarios['João']."<br/>";
    echo "\nSalário de Pedro é ".$salarios['Pedro']."<br/>";
    echo "\nSalário de Maria é ".$salarios['Maria']."<br/>";

    $salarios['João'] = "alto";
    $salarios['Pedro'] = "medio";
    $salarios['Maria'] = "pedro";

    echo "\n------------------------------------------------";
    echo "\nSalário de João é ".$salarios['João']."<br/>";
    echo "\nSalário de Pedro é ".$salarios['Pedro']."<br/>";
    echo "\nSalário de Maria é ".$salarios['Maria']."<br/>";

?>

<?php

    

?>