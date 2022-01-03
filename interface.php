<?php
interface school{
    public function mySchool();
}
interface college{
    public function myCollege();
}

class Teacher implements school,college{

    public function __construct(){
        $this->mySchool();
        $this->myCollege();
    }
    public function mySchool(){
        echo "Here is your school teacher";
    }
    public function myCollege(){
        echo "Here is your college teacher";
    }
} 
class student implements school,college{

    public function __construct(){
        $this->mySchool();
        $this->myCollege();
    }
    public function mySchool(){
        echo "Here is your school student";
    }
    public function myCollege(){
        echo "Here is your college student";
    }
} 
$t = new Teacher();
$t = new student();
?>