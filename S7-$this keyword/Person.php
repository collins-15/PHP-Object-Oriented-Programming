<?php

class Person
{
    // Property
    public $name = "Collins";
    // Method
    function printName()
    {
        echo "My name is : $this->name";
    }

}
// create an object
$person1 = new Person();
$person1->printName();