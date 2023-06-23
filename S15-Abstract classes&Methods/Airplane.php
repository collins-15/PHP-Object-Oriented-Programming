<?php
abstract class Airplane
{
    // Abstract classes can have properties too, while interfaces cannot.
    public $numberOfWings = 4;

    abstract public function canFly();
    public function canTakeOff()
    {
        echo "All airplanes can take off <br>";
    }
    public function canLand()
    {
        echo "All airplanes can Land <br>";
    }

}
class FighterPlane extends Airplane
{
    public function canFly()
    {
        echo "Fighter planes are really fast!! <br>";
    }
}
$fighterplane = new FighterPlane();

echo $fighterplane->numberOfWings;
echo "<br>";
$fighterplane->canFly();
echo "<br>";
$fighterplane->canTakeOff();
echo "<br>";
$fighterplane->canLand();