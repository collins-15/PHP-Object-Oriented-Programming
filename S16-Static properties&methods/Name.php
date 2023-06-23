<?php

class Name{

    static public $name;

    static public function echoMyName($my_name)
    {
        self::$name = $my_name;

    }

}
Name::echoMyName("Collins");
echo Name::$name;