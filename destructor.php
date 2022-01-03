<?php
class Person{
    public $name ;
    public $age ;
    const NAME = "Md Sajid Ahmed";

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function print(){
        echo "name: {$this->name} and {$this->age} <br>";
    }
    public function display(){
        echo "Const name:". Person::NAME . "<br>";
    }
    public function __destruct(){
        if(!empty($this->name && $this->age)){
            echo "Save <br>";
        }
        
    }
}

class Admin extends Person {

    public $level;
    public function display(){
        echo "User: {$this-> name} level: {$this-> level} <br>";
    }

}
$p = new Person("Sajid", 23);
$ad = new Admin("Dj", 22);
$p->print();
$p->display();
$ad->print();
$ad->level = "administrator";
$ad->display();
?>