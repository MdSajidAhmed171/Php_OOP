<?php
    $stack = new SplQueue();
    $stack->push(1);
    $stack->push(2);
    $stack->push(3);
    $stack->pop(); // remove the last one
    
    print_r($stack);
?>