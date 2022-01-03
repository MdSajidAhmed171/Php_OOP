<?php
$s1="";
$s2="";

for ($i=1; $i<=5; $i++){
    $s1[$i] = (string)($i);
    if($i<5){
        $s2[$i] = (string)(5-$i);
    }
    
    //var_dump($s1) ;
}
   echo $s1.$s2; 
?>