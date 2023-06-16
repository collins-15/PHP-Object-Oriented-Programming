<?php
class Tree
{
    public $leavesColor;
    public $numberOfLeaves;
    // Create a constructor -with optional parameters
    function __construct($leavesColor = "", $numberOfLeaves = "")
    {
        $this->leavesColor = $leavesColor;
        $this->numberOfLeaves = $numberOfLeaves;
    }
    function describeTree()
    {
        echo "This tree has $this->numberOfLeaves $this->leavesColor leaves!!!";
    }
}
// First tree with parameters passed
$tree = new Tree("green", 4654);
$tree->describeTree();

echo "<br>";
// Second without any parameters passed
$tree1 = new Tree();
$tree1->leavesColor = "Yelow";
$tree1->numberOfLeaves = 1000;
$tree1->describeTree();