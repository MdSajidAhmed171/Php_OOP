<?php
abstract class school{
    public function mySchool(){
        echo "Here is your school teacher";
    }
}


class Teacher extends school{

    public function view(){
        return school::mySchool();
    }
    
} 

$t = new Teacher();
$t->view();

?>