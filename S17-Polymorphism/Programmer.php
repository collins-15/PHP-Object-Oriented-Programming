<?php

abstract class Programmer
{
    abstract public function SolveTheProblem();

}

class EmplyeeA extends Programmer
{
    function SolveTheProblem()
    {
        echo "I am a empolyee A";
    }
}


class EmployeeB extends Programmer
{
    function SolveTheProblem()
    {
        echo "I am a Emplyee B";
    }
}