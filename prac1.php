<?php
class pal{
    public function isPalindrome($s)
    {
        $this->cha = $s;
        $length = sizeof($this->cha);
        //var_dump($this->cha);
        echo $length;
        // Creating a Stack
        $st = new SplQueue();
    
        // Finding the mid
        $i = 0; 
        $mid = $length / 2;
        echo $mid;
    
        for ($i=0; $i < $mid-1; $i++) {
            $st->push($this->cha[$i]);
        }
        print_r($st) ;
        // Checking if the length of the string
        // is odd, if odd then neglect the
        // middle character
        if ($length % 2 != 0) {
            $i++;
        }
    
        //echo $i;
        // While not the end of the string
        while ($this->cha[$i] != '\0')
        {
            
            $ele = $st->top();
            //echo $ele;
            $st->pop();
            //print_r($st);
            echo $this->cha[$i];
        // If the characters differ then the
        // given string is not a palindrome
            if ($ele == $this->cha[$i]){
                //echo $ele;
                //echo $this->cha[$i];
                return true;
                $i++;
            }
            
        }
        return false;
    }
}

 
// Driver code
    $pal = new pal();
    $s = "madam";
 
    if ($pal->isPalindrome(str_split($s))) {
        echo "Yes";
    }
    else {
        echo "No";
    }
 
?>