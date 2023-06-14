<?php
// create a class
class Person
{
    // properties
    public $age;
    public $height;
    public $name;
    // methods
    function greeting()
    {
        return "Hello all";
    }
}
// create an object or an instance of the Person class
$person1 = new Person();
// Access the properties of the object 
echo $person1->age = 25;
echo "<br>";
echo $person1->height = "5ft", "7inches";
echo "<br>";
echo $person1->name = "Collins Mutuma";
// access the methods of the object
echo "<br>";
echo $person1->greeting();