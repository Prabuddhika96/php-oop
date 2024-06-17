<?php require_once('create-class.php'); ?>

<?php
$mike = new Employee('Mike', 25, 50000);
// $mike = new Employee();
// $mike->name = 'Mike';
echo $mike->name;

echo "<h3>result of get_class(object_name) function</h3>";
echo "<p>class name of mike : " . get_class($mike) . "</p>";

echo "<h3>result of is_a(object_name, class_name) function</h3>";
echo "<p>mike is an employee: " . (is_a($mike, 'Employee') ? 'true' : 'false') . "</p>";
echo "<p>mike is a customer: " . (is_a($mike, 'Customer') ? 'true' : 'false') . "</p>";

echo "<h3>result of get_class_vars(class_name) function</h3>";
$mikes_props = get_class_vars('Employee');
echo "<pre>";
print_r($mikes_props);
echo "</pre>";

echo "<h3>result of get_object_vars(object_name) function</h3>";
$mikes_props = get_object_vars($mike);
echo "<pre>";
print_r($mikes_props);
echo "</pre>";

echo "<h3>result of property_exists(object_name, property_name) function</h3>";
echo "<p>if age exists in mike : ". (property_exists($mike, 'age') ? 'true' : 'false') . "</p>";

echo "<h3>call functions in the classes</h3>";
echo "<p>employee salary : " . $mike->getSalary() . "</p>";
?>
