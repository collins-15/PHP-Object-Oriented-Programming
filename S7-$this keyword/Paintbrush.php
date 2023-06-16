<?php
// How to access methods using the class with $this keyword.

class Paintbrush{
    // Methods
    function hasColor(){
        return "This paintbrush has a red color";
    }
    function showColor(){
        echo $this->hasColor();
    }
}
// Create the object
$brush1 = new Paintbrush();
$brush1->showColor();