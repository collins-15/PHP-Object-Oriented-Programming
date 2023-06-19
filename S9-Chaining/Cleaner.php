<?php

class Cleaner
{
    public $name;
    function wipeTheFloor()
    {
        echo "Please first wipe the floor";
        $this->name = "Collins";
        return $this;

    }
    function mopThefloor()
    {
        echo " and then mop it please, " . $this->name . "!";
    }

}
$cleaner1 = new cleaner();
$cleaner1->wipeTheFloor()->mopThefloor();