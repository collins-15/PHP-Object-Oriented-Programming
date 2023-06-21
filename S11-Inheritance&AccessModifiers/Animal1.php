<?php
// Animal1 is called parent class or super class or base class

class Animal1
{
    public $name;
    public $weight;
    public function sleep()
    {
        echo "<br>I am sleeping now...";
    }
}

// Dog class is called child class or subclass or derived class
class Dog extends Animal1
{
    public function weight()
    {
        echo "<br> $this->name weighs $this->weight ";
    }
}
$dog1 = new Dog();
echo $dog1->name = "Rob";
echo "<br>";
echo $dog1->weight = 7;
$dog1->sleep();
$dog1->weight();