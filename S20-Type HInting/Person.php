<?php

declare(strict_types=1);

class Person
{
    private $name;
    private $age;

    function setInfo(string $name, int $age): void
    {
        $this->name = $name;
        $this->age = $age;
    }
    function getInfo(): string
    {
        return " My name is $this->name and I am $this->age years old!";
    }
}

$person1 = new Person();
$person1->setInfo("Collins", 21);
echo $person1->getInfo();