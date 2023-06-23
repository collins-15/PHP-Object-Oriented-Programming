<?php

final class Block
{
    public $address = "Kenya mpya";

}
class Apartment extends Block
{

}
$myapartment = new Apartment('');
echo $myapartment->address;