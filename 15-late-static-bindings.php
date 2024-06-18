<?php
class Product{
    public static $category = 'General Category';

    public static function get_category(){
        // echo 'Product Category : '. self::$category;
        echo 'Product Category : '. static::$category;
    }
}

class Computer extends Product{
    public static $category = 'Computers';
}

Product::get_category();
echo '<br>';
Computer::get_category();
?>