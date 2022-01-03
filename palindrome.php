<?php
class findPalindrome{

    public function __construct($value){
        $this->value = $value;
    }
    public function pal(){
        $left = 0;
        $right = strlen($this->value) -1;
        $flag = 0;
        while($right>$left){
            if($this->value[$right] != $this->value[$left]){
                $flag = 1;
                break;
            }
            $left++;
            $right--;
        }
        if ($flag == 0){
            echo $this->value." is a Palindrome string.\n";
        } else {
        echo $this->value." is not a Palindrome string.\n";
        }
        
    }
}

$palObj = new findPalindrome("madram");
$palObj->pal();
//$res = $palObj->pal("madam");
//echo $palObj->flag;
// if($palObj->flag == 0){
//     echo "palindrome";
// }else{
//     echo "not palindrome";
// }

?>