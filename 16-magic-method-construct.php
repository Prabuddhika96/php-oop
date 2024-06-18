<?php
class Employee
{
    public $name;
    public $age;
    public $salary;

    // public function __construct($name, $age, $salary)
    // {
    //     $this->name = $name;
    //     $this->age = $age;
    //     $this->salary = $salary;
    //     echo 'New employee created<br>';
    // }

      public function __construct($values)
    {
        $this->name = isset($values['name']) ? $values['name'] : null;
        $this->age = isset($values['age']) ? $values['age'] : null;
        $this->salary = isset($values['salary']) ? $values['salary'] : null;
        echo 'New employee created<br>';
    }
}

// $employee = new Employee('John', 25, 50000);

// using associative array
$arr = [
    'name' => 'John',
    'age' => 25,
    'salary' => 50000];

$employee = new Employee($arr);
echo 'Name: ' . $employee->name . '<br>';

    
?>