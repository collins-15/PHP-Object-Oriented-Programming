<?php

class Message
{
    function __construct()
    {
        echo "This is a new message<br><br>";
    }
    // Create a Destructor
    function __destruct()
    {
        echo "The mesage was deleted";
    }
}
$sms = new Message();