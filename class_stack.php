<?php
class stack{

    public $item = 3;
    public $size = array();
    public $point = 0;

    public function push($data){
        if($this->point >= $this->item){
            echo "Stack is overflow";
        }else{
            $this->size[$this->point] = $data;
            $this->point++;
        }
    }
    public function pop(){
        if(empty($this->size)){
            echo "Stack is Empty";
        }else{
            array_pop($this->size);
        }
    }
}
$stack = new stack();
$stack->push(13);
$stack->push(223);
$stack->push(32);
$stack->pop();

print_r($stack);
?>