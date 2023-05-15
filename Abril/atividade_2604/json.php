<?php
    $arr = array(1,2,3,4);
    echo json_encode($arr);

?>
<?php
    $arr = [1,2,3,4,5];
    foreach($arr as $value){
        echo $value." ";
    }

?>
<?php
    $arr = array ('v'=>'verde', 'e'=> 'verde', 'z'=> 'azul');
    foreach($arr as $key => $value){
        echo $key."=>".$value."\n";
    }
    

?>