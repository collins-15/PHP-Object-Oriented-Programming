<?php
class Student
{
    public $name;
    public $grade;

    // create constuctor with parameters
    function __construct($name, $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
    }
    function printStudentInfo()
    {
        echo "$this->name graduated Highschool with $this->grade";
    }
}
$mike=new Student("Mike","A");
$mike->printStudentInfo();
