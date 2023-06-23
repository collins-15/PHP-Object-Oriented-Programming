<?php

abstract class Human1
{
    abstract function canTalk();

    public function canWalk()
    {
        echo "I can walk<br>";
    }
    public function canEat()
    {
        echo "I can eat<br>";
    }

}
class Man extends Human1
{
    public function canTalk()
    {
        echo "I can talk<br>";
    }

}
$man = new man;
$man->canTalk();
$man->canWalk();
$man->canEat();

// We can't creat an instance of an abstract class
// $human1= new Human();