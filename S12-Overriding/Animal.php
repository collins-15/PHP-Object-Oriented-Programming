<?php

class Animal
{
    public $numberOfEyes;

    function __construct($numberOfEyes)
    {
        $this->numberOfEyes = $numberOfEyes;
    }
    function showAnimalInfo()
    {
        echo "most animals have $this->numberOfEyes eyes";
    }
}
class Cat1 extends Animal
{
    function __construct($animal)
    {
        $this->numberOfEyes = $animal->numberOfEyes;
    }
}
$myanimal = new Animal(2);

$cat1 = new Cat1($myanimal);

$cat1->showAnimalInfo();