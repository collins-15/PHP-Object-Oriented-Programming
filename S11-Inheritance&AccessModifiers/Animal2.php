<?php
class Animal2
{
    protected $name = "Chase";

   
}
class Cat1 extends Animal2
{
    public function getName()
    {
        return $this->name;
    }
}
$cat1= new Cat1();
echo $cat1->getName();