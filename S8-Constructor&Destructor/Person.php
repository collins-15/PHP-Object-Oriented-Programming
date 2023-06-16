<?php

class Person
{
    // Property
    public $name;
    public $age;
    public $height;
    // This constructor has no parameters!
    function __construct()
    {
        $this->name = 'George';
        $this->age = 22;
        $this->height = 184;
    }
    function describePerson()
    {
        echo "$this->name is $this->age years old and he is $this->height cm tall!";
    }


}

$george = new Person();
$george->describePerson();