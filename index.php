<?php

class Product {
    public $description;
    public $price;
    public $imgPath;

    public function __construct (String $_description, Int $_price, String $_imgPath) {
        $this->description = $_description;
        $this->price = $_price;
        $this->imgPath = $_imgPath;
    }
}

