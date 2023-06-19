<?php

class Person2
{
    // private access modifier->property/method can only  be accessed within the class
    // So once it is defined as private nobody can change it or access it from outside
    // So in that cas if we try to change it to private we will get an error.

    public $name;
    public $age;
    // by default,methods are of type public
    private function setInfo()
    {
        return " my name is .." . $this->name . " and I am " . $this->age . " years old";
    }
    public function getInfo()
    {
        echo $this->setInfo();
    }
}

$tom = new Person2();
// We can access the properties and methods from outside the class
$tom->name = "Tom";
$tom->age = 23;
echo $tom->getInfo();