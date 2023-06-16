<?php
class Chair
{
    public $type;
    public $numberOfLegs;
    // create a constructor -with optional parameters
    function __construct($type = "", $numberOfLegs = "")
    {
        $this->type = $type;
        $this->numberOfLegs = $numberOfLegs;
    }
    function describeChair()
    {
        echo "This $this->type chair has $this->numberOfLegs legs!!";
    }

}
// case 1 ->with parameters passed
$chair1 = new Chair("modern", 4);
$chair1->describeChair();

echo "<br><br>";
$chair2 = new Chair();
$chair2->type = "Classical";
$chair2->numberOfLegs = "3";
$chair2->describeChair();