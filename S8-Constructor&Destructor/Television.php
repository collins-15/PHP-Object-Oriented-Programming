<?php
class Television
{
    public $brand;
    public $dimensions;

    // Create a constructor(with no parameters)

    function __construct()
    {
        $this->brand = "Samsung";
        $this->dimensions = "55";

    }
    function printInfo()
    {
        return "This is a $this->dimensions inches of $this->brand";
    }
}
$samsung = new Television();
echo $samsung->printInfo();