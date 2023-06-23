<?php

class Apple
{

    static public $color = "blue";

    static public function hasTaste()
    {
        echo "Apples have great taste";

    }
}
echo Apple::$color;
echo "<br>";
Apple::hasTaste();