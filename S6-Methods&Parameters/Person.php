<?php

class Person
{
    function screenMyName($name, $age)
    {
        echo "My name is $name. Am $age years old ";
    }
}
$george = new Person();
$george->screenMyName('Collins', 32);