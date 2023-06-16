<?php
// Access both method and properties using $this
class Car
{
    // Properties
    public $color = "Red";
    public $brand = "Ferrari";
    // Methods
    // get the properties of method1
    function method1()
    {
        return "$this->color $this->brand is very fast";
    }

    function method2()
    {
        echo $this->method1();
    }
}
$ferari = new Car();
$ferari->method2();