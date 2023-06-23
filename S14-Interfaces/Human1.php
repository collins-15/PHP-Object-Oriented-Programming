<?php

interface Human
{
    public function canSpeak();
    public function canWalk();
    public function canSmell();
}

class Woman implements Human
{
    public function canSpeak()
    {
        echo " I can talk <br>";
    }

    public function canWalk()
    {
        echo " I can walk <br>";
    }

    public function canSmell()
    {
        echo " I can smell <br>";
    }
}
$woman1 = new Woman();

$woman1->canWalk();
$woman1->canSpeak();
$woman1->canSmell();