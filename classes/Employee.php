<?php
class Employee{

}

$classes = get_declared_classes();

// echo '<pre>';
// print_r($classes);
// echo '</pre>';

$class_name = 'Employee';
if(class_exists($class_name)){
    echo "{$class_name} - class exists";
}
else{
    echo "{$class_name} - class not exists";
}
?>