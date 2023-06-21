<?php
class Animal2
{
    protected $name = "Chase";

   
}
class Catt extends Animal2
{
    public function getName()
    {
        return $this->name;
    }
}
$cat1= new Catt();
echo $cat1->getName();