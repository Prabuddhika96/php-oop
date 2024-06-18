<?php 
$x = 100;
$y = $x;

// copy by reference for variables
// $y = &$x;

echo "Value of x : $x <br>";
echo "Value of y : $y <br>";

$y = 200;

echo "<hr>";

echo "Value of x : $x <br>";
echo "Value of y : $y <br>";

class Product{
    public $name;
    public $price;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }
}

$product_1 = new Product('Laptop', 50000);
// copy by reference
// $product_2 = $product_1; 

// copy by value - make clone
$product_2 = clone $product_1;

echo "<hr>";
echo 'Product 1 :' . $product_1->name . ' -> ' . $product_1->price . '<br>';
echo 'Product 2 :' . $product_2->name . ' -> ' . $product_2->price . '<br>';

$product_2->name = 'Tablet';
$product_2->price = 60000;

echo "<hr>";
echo 'Product 1 :' . $product_1->name . ' -> ' . $product_1->price . '<br>';
echo 'Product 2 :' . $product_2->name . ' -> ' . $product_2->price . '<br>';
?>