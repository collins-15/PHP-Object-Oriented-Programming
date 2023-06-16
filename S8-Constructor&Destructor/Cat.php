<?php

class Cat
{
    public $color;
    public $weight;

    // Create the constructor -with parameters
    function __construct($color, $weight)
    {
        $this->color = $color;
        $this->weight = $weight;

    }
    function describeCat()
    {
        echo "This $this->color cat weights $this->weight kg";
    }
}
$cat1 = new Cat("Black", 3);
$cat1->describeCat();