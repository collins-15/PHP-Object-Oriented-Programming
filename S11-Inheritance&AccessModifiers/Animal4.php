<?php
class Animal4
{
    public $name = "chase";
    public function getName()
    {
        return "the animal's name is $this->name";
    }
}
class Dog extends Animal4
{

}
$dog1 = new Dog();
echo $dog1->getName();