<?php

class Fullname {
    Static public $fullname;

    static public function sayMyName($myFirstname,$myLasttname){
        self::$fullname = "My fullname is ". $myFirstname . " ". $myLasttname ." and I am in school.";
    }
}

 Fullname::sayMyName("collins","Mutuma");
 echo Fullname::$fullname;