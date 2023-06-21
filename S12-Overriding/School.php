<?php

class School
{

    public $schoolName;
    public $schoolStep;

    function __construct($schoolName, $schoolStep)
    {
        $this->schoolName = $schoolName;
        $this->schoolStep = $schoolStep;

    }
    function showSchoolInfo()
    {
        echo "My school is called:  $this->schoolName <br>";
        echo "My level is : $this->schoolStep";
    }
}


class Student extends School
{
    public $studentName;
    public $studentAge;
    function __construct($studentName, $studentAge, $school)
    {
        $this->studentName = $studentName;
        $this->studentAge = $studentAge;

        $this->schoolName = $school->schoolName;
        $this->schoolStep = $school->schoolStep;

    }
    function showStudentInfo()
    {
        echo "My name is :$this->studentName <br>";
        echo "My age is :$this->studentAge <br>";
        echo "My school is called :$this->schoolName <br>";
        echo "My level is :$this->schoolStep <br>";
    }

}
$mySchool = new School("MKU", "University");

$student1 = new Student("collins", 25, $mySchool);

$student1->showStudentInfo();