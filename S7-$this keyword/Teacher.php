<?php
// Getters and Setters

class Teacher
{
    public $name = "";
    // Set methods(Setters)
    function setName($teacher_name)
    {
        $this->name = $teacher_name;
    }
    function getName()
    {
        echo "My teacher's name is :" . $this->name;
    }
}
// create an object
$myTeacher = new Teacher();
$myTeacher->setName('Collins');
$myTeacher->getName();