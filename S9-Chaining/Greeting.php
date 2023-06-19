<?php
class Greeting
{
    function hello()
    {
        echo "Hello neighbour !";
        return $this;
    }
    function goodbye()
    {
        echo "I got to go now.Goodbye";
    }
}
$greeting = new Greeting();
$greeting->hello()->goodbye();