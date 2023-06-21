<?php
class Block
{
    public $address;

    function __construct($address)
    {
        $this->address = $address;
    }
    public function printAddress()
    {
        echo "This block is at " . $this->address;
    }
}
class Apartment extends Block
{
    function __construct($block)
    {
        $this->address = $block->address;
    }
}
$myBlock = new Block("5634 Nairobi,Kenya");
$myApartment = new Apartment($myBlock);
$myApartment->printAddress();