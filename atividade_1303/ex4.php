<?php
    $a=5;
    $b=4;
    $c=6;

    if ($a > $b && $c){
        if ($b > $c){
            echo "1.1 a ordem é-> ".$a.",".$b.",".$c;
        } else {
            echo "1.2 a ordem é-> ".$a.",".$c.",".$b;
        }
    }else if ($b > $a && $c){
        if ($a > $c){
            echo "2.1 a ordem é-> ".$b.",".$a.",".$c;
        } else {
            echo "2.2 a ordem é-> ".$b.",".$c.",".$a;
        }
    }
    
    
?>