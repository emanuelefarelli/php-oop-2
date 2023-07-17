<?php

class product{
    public $title;
    public $description;
    public $category;
    public $avaiable;
    public $price;

    function __construct(String $title,String $description,Class $category,Boolean $avaiable,float $price){
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->avaiable = $avaiable;
        $this->price = $price;
    }

    function getInfo(){
        return $title, $description, $category, $avaiable;
    }

}

?>