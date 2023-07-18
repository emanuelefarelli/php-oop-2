<?php

include_once __DIR__ . '/product.php';
include_once __DIR__ . '/category.php';

class house extends product{

    public $size;
    public $forOutdoor;

    function __construct(String $title,String $description,Category $category,bool $avaiable,float $price, string $size, bool $forOutdoor){
        parent::__construct($title, $description, $category, $avaiable, $price);

        $this->size = $size;
        $this->forOutdoor = $forOutdoor;

    }

    function getName(){
        return $title;
    }

    function getPrice(){
        return $price;
    }

}

?>