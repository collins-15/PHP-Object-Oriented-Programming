<?php
abstract class Name
{

    abstract protected function sayMyName($name);

}

class myName extends Name
{
    public function sayMyName($name)
    {
        return "My name is  $name";
    }
}

$myname = new myName();

echo $myname->sayMyName("Fred");