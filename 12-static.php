<?php
class Employee{
    public static $employee_count = 0;

    public static function add_employee(){
        self::$employee_count++;
    }
}

class PartTimeEmployee extends Employee{

}

Employee::$employee_count = 10;

echo "Number of Employees :" . Employee::$employee_count;

// ----------------------------------------------------------------------------

echo "<br>";

Employee::add_employee();

echo "Number of Employees :" . Employee::$employee_count;

// ----------------------------------------------------------------------------

echo "<br>";

echo "Number of Employees from Part Time Employee Class :" . Employee::$employee_count;

// ----------------------------------------------------------------------------
PartTimeEmployee::$employee_count = 20;

echo "<br><br>";

echo "Number of Employees from Employee Class :" . Employee::$employee_count;

echo "<br>";

echo "Number of Employees from Part Time Employee Class :" . Employee::$employee_count;
?>