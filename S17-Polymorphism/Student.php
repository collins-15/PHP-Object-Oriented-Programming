<?php
interface Student
{
    public function learnTheLesson();
}
class StudentA implements Student
{
    function learnTheLesson()
    {
        echo " Ilearn the lesson by writing it down";
    }
}
class StudentB implements Student
{
    function learnTheLesson()
    {
        echo " Ilearn the lesson by listening";
    }
}
class StudentC implements Student
{
    function learnTheLesson()
    {
        echo " Ilearn the lesson by reading only";
    }
}
