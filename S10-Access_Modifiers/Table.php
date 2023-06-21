<?php

// Cannot acces Private properties/methods outside a class
class Table
{
    public $color;
    public $weight;
}

$myTable = new Table();
echo $myTable->color = 'Blue';
echo '<br>';
echo $myTable->weight = 40;