<?php require_once('create-class.php'); ?>

<?php
$mike = new Employee('Mike', 25, 50000);

echo $mike->name;

echo "<h3>result of get_class(object_name) function</h3>";
echo "<p>class name of mike : " . get_class($mike) . "</p>";

echo "<h3>result of is_a(object_name, class_name) function</h3>";
echo "<p>mike is an employee: " . (is_a($mike, 'Employee') ? 'true' : 'false') . "</p>";
echo "<p>mike is a customer: " . (is_a($mike, 'Customer') ? 'true' : 'false') . "</p>";
?>
