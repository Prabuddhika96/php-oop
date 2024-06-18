<?php

class FullTimeEmployee{
    public const EPF_RATE = 0.08;
    public $salary = 10000;

    function calc_EPF(){
        return $this->salary * self::EPF_RATE;
    }
}

$emp_1 = new FullTimeEmployee();

echo "EPF RATE of emp 1 : " . FullTimeEmployee::EPF_RATE;

echo "<br>";

echo "EPF : " .$emp_1->calc_EPF();

?>