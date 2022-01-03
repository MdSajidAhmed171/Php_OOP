<?php
    $stack = new SplQueue();
    $count = 1;
    //$array
    for($i=0; $i<=9; $i++){
        
        if($count<5){
            echo $stack->push($i);
            $count++;
        }
        
    }
    print_r($stack) ;

?>