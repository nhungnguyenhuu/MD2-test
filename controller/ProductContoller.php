<?php
namespace MVC\controller;

class ProductController
{
    public $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }

    public function getAll()
    {
       $products = $this->product->getAll();
        include "MVC/view/product/list.php";
    }
}