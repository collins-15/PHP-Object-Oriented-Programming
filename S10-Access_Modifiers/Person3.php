<?php
class Person3
{
    private $name;
    // A setter sets a new value for the private property
    public function setName($name)
    {
        $this->name = $name;

    }
    // A gettter returns the value of the private property
    public function getName()
    {
        return $this->name;
    }
}
$mary=new Person3();
$mary->setName('Mary');
echo $mary->getName();