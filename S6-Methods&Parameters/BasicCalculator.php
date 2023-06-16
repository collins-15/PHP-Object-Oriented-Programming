<?php
class BasicCalculator
{
    function showResults($num1, $operation, $num2)
    {
        switch ($operation) {
            case "+":
                $result = $num1 + $num2;
                echo "The result of $num1 + $num2 is : " . $result;
                break;

            case "-":
                $result = $num1 - $num2;
                echo "The result of $num1 - $num2 is : " . $result;
                break;
            case "*":
                $result = $num1 * $num2;
                echo "The result of $num1 * $num2 is : " . $result;
                break;
            case "/":
                $result = $num1 / $num2;
                echo "The result of $num1 / $num2 is : " . $result;
                break;
            default:
                echo "This calculation cannot be done! Check our input.";

        }
    }
}
$calc1 = new BasicCalculator();
$calc1->showResults(2234, "*", 645);