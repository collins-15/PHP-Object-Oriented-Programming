<?php

class Factory
{
    function process1()
    {
        echo "Process 1 completed !";
        echo "<br>";
        return $this;
    }
    function process2()
    {
        echo "Process 2 completed !";
        echo "<br>";
        return $this;
    }
    function process3()
    {
        echo "Process 3 completed !";
    }
}
$factory1 = new Factory();
$factory1->process1()->process2()->process3();