<?php
class Animal3
{
    // protected access modifiers - the property/method can be accessed within
    // the class and by classes derived from that class.
    protected $name = "Sparky";
}

class Dog extends Animal3
{
    public function getAnimalName()
    {
        return "The dog's name is $this->name";
    }
}
$dog1= new Dog();
echo $dog1->getAnimalName();