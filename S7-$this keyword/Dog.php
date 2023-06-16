<?php
// How to access methods using the class with $this keyword.
class Dog
{
    // Methods
    function makeSound()
    {
        return "Wooof Wooof";
    }
    function echoSound()
    {
        echo $this->makeSound();
    }

}
$dog1=new Dog();
$dog1->echoSound();