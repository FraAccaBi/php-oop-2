<?php

class Product {
    public $description;
    public $price;
    public $imgPath;
    public $sconto;

    function __construct(String $_description, Int $_price, String $_imgPath, Int $_sconto) {
        $this->description = $_description;
        $this->price = $_price;
        $this->imgPath = $_imgPath;
        $this->sconto = $_sconto;
    }
    public function setSconto(){
        return $this->sconto;
    }
}