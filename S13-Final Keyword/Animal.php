<?php 

class Animal{
final function makeSound(){ 
    echo "OOOOO";
}
}
class Dog extends Animal{
function makeSound(){
    echo "Woof!";   //can't override because of the final keyword
}
}
$dog = new Dog();
$dog->makeSound();