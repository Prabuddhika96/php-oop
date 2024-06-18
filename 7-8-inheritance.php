<?php
class Product{
    public $name;
    public $cost_price;
    public $sales_price;

    function calculate_sales_price(){
        $this->sales_price = round($this->cost_price * 1.2, 2);
    }
}


class Computer extends Product{
    public $processor;
    public $ram;
    public $storage;
}

class Garment extends Product{
    public $size;
    public $color;
    public $material;
}

class Mobile extends Computer{

}

$my_product = new Computer();
$my_arr = get_object_vars($my_product);

echo "<pre>";
print_r($my_arr);
echo "</pre>";

echo 'Get parent class of Garment :<br>';
echo get_parent_class($my_product). '<br><br>';

echo 'Checking if computer is a subclass of Garment :<br>';
echo (is_subclass_of($my_product, 'Garment')? 'true' : 'false') . '<br><br>';

echo 'Checking if computer is a subclass of Product :<br>';
echo (is_subclass_of($my_product, 'Product')? 'true' : 'false') . '<br><br>';

echo 'Getting a list of class parents for Computer :<br>';
echo "<pre>";
print_r(class_parents("Computer"));
echo "</pre>";

echo 'Getting a list of class parents for Mobile :<br>';
echo "<pre>";
print_r(class_parents("Mobile"));
echo "</pre>";
?>