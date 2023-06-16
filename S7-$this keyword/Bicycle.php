<?php
// How to access properties inside a class using $this keyword.

class Bicycle
{
    // Properties
    public $type = "Mountain";
    public $color = "Red";
    // Method
    function giveBiycleDetails()
    {
        echo "This $this->type Bicycle has a $this->color color";
    }
}
// Create an object or Instance of a class
$bicycle1 = new Bicycle();
$bicycle1->giveBiycleDetails();