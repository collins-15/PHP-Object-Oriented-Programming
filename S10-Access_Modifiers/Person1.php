<?php

class Person1
{
    // public access modifier->property/method can be accessed from anywhere
    // The following "Public" is called access Modifer
    public $name;
    public $age;
    // by default,methods are of type public
    public function setInfo()
    {
        return " my name is .." . $this->name . " and I am " . $this->age . " years old";
    }
    public function getInfo()
    {
        echo $this->setInfo();
    }
}

$tom = new Person1();
// We can access the properties and methods from outside the class
$tom->name = "Tom";
$tom->age = 23;
echo $tom->getInfo();