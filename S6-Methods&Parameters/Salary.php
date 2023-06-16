<?php
/* calculate the monthly salary of an employee who might take 
   some days off and works 5 days a week, for 8 hours a day,given that
   each month has 23 working days.
   the employee earns 15Euros per hour

   */
class Salary
{

    function calculateSalary($daysOff)
    {

        $monthlySalary = (23 - $daysOff) * 8 * 15;
        echo "The salary of the Collins this month is: $monthlySalary euros";
    }

}
$juneSalary = new Salary();
$juneSalary->calculateSalary(3);