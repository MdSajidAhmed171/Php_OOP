<?php
class Person{
    public $name ;
    public $age ;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function print(){
        echo "name: {$this->name} and {$this->age}";
    }
}
$p = new Person("Sajid", 23);

$p->print();


?>