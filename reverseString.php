<?php
class reverseString{
    public function __construct($value){
        $this->value = $value;
    }
    public function revString(){
        $rev = strrev($this->value);
        echo $rev ."\n";

        for($i=strlen($this->value)-1; $i>=0 ;$i--){
            echo $this->value[$i];
        }
    }
}
$rev =  new reverseString("Sajid");
$rev->revString();
?>