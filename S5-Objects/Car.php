<?php
class Car
{
    // properties
    public $color = 'Red';

    // methods
    function startEngine()
    {
        echo "The car is moving...";
    }


}
// Create an object of the car class(Instance of the car class)
$car1=new Car();
// Access the properties and method using dot operator.
echo "<br>Color: ".$car1->color;
echo "<br>";

// Access the methods 
$car1->startEngine();