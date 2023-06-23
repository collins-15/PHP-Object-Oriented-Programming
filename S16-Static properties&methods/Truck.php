<?php
class Truck
{
    static public $brand = "volvo";

    static public function accelerate()
    {
        echo "Now I am increasing speed";
    }
}

// ststic methods and properties are accessible without creating an instance of the class
echo Truck::$brand;
echo "<br>";
Truck::accelerate();
