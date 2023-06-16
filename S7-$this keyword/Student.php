<?php

// Access both method and properties using $this

class Student
{
    // Property
    public $name = "Collins";
    // Methods
    function getName()
    {
        return $this->name;
    }
    function PresentStudent()
    {
        echo $this->getName(). " is the best student in the school";
    }
}
// Create object
$student1 = new Student();
$student1->PresentStudent();