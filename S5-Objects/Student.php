<?php
class Student{
    // Define the properties
    public $name;
    public $class;
    // methods
    function canWrite(){
        echo "can write with pen or pencil";
    }

}
// Create an object or an Instance of the class
$student1=new Student();
// Access the properties
$student1->name="Collins Mutuma";
$student1->class="F3";

echo "$student1->name is attending $student1->class and ...";

// Call the methods
$student1->canWrite();
echo "<br><br>";

// Create an object or an Instance of the class
$student2=new Student();
// Access the properties
$student2->name="Tom ";
$student2->class="F2";

echo "$student2->name is attending $student2->class and ...";

// Call the methods
$student1->canWrite();