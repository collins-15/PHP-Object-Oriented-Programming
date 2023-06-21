<?php

class Person2
{
    public $name = "Alexander";
    // overriddden method
    public function showName()
    {
        echo "My name is $this->name";
    }

}
class Student2 extends Person2
{
    // overriding method
    public function showName()
    {
        echo "The student's name is $this->name but classmates call him alex";
    }
}
$student2 = new Student2();
$student2->showName();