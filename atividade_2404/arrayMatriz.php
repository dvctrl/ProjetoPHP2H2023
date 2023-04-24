<?php
    $emp = array(
        array(1,"José", 4000),
        array(2,"Maria",5000),
        array(3,"João",3000)
    );
    echo "<pre>";
    print_r($emp);
    echo "</pre>";
?>
<?php
    $func = array(
        array(1,"Francisca",4000),
        array(2,"Ponto gê",1000),
        array(3,"Debis",1000)
    );
    echo "<pre>";
    print_r($func);
    echo "</pre>";
?>
<?php
    $emp = array(
        array(1,"José", 4000),
        array(2,"Maria",5000),
        array(3,"João",3000)
    );
    for($linha=0; $linha<3; $linha++) {
        for($coluna=0; $coluna<3; $coluna++) {
            echo $emp [$linha][$coluna]." ";
        }
        echo "<br/>";
    } 


?>