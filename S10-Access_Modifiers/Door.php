<?php
class Door
{
    public function open()
    {
        echo "I can open this door";
    }
    private function close()
    {
        echo "I can close this door";
    }

}
$newDoor = new Door();
$newDoor->open();
// It won't work
$newDoor->close();