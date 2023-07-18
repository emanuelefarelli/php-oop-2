<?php

include_once __DIR__ . '/product.php';
include_once __DIR__ . '/category.php';

class toy extends product{
    public $size;
    public $material;

    function __construct(String $title,String $description,Category $category,bool $avaiable,float $price, string $size, string $material){
        parent::__construct($title, $description, $category, $avaiable, $price);

        $this->size = $size;
        $this->material = $material;

    }

    function getInfo(){
        return ($this->title . $this->description . $this->avaiable . $this->price . $this->size . $this->material);
    }
}

?>