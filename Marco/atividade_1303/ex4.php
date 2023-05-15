<?php
    $n1=5;
    $n2=6;
    $n3=4;


#o $a é o maior valor
  
    if ($n1 > $n2 && $n1 > $n3){
        if($n2 > $n3){
            echo "1.1 ordem a-b-c";
        }else{
            echo "1.2 ordem a-c-b";
        }
    }
    if ($n2 > $n1 && $n2 > $n3){
        if($n1 > $n3){
            echo "2.1 ordem b-a-c";
        }else{
            echo "2.2 ordem b-c-a";
        }
    }
    if ($n3 > $n2 && $n3 > $n1){
        if($n2 > $n1){
            echo "3.1 ordem c-b-a";
        }else{
            echo "3.2 ordem c-a-b";
        }
    }

?>