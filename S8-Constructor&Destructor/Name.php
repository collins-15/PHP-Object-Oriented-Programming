<?php
class Name
{
    public $name = "";
    function __construct($name)
    {
        $this->name = $name;
        echo "My name is $this->name <br><br>";

    }
    function __destruct()
    {
        $empty = $this->name = "";
        echo "Delete my name :" . $empty;
    }
}
$name1 = new Name("Collins");