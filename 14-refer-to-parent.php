<?php
class Employee{
     public function calc_salary(){
        echo "Calculate salary...<br>";
     }
}

class SeniorEmployee extends Employee{
    public function calc_salary(){
        echo "Add aditional allowance...<br>";
        parent::calc_salary();
    }
}

$emp = new SeniorEmployee();

$emp->calc_salary();


/*

             ___________________
            |    ParentClass    |<--------------------------------------------------------------
            |___________________|                                                              |
                    |                                                                          |
            ________________________                                                           |
           |                        |                                                          |
     ______|______          ________|________                                                  |
    |   SubClass   |        |    SubClass    |<--------------------------------------------------
    |______________|        |________________|                                                  |
            |                      |                                                            |
      ______|______          ______|______                                                      |
     |  SubClass   |        |  SubClass   | <----------------                       ClassName::method()
     |_____________|        |_____________|                 |                                   |
            |                      |                        |                                   |
      ______|______          ______|______            parent::method()                          |
     |  SubClass   |        |  SubClass   |                 |                                   |
     |             |        |             |<-----------------                                   |
     |_____________|        |_____________|<-----------------------------------------------------


*/
?>