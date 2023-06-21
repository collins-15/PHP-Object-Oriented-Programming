<?php
class Person1
{
    // Overridden mehod
    public function whatAmI()
    {
        echo "I am just a person";
    }
}
class Student1 extends Person1
{
    // Overriding method
    public function whatAmI()
    {
        echo "I am just a student";
    }

}
$student1 = new Student1();
$student1->whatAmI();