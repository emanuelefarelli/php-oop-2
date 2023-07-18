<?php

include_once __DIR__ . '/product.php';
include_once __DIR__ . '/category.php';

class food extends product{
    public $calories;
    public $weigth;

    function __construct(String $title,String $description,Category $category,bool $avaiable,float $price, int $calories, float $weigth){
        parent::__construct($title, $description, $category, $avaiable, $price);

        $this->calories = $calories;
        $this->weigth = $weigth;

    }
}

?>