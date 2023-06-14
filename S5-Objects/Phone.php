<?php
// Define a class
class Phone
{
    // Define properties
    public $brand;

    // Define Methods
    function sendMessage()
    {
        return "Write your message and press the button";
    }
}
// OBJECT-1
// Create an object or an Instance of that class
$phone1 = new Phone();
// Access the properties of the object
echo $phone1->brand="Oppo";
// Call the method
echo "<br>";
echo $phone1->sendMessage();
// OBJECT-2
echo "<br><br>";
// Create an object or an Instance of that class
$phone2=new Phone();
// Access the properties of the object
echo $phone2->brand="Samsung";
// Call the method
echo "<br>";
echo $phone2->sendMessage();
