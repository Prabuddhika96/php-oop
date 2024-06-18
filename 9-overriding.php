<?php
class Product{
    public $name;
    public $cost_price;
    public $sales_price;

    function display(){
        echo '<b>Product Info</b><br>';
        echo 'Name : <b>' . $this->name . '</b><br>';
        echo 'Cost Price : <b>' . $this->cost_price . '</b><br>';
        echo 'Sales Price : <b>Rs ' . $this->sales_price . '</b><br>';
    }
}


class Computer extends Product{
    public $processor;
    public $ram;
    public $storage;

    function display(){
        parent::display();
        echo 'Processor : <b>' . $this->processor . '</b><br>';
        echo 'Ram : <b>' . $this->ram . '</b><br>';
        echo 'Storage : <b>' . $this->storage . '</b><br><br>';
    }
}

$general_product = new Product();
$general_product->name = "Table Fan";
$general_product->cost_price = 10000;
$general_product->sales_price = 12000;

$general_product->display();

echo "<br>";

$computer = new Computer();
$computer->name = "Dell Inspiron 15";
$computer->cost_price = 200000;
$computer->sales_price = 240000;
$computer->processor = "i5";
$computer->ram = '8GB';
$computer->storage = '1 TB';

$computer->display();
?>